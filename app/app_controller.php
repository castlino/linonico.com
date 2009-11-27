<?php
/* SVN FILE: $Id: app_controller.php 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 * Short description for file.
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Short description for class.
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
    var $components = array('Acl', 'Auth');
    var $helpers = array('Html', 'Form', 'Javascript', 'Ajax');

    function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'comments', 'action' => 'add');

        //*
        // Create Acl by using AclComponent($this->Acl..)
        //$this->Acl->Aco->create(array('parent_id' => null, 'alias' => 'controllers'));
        //$this->Acl->Aco->save();
        
        // Let AuthComponent know of the existence of the root node.
        $this->Auth->actionPath = 'controllers/';

        //*        
        // Uncomment line below to auto build/rebuild acos.
        //$this->buildAcl();
        
        // Keep PagesController::display() public.
        $this->Auth->allowedActions = array('display');
        
        // Initializations for user auth.
        $this->set('uname', $this->Auth->user('username'));
        
        if($this->Auth->user('username'))
            $this->set('strLogInOut', 'logout');
        else
            $this->set('strLogInOut', 'login');
    }
    
    
    
/**
 * Rebuild the Acl based on the current controllers in the application
 *
 * @return void
 */
    function buildAcl() {
        $log = array();
 
        $aco =& $this->Acl->Aco;
        $root = $aco->node('controllers');
        if (!$root) {
            $aco->create(array('parent_id' => null, 'model' => null, 'alias' => 'controllers'));
            $root = $aco->save();
            $root['Aco']['id'] = $aco->id; 
            $log[] = 'Created Aco node for controllers';
        } else {
            $root = $root[0];
        }   
 
        App::import('Core', 'File');
        $Controllers = Configure::listObjects('controller');
        $appIndex = array_search('App', $Controllers);
        if ($appIndex !== false ) {
            unset($Controllers[$appIndex]);
        }
        $baseMethods = get_class_methods('Controller');
        $baseMethods[] = 'buildAcl';
 
        // For enabling access to existing plugins for aco/acl to use. LiNo.
        $Plugins = $this->_get_plugin_controller_names();
        $Controllers = array_merge($Controllers, $Plugins);

        // look at each controller in app/controllers
        foreach ($Controllers as $ctrlName) {
            App::import('Controller', $ctrlName);
            $ctrlclass = $ctrlName . 'Controller';
            $methods = get_class_methods($ctrlclass);
 
            // find / make controller node
            $controllerNode = $aco->node('controllers/'.$ctrlName);
            if (!$controllerNode) {
                $aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $ctrlName));
                $controllerNode = $aco->save();
                $controllerNode['Aco']['id'] = $aco->id;
                $log[] = 'Created Aco node for '.$ctrlName;
            } else {
                $controllerNode = $controllerNode[0];
            }
 
            //clean the methods. to remove those in Controller and private actions.
            foreach ($methods as $k => $method) {
                if (strpos($method, '_', 0) === 0) {
                    unset($methods[$k]);
                    continue;
                }
                if (in_array($method, $baseMethods)) {
                    unset($methods[$k]);
                    continue;
                }
                $methodNode = $aco->node('controllers/'.$ctrlName.'/'.$method);
                if (!$methodNode) {
                    $aco->create(array('parent_id' => $controllerNode['Aco']['id'], 'model' => null, 'alias' => $method));
                    $methodNode = $aco->save();
                    $log[] = 'Created Aco node for '. $method;
                }
            }
        }
        debug($log);
    }

    /**
     * Get the names of the plugin controllers ...
     * 
     * This function will get an array of the plugin controller names, and
     * also makes sure the controllers are available for us to get the 
     * method names by doing an App::import for each plugin controller.
     *
     * @return array of plugin names.
     *
     */
    function _get_plugin_controller_names(){
        App::import('Core', 'File', 'Folder');
        $paths = Configure::getInstance();
        $folder =& new Folder();
        // Change directory to the plugins
        $folder->cd(APP.'plugins');
        // Get a list of the files that have a file name that ends
        // with controller.php
        $files = $folder->findRecursive('.*_controller\.php');
        // Get the list of plugins
        $Plugins = Configure::listObjects('plugin');

        // Loop through the controllers we found in the plugins directory
        foreach($files as $f => $fileName)
        {
            // Get the base file name
            $file = basename($fileName);

            // Get the controller name
            $file = Inflector::camelize(substr($file, 0, strlen($file)-strlen('_controller.php')));

            // Loop through the plugins
            foreach($Plugins as $pluginName){
                if (preg_match('/^'.$pluginName.'/', $file)){
                    // First get rid of the App controller for the plugin
                    // We do this because the app controller is never called
                    // directly ...
                    if (preg_match('/^'.$pluginName.'App/', $file)){
                        unset($files[$f]);
                    } else {
                                    if (!App::import('Controller', $pluginName.'.'.$file))
                                    {
                                        debug('Error importing '.$file.' for plugin '.$pluginName);
                                    }

                        /// Now prepend the Plugin name ...
                        // This is required to allow us to fetch the method names.
                        $files[$f] = $file;
                    }
                    break;
                }
            }
        }

        return $files;
    }
    
    
    function _rand_str($length = 5, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890'){
	    // Length of character list
	    $chars_length = (strlen($chars) - 1);
	
	    // Start our string
	    $string = $chars{rand(0, $chars_length)};
	   
	    // Generate random string
	    for ($i = 1; $i < $length; $i = strlen($string))
	    {
		// Grab a random character from our list
		$r = $chars{rand(0, $chars_length)};
	       
		// Make sure the same two characters don't appear next to each other
		if ($r != $string{$i - 1}) $string .=  $r;
	    }
	   
	    // Return the string
	    return $string;
    }

}
?>