{{-- {{dd($item)}} --}}
<div class="col-md-4 mb-3">
    <div class="card bg-transparent border-0">
        <img src="{{ asset('images/' . $item->image) }}">

        <div class="card-body p-0">
            <h5 class="card-title text-white">{{ $item->name }}</h5>
            <p class="card-text text-white">{{ $item->description }}</p>
            <p class="card-text text-white">Precio: ${{ $item->price }}</p>

            <!-- Íconos de estrellas para calificación -->
            <div class="d-flex justify-content-center align-items-center mb-2">
                @for ($i = 0; $i < 5; $i++)
                    @if ($i < $item->rating)
                        <i class="bi bi-star-fill text-warning"></i>
                    @else
                        <i class="bi bi-star text-warning"></i>
                    @endif
                @endfor
            </div>

            <!-- Contenedor para botones de "agregar" y "compartir" -->
            <div class="d-md-flex">
                <!-- Botón de "dar like" -->
                <button type="button" class="btn btn-link text-white like-btn"
                    data-product-id="{{ $item->id }}">
                    <i class="bi bi-heart"></i>
                </button>
            </div>

            @auth
                <button class="btn btn-primary custom-btn-color add-car" id="{{ $item->id }}"
                    data-bs-toggle="modal"
                    data-nombre="{{ $item->name }}"
                    data-description="{{ $item->description }}"
                    data-price="{{ $item->price }}"
                    data-image="{{ $item->image }}"
                    data-material="{{ $item->material }}"
                    >
                    + Agregar
                </button>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary custom-btn-color">+ Agregar </a>
            @endauth


        </div>
    </div>
</div>
