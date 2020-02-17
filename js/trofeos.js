'use strict'
window.addEventListener('load', function(){
    var trofeo1 = document.getElementById('trofeo1');
    var trofeo2 = document.getElementById('trofeo2');
    var trofeo3 = document.getElementById('trofeo3');

    var btnSiguiente = document.getElementById('btnTrofeoSiguiente');
    var btnAtras = document.getElementById('btnTrofeoAtras');

    var btnRadio1 = document.getElementById('btnRAR1');
    var btnRadio2 = document.getElementById('btnRAR2');
    var btnRadio3 = document.getElementById('btnRAR3');

    var trofeoActivo = 'trofeo trofeoActivo';
    var trofeoInactivo = 'trofeo trofeoInactivo';

    var trofeoInicialInactivo = 'trofeo trofeoInicialInactivo';

    var posicionTrofeo = 0;

    var trofeos = [trofeo1, trofeo2, trofeo3];

    var botonesR = [btnRadio1, btnRadio2, btnRadio3];

    function quitarClaseBotonesR(){
        for(var i=0; i<botonesR.length; i++){
            botonesR[i].className = '';
        }
    }

    function activarBtnR1(){
        quitarClaseBotonesR();
        btnRadio1.className = 'btnAsideActivo';
    }
    function activarBtnR2(){
        quitarClaseBotonesR();
        btnRadio2.className = 'btnAsideActivo';
    }
    function activarBtnR3(){
        quitarClaseBotonesR();
        btnRadio3.className = 'btnAsideActivo';
    }


    function quitarClaseTrofeo(){
        for(var i=0; i<trofeos.length; i++){
            if(trofeos[i].className == 'trofeo trofeoInicialInactivo'){
                trofeos[i].className = 'trofeo trofeoInicialInactivo';
                //console.log('inicial inactivo');
            }else{
                trofeos[i].className = trofeoInactivo;
                //console.log('inicial activo');
            }
        }
    }

    btnSiguiente.addEventListener('click', function(){
        posicionTrofeo++;
        
        if(posicionTrofeo>2){
            posicionTrofeo=0;
        }
        if(posicionTrofeo==0){
            quitarClaseTrofeo();
            trofeo1.className = trofeoActivo;
            activarBtnR1();
        }else if(posicionTrofeo==1){
            quitarClaseTrofeo();
            trofeo2.className = trofeoActivo;
            activarBtnR2();
        }else if(posicionTrofeo==2){
            quitarClaseTrofeo();
            trofeo3.className = trofeoActivo;
            activarBtnR3();
        }
    });

    btnAtras.addEventListener('click', function(){
        posicionTrofeo--;
        
        if(posicionTrofeo<0){
            posicionTrofeo=2;
        }
        if(posicionTrofeo==0){
            quitarClaseTrofeo();
            trofeo1.className = trofeoActivo;
            activarBtnR1();
        }else if(posicionTrofeo==1){
            quitarClaseTrofeo();
            trofeo2.className = trofeoActivo;
            activarBtnR2();
        }else if(posicionTrofeo==2){
            quitarClaseTrofeo();
            trofeo3.className = trofeoActivo;
            activarBtnR3();
        }
    });
    
    btnRadio1.addEventListener('click', function(){
        posicionTrofeo = 0;
        quitarClaseTrofeo();
        trofeo1.className = trofeoActivo;
        console.log(posicionTrofeo);
        activarBtnR1();
    });

    btnRadio2.addEventListener('click', function(){
        posicionTrofeo = 1;
        quitarClaseTrofeo();
        trofeo2.className = trofeoActivo;
        console.log(posicionTrofeo);
        activarBtnR2();
    });

    btnRadio3.addEventListener('click', function(){
        posicionTrofeo = 2;
        quitarClaseTrofeo();
        trofeo3.className = trofeoActivo;
        console.log(posicionTrofeo);
        activarBtnR3();
    });

});