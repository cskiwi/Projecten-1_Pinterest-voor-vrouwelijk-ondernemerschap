var media = $('.type-media');
var typeText = $('#type-text');
var typeVideo = $('#type-video');
var typeImage = $('#type-image');
var typeOffer = $('#type-offer');
var addPin = $('#addPin');
var boardname = $('.boardnameinput');
var rePin = $('#rePin');



media.hide();
typeText.show();

typeText.find('textarea').wysihtml5({
    "font-styles": true,
    "emphasis": true,
    "lists": false,
    "html": false,
    "link": true,
    "image": false,
    "color": false
});
typeOffer.find('textarea').wysihtml5({
    "font-styles": true,
    "emphasis": true,
    "lists": false,
    "html": false,
    "link": true,
    "image": false,
    "color": false
});

$('.boardSelection').change(function(){
    boardname.hide();
    if($(this).val() == -1){
        boardname.show();
    }
})

$('#media-type').change(function(){
    var type = $(this).val();
    media.hide();

    switch (type) {
        case 'Tutorial':
            typeText.show();
            break;
        case 'Video':
            typeVideo.show();
            break;
        case 'Image':
            typeImage.show();
            break;
        case 'Offer':
            typeOffer.show();
            break;
        case 'Text':
        default:
            typeText.show();
            break;
    }
});

addPin.on('submit', function() {
    var formData = addPin.serializeArray();
    var errorForm = addPin.find('div#validation-errors');
    var returnvalue = false;
    $.ajax({
        url: '/Projecten-1_Pinterest-voor-vrouwelijk-ondernemerschap/public/pins/add',
        type: 'post',
        cache: false,
        async: false,
        data: formData,
        beforeSend: function() {
            errorForm.hide();
            errorForm.find("ul").empty();
        },
        success: function(data) {
            console.log('setting');

            if(data.success == false) {
                var arr = data.errors;
                $.each(arr, function(index, value){
                    if (value.length != 0){
                        errorForm.find("ul").append('<li>'+ value +'</li>');
                    }
                });
                errorForm.show();
                returnvalue = false;
            } else {
                returnvalue = true;
            }
        },
        error: function(data) {
            console.log(data);
            alert('see console');
            return false;
        }
    });
    console.log(returnvalue);
    return returnvalue;
} );



rePin.on('submit', function() {
    var formData = rePin.serializeArray();
    var errorForm = rePin.find('div#validation-errors');
    $.ajax({
        url: '/Projecten-1_Pinterest-voor-vrouwelijk-ondernemerschap/public/pins/repin',
        type: 'post',
        cache: false,
        async: false,
        data: formData,
        beforeSend: function() {
            errorForm.hide();
            errorForm.find("ul").empty();
        },
        success: function(data) {
            if(data.success == false) {
                var arr = data.errors;
                $.each(arr, function(index, value){
                    if (value.length != 0){
                        errorForm.find("ul").append('<li>'+ value +'</li>');
                    }
                });
                errorForm.show();
            } else {
                location.reload();
            }
        },
        error: function(data) {
            console.log(data);
            alert('see console');
            return false;
        }
    });
    return false;
} );

$('.repin').click(function(){
    $('#pin_id').val($(this).attr('data'));
    $('#repinModal').modal();
});