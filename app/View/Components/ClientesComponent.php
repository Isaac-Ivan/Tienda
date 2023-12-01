<?php

namespace App\View\Components;

use App\Http\Controllers\ClientesController;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ClientesComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public $clientes;
    public function render(): View|Closure|string
    {
        $clientesController = new ClientesController();
        $this->clientes = $clientesController->Listar();
        return view('components.clientes-component', [
            'cuadernos' => $this->clientes,
        ]);
    }
}
