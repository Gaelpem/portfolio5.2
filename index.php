<?php
session_start(); 
require_once 'inc/header.php'
?>

    <title>Gaël Pembele</title>

</head>

<body>
 <!-- NAV-->
<?php require_once 'inc/navbar.inc.php' ?>
 <!-- Presentation-->

<main>

<section class="portfolio-section home">

    <div class="home-container">
    <p class="paragraphe1" id="accueil-menu">
    Je m’appelle Gaël Pembele je suis développeur passionné par la ––––– technologie le design c'est pourquoi j'ai choisi de combiner ces deux univers.
<span class="detail">&copy2025 <br>
    basé à Paris/
</span></p>
    <ul class="link-contact">
        <li class="bouton"><a href="#contact-menu" >.contactez-moi</a></li>
     </ul>
    <div class="titre-portfolio1">
    <h2 class="titre-portfolio">PORTFOLIO&copy;</span></h2>
    </div>
    </div> 
   
  </section>


 <!--Projet menu-->

<section class="portfolio-section projet">

<h1 id="projet-menu">[Proje-ts]<span class="numero">(01)</span></h1>



<div class="projet-container">
   
 <article id="photos">
 <i class="fa-solid fa-arrow-down" id="fleche1"></i>
  <h2 class="portfolio"><a href="projet-photo.php">1/ Portfolio Photos</a></h2>

         <div id="separateur1">
            <div id="paragraphe1">
             Mon premier projet en VueJS m'a permis d'acquérir les fondamentaux, comme par exemple l'utilisation des templates, la gestion des données avec data et methods, ainsi que l'apprentissage des directives comme v-bind, v-for, et v-if.
            </div>
         <div class="carre1"></div>
    </div>

 </article>

    
<article id="biographie">
<i class="fa-solid fa-arrow-down" id="fleche2"></i>
   <h2 class="portfolio"><a href="">2/ Biographie</a></h2>

      <div id="separateur2">
         <div id="paragraphe2">
             Mon premier projet en VueJS m'a permis d'acquérir les fondamentaux, comme par exemple l'utilisation des templates, la gestion des données avec data et methods, ainsi que l'apprentissage des directives comme v-bind, v-for, et v-if.
            </div>
         <div class="carre2"></div>

</div>
</article>
    
</div>

</section>

 <!--A propos-->

 <section class="portfolio-section propos">
    <h1 id="projet-about">[À-propos]<span class="numero">(02)</span></h1>
    <div class="propos-container">
        <div class="grid">
            <p class="paragraphe">Étudiant en première année de développement web à Digital Campus Paris, je me considère comme un futur creative developer, passionné par le front-end et le design.</p>
            <p class="paragraphe">J’aime allier l’aspect artistique et technique du développement web tout en approfondissant le back-end pour devenir un développeur complet.</p>
            <p class="paragraphe">En dehors du code, je m’intéresse à la fashion photographie, et la street photographie. Ce portfolio met en avant mes réalisations.</p>
            <div class="paragraphe">
                <h2 class="competence">Compétences</h2>
                <div class="skills-grid">
                    <div class="groupe">
                        <h3 class="web">Web</h3>
                        <p class="skills">html/css<br>javascript<br>php<br>WordPress</p>
                    </div>
                    <div class="groupe">
                        <h3 class="web">Design</h3>
                        <p class="skills">illustrator<br>photoshop<br>indesign<br>figma</p>
                    </div>
                </div>
            </div>
            <ul class="cv">
                <li class="bouton2"><a href="asset/cv/Gael_Pembele_CV.pdf" target="_blank">.voir mon cv</a></li>
      </ul>
        </div>
    </div>
     
</section>

 <!--Contact-->

<?php require "inc/contact.inc.php" ?>

 <!--Menu-->
<section class="portfolio-section menu">
<h1 class="menu-titre">[Men-u]<span class="numero">(04)</span></h1> 

      <ul class="links-block">

                    <li><a href="#accueil-menu">Accueil<span class="numero">(01)</span></a></li>
                    <li><a href="#projet-menu">Projets<span class="numero">(02)</span></a></li>
                    <li><a href="#projet-about">À propos<span class="numero">(03)</span></a></li>
                    <li><a href="#contact-menu">Contact<span class="numero">(04)</span></a></li>
     </ul>
 
</section>

<!--HEURE-->
<div id="heure"></div>


</main>


  <!--footer-->
<?php  require_once 'inc/footer.inc.php'?>
 <!--footer-->
<script src="asset/js/app.js"></script>

</body>
</html>

