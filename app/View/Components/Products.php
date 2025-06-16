<?php

namespace App\View\Components;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Products extends Component
{

  public function __construct()
  {
    //
  }

  public function render(): View|Closure|string
  {
    return view('components.products', [
      'products' => Product::orderBy('created_at', 'desc')->get(),
    ]);
  }
}