<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\conversa;

class chatController extends Controller
{
    //
    public function index(){
        return view('components/chat');
    }

    public function envia_msg(request $request){

        //['idUser1', 'idUser2','mensagem']
        conversa::create([
            'idUser1' => 1,
            'idUser2' => 2,
            'QuemEnviou' => 1,
            'mensagem'=>$request->msgTxt

        ]);
    }
}
