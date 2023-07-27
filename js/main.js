centralizar();
definir_fundo();


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

// function definir_fundo() {
//   let caixa = document.getElementById("caixa");
//   let imagens = document.querySelectorAll('img');
//   let imagem_index = Math.floor(Math.random() * imagens.length);
//   let imagem_url =  imagens[imagem_index].getAttribute("src");
//   let css = `background-image: url(${imagem_url})`;
//   caixa.setAttribute("style", css);
//   console.log(imagem_index);
  
// }
