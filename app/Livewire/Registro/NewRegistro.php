<?php

namespace App\Livewire\Registro;

use Livewire\Component;
use App\Models\Corredor;

class NewRegistro extends Component
{
    // Models
    public $name, $document, $phone, $email, $picture;

    public function render()
    {
        return view('livewire.registro.new-registro');
    }

    public function store(){
        $this->validate([
            'name' => 'required|string',
            'document' => 'required|numeric|unique:corredores',
            'phone' => 'required|numeric|unique:corredores',
            'email' => 'required|email|unique:corredores',
            'picture' => 'required'
        ]);

        $corredor = new Corredor();
        $corredor::create([
            'name' => $this->name,
            'document' => $this->document,
            'phone' => $this->phone,
            'email' => $this->email,
            'picture' => $this->picture
        ]);

        $this->dispatch('new-corredor');
        $this->reset('name', 'document', 'phone', 'email', 'picture');
    }

     // VALIDATIONS
    public function messages() 
    {
        return [        
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'Oops, formato de nombre inválido.',

            'document.required' => 'El documento es obligatorio.',
            'document.numeric' => 'Este campo debe ser un número.',
            'document.unique' => 'Este documento ya fué registrado.',

            'phone.required' => 'El teléfono es obligatorio.',
            'phone.numeric' => 'Este campo debe ser un número.',
            'phone.unique' => 'Este teléfono ya fué registrado.',

            'email.required' => 'El teléfono es obligatorio.',
            'email.numeric' => 'Este campo debe ser un número.',
            'email.unique' => 'Este teléfono ya fué registrado.',
            'email.email' => 'Oops, formato de correo inválido.',

            'picture.required' => 'El nuermo de foto es obligatorio.'
        ];
    }
}
