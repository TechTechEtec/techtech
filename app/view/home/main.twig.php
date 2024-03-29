{% extends "partials/body.twig.php" %}

{% block title %} Home | Techtech {% endblock %}

{% block body %}
  <div class="w-screen absolute h-[5.625rem] md:w-[170vw] md:h-[60rem] md:md:h-[63rem] bg-lightpurple dark:bg-lighteerie md:top-[-80%] md:left-[-20%] md:skew-y-3 md:-rotate-[20deg] z-[-1] p-[1.5rem]">
    <div class="hidden md:block relative w-full h-full bg-lightpurple dark:bg-lighteerie brightness-[1.15]"></div>
  </div>

    <!-- Toogle Dark/Light Button -->
    <div class="fixed bottom-[0.625rem] right-[0.625rem] z-10">
      {% embed "components/toggleDarkModeButton.twig.php" %} {% endembed%}
    </div>

  <!-- bg-[url({{BASE}}svgs/background.svg)] bg-cover  bg-center  -->
<div class="w-screen h-auto relative overflow-x-hidden" >

  <!-- HEADER CONTENT --> 
   <header class="flex justify-between p-[1rem] items-center w-full">	
    <!-- Logo -->	
    <img class="flex-none w-[5rem h-[5rem]" src="{{BASE}}svgs/techtechlogo.svg" alt="TechTech Logo">	
    <!-- NAVIGATION -->	
    <nav class="flex flex-row items-center gap-[1rem]">	
      <ul class="text-darkpurple font-bold text-3xl flex flex-col items-center justify-center drop-shadow-xl px-[1.5rem] py-[2.5rem] z-10 bg-darkwhite fixed top-0 right-0 h-screen w-screen md:items-start md:justify-start md:w-[40%] lg:h-auto lg:relative lg:flex-row lg:bg-transparent lg:p-0 lg:items-center gap-[1rem] lg:gap-[1.5rem] lg:w-auto hidden lg:flex home-menu dark:bg-lighteerie dark:lg:bg-transparent dark:text-purple">

        <li class="hover:translate-y-[-0.1875rem] ease duration-300 cursor-pointer absolute top-[1.5rem] right-[1.5rem] lg:hidden text-darkpurple text-5xl dark:text-purple" onclick="toggleHomeMenu()">	
          <i class="ph-x-circle"></i>
        </li>	
        <li class="hover:text-purple dark:hover:text-darkpurple dark:text-purple"><a href="{{BASE}}portfolio" onclick="toggleHomeMenu()">Projeto</a></li>	
        <li class="hover:text-purple dark:hover:text-darkpurple dark:text-purple"><a href="{{BASE}}portfolio#platform" onclick="toggleHomeMenu()">Plataforma</a></li>	
        <li class="hover:text-purple dark:hover:text-darkpurple dark:text-purple"><a href="{{BASE}}portfolio#plan" onclick="toggleHomeMenu()">Plano de Curso</a></li>	
        <li class="hover:text-purple dark:hover:text-darkpurple dark:text-purple"><a href="{{BASE}}portfolio#team" onclick="toggleHomeMenu()">Equipe</a></li>		
      </ul>	
      	
      <button class="lg:hidden border-none bg-none p-[1rem] cursor-pointer text-darkpurple dark:text-purple text-5xl" onclick="toggleHomeMenu()">	
        <i class="ph-list"></i>
      </button>	
      <!-- Login Button -->	
      <a href="{{BASE}}signin" class="bg-orange rounded-full px-[0.75rem] h-10 ml-[1rem] text-white dark:text-darkerPurple flex items-center group hover:-translate-y-1 transition-all ease-linear duration-100  ring-2 ring-orange ring-offset-4 ring-offset-lightpurple dark:ring-offset-lighteerie">	
        <i class="ph-user"></i>	
        <span class="pl-[0.5rem]">Entrar</span>	
      </a>	
    </nav>	
  </header>

  <!-- MAIN CONTENT --> 
  <main class="mt-[4rem] md:mt-[2rem]">

    <!-- first section -->
    <section class="px-4 w-[90vw] min-h-[75vh] mx-auto relative p-[1rem] flex flex-col items-stretch justify-between gap-[2.5rem]" data-aos="fade-up">
      <div class="flex flex-col justify-around items-start m-auto w-full gap-[3rem] md:gap-[1.5rem] 2md:flex-col lg:flex-row lg:items-start lg:justify-around">
        <div class="flex flex-1 flex-col items-start justify-evenly">

          <h1 class="text-4xl text-darkpurple dark:text-purple font-mukta font-bold min-h-[3.125rem]">Comece a aprender agora mesmo!</h1>

          <p class="text-gray-600 dark:text-grey text-justify mt-[2.5rem] mb-[1.25rem] text-lg w-full max-w-[35rem] font-medium font-roboto subpixel-antialiased">Ensino tecnológico acessível para crianças, um projeto sem fins lucrativos desenvolvido por estudantes, para auxiliar estudantes, com a finalidade de apresentar o mundo tecnológico de outra forma para crianças, e assim ampliar seus horizontes.</p>

          <div class="flex flex-row gap-[1rem] justify-start items-center w-full mt-[1.5rem]">
            <a href="{{BASE}}choose-signup" class="bg-orange text-darkerPurple font-bold p-[0.5rem] rounded-xl hover:-translate-y-1 transition-all ease-linear duration-100 ring-2 ring-orange ring-offset-4 ring-offset-lightpurple dark:ring-offset-lighteerie">Cadastre-se</a>
          </div>

        </div>

        <div class="flex flex-1 items-center items-center justify-center w-full max-w-[31.25rem] mx-auto mt-[3rem] md:mt-[0rem]">
          <iframe src="https://streamable.com/e/mxf2z7?nocontrols=1&loop=0" width="500" height="300" style="background:#1B99AB60; border:2px solid #12688E;border-radius:0.25rem;margin-bottom: 1rem; padding: 0.8rem;"></iframe>
        </div>
      </div>

      <a href="#second_section" class="w-min mx-auto text-darkpurple dark:text-violet text-5xl ">
      <i class="ph-arrow-circle-down"></i>
      </a>
    
    </section>

    <!-- second section -->
    <section class="px-[1.5rem] pb-[2.5rem] mt-[3.5rem] w-[90vw] mx-auto" id="second_section" data-aos="fade-up">

      <h1 class="text-3xl font-extrabold text-darkpurple dark:text-purple mb-[2rem] font-clean">Saiba mais!</h1>

      <div class="flex flex-col 2sm:flex-row w-full justify-between items-center text-pink-500 dark:text-pink gap-[1.5rem]">

        <a href="{{BASE}}portfolio#platform" class="hover:-translate-y-[0.5rem] transition duration-300">
          <div class="text-center">
              <img class="shadow-xl dark:drop-shadow-[0_2.1875rem_2.1875rem_rgba(80,50,90,0.25)] rounded-md" src="{{BASE}}svgs/plataforma.svg" alt="Plano de Curso">
              <p class="mt-[1rem] font-bold font-roboto text-2xl">Plataforma</p>
            </div>
        </a>

        <a href="{{BASE}}portfolio#plan" class="hover:-translate-y-[0.5rem] transition duration-300">
          <div class="text-center">
              <img class="shadow-xl dark:drop-shadow-[0_2.1875rem_2.1875rem_rgba(80,50,90,0.25)] rounded-md" src="{{BASE}}svgs/planos_de_curso.svg" alt="Escolas Participantes">
              <p class="mt-[1rem] font-bold font-roboto text-2xl">Plano de Curso</p>
          </div>
        </a>

        <a href="{{BASE}}portfolio#team" class="hover:-translate-y-[0.5rem] transition duration-300">
          <div class="text-center">
            <img class="shadow-xl dark:drop-shadow-[0_2.1875rem_2.1875rem_rgba(80,50,90,0.25)] rounded-md" src="{{BASE}}svgs/equipe.svg" alt="Equipe">
            <p class="mt-[1rem] font-bold font-roboto text-2xl">Equipe</p>
          </div>
        </a>
      </div>
      
    </section>

    <!-- Parallax Effect -->
    <section class="bg-[url({{BASE}}imgs/parallax.png)] dark:bg-[url({{BASE}}imgs/parallax-dark.png)] min-h-[12.5rem] md:min-h-[25rem] bg-fixed bg-center bg-contain relative transition-all duration-200 ease shadow-md">
      <div class="hidden dark:block w-full h-full absolute top-0 left-0 right-0 bottom-0 z-[10] backdrop-contrast-[0.75] backdrop-brightness-[2] bg-[rgba(236, 194, 255,0.2)]"></div>
    </section>

    <!-- third section -->
    <section class="px-[1.5rem] pb-[1rem] mt-[8rem] w-[90vw] mx-auto flex flex-col md:flex-row items-start justify-evenly gap-[3rem]" id="second_section">

      <div class="flex flex-col flex-1 items-center jusfify-start gap-[4rem]" data-aos="fade-up">
        <h2 class="text-6xl font-extrabold text-purple font-nerko uppercase">Acesse de qualquer lugar!</h2>

        <p class="w-full mx-auto my-[1rem] text-justify font-medium text-[#202020] dark:text-grey text-2xl font-mukta"> A plataforma TechTech foi desenvolvida por uma equipe eficiente e capacitada para oferecer à seus usuários a melhor da acessibilidade e usabilidade. Você pode usufruir da plataforma em qualquer dispositivo desde que haja uma conexão de internet.</p>
      </div>

      <div class="flex flex-col flex-1 items-center jusfify-start gap-[1rem] relative" data-aos="fade-up">
        <img src="{{BASE}}imgs/devices.png" class="w-full max-w-[62.5rem]" alt="Laptop" />
      </div>
      
    </section>

   <hr class="drop-shadow-lg dark:border-purple dark:drop-shadow-[0_2.1875rem_2.1875rem_rgba(80,50,90,0.25)]"/>

    <!-- forth section -->
    <section class="px-[1rem] md:px-[3rem] py-[5rem] mt-[4rem] w-screen mx-auto flex flex-col-reverse md:flex-row items-start justify-evenly gap-[3rem]" id="second_section">

      <div class="flex flex-col flex-1 items-center jusfify-start gap-[4rem]" data-aos="fade-up">
        <img src="{{BASE}}imgs/terminal.png" class="w-full max-w-[62.5rem] rounded-xl" alt="Laptop" />
      </div>

      <div class="flex flex-col flex-1 items-start jusfify-start gap-6 relative" data-aos="fade-up">
        <h2 class="text-6xl font-extrabold text-orange font-nerko uppercase">Playground</h2>

        <p class="w-full mx-auto my-[1rem] text-justify font-medium text-[#202020] dark:text-grey text-2xl font-mukta">Caso você queira, você pode utilizar do nosso editor de código embutido na aba <span class="text-darkpurple text-bold font-nerko">playground</span>. Lá você conseguirá rodar códigos em Portugol e receber o resultado da execução em tempo real. Além disso é possível importar e exportar os códigos que você estiver testando.</p>
      </div>

    </section>

    <hr class="drop-shadow-lg dark:border-purple dark:drop-shadow-[0_2.1875rem_2.1875rem_rgba(80,50,90,0.25)]"/>

      <!-- fifth section -->
    <section class="pb-[1rem] mt-[8rem] w-[90vw] mx-auto flex flex-col md:flex-row items-start justify-evenly gap-[3rem]" id="second_section">

      <div class="flex flex-col flex-1 items-start jusfify-start gap-[1.5rem] relative" data-aos="fade-up">
        <h2 class="text-6xl font-extrabold text-purple font-nerko uppercase">Mapas Mentais</h2>

        <p class="w-full mx-auto my-[1rem] text-justify font-medium text-[#202020] dark:text-grey text-2xl font-mukta">Procuramos a melhor metodologia de ensino que promova majoritariamente a fixação do conteúdo para nossos alunos. Portanto, cada módulo contém um mapa mental que irá resumir todo conteúdo apresentado, mapas esses que estarão disponíveis para download em suas respectivas páginas.</p>
      </div>

      <div class="flex flex-col flex-1 items-center jusfify-start gap-[4rem]" data-aos="fade-up">
        <img src="{{BASE}}gifs/user.gif" class="w-full max-w-[25rem] rounded-xl" alt="Laptop" />
      </div>

    </section>

    <!-- third section -->
    <section class="px-[1.5rem] my-[2.5rem] py-[1.5rem] w-[90vw] m-auto" data-aos="fade-up">
      <div class="bg-darkpurple p-[1.5rem] flex flex-col sm:flex-row flex-wrap rounded-md text-white font-bold items-center justify-center gap-[1rem] max-w-[56.25rem] w-full mx-auto drop-shadow-md">
        <a href="{{BASE}}feedback" class="relative text-darkpurple bg-orange rounded-md p-4 hover:-translate-y-1 transition duration-300 after:content[''] after:block after:absolute after:bg-orange after:w-[1.5625rem] after:h-[1.5625rem] after:rounded-md after:rotate-45 after:bottom-[-0.5rem] after:left-[1.25rem]">
          Dê-nos seu Feedback
        </a>
        <p class="flex-1">Sua Opinião é muito importante para nós, assim podemos melhorar a sua experiência na nossa plataforma.
      </div>
    </section>
  </main>

  <!-- Footer -->
  {% embed "components/footer.twig.php" %}{% endembed %}

</div>

{% endblock %}