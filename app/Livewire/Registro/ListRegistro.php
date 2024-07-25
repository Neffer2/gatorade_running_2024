<?php

namespace App\Livewire\Registro;

use Livewire\Component;
use App\Models\Corredor;
use Livewire\WithPagination;
use Livewire\Attributes\On; 

class ListRegistro extends Component
{
    use WithPagination;
    
    #[On('new-corredor')]
    public function render()
    {
        $corredores = Corredor::paginate(15);
        return view('livewire.registro.list-registro', ['corredores' => $corredores]);
    }

    public function deleteCorredor($id){
        $corredor = Corredor::find($id);
        $corredor->delete();
    }
}
