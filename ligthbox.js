const imagenes = document.querySelectorAll('.img-galeria')
const imagenesLigth = document.querySelector('.agregar-imagen')
const contenedorLigth = document.querySelector('.imagen-ligth')
const menu1 = document.querySelector('.menu');

imagenes.forEach(imagen =>{
    imagen.addEventListener('click', ()=>{
        aparecerImagen(imagen.getAttribute('src'))
    })
})

contenedorLigth.addEventListener('click', (e)=>{
    if(e.target !== imagenesLigth){
        contenedorLigth.classList.toggle('show')
        imagenesLigth.classList.toggle('showImage')
        menu1.style.opacity = '1'
    }
})


const aparecerImagen = (imagen) =>{
    imagenesLigth.src = imagen
    contenedorLigth.classList.toggle('show')
    imagenesLigth.classList.toggle('showImage')
    menu1.style.opacity = '0'
}