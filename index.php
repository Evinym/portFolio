<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/photo-profil-JC.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Evinym Porte_Folio</title>
</head>
<header>
    <div class="bodyStyle1">
        </br></br></br>
        <h1 class="helleWorld">Vous êtes le bienvenu à Evilande</h1>
        </br></br></br>
    </div>
    <div class="bodyStyle1">
        <div class="tourmine">
            <a href="post.php" target="blanck!">
                <img id="my-img" src="images/ProfilPerso/photo-profil-JC.jpg" alt="reso sociaux" class="imgPP-PF" onmouseover="passageDeLSouris(this);" onmouseout="departDeLSouris(this);"/>
            </a>
        </div>  
        <div id="dateDuJ"></div>
        <div class="cadrantP">
            <div class="porteAiguille2">
                <div class="centreAiguil4"></div>
                <div class="centreAiguil5"></div>
                <div class="centreAiguil6"></div>
            </div>
        </div>
    </div>
</header>
<body>
    <div class="head-bar">
        <button class="theTablink" onclick="myOpenPage('Home', this, 'red')">Home</button>
        <button class="theTablink" onclick="myOpenPage('News', this, 'green')" id="defaultOpenMenu">About</button>
        <button class="theTablink" onclick="myOpenPage('Contact', this, 'blue')">Contact</button>
        <button class="theTablink" onclick="myOpenPage('About', this, 'orange')">New</button>
    </div>

    <div id="Home" class="theTabcontent">
      <h3>Acceuil</h3>
      <p>A ce qui parait le Monde appartient à ceux qui ce lèves tôt..</p>
      <p>Mais qu’en est-il de ceux qui veillent la nuit.</p>
      <p><a href="rendévous.php" target="blanck"><strong>More..</strong></a></p>
    </div>
    
    <div id="News" class="theTabcontent">
      <h2>A propos</h2>
      <br/>
      <p>Who I are and what I do.</p>
      <br/>
      <p><a href="References.zip"><strong>Telecharger le cv..</strong></a></p>
      <p><a href="supert.php" target="blanck"><strong>More..</strong></a></p>
    </div>
    
    <div id="Contact" class="theTabcontent">
      <h3>Me contacter</h3>
      <p>Priez de me contacter par <strong>Téléphone Portable</strong> pour une éfficaciter maximal en therme de réponse.</p>
      <p>sinon</p>
      <p>Me contacter via les moyens indiquer au footer</p>
      <br/>
      <p>Cordialement Mr CASTANET J.</p>
    </div>
    
    <div id="About" class="theTabcontent">
        <h3>Nouvelles</h3>
      <p>.</p> 
    </div>

    <script src="./js/index.js"></script>
</body>
    <footer class="the-bander">
        <div class="div-tourmine">
        <a href="https://github.com/Evinym" target="blanck!">
            <div class="tourmine">
                <img src="images/resososio/gitHub-icon.png" alt="reso sociaux" class="imgPF"/>
            </div>
        </a>
        <div class="tourmine">
            <img src="images/resososio/Gmail-icon.png" alt="reso sociaux" class="imgPF" onclick="Javascript:ralyGmail();"/>
        </div>
        <div class="tourmine">
            <img src="images/resososio/Outlook1-icon.png" alt="reso sociaux" class="imgPF" onclick="Javascript:ralyOutlook();"/>
        </div>
        <a href="https://sl-si.facebook.com/public/Evinym-Grid" target="blanck!">
            <div class="tourmine">
                <img src="images/resososio/Facebook-icon.png" alt="reso sociaux" class="imgPF"/>
            </div>
        </a>
        </div>
        <h5>Make with love by Evinym</h5>
    </footer>
</html>