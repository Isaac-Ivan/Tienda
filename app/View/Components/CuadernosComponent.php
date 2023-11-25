<?php

namespace App\View\Components;

use App\Http\Controllers\CuadernoController;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CuadernosComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public $cuadernos;
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        {
            $cuadernosController = new CuadernoController();
            $this->cuadernos = $cuadernosController->Listar();
            return view('components.cuadernos-component', [
                'cuadernos' => $this->cuadernos,
            ]);
        }
    }
}
