'use strict'
window.addEventListener('load', function(){

    //botones
    var btnTodos = document.querySelector('#fechasTodos');
    var btnJugados = document.querySelector('#fechasJugados');
    var btnProximos = document.querySelector('#fechasProximos');

    var jugados = document.getElementsByClassName('jugado');
    var proximo = document.getElementsByClassName('proximo');
    //console.log(prueba);
    btnTodos.addEventListener('click', function(){
        for(var i=0; i<jugados.length; i++){
            jugados[i].style.display='flex';
        }
        for(var i=0; i<proximo.length; i++){
            proximo[i].style.display='flex';
        }
    });

    btnJugados.addEventListener('click', function(){
        for(var i=0; i<jugados.length; i++){
            jugados[i].style.display='flex';
        }
        for(var i=0; i<proximo.length; i++){
            proximo[i].style.display='none';
        }
    });

    btnProximos.addEventListener('click', function(){
        for(var i=0; i<jugados.length; i++){
            jugados[i].style.display='none';
        }
        for(var i=0; i<proximo.length; i++){
            proximo[i].style.display='flex';
        }
    });
});