// For Form Validation

function email_validation(str){
    var x = str.search(/^[^\.][a-zA-Z0-9!#$%&'\+\-/=?^_`{|}~\."(),:;<>@\[\\\]]+[^\.]@[^-][a-zA-z0-9-\.]+[^-]$/m);
    if (x == -1){
        return false;
    }
    return true;    
}

function phone_validation(str){
    var x = str.search(/[0-9]{8}/m);
    if (x == -1){
        return false;
  
    }
    return true;
}
function name_validation(str){
    var x = str.search(/[A-Za-z ]+/m);
    if (x == -1){
        return false;
    }
    return true;
}

function validator(){
    var email = document.getElementById('email');
    var phone = document.getElementById('number');
    var name = document.getElementById('name');
    
    if (email_validation(email) == false){
        alert('Please enter valid email address!');
    
    }
    else if (phone_validation(phone) == false){
        alert('Please enter valid email address!');
    }
    else if (name_validation(name) == false){
        alert('Please enter valid name!');
    }
    
        
}

var submit = document.getElementById('submit');
submit.addEventListener("click",validator)

