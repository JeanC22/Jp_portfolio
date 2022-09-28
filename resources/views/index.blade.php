<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> JPortfolio</title>
    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link href="{{ URL::asset('./resources/css/loader.css') }} " rel="stylesheet">
    <link href="{{ URL::asset('./resources/css/style.css') }} " rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="" onload="scrollbar()">
    <div class="contenedor_loader" id="onload">
        @include('components.contenido')
    </div>
    <div id="progressbar"></div>
    <div id="scrollpath"></div>
    
    <div class="container-fluid">
      
        {{-- IMAGEN PRINCIPAL --}}

        <div class="row">
            <div class="col-md-12">
            @include('components.nav')
            @include('components.alert')
            <div class="position-absolute top-45 start-65">
                <h3>Soy <span class="text-color-gN">Jeanpierr Caraballo</span></h3>
            </div>
            <div class="position-absolute top-50 start-63 mt-4">
                <ul>
                    <a href="https://www.linkedin.com/in/jeanpierr-delgado/" target="_blank"><i
                            class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/JeanC22" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://www.instagram.com/jproyect22" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/Jeanpierr_C" target="_blank"><i class="fab fa-twitter"></i></a>
                </ul>
            </div>
        </div>
        <img src="{{URL::asset('./resources/img/firstTry.png')}}"  alt="" srcset="">
        </div>
        {{-- FIN IMAGEN PRINCIPAL --}}
        <section id="servicios"></section>
        <section id="my-services" class="ts-block ts-xs-text-center pb-0">
            <div class="container">
                <div class="ts-title text-center mb-5" id="servicios" name="servicios">
                    <h2><span class="text-color-gN">Mis</span> Servicios</h2>
                </div>
                <!--fin ts-title-->
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="ts-item" >
                            <div class="ts-item-content">
                                <div class="ts-item-header">
                                    <div class="figure icon">
                                        <img src="{{URL::asset('./resources/img/icon-brushes.png')}}" alt="">
                                    </div>
                                    <!--fin icon-->
                                </div>
                                <!--fin ts-item-header-->
                                <div class="ts-item-body">
                                    <h4>Diseño <span class="text-color-gN">Web</span></h4>
                                    <p class="mb-0">
                                        Cuento con una experiencia media en cuanto al desarrollo de web la cual
                                        me ha
                                        bastado para superar desafios que se me han planteado.
                                    </p>
                                </div>
                                <!--fin ts-item-body-->
                                <div class="ts-item-footer">
                                    <a href="#"   class="ts-link-arrow-effect">
                                        <span></span>
                                    </a>
                                </div>
                                <!--fin ts-item-footer-->
                            </div>
                            <!--fin ts-item-content-->
                        </div>
                        <!--fin ts-item-->
                    </div>
                    <!--fin col-xl-4-->
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="ts-item" >
                            <div class="ts-item-content">
                                <div class="ts-item-header">
                                    <figure class="icon">
                                        <img src="{{URL::asset('./resources/img/edicion-de-fotos.png')}}" width="56"
                                            height="49" alt="">
                                    </figure>
                                    <!--fin icon-->
                                </div>
                                <!--fin ts-item-header-->
                                <div class="ts-item-body">
                                    <h4>Edición De <span class="text-color-gN">Imagenes</span></h4>
                                    <p class="mb-0">
                                        Tengo experiencia en el campo de la edicion, retoque y diseño de
                                        imagenes en
                                        Photoshop y illustrator.
                                    </p>
                                </div>
                                <!--fin ts-item-body-->
                                <div class="ts-item-footer">
                                    <a href="#"   class="ts-link-arrow-effect">
                                        <span></span>
                                    </a>
                                </div>
                                <!--fin ts-item-footer-->
                            </div>
                            <!--fin ts-item-content-->
                        </div>
                        <!--fin ts-item-->
                    </div>
                    <!--fin col-xl-4-->
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="ts-item" >
                            <div class="ts-item-content">
                                <div class="ts-item-header">
                                    <figure class="icon">
                                        <img src="{{URL::asset('./resources/img/coding.png')}}" width="56" height="49"
                                            alt="">
                                    </figure>
                                    <!--fin icon-->
                                </div>
                                <!--fin ts-item-header-->
                                <div class="ts-item-body">
                                    <h4>Desarrollo <span class="text-color-gN">Web</span></h4>
                                    {{--Edición de fotos iconos creados por Freepik - Flaticon --}}
                                    <p class="mb-0">
                                        Cuento con experiencia y conocimientos para el desarrollo de
                                        aplicaciones web,
                                        donde me las arreglo para solucionar los problemas competentes.
                                    </p>
                                </div>
                                <!--fin ts-item-body-->
                                <div class="ts-item-footer">
                                    <a href="#"   class="ts-link-arrow-effect">
                                        <span></span>
                                    </a>
                                </div>
                                <!--fin ts-item-footer-->
                            </div>
                            <!--fin ts-item-content-->
                        </div>
                        <!--fin ts-item-->
                    </div>
                    <!--fin col-xl-4-->

                </div>
                <!--END mi Servicios -->

                <!--inicio mi Sobremi -->
                <div class="ts-title text-center" id="sobremi" name="sobremi">
                    <h2>Sobre <span class="text-color-gN">Mí</span></h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-xl-4 mb-5">
                        <img src="{{URL::asset('./resources/img/jp_sinbgb.png')}}" width="400" height="400" alt="">
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-color-gN">¡Hola!</h4>
                        <p>
                            Soy muy proactivo, carismatico e implicado en los proyectos en los cuales soy
                            asignado,
                            tengo experiencia en trabajo en equipos y me concidero bastante positivo.
                        </p>
                        <dl class="ts-column-count-2">
                            <dt>Nombre:</dt>
                            <dd>Jeanpierr A. Caraballo D.</dd>
                            <dt>Telefono:</dt>
                            <dd>+34 676 29 81 64</dd>
                            <dt>Correo:</dt>
                            <dd>Jeanpierrc22@gmail.com</dd>
                        </dl>
                        <hr class="text-color-gN mb-5">
                        <a href="#contactame" class=" mr-2">
                            <span class="btn btn-greenjp ts-btn-arrow">Contactame</span>
                        </a>
                        <a href="{{URL::asset('./resources/cv/Jeanpierr_Caraballo_CV.pdf')}}" class=" mr-2">
                            <span class="btn btn-greenjp ">
                                <i class="fa fa-download small mr-2"></i>
                                Descargar CV
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </section>
        <section id="misHabilidades" class="ts-block pb-5">
            <div class="container">
                <div class="ts-title text-center">
                    <h2><span class="text-color-gN"> Mis</span> Habilidades</h2>
                </div>
                <!--end ts-title-->
                <h4>Dispuesto a Superarme</h4>
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <p>
                            Puedo superarme cada dia mas, pienso creo y luego acuto, cuento con conocimientos
                            esenciales en
                            las ramas de desarrollo, Tengo conocimiento y experiencia trabajando en equipo con los
                            lenguajes
                            de <span class="text-color-gN">JAVASCRIPT</span>, <span class="text-color-gN">PHP</span>,
                            realizando sentencias en <span class="text-color-gN">MYSQL</span> programando
                            aplicaciones en
                            <span class="text-color-gN">JAVA</span> y estilizando <span
                                class="text-color-gN">CSS</span>; Se
                            trabajar con <span class="text-color-pn">FRAMEWORKS</span> y me especializo De FRONTEND
                            <span class="text-color-pn">BOOTSRAP</span> y de BACKEND <span
                                class="text-color-pn">LARAVEL</span>; Cuento con buenas capacidades de control de la
                            apalicación <span class="text-color-gN">FIGMA</span>, Cuento con Buenos conocimientos de
                            <span class="text-color-gN">PHOTOSHOP</span> e <span
                                class="text-color-gN">illustrator</span> y en cuanto a cms conozco y he trabajado con  .
                        </p>
                        <a  href="#contactame" class="btn btn-greenjp text-color-bH mb-5">Contacta me</a>
                    </div>
                    <!--end col-md-6-->
                    <div class="col-md-6">
                        <h3 class="progress-title">HTML</h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:75%; background:rgb(252, 102, 211);">
                                <div class="progress-value">75%</div>
                            </div>
                        </div>
                        <h3 class="progress-title">CSS</h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:70%; background:rgb(0, 206, 134);">
                                <div class="progress-value">70%</div>
                            </div>
                        </div>
                        <h3 class="progress-title">JAVASCRIPT</h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:60%; background:rgb(252, 102, 211);">
                                <div class="progress-value">60%</div>
                            </div>
                        </div>
                        <h3 class="progress-title">BOOTSTRAP</h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:65%; background:rgb(0, 206, 134);">
                                <div class="progress-value">65%</div>
                            </div>
                        </div>
                        <h3 class="progress-title">LARAVEL</h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:60%; background:rgb(252, 102, 211);">
                                <div class="progress-value">60%</div>
                            </div>
                        </div>
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
                <div class="ts-title text-center mt-5" id="portfolio">
                    <h2><span class="text-color-gN "> Mí</span> Portfolio</h2>

                    <div class="row mt-5"> 
                        <div class="col-md-5 me-auto mt-5  ">
                            <a href="https://codepen.io/jp22222/pen/mdBabLK"  target="__black"> <img src="{{URL::asset('./resources/img/animacion_img.png')}}"
                                style="background-color:rgba(252, 102, 212, 0.055)" width="210" height="200" alt=""></a>
                        </div>
                        <div class="col-md-5 ms-auto mt-5  ">
                            <a href="{{route('canvas.index')}}" target="__black"><img src="{{URL::asset('./resources/img/canva.png')}}"
                                style="background-color:rgba(252, 102, 212, 0.055)" width="230" height="200" alt=""></a>
                        </div>
                        <div class="col-md-5 me-auto mt-5 ">
                           <a href="https://github.com/JeanC22/tiempoApp" target="_blank"><img src="{{URL::asset('./resources/img/React.svg.png')}}"
                                style="background-color:rgba(252, 102, 212, 0.055)" width="210" height="200" alt=""></a>
                        </div>
                        <div class="col-md-5 ms-auto mt-5 ">                           
                        </div>
                    </div>
                </div>

            </div>
            <!--end container-->

            <footer id="contactame" class="mt-5">
                <section class="ts-block">
                    <div class="container">
                        <div class="text-center mt-5 mb-5">
                            <h2 class="ts-bubble-border">Ponte en <span class="text-color-gN">contacto</span></h2>
                        </div>
                        <div class="row ">
                            <div class="col-sm-8 col-md-4 mb-4" >
                                <img src="{{URL::asset('./resources/img/icon-pin.png')}}" class="mb-4" alt="">
                                <h5>Dirección</h5>
                                <div class="opacity-50 ">
                                    <figure class="mb-0">Bilbao, España</figure>
                                    <figure>Calle Maria Diaz de Haro, 48010</figure>
                                </div>
                                <!--end opacity-50 -->
                            </div>
                            <!--end col-md-3-->
                            <div class=" col-sm-6 col-md-4 mb-4">
                                <img src="{{URL::asset('./resources/img/icon-phone.png')}}" class="mb-4" alt="">
                                <h5>Telefono</h5>
                                <div class="opacity-50 ">
                                    <figure class="mb-0">+34 676 29 81 64</figure>
                                </div>
                                <!--end opacity-50 -->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-sm-6 col-md-4 mb-4">
                                <img src="{{URL::asset('./resources/img/icon-envelope.png')}}" class="mb-4" alt="">
                                <h5>Correo</h5>
                                <div class="opacity-50 ">
                                    <figure class="mb-0">Jeanpierrc22@gmail.com</figure>
                                </div>
                                <!--end opacity-50 -->
                            </div>
                            <!--end col-md-3-->
                        </div>
                        <!--end row-->

                        <div class="pt-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Conectate</h3>
                                    <div class="ts-column-count-sm-2">
                                        <!--end link-->
                                        <a href="https://twitter.com/Jeanpierr_C" target="__black"
                                            class="mb-3 d-flex text-white ">
                                            <span class="me-4">
                                                <i class="fab fa-twitter"></i>
                                            </span>
                                            <span>Twitter</span>
                                        </a>
                                        <!--end link-->
                                        <a href="#https://www.instagram.com/jproyect22" class="mb-3 d-flex text-white ts-align__vertical">
                                            <span class=" me-4 ">
                                                <i class="fab fa-instagram"></i>
                                            </span>
                                            <span>Instagram</span>
                                        </a>
                                        <!--end link-->
                                    </div>
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-8">
                                    <h3>Enviame un mensaje</h3>
                                    <form id="form-contact" action="{{route('contactanos.store')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="form-contact-name">Nombre *</label>
                                                    <input type="text" class="forms-control" id="form-contact-name"
                                                        name="name" placeholder="Nombre" required>
                                                </div>
                                                <!--end form-group -->
                                            </div>
                                            <!--end col-md-6 col-sm-6 -->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="form-contact-email">Correo *</label>
                                                    <input type="email" class="forms-control" id="form-contact-email"
                                                        name="email" placeholder="Correo" required>
                                                </div>
                                                <!--end form-group -->
                                            </div>
                                            <!--end col-md-6 col-sm-6 -->
                                        </div>
                                        <!--end row -->
                                        <div class="form-group">
                                            <label for="form-contact-subject">Asunto *</label>
                                            <input type="text" class="forms-control" id="form-contact-subject"
                                                name="subject" placeholder="Asunto" required>
                                        </div>
                                        <!--end form-group -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form-contact-message">Mensaje *</label>
                                                    <textarea class="forms-control" id="form-contact-message" rows="5"
                                                        name="message" placeholder="Mensaje" required></textarea>
                                                </div>
                                                <!--end form-group -->
                                            </div>
                                            <!--end col-md-12 -->
                                        </div>
                                        <!--end row -->
                                        <div class="form-group clearfix mt-4">
                                            <button class="btn float-right btn-greenjp text-color-bH"
                                                id="form-contact-submit">Enviar corre</button>
                                        </div>
                                        <!--end form-group -->
                                        <div class="form-contact-status"></div>
                                    </form>
                                    <!--end form-contact -->
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end container-->
                </section>
                <!--end CONTACTAME-->
            </footer>
    </div>
    <!--end page-->
    {{-- down total --}}   
    @include('components.footer')
    </div>
