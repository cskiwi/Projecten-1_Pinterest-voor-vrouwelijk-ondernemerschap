/**
 * Created by Glenn on 2/22/14.
 */

var loginForm = $( '#login-form' );
var registerForm = $( '#register-form' );

loginForm.on( 'submit', function() {
    event.preventDefault();
    var errorForm = loginForm.find('div#validation-errors');
    $.ajax({
        url: 'admin/login',
        type: 'post',
        cache: false,
        data: loginForm.serialize(),
        beforeSend: function() {
            errorForm.hide();
            errorForm.find("ul").empty();
        },
        success: function(data) {
            if(data.success == false) {
                var arr = data.errors;
                $.each(arr, function(index, value)                {
                    if (value.length != 0)
                    {
                        errorForm.find("ul").append('<li>'+ value +'</li>');
                    }
                });
                errorForm.show();
            } else {
                location.reload();
            }
        },
        error: function() {
            alert('Something went to wrong.Please Try again later...');
        }
    });
    return false;
} );


registerForm.on( 'submit', function() {
    event.preventDefault();
    var errorForm = registerForm.find('div#validation-errors');
    $.ajax({
        url: 'admin/register',
        type: 'post',
        cache: false,
        data: registerForm.serialize(),
        beforeSend: function() {
            errorForm.hide();
            errorForm.find("ul").empty();
        },
        success: function(data) {
            if(data.success == false) {
                var arr = data.errors;
                $.each(arr, function(index, value)                {
                    if (value.length != 0)
                    {
                        errorForm.find("ul").append('<li>'+ value +'</li>');
                    }
                });
                errorForm.show();
            } else {
                location.reload();
            }
        },
        error: function() {
            alert('Something went to wrong.Please Try again later...');
        }
    });
    return false;
} );
