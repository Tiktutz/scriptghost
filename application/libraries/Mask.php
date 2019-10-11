<?php

Class Mask {

    static $patternId = '#';

    /**
     * Adiciona uma mascara ao texto<br/>
     * OBS:Para que funcione adequadamente, a quantidade de $patternId na maskara deverá ser igual a do texto
     * 
     * <b>Exemplos de Uso:</b>
     * 
     * Mask::exec(999999,'##-##-##') // retornara 99-99-99<br/>
     * Mask::exec(99999999999,'###.###.###-##') // retornara 999.999.999-99 (padrão CPF)<br/>
     * Mask::exec(9999999999999,'##.###.###/####-##') // retornara 99.999.999/9999-99 (padrão CNPJ)<br/>

     * @param string $text o texto a ser mascarado
     * @param string $maskPattern O formato da mascara
     * @param string $patternId [opcional] o identificador de caracter comum
     * @return string
     */
    static function exec($text, $maskPattern, $patternId = '#') {

        $_maskPatternArr = str_split($maskPattern);

        $_textArr = str_split("$text");

        $donwCounter = 0;

        $formatedText = '';

        for ($i = 0; $i < strlen($maskPattern); $i++) {

            if ($_maskPatternArr[$i] == self::$patternId && isset($_textArr[$i - $donwCounter])) {

                $formatedText .= $_textArr[$i - $donwCounter];
            } else {

                $formatedText .=$_maskPatternArr[$i];

                $donwCounter ++;
            }
        }

        return $formatedText;
    }

}
