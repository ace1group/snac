<x-layout>
  @seo(['title' => 'Products | ' . config('app.name')])
  @seo(['description' => 'This is the home page of my website.'])

  <x-navigation />

  <x-products />

  <x-cta />

  <x-footer />

</x-layout>
