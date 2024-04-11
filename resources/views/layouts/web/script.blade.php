<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script>
// Obtener el elemento del input de cantidad
var cantidadInput = document.getElementById('cantidad');

// Obtener los botones de sumar y restar
var restarBtn = document.getElementById('restar');
var sumarBtn = document.getElementById('sumar');

// Agregar un evento de clic al botón de restar
restarBtn.addEventListener('click', function() {
    // Obtener el valor actual de la cantidad
    var cantidad = parseInt(cantidadInput.value);
    // Verificar si la cantidad es mayor que 1 antes de restar
    if (cantidad > 1) {
        cantidadInput.value = cantidad - 1; // Disminuir la cantidad en 1
    }
});

// Agregar un evento de clic al botón de sumar
sumarBtn.addEventListener('click', function() {
    // Obtener el valor actual de la cantidad
    var cantidad = parseInt(cantidadInput.value);
    cantidadInput.value = cantidad + 1; // Aumentar la cantidad en 1
});

// BONOTES DE LIKE
document.addEventListener('DOMContentLoaded', function() {
    // Obtener todos los botones de "dar like"
    var likeButtons = document.querySelectorAll('.like-btn');

    // Agregar un controlador de eventos para cada botón de "dar like"
    likeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Obtener el ID del producto asociado con el botón
            var productId = button.getAttribute('data-product-id');

            // Realizar la lógica para cambiar el estado del "like"
            // Por ejemplo, cambiar el color del corazón cuando se hace clic
            button.querySelector('i').classList.toggle('text-danger');
        });
    });
});



</script>
<script src="//unpkg.com/alpinejs" defer></script>
{{-- @livewireScripts --}}


<script>
$(document).on('click', '.add-car', function(e){
    e.preventDefault();
    var button = $(this);
    var nombre = button.data('nombre');
    var description= button.data('description');
    var price= button.data('price');
    var image= button.data('image');
    var material= button.data('material');

    console.log(button);
    console.log(nombre);
    console.log(description);
    console.log(price);
    console.log(image);
    console.log(material);

    $('.item-name').html(nombre);
    $('.item-description').html(description);
    $('.item-price').html(price);

    $('#addProduct').modal('show');

});
</script>
