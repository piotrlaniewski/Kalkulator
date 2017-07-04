<?php


class kalkulatorPOW extends kalkulatorClass{
    //put your code here
    protected function _potegowanie(){
        $this->_wynik = $this->_liczbaA ** $this->_liczbaB;
    }

    protected function _dzialanie(){//zamiast kopiować wszystkie casy można użyć parent::dzialanie();
    switch ($this->_operator){
    case "**":
        $this->_potegowanie();
        break;
     case "+":
        $this->_dodawnie();
        break;
    case "-":
        $this->_odejmowanie();
        break;
    case "*":
        $this->_mnozenie();
        break;
    case "/":
        $this->_dzielenie();
        break;
    default :
        return 0;
}
    }
}