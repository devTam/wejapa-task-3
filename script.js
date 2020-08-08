const firstName = document.getElementById('first-name');
const lastName = document.getElementById('last-name');
const password = document.getElementById('password');
const email = document.getElementById('email');
const dob = document.getElementById('dob');
const color = document.getElementById('color');
const dept = document.getElementById('dept');
const form = document.getElementById('form');
const submit = document.getElementById('submit');
const passBox = document.querySelector('.passbox');


const validateEmail = (mail) => {
const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

if(!re.test(mail)) {
    email.classList.add('error');
    return false;
}else {
    email.classList.remove('error');
    return true;
}
}

const validatePassword = (pass) => {

if(!pass.match(/[A-Z]+/)) {
    password.classList.add('error');
    passBox.innerHTML = 'Password must contain at least one uppercase letter';
} 
else if(!pass.match(/[a-z]+/)) {
    password.classList.add('error');
    passBox.innerHTML = 'Password must contain at least one lowercase letter';
}
else if(!pass.match(/[0-9]+/)) {
    password.classList.add('error');
    passBox.innerHTML = 'Password must contain at least one number';     
}
else if(!pass.match(/[\W]+/)) {
    password.classList.add('error');
    passBox.innerHTML = 'Password must contain at least one special character';     
}
else if(pass.length < 15) {
    password.classList.add('error');
    passBox.innerHTML = 'Password must be at least 15 characters long';     
}
else {
    password.classList.remove('error');
    passBox.innerHTML = '';
    return true;
}

}

form.addEventListener('input', e => {
if(e.target.value === "") {
    e.target.classList.add('error');
} else {
    e.target.classList.remove('error'); 
}

//enable button if all tests pass 
if(firstName.value !== "" && lastName.value !== "" && validateEmail(email.value) && validatePassword(password.value)) {
    submit.disabled = false;
} else {
    submit.disabled = true;
    e.preventDefault();
}


});
