<!DOCTYPE html>
<html lang="es" ng-app="Futurite">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Metatags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Futurite">

    <!-- Structured data -->
    <?php include_once('src/partial/seo/structured-data.php'); ?>

    <!-- Googlebot -->
    <?php include_once('src/partial/seo/googlebot.php'); ?>

    <!-- Facebook Pixel Code -->
    <?php include_once('src/partial/seo/fb-pixel.php'); ?>

    <!-- Title -->
    <title> DR Barragan </title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- Preloader -->
    <link href="assets/css/preloader.css" rel="stylesheet" />
    <script src="assets/js/preloader.js"></script>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- CSS -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

    <!-- Analytics code -->
    <?php include_once('src/partial/seo/analytics.php'); ?>
</head>

<body>
<!-- Preloader -->
<div class="preloader"></div>

<!-- Modal -->
    <!--<div class="covid19">
        <div class="modal fade" id="popUp" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>         
                        <img width="100%" src="assets/img/DrBarragan.jpg" alt="Comunicado COVID19">
                    </div>
                </div>
            </div>
        </div>
    </div>-->

<!-- All page content goes inside this div -->
<div id="pageContent" class="main-wrapper">

    <!-- Page header section -->
    <?php include_once('src/partial/header.php'); ?>

    <!-- Page content section -->
    <!-- h_sec1 -->
    <div class="h_sec1" id="contactanos">
        <div class="container">
            <div class="col-sm-9 col-md-7 col-xs-12 textoNe">
                <p class="titulo1">
                    Tus ojos en manos<br>
                    de un oftalmólogo<br>
                    experto
                </p>
                <p class="subtitulo">
                    ¡Programa tu cita ahora!
                </p>
                <form>
                    <div class="col-sm-12 bttom">
                        <label>Nombre:</label> <input type="text" name="nombre">
                    </div>
                    <div class="col-sm-12 bttom">
                        <label>Teléfono:</label> <input type="text" name="telefono">
                    </div>
                    <div class="col-sm-12 bttom">
                        <label>Correo:</label> <input type="text" name="correo">
                    </div>
                    <div class="col-sm-12 bttom">
                        <label>Mensaje:</label> <input type="text" name="mensaje">
                    </div>
                    <div class="col-sm-12 bttom">
                        <button class="btonEnviar">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    <!-- h_sec2 -->
    <div class="h_sec2">
        <div class="container-fluid pd0">
            <div class="col-sm-8 pd0">
                <div class="parrafo_del_doctor">
                    <p class="titulo">
                        Oftalmólogo que ofrece un servicio profesional, con la mejor tecnología.
                    </p>
                    <p>
                        Enrique Barragán es un oftalmólogo certificado, experto en cirugías láser (Lasik), cirugía de catarata, y diagnóstico y tratamiento de queratocono.
                    </p>
                    <p>
                        Fue uno de los primeros doctores certificados en México en realizar la cirugía Lasik sin cuchilla, así como las cirugías Supracor para la presbicia.
                    </p>
                    <p>
                        Ha sido capacitado por oftalmólogos reconocidos mundialmente y también ha participado en investigaciones y proyectos internacionales.
                    </p>
                </div>
            </div>
            <div class="col-sm-4 pd0">
                <img src="assets/img/Dr-Barragan.jpg" class="img-responsive">
            </div>
            <!--<div class="col-sm-12 col-xs-12 pd0">
                <div class="col-sm-7 col-md-6 thumbnail">
                    <p class="titulo">
                        El oftalmólogo que ofrece un servicio profesional, con la mejor tecnología.
                    </p>
                    <p>
                        Enrique Barragán es un oftalmólogo certificado, experto en cirugías láser (Lasik), cirugía de catarata, y diagnóstico y tratamiento de queratocono.
                    </p>
                    <p>
                        Fue uno de los primeros doctores certificados en México en realizar la cirugía Lasik sin cuchilla, así como las cirugías Supracor para la presbicia.
                    </p>
                    <p>
                        Ha sido capacitado por oftalmólogos reconocidos mundialmente y también ha participado en investigaciones y proyectos internacionales.
                    </p>
                </div>
                <div class="col-sm-5 col-md-6 col-xs-12 thumbnail">
                    <img src="assets/img/Dr-Barragan.jpg" class="img-responsive">
                </div>
            </div>-->
        </div>
    </div>
    <!-- h_sec3 -->
    <div class="h_sec3">
        <div class="container">
            <p>
                Más de 10,000 cirugías lasik<br> de experiencia 
            </p>
        </div>
    </div>
    
    
    <!----------------------->
    <div class="testimoniales">
        <div class="container">
            <div class="col-sm-12">
                <p class="testimoniales_titulo">Testimoniales</p>
            </div>
            <div class="col-sm-12">
                <div class="slider-cliente">
                    <div class="thumbnail">
                        <div class="div_testimonios">
                            <p class="nombre_testimonio">Lizeth Gutiérrez</p>
                            <p><img src="assets/img/estrellas.png" class=""></p>
                            <p class="parrafo_testimonio">
                                “Excelente servicio, el doctor es muy profesional en su trabajo, me gustó mucho que nos explico detalle por detalle el antes y el después del procedimiento. Mi esposo se hizo la Lasik. Les recomiendo mucho al Dr. Barragán. Nosotros viajamos desde el Valle de Texas a consultar con él. Altamente recomendado.”
                            </p>
                        </div>
                    </div>
                    <div class="thumbnail">
                        <div class="div_testimonios">
                            <p class="nombre_testimonio">María Fernanda C.</p>
                            <img src="assets/img/estrellas.png" class="img-responsive">
                            <p class="parrafo_testimonio">
                                “Excelentísimo doctor , fuimos por una operación de láser y se tomó el tiempo necesario  para explicar los pro y contra de la decisión que tomaríamos , además de revisar otras cosas en el ojo y recomendarnos lo mejor . Un ser humano muy ético y profesional. Lo Recomiendo al 100%.”

                            </p>
                        </div>
                    </div>


                    <div class="thumbnail">
                        <div class="div_testimonios">
                            <p class="nombre_testimonio">Ricardo Tamez</p>
                            <img src="assets/img/estrellas.png" class="img-responsive">
                            <p class="parrafo_testimonio">
                                “Excelente atención del Dr. Barragán. Explica a detalle y te ofrece toda la información. Lo recomiendo.”
                            </p>
                        </div>
                    </div>


                    <div class="thumbnail">
                        <div class="div_testimonios">
                            <p class="nombre_testimonio">Pao Martínez</p>
                            <img src="assets/img/estrellas.png" class="img-responsive">
                            <p class="parrafo_testimonio">
                                “Excelente doctor, muy atento, y profesional. Atiende todas tus dudas, sin importar cuáles sean. Es muy claro en la explicación de los procedimientos y te da todos los pros y contras que pudieran surgir en lo que sea que necesites. A mí me encantó que me explicó a mi esposo y a mí desde lo más básico que creíamos saber, sin embargo, hubo cosas que nos dijo y nosotros desconocíamos. Yo me hice la cirugía LASIK y estoy totalmente satisfecha con el procedimiento, lo recomiendo ampliamente, sin duda se quedará como el oftalmólogo de cabecera de la familia!”
                            </p>
                        </div>
                    </div>


                    <div class="thumbnail">
                        <div class="div_testimonios">
                            <p class="nombre_testimonio">Gabriela de la Garza</p>
                            <img src="assets/img/estrellas.png" class="img-responsive">
                            <p class="parrafo_testimonio">
                                “Excelente médico, muy profesional, preparado, y atento. Nos atendió incluso en domingo por una emergencia. Estamos muy satisfechos con su labor, totalmente recomendable.”
                            </p>
                        </div>
                    </div>

                    <div class="thumbnail">
                        <div class="div_testimonios">
                            <p class="nombre_testimonio">Karen Sandoval</p>
                            <img src="assets/img/estrellas.png" class="img-responsive">
                            <p class="parrafo_testimonio">
                                “Súper recomendado, me operé con él y me fue excelente en la cirugía casi no hubo ninguna molesta y veo mejor que nunca. El doctor se preocupa por dar un buen trato, definitivamente lo recomiendo.”
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- h_sec4 -->
    <div class="h_sec4" id="lasik">
        <div class="container">
            <p class="titulo">
                Conoce los servicios y procedimientos que nuestro<br> oftalmólogo en Monterrey te ofrece
            </p>
            <div class="col-sm-4 espaciados_img" id="cataratas">
                <img src="assets/img/img1.jpg" class="img-responsive">
                <p class="sub_titulo">Cirugía Lasik</p>
                <p class="parrafo_uno">
                    Con esta cirugía láser, el oftalmólogo corrige la miopía, la hipermetropía y el astigmatismo, ayudando a prescindir de los lentes para realizar las actividades diarias.
                </p>
            </div>
            <div class="col-sm-4 espaciados_img">
                <img src="assets/img/img2.jpg" class="img-responsive">
                <p class="sub_titulo">Cataratas</p>
                <p class="parrafo_uno">
                    Mediante la cirugía de cataratas, nuestro oftalmólogo reemplaza el cristalino natural afectado por un cristalino artificial transparente, llamado lente intraocular.
                </p>
            </div>
            <div class="col-sm-4 espaciados_img" id="queratocono">
                <img src="assets/img/queratocono.gif" class="img-responsive">
                <p class="sub_titulo">Queratocono</p>
                <p class="parrafo_uno">
                    El crosslinking es uno de los tratamientos más eficaces para el queratocono, el cual, si no es atendido, provoca que la córnea se adelgace y sobresalga como un cono, haciendo que los rayos de luz se desenfoquen y la visión sea borrosa y distorsionada.
                </p>
            </div>

            <div class="col-sm-12 col-xs-12 btn-servicios">
                <a href="#contacto">Quiero más información</a>
            </div>
        </div>
    </div>
    <!-- h_sec5 -->
    <!--<div class="h_sec5" id="presbicia">
        <div class="col-sm-6 pd0">
            <div class="fondo1"></div>
        </div>
        <div class="col-sm-6 pd0">
            <div class="fondo2">
                <p class="texto_1">
                    Presbicia
                </p>
                <p class="texto_2">
                    La presbicia es la dificultad para enfocar objetos cercanos, nuestro oftalmólogo tiene más de 15 años de experiencia tratando este padecimiento.
                </p>
            </div>
        </div>
    </div>-->
    <!-- h_sec6 -->
    <div class="h_sec6">
        <div class="container">
            <div class="col-sm-12" id="optica">
                <div class="col-md-5 col-sm-6">
                    <p class="optima">Óptica</p>
                    <p>Contamos con óptica avanzada, con las mejores opciones para tu ojos.</p>
                    <ul>
                        <li>Lentes progresivos: Varilux Series</li>
                        <li>Lentes bifocales: Varilux </li>
                        <li>Lentes protección para tus ojos: Crizal Prevencia UV</li>
                        <li>Lentes para conducción: Drive Safe</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- h_sec7 -->
    <div class="h_sec7">
        <div class="container">
            <div class="col-sm-12">
                <p class="titulo">La calidad en la atención y honestidad son nuestro compromiso</p>
                <p class="subtitulo">
                    El servicio de nuestro oftalmólogo en Monterrey mantiene altos estándares de calidad en la selección de pacientes, evaluación de estudios y elección de las técnicas de cirugía, asegurando que sean adecuadas para cada paciente. 
                </p>
            </div>
        </div>
    </div>
    <!-- h_sec8 -->
    <div class="h_sec8">
        <div class="container">
            <p>
                ¡Decídete ya a mejorar tu visión y calidad de vida!
            </p>
        </div>
    </div>
    <!-- h_sec9 -->
    <div class="h_sec9">
        <div class="container">
            <div class="col-md-6 col-sm-6">
                <div class="consultorio">
                    Consultorio:<br>
                    <a href="tel:8113650303" onclick="gtag('event','Click Botón',{'event_category':'Seguimiento de llamadas','event_label':'Teléfono Cabecera 2'});" class="tel-cons">81-1365-0303</a><br>
                    <a href="tel:8181232474" onclick="gtag('event','Click Botón',{'event_category':'Seguimiento de llamadas','event_label':'Teléfono Cabecera 2'});" class="tel-cons">81-8123-2474</a>
                </div>
                <p class="titulo_direccionesUn">
                    Hidalgo 2040, PB Consultorio 9, Col. Obispado en Monterrey.
                </p>
            </div>
            <div class="col-md-6 col-sm-6" id="contacto">
                <p class="titulo">¡Programa tu cita ahora!</p>
                <form>
                    <div class="col-sm-12 bttom">
                        <label>Nombre:</label> <input type="text" name="nombre">
                    </div>
                    <div class="col-sm-12 bttom">
                        <label>Teléfono:</label> <input type="text" name="telefono">
                    </div>
                    <div class="col-sm-12 bttom">
                        <label>Correo:</label> <input type="text" name="correo">
                    </div>
                    <div class="col-sm-12 bttom">
                        <label>Mensaje:</label> <input type="text" name="mensaje">
                    </div>
                    <div class="col-sm-12 bttom">
                        <button class="btonEnviar">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  

    <!-- Page footer section -->
    <?php include_once('src/partial/footer.php'); ?>

</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/lib/bootstrap.min.js"></script>
<!-- Bootbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<!-- contacto -->
<script src="assets/js/contacto.js"></script>

<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</body>
</html>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#popUp').modal('show');
    });
</script>