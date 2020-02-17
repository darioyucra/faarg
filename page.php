<?php /* Template Name:Fotos Todas*/ ?>
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
            <li id="submenuActivo"><a href="http://faarg.arlud.com/index.php/nggallery/todas-las-imagenes?page_id=63133">Todas</a></li>
            <li><a href="http://faarg.arlud.com/?page_id=63521">Mayores</a></li>
            <li><a href="#">Juveniles</a></li>
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




</script>


<?php get_footer(); ?>