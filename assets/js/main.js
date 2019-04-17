$(document)
.on("submit", "form.js-register", function(event){
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);
    var dataObj = {
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val()
    }
    if(dataObj.email.length < 6) {
        _error
            .text("Please enter a valid email address.")
            .show();
        return false;
    }  else if (dataObj.password.length < 6)  {
        _error
            .text("Please enter a password that is at least 6 characters long.")
            .show();
        return false;
    }
    _error.hide();
    console.log(dataObj);
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
        console.log(data);
        // if(data.redirect !== undefined){
        //     window.location = data.redirect;
        // }
    })
    .fail(function ajaxFailed(e){
        // This failed
        console.log(e);
    })
    .always(function ajaxAlwaysDoThis(data){
        //Always do
        console.log("the 'always' block executing");
    })
   // alert('form was submitted');
    return false;  // returning false is important in what happens next in response to the 'submit' event
})