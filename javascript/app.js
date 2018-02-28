function done() {
    Document.getElementById('check').onclick = undone;
    document.getElementById('check').setAttribute("class","done");
};

function undone() {
    document.getElementById('check').onclick = done;
    document.getElementById('check').setAttribute("class","notDone");
};

function deleteAll() {

};

function delet() {

};

function validateForm() {

};