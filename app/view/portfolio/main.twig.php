{% extends "partials/body.twig.php" %}

{% block title %} Portfolio | Techtech {% endblock %}

{% block body %} 
  <div class="w-screen h-screen m-0 rounded-b-full z-[-1] py-6 px-4 bg-darkerPurple bg-[url({{BASE}}svgs/Random_shit.svg)] bg-cover bg-repeat-x absolute bg-cover" data-aos="fade-down">

    <header class="w-full"> 
      <nav class="flex flex-row items-center gap-4 px-6 justify-between items-center w-full z-0">
        <img class="flex-none w-20 h-20" src="{{BASE}}svgs/techtechlogo.svg" alt="TechTech Logo"/>

          <ul class="text-purple font-bold text-xl flex flex-col items-center justify-center drop-shadow-xl px-6 py-10 bg-white fixed top-0 right-0 h-screen w-screen md:items-start md:justify-start md:w-[40%] lg:h-auto lg:relative lg:flex-row lg:bg-transparent lg:p-0 lg:items-center gap-4 lg:gap-10 lg:w-auto hidden lg:flex home-menu z-[999]">

            <li class="hover:translate-y-[-3px] ease duration-300 cursor-pointer absolute top-6 right-6 lg:hidden" onclick="toggleHomeMenu()" >
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#4d3a92" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="96" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></circle><line x1="160" y1="96" x2="96" y2="160" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="160" y1="160" x2="96" y2="96" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line></svg>
            </li>
            <li class="hover:text-lightpurple "><a href="{{BASE}}">Início</a></li>
            <li class="hover:text-lightpurple "><a href="#techtech">Projeto</a></li>
            <li class="hover:text-lightpurple "><a href="#platform">Plataforma</a></li>
            <li class="hover:text-lightpurple "><a href="#plan">Plano de Curso</a></li>
            <li class="hover:text-lightpurple "><a href="#team">Equipe</a></li>
          </ul>

          <div class="flex flex-row justify-stretch items-center gap-[1rem]">
            <button class="lg:hidden border-none bg-none p-4 cursor-pointer" onclick="toggleHomeMenu()">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#4d3a92" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><line x1="40" y1="128" x2="216" y2="128" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="40" y1="64" x2="216" y2="64" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="40" y1="192" x2="216" y2="192" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line></svg>
            </button>

            <!-- Signup Button -->
            <a href="{{BASE}}choose-signup" class="bg-orange rounded-full px-3 h-10 text-white flex items-center group">
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
    <main>
      <!-- TechTech -->
      <section class="p-7 bg-white lg:p-32 mt-[8rem] lg:mt-[12rem] w-full h-full shadow-md" data-aos="fade-up" id="techtech">
        <h1 class="text-4xl text-lightpurple font-bold">TechTech</h1>
        
        <div class="w-full flex flex-col gap-4 items-center justify-center md:flex-row">
          <lottie-player src="https://lottie.host/726cfe36-37c2-495b-b50e-719740134a8d/2go1Vp4tyZ.json" background="transparent" speed="1" loop autoplay class="w-[250px] h-[250px] md:w-[350px] md:h-[350px] mt-[7rem]"></lottie-player>

          <div class="space-y-5 w-[90%] md:w-[70%]">
              <p class="w-full font-clean text-xl text-justify mt-[3rem]">A TechTech é um projeto sem fins lucrativos desenvolvido por estudantes, para auxiliar estudantes. </p>
              <p class="w-full font-clean text-xl text-justify">Diante da modernização do mundo e do mercado de trabalho é essencial introduzir disciplinas tecnológicas logo na infância. Por essa razão criou-se essa solução para amparar as crianças do ensino público nesse processo de inovação.</p>
              <p class="w-full font-clean text-xl text-justify">A plataforma TechTech surgiu durante o desenvolvimento de um Trabalho de Conclusão de Curso. É um sistema que tem como finalidade apresentar o mundo tecnológico de outra forma para crianças, e assim ampliar seus horizontes. Por meio de uma abordagem mais lúdica e prática a TechTech visa ensinar lógica de programação para o público infantil, principalmente as crianças matriculadas em escolar públicas. É desse modo que a plataforma transformará o acesso a educação de qualidade em algo mais democrático, ao mesmo tempo que também atende outros públicos.</p>
          </div>
        </div>
      </section>
      
      <hr>

      <!-- Platform -->
      <section class="p-7 lg:p-32 bg-white w-screen w-full h-full shadow-md" data-aos="fade-up" id="platform">
        <h1 class="text-4xl text-darkerPurple font-bold text-left md:float-right">Plataforma</h1>

        <div class="w-full flex flex-col-reverse gap-4 items-center justify-center md:flex-row">

          <div class="space-y-5 w-[90%] md:w-[70%]">
            <p class="w-full  font-clean text-xl text-justify">O sistema é totalmente online, conta com a dinâmica de logins, o que permite o acesso de qualquer lugar ou dispositivo. A plataforma também possui um design intuitivo para que o aluno possa utilizar todas as funcionalidades.  </p>

            <p class="w-full  font-clean text-xl text-justify">O fluxo é o seguinte: as escolas se cadastram e criam turmas identificadas por um código, esse código é compartilhado com os alunos para que eles consigam acessa-las. Em seguida, o aluno pode aproveitar todos os recursos que a plataforma oferece como, por exemplo, administração dos dados de seu perfil, acesso aos módulos de conteúdo, visualização de seu progresso no curso, acesso ao histórico de atividades realizadas no curso, e ainda um ranking de progresso de sua turma e seus colegas. </p>

            <p class="w-full font-clean text-xl text-justify">Além disso, os professores desempenham papel fundamental por aqui, a plataforma é definida por uma hierarquia como na escola, sendo assim, é o professor que será responsável pela administração da turma e liberação das atividades para os alunos, bem como a avaliação de seu progresso. </p>

            <p class="w-full font-clean text-xl text-justify">Essa é a estrutura que a plataforma oferece para que as escolas sejam incorporadas a esse projeto. </p>
          </div>

          <lottie-player src="https://lottie.host/dc0b3bb8-d8f7-4287-877f-16c4d8222680/YMPQHEQnXQ.json" background="transparent" speed="1" loop autoplay class="w-[250px] h-[250px] md:w-[350px] md:h-[350px] mt-[7rem]"></lottie-player>  
        </div>
      </section>

      <hr>

      <!-- Course Plan -->
      <section class="p-12 lg:p-32 w-full h-full shadow-md" data-aos="fade-up" id="plan">
        <h1 class="text-4xl text-darkpurple font-bold">Plano de Curso</h1>
          
        <div class="w-full flex flex-col gap-4 items-center justify-center md:flex-row">
          <lottie-player src="https://lottie.host/5f1b8566-eb71-4861-82f5-1379e29fc48a/hJ99ijOAbk.json" background="transparent" speed="1" loop autoplay class="w-[250px] h-[250px] md:w-[350px] md:h-[350px] mt-[7rem]"></lottie-player>

          <div class="space-y-5 w-[90%] md:w-[70%]">
            <p class="w-full font-clean text-xl text-justify mt-[3rem]">O curso disponibilizado pela TechTech foi pensado para atender o público infantil do início ao fim, por isso o plano de curso é também um guia que demonstra todo o caminho a ser percorrido pelos pequenos.</p>

            <p class="w-full font-clean text-xl text-justify">O plano foi desenvolvido por programadores que já possuem experiência, por isso é com muita responsabilidade que o curso apresenta essa etapa inicial do aprendizado de programação.</p>

            <p class="w-full font-clean text-xl text-justify">Todos os assuntos foram adicionados no plano para construir um conhecimento sólido e linear, dessa maneira, as crianças aprenderam seguindo uma ordem que possibilitará, progressivamente, um aprendizado completo. Seguindo esse plano não só as crianças perceberam sua evolução, mas também os docentes, pais e responsáveis.</p> 
          </div>
        </div>

        <div class="w-full flex items-center justify-center md:justify-end gap-4 mt-[3rem]">
          <a href="https://drive.google.com/file/d/1dc2U7pMU75sO6Dx--TtHIjdDy8XmtxKt/view?usp=sharing" class="font-bold text-lg flex flex-row gap-4 items-center justify-center">
            <span>Plano de Curso</span>
            <span class="material-icons">file_open</span>
          </a>
        </div>

      </section>
      
      <hr>

      <!-- TEAM -->
      <section class="p-12 w-full h-full items-center" data-aos="fade-up" id="team">
        <div class="w-full flex flex-row lg:space-x-15 lg:justify-center">
            <h1 class="text-4xl text-darkpurple font-bold jusify-center">Equipe</h1>
            
            <lottie-player src="https://lottie.host/94fe4618-2bee-4916-80b3-738ee01d95ff/HbIzCLuynM.json" background="transparent" speed="1" style="width: 190px; height: 190px;" loop autoplay class="mt-[-5rem]"></lottie-player>
        </div>

        <!-- Team profiles -->
        <div class="flex flex-wrap gap-x-8 items-center justify-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          <div class="flex flex-wrap md:flex-col lg:flex-col items-left md:items-center lg:items-center mt-[1rem] justify-centerspace-x-15 gap-x-12 bg-white rounded-lg border border-grey shadow-lg w-[25rem] h-[10rem] md:w-[15rem]  md:h-[17rem] lg:w-[15rem]  lg:h-[17rem] opacity-90 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:lightpurple duration-300 hover:border-white hover:border-2 hover:opacity-100" data-aos="fade-down" data-aos-duration="100">
                <img src="{{BASE}}imgs/marina.png" class="ml-[1rem] mt-[1rem] w-[8rem] h-[8rem] md:w-[8rem] md:h-[8rem] lg:w-[8rem] lg:h-[8rem] rounded-full shadow-xl float-left">
                <div>
                    <h1 class="font-bold text-xl mt-[2rem]">Marina Nogueira</h1>

                    <div class="w-full h-auto flex items-start justify-left md:justify-center lg:justify-center gap-6 mt-4">
                        <a href="linkedin.com/in/marina-lima-nogueira-92758b221"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><rect x="36" y="36" width="184" height="184" rx="8" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><line x1="124" y1="120" x2="124" y2="176" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="84" y1="120" x2="84" y2="176" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><path d="M124,148a28,28,0,0,1,56,0v28" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path><circle cx="84" cy="80" r="16"></circle></svg></a>
                        <a href="https://www.instagram.com/ma.lizzy.b/"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="34" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></circle><rect x="32" y="32" width="192" height="192" rx="48" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><circle cx="180" cy="76" r="16"></circle></svg></a>
                    </div>
              </div>
          </div>

          <div class="flex flex-wrap md:flex-col lg:flex-col items-left md:items-center lg:items-center mt-[1rem] justify-centerspace-x-15 gap-x-12 bg-white rounded-lg border border-grey shadow-lg w-[25rem] h-[10rem] md:w-[15rem]  md:h-[17rem] lg:w-[15rem]  lg:h-[17rem] opacity-90 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 hover:lightpurple hover:border-white hover:border-2 hover:opacity-100" data-aos="fade-down" data-aos-duration="120">
                <img src="{{BASE}}imgs/sabrina.png" class="ml-[1rem] mt-[1rem] w-[8rem] h-[8rem] md:w-[8rem] md:h-[8rem] lg:w-[8rem] lg:h-[8rem] rounded-full shadow-xl float-left">
                <div>
                    <h1 class="font-bold text-xl mt-[2rem]">Sabrina Tavares</h1>
                    <div class="w-full h-auto flex items-start justify-left md:justify-center lg:justify-center gap-6 mt-4">
                        <a href="linkedin.com/in/sabrina-tavares-teves-57189320b"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><rect x="36" y="36" width="184" height="184" rx="8" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><line x1="124" y1="120" x2="124" y2="176" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="84" y1="120" x2="84" y2="176" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><path d="M124,148a28,28,0,0,1,56,0v28" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path><circle cx="84" cy="80" r="16"></circle></svg></a>
                        <a href="https://www.instagram.com/bina_tfs/"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="34" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></circle><rect x="32" y="32" width="192" height="192" rx="48" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><circle cx="180" cy="76" r="16"></circle></svg></a>
                    </div>
              </div>
          </div>

          <div class="flex flex-wrap md:flex-col lg:flex-col items-left md:items-center lg:items-center mt-[1rem] justify-centerspace-x-15 gap-x-12 bg-white rounded-lg border border-grey shadow-lg w-[25rem] h-[10rem] md:w-[15rem]  md:h-[17rem] lg:w-[15rem]  lg:h-[17rem] opacity-90 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:lightpurple duration-300 hover:border-white hover:border-2 hover:opacity-100" data-aos="fade-down" data-aos-duration="140">
                <img src="{{BASE}}imgs/sophia.png" class="ml-[1rem] mt-[1rem] w-[8rem] h-[8rem] md:w-[8rem] md:h-[8rem] lg:w-[8rem] lg:h-[8rem] rounded-full shadow-xl float-left">
                <div>
                    <h1 class="font-bold text-xl mt-[2rem]">Sophia Cambuim</h1>
                    <div class="w-full h-auto flex items-start justify-left md:justify-center lg:justify-center gap-6 mt-4">
                        <a href="linkedin.com/in/sophia-cambuim-07a561240"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><rect x="36" y="36" width="184" height="184" rx="8" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><line x1="124" y1="120" x2="124" y2="176" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="84" y1="120" x2="84" y2="176" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><path d="M124,148a28,28,0,0,1,56,0v28" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path><circle cx="84" cy="80" r="16"></circle></svg></a>
                        <a href="https://www.instagram.com/sophzt/"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="34" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></circle><rect x="32" y="32" width="192" height="192" rx="48" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><circle cx="180" cy="76" r="16"></circle></svg></a>
                    </div>
              </div>
          </div>

          <div class="flex flex-wrap md:flex-col lg:flex-col items-left md:items-center lg:items-center mt-[1rem] justify-centerspace-x-15 gap-x-12 bg-white rounded-lg border border-grey shadow-lg w-[25rem] h-[10rem] md:w-[15rem]  md:h-[17rem] lg:w-[15rem]  lg:h-[17rem] opacity-90 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:lightpurple duration-300 hover:border-white hover:border-2 hover:opacity-100" data-aos="fade-down" data-aos-duration="160">
                <img src="{{BASE}}imgs/victor.png" class="ml-[1rem] mt-[1rem] w-[8rem] h-[8rem] md:w-[8rem] md:h-[8rem] lg:w-[7.5rem] lg:h-[8rem] rounded-full shadow-xl float-left">
                <div>
                    <h1 class="font-bold text-xl mt-[2rem]">Victor Silva</h1>
                    <div class="w-full h-auto flex items-start justify-left md:justify-center lg:justify-center gap-6 mt-4">
                        <a href="https://www.linkedin.com/in/victorsilvadev/"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><rect x="36" y="36" width="184" height="184" rx="8" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><line x1="124" y1="120" x2="124" y2="176" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="84" y1="120" x2="84" y2="176" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><path d="M124,148a28,28,0,0,1,56,0v28" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path><circle cx="84" cy="80" r="16"></circle></svg></a>
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="34" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></circle><rect x="32" y="32" width="192" height="192" rx="48" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><circle cx="180" cy="76" r="16"></circle></svg></a>
                    </div>
              </div>
          </div>

          <div class="flex flex-wrap md:flex-col lg:flex-col items-left md:items-center lg:items-center mt-[1rem] justify-centerspace-x-15 gap-x-12 bg-white rounded-lg border border-grey shadow-lg w-[25rem] h-[10rem] md:w-[15rem]  md:h-[17rem] lg:w-[15rem]  lg:h-[17rem] opacity-90 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:lightpurple duration-300 hover:border-white hover:border-2 hover:opacity-100" data-aos="fade-down" data-aos-duration="180">
                <img src="{{BASE}}imgs/vitor.png" class="ml-[1rem] mt-[1rem] w-[8rem] h-[8rem] md:w-[8rem] md:h-[8rem] lg:w-[8rem] lg:h-[8rem] rounded-full shadow-xl float-left">
                <div>
                    <h1 class="font-bold text-xl mt-[2rem]">Vitor Aquino</h1>
                    <div class="w-full h-auto flex items-start justify-left md:justify-center lg:justify-center gap-6 mt-4">
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><rect x="36" y="36" width="184" height="184" rx="8" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><line x1="124" y1="120" x2="124" y2="176" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="84" y1="120" x2="84" y2="176" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><path d="M124,148a28,28,0,0,1,56,0v28" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path><circle cx="84" cy="80" r="16"></circle></svg></a>
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="34" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></circle><rect x="32" y="32" width="192" height="192" rx="48" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><circle cx="180" cy="76" r="16"></circle></svg></a>
                    </div>
              </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Feedback -->
    <section class="px-6 mt-10 py-6 w-[90%] m-auto" data-aos="fade-up">
      <div class="bg-darkerPurple p-6 flex flex-col md:flex-row rounded-md text-white font-bold items-center justify-center gap-6 max-w-[900px] w-full mx-auto drop-shadow-md">
        
        <a href="{{BASE}}feedback" class="relative text-darkpurple bg-orange rounded-md p-4 hover:-translate-y-1 transition duration-300 after:content[''] after:block after:absolute after:bg-orange after:w-[25px] after:h-[25px] after:rounded-md after:rotate-45 after:bottom-[-8px] after:left-[20px]">
          Dê-nos seu Feedback
        </a>

        <p class="flex-1 text-purple font-bold text-xl text-justify">Sua Opinião é muito importante para nós assim podemos melhorar a sua experiência na nossa plataforma.</p>
      </div>
    </section>

    <!-- Footer -->
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

{% endblock %}

