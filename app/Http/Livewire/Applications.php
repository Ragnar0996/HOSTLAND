<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Application;

class Applications extends Component
{
    public $fecha, $centro, $nombre, $curso, $edad, $telefono, $email, $etiqueta, $application, $application_id;
    public $isOpen = 0;

    public function render(){
        $this->applications = Application::all();
        return view('livewire.applications');
    }

    public function create(){
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal(){
        $this->isOpen = true;
    }

    public function closeModal(){
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->fecha = '';
        $this->centro = '';
        $this->nombre = '';
        $this->curso = '';
        $this->edad = '';
        $this->telefono = '';
        $this->email = '';
        $this->etiqueta = '';
        // $this->application_id = '';
    }

    public function store(){
        $this->validate([
            'fecha' => 'required',
            'centro' => 'required',
            'nombre' => 'required',
            'curso' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'etiqueta' => 'required',
            // 'application_id' => 'required'
        ]);

        Application::updateOrCreate(['id' => $this->application_id], [
            'fecha' => $this->fecha,
            'centro' => $this->centro,
            'nombre' => $this->nombre,
            'curso' => $this->curso,
            'edad' => $this->edad,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'etiqueta' => $this->etiqueta,
            // 'application_id' => $this->application_id
        ]);

        session()->flash('message', 
            $this->application_id ? 'Solicitud actualizada correctamente.' : 'Solicitud creada correctamente.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id){
        $application = Application::findOrFail($id);
        $this->application_id = $id;
        $this->fecha = $application->fecha;
        $this->centro = $application->centro;
        $this->nombre = $application->nombre;
        $this->curso = $application->curso;
        $this->edad = $application->edad;
        $this->telefono = $application->telefono;
        $this->email = $application->email;
        $this->etiqueta = $application->etiqueta;
        // $this->application_id = $application->application_id;

        $this->openModal();
    }

    public function delete($id){
        Application::find($id)->delete();
        session()->flash('message', 'Solicitud eliminada correctamente.');
    }

}
