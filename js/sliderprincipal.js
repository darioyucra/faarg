'use strict'
window.addEventListener('load', function(){
    var slider1 = document.querySelector('.slider1');
    var slider2 = document.querySelector('.slider2');
    var slider3 = document.querySelector('.slider3');

    var slider1Activo = 'contenedorSlider slider1 sliderActivo';
    var slider2Activo = 'contenedorSlider slider2 sliderActivo';
    var slider3Activo = 'contenedorSlider slider3 sliderActivo';

    var slider1Inactivo = 'contenedorSlider slider1 sliderInactivo';
    var slider2Inactivo = 'contenedorSlider slider2 sliderInactivo';
    var slider3Inactivo = 'contenedorSlider slider3 sliderInactivo';

    var imagenesSlider = [slider1, slider2, slider3];

    var btnSlider1 = document.querySelector('#btnSliderP1');
    var btnSlider2 = document.querySelector('#btnSliderP2');
    var btnSlider3 = document.querySelector('#btnSliderP3');



    var textSlider1 = document.querySelector('#textSlider1');
    var textSlider2 = document.querySelector('#textSlider2');
    var textSlider3 = document.querySelector('#textSlider3');

    var textSliderActivo = 'textSlider textSliderActivo';
    var textSliderInactivo = 'textSlider textSliderInactivo';




    var contadorSlider=1;
    function resetarContador(){
        if(contadorSlider>3){
            contadorSlider=1
        }
    }

 

    function iterarSlider(){
        contadorSlider++;
        resetarContador();
        if(contadorSlider==1){
            slider1.className = slider1Activo;
            slider2.className = slider2Inactivo;
            slider3.className = slider3Inactivo;

            textSlider1.className = textSliderActivo;
            textSlider2.className = textSliderInactivo;
            textSlider3.className = textSliderInactivo;

            btnSlider1.className = 'btnSliderActivo';
            btnSlider2.className = '';
            btnSlider3.className = '';
        }
        else if(contadorSlider==2){
            slider1.className = slider1Inactivo;
            slider2.className = slider2Activo;
            slider3.className = slider3Inactivo;

            textSlider1.className = textSliderInactivo;
            textSlider2.className = textSliderActivo;
            textSlider3.className = textSliderInactivo;

            btnSlider1.className = '';
            btnSlider2.className = 'btnSliderActivo';
            btnSlider3.className = '';
        }else if(contadorSlider==3){
            slider1.className = slider1Inactivo;
            slider2.className = slider2Inactivo;
            slider3.className = slider3Activo;

            textSlider1.className = textSliderInactivo;
            textSlider2.className = textSliderInactivo;
            textSlider3.className = textSliderActivo;

            btnSlider1.className = '';
            btnSlider2.className = '';
            btnSlider3.className = 'btnSliderActivo';
        }
        //console.log('slider numero ' + contadorSlider);
    }

    function sliderAutomatico(){
        var tiempo = setInterval(function(){
            iterarSlider();
        }, 5000);
    }
    sliderAutomatico();

    btnSlider1.addEventListener('click',function(){
        iterarSlider();
        contadorSlider=0;
        console.log(contadorSlider);
    });
    btnSlider2.addEventListener('click', function(){
        iterarSlider();
        contadorSlider=1;
        console.log(contadorSlider);
    });
    btnSlider3.addEventListener('click', function(){
        iterarSlider();
        contadorSlider=2;
        console.log(contadorSlider);
    });
});