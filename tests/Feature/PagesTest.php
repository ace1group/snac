<?php

use App\Models\Product;

it('has home page', function () {
    $response = $this->get(route('home'));
    $response->assertStatus(200);
});

it('has products page', function () {
    $response = $this->get(route('products'));
    $response->assertStatus(200);
});

it('has product pages', function () {
    foreach(Product::all() as $product) {
        $response = $this->get(route('product', ['product' => $product]));
        $response->assertStatus(200);
    }
});

it('has services page', function () {
    $response = $this->get(route('services'));
    $response->assertStatus(200);
});

it('has reviews page', function () {
    $response = $this->get(route('reviews'));
    $response->assertStatus(200);
});

it('has contact page', function () {
    $response = $this->get(route('contact'));
    $response->assertStatus(200);
});

it('has about page', function () {
    $response = $this->get(route('about'));
    $response->assertStatus(200);
});

it('has faq page', function () {
    $response = $this->get(route('faq'));
    $response->assertStatus(200);
});

it('has terms page', function () {
    $response = $this->get(route('terms'));
    $response->assertStatus(200);
});

it('has privacy page', function () {
    $response = $this->get(route('privacy'));
    $response->assertStatus(200);
});
