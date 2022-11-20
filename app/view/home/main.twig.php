{% extends "partials/body.twig.php" %}

{% block title %} Home | Techtech {% endblock %}

{% block body %}
  <div class="w-screen absolute h-[90px] md:w-[170vw] md:h-[60rem] md:md:h-[63rem] bg-lightpurple md:top-[-80%] md:left-[-20%] md:skew-y-3 md:-rotate-[20deg] z-[-1] p-6 ">
    <div class="hidden md:block relative w-full h-full bg-lightpurple brightness-[1.15]"></div>
  </div>

  <!-- bg-[url({{BASE}}svgs/background.svg)] bg-cover  bg-center  -->
<div class="w-screen h-auto relative overflow-x-hidden" >

  <!-- HEADER CONTENT --> 
  <header class="flex justify-between p-4 items-center w-full">

    <!-- Logo -->
    <img class="flex-none w-20 h-20" src="{{BASE}}svgs/techtechlogo.svg" alt="TechTech Logo">

    <!-- NAVIGATION -->
    <nav class="flex flex-row items-center gap-4">
      <ul class="text-darkpurple dark:text-violet font-bold text-2xl flex flex-col items-center justify-center drop-shadow-xl px-6 py-10 z-10 bg-white fixed top-0 right-0 h-screen w-screen md:items-start md:justify-start md:w-[40%] lg:h-auto lg:relative lg:flex-row lg:bg-transparent lg:p-0 lg:items-center gap-4 lg:gap-10 lg:w-auto hidden lg:flex home-menu">

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
    <section class="px-4 w-[90vw] min-h-[75vh] mx-auto relative p-4 flex flex-col items-stretch justify-between gap-10" data-aos="fade-up">
      <div class="flex flex-col justify-around items-start m-auto w-full gap-6 2md:flex-col lg:flex-row lg:items-start lg:justify-around">
        <div class="flex flex-1 flex-col items-start justify-evenly">

          <h1 class="text-4xl text-darkpurple font-mukta font-bold min-h-[50px]">TECHTECH ⭐</h1>

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
    <section class="px-6 pb-10 mt-14 w-[90vw] mx-auto" id="second_section" data-aos="fade-up">

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
    <section class="hidden md:block bg-[url({{BASE}}imgs/parallax.png)] min-h-[200px] md:min-h-[400px] bg-fixed bg-center bg-contain"></section>

    <!-- Alternative parallax Effect to mobile devices -->
    <img class="block my-6 md:hidden" src="{{BASE}}imgs/parallax.png" alt="parallax static image used on mobile devices" class="w-full"/>

    <!-- third section -->
    <section class="px-6 pb-4 mt-[8rem] w-[90vw] mx-auto flex flex-col md:flex-row items-start justify-evenly gap-[3rem]" id="second_section">

      <div class="flex flex-col flex-1 items-center jusfify-start gap-[4rem]" data-aos="fade-up">
        <h2 class="text-6xl font-extrabold text-purple font-nerko uppercase">Acesse de qualquer lugar!</h2>

        <p class="w-full mx-auto my-4 text-justify font-medium text-[#202020] text-2xl font-mukta"> A plataforma TechTech foi desenvolvida por uma equipe eficiente e capacitada para oferecer à seus usuários a melhor da acessibilidade e usabilidade. Você pode usufruir da plataforma em qualquer dispositivo desde que haja uma conexão de internet.</p>
      </div>

      <div class="flex flex-col flex-1 items-center jusfify-start gap-4 relative" data-aos="fade-up">
        <img src="{{BASE}}imgs/devices.png" class="w-full max-w-[62.5rem]" alt="Laptop" />
      </div>
      
    </section>

   <hr class="drop-shadow-lg"/>

    <!-- forth section -->
    <section class="px-[1rem] md:px-[3rem] py-[5rem] mt-[4rem] w-screen mx-auto flex flex-col-reverse md:flex-row items-start justify-evenly gap-[3rem]" id="second_section">

      <div class="flex flex-col flex-1 items-center jusfify-start gap-[4rem]" data-aos="fade-up">
        <img src="{{BASE}}imgs/terminal.png" class="w-full max-w-[62.5rem] rounded-xl" alt="Laptop" />
      </div>

      <div class="flex flex-col flex-1 items-start jusfify-start gap-6 relative" data-aos="fade-up">
        <h2 class="text-6xl font-extrabold text-orange font-nerko uppercase">Playground</h2>

        <p class="w-full mx-auto my-4 text-justify font-medium text-[#202020] text-2xl font-mukta">Caso você queira, você pode utilizar do nosso editor de código embutido na aba <span class="text-darkpurple text-bold font-nerko">playground</span>. Lá você conseguirá rodar códigos em Portugol e receber o resultado da execução em tempo real. Além disos é possível importar e exportar os códigos que você estiver testando.</p>
      </div>

    </section>

    <hr class="drop-shadow-lg"/>

      <!-- fifth section -->
    <section class="pb-4 mt-[8rem] w-[90vw] mx-auto flex flex-col md:flex-row items-start justify-evenly gap-[3rem]" id="second_section">

      <div class="flex flex-col flex-1 items-start jusfify-start gap-6 relative" data-aos="fade-up">
        <h2 class="text-6xl font-extrabold text-purple font-nerko uppercase">Mapas Mentais</h2>

        <p class="w-full mx-auto my-4 text-justify font-medium text-[#202020] text-2xl font-mukta">Procuramos a melhor metodologia de ensino que promova majoritariamente a fixação do conteúdo para nossos alunos. Portanto, cada módulo contém um mapa mental que irá resumir todo conteúdo apresentado, mapas esses que estarão disponíveis para download em suas respectivas páginas.</p>
      </div>

      <div class="flex flex-col flex-1 items-center jusfify-start gap-[4rem]" data-aos="fade-up">
        <img src="{{BASE}}gifs/user.gif" class="w-full max-w-[25rem] rounded-xl" alt="Laptop" />
      </div>

    </section>

    <!-- third section -->
    <section class="px-6 my-10 py-6 w-[90vw] m-auto" data-aos="fade-up">
      <div class="bg-darkpurple p-6 flex flex-col sm:flex-row flex-wrap rounded-md text-white font-bold items-center justify-center gap-4 max-w-[900px] w-full mx-auto drop-shadow-md">
        <a href="{{BASE}}feedback" class="relative text-darkpurple bg-orange rounded-md p-4 hover:-translate-y-1 transition duration-300 after:content[''] after:block after:absolute after:bg-orange after:w-[25px] after:h-[25px] after:rounded-md after:rotate-45 after:bottom-[-8px] after:left-[20px]">
          Dê-nos seu Feedback
        </a>
        <p class="flex-1">Sua Opinião é muito importante para nós assim podemos melhorar a sua experiência na nossa plataforma.
      </div>
    </section>
  </main>

  <!-- Footer -->
  {% embed "components/footer.twig.php" %}{% endembed %}

</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script>
  new Typed('#playground', {
    strings: ['Playground'],
    typeSpeed: 40,
    backSpeed: 15,
    backDelay: 2000,
    loop: false,
    loopCount: Infinity,
    showCursor: false,
  });
</script> -->

{% endblock %}