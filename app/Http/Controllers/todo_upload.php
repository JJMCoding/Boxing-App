<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class todo_upload extends Controller
{
    public function Post(Request $request)
    {
        $someName = $request->someName; 

        $data=array('description'=>$someName);
        DB::table('todo_list')->insert($data);
        return view('/dashboard');
    }
}
