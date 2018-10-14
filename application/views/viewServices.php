<?php 
            
    echo "<select id='lstServices'>" ;
    foreach($lesServices as $unService)
    {
         echo "<option value='" .$unService->idService. "'>".$unService->nomService."</option>";
    }    
	echo "</select>" ;
?>