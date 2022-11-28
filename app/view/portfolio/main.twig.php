{% extends "partials/body.twig.php" %}

{% block title %} Portfolio | Techtech {% endblock %}

{% block body %}

<div class="w-full mx-auto h-[90vh] 2sm:rounded-b-[30%] py-6 bg-darkerPurple dark:bg-lighteerie bg-[url({{BASE}}svgs/Random_shit.svg)] bg-cover bg-cover absolute z-[-1]" data-aos="fade-down">
</div>

<!-- Toogle Dark/Light Button -->
<div class="fixed bottom-[10px] right-[10px] z-10">
  {% embed "components/toggleDarkModeButton.twig.php" %} {% endembed%}
</div>

<div class="w-full relative">
   <header class="w-full"> 
    <nav class="w-full flex flex-row items-center gap-[1rem] px-6 justify-between items-center w-full z-0">
      <img class="flex-none w-20 h-20" src="{{BASE}}svgs/techtechlogo.svg" alt="TechTech Logo"/>

        <ul class="text-darkpurple font-bold text-3xl flex flex-col items-center justify-center drop-shadow-xl px-6 py-10 z-10 bg-darkwhite fixed top-0 right-0 h-screen w-screen md:items-start md:justify-start md:w-[40%] lg:h-auto lg:relative lg:flex-row lg:bg-transparent lg:p-0 lg:items-center gap-[1rem] lg:gap-[2.5rem] lg:w-auto hidden lg:flex home-menu dark:bg-lighteerie dark:lg:bg-transparent dark:text-purple">

          <li class="hover:translate-y-[-3px] ease duration-300 cursor-pointer absolute top-6 right-6 lg:hidden text-darkpurple text-5xl" onclick="toggleHomeMenu()" >
          <i class="ph-x-circle"></i>
          </li>
          <li class="hover:text-lightpurple "><a href="{{BASE}}">Início</a></li>
          <li class="hover:text-lightpurple "><a href="#techtech">Projeto</a></li>
          <li class="hover:text-lightpurple "><a href="#platform">Plataforma</a></li>
          <li class="hover:text-lightpurple "><a href="#plan">Plano</a></li>
          <li class="hover:text-lightpurple "><a href="#team">Equipe</a></li>
        </ul>

        <div class="flex flex-row justify-stretch items-center gap-[1rem]">
          <button class="lg:hidden border-none bg-none p-4 cursor-pointer text-purple text-5xl" onclick="toggleHomeMenu()">
            <i class="ph-list"></i>
          </button>

          <!-- Signup Button -->
          <a href="{{BASE}}choose-signup" class="text-[0.8rem] sm:text-md bg-orange rounded-full px-3 h-10 text-white flex items-center group  ring-2 ring-orange ring-offset-4 ring-offset-darkerPurple dark:ring-offset-lighteerie hover:-translate-y-1 transition-all ease-linear duration-100">
            <i class="ph-user"></i>
            <span class="pl-2">Cadastre-se</span>
          </a>
        </div>
    </nav>

    <div class="w-full flex flex-col px-10 sm:px-20 md:px-35 lg:px-40 gap-[3rem] items-center justify-center mt-[6rem] md:flex-row md:gap-[3rem] md:justify-center">

      <div class="flex-1 items-center text-3xl w-[90%] mx-auto font-bold flex flex-col items-center justify-center gap-[2rem]">
          <h1 class="w-full font-mukta text-left text-5xl sm:text-7xl text-orange" data-aos="zoom-in-up">TechTech</h1>

          <p class="w-full font-mukta text-left text-3xl sm:text-5xl text-purple" data-aos="zoom-in-up">Lógica de Programação para Crianças</p>
      </div>

      <lottie-player 
        src="https://lottie.host/eca6cef8-106c-4b29-abcf-2b01a8d4fe26/tA9wrpf6hA.json" 
        background="transparent" 
        speed="1" 
        class="w-[300px] h-[300px] flex-1 md:w-[400px] md:h-[400px]"
        loop autoplay 
      ></lottie-player>

    </div>
    </header>

  <!-- Sections -->
  <main class="px-6">
    <!-- TechTech -->
    <section class="p-3 md:p-7 lg:p-32 mt-[3rem] 2sm:mt-[5rem] md:mt-[12rem] w-full h-full shadow-md" data-aos="fade-up" id="techtech">
      <h1 class="text-4xl text-purple font-extrabold font-nerko mt-8">TechTech</h1>
      
      <div class="w-full flex flex-col gap-[1rem] items-center justify-center md:flex-row">
        <lottie-player src="https://lottie.host/726cfe36-37c2-495b-b50e-719740134a8d/2go1Vp4tyZ.json" background="transparent" speed="1" loop autoplay class="w-[250px] h-[250px] md:w-[350px] md:h-[350px] mt-[7rem]"></lottie-player>

        <div class="space-y-5 w-[90%] md:w-[70%] dark:text-grey">
            <p class="w-full font-clean text-xl text-justify mt-[3rem]">A TechTech é um projeto sem fins lucrativos desenvolvido por estudantes, para auxiliar estudantes. </p>
            <p class="w-full font-clean text-xl text-justify">Diante da modernização do mundo e do mercado de trabalho é essencial introduzir disciplinas tecnológicas logo na infância. Por essa razão criou-se essa solução para amparar as crianças do ensino público nesse processo de inovação.</p>
            <p class="w-full font-clean text-xl text-justify">A plataforma TechTech surgiu durante o desenvolvimento de um Trabalho de Conclusão de Curso. É um sistema que tem como finalidade apresentar o mundo tecnológico de outra forma para crianças, e assim ampliar seus horizontes. Por meio de uma abordagem mais lúdica e prática a TechTech visa ensinar lógica de programação para o público infantil, principalmente as crianças matriculadas em escolar públicas. É desse modo que a plataforma transformará o acesso a educação de qualidade em algo mais democrático, ao mesmo tempo que também atende outros públicos.</p>
        </div>
      </div>
    </section>
    
    <hr class="drop-shadow-lg dark:border-purple dark:drop-shadow-[0_35px_35px_rgba(80,50,90,0.25)]"/>

    <!-- Platform -->
    <section class="p-3 md:p-7  lg:p-32  w-full h-full shadow-md" data-aos="fade-up" id="platform">
      <h1 class="text-4xl text-purple font-extrabold font-nerko font-bold text-left md:float-right mt-8">Plataforma</h1>

      <div class="w-full flex flex-col-reverse gap-[1rem] items-center justify-center md:flex-row">

        <div class="space-y-5 w-[90%] md:w-[70%] dark:text-grey">
          <p class="w-full  font-clean text-xl text-justify">O sistema é totalmente online, conta com a dinâmica de logins, o que permite o acesso de qualquer lugar ou dispositivo. A plataforma também possui um design intuitivo para que o aluno possa utilizar todas as funcionalidades.  </p>

          <p class="w-full  font-clean text-xl text-justify">O fluxo é o seguinte: as escolas se cadastram e criam turmas identificadas por um código, esse código é compartilhado com os alunos para que eles consigam acessa-las. Em seguida, o aluno pode aproveitar todos os recursos que a plataforma oferece como, por exemplo, administração dos dados de seu perfil, acesso aos módulos de conteúdo, visualização de seu progresso no curso, acesso ao histórico de atividades realizadas no curso, e ainda um ranking de progresso de sua turma e seus colegas. </p>

          <p class="w-full font-clean text-xl text-justify">Além disso, os professores desempenham papel fundamental por aqui, a plataforma é definida por uma hierarquia como na escola, sendo assim, é o professor que será responsável pela administração da turma e liberação das atividades para os alunos, bem como a avaliação de seu progresso. </p>

          <p class="w-full font-clean text-xl text-justify">Essa é a estrutura que a plataforma oferece para que as escolas sejam incorporadas a esse projeto. </p>
        </div>

        <lottie-player src="https://lottie.host/dc0b3bb8-d8f7-4287-877f-16c4d8222680/YMPQHEQnXQ.json" background="transparent" speed="1" loop autoplay class="w-[250px] h-[250px] md:w-[350px] md:h-[350px] mt-[7rem]"></lottie-player>  
      </div>
    </section>

    <hr class="drop-shadow-lg dark:border-purple dark:drop-shadow-[0_35px_35px_rgba(80,50,90,0.25)]"/>

    <!-- Course Plan -->
    <section class="p-3 md:p-12  lg:p-32 w-full h-full shadow-md" data-aos="fade-up" id="plan">
      <h1 class="text-4xl text-purple font-extrabold font-nerko font-bold mt-8">Plano de Curso</h1>
        
      <div class="w-full flex flex-col gap-[1rem] items-center justify-center md:flex-row">
        <lottie-player src="https://lottie.host/5f1b8566-eb71-4861-82f5-1379e29fc48a/hJ99ijOAbk.json" background="transparent" speed="1" loop autoplay class="w-[250px] h-[250px] md:w-[350px] md:h-[350px] mt-[7rem]"></lottie-player>

        <div class="space-y-5 w-[90%] md:w-[70%] dark:text-grey">
          <p class="w-full font-clean text-xl text-justify mt-[3rem]">O curso disponibilizado pela TechTech foi pensado para atender o público infantil do início ao fim, por isso o plano de curso é também um guia que demonstra todo o caminho a ser percorrido pelos pequenos.</p>

          <p class="w-full font-clean text-xl text-justify">O plano foi desenvolvido por programadores que já possuem experiência, por isso é com muita responsabilidade que o curso apresenta essa etapa inicial do aprendizado de programação.</p>

          <p class="w-full font-clean text-xl text-justify">Todos os assuntos foram adicionados no plano para construir um conhecimento sólido e linear, dessa maneira, as crianças aprenderam seguindo uma ordem que possibilitará, progressivamente, um aprendizado completo. Seguindo esse plano não só as crianças perceberam sua evolução, mas também os docentes, pais e responsáveis.</p> 
        </div>
      </div>

      <div class="w-full flex items-center justify-center md:justify-end gap-[1rem] mt-[3rem]">
        <a href="https://drive.google.com/file/d/1dc2U7pMU75sO6Dx--TtHIjdDy8XmtxKt/view?usp=sharing" class="font-bold text-lg flex flex-row gap-[1.rem] items-center justify-center text-eerie dark:text-pink-500">
          <span>Plano de Curso</span>
          <i class="ph-file-pdf text-3xl"></i>
        </a>
      </div>

    </section>
    
    <hr class="drop-shadow-lg dark:border-purple dark:drop-shadow-[0_35px_35px_rgba(80,50,90,0.25)]"/>

    <!-- TEAM -->
    <section class="p-12 w-full h-full items-center" data-aos="fade-up" id="team">
      <div class="w-full flex flex-row lg:space-x-15 lg:justify-center">
          <h1 class="text-4xl text-purple font-extrabold font-nerko font-bold jusify-center mt-8">Equipe</h1>
          
          <lottie-player src="https://lottie.host/94fe4618-2bee-4916-80b3-738ee01d95ff/HbIzCLuynM.json" background="transparent" speed="1" style="width: 190px; height: 190px;" loop autoplay class="mt-[-5rem]"></lottie-player>
      </div>

      <!-- Team profiles -->
      <div class="flex flex-wrap gap-[2rem] items-center justify-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">

        <!-- Marina Nogueira -->
        <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="flex flex-col justify-center items-stretch py-4 gap-[2rem] md:gap-[1.5rem] px-8 bg-white dark:bg-lighteerie rounded-lg border border-grey dark:border-purple shadow-lg opacity-90 transition-all ease-linear duration-200 delay-150 hover:-translate-y-1 hover:scale-110 duration-300 hover:border-lightpurple dark:hover:border-lightpurple hover:opacity-100" data-aos="fade-down" data-aos-duration="100">

              <img src="{{BASE}}imgs/team/marina.png" class="w-full h-full max-w-[9.375rem] max-h-[9.375rem] rounded-full">

              <div class="flex flex-col items-center justify-center gap-[1.5rem] text-eerie dark:text-grey">
                  <h1 class="font-bold text-xl">Marina Nogueira</h1>

                  <div class="w-full h-auto flex items-center justify-center justify-center gap-[1.5rem] text-3xl font-bold">
                      <a href="linkedin.com/in/marina-lima-nogueira-92758b221">
                        <i class="ph-linkedin-logo"></i>
                      </a>
                      <a href="https://github.com/malizzy-b">
                        <i class="ph-github-logo"></i>
                      </a>
                  </div>
            </div>
        </div>

        <!-- Sabrina Tavares -->
        <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="flex flex-col justify-center items-stretch py-4 gap-[2rem] md:gap-[1.5rem] px-8 bg-white dark:bg-lighteerie rounded-lg border border-grey dark:border-purple shadow-lg opacity-90 transition-all ease-linear duration-200 delay-150 hover:-translate-y-1 hover:scale-110 duration-300 hover:border-lightpurple dark:hover:border-lightpurple hover:opacity-100" data-aos="fade-down" data-aos-duration="140">

              <img src="{{BASE}}imgs/team/sabrina.png" class="w-full h-full max-w-[9.375rem] max-h-[9.375rem] rounded-full">

              <div class="flex flex-col items-center justify-center gap-[1.5rem] text-eerie dark:text-grey">

                  <h1 class="font-bold text-xl">Sabrina Tavares</h1>

                  <div class="w-full h-auto flex items-center justify-center justify-center gap-[1.5rem] text-3xl font-bold">
                      <a href="linkedin.com/in/sabrina-tavares-teves-57189320b">
                        <i class="ph-linkedin-logo"></i>
                      </a>
                      <a href="https://github.com/VixiSabrina">
                        <i class="ph-github-logo"></i>
                      </a>
                  </div>
            </div>
        </div>

        <!-- Sophia Cambuim -->
        <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="flex flex-col justify-center items-stretch py-4 gap-[2rem] md:gap-[1.5rem] px-8 bg-white dark:bg-lighteerie rounded-lg border border-grey dark:border-purple shadow-lg opacity-90 transition-all ease-linear duration-200 delay-150 hover:-translate-y-1 hover:scale-110 duration-300 hover:border-lightpurple dark:hover:border-lightpurple hover:opacity-100" data-aos="fade-down" data-aos-duration="140">

              <img src="{{BASE}}imgs/team/sophia.png" class="w-full h-full max-w-[9.375rem] max-h-[9.375rem] rounded-full">

              <div class="flex flex-col items-center justify-center gap-[1.5rem] text-eerie dark:text-grey">
                  <h1 class="font-bold text-xl">Sophia Cambuim</h1>

                  <div class="w-full h-auto flex items-center justify-center justify-center gap-[1.5rem] text-3xl font-bold">
                      <a href="linkedin.com/in/sophia-cambuim-07a561240">
                        <i class="ph-linkedin-logo"></i>
                      </a>
                      <a href="https://github.com/sophzt">
                        <i class="ph-github-logo"></i>
                      </a>
                  </div>
            </div>
        </div>

        <!-- Victor Silva -->
        <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="flex flex-col justify-center items-stretch py-[1rem] gap-[2rem] md:gap-[1.5rem] px-[2rem] bg-white dark:bg-lighteerie rounded-lg border border-grey dark:border-purple shadow-lg opacity-90 transition-all ease-linear duration-200 delay-150 hover:-translate-y-1 hover:scale-110 duration-300 hover:border-lightpurple dark:hover:border-lightpurple hover:opacity-100" data-aos="fade-down" data-aos-duration="140">
              <img src="{{BASE}}imgs/victorr.png" class="w-full h-full max-w-[10rem] max-h-[9.375rem] rounded-full">

              <div class="flex flex-col items-center justify-center gap-[1.5rem] text-eerie dark:text-grey">
                  <h1 class="font-bold text-xl">Victor Silva</h1>

                  <div class="w-full h-auto flex items-center justify-center justify-center gap-[1.5rem] text-3xl font-bold">
                      <a href="https://www.linkedin.com/in/victorsilvadev/">
                        <i class="ph-linkedin-logo"></i>
                      </a>
                      <a href="https://www.github.com/VictorSilva15">
                        <i class="ph-github-logo"></i>
                      </a>
                  </div>
            </div>
        </div>

        <!-- Vitor Aquino -->
        <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="flex flex-col justify-center items-stretch py-4 gap-[2rem] md:gap-[1.5rem] px-8 bg-white dark:bg-lighteerie rounded-lg border border-grey dark:border-purple shadow-lg opacity-90 transition-all ease-linear duration-200 delay-150 hover:-translate-y-1 hover:scale-110 duration-300 hover:border-lightpurple dark:hover:border-lightpurple hover:opacity-100" data-aos="fade-down" data-aos-duration="180">

              <img src="{{BASE}}imgs/team/vitor.png" class="w-full h-full max-w-[9.375rem] max-h-[9.375rem] rounded-full">

              <div class="flex flex-col items-center justify-center gap-[1.5rem] text-eerie dark:text-grey">

                  <h1 class="font-bold text-xl">Vitor Aquino</h1>
                  <div class="w-full h-auto flex items-center justify-center justify-center gap-[1.5rem] text-3xl font-bold">
                      <a href="https://www.github.com/vitto177/">
                        <i class="ph-github-logo"></i>
                      </a>
                  </div>
            </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Feedback -->
  <section class="px-[1.5rem] my-10 py-[1.5rem] w-[90%] mx-auto" data-aos="fade-up">
    <div class="bg-darkerPurple p-[1.5rem] flex flex-col md:flex-row rounded-md text-white font-bold items-center justify-center gap-[1.5rem] max-w-[900px] w-full mx-auto drop-shadow-md">
      
      <a href="{{BASE}}feedback" class="relative text-darkpurple bg-orange rounded-md p-4 hover:-translate-y-1 transition duration-300 after:content[''] after:block after:absolute after:bg-orange after:w-[25px] after:h-[25px] after:rounded-md after:rotate-45 after:bottom-[-0.5rem] after:left-[1.25rem]">
        Dê-nos seu Feedback
      </a>

      <p class="flex-1 text-white font-bold text-xl text-justify">Sua Opinião é muito importante para nós assim podemos melhorar a sua experiência na nossa plataforma.</p>
    </div>
  </section>

  <!-- Footer -->
  {% embed "components/footer.twig.php" %}{% endembed %}

</div>


{% endblock %}

