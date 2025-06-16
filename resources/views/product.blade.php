<x-layout>
  @seo(['title' => $product->name . ' | ' . config('app.name')])
  @seo(['description' => $product->description]);

  <x-navigation />

  <x-product :product="$product" />

  <x-cta />

  <x-footer />

</x-layout>
