<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UserDataTable;

class UserController extends Controller
{
    public function index(UserDataTable $datatable){

        return $datatable->render('users');
    }
}
