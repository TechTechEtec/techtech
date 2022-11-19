{% extends "partials/body.twig.php" %}

{% block title %} Home | Techtech {% endblock %}

{% block body %}
  <div class="w-screen absolute h-[90px] md:w-[170vw] md:h-[60rem] md:md:h-[63rem] bg-lightpurple md:top-[-80%] md:left-[-20%] md:skew-y-3 md:-rotate-[20deg] z-[-1] p-6 ">
    <div class="hidden md:block relative w-full h-full bg-lightpurple brightness-[1.15]"></div>
  </div>

<div class="w-screen h-auto bg-[url({{BASE}}svgs/background.svg)] bg-cover bg-center">

  <!-- HEADER CONTENT --> 
  <header class="flex justify-between p-4 items-center w-full">

    <!-- Logo -->
    <img class="flex-none w-20 h-20" src="{{BASE}}svgs/techtechlogo.svg" alt="TechTech Logo">

    <!-- NAVIGATION -->
    <nav class="flex flex-row items-center gap-4">
      <ul class="text-darkpurple font-bold text-2xl flex flex-col items-center justify-center drop-shadow-xl px-6 py-10 z-10 bg-white fixed top-0 right-0 h-screen w-screen md:items-start md:justify-start md:w-[40%] lg:h-auto lg:relative lg:flex-row lg:bg-transparent lg:p-0 lg:items-center gap-4 lg:gap-10 lg:w-auto hidden lg:flex home-menu">

        <li class="hover:translate-y-[-3px] ease duration-300 cursor-pointer absolute top-6 right-6 lg:hidden" onclick="toggleHomeMenu()" >
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#4d3a92" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="96" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></circle><line x1="160" y1="96" x2="96" y2="160" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="160" y1="160" x2="96" y2="96" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line></svg>
        </li>

        <li class="hover:text-purple "><a href="{{BASE}}portfolio" onclick="toggleHomeMenu()">Projeto</a></li>
        <li class="hover:text-purple "><a href="{{BASE}}portfolio#platform" onclick="toggleHomeMenu()">Plataforma</a></li>
        <li class="hover:text-purple "><a href="{{BASE}}portfolio#plan" onclick="toggleHomeMenu()">Plano de Curso</a></li>
        <li class="hover:text-purple "><a href="{{BASE}}portfolio#team" onclick="toggleHomeMenu()">Equipe</a></li>
        <li class="hover:text-purple "><a href="#" onclick="toggleHomeMenu()">Módulos</a></li>
      </ul>
      

      <button class="lg:hidden border-none bg-none p-4 cursor-pointer" onclick="toggleHomeMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#4d3a92" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><line x1="40" y1="128" x2="216" y2="128" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="40" y1="64" x2="216" y2="64" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="40" y1="192" x2="216" y2="192" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line></svg>
      </button>

      <!-- Login Button -->
      <a href="{{BASE}}signin" class="bg-orange rounded-full px-3 h-10 text-white flex items-center group">
        <i class="ph-user"></i>
        <span class="pl-2">Entrar</span>
      </a>

    </nav>
  </header>

  <!-- MAIN CONTENT --> 
  <main>

    <!-- first section -->
    <section class="px-4 w-[90vw] min-h-[75vh] m-auto relative p-4 flex flex-col items-stretch justify-between gap-10" data-aos="fade-up">
      <div class="flex flex-col justify-around items-start m-auto w-full gap-6 2md:flex-col lg:flex-row lg:items-start lg:justify-around">
        <div class="flex flex-1 flex-col items-start justify-evenly">

          <h1 class="text-4xl text-darkpurple font-mukta font-bold min-h-[50px]">
            <span id="typed"></span>
          </h1>

          <p class="text-gray-600 text-justify mt-10 mb-5 text-lg w-full max-w-[35rem] font-medium font-roboto subpixel-antialiased">Ensino tecnológico acessível para crianças, um projeto sem fins lucrativos desenvolvido por estudantes, para auxiliar estudantes, com a finalidade de apresentar o mundo tecnológico de outra forma para crianças, e assim ampliar seus horizontes.</p>

          <div class="flex flex-row gap-4 justify-start items-center w-full mt-6">
            <a href="{{BASE}}signup-student" class="bg-orange text-darkerPurple font-bold p-2 rounded-xl hover:-translate-y-1 transition">Cadastre-se</a>
            <a href="{{BASE}}signup-school" class="bg-orange text-darkerPurple font-bold p-2 rounded-xl hover:-translate-y-1 transition">Cadastre sua escola</a>
          </div>

        </div>

        <div class="flex-1 flex items-center justify-center w-full">
          <img class="w-full" src="{{BASE}}imgs/techbo_showingvideo.png" alt="techbo mostrando vídeo">
        </div>
      </div>

      <a href="#second_section" class="w-min mx-auto">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#000000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="96" fill="none" stroke="#000000" stroke-width="16" stroke-miterlimit="10"></circle><polyline points="94.1 134.1 128 168 161.9 134.1" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline><line x1="128" y1="88" x2="128" y2="168" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line></svg>
      </a>
    
    </section>

    <!-- second section -->
    <section class="px-6 pb-10 mt-14 w-[90vw] m-auto" id="second_section" data-aos="fade-up">

      <h1 class="text-3xl font-extrabold text-darkpurple mb-8 font-clean">Saiba mais!</h1>

      <div class="flex flex-col  2sm:flex-row  w-full justify-between items-center text-[#FC76FF] gap-6">
        <a href="{{BASE}}portfolio#platform" class="hover:-translate-y-2 transition duration-300">
          <div class="text-center">
              <img class="shadow-xl rounded-md" src="{{BASE}}svgs/plataforma.svg" alt="Plano de Curso">
              <p class="mt-4 font-bold font-roboto text-2xl">Plataforma</p>
            </div>
        </a>

        <a href="{{BASE}}portfolio#plan" class="hover:-translate-y-2 transition duration-300">
          <div class="text-center">
              <img class="shadow-xl rounded-md" src="{{BASE}}svgs/plano_de_curso.svg" alt="Escolas Participantes">
              <p class="mt-4 font-bold font-roboto text-2xl">Plano de Curso</p>
            </div>
        </a>

        <a href="{{BASE}}portfolio#team" class="hover:-translate-y-2 transition duration-300">
          <div class="text-center">
            <img class="shadow-xl rounded-md" src="{{BASE}}svgs/equipe.svg" alt="Equipe">
            <p class="mt-4 font-bold font-roboto text-2xl">Equipe</p>
          </div>
        </a>
      </div>
      
    </section>

    <!-- Parallax Effect -->
    <div class="hidden md:block bg-[url({{BASE}}imgs/parallax.png)] min-h-[200px] md:min-h-[400px] bg-fixed bg-center bg-repeat-y bg-contain parallax"></div>

    <!-- Alternative parallax Effect to mobile devices -->
  
    <img class="block md:hidden" src="{{BASE}}imgs/parallax.png" alt="parallax static image used on mobile devices" class="w-full h-auto"/>
    

    <!-- third section -->
    <section class="px-6 mt-14 py-6 w-[90vw] m-auto" data-aos="fade-up">
      <div class="bg-darkpurple p-6 flex flex-col sm:flex-row flex-wrap rounded-md text-white font-bold items-center justify-center gap-4 max-w-[900px] w-full mx-auto drop-shadow-md">
        <a href="{{BASE}}feedback" class="relative text-darkpurple bg-orange rounded-md p-4 hover:-translate-y-1 transition duration-300 after:content[''] after:block after:absolute after:bg-orange after:w-[25px] after:h-[25px] after:rounded-md after:rotate-45 after:bottom-[-8px] after:left-[20px]">
          Dê-nos seu Feedback
        </a>
        <p class="flex-1">Sua Opinião é muito importante para nós assim podemos melhorar a sua experiência na nossa plataforma.
      </div>
    </section>
  </main>

  <!-- FOOTER CONTENT --> 
  <footer class="bg-darkerPurple bg-[url({{BASE}}svgs/Random_shit.svg)] shadow-xl flex flex-col-reverse lg:flex-row flex-wrap justify-evenly items-center w-screen m-0 h-auto gap-10 md:gap-4 p-6"  data-aos="fade-up">
      <!-- Logo -->
      <div class="flex flex-col justify-center items-center gap-8 h-[20rem] w-[20rem]">
        <img class=" w[10rem] h-[9rem]" src="{{BASE}}svgs/techtechlogo.svg" alt="TechTech Logo">
        <img class="w-[10rem]" src="{{BASE}}imgs/logoscps.png" alt="Etec e CPS Logo">
      </div>

      <!-- Links -->
      <div class="flex-1 flex flex-row gap-4 w-full p-4 w-full flex-wrap items-start justify-center">
        <ul class="w-auto flex flex-col items-stretch justify-center gap-2">
          <li><h3 class="text-orange font-extrabold font-clean">Tech Tech</h3></li>
          <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-darkpurple cursor-pointer hover:text-purple font-medium font-roboto">Escolas Participantes</a></li>
          <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-darkpurple cursor-pointer hover:text-purple font-medium font-roboto">Equipe</a></li>
          <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-darkpurple cursor-pointer hover:text-purple font-medium font-roboto">Feedback</a></li>
        </ul>

        <ul class="w-auto flex flex-col items-stretch justify-center gap-2">
          <li><h3 class="text-orange font-extrabold font-clean">Curso</h3></li>
          <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-darkpurple cursor-pointer hover:text-purple font-medium font-roboto">Plano de Curso</a></li>
          <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-darkpurple cursor-pointer hover:text-purple font-medium font-roboto">Didática</a></li>
          <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-darkpurple cursor-pointer hover:text-purple font-medium font-roboto">Atividades</a></li>
          <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-darkpurple cursor-pointer hover:text-purple font-medium font-roboto">Professores</a></li>
        </ul>

        <div class="w-full h-auto flex items-start justify-center gap-6 mt-4">
          <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#4267b2" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="96" fill="none" stroke="#4267b2" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></circle><path d="M168,88H152a23.9,23.9,0,0,0-24,24V224" fill="none" stroke="#4267b2" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path><line x1="96" y1="144" x2="160" y2="144" fill="none" stroke="#4267b2" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line></svg></a> 
          <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#1da1f2" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><path d="M128,88c0-22,18.5-40.3,40.5-40a40,40,0,0,1,36.2,24H240l-32.3,32.3A127.9,127.9,0,0,1,80,224c-32,0-40-12-40-12s32-12,48-36c0,0-64-32-48-120,0,0,40,40,88,48Z" fill="none" stroke="#1da1f2" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path></svg></a>
          <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#0e76a8" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><rect x="36" y="36" width="184" height="184" rx="8" fill="none" stroke="#0e76a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><line x1="124" y1="120" x2="124" y2="176" fill="none" stroke="#0e76a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="84" y1="120" x2="84" y2="176" fill="none" stroke="#0e76a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><path d="M124,148a28,28,0,0,1,56,0v28" fill="none" stroke="#0e76a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path><circle cx="84" cy="80" r="16"></circle></svg></a>
          <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#e1306c" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="34" fill="none" stroke="#e1306c" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></circle><rect x="32" y="32" width="192" height="192" rx="48" fill="none" stroke="#e1306c" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><circle cx="180" cy="76" r="16"></circle></svg></a>
        </div>
      </div>


      <!-- Form -->
      <form method="post" class="flex-1 flex w-full lg:w-auto flex-col items-center justify-start gap-6">
          <input type="text" id="name" name="name" placeholder="Seu nome" class="w-[25rem] h-[2rem] rounded-lg bg-white border-black border-[1px] border-solid p-2 text-black"/>

          <input type="email" id="name" name="name" placeholder="Seu E-mail" class="w-[25rem] h-[2rem]  rounded-lg bg-white border-black border-[1px] border-solid p-2 text-black"/>

          <textarea placeholder="Sua mensagem..." rows="5" class="w-[25rem] h-[6rem] max-h-[100px] min-h-[100px] rounded-lg bg-white border-black border-[1px] border-solid p-2 text-black"></textarea>

          <button class="bg-darkpurple w-[25rem] p-2 rounded-xl drop-shadow-xl hover:-translate-y-1 transition ease duration-300 cursor-pointer text-white font-extrabold font-clean tracking-wider">
            Enviar
          </button>
      </form>
    </footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script>
  var typed = new Typed('#typed', {
    strings: ['Trabalho de conclusão de curso!', "TECHTECH ⭐", "Comece a aprender agora mesmo!"],
    typeSpeed: 40,
    backSpeed: 15,
    backDelay: 2000,
    loop: true,
    loopCount: Infinity,
    showCursor: false,
  });
</script>

{% endblock %}