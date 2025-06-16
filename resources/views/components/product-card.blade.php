<div class="group relative">
  <img
    alt="{{ $product->name }}"
    src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg"
    class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80"
  />
  <div class="mt-4 flex justify-between">
    <div>
      <h3 class="text-sm text-gray-700">
        <a href="{{ route('product', $product) }}" class="font-semibold">
          <span aria-hidden="true" class="absolute inset-0"></span>
          {{ $product->name }}
        </a>
      </h3>
      <p class="mt-1 text-sm text-gray-500">
        {{ str($product->description)->limit(35) }}
      </p>
    </div>
    <p class="text-sm font-medium text-gray-900">
      ${{ number_format($product->price) }}
    </p>
  </div>
</div>

