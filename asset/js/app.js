"use strict"; 

const burgerMenuButton = document.querySelector('.burger-menu-button'); 
const burgerMenuP = document.querySelector('.burger-menu-button p');
const burgerMenu = document.querySelector('.burger-menu'); 
const elementText = document.querySelector('.menu'); 

burgerMenuButton.addEventListener('click', ()=>{
    burgerMenu.classList.toggle('open'); 
   elementText.textContent = burgerMenu.classList.contains('open') ? 'menu' : 'ferme'; 
})



const links = document.querySelectorAll('.nav-links a'); // Sélectionne tous les liens dans `.links`

if (burgerMenu) { // Vérifie que l'élément existe
  links.forEach(link => {
    link.addEventListener('click', () => {
      burgerMenu.classList.toggle('open');
    });
  });
}







// function toggleContainer(containerId, className,flecheId){
//     const container = document.getElementById(containerId); 
//     const fleche = document.getElementById(flecheId); 

//     if(fleche){
//         container.addEventListener('click', () =>{
        

//             container.classList.toggle('open'); 
//             container.style.height = container.classList.contains('open') ? "600px" : "auto"; 

//             // fleche

//             fleche.classList.toggle('rotated');
//             fleche.style.transform = fleche.classList.contains('rotated') ? "rotated(180deg)" :  "rotated(0deg)"; 
            
            
//         })
//     }
// }

//toggleContainer('photos', 'item1', 'fleche1'); 



// animation appariton

const observer = new IntersectionObserver((entries)=>{


    for(const entry of entries){
        if(entry.isIntersecting){

           if(entry.target.classList.contains('contact')){
               entry.target.animate([
                {transform : 'translateX(100px)', opacity: 0},
                {transform : 'translateX(0)', opacity: 1},
               ], {
                duration : 500
               })
           }else if(entry.target.classList.contains('propos')){
            entry.target.animate([
                {transform : 'translateX(-100px)', opacity: 0},
                {transform : 'translateX(0)', opacity: 1},
               ], {
                duration : 500
               })
        }else{
            entry.target.animate([
                {transform : 'translateX(100px) ', opacity: 0},
                {transform : 'translateX(0)', opacity: 1},
               ], {
                duration : 500
               })
        }
        }
    }



}); 


observer.observe(document.querySelector('.home'))
observer.observe(document.querySelector('.propos'))
observer.observe(document.querySelector('.contact'))


//heure
const afficherHeure = ()=>{


    let $date = new Date()
    let heure = $date.getHours();
    let minute = $date.getMinutes(); 
    let seconde = $date.getSeconds(); 

 heure = heure < 10 ? "0" + heure : heure; 
 minute = minute < 10 ? "0" + minute : minute; 
 seconde = seconde < 10 ? "0" + seconde: seconde; 

let heureActuelle = heure + ":" + minute + ":" + seconde ; 
document.getElementById('heure').textContent = heureActuelle + " " + 'Paris, FR'; 

setTimeout(afficherHeure, 1000)
   

}

afficherHeure()



// const body = document.getElementsByTagName('body')[0];
// const liens = document.querySelector('.nav-links');
// const paragraphes = document.querySelectorAll('p');
// const detail = document.querySelector('.detail');
// const webTitles = document.querySelectorAll('h1');
// const competence = document.querySelector('.competence');
// const lienss  = document.querySelector('.links-block')
// const titre  = document.querySelector('.titre-portfolio')
// const footeR = document.querySelectorAll('footer');
// const grandTitres = document.querySelectorAll('.grand-titre');
// const lieus = document.querySelectorAll('.lieu')
// const droits = document.querySelectorAll('.droit');
// const heures =  document.getElementById('heure'); 
// const logo = document.querySelector('.logo img');
// const fleche1= document.getElementById('fleche1'); 
// const fleche2= document.getElementById('fleche2');
// const borderPhotos = document.getElementById('photos');
// const borderBiographie = document.getElementById('biographie');  
// const skillsTexts = document.querySelectorAll('.web'); 
// const portfolios = document.querySelectorAll('.portfolio');
// const homeLinks = document.querySelectorAll('.home ul li a');
// const cvLinks = document.querySelectorAll('.propos ul li a')
// const boutons = document.querySelectorAll('.bouton, .bouton2');
// const btnMode = document.getElementById('btn-mode');


// // Quand on clique sur le bouton
// btnMode.addEventListener('click', () => {
//     // On ajoute/enlève la classe 'nuit' à tous nos éléments
//     body.classList.toggle('nuit');


//      detail.classList.toggle('nuit'); 
//     liens.classList.toggle('nuit');
//     lienss.classList.toggle('nuit');
//     titre.classList.toggle('nuit');
//      heures.classList.toggle('nuit'); 
//     fleche1.classList.toggle('nuit');
//     fleche2.classList.toggle('nuit');
//     borderPhotos.classList.toggle('nuit');
//     borderBiographie.classList.toggle('nuit');
    
//     //titre de chaque portfolio
//       portfolios.forEach(portfolio =>{
//         portfolio.classList.toggle('nuit'); 
//       })

//     paragraphes.forEach(p => {
//         p.classList.toggle('nuit'); 
//     });
    

//     if (body.classList.contains('nuit')) {
//         logo.src = "asset/img/logoblanc.svg"; // Remplace par le logo en mode nuit
//     } else {
//         logo.src = "asset/img/logo.svg";
//     }
 
    
//     homeLinks.forEach(link => {
//         link.classList.toggle('nuit');
//     });

//     cvLinks.forEach(cvLink => {
//         cvLink.classList.toggle('nuit');
//     });
  

//     competence.classList.toggle('nuit');
    
//     // Pour les titres web
//     webTitles.forEach(title => {
//         title.classList.toggle('nuit');
//     });
//     //bouton
//     boutons.forEach(bouton => {
//         bouton.classList.toggle('nuit');
//     });
    
//     // Pour les paragraphes de compétences
//     skillsTexts.forEach(skill => {
//         skill.classList.toggle('nuit');
//     });
      

//       // Basculer la classe 'nuit' sur les éléments du footer
//       footeR.forEach(footer => footer.classList.toggle('nuit'));
//       grandTitres.forEach(titre => titre.classList.toggle('nuit'));
//       droits.forEach(droit => droit.classList.toggle('nuit'));
//       lieus.forEach(lieu => lieu.classList.toggle('nuit'));
     
      




//     // Change le texte du bouton
//     if(body.classList.contains('nuit')) {   
//         btnMode.textContent = "––nuit";
//     } else {
//         btnMode.textContent = "––jour";
//     }
// });



