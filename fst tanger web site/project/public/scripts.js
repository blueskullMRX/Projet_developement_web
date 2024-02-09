
  document.addEventListener('DOMContentLoaded', function () {
    const landing = document.querySelector('.landing');
    const bullets = document.querySelectorAll('.bullets li');
    const bulletsContainer1 = document.querySelector('.one');
    const bulletsContainer2 = document.querySelector('.two');
    const bulletsContainer3 = document.querySelector('.tri');
    const style = document.querySelector('.box');
    const content = document.querySelector('.content');
    
    
    const backgrounds = [
      "url('img/pan2.jpg')",
      "url('img/pan1.png')",
      "url('img/pan3.jpg')",
    ];
  
    let currentBackgroundIndex = 0;

    function changeBackground(index) {
      landing.style.backgroundImage = backgrounds[index];

     
      bullets.forEach((bullet, i) => {
        bullet.classList.toggle('active', i === index);
      });
    }
    
  
    const textContent = document.querySelector('.text .content');
    const headlines = [
      "CÉRÉMONIE DE LANCEMENT DES PROJETS RETENUS POUR FINANCEMENT DANS LE CADRE DE L’APPEL À PROJETS « MAROC-HONGRIE »",
      "welcome to<br><span>Faculty of Science and Technology</span>",
      "COLLABORATION ENTRE LA FST DE TANGER ET L’INSTITUT CERVANTES"
    ];
    const paragraphs = [
      "Le Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et de l’Innovation et l’Ambassade de la Hongrie au Maroc ont organisé aujourd’hui le 14 novembre 2023 au siège du Ministère, la cérémonie de lancement des projets retenus pour financement dans le cadre de l’appel à projets « Maroc-Hongrie » ",
      "Créée en 1995, la FST de Tanger est un des huit établissements de l’Université Abdelmalek Essaâdi . Elle regroupe actuellement une trentaine de programmes d'études repartis sur quatre cycles offerts par neuf ",
      "L’équipe administrative de l’Institut Cervantes s’est rendue à la Faculté des Sciences et Techniques de Tanger dans le but de mettre en place une future collaboration sous forme de convention de partenariat.Cette collaboration vise à renforcer les compétences linguistiques des étudiants ainsi que du personnel administratif de la faculté"
    ];
    function changeText(index) {
      textContent.innerHTML = `<h2><a href='#'>${headlines[index]}</a></h2><p>${paragraphs[index]}</p>`;
    }
    bulletsContainer1.addEventListener('click', function () {
      bulletsContainer1.classList.add('active');
      changeBackground(0);
      changeText(0);
      myMove();
    });
   
    
    bulletsContainer2.addEventListener('click', function () {
      bulletsContainer2.classList.add('active');
      changeBackground(1);
      changeText(1);
      myMove();
    });
    bulletsContainer3.addEventListener('click', function () {
      bulletsContainer3.classList.add('active');
      changeBackground(2);
      changeText(2);
      myMove();
    });

    function changeBackgroundAutomatically() {
      currentBackgroundIndex = (currentBackgroundIndex + 1) % backgrounds.length;
      changeBackground(currentBackgroundIndex);
      changeText(currentBackgroundIndex);
      
    }
    setInterval(changeBackgroundAutomatically, 5000);
  });
  // Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function myMove() {
  let id = null;
  const elem = document.getElementById("animate");   
  let pos = 0;
  clearInterval(id);
  id = setInterval(frame, 5);
  function frame() {
    if (pos == 300) {
      clearInterval(id);
    } else {
      pos++; 
      elem.style.top = pos + "px"; 
      
    }
  }
}