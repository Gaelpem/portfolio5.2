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





// Projet-photo

function toggleContainer(containerId, className,flecheId){
    const container = document.getElementById(containerId); 
    const fleche = document.getElementById(flecheId); 

    if(fleche){
        container.addEventListener('click', () =>{
        

            container.classList.toggle('open'); 
            container.style.height = container.classList.contains('open') ? "600px" : "auto"; 

            // fleche

            fleche.classList.toggle('rotated');
            fleche.style.transform = fleche.classList.contains('rotated') ? "rotated(180deg)" :  "rotated(0deg)"; 
            
            
        })
    }
}

toggleContainer('photos', 'carre1', 'fleche1'); 

toggleContainer('biographie', 'carre2', 'fleche2'); 



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
                {transform : 'translateX(100px) scale(0.8)', opacity: 0},
                {transform : 'translateX(0) scale(1)', opacity: 1},
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



// On récupère les éléments qu'on veut modifier
const body = document.getElementsByTagName('body')[0];
const liens = document.querySelector('.nav-links');
const paragraphes = document.querySelectorAll('p');
const titres = document.querySelectorAll('h1');
const skills = document.querySelectorAll('p.skills');
const lienss  = document.querySelector('.links-block')
const titre  = document.querySelector('.titre-portfolio')
const footeR = document.getElementsByTagName('footer');
const btnMode = document.getElementById('btn-mode');


// Quand on clique sur le bouton
btnMode.addEventListener('click', () => {
    // On ajoute/enlève la classe 'nuit' à tous nos éléments
    body.classList.toggle('nuit');
    liens.classList.toggle('nuit');
    lienss.classList.toggle('nuit');
    titre.classList.toggle('nuit')
    //les competences
    skills.forEach(skill => {
        skill.classList.toggle('nuit');
    });
    
    // Pour les paragraphes
    paragraphes.forEach(p => {
        p.classList.toggle('nuit'); 
    });
     // Pour les paragraphes
     for(let f = 0; f < footeR.length; f++) {
        footeR[f].classList.toggle('nuit');
         }
    // Pour les titres
    titres.forEach(titre => {
        titre.classList.toggle('nuit');
    });
    //Pour les liens 

    
    // Change le texte du bouton
    if(body.classList.contains('nuit')) {
        btnMode.textContent = "––nuit";
    } else {
        btnMode.textContent = "––jour";
    }
});
