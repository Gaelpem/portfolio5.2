

const taches = document.querySelectorAll('td'); 

taches.forEach((tache,index)=>{
    
  tache.style.background = index % 2 == 0 ? 'rgb(200, 200, 200)' : ''; 
    
})