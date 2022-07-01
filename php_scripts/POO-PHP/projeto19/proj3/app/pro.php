<?php
namespace conn;

class Produto {
    private $id, $titulo, $descr, $cor1, $cor2, $ultMusica, $musica;

    // id
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    // titulo
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    // descrição
    public function getDescr() {
        return $this->descr;
    }
    public function setDescr($descr) {
        $this->descr = $descr;
    }

    // cores
    public function getCor1() {
        return $this->cor1;
    }
    public function setCor1($cor1) {
        $this->cor1 = $cor1;
    }

    public function getCor2() {
        return $this->cor2;
    }
    public function setCor2($cor2) {
        $this->cor2 = $cor2;
    }

    // última música
    public function getUltMusica() {
        return $this->ultMusica;
    }
    public function setUltMusica($ultMusica) {
        $this->ultMusica = $ultMusica;
    }

    // música atual
    public function getMusica() {
        return $this->musica;
    }
    public function setMusica($Musica) {
        $this->musica = $Musica;
    }
} 
