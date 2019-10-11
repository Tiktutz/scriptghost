<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TimeConverter
 *
 * @author Cley Anjos
 */
class TimeConverter {

    /**
     * 
     * @param int $intTime
     * @param int $format
     * @return string
     */
    static function intToHours($intTime) {

        return sprintf("%02d:%02d:%02d", floor($intTime / 3600), ($intTime / 60) % 60, $intTime % 60);
    }

}
