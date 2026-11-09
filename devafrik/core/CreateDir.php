<?php

class CreateDir{

    // création de dossier

      function crea_rep($nom_dos, $rep){
          
        $dossier = $rep.'/'.$nom_dos;
        
        if(!is_dir($dossier)){
            
            mkdir($dossier);
            
        }

      }
	
}
?>