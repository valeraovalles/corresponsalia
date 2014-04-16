<?php

namespace Frontend\CorresponsaliaBundle\Resources\Misclases;

class conexion
{
               
    public function postgresql_servidor(){
        
            return pg_connect("host=localhost dbname=sait user=postgres password=..*t3l35ur*..");
            
    }
    
    public function postgresql_local(){
        
            return pg_connect("host=localhost dbname=sait user=postgres password=postgres");            
    }
        
}