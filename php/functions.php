<?php
    $q = $_REQUEST["q"];

    if($q == "delAll"){
        $entryFile = fopen("../resources/ListEntries.txt","r,w") or die("error message");
        fwrite($entryFile,"test4 0 \n");
        /*while(($line=fgets($entryFile)!=false)){
            if(explode(" ",$line)[1]==1){
                $entries = file_get_contents($entryFile);
                $entries = str_replace($line,'',$entries);
                file_put_contents($entryFile, $entries);
            }
         }*/
        fclose($entryFile);
    }

    if($q == "del"){
        
    }

    if($q ==""){
        
    }
?>