<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AlunniController{
    

    public function index(Request $request, Response $response, $args){

        $conn = new mysqli("my_mariadb","root","ciccio","scuola");

        $sql = "SELECT * FROM alunni";
        $result = $conn->query($sql);

        $results = $result->fetch_all();

        $response->getBody()->write(json_encode(array("5DIA"=>$results)));
        
        return $response->withHeader("Content-Type","application/json");
    }
    public function show(Request $request, Response $response, $args){
        $cf = $args["cf"];

        $conn = new mysqli("my_mariadb","root","ciccio","scuola");

        $sql = "SELECT * FROM alunni WHERE cf = '$cf'";
        $result = $conn->query($sql);

        $results = $result->fetch_all();

        $response->getBody()->write(json_encode(array("5DIA"=>$results)));
        return $response->withHeader("Content-Type","application/json");
    }

    public function create(Request $request, Response $response, $args){
        $conn = new mysqli("my_mariadb","root","ciccio","scuola");

        $alunno = json_decode($request->getBody(), true);

        //curl -X POST localhost:8080/alunni -d "{'cf':'gg','nome':'carlo','cognome':'giannini','eta':39}"
        $c = $data['cf'];
        $n = $data['nome'];
        $s = $data['conome'];
        $e = $data['eta'];

        $sql = "INSERT INTO alunni(cf,nome,cognome,eta) VALUES ('$c','$n','$s','$e')";
        $conn->query($sql);

        $response->getBody()->write($alunno);

        return $response->withStatus(200)->withHeader("Content-Type","application/json");
    }
}

?>