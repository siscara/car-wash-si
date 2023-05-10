<?php

namespace App\Http\Controllers;

use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function getRole()
    {
        $data = Role::all();

        $result = RoleResource::collection($data);
        // dd($result);
        return $this->sendResponse($result, "Succesful Get");
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function news()
    {
        return view('examples.dashboard');
    }
}
