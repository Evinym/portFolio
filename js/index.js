document.getElementById("defaultOpenMenu").click();

function myOpenPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("theTabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("theTablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
}

function cont(){
    var d = new Date();
    var actualisation = setTimeout("cont();", 1000);
    
    d.setFullYear(2019, 08, 09);
    document.getElementById("dateDuJ").innerHTML = d;
    }
    cont();

function ralyGmail(yo) {
    alert("Organisons un rendez vous au mois : télécharger le CV");
}
function ralyOutlook(yo) {
  alert("Evinym@outlook.fr");
}

function passageDeLSouris(element) {
  element.setAttribute('src', 'images/ProfilPerso/photo-profil-over.jpg');
  }
  function departDeLSouris(element) {
  element.setAttribute('src', 'images/ProfilPerso/photo-profil-JC.jpg');
  }