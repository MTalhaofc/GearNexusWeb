<?php

namespace App\Http\Controllers;
use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function welcome()
    {
        return view('note.index');

    }}
