{% extends "partials/body.twig.php" %}

{% block title %} Cadastro Aluno | Techtech {% endblock %}

{% block body %}

    <!-- MODAL TO CHOOSE THE AVATAR  -->
    <sl-dialog label="Escolha seu avatar" class="dialog-overview" >
        
        <div class="avatar-group">
            <sl-avatar
                shape="rounded"
                style="--size:6rem; cursor:pointer;"
                image="https://images.unsplash.com/photo-1490150028299-bf57d78394e0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=256&h=256&q=80&crop=right"
                label="Avatar 1 of 4"
                class="avatar"
            ></sl-avatar>

            <sl-avatar
                shape="rounded"
                style="--size:6rem; cursor:pointer;"
                image="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=256&h=256&crop=left&q=80"
                label="Avatar 2 of 4"
                class="avatar"
            ></sl-avatar>

            <sl-avatar
                shape="rounded"
                style="--size:6rem; cursor:pointer;"
                image="https://images.unsplash.com/photo-1456439663599-95b042d50252?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=256&h=256&crop=left&q=80"
                label="Avatar 3 of 4"
                class="avatar"
            ></sl-avatar>

            <sl-avatar
                shape="rounded"
                style="--size:6rem; cursor:pointer;"
                image="https://images.unsplash.com/flagged/photo-1554078875-e37cb8b0e27d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=256&h=256&crop=top&q=80"
                label="Avatar 4 of 4"
                class="avatar"
            ></sl-avatar>
        </div>


        <sl-button slot="footer" variant="default">Fechar</sl-button>
    </sl-dialog>

    <!-- SIGNUP PAGE -->

    <div class="w-screen h-screen bg-[url({{BASE}}imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple relative overflow-x-hidden flex flex-row items-start md:items-center justify-center p-4">

        <main class="flex flex-wrap space-y-2 gap-4 rounded-md items-start justify-center bg-white px-8 py-8 shadow-lg w-full max-w-[600px] min-h-[350px]" data-aos="fade-up" data-aos-mirror="true"
    data-aos-once="true" data-aos-duration="800">

            <div class="flex w-full h-full min-h-[350px] items-center justify-around flex-1 flex-col">

                <sl-avatar
                    image=""
                    shape="rounded"
                    label="Your Avatar"
                    style="--size:8rem; cursor:pointer"
                    id="chosseAvatar"
                ></sl-avatar>

                <h2 class="font-nerko text-2xl text-orange font-semibold">Escolha seu avatar!</h2>

                <p class="bg-pink-500 text-white px-4 py-2 cursor-default rounded-md drop-shadow-sm min-w-[130px] text-center">Aluno</p>
            </div>

            <!-- DIVIDER -->
            <div id="divider" class="hidden 2sm:block min-h-[350px] w-[2px] bg-grey text-grey drop-shadow-sm rounded-md mx-2">
            </div>

            <form class="h-full w-full flex-1 flex flex-col items-center px-6" method="post" action="{{BASE}}@signup-student">

                <input class="hidden" name="avatar" value="" id="inputAvatar"/>

                <div class="font-bold flex flex-col w-full">
                    <label for="name">Nome</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="name"
                    type="text"
                    name="name"
                    required
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col w-full">
                    <label for="email">E-mail</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="email"
                    type="email"
                    name="email"
                    required
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col w-full">
                    <label for="birthday">Data de Nascimento</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="birthday"
                    type="date"
                    name="birthday"
                    required
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col w-full">
                    <label for="password">Senha</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="password"
                    type="password"
                    name="password"
                    required
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col w-full">
                    <label for="confirmpassword">Confirmar Senha</label>
                    <input class="bg-grey rounded-md h-10 w-full"
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

    <script>
        const dialog = document.querySelector('.dialog-overview');
        const openButton = document.querySelector('#chosseAvatar');
        const closeButton = dialog.querySelector('sl-button[slot="footer"]');

        openButton.addEventListener('click', () => dialog.show());
        closeButton.addEventListener('click', () => dialog.hide());

        const avatars = document.querySelectorAll(".avatar");

        avatars.forEach(avatar=> {
            avatar.addEventListener("click", (event)=> {
                
                document.getElementById("inputAvatar").setAttribute("value", event.target.getAttribute("image"));
                document.getElementById("chosseAvatar").setAttribute("image", event.target.getAttribute("image"));

                dialog.hide();
            })
        })
        
    </script>
{% endblock %}