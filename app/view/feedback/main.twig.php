{% extends "partials/body.twig.php" %}

{% block title %} Portfolio | Techtech {% endblock %}

{% block body %} 

<div class="w-full min-h-screen bg-[url({{BASE}}imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple dark:bg-eerie relative overflow-x-hidden flex flex-row items-center justify-center px-[1.5rem] py-[1rem] overflow-y-auto md:overflow-y-[none]">

    <a title="Início" href="{{BASE}}" class="text-4xl text-purple absolute z-10 top-[0.625rem] left-[0.625rem]">
        <sl-icon name="arrow-left-square"></sl-icon>
    </a>

    <!-- Toogle Dark/Light Button -->
    <div class="fixed bottom-[0.625rem] right-[0.625rem] z-10">
        {% embed "components/toggleDarkModeButton.twig.php" %} {% endembed%}
    </div>
 
    <div class="w-full text-xl md:text-lg flex flex-col items-center  justify-start md:flex-row md:items-center md:justify-center gap-[4rem] flex-wrap mt-[3rem] md:mt-0 px-[0.5rem] md:px-[2rem]">
 
        <div class="flex flex-col items-center justify-center w-full md:w-[50%] flex-1">
            <lottie-player src="https://lottie.host/a169f834-b3c5-451c-a601-03d0dc12a5f8/LEoo22kqdL.json" background="transparent" speed="1" loop autoplay class="w-[13.125rem] h-[13.125rem] md:w-[17.5rem] md:h-[17.5rem] md:w-[21.875rem] md:h-[21.875rem]"></lottie-player>

            <h1 class="text-5xl flex-1 text-darkpurple font-bold font-mukta text-center" data-aos="fade-up">Ajude-nos com seu </br> Feedback!</h1>
        </div>

        <main class="flex flex-col flex-1 items-center justify-center bg-white dark:bg-lighteerie rounded-md shadow-lg w-full sm:w-[80%] md:w-[31.25rem] p-[1.5rem]" data-aos="fade-up">

            <h1 class="text-4xl font-bold text-lightpurple mt-[1rem] mb-[1.5rem]">Feedback</h1>

            <sl-rating label="Rating" precision="0.5" value="0" style="--symbol-size: 1.7rem;"></sl-rating>
            
            <form class="mt-2 font-bold flex flex-col w-full">

                <label for="nome" class="mt-[1rem] mb-[0.5rem] text-eerie dark:text-grey">Nome</label>
                <input class="bg-grey rounded-md h-10 w-full"
                id="name"
                type="text"
                name="name"
                required
                >

                <label for="email" class="mt-[1rem] mb-[0.5rem] text-eerie dark:text-grey">E-mail Institucional</label>
                <input class="bg-grey rounded-md h-10 w-full"
                id="name"
                type="email"
                name="email"
                required
                >

                <label for="mensagem" class="mt-[1rem] mb-[0.5rem] text-eerie dark:text-grey">Feedback</label>
                <textarea name="msg" placeholder="Sua mensagem..." rows="5" class="bg-grey rounded-md h-[6.25rem] min-h-[6.25rem] w-full min-w-[100%] bg-white" required></textarea>
                
                <button type="submit" class="bg-orange rounded-md w-full h-[2.25rem] text-white flex items-center justify-center group mt-[2rem]">
                   Enviar
                </button>
            </form>
        </main>
    </div>
</div>

{% endblock %}
