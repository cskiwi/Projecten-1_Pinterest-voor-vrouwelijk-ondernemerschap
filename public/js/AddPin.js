$('.type-media').hide();
$('#type-text').show();
 
$('#media-type').change(function(){
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
            $('#type-image').show();
            break;
        case 'Offer':
            $('#type-offer').show();
            break;
        case 'Text':
        default:
            $('#type-tutorial').show();
            break;
    }
});


$('.type-media').find('textarea').wysihtml5({
    "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
    "emphasis": true, //Italics, bold, etc. Default true
    "lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
    "html": false, //Button which allows you to edit the generated HTML. Default false
    "link": true, //Button to insert a link. Default true
    "image": true, //Button to insert an image. Default true,
    "color": false //Button to change color of font
});