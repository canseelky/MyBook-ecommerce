$(document).on("submit","#register-form", function(event){
    event.preventDefault();
    const form = $(this);

    const userData = {

        name : $("input[name=name]",form).val(),
        surname : $("input[name=surname]",form).val(),
        email : $("input[name=email]",form).val(),
        password : $("input[name=password]",form).val()

    };

    const options = {
    method: 'POST',
    body: JSON.stringify(userData),
    headers: {
    'Content-Type': 'application/json'
    }
}
const register = async () =>{

    fetch('server/register.php', options)
    .then(res => res.json())
    .then(res => console.log(res));
    


}
 

    

});


