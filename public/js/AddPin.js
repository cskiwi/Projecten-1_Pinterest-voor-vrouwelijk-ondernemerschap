var media = $('.type-media');
var typeText = $('#type-text');
var typeVideo = $('#type-video');
var typeImage = $('#type-image');
var typeOffer = $('#type-offer');
var addPin = $('#addPin');

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



$('#media-type').change(function(){
    var type = $(this).val();
    media.hide();

    console.log(type);
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
    event.preventDefault();
    var errorForm = addPin.find('div#validation-errors');
    $.ajax({
        url: '../public/posts/add',
        type: 'post',
        cache: false,
        data: addPin.serialize(),
        beforeSend: function() {
            errorForm.hide();
            errorForm.find("ul").empty();
        },
        success: function(data) {
            if(data.success == false) {
                var arr = data.errors;
                console.log(arr);
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
        error: function() {
            alert('Something went to wrong.Please Try again later...');
        }
    });
    return false;
} );


