/**
 * Created by Glenn on 2/25/14.
 */

$('.photos').shapeshift({
    enableDrag: false,
    enableCrossDrop: false,
    enableResize: true,
    enableTrash: false
});


$('.favorite').click(function() {
    event.preventDefault();
    var clickID = $(this).attr('data');
    var count = $('.favorite[data=' + clickID + '] > span > span.count');
    $.ajax({
        url: 'posts/favorite',
        type: 'post',
        cache: false,
        data: { id: clickID },
        success: function(data) {
            console.log(data);
            if (data.like) {
                count.text(parseInt(count.text())-1);
            } else{
                count.text(parseInt(count.text())+1);

            }
        },
        error: function() {
            alert('Something went to wrong.Please Try again later...');
        }
    });
    return false;
} );

setInterval(function() {
    var latest = latestd($('.media'));
    $.ajax({
        url: 'stream',
        type: 'post',
        cache: false,
        success: function(stream) {
            $.each(stream, function(){
                if (latest < Date.parse($(this)[0].created_at)){
                    console.log('adding');
                }
            });
        }
    });
    // console.log(stream);
    // console.log('interval');
    // console.log(latestd($('.media')));
    // console.log();

},1000 * 5); // 1000 * 60 * 1); // every minute

function latestd(selector) {
    var max=null;
    $(selector).each(function() {
        var date = Date.parse($(this).attr('date'));
        if ((max===null) || (date > max)) { max = date; }
    });
    return max;
}
