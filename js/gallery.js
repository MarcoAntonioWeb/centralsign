let imagens = document.querySelectorAll('.zoom'); 
// variavel recebe as imagens Geral.
let modalGeral = document.querySelector('.modalGeral'); 
//variavel recebe configuração class.
let modalImg = document.querySelector('#modal_img'); 
// variavel recebe imagens Modal.
let btClose = document.querySelector('#bt_close'); 
// variavel recebe o botão.
let srcVal = "";

for(let i = 0; i < imagens.length; i++) {
    imagens[i].addEventListener('click', function() {
            

        srcVal = imagens[i].getAttribute('src');
        modalImg.setAttribute('src', srcVal);
        modalGeral.classList.toggle('modal_active');
        //(toggle) função de ativar ou desativar a class
    });
}


/****** Criar o evento para desativar o botão  *******/
btClose.addEventListener('click', function() {
    modalGeral.classList.toggle('modal_active') 
    //(toggle) função ativa e desativa o botão da class
})
  