<?php

namespace App\Http\Controllers;

use App\Burger;
use Illuminate\Http\Request;

class BurgersApiController extends Controller
{
    public function index(Request $request)
    {
        // Fake slow connection
        sleep(2);

        return response()->json([
            'burgers' => Burger::all()
        ]);
    }

    public function store(Request $request)
    {
        // Fake slow connection
        sleep(2);

        $this->validate($request, [
            'name' => 'required|string',
            'price' => 'required|numeric'
        ]);

        return Burger::create($request->only('name', 'price'));
    }
}
