{% extends "partials/body.twig.php" %}

{% block title %} Portfolio | Techtech {% endblock %}

{% block body %} 

<div class="w-full min-h-screen bg-[url({{BASE}}imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple dark:bg-eerie relative overflow-x-hidden flex flex-row items-center justify-center px-6 py-4 overflow-y-auto md:overflow-y-[none]">

        <a title="Início" href="{{BASE}}" class="text-4xl text-purple absolute z-10 top-[10px] left-[10px]">
            <sl-icon name="arrow-left-square"></sl-icon>
        </a>
 
    <div class="w-full text-xl md:text-lg flex flex-col items-center  justify-start md:flex-row md:items-center md:justify-center gap-[4rem] flex-wrap mt-[3rem] md:mt-0 px-2 md:px-8">
 
        <div class="flex flex-col items-center justify-center w-full md:w-[50%] flex-1">
            <lottie-player src="https://lottie.host/a169f834-b3c5-451c-a601-03d0dc12a5f8/LEoo22kqdL.json" background="transparent" speed="1" loop autoplay class="w-[210px] h-[210px] md:w-[280px] md:h-[280px] md:w-[350px] md:h-[350px]"></lottie-player>

            <h1 class="text-5xl flex-1 text-darkpurple font-bold font-mukta text-center" data-aos="fade-up">Ajude-nos com seu </br> Feedback!</h1>
        </div>

        <main class="flex flex-col flex-1 items-center justify-center bg-white dark:bg-lighteerie rounded-md shadow-lg w-full sm:w-[80%] md:w-[500px] p-6" data-aos="fade-up">

            <h1 class="text-4xl font-bold text-lightpurple mt-4 mb-6">Feedback</h1>

            <sl-rating label="Rating" precision="0.5" value="0" style="--symbol-size: 1.7rem;"></sl-rating>
            
            <form method="post" action="send.php" class="mt-2 font-bold flex flex-col w-full">

                <label for="nome" class="mt-4 mb-2 text-eerie dark:text-grey">Nome</label>
                <input class="bg-grey rounded-md h-10 w-full"
                id="name"
                type="text"
                name="name"
                required
                >

                <label for="email" class="mt-4 mb-2 text-eerie dark:text-grey">E-mail Institucional</label>
                <input class="bg-grey rounded-md h-10 w-full"
                id="name"
                type="email"
                name="email"
                required
                >

                <label for="mensagem" class="mt-4 mb-2 text-eerie dark:text-grey">Feedback</label>
                <textarea name="msg" placeholder="Sua mensagem..." rows="5" class="bg-grey rounded-md h-[6.25rem] min-h-[6.25rem] w-full min-w-[100%] bg-white" required></textarea>
                
                <button type="submit" class="bg-orange rounded-md w-full h-9 text-white flex items-center justify-center group mt-8">
                   Enviar
                </button>
            </form>
        </main>
    </div>
</div>

{% endblock %}
