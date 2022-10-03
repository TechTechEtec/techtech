{% extends "partials/body.twig.php" %}

{% block title %} Portfolio | Techtech {% endblock %}

{% block body %} 
<div class="w-screen absolute h-[90px] md:w-[170vw] md:h-[80rem] md:md:h-[63rem] bg-darkpurple md:top-[-80%] rounded-full md:left-[-20%] z-[-1] p-6">
  <div class="hidden md:block relative w-full h-full bg-darkerpurple rounded-full rounded-b-lg brightness-[1.15]"></div>
</div>


<header class="flex justify-between p-4 items-center w-full"> 
    <img class="flex-none w-20 h-20" src="{{BASE}}/svgs/techtechlogo.svg" alt="TechTech Logo">

    <nav class="flex flex-row items-center gap-4">
      <ul class="text-lightpurple font-bold text-3xl flex flex-col items-center justify-center drop-shadow-xl px-6 py-10 z-10 bg-white fixed top-0 right-0 h-screen w-screen md:items-start md:justify-start md:w-[40%] lg:h-auto lg:relative lg:flex-row lg:bg-transparent lg:p-0 lg:items-center gap-4 lg:gap-10 lg:w-auto hidden lg:flex home-menu">

        <li class="hover:translate-y-[-3px] ease duration-300 cursor-pointer absolute top-6 right-6 lg:hidden" onclick="toggleHomeMenu()" >
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#4d3a92" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><circle cx="128" cy="128" r="96" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></circle><line x1="160" y1="96" x2="96" y2="160" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line><line x1="160" y1="160" x2="96" y2="96" fill="none" stroke="#4d3a92" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"></line></svg>
        </li>

        <li class="hover:text-purple "><a href="#">Projeto</a></li>
        <li class="hover:text-purple "><a href="#">Plataforma</a></li>
        <li class="hover:text-purple "><a href="#">Plano de Curso</a></li>
        <li class="hover:text-purple "><a href="#">Equipe</a></li>
      </ul>

      <!-- Login Button -->
      <button class="bg-orange rounded-full px-3 h-10 text-white flex items-center group">
        <i class="ph-user"></i>
        <span class="pl-2">Cadastre-se</span>
      </button>
    </nav>
 
</header>


{% endblock %}

