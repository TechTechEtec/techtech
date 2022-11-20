{% extends "partials/body.twig.php" %}

{% block title %} Entrar | Techtech {% endblock %}

{% block body %}
    <main class="w-screen h-screen bg-[url({{BASE}}imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple dark:bg-lighteerie relative overflow-x-hidden flex flex-row items-center justify-center p-4">

        <a title="Início" href="{{BASE}}" class="text-4xl text-purple fixed z-10 top-[10px] left-[10px]">
            <sl-icon name="arrow-left-square"></sl-icon>
        </a>

        <div class="text-2xl flex flex-col items-center justify-start p-8 w-full max-w-[400px] bg-white dark:bg-eerie rounded-xl"  data-aos="fade-up" data-aos-mirror="true"
        data-aos-once="true" data-aos-duration="800">

            
            <div class="bg-darkpurple hover:bg-purple transition-all ease-linear duration-300 cursor-default h-[100px] w-[100px] rounded-md mb-8 flex items-center justify-center">
                <i class="ph-user text-[3.5rem] text-white"></i>
            </div>
        

            <form class="flex flex-col items-stretch justify-start w-[95%]" action="{{BASE}}@signin" method="POST">
                
                <label for="email" class="mb-[0.8rem] text-eerie dark:text-grey">E-mail</label>
                <input class="bg-grey rounded-md h-10 w-full caret-purple focus:outline-purple focus:outline-1"
                    id="email"
                    type="email"
                    name="email"
                    required
                    autocomplete="off"
                />

                <label for="password" class="my-[0.8rem] text-eerie dark:text-grey">Senha</label>
                <input class="bg-grey rounded-md h-10 w-full caret-purple focus:outline-purple focus:outline-1"
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="off"
                />

                <span class=" w-full text-center font-roboto text-[1rem] mt-4 text-eerie dark:text-grey">
                    Ou inscreva-se em
                    <a href="{{BASE}}choose-signup" class="text-[#1766d4] cursor-pointer hover:text-[#0854bf] ">Sign-Up</a>
                </span>
        

                <button type="submit" class="bg-darkpurple hover:bg-purple cursor-pointer rounded-md h-10 text-white flex items-center justify-center mt-[2rem]">
                    <span class="pl-2">Entrar</span>
                </button>
            </form>

        </div>
            
    </main>
{% endblock %}