<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cuadrado
 *
 * @author APRENDIZ
 */
class Cuadrado {

    private $num1;

    public function horizontal($num) {
        for ($i = 0; $i < $num; $i++) {
            echo "*";
        }

        echo "</br>";
    }

    public function vertical($num) {
        echo "*";

        for ($i = 0; $i < ($num - 2); $i++) {
            echo "&nbsp;";
        }

        echo "*";
        echo "</br>";
    }

}
