function validate() {
    let email = document.getElementById('email').value;
    
    let password = document.getElementById('password').value;

    // alert('Datos: ' + email + " "+ password)

    // return false;

    if (email != "" && password != "") 
    {
        return true;
        
    }
    else
    {
        alert("Debe llenar los campos")
        return false;
    }
    
}

