<?php

namespace App\Livewire\Menu;

use Livewire\Component;

class Piket extends Component
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function render()
    {
        return view('livewire.menu.piket')->extends('layouts.app')->section('content');
    }
}
