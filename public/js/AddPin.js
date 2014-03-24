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