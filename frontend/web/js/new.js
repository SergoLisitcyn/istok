function lang1(event) {
    var target = event.target || event.srcElement;
    var typeF=document.getElementById('typeF');
    typeF.value = event.target.innerHTML;
}

function recaptcha() {
    const captchaResponse = grecaptcha.getResponse();
    if (captchaResponse === ""){
        alert("Подтвердите, что Вы не являетесь роботом!");
        return false;
    }
}
