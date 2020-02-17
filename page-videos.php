<?php /* Template Name:Plantilla Videos*/ ?>
<?php get_header(); ?>

<style>
.ngg-albumoverview.default-view .ngg-album-compact{
   
    box-sizing:border-box;
    padding:0px!important;
    box-shadow:none!important;
    background:#fff;
    position:relative;
    max-width:350px;
    width:350px;
    overflow:hidden;
    margin:10px 5px!important;
    display:flex;
    flex-direction:column-reverse;
    border-radius:6px;
    border:1px solid #38A9FF;
}

/* .ngg-albumoverview.default-view .ngg-album-compactbox, .ngg-albumoverview.default-view .ngg-album-compactbox .Thumb{
    background:red;
    width:100%;
    height:100%;
    max-height:248px;
    overflow:hidden;
} */
.ngg-albumoverview.default-view .ngg-album-compactbox, .ngg-albumoverview.default-view .ngg-album-compactbox .Thumb{
    height:280px;
    /* background:red; */
}
.ngg-album-compactbox{
    border-radius:0px;
    padding:0px!important;
    /* max-width:350px; */
    /* overflow:hidden; */
    /* width:100%; */
}
.ngg-albumoverview.default-view{
    display:flex!important;
    flex-wrap:wrap;
    justify-content:center;
}
.ngg-album-compact h4{
    margin-top:0px;
    padding-top:10px!important;
    background-color:#003B75;
}
.ngg-albumoverview.default-view .ngg-album-compact h4 .ngg-album-desc{
    text-decoration:none;
    color:#fff;
    font-size:16px;
    font-family: 'Montserrat';
}
/* .ngg-albumoverview.default-view .ngg-album-compact h4{
    position:absolute;
    top:0;
    left:0;
    z-index:1;
    width:100%;
    background-color:#003B75;
} */
.ngg-album-link{
    position:relative;
}
.linkHover{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%, -50%);
    display:flex;
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,0.6);
    z-index:2;
    justify-content:center;
    align-items:center;
    text-decoration:none;
    color:#38A9FF;
    font-size:0px;
    font-weight:600;
    font-family:'Montserrat';
    opacity:0;
    transition: 0.3s linear;
}
.linkHover:hover{
    opacity:1;
    font-size:35px;
}


/*estilos para las fotos*/
.bannerSection h2{
    width:90%;
    max-width:900px;
    text-align:center;
}
.ngg-breadcrumbs{
    display:none;
}


/*ESTILOS PARA LOS VIDEOS*/
.video-row{
    margin:0px;
}
.html5video-wpcolumn, .html5video-columns{
    padding:0px;
    float:none;
    border:1px solid #38A9FF;
    border-radius:4px;
    margin-bottom:15px;
    height:280px;
    overflow:hidden;
}

.video_frame{
    margin-bottom:0px;
    display:flex;
    flex-direction:column-reverse;
}
.html5video-medium-12 .video_image_frame{
    height:220px;
}
.video_image_frame img{
    box-shadow:none;
    border:none;
}
.video_frame .video_title{
    padding:0px;
    height:60px;
    display:flex;
    justify-content:flex-start;
    align-items:center;
    text-align:left;
    background-color:#003B75;
    color:#fff;
    padding-left:12px;
    font-family:'Montserrat';
    font-size:16px;
    font-weight:600;
}
.video_frame:hover .video_image_frame img{
    box-shadow:none;
    border:none;
}
@media screen and (min-width: 1024px){
    .html5video-wpcolumn, .html5video-columns{
        width:32%;
        height:323px;
        margin-left:7px;
        margin-right:7px;
    }
    .html5video-medium-12 .video_image_frame{
        height:260px;
    }
    .video_frame .video_title{
        height:63px;
    }
    .video-row{
        display:flex;
        justify-content:flex-start;
        align-items:center;
        flex-wrap:wrap;
    }
}

</style>

<div class="espacioNoticias">

</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="bannerSection">
    <!-- <h2>Fotos Todas</h2> -->
    <h2><?php the_title(); ?></h2>
    <span id='filtroBannerSection'></span>
</div>
<?php endwhile; endif; ?>
<div class="subMenuSection">
    <nav>
        <ul>
            <li id="submenuActivo"><a href="http://faarg.arlud.com/?page_id=63135">Todas</a></li>
            <li><a href="http://faarg.arlud.com/?page_id=63607">Mayores</a></li>
            <li><a href="http://faarg.arlud.com/?page_id=63609">Juveniles</a></li>
            <!-- <li><a href="#">Flag femenino</a></li> -->
            <li><a href="#">Selecciones</a></li>
        </ul>
    </nav>
</div>
<div class="contenedorFotosPrincipal" style="overflow-x:hidden;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>


<script>
var contenedoresLinks = document.querySelectorAll('.ngg-album-link');
console.log(contenedoresLinks);
console.log('va bien');
for(var i=0; i<contenedoresLinks.length; i++){
    var linkHover = document.createElement("a");
    var textLinkHover = document.createTextNode("+");
    linkHover.appendChild(textLinkHover);

    contenedoresLinks[i].appendChild(linkHover);
}
linksHover = document.querySelectorAll(".ngg-album-link > a:nth-child(2)");
for(var i=0; i<linksHover.length; i++){
    linksHover[i].className = 'linkHover';
}

console.log('script 2');
linkOriginal = document.querySelectorAll(".ngg-album-link > a:nth-child(1)");
for(var i=0; i<linkOriginal.length; i++){
    console.log(linkOriginal[i].getAttribute("href"));
}

console.log('script 3');
linksHover = document.querySelectorAll(".ngg-album-link > a:nth-child(2)");
for(var i=0; i<linksHover.length; i++){
    var linkR = linkOriginal[i].getAttribute("href");
    linksHover[i].setAttribute('href', linkR);
}



/*codigo para los encabezados de la seccion fotos*/
var tituloBannerFotos = document.querySelector("#principal > div.bannerSection > h2");
if(tituloBannerFotos.innerHTML == "Fotos"){
    //console.log('El titulo del banner es fotos');
    tituloBannerFotos.innerHTML = "Fotos Todas";
}

/*AHORA COMPRUEBO EL TITULO DE LA PESTAÑA FOTOS PARA VER QUE BOTON DEL MENU ESTA ACTIVO*/
var botonesSubMenuFotos = document.querySelectorAll("#principal > div.subMenuSection > nav > ul > li");
console.log(botonesSubMenuFotos);

function quitarIdSubMenu(){
    for(var i=0; i<botonesSubMenuFotos.length; i++){
        botonesSubMenuFotos[i].id = "";
    }   
}

if(tituloBannerFotos.innerHTML == 'Videos'){
    quitarIdSubMenu();
    botonesSubMenuFotos[0].id = 'submenuActivo';
}else if(tituloBannerFotos.innerHTML == 'Videos Mayores'){
    quitarIdSubMenu();
    botonesSubMenuFotos[1].id = 'submenuActivo';
}else if(tituloBannerFotos.innerHTML == 'Videos Juveniles'){
    quitarIdSubMenu();
    botonesSubMenuFotos[2].id = 'submenuActivo';
}


</script>


<?php get_footer(); ?>