/* eslint-env browser */
'use strict';

function validateForm() {
    var empty = document.forms["newTodo"]["thing"].value;
    if(empty=="") {
        alert("ERROR: You can't want to do nothing")
    }
}