<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {
        // get data from a database
        
        //$pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name', 'desc')->get();
        //$pizzas = Pizza::where('type', 'hawaiin')->get();
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index', [
          'pizzas' => $pizzas,
        ]);
      }
    
      public function show($id) {

        $pizza = Pizza::findOrFail($id);

        // use the $id variable to query the db for a record
        return view('pizzas.show', ['pizza' => $pizza]);
      }

      public function create() {
        return view('pizzas.create');
      }

      public function store() {

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        
        $pizza->save();

        return redirect('/')->with('msg', 'Thanks for your order');
      }

      public function destroy($id) {
        
        $pizza = Pizza::findorFail($id);
        $pizza->delete();

        return redirect('/pizzas');
      }
}
