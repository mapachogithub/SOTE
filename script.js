const form = document.getElementById("myForm");
form.addEventListener("submit", (event) => {
  event.preventDefault();
  const nombre = form.nombre.value;
  const apellido = form.apellido.value;
  const documento = form.documento.value;
  console.log(`Nombre: ${nombre}\nApellido: ${apellido}\nDocumento: ${documento}`);
alert(`Nombre: ${nombre}\nApellido: ${apellido}\nDocumento: ${documento}`);
  form.reset();
});