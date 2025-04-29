const variabile = {
  hasError : false,
  isValidPassword: false,
  emailPattern : /^[^\s@]+@[^\s@]+\.[^\s@]+$/
};

function formValidation(form, notifica) {
  variabile.form = document.querySelector(form);
  variabile.notificationItem = document.querySelector(notifica);
  variabile.pwdStrengthColor = document.querySelectorAll('#password > span');
  variabile.formItems = Array.from(variabile.form.elements);
  passwordStrength();
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
    //Controllo validità password e corrispondenza con conferma
    checkPassword();
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
    if (item.type !== "checkbox" && item.value === "" && item.required) {
      error = true;
    }
    if (item.type === "checkbox" && item.required && !item.checked) {
      error = true
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

/*
* password valida (attivazione rosso): almeno 8 caratteri
* password mediamente sicura (attivazione arancione): almeno 8 caratteri, con almeno un carattere speciale
* password molto sicura (attivazione verde): almeno 10 caratteri, con due caratteri speciali e almeno una lettera in maiuscolo
*/
function passwordStrength() {
  variabile.form.password.addEventListener('keyup', (e) => {
    let isValid = {
      low: false,
      high: false
    },
    pwd = e.target.value;
    resetStrength();
    if(pwd.length<1){
      variabile.notificationItem.textContent = '';
    }
    if(pwd.length >= 8) {
      variabile.pwdStrengthColor[0].classList.add('active');
      variabile.notificationItem.className = 'notification-warring';
      variabile.notificationItem.textContent = 'Inserisci una password di 8 caratteri contenente: 1 carattere speciale se vuoi aumentare la sicurezza a: media';
      if (regexCount(/[&?!%._@*%]/g, pwd) > 0) {
        variabile.pwdStrengthColor[1].classList.add('active');
        variabile.notificationItem.className = 'notification-success';
        variabile.notificationItem.textContent = 'Inserisci una password di 10 caratteri contenente: 2 caratteri speciali e una maiuscola se vuoi aumentare la sicurezza a: massima';
      }
      isValid.low = true;
    }
    if (pwd.length >= 10 && regexCount(/[&?!%._@*%]/g, pwd) > 1 && regexCount(/[A-Z]/g, pwd) > 0) {
      variabile.pwdStrengthColor.forEach((item) => {
        item.classList.add('active');
        variabile.notificationItem.textContent = '';
      });
      isValid.high = true;
    }
    variabile.isValidPassword = (isValid.low || isValid.high) ? true : false;
  });
}

function resetStrength() {
  variabile.pwdStrengthColor.forEach((item) => {
    item.classList.remove('active');
  });
}

function regexCount(pattern, stringa) {
  return (stringa.match(pattern) || []).length;
}

function checkPassword() {
  const password = variabile.form.password.value,
  re_password = variabile.form.re_password.value;
  if(!variabile.isValidPassword) {
    throw new Error('La password non rispetta i criteri minimi');
  }
  if (password !== re_password) {
    throw new Error('Password e conferma password non coincidono');
  }
}

function resetForm() {
  resetStrength();
  variabile.form.reset();
  variabile.formItems.forEach(item => {
    item.classList.remove("error");
  });
}

export default formValidation;
