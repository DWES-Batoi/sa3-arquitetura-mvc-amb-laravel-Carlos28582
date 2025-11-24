<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use SeekableIterator;

class partitController extends Controller {
    public $partits = [
  ['local' => 'FC Barcelona Femení', 'visitant' => 'Atlètic de Madrid Femení', 'data' => '2025-11-25', 'resultat' => '3-1'],
    ['local' => 'Atlètic de Madrid Femení', 'visitant' => 'Real Madrid Femení', 'data' => '2025-11-28', 'resultat' => '2-2'],
    ['local' => 'Real Madrid Femení', 'visitant' => 'FC Barcelona Femení', 'data' => '2025-12-02', 'resultat' => '0-1'],
    ['local' => 'FC Barcelona Femení', 'visitant' => 'Real Madrid Femení', 'data' => '2025-12-10', 'resultat' => '4-0'],
    ['local' => 'Atlètic de Madrid Femení', 'visitant' => 'FC Barcelona Femení', 'data' => '2025-12-15', 'resultat' => '1-3']
    ];
    public function index()
    {
        $partits = Session::get('partits', $this->partits);
        return view('partits.index', compact('partits'));
    }

    public function create() { return view('partits.create');}
    public function store(Request $request)
    {


        $validated = $request->validate([
            'local' => 'required|min:2',
            'visitant' => 'required|min:2',
            'data' => 'required|format Y-m-d',
            'resultat' => 'nullable| regex ^\d+-\d+$',
        ]);
        $partits = Session::get('partits', $this->partits);
        $partits[] = $validated;
        Session::put('partits', $partits);

        return redirect()->route('partits.index')->with('success', 'Estadi afegit correctament');
    }

    public function show(int $id)
    {
        $partits = Session::get('partits', $this->partits);
        abort_if(!isset($partits[$id]), 404);
        $partit = $partits[$id];
        return view('partits.store', compact('partit'));
    }

}