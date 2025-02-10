<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;

class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $href = '#')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }

    //
    // public function data()
    // {
    //     $url = 'https://fakestoreapi.com/products';
    //     $response = Http::get($url);
    //     $data = $response->json();
    //     dd($data);
    //     return $data;
    // }
}
