const form = document.getElementById("contact-form")

form.addEventListener('submit', e => {
    e.preventDefault()
    
    const datos = new FormData(form) 
    fetch('./php/contact_process.php', {
        method: 'POST',
        body: datos
    })
    .then(respuesta => respuesta.json())
    .then(data => {
        if(data.estado){
            console.log("Enviado correctamente")
        }else{
            console.log("Hubo un error");
        }
    })
    
})