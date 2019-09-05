function logofunction(){
    var mediaUploader;

        if (mediaUploader) {
          e.preventDefault();
          mediaUploader.open();
          return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
          title: 'Choose your logo',
          button: {
            text: 'Choose Picture'
          },
          multiple: false
        });

        mediaUploader.on('select', function(){
          attachment = mediaUploader.state().get('selection').first().toJSON();
          $('#prview-logo').html("<b>Your New Selected Logo: </b>" + attachment.name);
          $('#logo_id').val(attachment.url);

        });

        mediaUploader.open();
}

function firstbodysliderfunction(){
    var mediaUploader;

        if (mediaUploader) {
          e.preventDefault();
          mediaUploader.open();
          return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
          title: 'Choose your slider image',
          button: {
            text: 'Choose Picture'
          },
          multiple: false
        });

        mediaUploader.on('select', function(){
          attachment = mediaUploader.state().get('selection').first().toJSON();
          $('#prview-first-body-slider-img').html("<b>Your New Selected Image: </b>" + attachment.name);
          $('#body_slider_first_img_id').val(attachment.url);

        });

        mediaUploader.open();
}


function secondbodysliderfunction(){
    var mediaUploader;

        if (mediaUploader) {
          e.preventDefault();
          mediaUploader.open();
          return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
          title: 'Choose your slider image',
          button: {
            text: 'Choose Picture'
          },
          multiple: false
        });

        mediaUploader.on('select', function(){
          attachment = mediaUploader.state().get('selection').first().toJSON();
          $('#prview-second-body-slider-img').html("<b>Your New Selected Image: </b>" + attachment.name);
          $('#body_slider_second_img_id').val(attachment.url);

        });

        mediaUploader.open();
}


function thirdbodysliderfunction(){
    var mediaUploader;

        if (mediaUploader) {
          e.preventDefault();
          mediaUploader.open();
          return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
          title: 'Choose your slider image',
          button: {
            text: 'Choose Picture'
          },
          multiple: false
        });

        mediaUploader.on('select', function(){
          attachment = mediaUploader.state().get('selection').first().toJSON();
          $('#prview-third-body-slider-img').html("<b>Your New Selected Image: </b>" + attachment.name);
          $('#body_slider_third_img_id').val(attachment.url);

        });

        mediaUploader.open();
}

function who_we_are_first_img(firstImgId){
    var mediaUploader;

        if (mediaUploader) {
          e.preventDefault();
          mediaUploader.open();
          return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
          title: 'Choose your widget slider image',
          button: {
            text: 'Choose Picture'
          },
          multiple: false
        });

        mediaUploader.on('select', function(){
          attachment = mediaUploader.state().get('selection').first().toJSON();
          //$('#prview-third-body-slider-img').html("<b>Your New Selected Image: </b>" + attachment.name);
          $('input#'+firstImgId).val(attachment.url).trigger('change');
          $('input#'+firstImgId).focus();

        });

        mediaUploader.open();
}


function who_we_are_second_img(secondImgId){
    var mediaUploader;

        if (mediaUploader) {
          e.preventDefault();
          mediaUploader.open();
          return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
          title: 'Choose your widget slider image',
          button: {
            text: 'Choose Picture'
          },
          multiple: false
        });

        mediaUploader.on('select', function(){
          attachment = mediaUploader.state().get('selection').first().toJSON();
          //$('#prview-third-body-slider-img').html("<b>Your New Selected Image: </b>" + attachment.name);
          $('input#'+secondImgId).val(attachment.url).trigger('change');
          $('input#'+secondImgId).focus();

        });

        mediaUploader.open();
}


function who_we_are_third_img(thirdImgId){
    var mediaUploader;

        if (mediaUploader) {
          e.preventDefault();
          mediaUploader.open();
          return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
          title: 'Choose your widget slider image',
          button: {
            text: 'Choose Picture'
          },
          multiple: false
        });

        mediaUploader.on('select', function(){
          attachment = mediaUploader.state().get('selection').first().toJSON();
          $('input#'+thirdImgId).val(attachment.url).trigger('change');
          $('input#'+thirdImgId).focus();


        });

        mediaUploader.open();
}


/*awesome widget script*/

function awesome_first_img(firstImgId){
    var mediaUploader;

        if (mediaUploader) {
          e.preventDefault();
          mediaUploader.open();
          return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
          title: 'Choose your widget slider image',
          button: {
            text: 'Choose Picture'
          },
          multiple: false
        });

        mediaUploader.on('select', function(){
          attachment = mediaUploader.state().get('selection').first().toJSON();
          //$('#prview-third-body-slider-img').html("<b>Your New Selected Image: </b>" + attachment.name);
          $('input#'+firstImgId).val(attachment.url).trigger('change');
          $('input#'+firstImgId).focus();

        });

        mediaUploader.open();
}


function awesome_second_img(secondImgId){
    var mediaUploader;

        if (mediaUploader) {
          e.preventDefault();
          mediaUploader.open();
          return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
          title: 'Choose your widget slider image',
          button: {
            text: 'Choose Picture'
          },
          multiple: false
        });

        mediaUploader.on('select', function(){
          attachment = mediaUploader.state().get('selection').first().toJSON();
          //$('#prview-third-body-slider-img').html("<b>Your New Selected Image: </b>" + attachment.name);
          $('input#'+secondImgId).val(attachment.url).trigger('change');
          $('input#'+secondImgId).focus();

        });

        mediaUploader.open();
}


function awesome_third_img(thirdImgId){
    var mediaUploader;

        if (mediaUploader) {
          e.preventDefault();
          mediaUploader.open();
          return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
          title: 'Choose your widget slider image',
          button: {
            text: 'Choose Picture'
          },
          multiple: false
        });

        mediaUploader.on('select', function(){
          attachment = mediaUploader.state().get('selection').first().toJSON();
          $('input#'+thirdImgId).val(attachment.url).trigger('change');
          $('input#'+thirdImgId).focus();


        });

        mediaUploader.open();
}
