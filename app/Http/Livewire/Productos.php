<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;


class Productos extends Component
{
    public $productos, $descripcion, $cantidad, $id_producto;
    public $modal=false;

    public function render()
    {
        $this->productos=Producto::all();
        return view('livewire.productos');
    }

    public function crear(){
        $this->abrirModal();
        $this->limpiarCampos();

    }

    public function abrirModal(){
        $this->modal=true;
    }

    public function cerrarModal(){
        $this->modal=false;
    }

    public function limpiarCampos(){
        $this->id_producto="";
        $this->descripcion="";
        $this->cantidad="";
    }

    public function editar($id){
        $producto=Producto::findOrFail($id);
        $this->id_producto=$id;
        $this->descripcion=$producto->descripcion;
        $this->cantidad=$producto->cantidad;
        $this->abrirModal();
    }

    public function borrar($id){
      Producto::find($id)->delete();
      session()->flash('message','Registro Eliminado con exito');
    }

    public function guardar(){
        Producto::updateOrCreate(['id'=>$this->id_producto],
        [
            'descripcion'=>$this->descripcion,
            'cantidad'=>$this->cantidad
        ]);

        session()->flash('message',
            $this->id_producto ? 'Actualizado Correctamente':'Alta Exitosa'
        );

        $this->cerrarModal();
        $this->limpiarCampos();

        
    }
}
