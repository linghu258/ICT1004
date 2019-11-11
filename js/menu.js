function chickincValue() {
    var value = parseInt(document.getElementById('chicknumber').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('chicknumber').value = value;
}

function chickdecValue() {
    var value = parseInt(document.getElementById('chicknumber').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('chicknumber').value = value;
}

function vegeincValue() {
    var value = parseInt(document.getElementById('vegenumber').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('vegenumber').value = value;
}

function vegedecValue() {
    var value = parseInt(document.getElementById('vegenumber').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('vegenumber').value = value;
}

function fishincValue() {
    var value = parseInt(document.getElementById('fishnumber').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('fishnumber').value = value;
}

function fishdecValue() {
    var value = parseInt(document.getElementById('fishnumber').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('fishnumber').value = value;
}

function beefincValue() {
    var value = parseInt(document.getElementById('beefnumber').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('beefnumber').value = value;
}

function beefdecValue() {
    var value = parseInt(document.getElementById('beefnumber').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('beefnumber').value = value;
}