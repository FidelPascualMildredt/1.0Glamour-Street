@props(['category'])

<div class="col-md-3">
    <div class="card-container">
        <div class="card">
            <div class="front-content">
                <img src="{{ asset('assets/images/carrusel/clasico.jpg') }}" class="d-block w-100"
                    alt="Imagen de categoría">
            </div>
            <div class="content">
                <p class="heading">{{$category->name}}</p>
                <p>{{$category->description}}</p>
            </div>
        </div>
    </div>
</div>
