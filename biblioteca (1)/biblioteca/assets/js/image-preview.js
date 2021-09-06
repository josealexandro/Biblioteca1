foto.onchange = evt => {
   const [file] = foto.files
   if (file) {
      preview.src = URL.createObjectURL(file)
   }
}

capa.onchange = evt => {
   const [file] = capa.files
   if (file) {
      preview.src = URL.createObjectURL(file)
   }
}