/**
 * Created by Glenn on 3/24/14.
 */

$('#Media-Type').change(function(){
    var type = $(this).val();
    $('.type-media').hide();

    console.log(type);
    switch (type) {
        case 'Tutorial':
            $('#type-tutorial').show();
            break;
        case 'Video':
            $('#type-video').show();
            break;
        case 'Image':
            $('#type-imgage').show();
            break;
        case 'Offer':
            $('#type-offer').show();
            break;
        case 'Text':
        default:
            $('#type-text').show();
            break;
    }
});


$('.type-media').find('textarea').wysihtml5({
    "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
    "emphasis": true, //Italics, bold, etc. Default true
    "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
    "html": false, //Button which allows you to edit the generated HTML. Default false
    "link": true, //Button to insert a link. Default true
    "image": true, //Button to insert an image. Default true,
    "color": false //Button to change color of font
});