<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportProductController extends Controller
{
    public function import(Request $request)
{
    $file = $request->file('file');
    Excel::import(new ProductsImport, $file);
    return redirect()->back()->with('success', 'Productos importados correctamente.');
}

}
