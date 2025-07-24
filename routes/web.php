<?php

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/email', function () {

    Mail::raw("Mensagem de Teste de RG MANGNT", function(Message $message){
        $message->to("teste@gmail.com")
        ->subject("Bem-vindo ao RH MANGNT")
        ->from("rg@gmail.com");
    });

    echo "Email enviado com sucesso.";

});

