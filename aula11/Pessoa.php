<?php

abstract class Pessoa{
    private $nome;
    private $idade;
    private $sexo;
    
    function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

        
    public function fazerAniver() {
        $this->setIdade($this->getIdade() + 1);
        echo '<p>Parabéns '. $this->getNome() . ' por completar ' . $this->getIdade() .' anos</p>';
    }

}