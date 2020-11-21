var popcorn=0;
var coke = 0;
var candy = 0;
var nachos = 0;

function addPopcorn() {
    popcorn++;
    document.getElementById('popNum').innerHTML = popcorn;
}

function addCoke() {
    coke++;
    document.getElementById("cokeNum").innerHTML = coke;
}

function addCandy() {
    candy++;
    document.getElementById("candyNum").innerHTML = candy;
}

function addNachos() {
    nachos++;
    document.getElementById("nachoNum").innerHTML = nachos;
}