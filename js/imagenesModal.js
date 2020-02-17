'use strict'
window.addEventListener('load', function(){
    var ventana = document.querySelector('#ventanaModal');

    var cerrarModal = document.querySelector('#cerrarModal');

    var imagenes = document.querySelectorAll('.contenedorImgIndividual');
    

    function abrirVentanaModal(){
        ventana.className = 'ventanaModalImg modalActiva';
    }
    function cerrarVentanaModal(){
        ventana.className = 'ventanaModalImg modalInactiva';
    }

    for(var i=0; i<imagenes.length; i++){
        imagenes[i].addEventListener('click', function(){
            abrirVentanaModal();
        });
    }
    cerrarModal.addEventListener('click', function(){
        cerrarVentanaModal();
    });

});