
document.getElementById("btnMenu").addEventListener("click",
    function () {
        let elemento = document.getElementById("navbar");
        if (elemento.classList.contains("navbar")) {
            elemento.classList.remove("navbar");
            elemento.classList.add("no_navbar");
        }else {
            elemento.classList.remove("no_navbar");
            elemento.classList.add("navbar");
        }
});


const nombre = document.querySelector("#nombre");
const telefono = document.querySelector("#telefono");
const email = document.querySelector("#email");
const mensaje = document.querySelector("#mensaje");
const formulario = document.querySelector(".formulario");
formulario.addEventListener('submit', validarFormulario);


function validarFormulario(e){
    e.preventDefault();

    if(nombre.value === "" || telefono.value === "" || email.value === "" || mensaje.value === "") {
        mostrarError('todos los campos son obligatorios')

        return;
    }
    alert('hemos resivido sus datos, pronto nos pondremos en contacto')
    e.target.submit();

    window.location.reload();



    console.log(nombre.value+" "+telefono.value+" "+email.value+" "+mensaje.value);
    console.log(`$(nombre.value) $(telefono.value) $(email.value) $(mensaje.value)`);
}


function mostrarError(mensaje){
    const alerta = document.createElement('p');
    alerta.textContent = mensaje;
    alerta.style.background= "red";
    alerta.style.color="white"
    formulario.appendChild(alerta);
    selTimeout(() => {
        alerta.remove();
    }, 5000) 
}