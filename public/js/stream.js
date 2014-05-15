/**
 * Created by Glenn on 2/25/14.
 */

$('.photos').shapeshift({
    enableDrag: false,
    enableCrossDrop: false,
    enableResize: true,
    enableTrash: false,
    colWidth: 250
});

$('.hoverContainer').mouseover(function(event) {
	var h = $(this).height();
	$(this).find(".hoverCaption").css("line-height", h +"px");
});

$('.favorite').click(function(event) {
    event.preventDefault();
    var clickID = $(this).attr('data');
    var count = $('.favorite[data=' + clickID + '] > span.count');
    $.ajax({
        url: '/Projecten-1_Pinterest-voor-vrouwelijk-ondernemerschap/public/pins/favorite',
        type: 'post',
        cache: false,
        data: { id: clickID },
        success: function(data) {
            if (data.like) {
                count.text(parseInt(count.text())-1);
                $('.favorite[data=' + clickID + ']').find('span').removeClass('pvvoPink');
            } else{
                count.text(parseInt(count.text())+1);
                $('.favorite[data=' + clickID + ']').find('span').addClass('pvvoPink');

            }
        },
        error: function() {
            alert('Something went to wrong.Please Try again later...');
        }
    });
    return false;
} );

var followButton = $('.followButton');

followButton.click(function(){
    location.reload();
});

setInterval(function() {
    fetchNewPosts();
},1000 * 15) ; // every 15 seconds

function fetchNewPosts(){
    var added = false;
    var photos = $('.photos:not(.suggestion)');
    var latestDate = !(photos.find('.item').length > 0 ) ? null : latestd(photos.find('.item'));
    $.ajax({
        url: '/Projecten-1_Pinterest-voor-vrouwelijk-ondernemerschap/public/stream',
        type: 'post',
        cache: false,
        success: function(stream) {
            var newPosts = 0;
            $.each(stream, function(){
                var pinDate = Date.parse($(this)[0].pin.created_at);
                // console.log(latestDate + ' : ' + pinDate);
                if (latestDate == null || latestDate < pinDate){
                    newPosts ++;
                    // console.log('adding pin : ' + $(this)[0].pin.title);
                    added = true;
                }
            });

            if (added){
                $('#newpins').show().text(newPosts + ' new');
                $('.suggestion').remove();
                $('.photos').shapeshift({
                    enableDrag: false,
                    enableCrossDrop: false,
                    enableResize: true,
                    enableTrash: false});
                added = false;
            }
        }
    });
}

function latestd(selector) {
    var max=null;
    $(selector).each(function() {
        var date = Date.parse($(this).attr('date'));
        if ((max===null) || (date > max)) { max = date; }
    });
    return max;
}