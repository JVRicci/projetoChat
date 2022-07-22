@extends('main')
@section('content')


    <div class="container">
        
        <div id="conversa-msgs">
            Ok
        </div>
        <form action="envia-msg" method="POSt">
        <div class="row" id="conversa-chat-div">
                    <div class="col-lg">
                            <input type="text" name="msgTxt" class="form-control" id=""
                            placeholder="Digite...">
                    </div>
            </form>
        </div>
    </div>
@endsection