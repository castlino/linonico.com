// javascript linonico

$(document).ready(function(){
            //$('#menustrip > ul > li:first').hover(
            $('#menustrip > ul > li:eq(1) > a').hover(
                                                  function(){
                                                        $('#menustrip').css('background-image','url(/img/menucomment0.png)');
                                                        $(this).css('text-decoration', 'underline');
                                                    }
                                                , function(){
                                                        $('#menustrip').css('background-image','none');
                                                        $(this).css('text-decoration', 'none');
                                                    }
                    );
            $('#menustrip > ul > li:eq(2) > a').hover(
                                                  function(){
                                                        $('#menustrip').css('background-image','url(/img/menucomment1.png)');
                                                        $(this).css('text-decoration', 'underline');
                                                    }
                                                , function(){
                                                        $('#menustrip').css('background-image','none');
                                                        $(this).css('text-decoration', 'none');
                                                    }
                    );
            $('#menustrip > ul > li:eq(3) > a').hover(
                                                  function(){
                                                        $('#menustrip').css('background-image','url(/img/menucomment2.png)');
                                                        $(this).css('text-decoration', 'underline');
                                                    }
                                                , function(){
                                                        $('#menustrip').css('background-image','none');
                                                        $(this).css('text-decoration', 'none');
                                                    }
                    );
            var flip = 1;
            $('.add-beer-link').click(
                                    function () {
                                         $.post('/groups/add_beercomment', {name: $(this).attr('id')});
                                         //alert($(this).attr('id'));
                                         //$('.actions').toggle( flip++ % 2 == 0 );
                                    }
                     );
            $('#addcommentdiv').hide();
            $('#toggleAddComment').click(function(){
                                    if(flip==1)
                                    {
                                                flip=0;
                                                $('#addcommentdiv').slideDown();
                                                $(this).html("<a class='showhide' href='#dummy'>Hide comment form</a>");
                                    }
                                    else
                                    {
                                                flip=1;
                                                $('#addcommentdiv').slideUp();
                                                $(this).html("<a class='showhide' href='#dummy'>Show comment form</a>");
                                    }
                        });
            $('#signupdiv').hide();
            $('#toggleSignUp').click(function(){
                                    if(flip==1)
                                    {
                                                flip=0;
                                                $('#signupdiv').slideDown();
                                                $(this).html("<a class='showhide' href='#dummy'>Hide sign up form</a>");
                                    }
                                    else
                                    {
                                                flip=1;
                                                $('#signupdiv').slideUp();
                                                $(this).html("<a class='showhide' href='#dummy'><h5>Sign Up here...</h5></a>");
                                    }
                        });            
            
            // @ "/notes/viewpluscomment".
            $('#jqAddComment').click(function(){
                        
                                    $.ajax({
                                                type: "POST",
                                                url: "/comments/add",
                                                data: "data[Comment][body]="+$('#CommentBody').attr('value')
                                                       +"&data[Comment][note_id]="+$('#CommentNoteId').attr('value')
                                                       +"&data[Comment][user_id]="+$('#CommentUserId').attr('value'),
                                                success: function(msg){
                                                                        $('#addedcommentsdiv').html(msg);
                                                                        $('#CommentBody').attr('value', '');
                                                            },
                                                beforeSend: function(XMLHttpRequest){
                                                                        flip=1;
                                                                        $('#addcommentdiv').slideUp();
                                                                        $('#toggleAddComment').html("<a class='showhide' href='#dummy'>Add Comment</a>");
                                                            }
                                                });
                        
                        //alert( $('#CommentBody').attr('value') );
                        //alert( "data[Comment][body]=" + $('#CommentBody').attr('value') + "&data[Comment][note_id]="+$('#CommentNoteId').attr('value') + "&data[Comment][user_id]="+$('#CommentUserId').attr('value')    );
                        });
            //$('#waitDiv').hide();
});


//===================== Add Notes Functions =========================//
            
function UpdateNoteBody(){
            //alert($('#NoteBodyDiv :input').attr('value'));
            strNoteBody = $('#NoteBodyDiv :input').attr('value');
            $('#NoteBodyDiv').html("<p>Body</p> <input type='hidden' name='data[Note][body]' id='body' value=\""+strNoteBody+"\" /> <div id='waitDiv'></div>");
            $('#AddNoteForm').ajaxSubmit({target: '#NoteBodyDiv', url: '/notes/uploadImage', success: function(){}  });
}
    







