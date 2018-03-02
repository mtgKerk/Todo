<?php
    $q = $_REQUEST["q"];
    $param = $_REQUEST["param"];

    $filePath = "../resources/ListEntries.txt";
    $entryFile = fopen($filePath,"r+") or die("error message");

    if($entryFile){
        
        if($q == "delAll"){  
            while(!feof($entryFile)){ //$line=fgets($entryFile)!=false
                $check=fgets($entryFile);
                if((explode(" ",$check)[1])==1){
                    $entries = file_get_contents($filePath);
                    $entries = str_replace($check,'',$entries);
                    file_put_contents($filePath, $entries);
                }
            }
            fclose($entryFile);
        }

        if($q == "del"){
            for($i=0;$i<=$param;$i++){
                $line = fgets($entryFile);
            }
            $entries = file_get_contents($filePath);
            $entries = str_replace($line,'',$entries);
            file_put_contents($filePath, $entries);
        }

        if($q =="add"){
            fseek($entryFile,0,SEEK_END);
            fwrite($entryFile,$param);
            fwrite($entryFile," 0 \n");
            fclose($entryFile);
        }
        
        if($q =="switch"){
            for($i=0;$i<=$param;$i++){
                $line = fgets($entryFile);
            }
            $split=explode($line," ");
            if($split=explode($line," ")[0]==0){
                $entries = file_get_contents($filePath);
                $entries = str_replace($line,$split[0]+" 1 \n",$entries);
                file_put_contents($filePath, $entries);
            }
            else{
                $entries = file_get_contents($filePath);
                $entries = str_replace($line,$split[0]+" 0 \n",$entries);
                file_put_contents($filePath, $entries);
            }
        }
    }
?>