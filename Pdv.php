<?php

/**
 * Description: klasa napravljena za obracun pdv i davanje osnovnih informacija cene nakon kalkulacije
 * Napravljena za pottrebe jednog sajta koji se bavio prodajom robe iz uvoza. Ukoliko neko smatra da je korisna 
 * moze je slobodno koristiti u svojim projektima. Mozete je menjati tj modifikovati za svoje potrebe.
 * Testiranje mozete obaviti na index.php stranici ili je mozete odmah kopirati u svoj projekat i koristiti, menjati...
 *  
 * Kod je kucan u NetBeans tako da ukoliko imate taj IDE , samo kopirate u Vas NetBeans Projects folder.
 *
 * @author Boris Bokan <borisbokan@gmail.com>
 * 
 */
class Pdv{
    
    var $suma=0.00;
    var $visinaPDV=0.00;
    var $iznosPDV=0.00;
    var $ukupnoSaPDV=0.00;
    var $poruka="";
    
    /**
     * Uneti sumu i vrednost PDV-a
     * @param type $_suma
     * @param type $_visinaPDV
     */
    function __construct($_suma,$_visinaPDV) {
        $this->suma=$_suma;
        $this->visinaPDV=$_visinaPDV;
        $this->kalkulisi();//Vrsi proracun u konstruktoru
    }
            
    private function kalkulisi(){
        if(isset($this->suma)){
          $this->iznosPDV= $this->suma * $this->visinaPDV / 100.00;
          $this->ukupnoSaPDV= $this->suma + $this->iznosPDV;  
        }else{
            $this->poruka="Niste uneli vrednost za sumu za koju treba da se izracuna pdv!";
        }
        
        
        if((isset($this->visinaPDV))){
            
        }else{
            $this->poruka="Niste uneli vrednost za visinu pdv-a sa kojim treba da se izracuna pdv!";
        }
        
    }
   
    public function getSuma() {
        return $this->suma;
    }

    public function getVisinaPDV() {
        return $this->visinaPDV;
    }

    public function getIznosPDV() {
        return $this->iznosPDV;
    }

    public function getUkupnoSaPDV() {
        return $this->ukupnoSaPDV;
    }

    public function getPoruka() {
        return $this->poruka;
    }

        
    //Metoda za testiranje kalkulacije.
    public function test(){
        echo "Iznos od pdv-a: " . number_format($this->iznosPDV,2) . "<br>"; 
        echo "Iznos sa pdv-om: " . number_format($this->ukupnoSaPDV,2) . "<br>";
        echo "------------------------------------------<br>";
        echo "Suma za proracun: " . number_format($this->suma,2) . "<br>";
        echo "Poruka: " . $this->poruka;
        
    }
    
}
