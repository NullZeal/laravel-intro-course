<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class SessionsController extends Controller
{
    public function destroy(){

        auth()->logout();

        return redirect("/")->with("success","Goodbye!");
    }

    public function create(){
        return view("sessions.create");
    }

    public function store()
    {
        $attributes = request()->validate([
            "email"=> "required|email",
            "password"=> "required"
        ]);

        if (auth()->attempt($attributes)){
            session()->regenerate();
            return redirect("/")->with("success","Welcome back!");
        }

        throw ValidationValidationException::withMessages([
            "email"=> "Your provided credentials could not be verified!"
        ]);

        // return back()
        // ->withInput()
        // ->withErrors(["email"=> "Your provided credentials could not be verified!"]);
    }
}