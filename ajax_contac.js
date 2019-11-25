const form = document.getElementById("contact-form")
const estado = document.getElementById("estado")
const url = './php/contact_process.php';
console.log("cargado")
form.addEventListener('submit', async e => {
    e.preventDefault()
    
    const datos = new FormData(form) 
    const respuesta = await fetch( url , {
        method: 'POST',
        body: datos
    })
    const data = await respuesta.json();
    console.log(data.estado)
    
/*    .then(respuesta =>{
        console.log(respuesta)
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
        }*/
})
