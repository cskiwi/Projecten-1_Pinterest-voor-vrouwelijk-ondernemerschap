/**
 * Created by Glenn on 2/05/14.
 */

$('.favorite').click(function(event) {
    event.preventDefault();
    var clickID = $(this).attr('data');
    var count = $('#fav-count');

    $.ajax({
        url: '/Projecten-1_Pinterest-voor-vrouwelijk-ondernemerschap/public/pins/favorite',
        type: 'post',
        cache: false,
        data: { id: clickID },
        success: function(data) {
            console.log(data);
            if (data.like) {
                count.text(parseInt(count.text())-1);
                $('#favorited').hide();
                $('#not-favorited').show();
            } else{
                count.text(parseInt(count.text())+1);
                $('#favorited').show();
                $('#not-favorited').hide();
            }
        },
        error: function() {
            alert('Something went to wrong.Please Try again later...');
        }
    });
    return false;
} );