// recupera o modo salvo no localStorage
const savedMode = localStorage.getItem('mode');

// seleciona os elementos
const body = document.querySelector(".bg-dark");
const buttonWhite = document.querySelector("#button_white");
const buttonDark = document.querySelector("#button_dark");
const boxLogin = document.querySelector('.box-login');
let test = document.querySelector('.div-initil');
const h3_form = document.querySelector('.h3_form');

// função para aplicar o modo
const applyMode = (mode) => {
  body.className = mode === 'dark' ? "bg-dark" : "bg-white";

  if (test) {
    test.className = mode === 'dark' ? "div-initil_white_mod" : "div-initil";
  }
  if (h3_form) {
    h3_form.className = mode === 'dark' ? "h3_form_white_mod" : "h3_form";
  }
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
