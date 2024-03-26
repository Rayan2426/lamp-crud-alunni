<?php
class Alunno implements JsonSerializable
{
    private $cf,$nome,$cognome, $eta;
    public function __construct($cf,$nome,$cognome,$eta){
        $this->cf = $cf;
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    public function GetNome(){
        return $this->nome;
    }
    public function GetCognome(){
        return $this->cognome;
    }

    public function GetEta(){
        return $this->eta;
    }

    public function GetCf(){
        return $this->cf;
    }

    public function SetNome($nome){
        $this->nome = $nome;
    }
    public function SetCognome($cognome){
        $this->cognome = $cognome;
    }

    public function SetEta($eta){
        $this->eta = $eta;
    }

    public function SetCf($cf){
        $this->cf = $cf;
    }

    public function GetAll(){
        return "Codice Fiscale: ".$this->cf."<br>Nome: " . $this->nome . "<br>Cognome: " . $this->cognome . "<br>Eta: " . $this->eta;
    }

    public function jsonSerialize(){

        $array = [
            "cf" => $this->cf,
            "nome" => $this->nome,
            "cognome" => $this->cognome,
            "eta" => $this->eta
        ];
        
        return $array;        
    }
}
?>