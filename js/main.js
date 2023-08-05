window.addEventListener('load', function() {
  // Todos os recursos externos e conteúdo da página foram carregados
  console.log('Todos os recursos externos e conteúdo carregados.');
  drag_inicializar();
  interacao();
  centralizar();
});

function centralizar() {
  let caixa = document.getElementById("caixa");
  let midias = document.getElementById("midias");
  let midias_width = midias.offsetWidth;
  let midias_height = midias.offsetHeight;
  let caixa_width = caixa.offsetWidth;
  let caixa_height = caixa.offsetHeight;
  let scroll_x = midias_width / 2 - caixa_width / 2;
  let scroll_y = midias_height / 2 - caixa_height / 2;
  caixa.scrollTop = scroll_y;
  caixa.scrollLeft = scroll_x;
  caixa.classList.remove("carregando");
}

function drag_inicializar() {
  let myPage = document.getElementById('caixa');
  let isDragging = false;
  let startX, startY, scrollLeft, scrollTop;

  myPage.addEventListener('mousedown', function (e) {
    isDragging = true;
    startX = e.clientX;
    startY = e.clientY;
    scrollLeft = myPage.scrollLeft;
    scrollTop = myPage.scrollTop;

    myPage.style.cursor = 'grabbing';
    myPage.style.cursor = '-webkit-grabbing';
  });

  document.addEventListener('mousemove', function (e) {
    if (!isDragging) return;
    let x = e.clientX;
    let y = e.clientY;
    let walkX = (x - startX) * 1.5;
    let walkY = (y - startY) * 1.5;
    myPage.scrollLeft = scrollLeft - walkX;
    myPage.scrollTop = scrollTop - walkY;
  });

  document.addEventListener('mouseup', function () {
    isDragging = false;

    myPage.style.cursor = 'grab';
    myPage.style.cursor = '-webkit-grab';
  });
}



let contador = 0;
const contador_div = document.getElementById('contador');
const total = 159;

function interacao() {
  
  const imagens = document.querySelectorAll('.midia-grid li');
  
  
  for (const img of imagens) {

    img.addEventListener('touchstart', handleTouch);

    img.addEventListener('mouseover', function () {
      if( !img.classList.contains('visivel')) {
        contador++;
        contador_div.innerText = contador + "/" + total;
        img.classList.add('visivel');
      }
      
    });
  }
}

// Função para tratar o toque
function handleTouch(event) {
  // Evita que outros eventos sejam acionados no elemento
  // event.preventDefault();

  // Obtém a posição do toque em relação à janela
  const touchX = event.touches[0].clientX;
  const touchY = event.touches[0].clientY;

  // Obtém as coordenadas do elemento em relação à janela
  const elementoRect = this.getBoundingClientRect();
  const elementoX = elementoRect.left;
  const elementoY = elementoRect.top;

  // Obtém as dimensões do elemento
  const elementoWidth = this.offsetWidth;
  const elementoHeight = this.offsetHeight;

  // Verifica se o toque ocorreu dentro do elemento
  if (
    touchX >= elementoX &&
    touchX <= elementoX + elementoWidth &&
    touchY >= elementoY &&
    touchY <= elementoY + elementoHeight
  ) {
    console.log("elemento tocado")
    if( !this.classList.contains('visivel')) {
      contador++;
      contador_div.innerText = contador + "/" + total;
      this.classList.add('visivel');
    }
  }
}
