<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
       return view ('admin.dashboard');
    }
    public function listUsers()
    {
        return view ('admin.users.listUsers');    
    }
    public function createUser()
    {
        return view ('admin.users.createUser');    
    }
    public function listOffers()
    {
        return view ('admin.offers.listOffers');    
    }
}
