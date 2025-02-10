<?php

namespace App\View\Components;

use Closure;
use App\Models\User;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class UserTable extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $title)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user-table');
    }

    public function users()
    {
        return User::paginate(10);
    }
}
