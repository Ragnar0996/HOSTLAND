<?php

namespace App\Http\Livewire;

use App\Application;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

class ApplicationsTable extends LivewireDatatable
{
    public $model = Application::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID')
                ->defaultSort('asc')
                ->sortBy('id'),

            DateColumn::name('fecha')
                ->label('Fecha'),

            Column::name('centro')
                ->label('Centro'),

            Column::name('nombre')
                ->label('Nombre'),

            Column::name('curso')
                ->label('Curso'),

            Column::name('edad')
                ->label('Edad'),

            Column::name('email')
                ->label('e-mail'),

            Column::name('telefono')
                ->label('Telefono'),

            Column::name('etiqueta')
                ->label('Etiquetas')
        ];
    }
}