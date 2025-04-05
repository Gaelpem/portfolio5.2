<?php
session_start(); 
require_once 'inc/header.php'
?>

    <title>Gaël Pembele</title>

</head>

<body>
 <!-- NAV-->
<?php require_once './inc/navbar.inc.php' ?>
 <!-- Presentation-->

<main>
<section class="portfolio-section home">


    <div class="home-container">
            <p class="paragraphe1" id="accueil-menu">
            Je suis Gaël Pembele, développeur passionné par la technologie et le design. En recherche de stage, je souhaite allier ces deux univers pour créer des expériences numériques alliant esthétisme et performance.
            <span class="detail">&copy2025 <br>
            basé à Paris/
            </span></p>

            <ul class="link-contact">
                <li class="bouton"><a href="#contact-menu" >.contactez-moi</a></li>
            </ul>

          <div class="titre-portfolio1">

            <h2 class="titre-portfolio">PORTFOLIO©</h2>

          </div>
    </div> 
   
  </section>


 <!--Projet menu-->

<section class="portfolio-section projet">

<h1 id="projet-menu">[Proje-ts]<span class="numero">(01)</span></h1>



<div class="projet-container">
   
 <article id="photos">



    <div class ="separer">   
          
       <div class="description"> 

       <h2 class="portfolio">1—— Portfolio Photos</a></h2>


            <p id="paragraphe1">
            Ce projet personnel constitue ma première exploration de GSAP, me permettant d'expérimenter l'animation de texte tout en approfondissant ma maîtrise de JavaScript. Il m’a offert l’opportunité d’explorer diverses transitions et dynamiques visuelles afin d’apporter plus de fluidité et d'interactivité à l’interface. Par ailleurs, j’ai conçu l’ensemble du design sur Figma, veillant à allier esthétique et ergonomie.
            </p>

            <p class="stack">-Website | JS-GSAP</p>
           
            <ul class="link-photo">
                <li class="bouton"><a href="https://gaelpem.github.io/portfolio-photo/" target="_blank" >.voir projet</a></li>
            </ul>


        </div>

           <div class=item1>
            <img src="asset/img/photos.jpg" alt="">
           </div>
    </div>

 </article>

<article id="youtube">

<div class ="separer">   
          
          <div class="description"> 
   
          <h2 class="portfolio">2—— Projet Youtube</a></h2>
   
   
               <p id="paragraphe1">
               Dans le cadre d’un projet collaboratif, nous avions pour objectif de concevoir un site web destiné à promouvoir une chaîne YouTube. Ma mission consistait à réaliser la maquette du site et à développer une partie des fonctionnalités en JavaScript. Ce projet m’a permis de renforcer mes compétences en conception d’interface utilisateur tout en approfondissant ma compréhension du développement interactif. De plus, j’ai eu l’opportunité de découvrir et d’expérimenter Tailwind CSS, une technologie facilitant la mise en page et l'optimisation du design grâce à son approche utilitaire.
               </p>
   
               <p class="stack">-Website | JS-Tailwind</p>
              
               <ul class="link-photo">
                   <li class="bouton"><a href="https://gaelpem.github.io/Projet_youtube/" target="_blank" >.voir projet</a></li>
               </ul>
   
   
           </div>
   
              <div class=item1>
               <img src="asset/img/youtube.jpg" alt="">
              </div>
       </div>
   


</article>




<article id="biographie">

<div class ="separer">   
          
          <div class="description"> 
   
          <h2 class="portfolio">3—— Projet Biogarphie</a></h2>
   
   
               <p id="paragraphe1">
               J’ai réalisé mon premier projet avec Vue.js, un site web consacré à une mini biographie de Henri Cartier-Bresson. J’ai conçu la maquette sur Figma, puis développé plusieurs fonctionnalités interactives en JavaScript. Ce projet m’a permis de me familiariser avec Vue.js, d’approfondir mes compétences en développement front-end et en conception d’interfaces utilisateur. J’ai également utilisé GSAP pour intégrer des animations fluides et dynamiques, renforçant l’aspect interactif du site.
               </p>
   
               <p class="stack">-Website | VuesJS-GSAP</p>
              
               <ul class="link-photo">
                   <li class="bouton"><a href="https://biographie-nine.vercel.app/" target="_blank" >.voir projet</a></li>
               </ul>
   
   
           </div>
   
              <div class=item1>
               <img src="asset/img/biographie.jpg" alt="">
              </div>
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
                <li class="bouton2"><a href="asset/cv/cv03.pdf" target="_blank">.voir mon cv</a></li>
      </ul>
        </div>
    </div>
     
</section>

 <!--Contact-->

<?php require "inc/contact.inc.php" ?>

 <!--Menu-->
<section class="portfolio-section menu">

    <ul class="links-block">
      <h2 class="menu-titre">[Men-u]<span class="numero">(04)</span></h2> 

                    <li><a href="#accueil-menu">Accueil<span class="numero">(01)</span></a></li>
                    <li><a href="#projet-menu">Projets<span class="numero">(02)</span></a></li>
                    <li><a href="#projet-about">À propos<span class="numero">(03)</span></a></li>
                    <li><a href="#contact-menu">Contact<span class="numero">(04)</span></a></li>
     </ul>

     <!--HEURE-->
<div id="heure"></div>

 
</section>

</main>


  <!--footer-->
<?php  require_once 'inc/footer.inc.php'?>
 <!--footer-->
<script src="asset/js/app.js"></script>

</body>
</html>

