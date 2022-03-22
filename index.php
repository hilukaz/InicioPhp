<?php

class Pessoa{
    private $nome, $endereco, $bairro, $cep;
    

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setEndereco($endereco){
        $this->endereco= $endereco;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setBairro($bairro){
        $this->bairro=$bairro;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setCep($cep){
        $this->cep=$cep;
    }
    public function getCep(){
        return $this->cep;
    }
}

$temp = new Pessoa();

$temp->setNome("Lucas");
echo "<h1>".$temp->getNome()."</h1>"."<br>";
$temp->setEndereco("Águia de Haia");
echo $temp->getEndereco()."<br>";
$temp->setBairro("a.e carvalho");
echo $temp->getBairro()."<br>";
$temp->setCep("182340194");
echo $temp->getCep()."<br>";

?>