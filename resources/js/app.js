console.log('hola');

 // Obtener referencias a los elementos de imagen y inputs
 const image1 = document.getElementById('image1');
 const image2 = document.getElementById('image2');
 const showImage1Input = document.getElementById('showImage1');
 const showImage2Input = document.getElementById('showImage2');

 // Agregar controladores de eventos para los inputs
 showImage1Input.addEventListener('change', () => {
     if (showImage1Input.checked) {
         image1.classList.remove('picture__none');
         image1.classList.add('picture__show');
         image2.classList.remove('picture__show');
         image2.classList.add('picture__none');
     }
 });

 showImage2Input.addEventListener('change', () => {
     if (showImage2Input.checked) {
         image2.classList.remove('picture__none');
         image2.classList.add('picture__show');
         image1.classList.remove('picture__show');
         image1.classList.add('picture__none');
     }
 });