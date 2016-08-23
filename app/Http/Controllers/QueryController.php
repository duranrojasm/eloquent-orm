<?php

namespace EloquentORM\Http\Controllers;

use Illuminate\Http\Request;
use EloquentORM\Http\Requests;
use EloquentORM\Http\Controllers\Controller;

use EloquentORM\User;

class QueryController extends Controller
{
    public function eloquentAll(){
        
        $users = User::all();
        $title = 'Todos los usuarios (ALL)';
        return view('query.methods', compact('users', 'title'));
    }
    
    public function eloquentGet($gender){
        $users = User::where('gender', $gender)
                ->get();
        $title = 'Lista de usuarios (GET)';
        return view('query.methods', compact('users', 'title'));
    }    

    public function eloquentGetCustom(){
        $users = User::where('gender', 'f')
                ->get(['id', 'name', 'biography']);
        $title = 'Lista de usuarios (get - custom con Array)';
        return view('query.methods', compact('users', 'title'));
    }
    
    }
