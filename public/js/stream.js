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
