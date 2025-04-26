<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport; 
use Illuminate\Support\Facades\File;



class ExportController extends Controller {
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function loadDepartments() {
        $json = File::get(public_path('data/departments.json'));
        $departments = json_decode($json, true);
        
        return response()->json($departments);
    }

    public function loadCities($cod_departamento) {
        $json = json_decode(File::get(public_path('data/cities.json')),true);
        $cities = [];
        
        foreach ($json as $city) {
            if($city['Cod_Departamento'] == $cod_departamento){
                $cities[] = array(
                    'cod_ciudad' => $city['Cod_Municipio'],
                    'nom_ciudad' => $city['Nombre_Municipio']
                );
            }
        }
    
        return response()->json($cities);
    }
}
