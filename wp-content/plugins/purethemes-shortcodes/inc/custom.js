jQuery(document).ready(function ($) {

    $(document.body).on('click', '.ptsc-duplicate', function () {
        $('#purethemes-popup tbody.multi:last').clone().insertAfter('#purethemes-popup tbody.multi:last');
    });




    $(document.body).on('change', '#shortcode-type', function () {
        var type = $(this).val();
        var data = {
            action: 'form_generate',
            shortcode: type
        };
        $('#purethemes-spinner').fadeIn();

        $.post(ajaxurl, data, function (response) {
            $('#form-container-ajax .form-table').fadeOut('500', function () {
                $('#form-container-ajax .form-table').after().html(response).fadeIn('400', function () {
                    ptshotcodes.resizeTB();
                    $('#purethemes-spinner').fadeOut();
                    $('#form-container-ajax .wp-color-picker-field').wpColorPicker();
                });
            })
        });
        if( $('#shortcode-type').hasClass('notloaded')) {
            ptshotcodes.load();
            $('#shortcode-type').removeClass('notloaded');
        }

        $('#purethemes-popup-form').on( 'click', '.ptsc-upload-images', function( event ){
            event.preventDefault();
            var frame;
            var imgIdInput = $('.ptsc-img-ids' ),
            
            to = $(this);
           

            // If the media frame already exists, reopen it.
            if ( frame ) {
              frame.open();
              return;
            }
            
            // Create a new media frame
            frame = wp.media({
              title: 'Select or Upload Media Of Your Chosen Persuasion',
              button: {
                text: 'Use this media'
              },
              multiple: 'add'  // Set to true to allow multiple files to be selected
            });

            
            // When an image is selected in the media frame...
            frame.on( 'select', function() {
              
              // Get media attachment details from the frame state
                var ids = [];
                var selection = frame.state().get('selection');
                selection.map( function( attachment ) {
                    attachment = attachment.toJSON();
                    ids.push(attachment.id);
                      // Do something with attachment.id and/or attachment.url here
                });
         
              // Send the attachment id to our hidden input
              imgIdInput.val( ids.join(",") );

            });

           /* frame.on('close',function() {
                imgContainer = "";
            });*/

            // Finally, open the modal on click
            frame.open();

          });
    });

    var ptshotcodes = {
        gensc: function () { // function to build shortcode based on fields
            var tag = $('#shortcode-type').val();
            var output;
            if ($('tbody.multi').length > 0) {
                var wrapper = $('#wrapper_tag').val();
                output = "[" + wrapper + "]";

                $('tbody.multi').each(function() {
                    var row = $(this);
                    var content = $('.ptsc-content',this).val();
                    output += "[" + tag + "";
                    $('.ptsc', this).each(function () {
                        var name = $(this).attr('name'),
                        val = $(this).val();
                        output += " " + name + '="' + val + "\" ";
                    });
                    if ($('#content_flag').length > 0) {
                        output += "]" + content + "[/" + tag + "]";
                    } else {
                        output += "]";
                    }
                });
                output += "[/" + wrapper + "]";
            } else {
                output = "[" + tag + "";
                $('.ptsc').each(function () {
                    var name = $(this).attr('name'),
                    val = $(this).val();
                    output += " " + name + '="' + val + "\" ";
                });
                var content = $('.ptsc-content').val();
                if ($('#content_flag').length > 0) {
                    output += "]" + content + "[/" + tag + "]";
                } else {
                    output += "]";
                }
            }
            return output;
        },
/*onsubmit: function( e ) {
    // Insert content when the window form is submitted
    editor.insertContent( 'Title: ' + e.data.title );
}*/
        load: function () {
            popup = $('#purethemes-popup'),
            form = $('#form-container-ajax', popup),
            $('.ptsc-insert', form).click(function () {
                if (tinyMCE) {
                    var out = "";
                    var out = ptshotcodes.gensc();
                    if( $('#content').is(':visible') ) {
                        $('#content').val(some_content);
                    } else {
                        var editor = tinyMCE.get("content");
                        editor.insertContent(out);    
                    }
                    //tinymce.activeEditor.insertContent(out);
                    var out = "";
                    tb_remove();

                }
            });
            
            // resize TB
            ptshotcodes.resizeTB();
            $(window).resize(function () {
                ptshotcodes.resizeTB();
            });

        },
        resizeTB: function () {
            
            var tbAjax = $('#TB_ajaxContent'),
            tbWindow = $('#TB_window'),
            ptsc_popup = $('#purethemes-popup');

            ptsc_popup.css({
                maxHeight: $(window).height()*0.8
            })

            tbWindow.css({
                height: ptsc_popup.outerHeight() + 100 + 'px',
                width: ptsc_popup.outerWidth()+15 + 'px',
                marginLeft: -(ptsc_popup.outerWidth() / 2) + 'px'
            });
      

            tbAjax.css({
                paddingTop: 0,
                paddingLeft: 0,
                paddingRight: 0,
                height: (tbWindow.outerHeight() - 47)+ 'px',
                overflow: 'auto', // IMPORTANT
                width: '600px'
            });
        }
    }

});

        //TODO BIND CHANGE LIVE