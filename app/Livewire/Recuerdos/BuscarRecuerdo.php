<?php

namespace App\Livewire\Recuerdos;

use Livewire\Component;
use App\Models\Corredor;

class BuscarRecuerdo extends Component
{
    // Models
    public $documento;

    // Useful vars
    public $recuerdo;

    public function render()
    {
        return view('livewire.recuerdos.buscar-recuerdo');
    } 

    public function getRecuerdo(){
        $this->recuerdo = Corredor::where('document', $this->documento)->first();
        dd($this->recuerdo);
    }
}
