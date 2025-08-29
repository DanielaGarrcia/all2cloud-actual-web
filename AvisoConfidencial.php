<!DOCTYPE html>
<html lang="en">
<?php
include('Components/HeadCode.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Servicio en la Nube - all2cloud. Ofrecemos soluciones de almacenamiento, infraestructura, licenciamiento Office 365, procesamiento en la nube y implementacion y consultoria SAP Business One para potenciar tu negocio.">
    <meta name="keywords" content="servicio en la nube, almacenamiento en línea, soluciones empresariales, plataforma en la nube">
    <meta name="author" content="all2cloud">

    <!-- Etiqueta Open Graph para redes sociales (opcional) -->
    <meta property="og:title" content="Servicio en la Nube - all2cloud">
    <meta property="og:description" content="Ofrecemos soluciones de almacenamiento, infraestructura, licenciamiento Office 365, procesamiento, implementacion y consultoria SAP Business One en la nube para potenciar tu negocio. Descubre cómo mejorar la eficiencia y seguridad.">
    <meta property="og:image" content="url_de_tu_imagen.jpg">
    <meta property="og:url" content="url_de_tu_pagina">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Etiqueta Twitter Card (opcional) ->
    <meta name="twitter:title" content="Servicio en la Nube - all2cloud">
    <meta name="twitter:description" content="Ofrecemos soluciones de almacenamiento, infraestructura, licenciamiento Office 365, procesamiento, implementacion y consultoria SAP Business One en la nube para potenciar tu negocio. Descubre cómo mejorar la eficiencia y seguridad.">
    <meta name="twitter:image" content="url_de_tu_imagen.jpg"> -->

    <!-- Etiqueta canonical para evitar contenido duplicado (si es necesario) -->
    <link rel="canonical" href="url_canonica_de_tu_pagina">

    <!-- Favicon (opcional) -->
    <link rel="icon" href="img/icono.ico" type="image/x-icon">
    
    <title>Servicio en la Nube - all2cloud</title>
</head>

<body class="overflow-hidden">

    <!-- HEADER MOSTRADO -->
    <div class="w-full fixed z-10">

        <!-- BARRA DE OPCIONES -->
        <div class="w-full <?= $margenesSinY ?> py-5 z-50 bg-gray-50 ">
            <div class="w-full  flex items-center justify-around ">
                <div class="w-auto">
                    <img src="img/logo.png" alt="" class="w-28">
                </div>
                <ul class="w-full flex principal500  items-center justify-end text-black   gap-5 <?= $cuerpo ?> md:flex hidden" id="">
                    <li class="<?= $animacionDeInflado2 ?>"><a href="index.php">Inicio</a> </li>
                    <li class="<?= $animacionDeInflado2 ?>"><a href="#">Nosotros</a> </li>
                    <a href="  mailto:raul.munoz@all2cloud.com?subject=Me interesa ponerme en contacto con ustedes para...">contacto@all2cloud.mx
                        <!--<button class=" <?= $cuerpo ?> principal500  px-10 py-2 border-2 border-colorMorado rounded text-colorMorado hover:bg-colorVerde hover:border-colorVerde hover:text-white hover:text-colorVerde transition duration-300 hover:scale-110" id="">
                            Contacto
                        </button>-->
                    </a>
                </ul>
                <div class="w-full flex justify-end md:hidden block">
                    <i class="fas fa-bars" id="abrirMenu"></i>
                </div>

            </div>
        </div>
        <!-- FIN BARRA DE OPCIONES -->

        <!-- MENU MD -->
        <nav id="menu" class="fixed bg-none top-0 left-0 z-50 sm:w-2/4 xs:w-3/4 xms:w-3/4 h-screen transition duration-500 ease-in-out transform -translate-x-full bg-black shadow-lg">
            <div class="justify-center px-8 ">
                <div class="w-full flex">
                    <div class="w-full">
                        <img src="img/logo.png" alt="" class="w-32  rounded-md mt-4 ">

                    </div>
                    <div class="w-full flex justify-end pt-4">
                        <i class="fas fa-close text-white" id="cerrarMenu"></i>
                    </div>
                </div>
                <hr class="mt-4">
                <ul class="mt-8 principal700  text-white <?= $opcionesMenuCelulares ?> space-y-2">
                    <li class=" transition hover:text-colorPrincipal hover:transform hover:scale-110 duration-400 secciones "><a href="#inicioSeccion">Inicio</a></li>
                    <li class=" transition hover:text-colorPrincipal hover:transform hover:scale-110 duration-400 secciones "><a href="#nosotrosSeccion">Nosotros</a></li>
                    <li class=" transition hover:text-colorPrincipal hover:transform hover:scale-110 duration-400 secciones "><a href="#nosotrosSeccion">Testimonios</a></li>

                    <div class="block w-auto gap-8 lg:gap-2 pt-10">
                        <button class="border-white  border-2 text-white py-2 px-4    principal700   <?= $subSubtitulo ?>" data-aos="flip-down" onclick="window.location.href='mailto:contacto@all2cloud.mx'">
                            Contacto
                        </button>
                    </div>
                    <div class="block w-auto gap-8 lg:gap-2 ">
                        <button class="bg-green-500 border-2 border-green-500 text-white py-2 px-4    principal700   <?= $subSubtitulo ?>" data-aos="flip-down" onclick="window.location.href='tel:+523326501003'">
                            <i class="fas fa-phone <?= $subSubtitulo ?> pr-2"></i>Whatsapp!
                        </button>
                    </div>
                </ul>
            </div>


            <div class="flex items-center px-4 gap-4 mt-8 <?= $cuerpo ?>">
                <div class="px-4">
                    <!-- Sección de información de contacto -->
                    <div class="block items-center   secundaria400 text-white">
                        <div>
                            <i class="fas fa-phone "></i>
                            <span class="ml-2">+52 33 2650 1003</span>
                        </div>
                        <div class="break-words">
                            <i class="fas fa-envelope "></i>
                            <span class="ml-2 break-words">contacto@all2cloud.mx</span>
                        </div>

                    </div>
                    <!-- Sección de iconos de redes sociales -->
                    <div class="flex space-x-4 text-white pt-5 <?= $subSubtitulo ?>">

                        <a href="#/" class="">
                            <i class="fab fa-linkedin text-blue-800"></i>
                        </a>
                        <a href="#" class="">
                            <i class="fab fa-instagram text-colorRojo"></i>
                        </a>
                    </div>
                </div>

            </div>

        </nav>



    </div>
    <!-- FIN HEADER  MOSTRADO-->

    <!-- HEADER OCULTO -->
    <div class="w-full opacity-0">

        <!-- BARRA DE OPCIONES -->
        <div class="w-full <?= $margenesSinY ?> py-5 z-50 bg-gray-50 ">
            <div class="w-full  flex items-center justify-around ">
                <div class="w-auto">
                    <img src="img/logo.png" alt="" class="w-28">
                </div>
                <ul class="w-full flex principal500  items-center justify-end text-black   gap-5 <?= $cuerpo ?>" id="">
                    <li class="<?= $animacionDeInflado2 ?>"><a href="#">Inicio</a> </li>
                    <li class="<?= $animacionDeInflado2 ?>"><a href="#">Nosotros</a> </li>

                    <button class=" <?= $cuerpo ?> principal500  px-10 py-2 border-2 border-colorMorado rounded text-colorMorado hover:bg-colorVerde hover:border-colorVerde hover:text-white hover:text-colorVerde transition duration-300 hover:scale-110" id="">
                        Contacto
                    </button>

                </ul>

            </div>
        </div>
        <!-- FIN BARRA DE OPCIONES -->



    </div>
    <!-- FIN HEADER  OCULTO-->

    <!-- HERO -->
    <div class="w-full flex gap-8 bg-[url('img/backgroundHero.svg')] bg-fixed bg-contain bg-no-repeat z-50 ">

        <div class="w-full <?= $margenesIzquierda ?> flex items-center py-10 xl:py-5">
            <div class="md:w-2/5 lg:w-3/5 w-full  3xl:-mt-40" data-aos="fade-left">
                <!--<p class="principal600 <?= $cuerpo ?> text-black">Licenciamiento, Soluciones y Servicios en la nube</p>
                <p class="principal400 text-black"><b>Aviso de </b></P>-->
                   <p class="principal4002 <?= $tituloGrande ?> text-black"> Aviso de <span class="text-colorVerde principal600">privacidad</span></p>


                <!-- BOTONES CAT -->
                <!-- 1 -->


            </div>

        </div>


    </div>
    <!-- FIN HERO -->

    <div class="w-full py-2  justify-start items-center <?= $margenesSinY ?>">
    <div class="container">
          <div class="row row-40 justify-content-center">
            <div class="col-md-12">
              <div class="offset-top-45 offset-lg-right-45">
                
                <p class="text-gray-dark wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">All2cloud, con domicilio en periférico sur 192, La Duraznera, 45580 San Pedro Tlaquepaque, Jal., en la entidad de Jalisco, país México, y portal de internet www.all2cloud.mx, es el responsable del uso y protección de sus datos personales, y al respecto le informamos lo siguiente:</p>

                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><b>¿Para qué fines utilizaremos sus datos personales?</b></p>

                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Los datos personales que recabamos de usted, los utilizaremos para las siguientes finalidades que son necesarias para el servicio que solicita:</p>

                <p>
                  · Reclutamiento y Selección de Personal<br>
                  · Prospección Comercial<br>
                  · Contratación de servicios<br>
                  · Compra / venta de productos<br>
                  · Cobranza y otorgamiento de crédito<br>
                  · Publicitarios<br>

                </p>

                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><b>¿Qué datos personales utilizaremos para estos fines?</b></p>

                  <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, utilizaremos los siguientes datos personales:</p>

                  <p>
                    · Datos de identificación<br>
                    · Datos de contacto<br>
                    · Datos laborales<br>
                    · Datos académicos<br>
                    · Datos migratorios<br>
                    · Datos patrimoniales y/o financieros<br>
                  </p>

                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><b>¿Con quién compartimos su información personal y para qué fines?</b></p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Le informamos que sus datos personales son compartidos dentro del país con las siguientes personas, empresas, organizaciones o autoridades distintas a nosotros, para los siguientes fines:</p><br>
                  
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Destinatario de los datos personales</th>
                      <th scope="col">Finalidad</th>
                      <th scope="col">Requiere del consentimiento</th>                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Proveedores</th>
                      <td>Cuando la naturaleza de los servicios del proveedor requiera los Sí datos del titular, siempre que sea empleado de all2cloud</td>
                      <td>Sí</td>                      
                    </tr>                    
                    <tr>
                      <th scope="row">Autoridades o Instituciones de Gobierno</th>
                      <td>Cumplir con los requisitos que marque la ley para configurar correctamente una relación laboral entre el titular de los datos personales y all2cloud</td>
                      <td>No</td>                      
                    </tr>
                    <tr>
                      <th scope="row">Asociados</th>
                      <td>Generar un marco mucho mayor de oportunidad de empleo para el titular cuando no aplique su perfil a las vacantes de empleo de all2cloud</td>
                      <td>Sí</td>                      
                    </tr>
                    <tr>
                      <th scope="row">Instituciones Bancarias</th>
                      <td>Realizar operaciones bancarias a favor del titular de los datos en caso de que exista relación laboral entre éste y all2cloud</td>
                      <td>No</td>                      
                    </tr>                    
                  </tbody>
                </table>
                <br>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><b>Con relación a las transferencias que requieren consentimiento:</b></p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Las transferencias que requieren su consentimiento son aceptadas por usted tácitamente estando consiente con el presente Aviso de Privacidad, sobre el uso de su información personal y quedando debidamente informado de los datos que se recabaron y con qué fines, aceptando los términos contenidos que fueron elaborados en cumplimiento a la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, en caso de manifestación en contrario usted puede ejercer sus derechos ARCO (acceso, rectificación, cancelación u oposición) sobre sus datos personales de la siguiente forma:</p>


                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><b>¿Cómo puede acceder, rectificar o cancelar sus datos personales, u oponerse a su uso?</b></p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Usted tiene derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no está siendo utilizada adecuadamente (Cancelación); así como oponerse al uso de sus datos personales para fines específicos (Oposición). Estos derechos se conocen como derechos ARCO.</p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Para el ejercicio de cualquiera de los derechos ARCO, usted deberá presentar la solicitud respectiva a través del siguiente medio:</p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"> · Correo electrónico</p><br>

                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Para conocer el procedimiento y requisitos para el ejercicio de los derechos ARCO, ponemos a su disposición el siguiente medio:</p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"> · Correo electrónico, correo postal, telefónico</p><br>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Los datos de contacto de la persona o departamento de datos personales, que está a cargo de dar trámite a las solicitudes de derechos ARCO, son los siguientes:</p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                  a) Nombre de la persona o departamento de datos personales: atención al cliente.<br>
                  b) periférico sur 192, La Duraznera, San Pedro Tlaquepaque, Jal.<br>
                  c) Correo electrónico: <a href="mailto:raul.munoz@all2cloud.mx">contacto@all2cloud.mx</a><br>
                  d) Número telefónico: <a href="tel:3326501003">+52 33 1145 5594.</a><br>
                </p>

                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                  Usted puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de sus datos personales. Sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por alguna obligación legal requiramos seguir tratando sus datos personales. Asimismo, usted deberá considerar que, para ciertos fines, la revocación de su consentimiento implicará que no le podamos seguir prestando el servicio que nos solicitó, o la conclusión de su relación con nosotros.
                </p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Para revocar su consentimiento deberá presentar su solicitud a través del siguiente medio:</p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"> · Correo electrónico</p><br>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Para conocer el procedimiento y requisitos para la revocación del consentimiento, ponemos a su disposición el siguiente medio:</p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"> · Correo electrónico, correo postal, telefónico</p><br>

                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><b>¿Cómo puede limitar el uso o divulgación de su información personal?</b></p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Con objeto de que usted pueda limitar el uso y divulgación de su información personal, le ofrecemos los siguientes medios:</p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">  · Correo electrónico</p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Le informamos que los sitios web de all2cloud, obtienen datos en forma automática a través cookies. Las “cookies” identificadores únicos que all2cloud transfiere a sus dispositivos, con la finalidad de permitir a nuestros sistemas reconocer su dispositivo a fin de consultar su actividad en nuestro sitio, preferencias de navegación, información que pueda ayudarnos a determinar problemas en nuestra página web o nos indique y arroje estadísticas de cuáles son las áreas de nuestra página que le resultan de mayor interés, recomendaciones para usted, anuncios personalizados, seguir sus visitas y tener conocimiento de los productos que agregue a la cesta/carrito de compra para visualizar sus preferencias y dirigir a usted información personalizada. Usted puede evitar el uso de cookies en su computadora a través de la configuración correspondiente en su navegador, pero por favor tome en cuenta que esto puede obstaculizar la funcionalidad de los sitios web de all2cloud.</p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">all2cloud, podrá contar con un perfil, ya sea de la empresa o de sus productos, en las principales redes sociales tales como Facebook, Twitter, You Tube y Linkedin (en adelante, las “Redes Sociales”). Las Redes Sociales, servirán única y exclusivamente como un canal de comunicación inmediato con los seguidores de la empresa o sus productos, así como un medio electrónico de información y marketing de nuevos productos ofertas y promociones que sean realizadas por all2cloud exclusivamente en su perfil y que será accesible a través del mismo a sus seguidores. all2cloud, únicamente podrá conocer los datos personales que así lo permitan las Redes Sociales y en ningún caso extraerá los datos personales que pueda conocer de sus seguidores sin su consentimiento previo. Hacemos de su conocimiento que las Redes Sociales, serán los titulares de las bases de datos que a éstos les corresponda, por lo que le invitamos a leer las políticas de privacidad y condiciones de uso de las mismas.</p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><b>¿Cómo puede conocer los cambios en este aviso de privacidad?</b></p>

                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales; de nuestras propias necesidades por los productos o servicios que ofrecemos; de nuestras prácticas de privacidad; de cambios en nuestro modelo de negocio, o por otras causas.</p>

                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Nos comprometemos a mantenerlo informado sobre los cambios que pueda sufrir el presente aviso de privacidad, a través de: mostrar la última fecha de actualización en el aviso de privacidad publicado en los distintos medios (entre estos) página WEB.</p>

                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">El procedimiento a través del cual se llevarán a cabo las notificaciones sobre cambios o actualizaciones al presente aviso de privacidad es el siguiente:</p>

                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">all2cloud exhibirá en todos los medios masivos de la empresa su aviso de privacidad que mostrará la última fecha de actualización, el titular de los datos personales podrá verificarla y así conocer los cambios que se hubieran realizado.</p>
                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">El presente Aviso de Privacidad, así como el manejo en general de la Ley que haga all2cloud, se rige por la legislación vigente y aplicable en los Estados Unidos Mexicanos, cualquier controversia que se suscite con motivo de su aplicación deberá ventilarse ante los Órganos Jurisdiccionales competentes en la Ciudad de Guadalajara, Jalisco.</p>

                <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Última actualización: 06-Nov-2023.</p>

              </div>
            </div>
           

          </div>
        </div>
