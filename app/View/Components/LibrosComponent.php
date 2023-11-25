<?php

namespace App\View\Components;

use App\Http\Controllers\LibrosController;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class LibrosComponent extends Component
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
    public $libros;
    public function render(): View|Closure|string
    {
        $librosController = new LibrosController();
        $this->libros = $librosController->Listar();
        return view('components.libros-component', [
            'libros' => $this->libros,
        ]);
    }
}
