<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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

    public function create()
    {

    }

   

    public function edit($id)
    {

    }

   
}
