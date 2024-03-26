<?php

class Classe implements JsonSerializable
{
    private $alunni = [];
    private $sezione;

    public function __construct($sezione){
        $this->sezione = $sezione;
        $this->alunni= [
        new Alunno("aa","Mario","Rossi",16),
        new Alunno("bb","Luigi","Bianchi",17),
        new Alunno("cc","Carlo","Bruni",15),
        new Alunno("dd","Tommaso","Da Vinci",16),
        new Alunno("ee","Lorenzo","Pilenzi",13),
        new Alunno("ff","Pasquale","Percivale",18)];
    }

    public function getAlunno($cf){
        foreach ($this->alunni as $alunno) {
            if($alunno->getCf() == $cf){
                return $alunno;
            }
        }
        return null;
    }

    public function getSezione(){
        return $this->sezione;
    }

    public function getAll(){
        $response = $this->sezione . "<br><br>";

        foreach ($this->alunni as $alunno) {
            $response .= "<br><hr><br>" . $alunno->getAll(); 
        }

        return $response;
    }

    public function jsonSerialize(){
        $array = [
            "sezione" => $this->sezione,
            "allunni" => $this->alunni
        ];



        return $array;
        
    }
}


?>