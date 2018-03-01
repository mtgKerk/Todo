/* eslint-env browser */
'use strict';

function done(x) {
    document.getElementById('check'+x).onclick = undone;
    document.getElementById('check'+x).setAttribute("class","done");
    //functionality to change entries status to completed in file
}

function undone(x) {
    document.getElementById('check'+x).onclick = done;
    document.getElementById('check'+x).setAttribute("class","notDone");
    //functionality to change entries status to incomplete in file 
}

//move following into index.php to properly work with php and js together??

function deleteAll() {
    //funcitonality to delete all completed entries
    <?php
        $entryFile = fopen("resources/ListEntries.txt","r,w") or die("File not found?");
        while(($line=fgets($entryFile)!=false){
            if(explode(" ",$line)[1]==1){
                $entries = file_get_contents($entryFile);
                $entries = str _replace($line,'',$entries);
                file_put_contents($entryFile, $entries);
            }
        }
    ?>
    
}

function delet() {
    //functionality to delete a specific entry
}

function validateForm() {
    var empty = document.forms["newTodo"]["thing"].value;
    if(empty=="") {
        alert("ERROR: You can't want to do nothing")
    }
}