</div>
</div>

    <!-- ABAJO FOTTER -->
    <div class="w-full py-2  justify-between text-center <?= $margenesSinY ?> bg-gray-50">
        <div class="w-full flex justify-center">
            <img src="img/noelim.png" alt="" class="w-6">
            <p class="principal300 <?= $cuerpo ?>">Sitio desarrollado por <span class="text-colorMorado principal600"><a href="https://noelim.com">Noelim</a></span> </p>


    <!-- FIN ABAJO FOTTER -->


    <a href="https://api.whatsapp.com/send?phone=5213326501003&text=Hola!%20Me%20interesa%20platicar%20con%20ustedes%20sobre%20un%20servicio%20por%20el%20que%20estoy%20interesado" class="fixed bottom-0 right-0 mb-10 mr-10 bg-green-500 hover:bg-green-600 text-white text-lg py-4 px-5 rounded-full shadow-2xl transition duration-300 ease-in-out z-[100]">

        <i class="text-4xl fab fa-whatsapp"></i>

    </a>


</body>

<script>
    AOS.init();





    const botonAbrir = document.getElementById("abrirMenu");
    const botonCerrar = document.getElementById("cerrarMenu");
    const menu = document.getElementById("menu");

    // Agregar un manejador de eventos al botón
    botonCerrar.addEventListener("click", () => {
        menu.classList.add("-translate-x-full");
    });
    botonAbrir.addEventListener("click", () => {
        // Si el menú está oculto, mostrarlo
        if (menu.classList.contains("-translate-x-full")) {
            menu.classList.remove("-translate-x-full");
        }
        // Si el menú está visible, ocultarlo
        else {
            menu.classList.add("-translate-x-full");

        }

    });


    var mySwiper = new Swiper('.swiper', {
        // Opciones personalizadas aquí
        slidesPerView: 1,
        spaceBetween: 10,
        autoHeight: true,
        loop: true,
        pagination: {
            el: '.swiper-pagination', // El elemento donde aparecerán los puntos de paginación
            clickable: true, // Opción para permitir hacer clic en los puntos para navegar a una diapositiva
        },
        // Habilita la reproducción automática
        autoplay: {
            delay: 3000, // El tiempo en milisegundos entre cada cambio de diapositiva (en este ejemplo, 3 segundos)
            disableOnInteraction: false, // Permite que la reproducción automática continúe incluso si el usuario interactúa con el carousel
        },

    });
    var mySwiper2 = new Swiper('.swiper2', {
        // Opciones personalizadas aquí
        slidesPerView: 3,
        spaceBetween: 10,
        autoHeight: true,
        loop: false,
        pagination: {
            el: '.swiper-pagination2', // El elemento donde aparecerán los puntos de paginación
            clickable: true, // Opción para permitir hacer clic en los puntos para navegar a una diapositiva
        },
        // Habilita la reproducción automática
        autoplay: {
            delay: 1500, // El tiempo en milisegundos entre cada cambio de diapositiva (en este ejemplo, 3 segundos)
            disableOnInteraction: false, // Permite que la reproducción automática continúe incluso si el usuario interactúa con el carousel
        },

        breakpoints: {
            // Cuando el ancho de la ventana es igual o mayor a 320 píxeles
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            // Cuando el ancho de la ventana es igual o mayor a 768 píxeles
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            // Cuando el ancho de la ventana es igual o mayor a 1024 píxeles
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            }
        }

    });
</script>

</html>