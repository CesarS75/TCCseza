const getElement = (... queries) => document.querySelector(... queries);

/* Botões de abrir o modal (1 - 5) */
const button = getElement('.open-modal-button');
const button2 = getElement('.open-modal-button2');
const button3 = getElement('.open-modal-button3');
const button4 = getElement('.open-modal-button4');

/* Botões de fechar o modal (1 - 5) */
const closeButton = getElement('.close-btn');
const closeButton2 = getElement('.close-btn2');
const closeButton3 = getElement('.close-btn3');
const closeButton4 = getElement('.close-btn4');

const container = getElement ('.modal-container');
const container2 = getElement ('.modal-container2');
const container3 = getElement ('.modal-container3');
const container4 = getElement ('.modal-container4');

const modal = getElement ('.modal');

/* A classe que mostra o modal (1 - 5) */
const activeModalClass = 'modal-container-show';
const activeModalClass2 = 'modal-container-show2';
const activeModalClass3 = 'modal-container-show3';
const activeModalClass4 = 'modal-container-show4';

/* Função pra abrir o modal */
const openModal = () => container.classList.add(activeModalClass);
const openModal2 = () => container2.classList.add(activeModalClass2);
const openModal3 = () => container3.classList.add(activeModalClass3);
const openModal4 = () => container4.classList.add(activeModalClass4);

/* Botões pra fechar o modal */
const closeModal = () => container.classList.remove(activeModalClass);
const closeModal2 = () => container2.classList.remove(activeModalClass2);
const closeModal3 = () => container3.classList.remove(activeModalClass3);
const closeModal4 = () => container4.classList.remove(activeModalClass4);

/* Botões toOpen (1 - 5) */
button.addEventListener('click', () => {
    console.log("botao foi clicado");
    openModal();
});
button2.addEventListener('click', () => {
    console.log("botao foi clicadao");
    openModal2();
});
button3.addEventListener('click', () => {
    console.log("botao foi clicadao");
    openModal3();
});
button4.addEventListener('click', () => {
    console.log("botao foi clicadao");
    openModal4();
});


/* Botões toClose (1 - 5) */
closeButton.addEventListener('click', () => {
    closeModal();
});
closeButton2.addEventListener('click', () => {
    closeModal2();
});
closeButton3.addEventListener('click', () => {
    closeModal3();
});
closeButton4.addEventListener('click', () => {
    closeModal4();
});

/*
container.addEventListener('click', (event) => {
    if (modal.contains(event.target)) return;

    closeModal();
});
*/