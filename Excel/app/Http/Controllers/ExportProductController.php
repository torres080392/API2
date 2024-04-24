<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;


class ExportProductController extends Controller
{
    //

    public function export()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

}
