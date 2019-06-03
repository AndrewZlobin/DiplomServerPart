let form = document.forms.someForm;
//console.log(form);
let formValidator = new FormValidator(form);
//console.log(formValidator);

formValidator.addRules({
    rules: {
        login: /^[a-zA-Z0-9]+$/,
        pwd: /^[a-zA-Z0-9]+$/
    },
    messages: {
        login: "Логин должен представлять из себя набор букв и цифр, но можно использовать только латиницу!",
        pwd: "Пароль должен представлять из себя набор латинских букв и цифр!"
    }
});

form.addEventListener("submit", noErorrs);

function noErorrs() {
    if (formValidator.isValid()) {
        console.info("Validation has no errors!");

    }
}
//console.log(formValidator._err);