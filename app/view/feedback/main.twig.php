{% extends "partials/body.twig.php" %}

{% block title %} Portfolio | Techtech {% endblock %}

{% block body %} 

 <div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple relative overflow-x-hidden flex flex-row items-center justify-center">
 
     <div class="text-2xl md:text-lg lg:text-lg flex flex-col md:flex-row lg:flex-row space-y-2 grid-cols absolute inset-x-0 bottom-0 md:static lg:static md:inset-0 lg:inset-0 items-center h-[40rem] md:h-[20rem] lg:h-[20rem] ">
 
         <div class="flex flex-col items-center justify-center mr-0 md:mr-32 lg:mr-32 mt-[-20rem] md:mt-0 lg:mt-0">
             <lottie-player src="https://lottie.host/a169f834-b3c5-451c-a601-03d0dc12a5f8/LEoo22kqdL.json" background="transparent" speed="1" loop autoplay class="h-[15rem] w-[15rem] md:h-[20rem] md:w-[20rem] lg:h-[20rem] w-[20rem]"></lottie-player>
             <h1 class="text-4xl md:text-4xl lg:text-4xl text-darkpurple w-[30rem] font-bold text-center mt-[-3rem]" data-aos="fade-up">Ajude-nos com seu Feedback!</h1>
         </div>

         <div class="flex flex-col items-center justify-center bg-white rounded-md shadow-lg h-[50rem] md:h-[30rem] lg:h-[30rem] w-screen md:w-[25rem] lg:w-[25rem]" data-aos="fade-up">
                 <h1 class="text-4xl md:text-3xl lg:text-3xl font-bold text-lightpurple leading-eloose">Feedback</h1>
                 

                 <form method="post" class="mt-2 font-bold flex flex-col">
                        <label for="nome" class="mt-6">Nome</label>
                        <input class="bg-white border-1 border-grey h-8 w-[22rem] md:w-full lg:w-full focus:border-b-2" id="nome" type="text" required>
                 
                        <label for="email" class="mt-2">E-mail Institucional</label>
                        <input class="bg-white border-1 border-grey h-8 w-[22rem] md:w-full lg:w-full focus:border-b-2" id="email" type="email" required>

                     <label for="mensagem" class="mt-2">Feedback</label>
                     <textarea placeholder="Sua mensagem..." rows="5" class="h-[100px] max-h-[100px] min-h-[100px] bg-white border-1 border-grey h-8 w-[22rem] md:w-full lg:w-full focus:border-b-2" required></textarea>
                        
    
                     <button class="bg-orange rounded-md w-36 h-9 text-white flex items-center justify-center group mt-8">
                        <span>Enviar</span>
                     </button>
                 </form>
                 
            </div>
     </div>
 </div>


{% endblock %}
