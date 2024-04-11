<div class="col-md-12">
    <h4 class="text-secondary mb-4"
        style="border-bottom: 1px solid #1e1d1d; padding-bottom: 10px; font-family: 'Montserrat', sans-serif;">
        {{$title}}
    </h4>
    <div class="row">
        @foreach ($items as $item)
            <x-cards.card-item :item="$item" />
        @endforeach
    </div>
</div>
