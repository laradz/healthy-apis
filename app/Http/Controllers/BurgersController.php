<?php

namespace App\Http\Controllers;

use App\Burger;
use Illuminate\Http\Request;

class BurgersController extends Controller
{
    public function index(Request $request)
    {
        $burgers = Burger::all();
        return view('burgers.index', compact('burgers'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'price' => 'required|numeric'
        ]);

        $burger = Burger::create($request->only('name', 'price'));

        return redirect('/')->with('added', $burger->name);
    }
}
