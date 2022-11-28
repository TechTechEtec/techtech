{% extends "partials/layout.twig.php" %}

{% block title %} Sumário | Techtech {% endblock %}

{% block main %}

<section class="w-screen h-auto bg-repeat-y bg-center relative overflow-x-hidden bg-[url({{BASE}}svgs/Random_shit.svg)] bg-cover">
    <div class="flex flex-row items-center"> 
    <h1 class="text-3xl font-bold font-clean text-purple uppercase px-4 my-8">Módulos</h1>
    <span data-tilt><img class="w-[5.625rem] h-[5.625rem]" src="{{BASE}}imgs/hexagonos.png" alt="Hexagonos"></span>
    </div>
        

        <div class="mt-[5rem] px-[2rem] w-full h-full flex flex-col gap-y-[10rem] pb-[2rem] overflow-x-auto snap-x snap-normal">
          <div class="flex flex-row gap-x-[4rem] mr-[3rem] m-0">
                <span data-tilt><a href="{{BASE}}modules/01"><img class="w-full max-w-[15rem] min-w-[15rem] md:max-w-[17rem] md:min-w-[17rem]" src="{{BASE}}svgs/pentagono.svg" alt="Pentágonos"></a></span>
                <span data-tilt><a href="{{BASE}}modules/02"><img class="w-full max-w-[15rem] min-w-[15rem] md:max-w-[17rem] md:min-w-[17rem]" src="{{BASE}}svgs/pentagono2.svg" alt="Pentágonos"></a></span>
                <span data-tilt><a href="{{BASE}}modules/03"><img class="w-full max-w-[15rem] min-w-[15rem] md:max-w-[17rem] md:min-w-[17rem]" src="{{BASE}}svgs/pentagono3.svg" alt="Pentágonos"></a></span>
                <span data-tilt><a href="{{BASE}}modules/04"><img class="w-full max-w-[15rem] min-w-[15rem] md:max-w-[17rem] md:min-w-[17rem]" src="{{BASE}}svgs/pentagono4.svg" alt="Pentágonos"></a></span>
         </div>

         <div class="flex ml-[10rem] md:ml-0 justify-start md:justify-center lg:justify-center items-center flex-row gap-x-[5rem]">
                <span data-tilt><a href="{{BASE}}modules/05"><img class="w-full max-w-[15rem] min-w-[15rem] md:max-w-[17rem] md:min-w-[17rem]" src="{{BASE}}svgs/pentagono5.svg" alt="Pentágonos"></a></span>
                <span data-tilt><a href="{{BASE}}modules/06"><img class="w-full max-w-[15rem] min-w-[15rem] md:max-w-[17rem] md:min-w-[17rem]" src="{{BASE}}svgs/pentagono6.svg" alt="Pentágonos"></a></span>
                <span data-tilt><a href="{{BASE}}modules/07"><img class="w-full max-w-[15rem] min-w-[15rem] md:max-w-[17rem] md:min-w-[17rem]" src="{{BASE}}svgs/pentagono7.svg" alt="Pentágonos"></a></span>
         </div>
        </div>

        <div class="w-full flex flex-row justify-center lg:hidden ">          
              <lottie-player src="https://lottie.host/c0be513e-b460-42dc-81de-2135f40b357d/KZtrnVbbBD.json" background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay></lottie-player>
      </div>"
    
</section>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> 


<script src="tilt.jquery.js"></script>
{% endblock %}

