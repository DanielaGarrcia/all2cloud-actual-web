<!DOCTYPE html>
<html lang="en">
<?php
include('Components/HeadCode.php');
?>



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
                    <li class="<?= $animacionDeInflado2 ?>"><a href="#">Inicio</a> </li>
                    <!--<li class="<?= $animacionDeInflado2 ?>"><a href="#">Nosotros</a> </li>-->
                    <a href="  mailto:contacto@all2cloud.mx?subject=Me interesan sus servicios.">
                        <button class=" <?= $cuerpo ?> principal500  px-10 py-2 border-2 border-colorMorado rounded text-colorMorado hover:bg-colorVerde hover:border-colorVerde hover:text-white hover:text-colorVerde transition duration-300 hover:scale-110" id="">
                            Contacto
                        </button>
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
                        <button class="bg-green-500 border-2 border-green-500 text-white py-2 px-4    principal700   <?= $subSubtitulo ?>" data-aos="flip-down" onclick="window.location.href='tel:+13169278642'">
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
                            <span class="ml-2">+1 33 1145 5594</span>
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
                <!--<p class="principal600 <?= $cuerpo ?> text-black">Lorem ipsum dolor sit amet</p>-->
                <p class="principal400 <?= $tituloGrande ?> text-black">Optimizamos tus operaciones<br><br>
                   <b>ADAPTAMOS LA TECNOLOGÍA EN NUBE  A TUS NECESIDADES</b><br><br>
                   <span class="text-colorVerde principal600">POTENCIA TU EMPRESA</span>
                </p>


                <!-- BOTONES CAT -->
                <!-- 1 -->
                <div class="w-auto flex justify-start pt-5">
                    <div class="w-auto py-2 px-4  text-white    bg-colorVerde rounded-xl hover:text-white hover:bg-colorAzul hover:scale-110 duration-300 hover:border-colorAzul border-2 text-center">
                        <a href="#serviciosHref" class="principal600 <?= $cuerpo ?>">Soluciones</a>
                    </div>
                </div>


            </div>
            <div class="w-3/5 md:flex hidden  justify-center items-center" data-aos="fade-right">

                <img src="img/LogoAA.png" alt="" class="w-5/5 ">
            </div>
        </div>


    </div>
    <!-- FIN HERO -->


    <!-- DESCUBRE COMO PODEMOS AYUDARTE -->
    <div class="w-full <?= $margenes ?>">


        <div class="w-full md:flex md:flex-row flex-col gap-8 items-center">
            <div class="w-full h-auto" data-aos="fade-up">
                <img src="Tecnologias.png" alt="" class="object-contain w-full ">
                
            </div>
            <div class="w-full" data-aos="fade-left" data-aos-duration="200">
               <!-- <p class="uppercase principal600 text-colorRojo <?= $cuerpo ?> underline underline-offset-4 pt-10 md:text-left text-center">Acerca de nosotros</p>-->

                <p class="principal700 <?= $titulo ?> text-black pt-5 md:text-left text-center ">Soluciones tecnológicas <span class="text-colorVerde principal700 "> <br><br>POTENCIA TU EMPRESA</span></p>

                <p class="secundaria400 pt-6 <?= $cuerpo ?> md:text-left text-center" data-aos="fade-left" data-aos-duration="500">
                Potenciamos tu empresa, usando soluciones tecnológicas basadas en Azure y Office 365, <b>ahorras tiempo, evitarás el doble trabajo, tendrás comunicación efectiva, almacenamiento seguro, ver en tiempo real reportes e informes, entre otros</b>.
                <!--<br><br>
                Con nuestra alianza con Zegnal podemos ofrecerte cualquier servicio de <b>SAP Business One, con él podrás controlar tu operación </B>y all2cloud te ayudará a acceder desde cualquier lugar y dispositivo.
                </p>-->


                <!-- CAT ->
                <div class="w-auto flex md:justify-start justify-center pt-5" data-aos="fade-right" data-aos-duration="600">
                    <div class="w-auto py-2 px-10  text-white    bg-colorRojo rounded-xl hover:text-white hover:bg-colorAzul  text-center hover:scale-110 duration-300">
                        <a href="mailto:" class="principal600 <?= $cuerpo ?>">Conoce más</a>
                    </div>
                </div>-->
            </div>
        </div>

    </div>
    <!--FIN  DESCUBRE COMO PODEMOS AYUDARTE -->

    <!-- COMO TRABAJAMOS -->
    <div class="w-full bg-gray-50">
        <div class="w-full <?= $margenes ?>">

            <p class="principal700 <?= $titulo ?> text-black pt-2 text-center" data-aos="fade-left" data-aos-duration="500">Por qué trabajar con <span class="text-colorVerde">all2cloud</span></p>
            <p class="secundaria400 <?= $cuerpo ?> text-center pt-2" data-aos="fade-right" data-aos-duration="600">Haremos tu transformación tecnológica real, porque no vendemos tecnología, vendemos soluciones tecnológicas, nos enfocamos en resolver los problemas que frenan el potencial de tu empresa, <b>¿ahora qué te detiene?, si ya encontraste quién te resuelva.</b>
            <br><br>
            <b>Al liberar el potencial de tu empresa, all2cloud libera el suyo, por lo cual no te fallaremos.</b>
            </p>


            <div class="w-full grid md:grid-cols-3 grid-cols-1 xs:grid-cols-2  py-5 ">

                <!-- 1 -->
                <div class="w-full gap-8 justify-center items-center pt-10 " data-aos="fade-up" data-aos-duration="600">
                    <div class="w-full flex justify-center">
                        <img src="img/Honestidad.png" alt="">

                    </div>
                    <p class="<?= $subSubtitulo ?> principal600 text-center pt-2">Honestidad</p>
                    <p class="secundaria400 <?= $cuerpo ?>   text-center"> Siempre te diremos las cosas como son.</p>

                </div>
                <!-- 2 -->
                <div class="w-full gap-8 justify-center items-center pt-10 " data-aos="fade-down" data-aos-duration="700">
                    <div class="w-full flex justify-center">
                        <img src="img/Resolucion.png" alt="">

                    </div>
                    <p class="<?= $subSubtitulo ?> principal600 text-center pt-2">Resolución</p>
                    <p class="secundaria400 <?= $cuerpo ?>   text-center">Siempre buscaremos la forma de solucionar.</p>

                </div>
                <!-- 3 -->
                <div class="w-full gap-8 justify-center items-center pt-10 xs:col-span-2 md:col-span-1 col-span-1 " data-aos="fade-up" data-aos-duration="800">
                    <div class="w-full flex justify-center">
                        <img src="img/Innovacion.png" alt="">

                    </div>
                    <p class="<?= $subSubtitulo ?> principal600 text-center pt-2">Innovación</p>
                    <p class="secundaria400 <?= $cuerpo ?>   text-center">No paramos de buscar soluciones tecnológicas.</p>

                </div>
                <!-- 4 -->
                <div class="w-full gap-8 justify-center items-center pt-10 xs:col-span-2 md:col-span-1 col-span-1 " data-aos="fade-up" data-aos-duration="800">
                    <div class="w-full flex justify-center">
                        <img src="img/empatia.png" alt="">

                    </div>
                    <p class="<?= $subSubtitulo ?> principal600 text-center pt-2">Empatia</p>
                    <p class="secundaria400 <?= $cuerpo ?>   text-center">Nos ponemos en tus zapatos para apoyarte asertivamente.</p>

                </div>
                <!-- 4 -->
                <div class="w-full gap-8 justify-center items-center pt-10 xs:col-span-2 md:col-span-1 col-span-1 " data-aos="fade-up" data-aos-duration="800">
                    <div class="w-full flex justify-center">
                        <img src="img/Equipo.png" alt="">

                    </div>
                    <p class="<?= $subSubtitulo ?> principal600 text-center pt-2">Trabajo en equipo</p>
                    <p class="secundaria400 <?= $cuerpo ?>   text-center">Buscamos alianzas para poder ofrecerte más y mejores servicios.</p>

                </div>
                <!-- 4 -->
                <div class="w-full gap-8 justify-center items-center pt-10 xs:col-span-2 md:col-span-1 col-span-1 " data-aos="fade-up" data-aos-duration="800">
                    <div class="w-full flex justify-center">
                        <img src="img/Flexible.png" alt="">

                    </div>
                    <p class="<?= $subSubtitulo ?> principal600 text-center pt-2">Flexibilidad</p>
                    <p class="secundaria400 <?= $cuerpo ?>   text-center">Nos adaptamos con facilidad a los cambios (tecnología, procesos, tendencias).</p>

                </div>


                </div>

        </div>
    </div>
    <!-- FIN COMO TRABAJAMOS -->



    <!-- NUESTROS SERVICIOS -->
    <div class="w-full <?= $margenes ?>" id="serviciosHref">
        <!--<p class="uppercase principal600 text-colorRojo <?= $cuerpo ?> underline underline-offset-4 text-center" data-aos="fade-left" data-aos-duration="300">Algunos de nuestros servicios</p>-->

        <p class="principal700 <?= $titulo ?> text-black pt-2 text-center pt-4" data-aos="fade-left" data-aos-duration="500">Encuentra el servicio que <span class="text-colorAzul">necesitas</span></p>

        <p class="secundaria400 <?= $cuerpo ?> text-center pt-2" data-aos="fade-left" data-aos-duration="700">Un problema por más pequeño que sea limita el potencial de tu empresa, <b>all2cloud</B> te apoyará a solucionarlo, solo contáctanos; una cotización no compromete.
        <br><b>No encuentras lo que buscas, pregunta, te podríasmos sorprender.</b></p>



        <!-- SERVICIOS -->
        <div class="w-full grid md:grid-cols-3 grid-cols-1 sm:grid-cols-3 md:gap-8 gap-2 pt-10">

            <!-- SERVICIO #1 -->
            <div class="w-full border-[1px] border-t-4 border-t-colorAzul rounded-2xl shadow-md hover:scale-110 duration-300" data-aos="fade-up" data-aos-duration="500" data-aos-easing="erase">

                <div class="w-full p-4">
                    <p class="<?= $subtitulo ?> principal600  pt-2">Nube Azure</p>
                    <p class="<?= $cuerpo ?> principal600  pt-1">Solo pagas por lo que usas</p>
                    <p class="<?= $cuerpo ?> secundaria400  pt-2">Flexibilidad</p>
                    <br>
                    <hr>

                    <ul class="space-y-4 py-5">
                        <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> Almacenamiento</li>
                        <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> Servidores</li>
                        <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> Ambientes para pruebas</li>
                        <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> infraestructura para SAP B1</li>
                        <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> Remote Desktop</li>
                        <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> .....</li>
                    </ul>


                    <!-- CAT -->
                    <div class="w-full flex justify-start pt-5">
                        <a href="mailto:contacto@all2cloud.mx?subject=Me interesan servicios de nube&body=Quiero solucionar el siguiente escenario:" class="w-full principal600 <?= $cuerpo ?>">
                            <div class="w-full py-2 px-10  text-white    bg-colorMorado rounded-xl hover:text-white hover:bg-colorVerde hover:border-colorPrincipal border-2 text-center hover:scale-110 duration-300">
                                Solicita una consulta gratuita y transforma tu negocio hoy
                            </div>
                        </a>
                    </div>


                </div>

            </div>
            <!-- SERVICIO #2 -->
            <div class="w-full border-[1px] border-t-4 border-t-colorRojo rounded-2xl shadow-md hover:scale-110 duration-300" data-aos="fade-down" data-aos-duration="700" data-aos-easing="erase">

                <div class="w-full p-4">
                    <p class="<?= $subtitulo ?> principal600  pt-2">Sap Business One</p>
                    <p class="<?= $cuerpo ?> principal600  pt-1">Control total de tu operación</p>
                    <p class="<?= $cuerpo ?> secundaria400  pt-2">El mejor ERP</p>
                    <br>
                    <hr>

                    <ul class="space-y-4 py-5">
                        <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> Implementacion / consultoria</li>
                        <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> Desarrollos / Capacitacion</li>
                        <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> soporte</li>
                        <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> Infraestructura SQL / HANA</li>
                        <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> Analiticas e informes con Power BI</li>
                        <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> .....</li>
                    </ul>


                    <!-- CAT -->
                    <div class="w-full flex justify-start pt-5">
                        <a href="mailto:contacto@all2cloud.mx?subject=Me interesan servicios de SAP&body=Quiero solucionar el siguiente escenario:" class="w-full principal600 <?= $cuerpo ?>">
                            <div class="w-full py-2 px-10  text-white    bg-colorMorado rounded-xl hover:text-white hover:bg-colorVerde hover:border-colorPrincipal border-2 text-center hover:scale-110 duration-300">
                                Solicita una consulta gratuita y transforma tu negocio hoy
                            </div>
                        </a>
                    </div>


                </div>

            </div>
            <!-- SERVICIO #3 -->
            <div class="w-full border-[1px] border-t-4 border-t-colorMorado rounded-2xl shadow-md hover:scale-110 duration-300" data-aos="fade-up" data-aos-duration="900" data-aos-easing="erase">


                        <div class="w-full p-4">
                                <p class="<?= $subtitulo ?> principal600  pt-2">Office 365</p>
                                <p class="<?= $cuerpo ?> principal600  pt-1">Es mas de lo que conoces</p>
                                <p class="<?= $cuerpo ?> secundaria400  pt-2">Licenciamiento x suscripción</p>
                                <br>
                                <hr>

                                <ul class="space-y-4 py-5">
                                    <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> Licenciamiento Office 365</li>
                                    <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> SharePoint</li>
                                    <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> Power Automate</li>
                                    <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> Power Apps</li>
                                    <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> Teams</li>
                                    <li class="principal500 <?= $cuerpo ?>"><i class="fas fa-check-circle text-colorVerde"></i> .....</li>
                                </ul>


                            <!-- CAT -->
                            <div class="w-full flex justify-start pt-5">
                                <a href="mailto:contacto@all2cloud.mx?subject=Me interesan servicios de Office 365&body=Quiero solucionar el siguiente escenario:" class="w-full principal600 <?= $cuerpo ?>">
                                    <div class="w-full py-2 px-10  text-white    bg-colorMorado rounded-xl hover:text-white hover:bg-colorVerde hover:border-colorPrincipal border-2 text-center hover:scale-110 duration-300">
                                        Solicita una consulta gratuita y transforma tu negocio hoy
                                    </div>
                                </a>
                            </div>


                        </div>

            </div>


        </div>
        <!-- FIN SERVICIOS -->

    </div>
    <!-- FIN NUESTROS SERVICIOS -->



    <!-- FAQ -->
    <div class="w-full <?= $margenes ?>">

        <p class="uppercase principal600 text-colorRojo <?= $cuerpo ?> underline underline-offset-4 pt-10 md:text-left text-center" data-aos="fade-right" data-aos-duration="500" data-aos-easing="erase">
        <a href="mailto:contacto@all2cloud.mx?subject=PREGUNTA&body=Tengo la siguiente duda:"> QUIERO HACER UNA PREGUNTA</a>
        </p>

        <p class="<?= $titulo ?> text-black principal600 pt-2 md:text-left text-center" data-aos="fade-left" data-aos-duration="600" data-aos-easing="erase">Preguntas frecuentes</p>

        <div class="w-full pt-5" data-aos="fade-right" data-aos-duration="800" data-aos-easing="erase">

            <div class="w-full grid md:grid-cols-2 grid-cols-1 gap-4">

                <!-- FAQ 1 -->
                <div class="w-full faq-container">
                    <div class="space-y-4 shadow-md ">
                        <details class="group [&_summary::-webkit-details-marker]:hidden ">
                            <summary class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg  p-4 text-gray-900">
                                <h2 class="<?= $cuerpo ?> principal500  text-black">¿Debo tener conocimientos de nube para contratar servicios?</h2>

                                <i class="fas fa-plus text-black transition duration-300 shrink-0 group-open:-rotate-45 rounded-full"></i>

                            </summary>

                            <div class="w-full h-[1px] bg-white px-10">

                            </div>

                            <p class=" leading-relaxed text-black  secundaria400 p-5 bg-white <?= $cuerpo ?>">No, all2cloud te apoya en todo momento, solo solicita una consulta gratuita y transforma tu negocio hoy; nosotros nos encargamos de gestionar, crear, modificar, elimina, etc. 
                            <span class="text-colorAzul"> 
                            <a href="mailto:contacto@all2cloud.mx?subject=Quiero servicios de nube&body=Quiero solucionar el siguiente escenario:">Quiero servicios de nube</a>
                            </span>
                            </p>
                        </details>

                    </div>
                </div>
                <!-- FAQ 2 -->
                <div class="w-full faq-container">
                    <div class="space-y-4 shadow-md ">
                        <details class="group [&_summary::-webkit-details-marker]:hidden ">
                            <summary class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg  p-4 text-gray-900">
                                <h2 class="<?= $cuerpo ?> principal500  text-black">¿Son caros los servicios de nube?</h2>

                                <i class="fas fa-plus text-black transition duration-300 shrink-0 group-open:-rotate-45 rounded-full"></i>

                            </summary>

                            <div class="w-full h-[1px] bg-white px-10">

                            </div>

                            <p class=" leading-relaxed text-black  secundaria400 p-5 bg-white <?= $cuerpo ?>">Pagas por lo que consumes, principalmente acotado por tu operación, 
                            all2cloud usa herramientas nativas para cuidar tu consumo, para cuidar tus costos de nube.<span class="text-colorAzul"> 
                             <a href="mailto:contacto@all2cloud.mx?subject=Quiero servicios de nube&body=Quiero solucionar el siguiente escenario:">Quiero servicios de nube</a>
                            </span>
                            </p>
                        </details>

                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="w-full faq-container">
                    <div class="space-y-4 shadow-md ">
                        <details class="group [&_summary::-webkit-details-marker]:hidden ">
                            <summary class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg  p-4 text-gray-900">
                                <h2 class="<?= $cuerpo ?> principal500  text-black">Nube está en internet ¿todos pueden acceder a mis recursos?</h2>

                                <i class="fas fa-plus text-black transition duration-300 shrink-0 group-open:-rotate-45 rounded-full"></i>

                            </summary>

                            <div class="w-full h-[1px] bg-white px-10">

                            </div>

                            <p class=" leading-relaxed text-black  secundaria400 p-5 bg-white <?= $cuerpo ?>">¿Con todos te refieres a cualquier persona que usa internet no? hay varios elementos que impiden esto.<br> Si con todos te referías a N cantidad de personas en tu organización 
                            si todos pueden acceder con su respectiva configuración previa.<span class="text-colorAzul"> <br>
                            <a href="mailto:contacto@all2cloud.mx?subject=Quiero servicios de nube&body=Quiero solucionar el siguiente escenario:">Quiero servicios de nube</a>
                            </span>
                            </p>
                        </details>

                    </div>
                </div>
                <!-- FAQ 4 -->
                <div class="w-full faq-container">
                    <div class="space-y-4 shadow-md ">
                        <details class="group [&_summary::-webkit-details-marker]:hidden ">
                            <summary class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg  p-4 text-gray-900">
                                <h2 class="<?= $cuerpo ?> principal500  text-black">Quiero tener los servicios con all2cloud, pero estoy con otro proveedor. ¿Que se puede hacer?</h2>

                                <i class="fas fa-plus text-black transition duration-300 shrink-0 group-open:-rotate-45 rounded-full"></i>

                            </summary>

                            <div class="w-full h-[1px] bg-white px-10">

                            </div>

                            <p class=" leading-relaxed text-black  secundaria400 p-5 bg-white <?= $cuerpo ?>">Si no hay un contrato forzoso, el cambio es simple (romper un contrato forzoso por lo general implicará penalizaciones), all2cloud te apoyará a realizar la gestión del cambio.
                            <span class="text-colorAzul"> 
                            <a href="mailto:contacto@all2cloud.mx?subject=Quiero servicios de nube&body=Quiero solucionar el siguiente escenario:">Quiero servicios de nube</a>
                            </span>
                            </p>
                        </details>

                    </div>
                </div>
                <!-- FAQ 5 -->
                <div class="w-full faq-container">
                    <div class="space-y-4 shadow-md ">
                        <details class="group [&_summary::-webkit-details-marker]:hidden ">
                            <summary class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg  p-4 text-gray-900">
                                <h2 class="<?= $cuerpo ?> principal500  text-black">Tengo servicios en la nube, pero estoy pagando mucho por ellos, ¿all2cloud puede ayudarme?</h2>

                                <i class="fas fa-plus text-black transition duration-300 shrink-0 group-open:-rotate-45 rounded-full"></i>

                            </summary>

                            <div class="w-full h-[1px] bg-white px-10">

                            </div>

                            <p class=" leading-relaxed text-black  secundaria400 p-5 bg-white <?= $cuerpo ?>"> Sí, una vez nos comentes qué escenario en nube están cubriendo, analizaremos todos los recursos y te diremos qué es lo que está consumiendo 
                             más, haremos las recomendaciones; si tus servicios estuvieran con all2cloud no es un tema por el cual preocuparse, ya que nosotros revisamos con frecuencia.<span class="text-colorAzul"> 
                             <a href="mailto:contacto@all2cloud.mx?subject=Quiero servicios de nube&body=Quiero solucionar el siguiente escenario:">Quiero servicios de nube</a>
                             </span>
                            </p>
                        </details>

                    </div>
                </div>
                <!-- FAQ 6 -->
                <div class="w-full faq-container">
                    <div class="space-y-4 shadow-md ">
                        <details class="group [&_summary::-webkit-details-marker]:hidden ">
                            <summary class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg  p-4 text-gray-900">
                                <h2 class="<?= $cuerpo ?> principal500  text-black">Quiero aprovechar al máximo mi SAP ¿Cómo me pueden apoyar?</h2>

                                <i class="fas fa-plus text-black transition duration-300 shrink-0 group-open:-rotate-45 rounded-full"></i>

                            </summary>

                            <div class="w-full h-[1px] bg-white px-10">

                            </div>

                            <p class=" leading-relaxed text-black  secundaria400 p-5 bg-white <?= $cuerpo ?>"> Una vez conozcamos tu operación o escenario, podremos proponerte un plan de capacitación, configuraciones adicionales, reportes e informes, etc.<span class="text-colorAzul"> 
                            <a href="mailto:contacto@all2cloud.mx?subject=Quiero servicios de SAP&body=Quiero solucionar el siguiente escenario:">Quiero servicios de SAP</a>
                            </span>
                            </p>
                        </details>

                    </div>
                </div>
                 <!-- FAQ 7 -->
                <div class="w-full faq-container">
                    <div class="space-y-4 shadow-md ">
                        <details class="group [&_summary::-webkit-details-marker]:hidden ">
                            <summary class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg  p-4 text-gray-900">
                                <h2 class="<?= $cuerpo ?> principal500  text-black">¿Qué limitaciones tengo con una solución home office?</h2>

                                <i class="fas fa-plus text-black transition duration-300 shrink-0 group-open:-rotate-45 rounded-full"></i>

                            </summary>

                            <div class="w-full h-[1px] bg-white px-10">

                            </div>

                            <p class=" leading-relaxed text-black  secundaria400 p-5 bg-white <?= $cuerpo ?>"> 
                            Para que funcione correctamente la solución: requieres de internet y saber tus credenciales; fuera de esto puedes trabajar, imprimir, copiar y pegar, etc. <span class="text-colorAzul"> 
                            <a href="mailto:contacto@all2cloud.mx?subject=Quiero servicios de SAP&body=Quiero solucionar el siguiente escenario:">Quiero servicios de Home Office</a>
                            </span>
                            </p>
                        </details>

                    </div>
                </div>
                <!-- FAQ 8 -->
                 <div class="w-full faq-container">
                    <div class="space-y-4 shadow-md ">
                        <details class="group [&_summary::-webkit-details-marker]:hidden ">
                            <summary class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg  p-4 text-gray-900">
                                <h2 class="<?= $cuerpo ?> principal500  text-black">¿Por qué las cotizaciones de nube son una estimación?</h2>

                                <i class="fas fa-plus text-black transition duration-300 shrink-0 group-open:-rotate-45 rounded-full"></i>

                            </summary>

                            <div class="w-full h-[1px] bg-white px-10">

                            </div>

                            <p class=" leading-relaxed text-black  secundaria400 p-5 bg-white <?= $cuerpo ?>"> 
                            Son variados los servicios de nube, y algunas soluciones trabajan en conjunto con otras. Cada una tiene su propio costo y forma de consumo; sin embargo, hay pequeños cargos por descargas, transferencia, etc.
                            sin embargo esos montos no suelen ser considerables.<span class="text-colorAzul"> 
                            <a href="mailto:contacto@all2cloud.mx?subject=Quiero servicios de SAP&body=Quiero solucionar el siguiente escenario:">Quiero servicios de nube</a>
                            </span>
                            </p>
                        </details>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN FAQ -->



    <!-- FOOTTER -->
    <div class="w-full bg-[url('img/backgroundFooter.svg')] bg-cover bg-no-repeat py-10" data-aos="fade-up" data-aos-duration="800" data-aos-easing="erase">
        <div class="w-full flex items-center ">

            <!-- FIX ORANGE CIRCLE -->
            <div class="w-20 md:block hidden">
                <img src="img/animacionFotter.png" alt="" class="w-20 ">
            </div>
            <div class="w-full ">
                <div class="w-full  <?= $margenesSinY ?> md:flex block justify-start items-center">
                    <div class="w-full">
                        <img src="img/logo.png" alt="" class="w-20">
                        <p class="secundaria400 <?= $cuerpo ?> pt-4">
                        Haremos tu transformación tecnológica real, porque no vendemos tecnología, vendemos soluciones tecnológicas, nos enfocamos en resolver 
                        los problemas que frenan el potencial de tu empresa, <b>¿ahora qué te detiene?, si ya encontraste quién te resuelva.</B></p>
                        <!--p class="principal600 <?= $cuerpo ?> pt-10">Lorem ipsum dolo</p>-->

                        <!-- Sección de iconos de redes sociales -->
                        <div class="flex space-x-4 pb-5 pt-2 <?= $subtitulo ?>">
                            <a href="https://www.linkedin.com/company/all2cloud/?viewAsMember=true" class="">
                                <i class="fab fa-linkedin text-colorAzul"></i>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- FIN FOOTTER -->

    <!-- ABAJO FOTTER -->
    <div class="w-full py-2  justify-between text-center <?= $margenesSinY ?> bg-gray-50">
        <div class="w-full flex justify-center">
            <img src="img/noelim.png" alt="" class="w-6">
            <p class="principal300 <?= $cuerpo ?>">Sitio desarrollado por <span class="text-colorMorado principal600"><a href="https://noelim.com">Noelim</a></span> </p>
        </div>
        <p class="principal300 <?= $cuerpo ?> w-full "><a href="AvisoConfidencial.php"><b>Politica de privacidad</b></a></p>

    </div>

    <!-- FIN ABAJO FOTTER -->


    <a href="https://api.whatsapp.com/send?phone=5213311455594&text=Hola!%20Me%20interesa%20platicar%20con%20ustedes%20sobre%20un%20servicio%20por%20el%20que%20estoy%20interesado" class="fixed bottom-0 right-0 mb-10 mr-10 bg-green-500 hover:bg-green-600 text-white text-lg py-4 px-5 rounded-full shadow-2xl transition duration-300 ease-in-out z-[100]">

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
        loop: true,
        pagination: {
            el: '.swiper-pagination2', // El elemento donde aparecerán los puntos de paginación
            clickable: true, // Opción para permitir hacer clic en los puntos para navegar a una diapositiva
        },
        // Habilita la reproducción automática
        autoplay: {
            delay: 3000, // El tiempo en milisegundos entre cada cambio de diapositiva (en este ejemplo, 3 segundos)
            disableOnInteraction: true, // Permite que la reproducción automática continúe incluso si el usuario interactúa con el carousel
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