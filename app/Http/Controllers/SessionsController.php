<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SessionsController extends Controller
{
    public function destroy(){

        auth()->logout();

        return redirect("/")->with("success","Goodbye!");
    }
}
