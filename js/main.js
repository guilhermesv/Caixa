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

var myPage = document.getElementById('caixa');
var isDragging = false;
var startX, startY, scrollLeft, scrollTop, zoomLevel = 1;

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
  var x = e.clientX;
  var y = e.clientY;
  var walkX = (x - startX) * 1.5;
  var walkY = (y - startY) * 1.5;
  myPage.scrollLeft = scrollLeft - walkX;
  myPage.scrollTop = scrollTop - walkY;
});

document.addEventListener('mouseup', function() {
  isDragging = false;
  
  myPage.style.cursor = 'grab';
  myPage.style.cursor = '-webkit-grab';
});

myPage.addEventListener('wheel', function(e) {
  e.preventDefault();
  var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
  var zoomStep = 0.1;
  var zoomValue = zoomLevel + delta * zoomStep;

  // Limita o zoom para que não fique muito pequeno ou muito grande
  if (zoomValue >= 0.5 && zoomValue <= 3) {
    zoomLevel = zoomValue;
    myPage.style.transform = `scale(${zoomLevel})`;
  }
});