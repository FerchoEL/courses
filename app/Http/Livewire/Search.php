<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class Search extends Component
{
    public $search="HOLA MUNDO";
    public function render()
    {
        return view('livewire.search');
    }
    public function getResultsProperty()
    {
        return Course::where('title','like',"%".$this->search."%")->get();
    }
}
