function lang1(event) {
    var target = event.target || event.srcElement;
    var typeF=document.getElementById('typeF');
    typeF.value = event.target.innerHTML;
}