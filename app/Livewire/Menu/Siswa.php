<?php

namespace App\Livewire\Menu;

use Livewire\Component;

class Siswa extends Component
{
    public function render()
    {
        return view('livewire.menu.siswa')->extends('layouts.app')->section('content');
    }
}
