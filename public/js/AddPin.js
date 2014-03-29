var media = $('.type-media');
var typeText = $('#type-text');
var typeVideo = $('#type-video');
var typeImage = $('#type-image');
var typeOffer = $('#type-offer');



media.hide();
typeText.show();
 
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


typeText.find('textarea').wysihtml5({
    "font-styles": true,
    "emphasis": true,
    "lists": false,
    "html": false,
    "link": true,
    "image": false,
    "color": false
});