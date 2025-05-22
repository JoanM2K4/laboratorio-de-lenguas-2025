var linkPers = document.getElementById("linkPers");
var linkAdm = document.getElementById("linkAdm");

var pers = document.getElementById("formPers");
var adm = document.getElementById("formAmd");

linkPers.addEventListener('click',()=> {
    pers.style.display = 'block';
    adm.style.display = 'none';
});

linkAdm.addEventListener('click',()=> {
    pers.style.display = 'none';
    adm.style.display = 'block';
});

