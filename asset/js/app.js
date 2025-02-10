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