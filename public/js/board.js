/**
 * Created by Glenn on 2/25/14.
 */
var followForm = $( '#follow-form' );
var followButton = $('#followButton');
followForm.on( 'submit', function() {
    event.preventDefault();
    if(followButton.hasClass('following')){
        $.ajax({
            url: '../unfollow',
            type: 'post',
            cache: false,
            data: followForm.serialize(),
            success: function() {
                followButton.val('follow').removeClass('following');
            },
            error: function() {
                alert('Something went to wrong.Please Try again later...');
            }
        });

    } else {
        $.ajax({
            url: '../follow',
            type: 'post',
            cache: false,
            data: followForm.serialize(),
            success: function(data) {
                followButton.val('unfollow').addClass('following');
            },
            error: function() {
                alert('Something went to wrong.Please Try again later...');
            }
        });
    }
    return false;
} );
