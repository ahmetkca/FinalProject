var slidecount = 0;

function nextslide(){

    slidecount++;

    if(slidecount > 4){
        slidecount = 0;
    }

    slide();

}

function prevslide(){

    slidecount--;

    if(slidecount < 0){
        slidecount = 4;
    }

    slide();

}

function slide(){

    if(slidecount == 0){
        document.getElementById("0").style.display = 'block';
        document.getElementById("1").style.display = 'none';
        document.getElementById("2").style.display = 'none';
        document.getElementById("3").style.display = 'none';
        document.getElementById("4").style.display = 'none';
    }
    else if(slidecount == 1){
        document.getElementById("0").style.display = 'none';
        document.getElementById("1").style.display = 'block';
        document.getElementById("2").style.display = 'none';
        document.getElementById("3").style.display = 'none';
        document.getElementById("4").style.display = 'none';
    }
    else if(slidecount == 2){
        document.getElementById("0").style.display = 'none';
        document.getElementById("1").style.display = 'none';
        document.getElementById("2").style.display = 'block';
        document.getElementById("3").style.display = 'none';
        document.getElementById("4").style.display = 'none';
    }
    else if(slidecount == 3){
        document.getElementById("0").style.display = 'none';
        document.getElementById("1").style.display = 'none';
        document.getElementById("2").style.display = 'none';
        document.getElementById("3").style.display = 'block';
        document.getElementById("4").style.display = 'none';
    }
    else if(slidecount == 4){
        document.getElementById("0").style.display = 'none';
        document.getElementById("1").style.display = 'none';
        document.getElementById("2").style.display = 'none';
        document.getElementById("3").style.display = 'none';
        document.getElementById("4").style.display = 'block';
    }

}