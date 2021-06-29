$(document).on("submit","#login-form", function(event){
    event.preventDefault();
    const form = $(this);

    const userData = {
        email : $("input[type=email]",form).val(),
        password : $("input[type=password]",form).val()


    }
    alert(userData);
    console.log(userData);



})