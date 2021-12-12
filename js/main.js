/*Авторизизация*/

$('.login-btn').click(function (e) {
    e.preventDefault();
    $(`input`).removeClass('error');

    let login=$('input[name="login"]').val(),
         password=$('input[name="passwoed"]').val();

    $.ajax({
       url: 'vendor/signin.php',
        type: 'POST',
        dataType: 'json',
        data:{
           login: login,
            password: password
        },
        success (data){
           if (data.status){
               document.location.href= '/profile.php';
           }
           else {
               if (data.type ===1){
                    data.fields.forEach(function (field){
                        $(`input[name="${field}"]`).addClass('error')
                    });
               }

               $('.msg').removeClass('none').text(data.message);
           }

        }
    });
});

/*
Аватарка с поля
 */

let avatar = false;

$('input[name="avatar"]').change(function (e) {
    avatar= e.target.files[0];
})


/*Регистрация */

$('.register-btn').click(function (e) {
    e.preventDefault();
    $(`input`).removeClass('error');

    let login=$('input[name="login"]').val(),
        password=$('input[name="passwoed"]').val(),
        full_name=$('input[name="fullname"]').val(),
        email=$('input[name="email"]').val(),
        password_confirm=$('input[name="password_confirm"]').val();

    let fromData = new FormData();
    formData.append('login',login);
    formData.append('passworf',password);
    formData.append('full_name',full_name);
    formData.append('email',email);
    formData.append('password_confirm',password_confirm);
    formData.append('avatar',avatar);



    $.ajax({
        url: 'vender/signup.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: fromData,
        success (data){
            if (data.status){
                document.location.href= '/authorization.php';
            }
            else {
                if (data.type ===1){
                    data.fields.forEach(function (field){
                        $(`input[name="${field}"]`).addClass('error')
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }

        }
    });
});