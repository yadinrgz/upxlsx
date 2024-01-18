<?php
 
namespace App\Http\Controllers;
 

use App\Exports\UsersExport;
use App\Imports\EmpleadosImport;
use App\Models\Empleados;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;




 
class EmpleadosController extends Controller
{

    
    public function uploadFormcsv()
    {
        return view('empleadoscsv.uploadFormcsv');
    }


    public function importExcelCSV(Request $request) 
    {
        $request->validate([
           'file' => 'required|mimes:csv',
        ]);
 
        $file = $request->file('file');

        Excel::import(new EmpleadosImport, $file);
 
        return redirect()->route('empleadoscsv.uploadFormcsv')->with('success', 'Products imported successfully.');
    }
 
    public function getEmpleadosTable()
    {
        $empleados = Empleados::all();
        return view('empleadoscsv.empleadoscsvTable', compact('empleadoscsv'));
    }



    public function exportExcelCSV($slug) 
    {
        return Excel::download(new UsersExport, 'empleados.'.$slug);
    }
    
}