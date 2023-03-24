<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        return '<h1>Homepage!!!!</h1><a href="/about">Go to the about page</a>';
    }

    public function aboutPage() {
        return '<h1>About Page!!!!</h1><a href="/">Back To Home</a>';
    }
}