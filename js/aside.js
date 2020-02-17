'use strict'
window.addEventListener('load', function(){

   


    var asideMayores = document.querySelector('#asideMayores');
    var asideJuveniles = document.querySelector('#asideJuveniles');
    var asideFlag = document.querySelector('#asideFlag');

    var asides = [asideMayores, asideJuveniles, asideFlag];

    var btnMayores = document.querySelector('#btnMayores');
    var btnJuveniles = document.querySelector('#btnJuveniles');
    var btnFlag = document.querySelector('#btnFlag');

    function resetarAsides(){
        for(var i=0; i<asides.length;i++){
            asides[i].style.display = 'none';
        }
    }

     /*CODIGO PARA LAS REDES*/
     var redesHorizontal = document.querySelector('#redesHorizontal');
     var redesVertical = document.querySelector('#asideRedesVertical');

     btnMayores.addEventListener('click', function(){
         redesHorizontal.classList.remove('asideRedesHorizontalOff');
         redesHorizontal.classList.add('asideRedesHorizontalOn');
 
         redesVertical.classList.remove('asideRedesOn');
         redesVertical.classList.add('asideRedesOff');

         estadisticasMayores.classList.add('asideActivo');
         estadisticasJuveniles.classList.remove('asideActivo');
         estadisticasJuveniles.classList.add('asideInactivo');

         btnMayores.className = 'btnAsideActivo';
         btnJuveniles.className = 'btnAsideInactivo';
     });
 
     btnJuveniles.addEventListener('click', function() {
        redesHorizontal.classList.remove('asideRedesHorizontalOn');
        redesHorizontal.classList.add('asideRedesHorizontalOff');

        redesVertical.classList.remove('asideRedesOff');
        redesVertical.classList.add('asideRedesOn');

        estadisticasJuveniles.classList.add('asideActivo');
        estadisticasMayores.classList.remove('asideActivo');
        estadisticasMayores.classList.add('asideInactivo');

        btnMayores.className = 'btnAsideInactivo';
        btnJuveniles.className = 'btnAsideActivo';
     });
     console.log('adasdadasd');
     /*------------------------------------------*/
    /*btnMayores.addEventListener('click', function(){
        //resetarAsides();
        //asideMayores.style.display = 'block';
        asideMayores.className = 'asideMayores asideActivo';
        asideJuveniles.className = 'asideMayores asideInactivo';
        asideFlag.className = 'asideMayores asideInactivo';

        btnMayores.className = 'btnAsideActivo';
        btnJuveniles.className = '';
        btnFlag.className = '';
        var asideRedes = document.querySelector('.asideRedes').style.display='none';
    });

    btnJuveniles.addEventListener('click', function(){
        //resetarAsides();
        //asideJuveniles.style.display = 'block';

        asideMayores.className = 'asideMayores asideInactivo';
        asideJuveniles.className = 'asideMayores asideActivo';
        asideFlag.className = 'asideMayores asideInactivo';

        btnMayores.className = '';
        btnJuveniles.className = 'btnAsideActivo';
        btnFlag.className = '';
        var asideRedes = document.querySelector('.asideRedes').style.display='block';
    });

    btnFlag.addEventListener('click', function(){
        //resetarAsides();
        //asideFlag.style.display = 'block';

        asideMayores.className = 'asideMayores asideInactivo';
        asideJuveniles.className = 'asideMayores asideInactivo';
        asideFlag.className = 'asideMayores asideActivo';

        btnMayores.className = '';
        btnJuveniles.className = '';
        btnFlag.className = 'btnAsideActivo';
        var asideRedes = document.querySelector('.asideRedes').style.display='block';
    });*/


    /*CODIGO PARA LOS VIDEOS DE LA HOME*/

    let videosBox = document.querySelectorAll('.videosGaleria > #wp-html5vp-1 > .video-wrap > .video_frame');
    console.log(videosBox);
    videosBox.forEach(video => {

        console.log(video.children[0]);

        var titulo = document.createElement('p');
        titulo.className = 'tituloModelVideo';
        var texto = document.createTextNode(video.children[1].innerText);
        //var texto = video.children[1].innerText;
        console.log(texto);
        titulo.appendChild(texto);
        video.children[0].children[0].children[1].appendChild(titulo);
    });

    /*CODIGO PARA CAMBIAR INFO DE ESTADISTICAS JUVENILES A MAYORES*/
    console.log('------EMPIEZA EL CODIGO PARA BOTONES ESTADISTICAS 2------');
    var cuadrosEstadisticas = document.querySelectorAll('.sp-widget-align-none');
    console.log(cuadrosEstadisticas);

    var contenedorEstadisticasHome = document.querySelector('#sidebar-primary');

    var estadisticasMayores = document.createElement('div');
    estadisticasMayores.className = 'estadisticasHome';
    estadisticasMayores.id = 'estadisticasMayores';

    var estadisticasJuveniles = document.createElement('div');
    estadisticasJuveniles.className = 'estadisticasHome';
    estadisticasJuveniles.id = 'estadisticasJuveniles';
    contenedorEstadisticasHome.appendChild(estadisticasMayores);
    contenedorEstadisticasHome.appendChild(estadisticasJuveniles);
    
    for(let i=0; i < cuadrosEstadisticas.length; i++){
        if(i<=2){
            var estadistica = cuadrosEstadisticas[i];
            console.log(estadistica);
            estadisticasMayores.appendChild(estadistica);
        }else {
            var estadistica = cuadrosEstadisticas[i]
            estadisticasJuveniles.appendChild(estadistica);
        }
    }

    estadisticasMayores.className = 'estadisticasHome asideActivo';
    estadisticasJuveniles.className = 'estadisticasHome asideInactivo';
});