var popcorn=0;
var coke = 0;
var candy = 0;
var nachos = 0;

function addPopcorn() {

    if(popcorn>=0){
        popcorn++;
        document.getElementById("popcornOut").innerHTML = popcorn;        
    }
    
}

function minusPopcorn() {
    if(popcorn >=1 ){
        popcorn--;
        document.getElementById("popcornOut").innerHTML = popcorn;
    }
    
}

function addCoke() {

    if (coke >= 0 ) {
        coke++;
        document.getElementById("cokeOut").innerHTML = coke;
    }
    
}

function minusCoke() {
    if(coke >=1){
        coke--;
        document.getElementById("cokeOut").innerHTML = coke;
    }
}

function addCandy() {
    if (candy >= 0 ) {
        candy++;
        document.getElementById("candyOut").innerHTML = candy;
    }
}

function minusCandy() {
     if(candy >=1 ){
        candy--;
        document.getElementById("candyOut").innerHTML = candy;
    }
}

function addNachos() {
    if (nachos >= 0 ) {
        nachos++;
        document.getElementById("nachosOut").innerHTML = nachos;
    }
}

function minusNachos() {
     if(nachos >=1 ){
        nachos--;
        document.getElementById("nachosOut").innerHTML = nachos;
    }
}