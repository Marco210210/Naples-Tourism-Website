const variabile = {
    hasError : false,
    emailPattern : /^[^\s@]+@[^\s@]+\.[^\s@]+$/
};

function loginValidation(form, notifica) {
    variabile.form = document.querySelector(form);
    variabile.notificationItem = document.querySelector(notifica);
    variabile.formItems = Array.from(variabile.form.elements);
    submitForm(form);
}

function submitForm(form) {
    variabile.form.addEventListener('submit', (e) => {
        e.stopPropagation();
        checkValidation(e);
    }, true);
}

function checkValidation(e) {
    try {
        //Controllo il completamento dei campi obbligatori
        requiredFields();
        //Controllo correttezza email
        isValidEmail();
        e.target.parentElement.onclick = null;
        e.target.parentElement.click();
    } catch(error) {
        e.preventDefault();
        variabile.notificationItem.className = 'notification-error';
        variabile.notificationItem.textContent = error.message;
    }
}

function requiredFields() {
    let error;
    variabile.hasError = false;
    variabile.formItems.forEach(item => {
        error = false;
        if (item.value === "" && item.required) {
            error = true;
        }
        if (error && item.type !== "submit") {
            variabile.hasError = true;
            item.classList.add("error");
        }
    });
    if(variabile.hasError) {
        throw new Error('Compilare i campi obbligatori.');
    }
}

function isValidEmail() {
    if (!variabile.emailPattern.test(variabile.form.email.value)) {
        throw new Error('Email indicata non valida');
    }
}

function resetForm() {
    variabile.form.reset();
    variabile.formItems.forEach(item => {
        item.classList.remove("error");
    });
}

export default loginValidation;
