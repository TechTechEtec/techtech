<?php 

  //require("./src/services/db/connection.php");

?>

<!DOCTYPE html>

<html lang="pt-br" class="scroll-smooth">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8"/>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="public/assets/techtechlogo.svg">
    <!-- Fonts --> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">

    <!-- TAILWIND Import -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- PHOSPOR ICONS --> 
    <script src="https://unpkg.com/phosphor-icons"></script>
    <title>Home</title>

    <!-- Tailwind configuration -->
    <script src="./theme/tailwindcss.js"></script>

    <!-- CSS Reset -->
    <link rel="stylesheet" href="./styles/global.css" type="text/css"/>
  </script>
  </head>
  <body class="overflow-x-hidden">

      <!-- MAIN CONTENT --> 
      
      <header class="flex justify-between p-4 items-center">
        <div class="absolute w-[130vw] h-[50rem] bg-lightpurple top-[-80%] left-[-20%] skew-y-3 -rotate-[20deg] z-[-1] p-6 ">
          <div class="relative w-full h-full bg-lightpurple brightness-[1.15]"></div>
        </div>

        <!-- Logo -->
        <img class="flex-none w-20 h-20" src="./public/assets/techtechlogo.svg" alt="TechTech Logo">

        <!-- NAVIGATION -->
        <nav>
          <ul class="flex gap-10 text-darkpurple font-bold text-3xl">
            <li class="hover:text-purple "><a href="#">Início</a></li>
            <li class="hover:text-purple "><a href="#">Plano de Curso</a></li>
            <li class="hover:text-purple "><a href="#">Sobre nós</a></li>
            <li class="hover:text-purple "><a href="#">Escolas Participantes</a></li>
          </ul>
        </nav>

        <!-- Login Button -->

        <button class="bg-orange rounded-full px-3 h-10 text-white flex items-center group">
          <i class="ph-user"></i>
          <span class="pl-2">Entrar</span>
        </button>
 
      </header>

      <!-- MAIN CONTENT --> 

      <main class="pr-6 pl-6">

        <!-- first section -->
        <section class="mt-14 w-[90vw] h-[90vh] m-auto">
          
          <div class="flex flex-row justify-around items-start m-auto w-full">
            <div class="flex flex-1 flex-col items-start justify-evenly ">

              <h1 class="text-2xl text-darkpurple font-semibold ">Comece a aprender agora mesmo!</h1>
              <p class="text-gray-600 text-justify mt-10 mb-5  text-lg font-medium subpixel-antialiased">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque fugit aut dolorem, officiis quo aliquam deserunt hic perferendis, praesentium quisquam eligendi amet, dolorum atque praesentium quisquam eligendi amet, dolorum atque</p>
              <div class="flex flex-row gap-4 justify-start items-center w-full mt-6">
                <button class="bg-orange text-darkerPurple font-bold p-2 rounded-xl hover:-translate-y-1 transition">Cadastre-se</button>
                <button class="bg-orange text-darkerPurple font-bold p-2 rounded-xl hover:-translate-y-1 transition">Cadastre sua escola</button>
              </div>

            </div>

            <div class="flex-1">
              <img class="w-full" src="./public/assets/techbo_svgs/techbo_showingvideo.png" alt="techbo mostrando vídeo">
            </div>
          </div>


          <div class="w-full  flex justify-center align-center absolute left-0 bottom-5">
            <div class="h-px bg-black w-[10%] absolute top-[50%] z-[-1] shadow-lg"></div>
            <a href="#second">
              <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="#000000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="96" fill="#fff" stroke="#000000" stroke-width="16" stroke-miterlimit="10"></circle><polyline points="94.1 134.1 128 168 161.9 134.1" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline><line x1="128" y1="88" x2="128" y2="168" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line></svg>
            </a>
          </div>
       
        </section>

        <!-- second section -->
        <section id="second" class="mt-14 h-screen w-[90vw] m-auto ">

          <h1 class="text-3xl font-bold text-darkpurple mb-8">Comece a aprender agora mesmo!</h1>
          <div class="flex w-full h-auto justify-around items-center text-pink text-xl">

          <div class="text-center">
            <img class="shadow-xl rounded-md" src="./public/assets/plano_de_curso.png" alt="Plano de Curso">
            <p class="mt-4">Plano de Curso</p>
          </div>

          <div class="text-center">
            <img class="shadow-xl rounded-md" src="./public/assets/escolas_participantes.png" alt="Escolas Participantes">
            <p class="mt-4">Escolas Participantes</p>
          </div>

          <div class="text-center">
            <img class="shadow-xl rounded-md" src="./public/assets/equipe.png" alt="Equipe">
            <p class="mt-4">Equipe</p>
          </div>
        </section>

        <!-- second section -->
        <footer class="mt-14 h-screen w-[90vw] m-auto bg-pink"></footer>
      </main>

      <!-- FOOTER CONTENT -->

      <footer></footer>


  </body>
</html>



