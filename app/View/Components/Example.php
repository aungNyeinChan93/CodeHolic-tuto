<?php

namespace App\View\Components;

use Closure;
use App\Models\User;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Example extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $name, public array $users)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $something = 'something';
        return view('components.example', [
            'any' => $something
        ]);
    }

    public function test()
    {
        return 'test-function or method';
    }
}
