<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include_once("./Alunno.php");
include_once("./Classe.php");

class AlunniController{
    

    public function index(Request $request, Response $response, $args){
        $classe = new Classe("5dia");
        $response->getBody()->write($classe->getAll());
        return $response;
    }


    public function show(Request $request, Response $response, $args){
        $classe = new Classe("5dia");
        $cf = $args['cf'];

        $alunno = $classe->getAlunno($cf);
        $body = $alunno == null ? "non sono presenti alunni" : $alunno->getAll();

        $response->getBody()->write($body);

        return $response;
    }
}

?>