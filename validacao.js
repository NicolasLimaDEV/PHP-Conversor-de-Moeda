const mensagemErro = document.querySelector('.msg-erro')
const formulario = document.querySelector("#form")
const inputMoeda = document.querySelector("#moeda")

formulario.addEventListener('submit', (e)=> {
   if(inputMoeda.value == ''){
      e.preventDefault()
      mensagemErro.classList.add('active')
   } else{
      mensagemErro.classList.remove('active')
   }
})

inputMoeda.addEventListener('input', ()=> {
   if(inputMoeda.value != ''){
      mensagemErro.classList.remove('active')
   }
})