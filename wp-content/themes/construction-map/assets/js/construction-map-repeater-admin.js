jQuery(document).ready(function($){

    var construction_map_upload;
    var construction_map_selector;
    function construction_map_add_file(event, selector) {

        var upload = $(".uploaded-file"), frame;
        var $el = $(this);
        construction_map_selector = selector;

        event.preventDefault();

        // If the media frame already exists, reopen it.
        if ( construction_map_upload ) {
            construction_map_upload.open();
        } else {
            // Create the media frame.
            construction_map_upload = wp.media.frames.construction_map_upload =  wp.media({
                // Set the title of the modal.
                title: $el.data('choose'),

                // Customize the submit button.
                button: {
                    // Set the text of the button.
                    text: $el.data('update'),
                    // Tell the button not to close the modal, since we're
                    // going to refresh the page when the image is selected.
                    close: false
                }
            });

            // When an image is selected, run a callback.
            construction_map_upload.on( 'select', function() {
                // Grab the selected attachment.
                var attachment = construction_map_upload.state().get('selection').first();
                construction_map_upload.close();
                construction_map_selector.find('.upload').val(attachment.attributes.url);
                if ( attachment.attributes.type == 'image' ) {
                    construction_map_selector.find('.screenshot').empty().hide().append('<img src="' + attachment.attributes.url + '"><a class="remove-image">'+ construction_map_remove.remove +'</a>').slideDown('fast');
                }
                construction_map_selector.find('.upload-button-wdgt').unbind().addClass('remove-file').removeClass('upload-button-wdgt').val(construction_map_remove.remove);
                construction_map_selector.find('.of-background-properties').slideDown();
                construction_map_selector.find('.remove-image, .remove-file').on('click', function() {
                    construction_map_remove_file( $(this).parents('.section') );
                });
            });
        }
        // Finally, open the modal.
        construction_map_upload.open();
    }

    function construction_map_remove_file(selector) {
        selector.find('.remove-image').hide();
        selector.find('.upload').val('');
        selector.find('.of-background-properties').hide();
        selector.find('.screenshot').slideUp();
        selector.find('.remove-file').unbind().addClass('upload-button-wdgt').removeClass('remove-file').val(construction_map_remove.upload);
        if ( $('.section-upload .upload-notice').length > 0 ) {
            $('.upload-button-wdgt').remove();
        }
        selector.find('.upload-button-wdgt').on('click', function(event) {
            construction_map_add_file(event, $(this).parents('.section'));

        });
    }

    $('body').on('click','.remove-image, .remove-file', function() {
        construction_map_remove_file( $(this).parents('.section') );
    });

    $(document).on('click', '.upload-button-wdgt', function( event ) {
        construction_map_add_file(event, $(this).parents('.section'));
    });

    /**
     * Repeater Fields
     */

    function construction_map_refresh_repeater_values(){
        $(".construction_map-repeater-field-control-wrap").each(function(){

            var values = [];
            var $this = $(this);

            $this.find(".construction_map-repeater-field-control").each(function(){
                var valueToPush = {};

                $(this).find('[data-name]').each(function(){
                    var dataName = $(this).attr('data-name');
                    var dataValue = $(this).val();
                    valueToPush[dataName] = dataValue;
                });

                values.push(valueToPush);
            });

            $this.next('.construction_map-repeater-collector').val(JSON.stringify(values)).trigger('change');
        });
    }

    $('#customize-theme-controls').on('click','.construction_map-repeater-field-title',function(){
        $(this).next().slideToggle();
        $(this).closest('.construction_map-repeater-field-control').toggleClass('expanded');
    });

    $('#customize-theme-controls').on('click', '.construction_map-repeater-field-close', function(){
        $(this).closest('.construction_map-repeater-fields').slideUp();;
        $(this).closest('.construction_map-repeater-field-control').toggleClass('expanded');
    });

    $("body").on("click",'.construction_map-add-control-field', function(){

        var $this = $(this).parent();
        if(typeof $this != 'undefined') {

            var field = $this.find(".construction_map-repeater-field-control:first").clone();
            if(typeof field != 'undefined'){

                field.find("input[type='text'][data-name]").each(function(){
                    var defaultValue = $(this).attr('data-default');
                    $(this).val(defaultValue);
                });

                field.find("textarea[data-name]").each(function(){
                    var defaultValue = $(this).attr('data-default');
                    $(this).val(defaultValue);
                });

                field.find("select[data-name]").each(function(){
                    var defaultValue = $(this).attr('data-default');
                    $(this).val(defaultValue);
                });

                field.find(".radio-labels input[type='radio']").each(function(){
                    var defaultValue = $(this).closest('.radio-labels').next('input[data-name]').attr('data-default');
                    $(this).closest('.radio-labels').next('input[data-name]').val(defaultValue);

                    if($(this).val() == defaultValue){
                        $(this).prop('checked',true);
                    }else{
                        $(this).prop('checked',false);
                    }
                });

                field.find(".selector-labels label").each(function(){
                    var defaultValue = $(this).closest('.selector-labels').next('input[data-name]').attr('data-default');
                    var dataVal = $(this).attr('data-val');
                    $(this).closest('.selector-labels').next('input[data-name]').val(defaultValue);

                    if(defaultValue == dataVal){
                        $(this).addClass('selector-selected');
                    }else{
                        $(this).removeClass('selector-selected');
                    }
                });

                field.find('.range-input').each(function(){
                    var $dis = $(this);
                    $dis.removeClass('ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all').empty();
                    var defaultValue = parseFloat($dis.attr('data-defaultvalue'));
                    $dis.siblings(".range-input-selector").val(defaultValue);
                    $dis.slider({
                        range: "min",
                        value: parseFloat($dis.attr('data-defaultvalue')),
                        min: parseFloat($dis.attr('data-min')),
                        max: parseFloat($dis.attr('data-max')),
                        step: parseFloat($dis.attr('data-step')),
                        slide: function( event, ui ) {
                            $dis.siblings(".range-input-selector").val(ui.value );
                            construction_map_refresh_repeater_values();
                        }
                    });
                });

                field.find('.onoffswitch').each(function(){
                    var defaultValue = $(this).next('input[data-name]').attr('data-default');
                    $(this).next('input[data-name]').val(defaultValue);
                    if(defaultValue == 'on'){
                        $(this).addClass('switch-on');
                    }else{
                        $(this).removeClass('switch-on');
                    }
                });


                field.find(".attachment-media-view").each(function(){
                    var defaultValue = $(this).find('input[data-name]').attr('data-default');
                    $(this).find('input[data-name]').val(defaultValue);
                    if(defaultValue){
                        $(this).find(".thumbnail-image").html('<img src="'+defaultValue+'"/>').prev('.placeholder').addClass('hidden');
                    }else{
                        $(this).find(".thumbnail-image").html('').prev('.placeholder').removeClass('hidden');
                    }
                });

                field.find(".construction_map-icon-list").each(function(){
                    var defaultValue = $(this).next('input[data-name]').attr('data-default');
                    $(this).next('input[data-name]').val(defaultValue);
                    $(this).prev('.construction_map-selected-icon').children('i').attr('class','').addClass(defaultValue);

                    $(this).find('li').each(function(){
                        var icon_class = $(this).find('i').attr('class');
                        if(defaultValue == icon_class ){
                            $(this).addClass('icon-active');
                        }else{
                            $(this).removeClass('icon-active');
                        }
                    });
                });

                field.find(".construction_map-multi-category-list").each(function(){
                    var defaultValue = $(this).next('input[data-name]').attr('data-default');
                    $(this).next('input[data-name]').val(defaultValue);

                    $(this).find('input[type="checkbox"]').each(function(){
                        if($(this).val() == defaultValue){
                            $(this).prop('checked',true);
                        }else{
                            $(this).prop('checked',false);
                        }
                    });
                });

                field.find('.construction_map-fields').show();

                $this.find('.construction_map-repeater-field-control-wrap').append(field);

                field.addClass('expanded').find('.construction_map-repeater-fields').show();
                $('.accordion-section-content').animate({ scrollTop: $this.height() }, 1000);
                construction_map_refresh_repeater_values();
            }

        }
        return false;
    });

    $("#customize-theme-controls").on("click", ".construction_map-repeater-field-remove",function(){
        if( typeof	$(this).parent() != 'undefined'){
            $(this).closest('.construction_map-repeater-field-control').slideUp('normal', function(){
                $(this).remove();
                construction_map_refresh_repeater_values();
            });

        }
        return false;
    });

    $("#customize-theme-controls").on('keyup change', '[data-name]',function(){
        construction_map_refresh_repeater_values();
        return false;
    });

    $("#customize-theme-controls").on('change', 'input[type="checkbox"][data-name]',function(){
        if($(this).is(":checked")){
            $(this).val('yes');
        }else{
            $(this).val('no');
        }
        construction_map_refresh_repeater_values();
        return false;
    });

    /*Drag and drop to change order*/
    $(".construction_map-repeater-field-control-wrap").sortable({
        orientation: "vertical",
        update: function( event, ui ) {
            construction_map_refresh_repeater_values();
        }
    });

    // Set all variables to be used in scope
    var frame;

    // ADD IMAGE LINK
    $('.customize-control-repeater').on( 'click', '.construction_map-upload-button', function( event ){
        event.preventDefault();

        var imgContainer = $(this).closest('.construction_map-fields-wrap').find( '.thumbnail-image'),
            placeholder = $(this).closest('.construction_map-fields-wrap').find( '.placeholder'),
            imgIdInput = $(this).siblings('.upload-id');

        // Create a new media frame
        frame = wp.media({
            title: 'Select or Upload Image',
            button: {
                text: 'Use Image'
            },
            multiple: false  // Set to true to allow multiple files to be selected
        });

        // When an image is selected in the media frame...
        frame.on( 'select', function() {

            // Get media attachment details from the frame state
            var attachment = frame.state().get('selection').first().toJSON();

            // Send the attachment URL to our custom image input field.
            imgContainer.html( '<img src="'+attachment.url+'" style="max-width:100%;"/>' );
            placeholder.addClass('hidden');

            // Send the attachment id to our hidden input
            imgIdInput.val( attachment.url ).trigger('change');

        });

        // Finally, open the modal on click
        frame.open();
    });


    // DELETE IMAGE LINK
    $('.customize-control-repeater').on( 'click', '.construction_map-delete-button', function( event ){

        event.preventDefault();
        var imgContainer = $(this).closest('.construction_map-fields-wrap').find( '.thumbnail-image'),
            placeholder = $(this).closest('.construction_map-fields-wrap').find( '.placeholder'),
            imgIdInput = $(this).siblings('.upload-id');

        // Clear out the preview image
        imgContainer.find('img').remove();
        placeholder.removeClass('hidden');

        // Delete the image id from the hidden input
        imgIdInput.val( '' ).trigger('change');

    });



    $('body').on('click','.selector-labels label', function(){
        var $this = $(this);
        var value = $this.attr('data-val');
        $this.siblings().removeClass('selector-selected');
        $this.addClass('selector-selected');
        $this.closest('.selector-labels').next('input').val(value).trigger('change');
    });

    $('body').on('change','.construction_map-type-radio input[type="radio"]', function(){
        var $this = $(this);
        $this.parent('label').siblings('label').find('input[type="radio"]').prop('checked',false);
        var value = $this.closest('.radio-labels').find('input[type="radio"]:checked').val();
        $this.closest('.radio-labels').next('input').val(value).trigger('change');
    });

    $('body').on('click', '.onoffswitch', function(){
        var $this = $(this);
        if($this.hasClass('switch-on')){
            $(this).removeClass('switch-on');
            $this.next('input').val('off').trigger('change')
        }else{
            $(this).addClass('switch-on');
            $this.next('input').val('on').trigger('change')
        }
    });

    $('.range-input').each(function(){
        var $this = $(this);
        $this.slider({
            range: "min",
            value: parseFloat($this.attr('data-value')),
            min: parseFloat($this.attr('data-min')),
            max: parseFloat($this.attr('data-max')),
            step: parseFloat($this.attr('data-step')),
            slide: function( event, ui ) {
                $this.siblings(".range-input-selector").val(ui.value );
                construction_map_refresh_repeater_values();
            }
        });
    });

    $('body').on('click', '.construction_map-icon-list li', function(){
        var icon_class = $(this).find('i').attr('class');
        $(this).addClass('icon-active').siblings().removeClass('icon-active');
        $(this).parent('.construction_map-icon-list').prev('.construction_map-selected-icon').children('i').attr('class','').addClass(icon_class);
        $(this).parent('.construction_map-icon-list').next('input').val(icon_class).trigger('change');
        construction_map_refresh_repeater_values();
    });

    $('body').on('click', '.construction_map-selected-icon', function(){
        $(this).next().slideToggle();
    });

    //MultiCheck box Control JS
    $( 'body' ).on( 'change', '.construction_map-type-multicategory input[type="checkbox"]' , function() {

        var checkbox_values = $( this ).parents( '.construction_map-type-multicategory' ).find( 'input[type="checkbox"]:checked' ).map(function(){
            return $( this ).val();
        }).get().join( ',' );

        $( this ).parents( '.construction_map-type-multicategory' ).find( 'input[type="hidden"]' ).val( checkbox_values ).trigger( 'change' );
        construction_map_refresh_repeater_values();
    });

    $('body').on( 'click', '.vl-bottom-block-layout label[data-val]', function(){
        if( $(this).attr('data-val') == 'style2' ){
            $(this).closest('.construction_map-repeater-fields').find('.vl-bottom-block-cat2, .vl-bottom-block-cat3').fadeOut();
        }else{
            $(this).closest('.construction_map-repeater-fields').find('.vl-bottom-block-cat1, .vl-bottom-block-cat2, .vl-bottom-block-cat3').fadeIn();
        }
    });

    $('.vl-bottom-block-layout').each(function(){
        if( $(this).find('input[type="hidden"]').val() == 'style2' ){
            $(this).closest('.construction_map-repeater-fields').find('.vl-bottom-block-cat2, .vl-bottom-block-cat3').fadeOut();
        }else{
            $(this).closest('.construction_map-repeater-fields').find('.vl-bottom-block-cat1, .vl-bottom-block-cat2, .vl-bottom-block-cat2').fadeIn();
        }
    });
    /******for pulling multiple categories ***/
// Holds the status of whether or not the rest of the code should be run
    /**
     * Multiple checkboxes
     */
    $( '.customize-control-checkbox-multiple input[type="checkbox"]' ).on( 'change', function() {
        checkbox_values = $( this ).parents( '.customize-control' ).find( 'input[type="checkbox"]:checked' ).map(
            function() {
                return this.value;
            }
        ).get().join( ',' );

        $( this ).parents( '.customize-control' ).find( 'input[type="hidden"]' ).val( checkbox_values ).trigger( 'change' );
    });



});




