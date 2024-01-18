<?php
    
namespace App\Imports;
    
use App\Models\Empleados;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
     
class EmpleadosImport implements ToModel, WithStartRow
{

    public function model(array $row)
    {
        return new Empleados([
            'numeroempleadocsv' => $row['0'],
            'name'     => $row['1'],
            'grupo'    => $row['2'],
            'puesto'    => $row['3'],

        ]);
    }
    public function startRow(): int
    {
        return 2;
    }
}