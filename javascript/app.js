/* eslint-env browser */
'use strict';

function done() {
    document.getElementById('check').onclick = undone;
    document.getElementById('check').setAttribute("class","done");
    //functionality to change entries status to completed
}

function undone() {
    document.getElementById('check').onclick = done;
    document.getElementById('check').setAttribute("class","notDone");
    //functionality to change entries status to incomplete
}

function deleteAll() {
    //funcitonality to delete all completed entries
}

function delet() {
    //functionality to delete all 
}

function updateEntries() {
    //functionality to update entries, called after adding or changing an entry
    var table = document.getElementById("entries");
    
    var row = table.insertRow(0);
    
    var entry = row.insertCell(0);
    var done = row.insertCell(1);
    var button = row.insertCell(2);
    
    //entry.innerHTML = get entry from file
}

function addEntry() {
    var newEntry = document.getElementById("entryText");
    //add entry to 
}

function validateForm() {
    var empty = document.forms["newTodo"]["thing"].value;
    if(empty=="") {
        alert("ERROR: You can't want to do nothing")
    }
}