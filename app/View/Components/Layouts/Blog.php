<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;
use Illuminate\View\View;

class Blog extends Component
{
    public function render(): View
    {
        return view('layouts.blog');
    }
}