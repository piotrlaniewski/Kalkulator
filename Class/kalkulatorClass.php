<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of kalkulatorClass
 *
 * @author Marta
 */
class kalkulatorClass {
    protected $_liczbaA;
    protected $_liczbaB;
    protected $_wynik;
    protected $_operator;
    
    protected function _dodawnie(){
        $this->_wynik = $this->_liczbaA + $this->_liczbaB;
    }
    protected function _odejmowanie(){
        $this->_wynik = $this->_liczbaA - $this->_liczbaB;
    }
     protected function _mnozenie(){
        $this->_wynik = $this->_liczbaA * $this->_liczbaB;
    }
     protected function _dzielenie(){
        $this->_wynik = $this->_liczbaA / $this->_liczbaB;
    }
    protected function _dzialanie(){
    switch ($this->_operator){
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
    public function ustawOperator($operator){
        switch (TRUE){
    case ($this->_operator == $operator):
        return "selected";
        }
    }
    public function pokazLiczbe($name){
        return $this->$name;
    }

    public function pokazWynik($liczbaA, $liczbaB, $operator){
        $this->_liczbaA = $liczbaA;
        $this->_liczbaB = $liczbaB;
        $this->_operator = $operator;
        $this->_dzialanie();
        return $this->_wynik;
    }
}
