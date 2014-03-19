/**
 * Created by Glenn on 2/25/14.
 */

$('.photos').shapeshift({
    enableDrag: false,
    enableCrossDrop: false,
    enableResize: true,
    enableTrash: false,
    colWidth: 370
});


$('#some-textarea').wysihtml5({
    "stylesheets": []
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

var followButton = $('.followButton');
var filterBoards = $('.nav-pills');

followButton.click(function(){

    var board = $(this).parent().parent().parent().parent().parent().parent().find('.media-heading > a');
    if(followButton.hasClass('following')){
        filterBoards.find("a[href='" + board.attr('href')  + "']").remove();
    } else {
        $('<li class="" id="filter_boards"><a href="' + board.attr('href') + '">' + board.text() + '</a></li>').appendTo(filterBoards);
        fetchNewPosts();
    }
});

setInterval(function() {
    fetchNewPosts();
},1000 * 15) ; // every 15 seconds

function fetchNewPosts(){
    var added = false;
    var photos = $('.photos:not(.suggestion)');
    var latestDate = !(photos.find('.media').length > 0 ) ? null : latestd(photos.find('.media'));
    $.ajax({
        url: 'stream',
        type: 'post',
        cache: false,
        success: function(stream) {
            var newPosts = 0;
            $.each(stream, function(){
                var postDate = Date.parse($(this)[0].post.created_at);
                // console.log(latestDate + ' : ' + postDate);
                if (latestDate == null || latestDate < postDate){
                    newPosts ++;
                    console.log('adding post : ' + $(this)[0].post.title);
                    added = true;
                }
            });

            if (added){
                $('#newposts').show().text(photos.length + ' new');
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

function createPost(obj){
    console.log(obj);
    obj = obj[0];
    var thumb = $('<div class="thumbnail item" />');
    if(obj.post.type == 'text'){
        $('<div/>', {
            'text':obj.post.body
        }).appendTo(thumb);

    } else if(obj.post.type == 'photo') {
        $('<img/>', {
            'class':'img-responsive pvvoThumbImg',
            'style': 'background:url("./img/' + obj.post.body + '") no-repeat center center;'
        }).appendTo($('<a/>', {
                'class':'',
                'href': '#'
            })).appendTo(thumb);
    } else {

    }

    var caption = $('<div class="caption" />').appendTo(thumb);
    var media = $('<div/>', {
        'class':'media',
        'date': obj.post.created_at
    }).appendTo(caption);

    $('<img/>', {
        'class':'media-object',
        'src': 'http://placehold.it/50x50'
    }).appendTo($('<a/>', {
            'class':'pull-left',
            'href': '#'
        }).appendTo(media));

    var media_body = $('<div class="media-body pvvoMediaBody" />').appendTo(media);

    $('<a/>', {
        'href': './posts/detail/' +  obj.post.id,
        'text': obj.post.title
    }).appendTo($('<h5 class="media-heading" />').appendTo(media_body))

    var a_fav = $('<a class="favorite" href="#" data="' + obj.post.id +'"/>');
    var p_body = $('<p />');
    a_fav.appendTo(p_body.appendTo(media_body));


    $('<span class="label label-danger"><span class="fa fa-heart rightSpacingSmall"></span><span class="count">' + obj.favorites + ' </span></span>').appendTo(a_fav);
    $('<span class="label label-warning"><span class="fa fa-comment rightSpacingSmall"></span><span class="count">' + obj.comments + ' </span></span>').appendTo(p_body);

    return thumb;
    /*<div class="caption">
     <div class="media" date="obj.created_at">

     <a class="pull-left" href="#">
     <img class="media-object" src="http://placehold.it/50x50" alt="...">
     </a>

     <div class="media-body pvvoMediaBody" >
     <h5 class="media-heading"><a href="URL::to('/posts/detail/' . obj.id)"> obj.title</a></h5>
     <p> <a href="#" class="favorite" data="obj.id"><span class="label label-danger"><span class="fa fa-heart rightSpacingSmall"></span> <span class="count">count(obj.favorites)</span></span></a>
     <span class="label label-warning"><span class="fa fa-comment rightSpacingSmall"></span>count(obj.comments)</span>
     </p>
     </div>

     </div>
     </div>
     </div>*/
}
