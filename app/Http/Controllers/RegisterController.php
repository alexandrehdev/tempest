<?php

namespace App\Http\Controllers;
use App\Http\Requests\Register\Store\StoreRequest;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view("pages.register");
    }

    public function store(StoreRequest $request)
    {
        $data_validated = $request->validated();
    }
}
