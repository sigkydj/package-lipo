<?php

namespace PackagesTestxx1\Http\Controllers;

use Illuminate\Http\Request;
use PackagesTestxx1\Imports\userImport;
use Maatwebsite\Excel\Facades\Excel;

class ProcdutsController extends Controller
{
    public function index(){
        return view('import.import_excel');
    }

    public function importexcel_post(Request $request){
        //dd($request->all());
        Excel::import(new userImport, $request->file('excel_file'));
        return redirect()->back();
    }
}
