<canvas id="myCanvas" resize class="h-[12rem] w-full"></canvas>

<footer class="bg-darkerPurple dark:bg-lighteerie bg-[url({{BASE}}svgs/Random_shit.svg)] bg-cover shadow-xl flex flex-col-reverse lg:flex-row flex-wrap justify-evenly items-center w-screen m-0 h-auto gap-10 md:gap-4 pb-6 pt-[3rem] px-8" >

  <!-- Logo -->
  <div class="flex flex-col justify-center items-center gap-8 h-[20rem] w-[20rem]">
    <img class=" w[10rem] h-[9rem]" src="{{BASE}}svgs/techtechlogo.svg" alt="TechTech Logo">
    <img class="w-[10rem]" src="{{BASE}}imgs/logoscps.png" alt="Etec e CPS Logo">
  </div>

  <!-- Links -->
  <div class="flex-1 flex flex-row gap-4 w-full p-4 w-full flex-wrap items-start justify-center">
    <ul class="w-auto flex flex-col items-stretch justify-center gap-2">
      <li><h3 class="text-orange font-extrabold font-mukta text-xl">TECH TECH</h3></li>
      <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-purple cursor-pointer hover:text-lightpurple font-medium font-roboto">Escolas Participantes</a></li>
      <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-purple cursor-pointer hover:text-lightpurple font-medium font-roboto">Equipe</a></li>
      <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-purple cursor-pointer hover:text-lightpurple font-medium font-roboto">Feedback</a></li>
    </ul>

    <ul class="w-auto flex flex-col items-stretch justify-center gap-2">
      <li><h3 class="text-orange font-extrabold font-mukta text-xl">CURSO</h3></li>
      <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-purple cursor-pointer hover:text-lightpurple font-medium font-roboto">Plano de Curso</a></li>
      <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-purple cursor-pointer hover:text-lightpurple font-medium font-roboto">Didática</a></li>
      <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-purple cursor-pointer hover:text-lightpurple font-medium font-roboto">Atividades</a></li>
      <li><a href="#" class="hover:-translate-y-2 transition duration-300 text-purple cursor-pointer hover:text-lightpurple font-medium font-roboto">Professores</a></li>
    </ul>

    <div class="w-full h-auto flex items-start justify-center gap-6 mt-4">
      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#4267b2" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="96" fill="none" stroke="#4267b2" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></circle><path d="M168,88H152a23.9,23.9,0,0,0-24,24V224" fill="none" stroke="#4267b2" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path><line x1="96" y1="144" x2="160" y2="144" fill="none" stroke="#4267b2" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line></svg></a> 
      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#1da1f2" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><path d="M128,88c0-22,18.5-40.3,40.5-40a40,40,0,0,1,36.2,24H240l-32.3,32.3A127.9,127.9,0,0,1,80,224c-32,0-40-12-40-12s32-12,48-36c0,0-64-32-48-120,0,0,40,40,88,48Z" fill="none" stroke="#1da1f2" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path></svg></a>
      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#0e76a8" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><rect x="36" y="36" width="184" height="184" rx="8" fill="none" stroke="#0e76a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><line x1="124" y1="120" x2="124" y2="176" fill="none" stroke="#0e76a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="84" y1="120" x2="84" y2="176" fill="none" stroke="#0e76a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><path d="M124,148a28,28,0,0,1,56,0v28" fill="none" stroke="#0e76a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></path><circle cx="84" cy="80" r="16"></circle></svg></a>
      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#e1306c" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="34" fill="none" stroke="#e1306c" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></circle><rect x="32" y="32" width="192" height="192" rx="48" fill="none" stroke="#e1306c" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></rect><circle cx="180" cy="76" r="16"></circle></svg></a>
    </div>
  </div>


  <!-- Form -->
  <form method="post" class="flex-1 flex w-full lg:w-auto flex-col items-center justify-start gap-6 max-w-[25rem]">
      <input type="text" id="name" name="name" placeholder="Seu nome" class="w-full h-10 rounded-lg bg-white border-black border-[1px] border-solid p-2 text-black" autocomplete="off"/>

      <input type="email" id="name" name="name" placeholder="Seu E-mail" class="w-full h-10  rounded-lg bg-white border-black border-[1px] border-solid p-2 text-black" autocomplete="off"/>

      <textarea placeholder="Sua mensagem..." rows="5" class="w-full h-[6rem] max-h-[6.25rem] min-h-[6.25rem] rounded-lg bg-white border-black border-[1px] border-solid p-2 text-black" autocomplete="off"></textarea>

      <button class="bg-darkpurple w-full p-2 rounded-xl drop-shadow-xl hover:-translate-y-1 transition ease duration-300 cursor-pointer text-white font-extrabold font-clean tracking-wider">
        Enviar
      </button>
  </form>
</footer>

<script type="text/javascript" src="{{BASE}}paper/dist/paper-full.js"></script>

<script type="text/paperscript" src="{{BASE}}js/animatedFooter.js"canvas="myCanvas"></script>

