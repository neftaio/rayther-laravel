$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

$('#cform').on('valid', function (e) {
  // Get data from form
    var name = $("input[name=name]").val();
    var email = $("input[name=email]").val();
    var phone = $("input[name=phone]").val();
    var cartype = $("input[name=cartype]").val();
    var message = $("input[name=message]").val();

    $(".custompbc").css("display", "block");
    $(".custompb").animate({width:"70%"});
    
  // Ajax submit
    $.ajax({
        url: '/enviarmensaje',
        data: {
            name: name,
            email: email,
            phone: phone,
            cartype: cartype,
            message: message
        },
        type: 'POST',
        success: function (response) {
            if (response) {
                // if correct response then show affirmative message
                $(".custompb").animate({width:"100%"});
                $('#form-cu-container').html(
                    "<div class='row'><div class='mean_title2 cf-title'>Tu Mensaje Ha Sido Enviado Exitosamente</div></div>"
                )
            }
        },
        error: function (error) {
            console.log(error);
        }
    });

})