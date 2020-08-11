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

// Set max date
const setMaxDate = () => {
    const date = new Date().toISOString().split("T")[0];
    dob.max = date;
}
setMaxDate();

// Email validation
const validateEmail = (mail) => {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (!re.test(mail)) {
        email.classList.add('error');
        return false;
    } else {
        email.classList.remove('error');
        return true;
    }
}

// Password validation
const validatePassword = (pass) => {

    if (!pass.match(/[A-Z]+/)) {
        password.classList.add('error');
        passBox.innerHTML = 'Password must contain at least one uppercase letter';
    }
    else if (!pass.match(/[a-z]+/)) {
        password.classList.add('error');
        passBox.innerHTML = 'Password must contain at least one lowercase letter';
    }
    else if (!pass.match(/[0-9]+/)) {
        password.classList.add('error');
        passBox.innerHTML = 'Password must contain at least one number';
    }
    else if (!pass.match(/[\W]+/)) {
        password.classList.add('error');
        passBox.innerHTML = 'Password must contain at least one special character';
    }
    else if (pass.length < 15) {
        password.classList.add('error');
        passBox.innerHTML = 'Password must be at least 15 characters long';
    }
    else {
        password.classList.remove('error');
        passBox.innerHTML = '';
        return true;
    }
}

// ValidateName

const ValidateName = (name) => {
    if (name.value === "") {
        name.classList.add('error');
        return false;
    } else {
        name.classList.remove('error');
        return true;
    }
}

const male = document.getElementById('male');
const female = document.getElementById('female');
const genderbox = document.getElementById('genderbox');

// Gender validation
const validateGender = () => {
    if (male.checked && female.checked || !male.checked && !female.checked) {
        genderbox.innerHTML = 'You must select one gender'
        return false;
    } else {
        genderbox.innerHTML = '';
        return true;
    }
}

form.addEventListener('submit', e => {
    // if (e.target.value === "") {
    //     e.target.classList.add('error');
    // } else {
    //     e.target.classList.remove('error');
    // }

    //enable button if all tests pass 
    if (ValidateName(firstName) && ValidateName(lastName) && validateEmail(email.value) && validatePassword(password.value) && validateGender()) {
        // e.target.classList.remove('error');
        // submit.disabled = false;
    } else {
        // submit.disabled = true;
        e.preventDefault();
        // e.target.classList.add('error');
    }


});
