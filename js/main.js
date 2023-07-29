function centralizar() {
  let caixa = document.getElementById("caixa");
  let caixa_width = caixa.offsetWidth;
  let caixa_height = caixa.offsetHeight;
  let window_width = window.innerWidth;
  let window_height = window.innerHeight;
  let scroll_x = caixa_width / 2 - window_width / 2;
  let scroll_y = caixa_height / 2 - window_height / 2;
  window.scrollTo(scroll_x, scroll_y);
}
centralizar();

function definir_fundo() {
  let caixa = document.getElementById("caixa");
  let imagens = document.querySelectorAll('img');
  let imagem_index = Math.floor(Math.random() * imagens.length);
  let imagem_url =  imagens[imagem_index].getAttribute("src");
  let css = `background-image: url(${imagem_url})`;
  caixa.setAttribute("style", css);
  console.log(imagem_index);
  
}

let myPage = document.getElementById('caixa');
let content = document.getElementById('midias');
let isDragging = false;
let startX, startY, scrollLeft, scrollTop, startZoom = 1;

myPage.addEventListener('mousedown', function(e) {
  isDragging = true;
  startX = e.clientX;
  startY = e.clientY;
  scrollLeft = myPage.scrollLeft;
  scrollTop = myPage.scrollTop;
  
  myPage.style.cursor = 'grabbing';
  myPage.style.cursor = '-webkit-grabbing';
});

document.addEventListener('mousemove', function(e) {
  if (!isDragging) return;
  let x = e.clientX;
  let y = e.clientY;
  let walkX = (x - startX) * 1.5;
  let walkY = (y - startY) * 1.5;
  myPage.scrollLeft = scrollLeft - walkX;
  myPage.scrollTop = scrollTop - walkY;
});

document.addEventListener('mouseup', function() {
  isDragging = false;
  
  myPage.style.cursor = 'grab';
  myPage.style.cursor = '-webkit-grab';
});