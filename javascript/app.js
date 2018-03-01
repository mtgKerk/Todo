/* eslint-env browser */
'use strict';

function done(x) {
    var button = document.getElementById('check'+x);
    if(button.getAttribute("clas","done")){
        button.setAttribute("class","done");
    }
    else {
        button.setAttribute("class","notDone");
    }
    //functionality to change entries status to completed in file
}

//move following into index.php to properly work with php and js together??

/*function deleteAll() {
    //funcitonality to delete all completed entries
    alert("test");
}*/

function delet() {
    //functionality to delete a specific entry
}

function validateForm() {
    var empty = document.forms["newTodo"]["thing"].value;
    if(empty=="") {
        alert("ERROR: You can't want to do nothing")
    }
}