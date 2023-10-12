const botaoMenu = document.getElementById('botaoMenu');
const menuLista = document.getElementById('menuLista');

botaoMenu.addEventListener('click', () => {
    menuLista.classList.toggle('down');
});
  
 /* Dinâmica das animaçõe */ 
  
 /* Animação para a direita */ 
 const dashright = new IntersectionObserver( entries => {
   Array.from(entries).forEach(entry => { 
     if (entry.intersectionRatio >= 0.75) { 
     entry.target.classList.add('dash-right') 
     } 
   }) 
 }, { 
  threshold: [0.25 , 0.5 , 0.75 , 1] 
 }) 
 Array.from(document.querySelectorAll('.inicio-titulo, .sobre-titulo, .atuacao-titulo, .contato-mapa')).forEach( element => { 
 dashright.observe(element) 
 }) 
 /* Animação para a direita - fim */ 
  
  
 /* Animação para a esquerda */ 
 const dashleft = new IntersectionObserver( entries => { 
   Array.from(entries).forEach(entry => { 
     if (entry.intersectionRatio >= 0.75) { 
     entry.target.classList.add('dash-left') 
     } 
   }) 
 }, { 
  threshold: [0.25 , 0.5 , 0.75 , 1] 
 }) 
 Array.from(document.querySelectorAll('.inicio-texto, .carousel-titulo, .contato-form ')).forEach( element => { 
 dashleft.observe(element) 
 }) 
 /* Animação para a esquerda - fim*/ 
  
  
 /* Animação para cima */ 
 const dashup = new IntersectionObserver( entries => { 
   Array.from(entries).forEach(entry => { 
     if (entry.intersectionRatio >= 0.75) { 
     entry.target.classList.add('dash-up') 
     } 
   }) 
 }, { 
  threshold: [0.25 , 0.5 , 0.75 , 1] 
 }) 
 Array.from(document.querySelectorAll('.sobre-imagem, .sobre-imagem_desktop, .card, .contato-titulo')).forEach( element => { 
 dashup.observe(element) 
 }) 
 /* Animação para baixo - fim */ 
  
  
 /* Scrollspy */ 
 document.addEventListener('DOMContentLoaded', function() { 
   var elems = document.querySelectorAll('.scrollspy'); 
   var instances = M.ScrollSpy.init(elems, 200  ); 
 }); 
 /* Scrollspy fim */ 
  
 