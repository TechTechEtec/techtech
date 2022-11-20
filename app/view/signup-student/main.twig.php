{% extends "partials/body.twig.php" %}

{% block title %} Cadastro Aluno | Techtech {% endblock %}

{% block body %}

    <!-- MODAL TO CHOOSE THE AVATAR  -->
    {% embed "components/avatarsModal.twig.php" %}
        {% block imageStudents %} 
        <div class="w-full avatar-group flex flex-row flex-wrap justify-center items-center gap-[1rem]">
            {% for image in imagesStudents %}
                <sl-avatar
                    data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.15"
                    shape="circle"
                    style="--size:6rem; cursor:pointer;"
                    image="http://drive.google.com/uc?id={{image.id}}"
                    label="{{image.label}}"
                    class="avatar"
                ></sl-avatar>
            {% endfor %}
        </div>
        
        {% endblock %}
    {% endembed %}
    
    <!-- SIGNUP PAGE -->

    <div class="w-screen h-screen bg-[url({{BASE}}imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple dark:bg-lighteerie relative overflow-x-hidden flex flex-row items-start md:items-center justify-center p-4">

        <button title="Início" onclick="window.history.go(-1); return false;" class="text-4xl text-purple absolute top-[10px] left-[10px]">
            <sl-icon name="arrow-left-square"></sl-icon>
        </button>

        <main class="flex flex-wrap space-y-2 gap-4 rounded-md items-start justify-center bg-white dark:bg-eerie mt-[3rem] px-8 py-8 shadow-lg w-full max-w-[600px] min-h-[350px]" data-aos="fade-up" data-aos-mirror="true" data-aos-once="true" data-aos-duration="800">

            <div class="flex w-full h-full min-h-[350px] items-center justify-around flex-1 flex-col">
                <sl-avatar
                    data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025"
                    image=""
                    shape="circle"
                    label="Your Avatar"
                    style="--size:8rem; cursor:pointer"
                    id="chosseAvatar"
                ></sl-avatar>

                <h2 class="font-nerko text-2xl text-orange font-semibold">Escolha seu avatar!</h2>

                <sl-badge id="student_badge" variant="danger" pill pulse>Estudante</sl-badge>

                <p class="text-eerie dark:text-grey">Já tem uma conta ? <a href="{{BASE}}signin" title="Signin" class="text-blue">Entre</a> </p>
            </div>

            <!-- DIVIDER -->
            <div id="divider" class="hidden 2sm:block min-h-[350px] w-[2px] bg-grey text-grey drop-shadow-sm rounded-md mx-2">
            </div>

            <form class="h-full w-full flex-1 flex flex-col items-center px-6" method="post" action="{{BASE}}@signup-student">

                <input class="hidden" name="avatar" value="" id="inputAvatar"/>

                <div class="font-bold flex flex-col w-full">
                    <label class="text-eerie dark:text-grey" for="name">Nome</label>
                    <input class="bg-grey rounded-md h-10 w-full caret-purple focus:outline-purple focus:outline-1"
                    id="name"
                    type="text"
                    name="name"
                    required
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col w-full">
                    <label class="text-eerie dark:text-grey" for="email">E-mail</label>
                    <input class="bg-grey rounded-md h-10 w-full caret-purple focus:outline-purple focus:outline-1"
                    id="email"
                    type="email"
                    name="email"
                    required
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col w-full">
                    <label class="text-eerie dark:text-grey" for="birthday">Data de Nascimento</label>
                    <input class="bg-grey rounded-md h-10 w-full caret-purple focus:outline-purple focus:outline-1"
                    id="birthday"
                    type="date"
                    name="birthday"
                    required
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col w-full">
                    <label class="text-eerie dark:text-grey" for="password">Senha</label>
                    <input class="bg-grey rounded-md h-10 w-full caret-purple focus:outline-purple focus:outline-1"
                    id="password"
                    type="password"
                    name="password"
                    required
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col w-full">
                    <label class="text-eerie dark:text-grey" for="confirmpassword">Confirmar Senha</label>
                    <input class="bg-grey rounded-md h-10 w-full caret-purple focus:outline-purple focus:outline-1"
                    id="confirmpassword"
                    type="password"
                    name="confirmpassword"
                    required
                    >
                </div>

                <button class="bg-orange rounded-md px-12 h-10 text-white flex items-center group mt-8" type="submit">
                    <span class="pl-2">Cadastrar</span>
                </button>
            </form>
        </main>
    </div>

    <style>
        #student_badge::part(base){
            background: #D71C6D;
            padding: 1rem;
            color: white;
            padding: 1rem 0.5rem;
            cursor: default;
            border-radius: 0.5rem;
            box-shadow: 0.1875rem 0.1875rem 0.1875rem grey;
            min-width: 8.125rem;
            text-align: center;
        }

        #chosseAvatar::part(base){
            border: 3px solid #D71C6D;
        }

    </style>
{% endblock %}