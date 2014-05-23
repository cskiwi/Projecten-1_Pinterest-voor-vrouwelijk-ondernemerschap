/**
 * Created by Glenn on 2/25/14.
 */
var followForm = $( '.follow-form' );
followForm.on( 'submit', function(event) {

    event.preventDefault();

    var followButton = $(this).find('.followButton');

    if(followButton.hasClass('following')){
        console.log('following');
        $.ajax({
            url: followForm.attr('target') + '/unfollow',
            type: 'post',
            cache: false,
            data: $(this).serialize(),
            success: function() {
                followButton.val('follow').removeClass('following');
            }
        });

    } else {
        $.ajax({
            url: followForm.attr('target') + '/follow',
            type: 'post',
            cache: false,
            data: $(this).serialize(),
            success: function() {
                followButton.val('unfollow').addClass('following');
            }
        });
    }
    return false;
} );
