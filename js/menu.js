'use strict'
window.addEventListener('load', function(){
    var abrirMenu = document.querySelector('#btnMenu');
    var cerrarMenu = document.querySelector('#cerrarMenu');

    var menu = document.querySelector('#headerMenu');

    var menuActivo = 'headerMenu headerMenuActivo';
    var menuInactivo = 'headerMenu headerMenuInactivo';


    var filtroMenu = document.querySelector('#filtroMenu');

    var filtroMenuActivo = 'filtroMenu filtroMenuActivo';
    var filtroMenuInactivo = 'filtroMenu filtroMenuInactivo';

    abrirMenu.addEventListener('click', function(){
        menu.className = menuActivo;
        filtroMenu.className = filtroMenuActivo;
    });

    cerrarMenu.addEventListener('click', function(){
        menu.className = menuInactivo;
        filtroMenu.className = filtroMenuInactivo;
    });


});