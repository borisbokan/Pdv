<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Artikal
 *
 * @author borcha
 */
class Artikal {
    
    var $naziv_artikla;
    var $opis_artikla;
    var $cena_artikla=0.00;
    
    
    function __construct($_nazivArtikla,$_opisArtikla,$_cenaArtikla) {
        $this->naziv_artikla=$_nazivArtikla;
        $this->opis_artikla=$_opisArtikla;
        $this->cena_artikla=$_cenaArtikla;
    }
    
    public function getNaziv_artikla() {
        return $this->naziv_artikla;
    }

    public function getOpis_artikla() {
        return $this->opis_artikla;
    }

    public function getCena_artikla() {
        return $this->cena_artikla;
    }

    
}
