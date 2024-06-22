<?php

namespace app\Http\Controllers;

class Controller
{

    public function index()
    {
        echo "teste asd fas fasd fasf asfd s";
//        header('Location: http://localhost/loteria.com.br/views/index.php');
    }

    /* Esse método vai lista os jogos que não sairam ainda, lista apenas 10 jogos,
     * sem calculos, apenas os 10 primeiros jogos que não sairam
     * */
    public function jogoNuncaSaiu()
    {
        echo "aqui";
    }

    public function error($data)
    {
        echo $data["errcode"] . "<br/>";
        var_dump($data);
    }
}
