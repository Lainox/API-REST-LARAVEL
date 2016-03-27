<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controllers;
use App\Note;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('cors');
      
    }

    

    public function index()
    {
        $notes = Note::all();
        return response()->json($notes->toArray());
    }

    public function store(Request $request)
    {
        Note::create($request->all());
        return response()->json(["mensaje"=>"creada correctamente"]);
    }

    public function create()
    {

    }

   

    public function edit($id)
    {

    }

   
}
