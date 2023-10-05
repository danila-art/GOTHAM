// Работа с модулями
let module = document.getElementById('module');
let moduleRegistration = document.getElementById("moduleRegistration");
let closeButtonRegistration = document.getElementById('closeButtonRegistration');
let moduleAutorization = document.getElementById("moduleAutorization");
let closeButtonAutorization = document.getElementById('closeButtonAutorization')
let user = document.getElementById("user");

user.addEventListener('click', () => {
    module.style.display = "block";
    moduleAutorization.style.display = "block"
});
closeButtonRegistration.addEventListener('click', () => {
    module.style.display = "none";
    moduleRegistration.style.display = 'none';
})
closeButtonAutorization.addEventListener('click', () => {
    module.style.display = "none";
    moduleAutorization.style.display = 'none';
})
let buttonToAutorizatio = document.getElementById('buttonToAutorization');
buttonToAutorization.addEventListener('click', ()=>{
    moduleRegistration.style.display = 'none';
    moduleAutorization.style.display = 'block';
}) 
let buttonToRegistratio = document.getElementById('buttonToRegistration');
buttonToRegistration.addEventListener('click', ()=>{
    moduleRegistration.style.display = 'block';
    moduleAutorization.style.display = 'none';
}) 

// Проверка данных

