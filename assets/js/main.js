$(document)
.on("submit", "form.js-register", function(event){
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);
    var pw1 = $("input[name='password1']", _form).val();
    var pw2 = $("input[name='password2']", _form).val();
    if(pw1 != pw2){
        _error
            .text("The 'Password' entry does not equal the 'Confirm Password enty.  Please try again.")
            .show();
        return false;
    }
    var dataObj = {
        email: $("input[type='email']", _form).val(),
        password: $("input[name='password1']", _form).val()
    }
    //alert('onclick event fired');
    if(dataObj.email.length < 6) {
        _error
            .text("Please enter a valid email address.")
            .show();
        return false;
    }  else if (dataObj.password.length < 3)  {
        _error
            .text("Please enter a password that is at least 3 characters long.")
            .show();
        return false;
    }
    _error.hide();
    console.log(dataObj);
    //alert('onclick event: dataObj logged to console');
    //alert('Start the AJAX call!');
    $.ajax({
        type: 'POST',
        url: '/ajax/register.php',
        data: dataObj,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(data){
        // whatever data is
        //alert('the AJAX call returned!');
        //console.log(data);
        //alert('onclick event: ajaxDone');
        if(data.redirect !== undefined){
            window.location = data.redirect;
        } else if(data.error !== undefined) {
            _error
                .text(data.error)
                .show();
        }
    })
    .fail(function ajaxFailed(e){
        // This failed
        _error
            .text("AJAX call FAILED on register!")
            .show();
        console.log(e);
        //alert('onclick event: ajaxFailed');
    })
    .always(function ajaxAlwaysDoThis(data){
        //Always do
        console.log("the 'always' block executing");
        //alert('onclick event: ajaxAlways');
    })
   // alert('form was submitted');
    return false;  // returning false is important in what happens next in response to the 'submit' event
})
.on("submit", "form.js-login", function(event){
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);
    var dataObj = {
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val()
    }
    //alert('onclick event fired');
    if(dataObj.email.length < 6) {
        _error
            .text("Please enter a valid email address.")
            .show();
        return false;
    }  else if (dataObj.password.length < 3)  {
        _error
            .text("Please enter a password that is at least 3 characters long.")
            .show();
        return false;
    }
    _error.hide();
    console.log(dataObj);
    //alert('onclick event: dataObj logged to console');
    //alert('Start the AJAX call!');
    $.ajax({
        type: 'POST',
        url: '/ajax/login.php',
        data: dataObj,
        dataType: 'json',
        async: true,
    })
        .done(function ajaxDone(data){
            // whatever data is
            //alert('the AJAX call returned!');
            //console.log(data);
            //alert('onclick event: ajaxDone');
            if(data.redirect !== undefined){
                window.location = data.redirect;
            } else if(data.error !== undefined) {
                _error
                    .text(data.error)
                    .show();
            }
        })
        .fail(function ajaxFailed(e){
            // This failed
            _error
                .text("AJAX call FAILED on login!")
                .show();
            console.log(e);
            //alert('onclick event: ajaxFailed');
        })
        .always(function ajaxAlwaysDoThis(data){
            //Always do
            console.log("the 'always' block executing");
            //alert('onclick event: ajaxAlways');
        })
    // alert('form was submitted');
    return false;  // returning false is important in what happens next in response to the 'submit' event
})