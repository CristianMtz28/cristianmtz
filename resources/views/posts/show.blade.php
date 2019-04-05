@extends('layout')
@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)
@section('content')

<style>
/* * {
  margin: 0;
  padding: 0; } */

body {
  background: #f2f2f2;
  font-size: 16px;
  font-family: "Open Sans", sans-serif; }

.ad {
  margin-bottom: 1.25em;
  text-align: center; }

a {
  color: #5f6ad4; }

/* header .logo {
  padding-top: 1.25em;
  padding-bottom: 1.25em; }
  header .logo a {
    display: inline-block; }
header .redes-sociales {
  text-align: right;
  line-height: 5em; }
  header .redes-sociales a {
    border-radius: 50%;
    width: 2.5em;
    height: 2.5em;
    text-align: center;
    line-height: 2.5em;
    display: inline-block;
    background: navy;
    color: #fff;
    margin-left: 1.25em; }
    header .redes-sociales a.youtube {
      background: #c05554; }
    header .redes-sociales a.facebook {
      background: #3b5998; }
    header .redes-sociales a.twitter {
      background: #55acee; }
header .menu {
  background: #5f6ad4;
  margin-bottom: 1.25em; }
  header .menu ul {
    list-style: none;
    overflow: hidden;
    margin: 0;
    padding: 0; }
    header .menu ul li {
      float: left;
      display: inline-block; }
      header .menu ul li a {
        display: inline-block;
        padding: 1em 1.25em;
        font-size: 0.87em;
        color: #fff; }
        header .menu ul li a:hover {
          text-decoration: none;
          background: #7780da; } */

.main .titulo-seccion h3,
.sidebar .titulo-seccion h3 {
  font-family: "Oswald", sans-serif;
  font-size: 1.5em;
  line-height: 1.5em;
  font-weight: normal;
  color: #3b3b3b;
  padding-bottom: 0.62em;
  border-bottom: 4px solid #48b04d;
  margin-bottom: 1.25em; }

.main .titulo_seccion > div {
  padding: 0; }
.main .single-post .categorias {
  margin-bottom: 1.875em; }
.main .posts .post {
  margin-bottom: 1.875em; }
  .main .posts .post .contenedor {
    background: #fff;
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.3); }
    .main .posts .post .contenedor .thumb img {
      width: 100%;
      vertical-align: top;
      height: auto; }
    .main .posts .post .contenedor .info {
      padding: 1.25em; }
      .main .posts .post .contenedor .info .titulo {
        line-height: 1.125em;
        margin-bottom: 1.25em;
        font-size: 1.125em;
        font-weight: bold;
        margin-top: 0; }
        .main .posts .post .contenedor .info .titulo a {
          color: #3b3b3b; }
      .main .posts .post .contenedor .info .fecha {
        color: #909090;
        font-size: 0.875em;
        margin-bottom: 1.25em; }
      .main .posts .post .contenedor .info .extracto {
        color: #292929;
        font-size: 1em;
        height: 8.125em;
        max-height: 8.125em;
        line-height: 1.75em;
        margin-bottom: 1.25em;
        overflow: hidden; }
        .main .posts .post .contenedor .info .extracto:hover {
          overflow: auto; }
      .main .posts .post .contenedor .info .categorias ul {
        list-style: none; }
        .main .posts .post .contenedor .info .categorias ul li {
          display: inline-block; }
      .main .posts .post .contenedor .info .categorias a {
        color: #909090;
        font-size: 1em;
        font-weight: bold;
        margin-right: 1.25em; }
        .main .posts .post .contenedor .info .categorias a:hover {
          color: #5f6ad4;
          text-decoration: none; }
.main .paginacion ul {
  list-style: none;
  overflow: hidden;
  margin-bottom: 1.25em;
  font-size: 1em; }
  .main .paginacion ul li {
    float: left;
    background: #3b3b3b;
    color: #fff;
    margin-right: 0.62em;
    font-size: 1.125em;
    line-height: 1.125em; }
    .main .paginacion ul li.disabled {
      padding: 0.62em 0.937em;
      font-size: 1.125em;
      line-height: 1.125em; }
    .main .paginacion ul li a {
      background: #5f6ad4;
      color: #fff;
      line-height: 1.125em;
      display: inline-block;
      padding: 0.62em 0.937em; }
      .main .paginacion ul li a:hover {
        background: #7780da;
        text-decoration: none; }
.main .paginacion .wp-pagenavi {
  margin-bottom: 1.25em; }
  .main .paginacion .wp-pagenavi .pages,
  .main .paginacion .wp-pagenavi span {
    background: #3b3b3b;
    color: #fff;
    margin-right: 0.62em;
    font-size: 1.125em;
    line-height: 1.125em;
    padding: 0.62em 0.937em; }
  .main .paginacion .wp-pagenavi a {
    background: #5f6ad4;
    color: #fff;
    font-size: 1.125em;
    display: inline-block;
    padding: 0.62em 0.937em;
    margin-right: 0.62em; }
    .main .paginacion .wp-pagenavi a:hover {
      background: #7780da;
      text-decoration: none; }

.sidebar .widget {
  margin-bottom: 2.5em; }
  .sidebar .widget.redes-sociales {
    overflow: hidden; }
    .sidebar .widget.redes-sociales a {
      width: 33.3333%;
      padding: 1.25em;
      text-align: center;
      float: left;
      background: #000;
      color: #fff;
      display: block; }
      .sidebar .widget.redes-sociales a:hover {
        text-decoration: none; }
      .sidebar .widget.redes-sociales a.youtube {
        background: #C13584; }
      .sidebar .widget.redes-sociales a.facebook {
        background: #3b5998; }
      .sidebar .widget.redes-sociales a.twitter {
        background: #00abf0; }
      .sidebar .widget.redes-sociales a .icono {
        font-size: 1.875em;
        width: 100%;
        margin-bottom: 0.5em; }
  .sidebar .widget.boletin .formulario {
    background: #0e2b37;
    padding: 1.25em;
    text-align: center; }
    .sidebar .widget.boletin .formulario label {
      color: #fff;
      margin-bottom: 1.25em;
      display: block;
      font-weight: normal; }
    .sidebar .widget.boletin .formulario input[type="email"] {
      color: #909090;
      text-align: center;
      padding: 0.625em;
      font-size: 1.125em;
      border-radius: 3px;
      width: 100%;
      border: none;
      margin-bottom: 1.25em; }
    .sidebar .widget.boletin .formulario input[type="submit"] {
      background: #48b04d;
      border-radius: 3px;
      padding: 0.625em 1.875em;
      border: none;
      color: #fff; }
  .sidebar .widget .contenedor-ad {
    text-align: center; }
    .sidebar .widget .contenedor-ad a {
      display: inline-block; }

footer .menu {
  background: #5f6ad4; }
  footer .menu ul {
    list-style: none;
    overflow: hidden;
    margin: 0;
    padding: 0; }
    footer .menu ul li {
      float: left;
      display: inline-block; }
      footer .menu ul li a {
        display: inline-block;
        padding: 1em 1.25em;
        font-size: 0.87em;
        color: #fff; }
        footer .menu ul li a:hover {
          text-decoration: none;
          background: #7780da; }
footer .copyright p {
  font-size: 0.87em;
  color: #000;
  padding: 0.625em;
  text-align: center;
  margin: 0; }

@media screen and (max-width: 768px) {
  header .logo {
    text-align: center; }
  header .redes-sociales {
    display: none; }
  header .menu ul {
    text-align: center; }
    header .menu ul li {
      float: none; }

  .main .posts .post .contenedor .info .extracto {
    height: auto; }

  .sidebar {
    display: none; }

  footer .menu ul {
    text-align: center; }
    footer .menu ul li {
      float: none; } }

/*# sourceMappingURL=estilos.css.map */

.navbar-dropdown.bg-color.transparent {
    background: black;
}

</style>

{{-- <section class="engine"><a href="https://mobirise.info/o">portfolio website templates</a></section> --}}
<section class="cid-qTkA127IK8 " id="header2-1">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">

    </div>
</section>

<br>
<br>
<br>
<br>
<br>
<div class="ad container hidden-xs">
    <div class="row">
        <div class="col-md-12">
            {{-- <img src="/img/ad.jpg" alt=""> --}}
            <h1>Cristian Martínez's Blog</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <section class="main col-md-8">
            <div class="row posts single-post">
                <article class="col-sm-12 post">
                    <div class="contenedor">
                        <div class="thumb">
                            <img src="/img/1.jpg" width="700" alt="">
                        </div>
                        <div class="info">
                            <h2 class="titulo" >{{ $post->title }}</h2>
                            <p class="fecha" >{{ $post->published_at->format('M d Y') }}</p>
                            <div class="categorias" >
                                <a href="" >{{$post->category->name}}</a>
                            </div>
                            <div class="texto">
                                {!!$post->body!!}
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <aside class="sidebar col-md-4">
            <div class="widget redes-sociales">
                <div class="titulo-seccion">
                    <h3 style="padding:15px; text-align:center;">Sígueme</h3>
                    <div class="redes-sociales">
                        <a class="youtube" target="_blank" href="http://www.instagram.com/cristianmtz28">
                            <i class="fab fa-instagram"></i>
                            <span class="seguidores">440 folowers</span>
                        </a>
                        <a class="twitter" target="_blank" href="http://www.twitter.com/cristianmtz28">
                            <i class="fab fa-twitter"></i>
                            <span class="seguidores">132 followers</span>
                        </a>
                        <a class="facebook" target="_blank" href="http://www.facebook.com/cristianmtz28">
                            <i class="fab fa-facebook-f"></i>
                            <span class="seguidores">402 amigos</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="widget boletin">
                <div class="titulo-seccion">
                    <h3 style="text-align:center">Categorías</h3>
                    <form class="formulario" action="">
                        <label for="email">Suscríbete a nuestro boletín</label>
                        <input type="email" id="email" placeholder="Correo Electronico" required>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>

            <div class="widget ad">
                <div class="contenedor-ad">
                    <a href="#"><img src="img/ad2.jpg" alt=""></a>
                </div>
            </div>
        </aside>
    </div>
</div>


<!--Comienzo del banner de Cumpleaños-->
<section class="countdown1 cid-rdcLkw7VIT mbr-parallax-background" id="countdown1-7">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>
    <div class="container ">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2"><strong style="color:#fff">¡Cumpleaños!</strong></h2>
        <h3 class="mbr-section-subtitle align-center mbr-fonts-style display-5"><strong style="color:#fff">Octubre 25</strong></h3>

    </div>
    <div class="container countdown-cont align-center">
        <div class="daysCountdown" title="Días"></div>
        <div class="hoursCountdown" title="Horas"></div>
        <div class="minutesCountdown" title="Minutos"></div>
        <div class="secondsCountdown" title="Segundos"></div>
        <div class="countdown pt-5 mt-2" data-due-date="2019/10/25">
        </div>
    </div>
</section>
<!--Fin del banner de Instagram-->


<!--Comienzo del mapa de Google maps-->
<section class="map1 cid-rdjktNeEjL" id="map1-1f">
    <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCy9r70T3NYf3PhvVflTo0_zdif2_IoIYs&amp;q=place_id:ChIJGWa-xMwC0oURCr4r_TJpFyY" allowfullscreen=""></iframe></div>
</section>
<!--Fin del banner del mapa de Google maps-->

@endsection
