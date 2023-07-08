@foreach ($newProducts as $product)
    <div class="product" data-product-id="{{ $product->id }}">
        <!-- Mostrar los detalles del producto -->
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->description }}</p>
    </div>
@endforeach
