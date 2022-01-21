document.getElementById('button').onclick = function(event){
    
    let error = false;
    let areaError = document.getElementById('error');
    let regexp = /[а-яё]/g;
    let engexp = /[a-z]/g;
    let number = /[0-9]/;
    let checkMail = /[@+'.']/;
    
    let name= document.forms['form']['name'];
    let login = document.forms['form']['login'];
    let password = document.forms['form']['password'];
    let email = document.forms['form']['email'];
    let requisites = document.forms['form']['requisites'];

    let nameValue = document.forms['form']['name'].value;
    let loginValue = document.forms['form']['login'].value;
    let passwordValue = document.forms['form']['password'].value;
    let emailValue = document.forms['form']['email'].value;
    let requisitesValue = document.forms['form']['requisites'].value;

    areaError.innerHTML = '';
    name.style.backgroundColor = 'white';
    login.style.backgroundColor = 'white'; 
    password.style.backgroundColor = 'white'; 
    email.style.backgroundColor = 'white'; 
    requisites.style.backgroundColor = 'white'; 

    //проверка имени
    if(!regexp.test(nameValue)){
        areaError.innerHTML = areaError.innerHTML+'<br>'+'Введите имя на русском';
        error = true;
        name.style.backgroundColor = 'red';
    }
    if(number.test(nameValue)){
        areaError.innerHTML = areaError.innerHTML+'<br>'+'Имя не может содержать цифры';
        error = true;
        name.style.backgroundColor = 'red';
    }

    if(nameValue.length <= 1){
        areaError.innerHTML = areaError.innerHTML+'<br>'+'Имя не может быть короче 2 символов';
        error = true;
        name.style.backgroundColor = 'red';
    }

    //проверка логина
    if(regexp.test(loginValue)){
        areaError.innerHTML = 'Введите логин на английском';
        error = true;
        login.style.backgroundColor = 'red';
    }
    if(number.test(loginValue)){
        areaError.innerHTML = areaError.innerHTML+'<br>'+'Логин не может содержать цифры';
        error = true;
        login.style.backgroundColor = 'red';
    }

    if(loginValue.length <= 3){
        areaError.innerHTML = areaError.innerHTML+'<br>'+'Логин не может быть короче 4 символов';
        error = true;
        login.style.backgroundColor = 'red';
    }


    //проверка пароля
    if(regexp.test(passwordValue)){
        areaError.innerHTML = areaError.innerHTML+'<br>'+'Введите пароль на английском';
        error = true;
        password.style.backgroundColor = 'red';
    }

    if(passwordValue.length <= 3){
        areaError.innerHTML = areaError.innerHTML+'<br>'+'Пароль не может быть короче 4 символов';
        error = true;
        password.style.backgroundColor = 'red';
    }


    //проверка email'a
    if(regexp.test(emailValue)){
        areaError.innerHTML = areaError.innerHTML+'<br>'+'Введите email на английском';
        error = true;
        email.style.backgroundColor = 'red';
    }

    if(!checkMail.test(emailValue)){
        areaError.innerHTML = areaError.innerHTML+'<br>'+'Введите email корректно';
        error = true;
        email.style.backgroundColor = 'red';
    }

    if(emailValue.length <= 4){
        areaError.innerHTML = areaError.innerHTML+'<br>'+'Email не может быть короче 5 символов';
        error = true;
        email.style.backgroundColor = 'red';
    }


    //проверка ввода карты
    if((regexp.test(requisitesValue))||(engexp.test(requisitesValue))){
        areaError.innerHTML = areaError.innerHTML+'<br>'+'Введите корректный номер карты';
        error = true;
        requisites.style.backgroundColor = 'red';
    }

    if((requisitesValue.length <= 15)||(requisitesValue.length >= 17)){
        areaError.innerHTML = areaError.innerHTML+'<br>'+'Введите 16 цифр в номере карты';
        requisites.style.backgroundColor = 'red';
        error = true;
    }

    if(!error){
        areaError.innerHTML = '';
        error = false;
    }else{
        event.preventDefault();
    }

}