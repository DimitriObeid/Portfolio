<!DOCTYPE html>
<html lang="FR-fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/site.css" />
    </head>
    
    <body>
        <div class="container-fluid">   
            <div class="header">
                <div class="header-haut">
                    <h1 class="titre-portfolio">Bienvenue sur mon portfolio</h1>
                    <hr class="my-4">
                </div>
                
                <div class="header-bas">
                    <img id="icone-gmail" src="images/gmail.png" alt="Gmail">obeiddimitri@gmail.com</img>
                    <img id="icone-facebook" src="images/facebook.png" alt="Facebook"><a href="https://www.facebook.com/profile.php?id=100012317384624">Dimitri OBEID</a></img>
                    <img id="icone-linkedin" src="images/linkedin.png" alt="Linkedin"><a href="https://www.linkedin.com/in/dimitri-obeid-3b963518a/">Dimitri OBEID</a></img>
                    <img id="icone-tel" src="images/phone.png" alt="Téléphone">06 40 67 01 48</img>
                </div>
            </div>
        </div>
        <div class="col-gauche" style="width: 200px;background-color: #FFFFCC; float: left;">
            <ul class="listesAPropos">
                <li>
                <a href="#"><b>À propos de moi</b></a>
                    <ul>
                        <li><a href="index.php">Menu principal</a></li>
                        <li><a href="Mon CV.pdf"> Mon CV</a></li>
                    </ul>
                </li>
            </ul>
            
            <ul class="listesAPropos">
                <li>
                <a href="#"><b>Mes projets</b></a>
                    <ul>
                        <li><a href="ppe1.php">PPE1</a></li>
                        <li><a href="ppe2.php">PPE2</a></li>
                        <li><a href="ppe3.php">PPE3</a></li>
                        <li><a href="ppe4.php">PPE4</a></li>
                        <li><a href="veille.php">Veille technologique</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="listesAPropos">
                <li>
                <a href="#"><b>Mes stages</b></a>
                    <ul>
                        <li><a href="stage1.php">Stage de 1ère année</a></li>
                        <li><a href="stage2.php">Stage de 2ème année</a></li>
                    </ul>
                </li>
            </ul>
            
            <script>
                var boxOne = document.getElementsByClassName('listesAPropos')[0];

                document.getElementsByClassName('listesAPropos')[0].onclick = function() {
                    
                }
            </script>
        </div>
    </body>
</html>
