<?php

namespace App\View\Components;

use App\Http\Controllers\ProveedoresController;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ProveedoresComponent extends Component
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
    public $proveedores;
    public function render(): View|Closure|string
    {
        $proveedoresController = new ProveedoresController();
        $this->proveedores = $proveedoresController->Listar();
        return view('components.proveedores-component', [
            'cuadernos' => $this->proveedores,
        ]);
    }
}