</body>
<script>window.onbeforeunload = function () {
    window.scrollTo(0,0);
};</script>
<script type="text/javascript">
    let progress = document.getElementById('progressbar');
    let totalHeight = document.body.scrollHeight - window.innerHeight;
    window.onscroll = function () {
        let progressHeight = (window.pageYOffset / totalHeight) * 100;
        progress.style.height = progressHeight + "%";
    }

</script>
<script>
    window.onload = function () {
        let tl = gsap.timeline();
        tl.to('#animationLPart1', {
            duration: .5,
            x: 219,
            sacle: 0,
            backgroundColor: '#FF8EF6',
            ease: 'linear',
            display: 'none'
        });

        tl.to('#animationLPart2', {
            duration: .5,
            y: 175,
            sacle: 0,
            backgroundColor: '#FF8EF6',
            ease: 'linear',
            display: 'none'
        });
        tl.to('#animationLPart3', {
            duration: .5,
            x: -219,
            sacle: 0,
            backgroundColor: '#FF8EF6',
            ease: 'linear',
            display: 'none'
        });
        tl.to('#animationLPart4', {
            duration: .5,
            y: -189,
            sacle: 0,
            backgroundColor: '#FF8EF6',
            ease: 'linear',
            display: 'none'
        });

    };

</script>
<script>
    setTimeout(dspnone, 2000);
    var loader = document.getElementById("onload");

    function dspnone() {
        loader.style.display = "none";
    }

</script>
<script type='text/javascript' src="{{URL::asset('../node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"
    integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ URL::asset('./resources/js/scrollbar.js') }}"></script>
<script src="{{ URL::asset('./resources/js/contenido.js') }}"></script>
<script src="{{ URL::asset('./resources/js/aboutme.js') }}"></script>


</html>
