'use strict'
window.addEventListener('load', function(){

    var logos1 = document.querySelector('#columnaLogo1');
    var logos2 = document.querySelector('#columnaLogo2');
    var logos3 = document.querySelector('#columnaLogo3');
    //var logos4 = document.querySelector('#columnaLogo4');

    var logos = [logos1, logos2, logos3];

    var btnSiguiente = document.querySelector('#btnSliderDer');
    var btnAtras = document.querySelector('#btnSliderIzq');

    
    var contadorBanner = 0;


    function quitarClaseActivo(){
        for(var i=0; i<logos.length; i++){
            logos[i].className = 'comlumnaLogos logosInactivo';       
        }
    }
    function siguiente(){
        contadorBanner++;
        if(contadorBanner>2){
            contadorBanner=0;
        }
        quitarClaseActivo();
        logos[contadorBanner].className = 'columnaLogos logosActivo';  
        console.log(contadorBanner);
    }

    function atras(){
        contadorBanner--;
        if(contadorBanner<0){
            contadorBanner=2;
        };
        quitarClaseActivo();
        logos[contadorBanner].className = 'columnaLogos logosActivo';
        console.log(contadorBanner);
    }

    function bannerAutomatico(){
        var tiempo = setInterval(function(){
            siguiente();
        }, 7000);
    }
    bannerAutomatico();
    

    btnSiguiente.addEventListener('click', siguiente);
    btnAtras.addEventListener('click', atras);
    

});