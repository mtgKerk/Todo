<?php
    $q = $_REQUEST["q"];

    if($q == "delAll"){
        echo "this is called";
        $entryFile = fopen("resources/ListEntries.txt","r,w") or die("File not found?");
        while(($line=fgets($entryFile)!=false)){
            if(explode(" ",$line)[1]==1){
                $entries = file_get_contents($entryFile);
                $entries = str_replace($line,'',$entries);
                file_put_contents($entryFile, $entries);
            }
         }
    }

    if($q == "del"){
        
    }

    if($q ==""){
        
    }
?>