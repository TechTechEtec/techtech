{% extends "partials/layout.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block userInfo %} 
    {% embed "components/userInformation.twig.php" %}{% endembed %}
{% endblock %}

{% block main %}
    <div class="ml-12">
    <sl-tab-group>

        <sl-tab slot="nav"panel="perfil">
        <h1 class="text-3xl font-nerko">Perfil</h1>
        </sl-tab>

        <sl-tab slot="nav" panel="turmas">
        <h1 class="text-3xl font-nerko" >Turmas</h1>
        </sl-tab>

        <sl-tab slot="nav" panel="configurações">
        <h1 class="text-3xl font-nerko" >Configurações</h1>
        </sl-tab>

        <sl-tab slot="nav" panel="ajuda">
        <h1 class="text-3xl font-nerko" >Ajuda</h1>
        </sl-tab>
            
            <!-- sessão Perfil -->
            <sl-tab-panel name="perfil">
            <h1 class="text-4xl text-lightpurple mt-4 font-nerko">
                Perfil
            </h1>
            <div>

                <div class="grid gap-4 grid-cols-2">
                    <div class="flex flex-col">
                        <label class="mt-4 text-xl font-bold" for="nome">Nome</label>
                        <input class="bg-grey rounded-lg h-[2rem] w-[14rem]"
                        type="text"
                        id="nome">
                    </div>          
                
                    <div class="flex flex-col mt-4">
                        <label class="text-xl font-bold" for="nome">Username</label>
                        <input class="bg-grey rounded-lg h-[2rem] w-[14rem]"
                        type="text"
                        id="username">
                    </div>
                
                    <div class="flex flex-col">
                        <label class="text-xl font-bold" for="nome">Conta</label>
                        <input class="bg-grey rounded-lg h-[2rem] w-[14rem]"
                        type="text"
                        id="conta">
                    </div>              
                </div>
            
                <div class="flex flex-col">
                    <label class="mt-4 text-xl font-bold" for="bio">Bio</label>
                    <input class="bg-grey rounded-lg h-[150px] w-[650px]"
                    type="text" 
                    id="bio">
                </div>

            </div>

            <h1 class="text-4xl text-lightpurple mt-4 font-nerko">Conta</h1>

            <div class="grid grid-cols-2 grid-row-2">

                <div>
                <h2 class="text-xl mt-2 font-bold">
                    E-mail
                </h2>
                <p>
                    exemplo@email.com
                </p>
                </div>

                <div>
                <h2 class="text-xl mt-2 font-bold ">
                    Data de nascimento
                </h2>
                <p>
                    28/01/2005
                </p>
                </div>

                <div>
                <h2 class="text-xl mt-2 font-bold ">
                    Instituição
                </h2>
                <p>
                    ETEC de Carapicuíba
                </p>
                </div>

                <div>
                <h2 class="text-xl mt-2 font-bold ">
                    Série
                </h2>
                <p>
                    5ª Série
                </p>
                </div>

                <div>
                <h2 class="text-xl mt-2 font-bold ">
                    Senha
                </h2>
                <p>
                    ********
                </p>
                </div>

            </div>
            </sl-tab-panel>

            <!-- sessão turmas-->
            <sl-tab-panel name="turmas">
            <div class="flex">
                <h1 class="text-4xl text-orange font-nerko">
                Turma
                </h1>

            </div>

            <div class="flex justify-start mt-4">
                <div class="flex gap-[25rem] justify-around rounded-md bg-white drop-shadow-lg w-[900px] h-[50px] items-center">
                    <button class="bg-lightpurple rounded-md w-[115px] h-[30px]">
                        <span class="font-nerko font-bold text-2xl">Nova +</span>
                    </button>

                    <input class="rounded-md h-[30px]"
                    type="text"
                    >                    
                </div>

            </div>

            <div class="flex gap-[15rem] justify-start mt-[2rem]">
                <h2 class="text-4xl text-orange font-nerko">
                    Nome
                </h2>

                <h2 class="text-4xl text-orange font-nerko">
                    Código
                </h2>
            </div>

            <div class="flex justify-start mt-4">
                <div class="grid gap-[240px] grid-cols-3 grid-row-3">
                    <div class="space-y-6">
                        <p class="text-lg font-bold mt-2">
                        2A-Tarde
                        </p>

                        <p class="text-lg font-bold mt-2">
                        4A-Manhã
                        </p>

                        <p class="text-lg font-bold mt-2">
                        4B-Manhã
                        </p>
                        
                        <p class="text-lg font-bold mt-2">
                        4C-Tarde
                        </p>

                        <p class="text-lg font-bold mt-2">
                        5A-Manhã
                        </p>

                        <p class="text-lg font-bold mt-2">
                        5B-Manhã
                        </p>
                    </div>

                    <div class="space-y-[1.5rem]">
                        <p class="text-lg font-bold mt-2">JEOIS234</p>

                        <p class="text-lg font-bold mt-2">FHSIE835</p>

                        <p class="text-lg font-bold mt-2">IIDNO935</p>
                        
                        <p class="text-lg font-bold mt-2">URIDS934</p>

                        <p class="text-lg font-bold mt-2">HDEJN904</p>

                        <p class="text-lg font-bold mt-2">AHFIE367</p>

                    </div>

                    <div class="flex flex-col space-y-7 items-center">
                        <div>
                            <button>
                                <span class="text-xl ph-pencil"></span>
                                <span class="text-xl ph-trash"></span>
                            </button>
                        </div>

                        <div>
                            <button>
                                <span class="text-xl ph-pencil"></span>
                                <span class="text-xl ph-trash"></span>
                            </button>
                        </div>

                        <div>
                            <button>
                                <span class="text-xl ph-pencil"></span>
                                <span class="text-xl ph-trash"></span>
                            </button>
                        </div>

                        <div>
                            <button>
                                <span class="text-xl ph-pencil"></span>
                                <span class="text-xl ph-trash"></span>
                            </button>
                        </div>

                        <div>
                            <button>
                                <span class="text-xl ph-pencil"></span>
                                <span class="text-xl ph-trash"></span>
                            </button>
                        </div>

                        <div>
                            <button>
                                <span class="text-xl ph-pencil"></span>
                                <span class="text-xl ph-trash"></span>
                            </button>
                        </div>

                    </div>

                </div>

            </div>
            </sl-tab-panel>

            <sl-tab-panel name="configurações">

            </sl-tab-panel>

            <sl-tab-panel name="ajuda">

            </sl-tab-panel>

    </sl-tab-group>   
    </div>
{% endblock %}