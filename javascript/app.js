/* eslint-env browser */
'use strict';

function done() {
    document.getElementById('check').onclick = undone;
    document.getElementById('check').setAttribute("class","done");
}

function undone() {
    document.getElementById('check').onclick = done;
    document.getElementById('check').setAttribute("class","notDone");
}

function deleteAll() {
    
}

function delet() {

}

function validateForm() {
    var empty = document.forms["newTodo"]["thing"].value;
    if(empty=="") {
        alert("ERROR: You can't want to do nothing")
    }
}