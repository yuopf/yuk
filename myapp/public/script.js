const formReg = document.getElementById('form');

const regPatterns = {
    login:/^[a-zA-Z][a-zA-Z0-9]{3,19}$/,
    name:/^[А-Я][а-яА-Я-]{1,29}$/,
    surname:/^[А-Я][а-яА-Я-]{1,29}$/,
    phone:/^\+7\d{3}\d{3}\d{2}\d{2}$/,
    mail:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
    password:/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()]).{8,}$/,
}

formReg.addEventListener('submit', function(event){
    event.preventDefault();
    
    const login = document.getElementById('login').value;
    const name = document.getElementById('name').value;
    const surname = document.getElementById('surname').value;
    const phone = document.getElementById('phone').value;
    const mail = document.getElementById('mail').value;
    const password = document.getElementById('password').value;
    const passwordRepeat = document.getElementById('passwordRepeat');
    
    errors = {};
    
    if(!regPatterns.login.test(login)){
        errors.login = "Логин должен начинаться с буквы и содержать 4-20 латинских символов";
    }
    if(!regPatterns.name.test(name)){
        errors.name = "Имя должно начинаться с заглавной буквы и состоять из кириллицы";
    }
    if(!regPatterns.surname.test(surname)){
        errors.surname = "Фамилия должна начинаться с заглавной буквы и состоять из кириллицы";
    }
    if(!regPatterns.phone.test(phone)){
        errors.phone = "Введите корректный номер";
    }
    if(!regPatterns.mail.test(mail)){
        errors.mail = "Введите корректный Email";
    }
    if(!regPatterns.password.test(password)){
        errors.password = "Пароль должен содержать хотя бы 1: заглавную букву, цифру, спецсимвол (!@#$%^&*.)";
    }
    if(password != passwordRepeat){
        errors.passwordRepeat = "Пароли не совпадают";
    }
    

    if(Object.keys(errors).length > 0){
        for(const [field, message] of Object.entries(errors)){
            document.getElementById(`${field}Error`).textContent = message;
        }
        return;
    }
    form.submit();
})