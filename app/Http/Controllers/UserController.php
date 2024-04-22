<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\User;
use Excel;

class UserController extends Controller
{

    public function index()
    {
        $data ['title'] = 'Users List';
        $data ['users'] = User::all();
        return view('user.index',$data);
    }

    public function addImportData(){
        $data ['title'] = 'Import Data';
        return view('user.user-import',$data);
    }

    public function export()
    {
        return Excel::download(
        new UsersExport, 'users.xlsx',
        \Maatwebsite\Excel\Excel::XLSX);
    }

    public function import(Request $request){
        Excel::import(new UsersImport, request()->file('file'));
        return redirect()->route('users')->with('success','Data Imported Successfully');
    }



}
