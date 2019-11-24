const form = document.getElementById("contact-form")
const estado = document.getElementById("estado")

form.addEventListener('submit', e => {
    e.preventDefault()
    
    const datos = new FormData(form) 
    fetch('./php/contact_process.php', {
        method: 'POST',
        body: datos
    })
    .then(respuesta => {
        
        return respuesta.json()})
    .then(data => {
        console.log(data)
        if(data.estado){
            console.log("Enviado correctamente")
            estado.classList.add("bg-danger")
            estado.style.width = "200px"
            estado.style.width = "200px"
            estado.innerText = "Enviado Correctamente"
        }else{
            console.log("Hubo un error");
        }
    })
    
})