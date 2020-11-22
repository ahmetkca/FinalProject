var popcorn=0;
var coke = 0;
var candy = 0;
var nachos = 0;

function addPopcorn() {

    if(popcorn>=0&&popcorn<6){
        popcorn++;
        
    }
    document.getElementById("popcornOut").innerHTML = popcorn-1;
}

function minusPopcorn() {
        if(popcorn >=1 && popcorn <6)
        {
        popcorn--;
        document.getElementById("popcornOut").innerHTML = popcorn;
        }
}

function addCoke() {

    if (coke >= 0 && coke < 6) {
        coke++;
        document.getElementById("cokeOut").innerHTML = coke-1;
    } else {
        coke = 0;
    }
    
}

function minusCoke() {
    if(coke >=1 && coke <6){
        coke--;
        document.getElementById("cokeOut").innerHTML = coke;
    }
}

function addCandy() {
    if (candy >= 0 && candy < 6) {
        candy++;
        document.getElementById("candyOut").innerHTML = candy-1;
    } else {
        candy = 0;
    }
}

function minusCandy() {
     if(candy >=1 && candy <6){
        candy--;
        document.getElementById("candyOut").innerHTML = candy;
    }
}

function addNachos() {
    if (nachos >= 0 && nachos < 6) {
        nachos++;
        document.getElementById("nachosOut").innerHTML = nachos-1;
    } else {
        nachos = 0;
    }
}

function minusNachos() {
     if(nachos >=1 && nachos <6){
        nachos--;
        document.getElementById("nachosOut").innerHTML = nachos;
    }
}