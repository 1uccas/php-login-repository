// recupera o modo salvo no localStorage
const savedMode = localStorage.getItem('mode');

// seleciona os elementos
const body = document.querySelector(".bg-dark");
const buttonWhite = document.querySelector("#button_white");
const buttonDark = document.querySelector("#button_dark");
const boxLogin = document.querySelector('.box-login');
let test = document.querySelector('.div-initil-left');

// função para aplicar o modo
const applyMode = (mode) => {
  body.className = mode === 'dark' ? "bg-dark" : "bg-white";
  test.className = mode === 'dark' ? "div-initil_white_mod" : "div-initil";
  buttonDark.style.display = mode === 'dark' ? "none" : "block";
  buttonWhite.style.display = mode === 'dark' ? "block" : "none";
};

// adiciona os eventos
buttonWhite.addEventListener('click', () => {
  localStorage.setItem('mode', 'light');
  applyMode('light');
});

buttonDark.addEventListener('click', (e) => {
  e.preventDefault();
  localStorage.setItem('mode', 'dark');
  applyMode('dark');
});

// aplica o modo ao carregar a página
applyMode(savedMode || 'dark'); // Se não houver um valor salvo, assume o modo escuro como padrão
