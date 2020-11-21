var slidecount = 0;

function nextslide(){

    slidecount++;

    if(slidecount > 1){
        slidecount = 0;
    }

    slide();

}

function nextslide(){

    slidecount++;

    if(slidecount > 1){
        slidecount = 0;
    }

    slide();

}

function slide(){

    if(slidecount == 0){
        document.getElementById("0").style.display = 'block';
        document.getElementById("1").style.display = 'none';
    }
    else if(slidecount == 1){
        document.getElementById("0").style.display = 'none';
        document.getElementById("1").style.display = 'block';
    }

}