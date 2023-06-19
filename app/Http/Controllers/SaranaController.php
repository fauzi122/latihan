<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaranaPrasarana;
class SaranaController extends Controller
{
    public function index()
    {
        $saranaPrasarana = SaranaPrasarana::all();
        return view('sarana.index', ['saranaPrasarana' => $saranaPrasarana]);
    }
}
