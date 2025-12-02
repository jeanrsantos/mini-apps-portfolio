<?php

namespace App\Livewire;

use Livewire\Component;

class SignatureBuilder extends Component
{
    // Propriedades vinculadas ao formulário (Data Binding)
    public $name = '';
    public $role = '';
    public $email = '';
    public $phone = '';
    public $linkedin = '';
    public $template = 'classic'; // Controla qual view parcial carregar

    // Atualização em tempo real (Real-time validation opcional)
    public function updated($propertyName)
    {
        // Lógica se precisar limpar ou formatar dados ao digitar
    }

    public function render()
    {
        return view('livewire.signature-builder');
    }
}