<?php
Class DateConverter{
    
    
    public static function toMysql($br_date){
        
        if(self::isBr($br_date)){
            
            return implode('-',  array_reverse(explode('/', $br_date)));
        
        }elseif(self::isMysql($br_date)){
            
            return $br_date;
            
        }else{
            
            throw new Exception("Formato de data $br_date é invalido para conversão");
        }
        
        
    }
    
    public static function toBr($mysql_date){
         
        if(self::isMysql($mysql_date)){
       
             return implode('/',  array_reverse(explode('-', $mysql_date)));
            
        }elseif(self::isBr($mysql_date)){
            
            return $mysql_date;
            
        }else{
            
            throw new Exception("Formato de data $mysql_date é invalido para conversão");
        }
        
    }
    
    public static function isBr($data){

        return preg_match('%(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)[0-9]{2}%', $data);

    }
    
    public static function isMysql($data){
        
        return preg_match('%(19|20)[0-9]{2}[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])%', $data);
    }
}

