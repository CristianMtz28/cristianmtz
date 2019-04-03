@extends('layout')
@section('content')


<!--TÍTULO DE ÚLTIMOS POSTS-->
{{-- <section class="mbr-section article content9 cid-rdgYoZrGVq" id="content9-1b">
    <div class="container">
        <div class="inner-container" style="width: 50%;">
            <!-- <hr class="line" style="width: 50%;"> -->
            <div class="section-text align-center mbr-fonts-style display-5"><strong>Últimos Posts</strong></div>
            <hr class="line" style="width: 100%;">
        </div>
    </div>
</section> --}}
<!--FIN DE TÍTULO DE ÚLTIMOS POSTS-->

<!--Estilos de los post-->
<style>
.main .titulo-seccion h3,
.sidebar .titulo-seccion h3 {
    font-family: "Oswald", sans-serif;
    font-size: 1.5em;
    line-height: 1.5em;
    font-weight: normal;
    color: #3b3b3b;
    padding-bottom: 0.62em;
    border-bottom: 4px solid #5f6ad4;
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

</style>



<section class="engine"><a href="https://mobirise.info/o">portfolio website templates</a></section><section class="cid-qTkA127IK8 mbr-fullscreen mbr-parallax-background" id="header2-1">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    El mundo es tu decisión</h1>

                <p class="mbr-text pb-3 mbr-fonts-style display-5">¡Hola &amp; Bienvenido!<br>Ésta página se hizo con el fin de poder expresar mis ideas, ayudarme con el día a día y poder platicarte un poco de mí.<br>Si necesitas algo, sólo pídelo y con gusto trataré de ayudarte en lo que me sea posible.<br>¡Saludos y gracias!</p>
                <!-- <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="http://cristianmtz.com">LEARN MORE</a></div> -->
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>





<div class="container">
    <div class="row">
        <section class="main col-md-12">
            <div class="row titulo-seccion">
                <div class="col-md-12" style="padding-top: 28px;">
                    <h3 style="text-align:center">Últimos Posts</h3>
                </div>
            </div>
            @foreach($posts as $post)
            <div class="row posts">
                <article class="col-sm-4 post">
                    <div class="contenedor">
                        <div class="thumb">
                            <a href="blog/{{ $post->id }}"><img src="assets/images/ctr.png" width="700" alt=""></a>
                        </div>
                        <div class="info">
                            <h2 class="titulo"style="text-align: center; font-family: 'Rubik', sans-serif; font-size:25px;"><a href="blog/{{ $post->id }}" ><b>{{str_limit($post->title, 55, '...')}}</b> </a></h2>
                            <h6 class="categorias" style="text-align:center;"><b>Categoría:</b> <a href="#" style="text-align:center;"><b style="color:blue">{{$post->category->name}}</b></a></h6>
                            <p class="fecha" style="text-align: center">Fecha: {{$post->published_at->format('d/m/Y')}}</p>
                            <p class="extracto" style="text-align: center; color:#767676; font-family: 'Rubik', sans-serif;">{{$post->excerpt}}</p>
                            {{-- {{str_limit($post->excerpt, 160, '...')}} --}}

                            <div class="seeMore mbr-section-btn text-center">
                                <a href="blog/{{ $post->id }}" class="btn btn-primary display-4">
                                    Leer más...
                                </a>
                            </div>

                            {{-- <p class="seeMore" style="text-align: center; margin-top:-35px;"><a href="blog/{{ $post->id }}"><u>Leer más...</u></a></p> --}}
                            {{-- <div class="categorias" style="text-align: center;">
                                <a href="#" style="text-align:center;">{{$post->category->name}}</a>
                            </div> --}}
                        </div>

                    </div>
                </article>

                {{-- <article class="col-sm-4 post">
                    <div class="contenedor">
                        <div class="thumb">
                            <a href="#"><img src="img/2.jpg" width="700" alt=""></a>
                        </div>
                        <div class="info">
                            <h2 class="titulo"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h2>
                            <p class="fecha">7 de Abril de 2016</p>
                            <p class="extracto">Maecenas dapibus dui in mi convallis ornare. Maecenas enim nulla, porta sit amet sem eu, vehicula sagittis ex. Nullam consectetur quam nuon.</p>
                            <div class="categorias">
                                <a href="#">HTML</a>
                                <a href="#">CSS</a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-sm-4 post">
                    <div class="contenedor">
                        <div class="thumb">
                            <a href="#"><img src="img/3.jpg" width="700" alt=""></a>
                        </div>
                        <div class="info">
                            <h2 class="titulo"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h2>
                            <p class="fecha">7 de Abril de 2016</p>
                            <p class="extracto">Maecenas dapibus dui in mi convallis ornare. Maecenas enim nulla, porta sit amet sem eu, vehicula sagittis ex. Nullam consectetur quam nuon.</p>
                            <div class="categorias">
                                <a href="#">HTML</a>
                                <a href="#">CSS</a>
                            </div>
                        </div>
                    </div>
                </article> --}}
            </div>
            @endforeach
    </div>

</div>

<!--FIN DE LOS ÚLTIMOS POSTS-->


<!--Comienzo de las frases épicas-->
<section class="tabs1 cid-rdcLmPZg2V mbr-parallax-background" id="tabs1-8">
    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(35, 35, 35);">
    </div>
    <div class="container">
        <h2 class="mbr-white align-center pb-5 mbr-fonts-style mbr-bold display-2">
            Frases Épicas... Para mí</h2>
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active show display-7" role="tab" data-toggle="tab" href="#tabs1-8_tab0" aria-selected="true">
                            Sofía Serrano
                        </a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" href="#tabs1-8_tab1" aria-selected="true">
                            Ben Parker
                        </a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" href="#tabs1-8_tab2" aria-selected="true">
                            Nora Allen
                        </a></li>
                    <li class="nav-item">
                        <a class="nav-link mbr-fonts-style display-7" role="tab" data-toggle="tab" href="#tab4">
                            Ángel Martínez
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active show display-7" role="tab" data-toggle="tab" href="#tabs1-8_tab4" aria-selected="true">
                            René Descartes
                        </a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active show display-7" role="tab" data-toggle="tab" href="#tabs1-8_tab5" aria-selected="true">
                            El Rey León
                        </a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    <blockquote style="color:#fff; font-size:28px; text-align: center;">"Cada minuto que pasa es una oportunidad para cambiarlo todo"</blockquote>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    <blockquote style="color:#fff; font-size:28px; text-align: center;">"Un gran poder conlleva una gran responsabilidad"</blockquote>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    <blockquote style="color:#fff; font-size:28px; text-align: center;">"Acepta las cosas que no puedes cambiar, ten el valor de cambiar las cosas que puedes y ten la sabiduria para conocer la diferencia"</blockquote>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab4" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    <blockquote style="color:#fff; font-size:28px; text-align: center;">"Todo a su tiempo"</blockquote>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab5" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    <blockquote style="color:#fff; font-size:28px; text-align: center;">"Primero pienso, luego existo"</blockquote>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab6" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    <blockquote style="color:#fff; font-size:28px; text-align: center;">"El pasado puede doler, pero puedes huir de el... o aprender"</blockquote>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Fin de las frases épicas-->




<!--Comienzo del banner de Instagram-->
<section class="mbr-instagram-feed" data-rows="2" data-per-row-slider="" data-spacing="5" data-full-width="" data-token="54448081.727bfe1.72baf681e4374db5b6bcfd15111e391c" data-per-row-grid="4" id="instagram-feed-block-1e" data-rv-view="13" style="background-image: url(assets/images/instagram-background.jpg); padding-top: 40px; padding-bottom: 40px;">
    <div class="container container_toggle">
        <div class="row">
            <div class="col">
                <div class="inst">
                    <h1 class="inst__title align-center mbr-fonts-style display-2"><i class="fab fa-instagram"></i>&nbsp;<strong style="font-family:'Segoe UI', 'San Francisco', 'Roboto'">Instagram</strong></h1>
                    <div class="inst__content"></div>
                    <div class="inst__more mbr-section-btn align-center" buttons="0"><a class="btn btn-md btn-primary display-4" href="#">Ver más...</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Fin del banner de Instagram-->






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

@stop
