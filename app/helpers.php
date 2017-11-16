<?php

if(! function_exists(titre_page)) {

     function titre_page($titre){
        $base_titre = 'Laracaste - lists of artisans';

        if($titre === ''){
         return $base_titre ;
                         }
                           
        else {
         return $titre . ' | ' . $base_titre; 
             }                    }
                                  }





?>