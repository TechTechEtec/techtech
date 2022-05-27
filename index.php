<?php 

  require("./src/services/db/connection.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8"/>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="public/assets/techtechlogo.png">
    <!-- Fonts --> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
    <!-- TAILWIND Import -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>

    <!-- Tailwind configuration -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              blue: '#00c3ff',
              darkerPurple: "hsl(238, 60%, 16%)",
              darkpurple: "hsl(255, 45%, 41%)",
              purple: "hsl(252, 100%, 68%)",
              lightpurple: "hsl(281, 100%, 88%)",
              pink: "hsl(334, 100%, 64%)",
              orange: "hsl(32, 100%, 61%)",
              black: "#181818"
            }
          }
        }
      }
  </script>
  </head>
  <body>

      <!-- MAIN CONTENT --> 
      
      <header class="flex justify-between pt-2 pl-3 pr-3 items-center">
        <!-- Logo -->
        <img class="flex-none w-20 h-20" src="./public/assets/techtechlogo.png" alt="TechTech Logo">

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
        <button>
          <div class="rounded-full bg-orange w-10 h-10 p-1 flex justify-center items-center">
            <img class="w-6 h-6" src="./public/assets/user.png" alt="User Login">
          </div>
          <strong class="text-black">Entrar</strong>
        </button>
      </header>

      <!-- MAIN CONTENT --> 

      <main>
        <!-- first section -->
        <section class="flex-">
          <div>
            <h1>Comece a aprender agora mesmo!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque fugit aut dolorem, officiis quo aliquam deserunt hic perferendis, praesentium quisquam eligendi amet, dolorum atque inventore officia dolor blanditiis totam accusamus nihil dolores aperiam voluptatem cupiditate. Maiores quae doloribus ullam magni?</p>
            <button>Cadastre-se</button>
            <button>Cadastre sua escola</button>
          </div>
          <div>
            <img src="./public/assets/techbo_svgs/techbo_speaking.svg" alt="techbo explicando">
          </div>
        </section>

        <!-- second section -->
        <section></section>

        <!-- second section -->
        <section></section>
      </main>

      <!-- FOOTER CONTENT -->

      <footer></footer>


  </body>
</html>



