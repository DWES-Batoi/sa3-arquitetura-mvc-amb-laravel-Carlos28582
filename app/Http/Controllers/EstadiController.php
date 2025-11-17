<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use SeekableIterator;

class EstadiController extends Controller {
    public $estadis = [
        ['nom' => 'Estadi Johan Cruyff ', 'ciutat' => 'Sant Joan Despí', 'capacitat' => '6000', 'equip' => 'FC Barcelona Femení'],
        ['nom' => 'Centro Deportivo Wanda Alcalá de Henares', 'ciutat' => 'Alcalá de Henares', 'capacitat' => '2800', 'equip' => 'Atlètic de Madrid Femení'],
        ['nom' => 'Alfredo Di Stéfano', 'ciutat' => 'Madrid', 'capacitat' => '6000', 'equip' => 'Real Madrid Femení']
    ];
    public function index()
    {
        $estadis = Session::get('estadis', $this->estadis);
        return view('estadis.index', compact('estadis'));
    }

    public function create() { return view('estadis.create');}
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'requiered|min:3',
            'ciutat' => 'required',
            'capacitat' => 'required|integer|min:0',
            'equip' => 'required',
        ]);
        $estadis = Session::get('estadis', $this->estadis);
        $estadis[] = $validated;
        Session::put('estadis', $estadis);

        return redirect()->route('estadis.index')->with('success', 'Estadi afegit correctament');
    }
}