<?php

namespace App\Http\Controllers;

use App\Animal;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{
    public function index() {
        $animals = DB::table('animal')->get();
        return view('animals.list_animals.index', compact('animals'));
    }

    public function view($id) {
        $animal = DB::table('animal')->find($id);
        return view('animals.list_animals.view', compact('animal'));
    }

    public function update($id) {
        $animal = DB::table('animal')->find($id);
        return view('animals.list_animals.update', compact('animal'));
    }

    public function store(Request $request) {
        Animal::updating($request->all());
        return 'success';
    }
}