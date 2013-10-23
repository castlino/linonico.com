-- MySQL dump 10.13  Distrib 5.1.69, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: linonico
-- ------------------------------------------------------
-- Server version	5.1.69

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=822 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (821,816,NULL,NULL,'delete',91,92),(820,816,NULL,NULL,'edit',89,90),(819,816,NULL,NULL,'add',87,88),(818,816,NULL,NULL,'view',85,86),(817,816,NULL,NULL,'index',83,84),(816,775,NULL,NULL,'Comments',82,93),(815,810,NULL,NULL,'delete',79,80),(814,810,NULL,NULL,'edit',77,78),(813,810,NULL,NULL,'add',75,76),(812,810,NULL,NULL,'view',73,74),(810,775,NULL,NULL,'Topics',70,81),(811,810,NULL,NULL,'index',71,72),(809,800,NULL,NULL,'delete',67,68),(808,800,NULL,NULL,'edit',65,66),(807,800,NULL,NULL,'add',63,64),(806,800,NULL,NULL,'uploadImage',61,62),(805,800,NULL,NULL,'view',59,60),(804,800,NULL,NULL,'viewpluscomment',57,58),(803,800,NULL,NULL,'index',55,56),(802,800,NULL,NULL,'dateFormatAfterFind',53,54),(801,800,NULL,NULL,'afterFind',51,52),(800,775,NULL,NULL,'Notes',50,69),(799,791,NULL,NULL,'initdb',47,48),(798,791,NULL,NULL,'delete',45,46),(797,791,NULL,NULL,'edit',43,44),(796,791,NULL,NULL,'add',41,42),(795,791,NULL,NULL,'view',39,40),(794,791,NULL,NULL,'index',37,38),(793,791,NULL,NULL,'logout',35,36),(792,791,NULL,NULL,'login',33,34),(791,775,NULL,NULL,'Users',32,49),(790,784,NULL,NULL,'delete',29,30),(789,784,NULL,NULL,'edit',27,28),(788,784,NULL,NULL,'add',25,26),(787,784,NULL,NULL,'add_beercomment',23,24),(786,784,NULL,NULL,'view',21,22),(785,784,NULL,NULL,'index',19,20),(784,775,NULL,NULL,'Groups',18,31),(783,778,NULL,NULL,'delete',15,16),(782,778,NULL,NULL,'edit',13,14),(781,778,NULL,NULL,'add',11,12),(780,778,NULL,NULL,'view',9,10),(779,778,NULL,NULL,'index',7,8),(778,775,NULL,NULL,'UsersInfos',6,17),(777,776,NULL,NULL,'display',3,4),(776,775,NULL,NULL,'Pages',2,5),(775,NULL,NULL,NULL,'controllers',1,94);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Group',3,NULL,1,4),(2,NULL,'Group',4,NULL,5,14),(3,NULL,'Group',5,NULL,15,18),(4,1,'User',3,NULL,2,3),(5,3,'User',4,NULL,16,17),(6,2,'User',5,NULL,6,7),(7,NULL,'Group',6,NULL,19,28),(15,2,'User',13,NULL,8,9),(16,2,'User',14,NULL,10,11),(17,2,'User',15,NULL,12,13),(18,7,'User',16,NULL,20,21),(19,7,'User',17,NULL,22,23),(20,7,'User',18,NULL,24,25),(21,7,'User',19,NULL,26,27);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (138,7,776,'1','1','1','1'),(137,7,793,'1','1','1','1'),(136,7,820,'1','1','1','1'),(135,7,819,'1','1','1','1'),(134,7,775,'-1','-1','-1','-1'),(133,2,776,'1','1','1','1'),(132,2,793,'1','1','1','1'),(131,2,808,'1','1','1','1'),(130,2,807,'1','1','1','1'),(129,2,820,'1','1','1','1'),(128,2,819,'1','1','1','1'),(127,2,775,'-1','-1','-1','-1'),(126,3,776,'1','1','1','1'),(125,3,793,'1','1','1','1'),(124,3,810,'1','1','1','1'),(123,3,800,'1','1','1','1'),(122,3,816,'1','1','1','1'),(121,3,775,'-1','-1','-1','-1'),(120,1,775,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,3,1,'Recursive string search is cool!!!','2009-06-16 23:25:52','2009-06-16 23:25:52'),(6,4,2,'testing..,.,','2009-06-17 00:11:27','2009-06-17 00:11:27'),(8,3,1,'adding user id automatically.','2009-06-17 00:27:33','2009-06-17 00:27:33'),(10,5,2,'i am devin.','2009-06-17 00:28:08','2009-06-17 00:28:08'),(11,4,1,'the man.','2009-06-17 12:37:39','2009-06-17 12:37:39'),(12,5,1,'the devins','2009-06-17 12:39:12','2009-06-17 12:39:12'),(13,3,1,'this is final, this will add to the comments table.','2009-06-17 22:58:47','2009-06-17 22:58:47'),(15,3,1,'A sample add comment.','2009-06-17 23:25:05','2009-06-17 23:25:05'),(18,3,1,'this was added using jquery\'s ajax function, NOT prototype\'s.','2009-06-18 18:44:13','2009-06-18 18:44:13'),(20,3,2,'This is the admin adding comment.','2009-06-22 15:52:10','2009-06-22 15:52:10'),(21,4,3,'alright, the \'br\' command worked.','2009-06-22 16:52:12','2009-06-22 16:52:12'),(22,4,3,'alright, the \'<br>\' command worked.','2009-06-22 16:52:26','2009-06-22 16:52:26'),(23,3,1,'this is a test.','2009-07-02 09:24:26','2009-07-02 09:24:26'),(24,5,1,'added by devin.','2009-07-02 09:33:54','2009-07-02 09:33:54'),(25,4,1,'Added by teyen.','2009-07-02 09:35:05','2009-07-02 09:35:05'),(26,3,4,'It did work!','2009-07-03 11:22:46','2009-07-03 11:22:46'),(27,3,4,'Next would be how to save these images in the site.','2009-07-03 11:23:08','2009-07-03 11:23:08'),(28,3,2,'test','2009-07-03 12:27:00','2009-07-03 12:27:00'),(29,3,2,'test','2009-07-03 12:27:00','2009-07-03 12:27:00'),(30,3,7,'nice, I needed this. =)','2009-07-03 15:28:33','2009-07-03 15:28:33'),(31,3,1,'asdfd','2009-07-05 10:34:06','2009-07-05 10:34:06'),(32,3,4,'nice! sweet!','2009-07-05 17:53:58','2009-07-05 17:53:58'),(33,3,9,'That is a huge image you have there LiNo. hehe!','2009-07-07 13:57:46','2009-07-07 13:57:46'),(34,4,9,'How can we not see the image if the image you\'ve posted is as big as the whole world! =)','2009-07-07 13:59:08','2009-07-07 13:59:08'),(35,3,9,'nah, that was just for the purpose of picture upload demo. =)','2009-09-28 22:56:57','2009-09-28 22:56:57'),(36,14,10,'wow, cool. =)','2009-09-28 23:36:28','2009-09-28 23:36:28'),(37,15,4,'ah, ayus...','2009-10-19 13:28:28','2009-10-19 13:28:28'),(39,3,11,'Hmm.. anyone has a better idea? =)','2009-11-05 17:15:11','2009-11-05 17:15:11'),(40,17,12,'This saved me a lot of time! Thanks...','2009-11-13 18:48:16','2009-11-13 18:48:16'),(41,3,13,'I forgot to add, to disable Joomla modules, login to administrative site then go to menu [Extensions]->[Module Manager].','2009-11-19 02:31:47','2009-11-19 02:31:47'),(42,3,3,'qwerwqe','2009-12-15 16:31:13','2009-12-15 16:31:13'),(43,3,3,'qwerwqe','2009-12-15 16:31:13','2009-12-15 16:31:13'),(44,3,4,'successfully tested my svn repo today...','2009-12-21 02:24:08','2009-12-21 02:24:08'),(45,3,17,'hmmm.,.','2010-03-02 17:10:24','2010-03-02 17:10:24'),(46,3,21,'nicwe...\n','2010-03-29 12:17:06','2010-03-29 12:17:06'),(47,3,22,'I usually use this method on controller\'s add actions.','2010-06-04 13:21:00','2010-06-04 13:21:00'),(48,3,30,'hmmm...','2010-08-11 16:07:09','2010-08-11 16:07:09'),(49,19,33,'Hi! how is the setup done for the nfs client?','2010-08-25 10:17:26','2010-08-25 10:17:26'),(50,3,33,'<script src=\"http://widgets.twimg.com/j/2/widget.js\"></script>\n<script>\nnew TWTR.Widget({\n  version: 2,\n  type: \'profile\',\n  rpp: 4,\n  interval: 6000,\n  width: 250,\n  height: 300,\n  theme: {\n    shell: {\n      background: \'#eb32eb\',\n      color: \'#ffffff\'\n    },\n    tweets: {\n      background: \'#000000\',\n      color: \'#ffffff\',\n      links: \'#4aed05\'\n    }\n  },\n  features: {\n    scrollbar: false,\n    loop: false,\n    live: false,\n    hashtags: true,\n    timestamp: true,\n    avatars: false,\n    behavior: \'all\'\n  }\n}).render().setUser(\'castlino\').start();\n</script>','2011-01-10 16:04:13','2011-01-10 16:04:13'),(51,3,28,'sdfsadfasdfsad','2011-01-23 20:22:05','2011-01-23 20:22:05');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (3,'administrators','2009-06-11 14:57:59','2009-06-11 14:57:59'),(4,'users','2009-06-11 14:58:07','2009-06-11 14:58:07'),(5,'managers','2009-06-11 14:58:28','2009-06-11 14:58:28'),(6,'viewers','2009-07-13 10:22:15','2009-07-13 10:22:15');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `resource_path` varchar(255) NOT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` VALUES (1,3,'1','Recursive String Search','Find string in files recursively through a specified directory...','/files/RecursiveStringSearch','..]#> grep  --color -r \"COUNT\" modules/\r\n   OR\r\n..]#> egrep --color -rn \" GROUP BY\" modules/','2009-06-13 01:07:25','2009-06-13 01:07:25'),(2,3,'1','Service Network Restart','restart network connections/services.','/files/ServiceNetworkRestart','..#]> service network restart','2009-06-13 01:20:21','2009-06-13 01:20:21'),(3,3,'1','The quick NOte.','a quick note test.','/quickNooote','This is a test,. <br> this should be on the next line.','2009-06-22 16:50:34','2009-06-22 16:50:34'),(4,3,'1','This is an image display test note.','Displays image in this notes area.','testimage','This is a test image.\r\nThe line below should display the image.\r\n<BR/>\r\n<img src=\'/notesimgs/testimage.png\'/>\r\n<BR/>\r\nHope this works.','2009-07-02 12:43:04','2009-09-28 23:19:21'),(7,4,'1','Add sudoer.','Add a sudo authorization to a normal user .','/sudoer','<code>..]#> cd \\etc  </code>-go to \"/etc\" directory.<br>\r\n<code>..]#> visudo  </code>OR <code>..]#> vim sudoers</code> -edit sudoer file.<br>\r\n\r\n - add \"nico ALL=(ALL)  ALL\" after the line \"root ALL=(ALL)  ALL\"(add new sudoer, nico as the username.)<br>\r\n - press ESC and type \":x\" to save.','2009-07-03 12:43:40','2010-03-11 09:40:46'),(10,3,'3','Altering 2 tables on a single action-controller','Adding data on 2 tables without leaving the current controller.','','I\'ve just solve a problem i have on my login page, where if a certain user is not yet registered, that user must be able to signup with the option to specify user informations like email, family name, etc.. Now this needs to edit at least two table, the users table and the users_info table or profile table, which ever you prefer. To do this please follow this link,  \r\n<a href=\'http://book.cakephp.org/view/84/Saving-Related-Model-Data-hasOne-hasMany-belongsTo\'>click here</a>.','2009-09-28 23:25:42','2009-11-08 00:41:15'),(12,3,'3','Setting CakePHP\'s webroot as document root.','tips on deploying CakePHP as main web page.','','&nbsp&nbsp&nbsp A CakePHP application has 3 important directories.  \"/cake\", \"/app\" and \"/vendor\". To avoid having problems in deploying, do not rename the  \"/app\" folder to anything if you want it to be your web host\'s root directory. Otherwise it will always display the <span style=\'color: blue;\'>/app</span>\'s new name to the url address.\r\n<br><br>\r\n&nbsp&nbsp&nbsp example:<br> \r\n&nbsp&nbsp If you rename \"/app\" folder to something like \"/newApp\", instead of having a url of \"http://linonico.com/users/about\", it will display \"http://linonico.com/newApp/users/about\".','2009-11-10 03:15:48','2010-08-31 00:02:52'),(9,3,'2',' Uploading Image to this Notes\' module.',' how to upload images when an image is needed to illustrate a note.','NA','To upload image just browse for the image using the buttons below and click on \'Upload File\' then wait for the form to refresh the Note body so as to reflect the path of the uploaded image. below is an example:<br/><img src=\'/notesimgs/k1aLT_07Jul2009_135657_DragonImg2.jpg\'/>\r\n<br/>\r\nSee the image now? =)','2009-07-07 13:57:11','2009-07-11 00:18:29'),(11,3,'1','Edit/Restart Apache Settings','Alter Apache settings.','','&nbsp&nbsp At the terminal execute the commands as seen below:<BR>\r\n&nbsp&nbsp <span style=\'font-family: courier;\'>vi /etc/httpd/conf/httpd.conf</span>	 <span style=\' color: #0000FF;\'><i>- edit php/apache settings</i></span>\r\n<BR>\r\n&nbsp&nbsp <span style=\'font-family: courier;\'>/etc/init.d/httpd restart</span>    <span style=\'color: #0000FF;\'><i> -  restart apache.</i></span>','2009-11-05 17:14:15','2009-11-06 18:56:11'),(13,3,'2','Joomla Column Manipulation','How to remove a column','','To remove a column in Joomla. For example the \'right\' column, just disable all modules assigned to the \'right\' column and the rest of the page will simply fill to the new gap when the \'right\' column is omitted.','2009-11-19 02:25:59','2009-11-19 02:25:59'),(14,3,'1','TAR Usage','Compressing directories/files with tar command.','','<span style=\'font-family: courier;\'>tar -czvf app.tar.gz app/</span>\r\n<span style=\' color: #0000FF;\'><i> &nbsp &nbsp &nbsp -compress to a tarball.</i></span>\r\n<br>\r\n<span style=\'font-family: courier;\'>tar -xzvf filename.tar.gz</span>\r\n<span style=\' color: #0000FF;\'><i> &nbsp &nbsp &nbsp -untar and ungzip a file to current directory.</i></span>\r\n','2009-12-22 00:23:23','2009-12-22 00:28:13'),(15,3,'4','Connect to secured router.','Basic requirments in connecting to a secured wireless router.','','Be sure to have the following ready:\r\n<span style=\'color: blue;\'>. \r\n<br/>&nbsp Wep/tkip network id.\r\n<br/>&nbsp password.\r\n<br/>&nbsp add your device\'s nic address to the router filter. </span> ','2010-01-16 09:59:41','2010-01-29 00:12:55'),(16,3,'1','Restart Apache server on Mac 10.6','How to restart Apache server on Mac 10.6','','To restart Apache server on Mac.. On the terminal/console, type: \r\n<span style=\'font-family: courier; color: blue;\'>\r\n<br/>&nbsp sudo apachectl graceful\r\n</span> ','2010-02-19 17:04:16','2010-02-19 17:07:31'),(17,3,'5','Setting iPhone App Icon','Changing iphone\'s app icon using the CodeX iPhone SDK.','','<span style=\'font-family: courier; color: blue;\'>\r\n<br/>\r\n1. Create the Icon considering the following requirements:\r\n<br/>\r\n&nbsp&nbsp&nbsp - Image must be 57x57 pixels in size.\r\n<br/>\r\n&nbsp&nbsp&nbsp - File name must be named \"icon.png\"\r\n<br/>\r\n<br/>\r\n2. Save it inside the your project\'s top folder(this should normally be along with the project file).\r\n<br/>\r\n<br/>\r\n3. Go to Menu\'s Project->Add to Project... Then select the Icon file. <span style=\'font-family: courier; color: red;\'>(This is important some simply specifies the filename at the .pList file which does nothing.)</span>\r\n<br/>\r\n<br/>\r\n4. That\'s it, rebuild your project and the icon should now be updated.\r\n</span> ','2010-03-02 16:59:32','2010-03-02 17:09:19'),(18,3,'1','Apache version','Command to determine the Apache version installed.','','<span style=\'font-family: courier; color: blue;\'>httpd -v</span>','2010-03-10 12:39:02','2010-03-10 12:39:54'),(19,3,'4','Mac OS 10.6: Starting MySQL v5.1.44','Starting MySQL from terminal in Mac OS 10.6','','if you\'re getting this error \"ERROR 2002: Can\'t connect to local MySQL server through socket \'/tmp/mysql.sock\' (2)\",  chances are you haven\'t started MySQL yet. Try the commands below:\r\n<span style=\'font-family: courier; color: blue;\'>\r\n<br/>&nbsp&nbsp&nbsp\r\ncd /usr/local/mysql;\r\n<br/>&nbsp&nbsp&nbsp\r\nsudo echo\r\n<br/>&nbsp&nbsp&nbsp\r\nsudo ./bin/mysqld_safe &\r\n</span>','2010-03-16 16:35:39','2010-03-16 16:37:48'),(20,3,'1','Finding files in linux','Find files modified at a specified time.','','<span style=\'font-family: courier; color: blue;\'>\r\nFind modified files starting 5 days ago.\r\n</span>\r\n<br/>\r\n&nbsp&nbsp&nbsp find / -mtime -5 -print\r\n<br/>\r\n<br/>\r\n<span style=\'font-family: courier; color: blue;\'>\r\nTo find files on a specific time frame. Example below shows all modified files from 3 days ago till 1 day earlier.\r\n</span>\r\n<br/>\r\n&nbsp&nbsp&nbsp find . -ctime +1 -a -ctime -3','2010-03-18 17:38:20','2010-03-18 17:52:20'),(21,3,'1','SVN Routine before editing SVN controlled file(s).','Things to do before altering SVN source controlled file(s).','','<span style=\'color: blue;\'>\r\nUpdate the whole project first to sync changes committed in the repository.\r\n</span>\r\n<br/>\r\n<span style=\'font-family: courier;\'>\r\n&nbsp&nbsp&nbsp svn update\r\n</span>\r\n<br/>\r\n<span style=\'font-style:italic; font-size: 12px; width: 500px; \' >\r\n (one thing to note about update is it doesn\'t update files that you have altered and uncommitted. If you really want to get an updated copy of a file then just delete the file first or move it to a backup copy then execute update.)\r\n</span>\r\n<br/>\r\n<br/>\r\n<span style=\'color: blue;\'>\r\nView commit Log comments for possible relevant changes.\r\n</span>\r\n<br/>\r\n<span style=\'font-family: courier;\'>\r\n&nbsp&nbsp&nbsp svn log\r\n</span>\r\n<br/>\r\n<br/>\r\n<span style=\'color: blue;\'>\r\nView your own uncommitted changes, you may have some changes that needs to be committed prior to you next coding.\r\n</span>\r\n<br/>\r\n<span style=\'font-family: courier;\'>\r\n&nbsp&nbsp&nbsp svn status\r\n</span>','2010-03-26 11:26:20','2010-03-26 11:47:23'),(22,3,'3','Get Next Auto Increment Value','cakePHP: Retrieving next auto increment value from a model before adding the another record.','','<br /><br />\r\n<span style=\'font-family: courier; color: BLACK;\'>\r\n&nbsp$findResult= $this-><span style=\'color: #FF0000;\'>MODEL</span>->find(\'first\',<br />\r\n&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp array(\'fields\'=>\'id\', \'order\'=>\'<span style=\'color: #FF0000;\'>MODEL</span>.id DESC\'));<br/>\r\n&nbsp$lastID = $findRes[\'<span style=\'color: #FF0000;\'>MODEL</span>\'][\'id\'];<br />\r\n&nbsp$nextID = $lastID + 1;\r\n</span>','2010-06-04 13:09:25','2010-06-19 01:43:22'),(23,3,'3','Clear Model Cache','Tips on changing cakePHP\'s tables','','Ever wonder changing something on the database, like adding a new table field and then manipulating it on the controller, then you thought everything is going well until you find out that the table field you just added is not updating?? Try deleting the entire /tmp/cache/model folder, then you\'re good to go.','2010-06-18 14:42:10','2010-06-18 14:45:04'),(25,3,'3','CakePHP: [this] keyword to access its child. ','How to access an html element\'s child using \"this\" keyword.','','jQuery(\"img\", this);\r\n','2010-06-24 11:04:59','2010-06-24 11:04:59'),(26,3,'1','MySQL: Get and Set a Table\'s auto_increment value.','Query mySQL table\'s status to determine its auto_increment value.','','1. <span style=\'font-family: courier; color: blue;\'>SHOW TABLE STATUS LIKE \'[tablename]\';</span><br/>\r\n2. <span style=\'font-family: courier; color: blue;\'>ALTER TABLE [tablename] auto_increment=[value]</span>;','2010-06-29 22:40:00','2010-06-29 22:43:08'),(27,3,'1','How to fix: [CentOS 5.4] Timezone database is corrupt.','Troubleshooting a webserver having a fatal error with timezone.','','<span style=\'font-family: courier; color: BLUE;\'>Problem:</span><br />If you get into trouble with your webserver saying: [<span style=\'font-family: courier; color: BLACK;\'>PHP Fatal error: date()/strftime() [function.strftime]: Timezone database is corrupt - this should *never* happen! in....</span>]\r\n<br /><br />\r\n<span style=\'font-family: courier; color: BLUE;\'>Solution:</span><br />\r\nJust reinstall timezone data. -> <span style=\'font-family: courier; color: BLACK;\'>yum install tzdata</span>','2010-07-26 17:17:53','2010-07-26 17:25:00'),(28,3,'1','SELinux:[CentOS 5.4] MySQL-PHP Remote Database script error fix.','Fixing PHP script unable to connect to remote MySQL database.','','&nbsp&nbsp If you haven\'t disabled SELinux, by default it restricts httpd/Apache to connect to a remote database. Which explains why we can connect through terminal commands but cannot when using PHP scripts.<BR /><BR />\r\n\r\n&nbsp&nbsp To fix this, type in the following to enable SELinux to allow Apache connection to remote database:<BR /><BR />\r\n\r\n&nbsp&nbsp&nbsp <span style=\'font-family: courier; color: GREEN; \'>setsebool -P httpd_can_network_connect=1</span>','2010-07-27 09:23:35','2010-07-27 09:33:01'),(29,3,'1','Subversion: Switching Repository..','How to change from one host repository to another.','','svn switch --relocate [old URL] [new URL]\r\n<BR />\r\nex.:\r\n<BR />\r\n<span style=\"font-family: courier; color: green;\">svn switch --relocate http://9289.com.au/repos/www.store.9289.com.au/trunk http://ideam.com.au/repos/9289store/trunk </span>\r\n<br />\r\n<br />\r\nSee <a href=\"http://svnbook.red-bean.com/en/1.1/re27.html\">svnbook</a> for more details on this.','2010-07-30 15:11:29','2010-07-30 15:54:53'),(30,3,'1','MySQL: importing-export mysql table.','Exporting existing table as a new table in another database.','','At the source database server, execute this terminal command:<br />\r\n<span style=\"color: black; font-family: courier;\">mysqldump -u root -p [FromDatabaseName] [tableName] > [filePath.sql]</span>\r\n<br /><br />\r\nThen copy the output file(\"filePath.sql\") to the destination database server and execute this command on the terminal:<br />\r\n<span style=\"color: black; font-family: courier;\">mysql -u root -p [ToDatabaseName] < [filePath.sql]</span>\r\n<br /><br />\r\nIf you want, you may also rename the exported table on the destination database:\r\n<br />\r\n<span style=\"color: black; font-family: courier;\">mysql -u root -p</span><br />\r\n<span style=\"color: black; font-family: courier;\">rename table tableName to newTableName;</span>','2010-08-11 15:46:02','2010-08-11 16:30:08'),(31,3,'1','Scratch','Notes to be Added later...','','//Queries below shows how to import data from a CSV file to a new table.... \r\n<br />\r\nCREATE TABLE \r\n      auspost(Pcode INT(10),\r\n              Locality VARCHAR(100),\r\n              State VARCHAR(10),\r\n              Comments VARCHAR(100),\r\n              DeliveryOffice VARCHAR(100),\r\n              PresortIndicator INT(10),\r\n              ParcelZone VARCHAR(10),\r\n              BSPnumber INT(10),\r\n              BSPname VARCHAR(100),\r\n              Category VARCHAR(100)\r\n            );\r\n<br />\r\nLOAD DATA LOCAL INFILE \'pc-full_20100224.csv\' \r\nINTO TABLE auspost \r\n    FIELDS TERMINATED BY \',\' \r\n    LINES TERMINATED BY \'\\n\';','2010-08-11 17:00:22','2010-08-11 17:00:54'),(32,3,'1','SVN: shell-agnostic way to \"svn add\" all new files...','Add all files to svn repo..','','<span style=\"color: black; font-family: courier;\">svn status | grep \"^?\" | awk -F \"      \" \'{print $2}\' | tr \"\\n\" \"\\0\" | xargs -0 svn add</span>','2010-08-11 17:13:57','2010-08-11 17:13:57'),(33,3,'1','SELinux: NFS-Apache/httpd setup','How to enable Apache to read NFS mounted directories while SELinux is enabled.','','You might need to use the command similar to one below if you are on redhat distibution like CentOS or Fedora...<BR />\r\n<!--<span style=\"color: green; font-family: courier;\">-->\r\n<pre class=\"brush: js;\">\r\n...\r\nmount -t nfs -o context=system_u:object_r:httpd_sys_content_t 192.168.1.7:/var/www/html/images /var/www/html/images\r\n</pre>\r\n<!-- </span> -->\r\n<BR /><BR />\r\nIf that still does not work, then let SELinux allow Apache to read on the mounted directory..<BR />\r\n<pre class=\"brush: js;\">\r\nsetsebool -P httpd_use_nfs on\r\nOR\r\nsudo /usr/sbin/setsebool -P httpd_use_nfs on</pre>\r\n<br />\r\n<br />\r\n<br />\r\n<span style=\"color: #C0C0C0; font-family: tahoma;\">References:</span><br />\r\n<a href=\"http://wiki.centos.org/TipsAndTricks/SelinuxBooleans\">http://wiki.centos.org/TipsAndTricks/Selinux...</a>\r\n<br />\r\n<a href=\"http://www.redhat.com/docs/manuals/enterprise/RHEL-5-manual/en-US/RHEL510/Deployment_Guide/rhlcommon-section-0097.html\">http://www.redhat.com/docs/manuals/enterprise/RHEL-5...</a>\r\n<br />\r\n<a href=\"http://www.linuxconfig.org/HowTo_configure_NFS\">http://www.linuxconfig.org/HowTo_configure_NFS</a>\r\n','2010-08-13 14:57:43','2011-01-07 13:05:30'),(34,3,'1','Linux How-To: Add user','Add linux user and specify password','','Execute the following commands on the terminal...\r\n<BR /><BR />\r\n<span style=\"font-family: courier; color: GREEN;\"> \r\nadduser [uname]\r\n</span>\r\n<BR />\r\n... then change the user password\r\n<BR />\r\n<span style=\"font-family: courier; color: GREEN;\"> \r\npasswd [uname]\r\n<BR />\r\n</span>\r\n<span style=\"font-family: courier; font-style: italic; color: BLACK;\">\r\n<BR />\r\n&nbsp&nbsp&nbsp   Changing password for user [uname].\r\n<BR />\r\n&nbsp&nbsp&nbsp   New UNIX password:  [*****]\r\n<BR />\r\n&nbsp&nbsp&nbsp   Retype new UNIX password: [*****]\r\n<BR />\r\npasswd: all authentication tokens updated successfully.\r\n</span>','2010-08-20 10:21:51','2010-08-20 10:26:26'),(35,3,'1','Samba: Sharing Files between Fedora 12 and Windows 7...','How to set up and configure samba to share files between Fedora 12 and Windows 7 in a wireless WPA2 network.','','First of all, ensure network connectivity...<br />\r\n  - Because I need to map my linux drive to windows, I need to setup a static ip to my wireless port in my Fedora 12 desktop. To do this I edited my wpa_supplicant. as follows:<br />\r\n   @ /etc/sysconfig/wpa_supplicant file, the following lines should be present...<br/>\r\nINTERFACES=\"-iwlan0\"<br/>\r\nDRIVERS=\"-Dwext\"<br/>\r\nOTHER_ARGS=\"-f /var/log/wpa_supplicant.log\"<br/>\r\n    @  /etc/wpa_supplicant/wpa_supplicant.conf<br/>\r\nctrl_interface=/var/run/wpa_supplicant<br/>\r\nctrl_interface_group=0<br/>\r\neapol_version=1<br/>\r\nap_scan=1<br/>\r\nfast_reauth=1<br/>\r\nnetwork={<br/>\r\n        scan_ssid=1<br/>\r\n        key_mgmt=WPA-PSK<br/>\r\n        proto=WPA RSN<br/>\r\n        pairwise=CCMP TKIP<br/>\r\n        group=CCMP TKIP WEP104 WEP40<br/>\r\n}<br/>\r\n','2010-08-25 10:45:01','2010-08-25 10:45:01'),(36,3,'1','Mount Bind','How to mount a directory just like the symbolic link but without exposing the parent directories.','','Syntax:<br />\r\n<span style=\'font-family: courier; color: blue;\'>mount --bind [mountPath] [PathToMount]</span><br /><br />\r\ne.g.:<br />\r\n<span style=\'font-family: courier; color: green;\'>\r\nmount --bind /var/www/prod/mydr/dev.mydr.com.au/webroot/img/emailcamp/ /home/emailcamp/emailcamp_bind\r\n</span>','2010-10-02 06:17:43','2010-10-19 16:50:26'),(37,3,'1','Tip: Search and Remove file/folder recursively.','Remove a file/folder recursively using \'find\' command.','','Ever wonder how to remove svn folders in your project? Since SVN stores \".svn\" folders on each folder in your projects, you can remover them using the commands below...\r\n<BR /><BR />\r\n<pre class=\"brush: js;\">\r\nfind ./ -name \".svn\" -exec rm -Rvf {} \\;\r\noR\r\nfind ./ -name \".svn\" | xargs rm -Rvf\r\n</pre>','2010-10-02 06:22:52','2011-02-21 09:12:51'),(38,3,'1','SVN: How to fix Obstructed changes.','Fixing Obstructed(\"~\") changes in  SVN.','','- Move the obstucted file to a temporary location and delete all \".svn\" files and directories on it. <br />\r\n- run <span style=\'font-family: courier; color: green;\'>svn rm [obstucted path]</span>. <br />\r\n- run <span style=\'font-family: courier; color: green;\'>svn cleanup</span>. <br />\r\n- run <span style=\'font-family: courier; color: green;\'>svn commit -m \"...\"</span>. <br />\r\n- run <span style=\'font-family: courier; color: green;\'>svn update</span>. <br />\r\n- then finally move back the obstructed file/directory. Update/Commit if necessary.\r\n','2010-11-05 10:31:33','2010-11-05 10:33:09'),(39,3,'1','Terminal: \"du\" Usage...','Get Total sizes in the current directory.','','du --max-depth=1 -h','2010-11-09 14:21:28','2010-11-09 14:21:28'),(40,3,'1','SELinux: Relabelling a file/directory','Relabelling a file/directory to allow httpd to access files/directories with SELinux enforced.','','<span style=\'color:green; font-family: courier;\'>$ chcon -R --type=httpd_sys_content_t dev_cakemydr/</span>\r\n<br />\r\n<br />\r\n<br />\r\nReferences:<br />\r\n&nbsp&nbsp&nbsp&nbsp\r\n<a href=\"http://wiki.centos.org/HowTos/SELinux#head-0f6390ddacfab39ee973ed8018a32212c2a02199\" > Wiki Centos </a>\r\n<br />\r\n&nbsp&nbsp&nbsp&nbsp\r\n<a href=\"http://www.centos.org/docs/5/html/Deployment_Guide-en-US/rhlcommon-chapter-0017.html#sec-sel-usercontrol\" > Centos-SELinux </a>','2010-11-09 16:24:53','2010-11-09 16:29:36'),(41,3,'2','MySQL: View table status and Edit auto-increment','How to view table status to see details like auto-increment value and how to change them.','','<pre class=\"brush: js;\">\r\nSHOW TABLE STATUS LIKE \"[table_name]\"\r\nALTER TABLE [table_name] AUTO_INCREMENT = 100;\r\n</pre>\r\n\r\n<br />\r\n<br />\r\nReferences:<br />\r\n&nbsp&nbsp&nbsp&nbsp\r\n<a href=\"http://dev.mysql.com/doc/refman/5.1/en/show-table-status.html\" >12.4.5.38. SHOW TABLE STATUS Syntax</a>\r\n<br />\r\n&nbsp&nbsp&nbsp&nbsp\r\n<a href=\"http://dev.mysql.com/doc/refman/5.0/en/example-auto-increment.html\" >3.6.9. Using AUTO_INCREMENT</a>','2010-11-18 11:28:44','2010-12-15 12:50:13'),(43,3,'1','CPU/Mem info','Command to get CPU or memory info','','<pre class=\"brush: js;\">\r\ncat /proc/cpuinfo\r\ncat /proc/meminfo\r\nlspci\r\n</pre>','2011-01-11 16:07:59','2011-01-11 16:11:21'),(42,3,'1','Vi/Vim: search and replace.','Search and replace strings in vi/vim..','','To repl [old_string] with [new_string]...\r\n<BR /><BR />\r\n<pre class=\"brush: js;\">\r\n\r\n:%s/[old_string]/[new_string]/gc\r\n\r\n</pre>\r\n\r\n<BR /><BR />\r\n\'g\' option is for global, \'c\' option is for vi/vim to ask for confirmation for every matched string.\r\n<BR />\r\n<BR />\r\nReferences:\r\n<BR />\r\n<a href=\"http://vim.wikia.com/wiki/Search_and_replace\">http://vim.wikia.com/wiki/Search_and_replace</a>','2010-11-24 12:17:54','2010-12-15 12:48:21'),(44,3,'1','SSH Public/Private Keys','Enable secure ssh login using public/private keys.','','First, create a public/private key pair on the client that you will use to connect to the server (you will need to do this from each client machine from which you connect): \r\n\r\n<pre class=\"brush: js;\">\r\n$ ssh-keygen -t rsa -b 4096\r\n</pre>\r\n<p class=\"notebody\">\r\nThis will create two files in your (hidden) ~/.ssh directory called id_rsa and id_rsa.pub. id_rsa is your private key and id_rsa.pub is your public key. \r\n<br/><br/>\r\nNow set permissions on your private key:\r\n</p>\r\n<pre class=\"brush: js;\">\r\n$ chmod 700 ~/.ssh\r\n$ chmod 600 ~/.ssh/id_rsa \r\n</pre> \r\n<p class=\"notebody\">\r\nCopy the public key (id_rsa.pub) to the server and install it to the authorized_keys list: </p>\r\n<pre class=\"brush: js;\">\r\n$ cat id_rsa.pub >> ~/.ssh/authorized_keys\r\n</pre> \r\n<p class=\"notebody\">\r\nNote: once you\'ve imported the public key, you can delete it from the server.\r\n<br /><br/>\r\nand finally set file permissions on the server: \r\n<p/>\r\n<pre class=\"brush: js;\">\r\n$ chmod 700 ~/.ssh\r\n$ chmod 600 ~/.ssh/authorized_keys\r\n</pre>\r\n<br/><br/><br/>\r\n<p class=\"notebody\"><span style=\"font-weight: bold; font-style: italic;\">References...</span><br />\r\n<a href=\"http://wiki.centos.org/HowTos/Network/SecuringSSH#head-9c5717fe7f9bb26332c9d67571200f8c1e4324bc\" >http://wiki.centos.org/HowTos/Network/SecuringSSH</a></p>','2011-01-17 11:11:31','2013-09-17 23:23:24'),(47,3,'1','phpMyAdmin in HTTPS','Force SSL/https port when accessing \"phpMyAdmin\"','','<pre class=\"brush: js;\">\r\nOptions +FollowSymLinks\r\nRewriteEngine On\r\nRewriteCond %{HTTPS} off\r\nRewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI}\r\n</pre>','2011-02-18 09:45:54','2011-02-18 10:18:54'),(46,3,'1','CentOS: security and SELinux','Command prompt gui for selinux/security settings.','','<pre class=\"brush: js;\">\r\n/usr/bin/system-config-securitylevel\r\nOr\r\n/usr/bin/system-config-securitylevel-tui\r\n</pre>','2011-02-15 11:47:52','2011-02-15 11:49:19'),(48,3,'1','Find time with days range and remove.','The example below finds all files within the same directory from 7 days ago to 3 days ago and deletes them...','','<pre class=\"brush: js;\">\r\nfind . -ctime +3 -a -ctime -7 -exec rm {} \\;\r\n</pre>','2011-02-21 09:10:26','2011-03-02 08:54:31'),(49,3,'1','MySQL : Add new user with privileges.','Add a user account having full privilege to one table only.','','<span style=\"color: black;\">Add user...</span>\r\n<pre class=\"brush: js;\">\r\nmysql>  create user leo@localhost identified by \'i@mNumber4\';\r\n</pre>\r\n<br />\r\n<span style=\"color: black;\">Assign privileges...</span>\r\n<pre class=\"brush: js;\">\r\nmysql>  grant all privileges on mo_dev.* to leo@localhost with grant option;\r\n</pre>','2011-03-07 09:21:59','2011-03-07 09:24:42'),(50,3,'1','SVN: --username','Change SVN\'s default user as saved in linux profile.','','$ svn commit --username [your_uname] -m \"[commit_notes.]\" [changed_file]\r\n','2011-04-11 13:32:14','2011-04-11 13:32:14');
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` VALUES (1,'Linux HOW-TOs','2009-06-13 01:02:57','2009-06-13 01:02:57'),(2,'Web Development','2009-06-13 01:03:23','2009-06-13 01:03:23'),(3,'CakePHP tiPs','2009-09-28 23:14:06','2009-09-28 23:14:06'),(4,'Networking','2010-01-16 09:53:49','2010-01-16 09:53:49'),(5,'iPhone Development','2010-03-02 16:55:06','2010-03-02 16:55:06');
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'lino','49ef164e993d9387266e84f67453ffbf7304fa7b',3,'2009-06-11 14:59:44','2010-11-22 15:35:37'),(4,'teyen','cc4a18022669fb6515cc154249b4332bcc1bef68',5,'2009-06-11 14:59:55','2009-06-17 14:55:31'),(5,'devin','57a71ae8dd22cedd75e317a2a4fcff4628bd34ba',4,'2009-06-11 15:00:08','2009-06-17 14:55:40'),(14,'mia','72c79c33ec9188fd580d3e364cfd91adc9575934',4,'2009-09-28 23:34:45','2010-03-11 09:41:40'),(13,'dani','92b2d848b05ab2d81e73e82375834c5f272b9313',4,'2009-09-28 22:41:39','2009-09-28 22:53:08'),(15,'niki','67b3a4f8e9ff612fd4aa3fda22974212cb53f32e',4,'2009-10-19 13:27:44','2009-10-19 13:27:44'),(16,'jethro','558e498f1bfc561a64bec912004a12fe3622623f',6,'2009-11-05 01:47:41','2009-11-05 01:47:41'),(17,'bryan','92b734b9ac7097eb10b122e1a753e84a0da93aa9',6,'2009-11-13 18:46:23','2009-11-13 18:46:23'),(18,'test','5d4f4d9961aba56ca9ea818994bd301ff8b8aeb9',6,'2009-12-30 14:27:41','2009-12-30 14:27:41'),(19,'xzyra','3234fe6637ed9e684ad87da7dcfaeb5500a75d6f',6,'2010-08-25 10:16:04','2010-08-25 10:16:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_infos`
--

DROP TABLE IF EXISTS `users_infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_infos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_infos`
--

LOCK TABLES `users_infos` WRITE;
/*!40000 ALTER TABLE `users_infos` DISABLE KEYS */;
INSERT INTO `users_infos` VALUES (1,13,'dani@yahoo.com','Danilo','castro','2009-09-28 22:41:39','2009-09-28 22:41:39'),(2,14,'mia@msn.com','Mia Angela','Manuel','2009-09-28 23:34:45','2009-09-28 23:34:45'),(3,15,'niki@yahoo.com','nikikita','nakita','2009-10-19 13:27:44','2009-10-19 13:27:44'),(4,16,'jethro@mercuryret.com.au','jethro','marks','2009-11-05 01:47:41','2009-11-05 01:47:41'),(5,17,'bryan@yahoo.com','bryan','staki','2009-11-13 18:46:23','2009-11-13 18:46:23'),(6,18,'test@test.com','tester','tester','2009-12-30 14:27:41','2009-12-30 14:27:41'),(7,19,'xzyra@yahoo.com','xzyra','castro','2010-08-25 10:16:04','2010-08-25 10:16:04');
/*!40000 ALTER TABLE `users_infos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-09-20 22:56:22
