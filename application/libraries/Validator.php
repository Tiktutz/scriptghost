<?php

Class Validator {

    static function isNumber($param, $lenghtMin = '', $lenghtMax = '') {

        $is_number = is_numeric($param);

        $is_lenght_min = TRUE;
        $is_lenght_max = TRUE;

        if ($lenghtMin) {

            $is_lenght_min = strlen($param) >= $lenghtMin;
        }
        if ($lenghtMax) {

            $is_lenght_max = strlen($param) <= $lenghtMax;
        }

        return ($is_number && $is_lenght_min && $is_lenght_max);
    }

    static function isText($param, $lenghtMin = '', $lenghtMax = '') {

        $is_text = is_string($param);
        $is_lenght_min = TRUE;
        $is_lenght_max = TRUE;

        if ($lenghtMin) {

            $is_lenght_min = strlen($param) >= $lenghtMin;
        }
        if ($lenghtMax) {

            $is_lenght_max = strlen($param) <= $lenghtMax;
        }

        return ($is_text && $is_lenght_min && $is_lenght_max);
    }

    static function isCPF($cpf = null) {

        // Verifica se um número foi informado
        if (empty($cpf)) {
            return false;
        }

        // Elimina possivel mascara
        $cpf = preg_replace("/[^0-9]/", "", $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        // Verifica se o numero de digitos informados é igual a 11 
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se nenhuma das sequências invalidas abaixo 
        // foi digitada. Caso afirmativo, retorna falso
        else if ($cpf == '00000000000' ||
                $cpf == '11111111111' ||
                $cpf == '22222222222' ||
                $cpf == '33333333333' ||
                $cpf == '44444444444' ||
                $cpf == '55555555555' ||
                $cpf == '66666666666' ||
                $cpf == '77777777777' ||
                $cpf == '88888888888' ||
                $cpf == '99999999999') {
            return false;
            // Calcula os digitos verificadores para verificar se o
            // CPF é válido
        } else {

            for ($t = 9; $t < 11; $t++) {

                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }
    
      public static function isDateBr($data){

        return preg_match('%(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)[0-9]{2}%', $data);

    }
    
    public static function isDateMysql($data){
        
        return preg_match('%(19|20)[0-9]{2}[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])%', $data);
    }
    
     public static function isDatetimeBr($data) {

        return preg_match('%(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)[0-9]{2} (2[0-3]|[0-1][0-9]):[0-5][0-9]:[0-5][0-9](\.[0-9]+)?%', $data);
    }

    public static function isDatetimeMysql($data) {

        return preg_match('%(19|20)[0-9]{2}[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01]) (2[0-3]|[0-1][0-9]):[0-5][0-9]:[0-5][0-9](\.[0-9]+)?%', $data);
    }

}
