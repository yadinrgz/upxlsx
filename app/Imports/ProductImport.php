<?php
namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ProductImport implements ToModel, WithStartRow
{
    public function model(array $row)
    {
        if (!isset($row[0])) {
            return null;
        }
    
        return new Product([
            'numeroempleado' => $row['0'],
            'name' => $row['1'],
            'puesto' => $row['6'],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }

}
