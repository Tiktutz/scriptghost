<?php

Class DatetimeConverter {

    public static function toMysql($br_datetime) {

        if (self::isBr($br_datetime)) {

            $datetimeArr = explode(' ', $br_datetime);

            return implode('-', array_reverse(explode('/', $datetimeArr[0]))) .' '. $datetimeArr[1];
            
        } elseif (self::isMysql($br_datetime)) {

            return $br_datetime;
            
        } else {

            throw new Exception("Formato de data $br_datetime é invalido para conversão");
        }
    }

    public static function toBr($mysql_datetime) {

        if (self::isMysql($mysql_datetime)) {

            $datetimeArr = explode(' ', $mysql_datetime);

            return implode('/', array_reverse(explode('-', $datetimeArr[0]))) .' '. $datetimeArr[1];
            
        } elseif (self::isBr($mysql_datetime)) {

            return $mysql_datetime;
            
        } else {

            throw new Exception("Formato de data $mysql_datetime é invalido para conversão");
        }
    }

    public static function isBr($data) {

        return preg_match('%(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)[0-9]{2} (2[0-3]|[0-1][0-9]):[0-5][0-9]:[0-5][0-9](\.[0-9]+)?%', $data);
    }

    public static function isMysql($data) {

        return preg_match('%(19|20)[0-9]{2}[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01]) (2[0-3]|[0-1][0-9]):[0-5][0-9]:[0-5][0-9](\.[0-9]+)?%', $data);
    }

}
