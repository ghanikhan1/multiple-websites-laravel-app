<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreationController extends Controller
{
    public function index()
    {
        return view('creations', ['creations' => $this->getCreations()]);
    }

    public function loopStudio()
    {
        $creations = $this->getCreations();
        return view('loopstudio', ['creations' => $creations]);
    }


    private function getCreations()
    {
        return config('creationsData');
    }
}
