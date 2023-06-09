<!DOCTYPE html>
<html>

<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=utf-8">
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="trame.css">
    <title>Petit Bac</title>
    <link href='http://fonts.googleapis.com/css?family=McLaren' rel='stylesheet' type='text/css'>
</head>

<body>

    <header><h1>Petit Bac</h1></header>

    <section id="premiere">

        <div class="transformblockentier">

            <article class="titre">

                <div>
                    <center><label for="chooseNumber">Nombre de catégories :</label></center>
                    <center><select name="number" id="chooseNumber"></select></center>
                </div>


                <div>
                    <center><label for="choixNombreJoueurs">Nombre de joueurs :</label></center>
                    <center><select name="numberPlayer" id="choixNombreJoueurs"></select></center>
                </div>


                <div>
                    <center><label for="chooseDuration">Choisissez la durée :</label></center>
                    <center><select name="duration" id="chooseDuration"></select></center>
                </div>

            </article>

            
            <article id="conteneurGlobe">

                <div id="cliquer">
                    <center><button>Cliquez pour générer une lettre aléatoire !</button></center>
                </div>
        
                <div id="resultat"></div>

            </article>


            <article>

                <div id="categoriesAleatoires">
                    <center><button>Cliquez pour afficher plusieurs catégories !</button></center>
                </div>

                <div id="resultat2"></div>

            </article>


            <article id="conteneurConteneurCanvas">

                <div id="conteneurCanvas">

                    <canvas id="exemple" width="200" height="140">
                    Affichage d'un texte pour les navigateurs qui ne supportent pas canvas.
                    </canvas>
                </div>


                <div id="lancerChronometre">
                    <center><button>Lancer le Chronomètre</button></center>
                </div>

                <div id="arreterChronometre" style="display: none;">
                <center><button>Arrêter le Chronomètre</button></center>
                </div>
                
                <div id="correction" style="display: none;">
                    <center><button>Stop ! Correction !</button></center>
                </div>
                
                <div id="tempsEcoule"></div>
            

        
            </article>


            <article>

            <div id="resultatJoueurs"></div>

            </article>



        </div>  <!-- fin de section id transformblockentier -->


    </section>

</body>

<footer>&copy;Erwan Tanguy - 2021</footer>

<script src="utils.js"></script>





