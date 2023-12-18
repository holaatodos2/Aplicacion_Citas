<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clínica Cita Sana</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


        <!-- Styles -->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
           :root{
            --green:#16a085;
            --black:#444;
            --light-color:#777;
            --box-shadow:.5rem .5rem 0 rgba(22, 160, 133, .2);
            --text-shadow:.4rem .4rem 0 rgba(0, 0, 0, .2);
            --border:.2rem solid var(--green);
           }
            *{
                font-family: 'Poppins', sans-serif; 
                margin: 0; padding: 0;
                box-sizing: border-box;
                outline: none; border: none;
                text-transform: capitalize;
                transition: all .2s ease-out;
                text-decoration: none;
            }
            body:::-webkit-scrollbar{
                width: 15px
            }
            body::-webkit-scrollbar-thumb{
                background: #16a085;
            }

            html{
                font-size: 60.5%;
            }

            section{
                padding: 2rem 9%;
            }
            section:nth-child(even){
                background: #f5f5f5;
            }
            .heading{
                text-align: center;
                padding-bottom: 2rem;
                text-shadow: var(--text-shadow);
                text-transform: uppercase;
                color:var(--black);
                font-size: 5rem;
                letter-spacing: .4rem;
            }
            .heading span{
                text-transform:uppercase;
                color: var(--green); 
            }
            .btn{
                display: inline-block;
                margin-top: 1rem;
                padding: .5rem;
                padding-left: 1rem;
                border: var(--border);
                border-radius: .5rem;
                box-shadow: var(--box-shadow);
                color: var(--green);
                cursor: pointer;
                font-size: 1.7rem;
            }
            .btn span{
                padding: .7rem 1rem;
                border-radius: .5rem;
                background: var(--green);
                color: #fff;
                margin-left: .5rem;
            }
            .btn:hover{
                background: var(--green);
                color: #fff;
            }
            .btn:hover span{
                background: var(--green);
                color: #fff;
                margin-left: 1rem;
            }

            .header{
                padding:2rem 9%;
                position: fixed;
                top:0; left:0; right:0;
                z-index:1000;
                box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
                display: flex;
                align-items: center;
                justify-content: center;
                justify-content: space-between;
                background: #fff;
            }

            .header .logo{
                font-size: 2.5rem;
                color: var(--black);
            }

            .header .logo i{
                color: var(--green);
            }

            .header .navbar a{
                font-size: 1.7rem;
                color: var(--light-color);
                margin-left: 2rem;
            }

            .header .navbar a:hover{
                color: var(--green);
            }

            #sesion{
                margin-right: 2px;
            margin-left: 40px
            }
            #registro{
                margin-right: -100px;
            }

            #menu-btn{
                font-size: 2.5rem;
                border-radius: .5rem;
                background: #eee;
                color: var(--green);
                padding: 1rem 1.5rem;
                cursor: pointer;
                display: none;
            }
            .home{
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                gap:1.5rem;
                padding-top: 10rem;
            }
            .home .image{
                flex: 1 1 45rem;
            }
            .home .image img{
                width: 100%;
            }
            .home .content{
                flex: 1 1 45rem;
            }
            .home .content h3{
                font-size: 4.5rem;
                color: var(--black);
                line-height: 1.8;
                text-shadow: var(--text-shadow);
            }
            .home .content p{
                font-size: 1.7rem;
                color: var(--light-color);
                line-height: 1.8;
                padding: 1rem 0;
            }
            .icons-container{
                display: grid;
                gap: 2rem;
                grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
                padding-top: 5rem;
                padding-bottom: 5rem;
            }
            .icons-container .icons{
                border:var(--border);
                box-shadow: var(--box-shadow);
                border-radius: .5rem;
                text-align: center;
                padding: 2.5rem;
            }
            .icons-container .icons i{
                font-size: 4.5rem;
                color:var(--green);
                padding-bottom: .7rem;
            }
            .icons-container .icons h3{
                font-size: 4.5rem;
                color:var(--black);
                padding: .5rem 0;
                text-shadow: var(--text-shadow);
            }
            .icons-container .icons p{
                font-size: 1.7rem;
                color:var(--light-color);
            }
            .servicios .box-container{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
                gap: 2rem;
            }
            .servicios .box-container .box{
                background: #fff;
                border-radius: .5rem;
                box-shadow: var(--box-shadow);
                border: var(--border);
                padding: 2.5rem;
            }
            .servicios .box-container .box i{
                color:var(--green);
                font-size: 5rem;
                padding-bottom: .5rem;
            }
            .servicios .box-container .box h3{
                color:var(--black);
                font-size: 2.5rem;
                padding: 1rem 0;
            }
            .servicios .box-container .box p{
                color:var(--light-color);
                font-size: 1.4rem;
                line-height: 2;
            }
            .nosotros .row{
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                gap: 2rem;
            }
            .nosotros .row .image{
                flex: 1 1 45rem;
            }
            .nosotros .row .image img{
                width: 100%;
            }
            .nosotros .row .image{
                flex: 1 1 45rem;
            }
            .nosotros .row .content h3{
                color: var(--black);
                text-shadow: var(--text-shadow);
                font-size: 4rem;
                line-height: 1.8;
            }
            .nosotros .row .content p{
                color: var(--light-color);
                padding: 1rem 0;
                font-size: 1.5rem;
                line-height: 1.8;
            }
            .medicos .box-container{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
                gap: 2rem;
            }
            .medicos .box-container .box{
                text-align: center;
                background: #fff;
                border-radius: .5rem;
                border: var(--border);
                box-shadow: var(--box-shadow);
                padding: 2rem;
            }
            .medicos .box-container .box img{
                height: 20rem;
                width: 100%;
                border: var(--border);
                border-radius: .5rem;
                margin-top: 1rem;
                margin-bottom: 1rem;
            }
            .medicos .box-container .box h3{
                color: var(--black);
                font-size: 2.5rem;
            }
            .medicos .box-container .box span{
                color: var(--green);
                font-size: 1.5rem;
            }
            .medicos .box-container .box .share{
                padding-top: 2rem;
            }
            .medicos .box-container .box .share a{
                height: 5rem;
                width: 5rem;
                line-height: 4.5rem;
                font-size: 2rem;
                color: var(--green);
                border-radius: .5rem;
                border: var(--border);
                margin: .3rem;
            }
            .medicos .box-container .box .share a:hover{
                background: var(--green);
                color: #fff;
                box-shadow: var(--box-shadow);
            }
            .review .box-container{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
                gap: 2rem;
            }
            .review .box-container .box{
                border: var(--border);
                box-shadow: var(--box-shadow);
                border-radius: .5rem;
                padding: 2.5rem;
                background: #fff;
                text-align: center;
                position: relative;
                overflow: hidden;
                z-index: 0;
            }
            .review .box-container .box img{
                height: 10rem;
                width: 10rem;
                border-radius: 50%;
                object-fit: cover;
                border: .5rem solid #fff;
            }
            .review .box-container .box h3{
                color: #fff;
                font-size: 2.2rem;
                padding: .5rem 0;
            }
            .review .box-container .box .stars i{
                color: #fff;
                font-size: 1.5rem;
            }
            .review .box-container .box .text{
                color: var(--light-color);
                line-height: 1.8;
                font-size: 1.6rem;
                padding-top: 8rem;
            }
            .review .box-container .box::before{
                content: '';
                position: absolute;
                top: 0; left: 50%;
                transform: translateX(-50%);
                background: var(--green);
                border-bottom-left-radius: 50%;
                border-bottom-right-radius: 50%;
                height: 25rem;
                width: 120%;
                z-index: -1;
            }
            .blogs .box-container{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
                gap: 2rem;
            }
            .blogs .box-container .box{
                border: var(--border);
                box-shadow: var(--box-shadow);
                border-radius: .5rem;
                padding: 2rem;
            }
            .blogs .box-container .box .image{
                height: 20rem;
                overflow: hidden;
                border-radius: .5rem;
            }
            .blogs .box-container .box .image img{
                height: 100%;
                width: 100%;
                object-fit: cover;
            }
            .blogs .box-container .box:hover .image img{
                transform: scale(1.2);
            }
            .blogs .box-container .box .content{
                padding-top: 1rem;
            }
            .blogs .box-container .box .content .icon{
                padding-top: 1rem 0;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .blogs .box-container .box .content .icon a{
                font-size: 1.4rem;
                color: var(--light-color);
            }
            .blogs .box-container .box .content .icon a:hover{
                color: var(--green);
            }
            .blogs .box-container .box .content .icon a i{
                padding-right: .5rem;
                color: var(--green);
            }
            .blogs .box-container .box .content h3{
                color: var(--black);
                font-size: 3rem;
            }
            .blogs .box-container .box .content p{
                color: var(--light-color);
                font-size: 1.5rem;
                line-height: 1.8;
                padding: 1rem 0;
            }
            .footer .box-container{
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
                gap: 2rem;
            }
            .footer .box-container .box h3{
                font-size: 2.5rem;
                color: var(--black);
                padding: 1rem 0;
            }
            .footer .box-container .box a{
                display: block;
                font-size: 1.5rem;
                color: var(--light-color);
                padding: 1rem 0;
            }
            .footer .box-container .box a i{
                padding-right: .5rem;
                color: var(--green);
            }
            .footer .box-container .box a:hover i{
                padding-right: 2rem;
            }
            .footer .credit{
                padding: 1rem;
                padding-top: 2rem;
                margin-top: 2rem;
                text-align: center;
                font-size: 2rem;
                color: var(--light-color);
                border-top: .1rem solid rgba(0, 0, 0, .1);
            }
            .footer .credit span{
                color: var(--green);
            }
        










            @media (max-width: 991px) {
                html{
                    font-size: 55%;
                }
                .header{
                    padding: 2rem;
                }
                section{
                    padding: 2rem;
                }
            }
            @media (max-width: 768px){
                #menu-btn{
                    display: initial;
                }
                .header .navbar{
                    position: absolute;
                    top: 115%; right: 2rem;
                    border-radius: .5rem;
                    box-shadow: var(--box-shadow);
                    width: 30rem;
                    border: var(--border);
                    background: #fff;
                    transform: scale(0);
                    opacity: 0;
                    transform-origin: top right;
                    transition: none;
                }
                .header .navbar.active{
                    transform: scale(1);
                    opacity: 1;
                    transition: .2s ease-out;
                }
                .header .navbar a{
                    font-size: 2rem;
                    display: block;
                    margin: 2.5rem;
                }
            }
            @media (max-width: 450px) {
                html{
                    font-size: 50%;
                }
            }
        </style>

    </head>

    <body>

        <header class="header">
            <a href="#" class="logo"><i class="fas fa-heartbeat"> CITA SANA</i></a>

            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#servicios">Servicios</a>
                <a href="#nosotros">Acerca de</a>
                <a href="#medicos">Médicos</a>
                <a href="#review">Reseña</a>
                <a href="#blogs">Blogs</a>
            
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('admin.index') }}" class="inicio">Inicio</a>
                    @else
                        <a href="{{ route('login') }}"> <button href="" type="button" style="font-size: 16px" class="btn" id="sesion">Iniciar Sesión</button></a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><button href="" type="button" style="font-size: 16px" class="btn" id="registro" >Registrarse</button></a>
                        @endif
                    @endauth
                @endif
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

        </header>

        <section class="home" id="home">
            <div class="image">
                <img src="{{asset('img/uno.svg')}}" alt="">
            </div>
            <div class="content">
                <h3>El mejor consultorio médico</h3>
                <p>"¡Bienvenido a nuestro portal de reservas de citas médicas! En CitaSana, estamos comprometidos a brindar a nuestros pacientes acceso sencillo y conveniente a la atención médica de alta calidad. Nuestra misión es poner la salud en tus manos, y lo hacemos mediante la combinación de la experiencia de nuestros profesionales de la salud con la tecnología de vanguardia."</p>
                <a href="{{ route('login') }}" class="btn"> Comenzar Ahora <span class="fas fa-hevron-right">></span></a>
            </div>
        </section>

        <section class="icons-container">
            <div class="icons">
                <i class="fas fa-user-md"></i>
                <h3>50+</h3>
                <p>Doctores en el trabajo</p>
            </div>
            <div class="icons">
                <i class="fas fa-users"></i>
                <h3>1040+</h3>
                <p>Pacientes satisfechos</p>
            </div>
            <div class="icons">
                <i class="fas fa-procedures"></i>
                <h3>200+</h3>
                <p>Instalaciones de camas</p>
            </div>
            <div class="icons">
                <i class="fas fa-hospitals"></i>
                <h3>5+</h3>
                <p>Clínicas disponibles</p>
            </div>
        </section>

        <section class="servicios" id="servicios">
            <h1 class="heading">Nuestros <span>Servicios</span></h1>
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-notes-medical"></i>
                    <h3>Chequeos Gratis</h3>
                    <p>Ofrecemos chequeos médicos gratuitos para que puedas monitorear tu salud de manera regular. Nuestros profesionales te ayudarán a mantener un seguimiento de tu bienestar sin costo alguno. </p>
                </div>
                <div class="box">
                    <i class="fas fa-ambulance"></i>
                    <h3>Ambulancia 24/7</h3>
                    <p>La salud no tiene horarios, y nosotros tampoco. Nuestra ambulancia está disponible las 24 horas, los 7 días de la semana, para atender emergencias médicas y garantizar que recibas la atención necesaria cuando más la necesitas. </p>
                    
                </div>
                <div class="box">
                    <i class="fas fa-user-md"></i>
                    <h3>Médicos expertos</h3>
                    <p>Contamos con un equipo de médicos altamente capacitados y especializados en diversas áreas de la medicina. Te conectaremos con profesionales expertos que se preocupan por tu salud y bienestar. </p>
                    
                </div>
                <div class="box">
                    <i class="fas fa-pills"></i>
                    <h3>Medicamentos</h3>
                    <p>Facilitamos el acceso a medicamentos recetados. Puedes solicitar tus medicamentos a través de nuestra plataforma y recibirlos cómodamente en tu hogar, ahorrándote tiempo y esfuerzo. </p>
                    
                </div>
                <div class="box">
                    <i class="fas fa-procedures"></i>
                    <h3>Instalaciones de camas</h3>
                    <p>Para aquellos que necesitan atención hospitalaria, contamos con instalaciones equipadas con camas de alta calidad y personal dedicado. Tu comodidad y recuperación son nuestras prioridades. </p>
                   
                </div>
                <div class="box">
                    <i class="fas fa-heartbeat"></i>
                    <h3>Cuidado total</h3>
                    <p>Nuestro enfoque es ofrecer un cuidado integral. No solo tratamos los síntomas, sino que también nos preocupamos por tu bienestar general. Te acompañamos en tu viaje hacia una vida más saludable. </p>
                    
                </div>
            </div>
        </section>

        <section class="nosotros" id="nosotros">
            <h1 class="heading"><span>Sobre </span>Nosotros</h1>
            <div class="row">
                <div class="image">
                    <img src="{{asset('img/dos.svg')}}" alt="">
                </div>
                <div class="content">
                    <h3>cuidamos de tu vida saludable</h3>
                    <p>"En CitaSana, nos enorgullece ser tu socio en la gestión de tu salud. <br>Nuestra misión es brindar 
                        a los pacientes un acceso rápido y sencillo <br> a la atención médica de calidad, conectándolos con 
                        los mejores <br> profesionales de la salud en la industria. </p>
                    <p>Lo que nos diferencia es nuestro compromiso con la satisfacción del <br> paciente. Nuestro equipo de 
                        expertos en salud y tecnología trabaja <br> incansablemente para asegurarse de que cada paciente reciba 
                        la <br> atención que se merece, de manera oportuna y conveniente."</p>
                </div>
            </div>
        </section>

        <section class="medicos" id="medicos">
            <h1 class="heading">Nuestros <span>Médicos</span></h1>
            <div class="box-container">
                <div class="box">
                    <img src="{{asset('img/medico1.jpg')}}" alt="">
                    <h3>Diego Rodríguez</h3>
                    <span>Cardiología</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('img/medico2.jpg')}}" alt="">
                    <h3> Alejandro Vargas</h3>
                    <span>Endocrinología</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('img/medico3.jpg')}}" alt="">
                    <h3>Martín Herrera</h3>
                    <span>Psicología</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('img/medico4.jpg')}}" alt="">
                    <h3>Gabriela Torres</h3>
                    <span>Urología</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('img/medico5.jpg')}}" alt="">
                    <h3>Laura Montenegro</h3>
                    <span>Gastroenterología</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('img/medico6.jpg')}}" alt="">
                    <h3>María Guevara</h3>
                    <span>Ginecología y Obstetricia</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="review" id="review">
            <h1 class="heading">Reseña <span>Clientes</span></h1>
            <div class="box-container">
                <div class="box">
                    <img src="{{asset('img/cliente1.jpg')}}" alt="">
                    <h3>Ricardo Morales</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text">"Tuve una experiencia positiva en Cita Sana. El Dr. Rodríguez fue muy profesional y me brindó información clara sobre mi salud. El proceso de reserva de cita en línea fue fácil y rápido. La clínica está limpia y bien mantenida, mereciendo una sólida calificación."</p>
                </div>
                <div class="box">
                    <img src="{{asset('img/cliente2.jpg')}}" alt="">
                    <h3>Carolina Ríos</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text">"Cita Sana ofrece un servicio médico confiable. Aunque la espera fue mínima y la Dra. Guevara fue amable, me gustaría ver mejoras en la comodidad de la sala de espera. En general, una experiencia sólida, calificaría con 4 estrellas."</p>
                </div>
                <div class="box">
                    <img src="{{asset('img/cliente3.jpg')}}" alt="">
                    <h3>Valeria Cruz</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text">"Mi visita a Cita Sana fue satisfactoria. La Dra. Torres fue atenta y respondió a todas mis preguntas. El proceso de registro fue eficiente, pero la espera fue un poco más larga de lo esperado. En general, una experiencia agradable."</p>
                </div>
            </div>
        </section>

        <section class="blogs" id="blogs">
            <h1 class="heading">Nuestros <span>Blogs</span></h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="{{asset('img/blog1.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="#"><i class="fas fa-calendar"></i> Primero de Mayo, 2023 </a>
                            <a href="#"><i class="fas fa-user"></i> By admin </a>
                        </div>
                        <h3>Salud en Equilibrio</h3>
                        <p>Explora el bienestar holístico a través de nuestro blog "Salud en Equilibrio". Descubre artículos informativos y consejos prácticos sobre salud física, mental y emocional. Desde hábitos de alimentación saludable hasta técnicas de manejo del estrés, nuestro objetivo es guiarte en el camino hacia una vida más equilibrada y saludable. Únete a nosotros mientras exploramos temas que abarcan desde la nutrición y el ejercicio hasta la gestión del tiempo y la salud mental. Encuentra inspiración para cultivar un estilo de vida que promueva tu bienestar general. ¡La salud está en equilibrio, y te invitamos a ser parte de este viaje!</p>
                        <a href="https://www.psiquion.com/blog/equilibrio-salud-mental" class="btn">Ver más <span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="{{asset('img/blog2.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="#"><i class="fas fa-calendar"></i> Primero de Junio, 2023 </a>
                            <a href="#"><i class="fas fa-user"></i> By admin </a>
                        </div>
                        <h3>Mente Clara, Vida Plena</h3>
                        <p>Sumérgete en el fascinante viaje hacia la claridad mental y la plenitud en nuestro blog "Mente Clara, Vida Plena". Exploramos la conexión entre la salud mental, el bienestar emocional y la realización personal. Desde consejos prácticos de mindfulness hasta reflexiones sobre el crecimiento personal, nuestro blog está diseñado para inspirarte a cultivar una mente clara y una vida plena. Únete a nosotros mientras compartimos historias, recursos y estrategias para mejorar tu salud mental y encontrar el equilibrio en la agitada vida moderna. ¡Descubre el poder de una mente clara para vivir una vida plena y significativa!</p>
                        <a href="https://es.linkedin.com/pulse/7-tips-para-llevar-una-vida-plena-17-adolfo-torres-ruiz" class="btn">Ver más <span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="{{asset('img/blog3.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="#"><i class="fas fa-calendar"></i> Primero de Julio, 2023 </a>
                            <a href="#"><i class="fas fa-user"></i> By admin </a>
                        </div>
                        <h3>Viviendo en Armonía: Salud y Naturaleza</h3>
                        <p>Bienvenido a "Viviendo en Armonía", donde exploramos la conexión esencial entre la salud y la naturaleza. Sumérgete en artículos que destacan los beneficios de la vida al aire libre, desde consejos sobre actividades físicas al aire libre hasta recetas saludables con ingredientes naturales. Descubre cómo la naturaleza puede ser tu aliada en el camino hacia un estilo de vida más saludable. Exploramos temas que van desde senderismo y mindfulness en la naturaleza hasta la importancia de una dieta basada en alimentos frescos y locales. Únete a nosotros mientras nos sumergimos en la belleza y el bienestar que la naturaleza tiene para ofrecer. ¡Encuentra tu equilibrio y vive en armonía con la salud y la naturaleza!</p>
                        <a href="https://www.bauldealgodon.es/vivir-en-armonia-con-la-naturaleza/" class="btn">Ver más <span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
                
            </div>
        </section>

        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Enlaces rápidos</h3>
                    <a href="#home"><i class="fas fa-chevron-right"></i>Home</a>
                    <a href="#servicios"><i class="fas fa-chevron-right"></i>Servicios</a>
                    <a href="#nosotros"><i class="fas fa-chevron-right"></i>Nosotros</a>
                    <a href="#medicos"><i class="fas fa-chevron-right"></i>Médicos</a>
                    <a href="#review"><i class="fas fa-chevron-right"></i>Reseñas</a>
                    <a href="#blogs"><i class="fas fa-chevron-right"></i>Blogs</a>
                </div>
                <div class="box">
                    <h3>Nuestras especialidades</h3>
                    <a href="http://citasana.test/specialties"><i class="fas fa-chevron-right"></i>Cardiología</a>
                    <a href="http://citasana.test/specialties"><i class="fas fa-chevron-right"></i>Dermatología</a>
                    <a href="http://citasana.test/specialties"><i class="fas fa-chevron-right"></i>Neurología</a>
                    <a href="http://citasana.test/specialties"><i class="fas fa-chevron-right"></i>Ginecología/Obstetricia</a>
                    <a href="http://citasana.test/specialties"><i class="fas fa-chevron-right"></i>Ortopedia</a>
                    <a href="http://citasana.test/specialties"><i class="fas fa-chevron-right"></i>Oftalmología</a>
                </div>
                <div class="box">
                    <h3>Información de contactos</h3>
                    <a href=""><i class="fas fa-phone"></i>+51 912 235 897</a>
                    <a href=""><i class="fas fa-phone"></i>+51 923 345 543</a>
                    <a href=""><i class="fas fa-envelope"></i>daniel.quispe.a@tecsup.edu.pe</a>
                    <a href=""><i class="fas fa-envelope"></i>daniel.quispe.a@tecsup.edu.pe</a>
                    <a href=""><i class="fas fa-map-marker-alt"></i>Cascanueces 222, Santiago de Surco, Lima.</a>
                </div>
                <div class="box">
                    <h3>Síguenos</h3>
                    <a href=""><i class="fab fa-facebook-f"></i>Facebook</a>
                    <a href=""><i class="fab fa-instagram"></i>Instagram</a>
                    <a href=""><i class="fab fa-twitter"></i>Twitter</a>
                    <a href=""><i class="fab fa-pinterest"></i>Pinterest</a>
                </div>
            </div>
            <div class="credit"> Creado por <span>Quispe Abanto, Cárdenas Pachas, Cortez Suarez</span> | todos los derechos reservados xD</div>
        </section>






    </body>
    <script >
        let menu = document.querySelector('#menu-btn');
        let navbar = document.querySelector('.navbar');

        menu.onclick = () =>{
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        }
        window.onscroll = () =>{
            menu.classList.remove('fa-times');
            navbar.classList.remove('active');
        }
   </script>
</html>
