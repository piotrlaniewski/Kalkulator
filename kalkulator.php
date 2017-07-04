<?php
require 'class/kalkulatorClass.php';

$a = filter_input(INPUT_POST, "LiczbaA");
$b = filter_input(INPUT_POST, "LiczbaB");
$operator = filter_input(INPUT_POST, "operator");

$kalkulator = new kalkulatorClass();
$kalkulator->pokazWynik($a, $b, $operator);
$wynik = $kalkulator->pokazWynik($a, $b, $operator);
var_dump($kalkulator);

?>
<!DOCTYPE html>
<a href="kalkulator2.php"></a>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="kalkulator.php">
            Liczba A: <input value="<?= $kalkulator->pokazLiczbe("_liczbaA");?>" type="number" step="0.0001" name="LiczbaA" required="required">
            <select name="operator">
                <optgroup label="Wybierz działanie:">
                    <option <?= $kalkulator->ustawOperator("+");?> value="+">Dodawanie</option>
                <option <?= $kalkulator->ustawOperator("-");?> value="-">Odejmowanie</option>
                </optgroup>
                <optgroup label="Wybierz działanie:">
                <option <?= $kalkulator->ustawOperator("*");?> value="*">Mnożenie</option>
                <option <?= $kalkulator->ustawOperator("/");?> value="/">DZielenie</option>
                </optgroup>
            </select>
            Liczba B: <input value="<?= $kalkulator->pokazLiczbe("_liczbaB");?>" type="number" step="0.0001" name="LiczbaB" required="required">
            <button type="submit">WYNIK</button>
        </form>
        <span>Wynik</span> <?= $wynik;?>
    </body>
</html>
