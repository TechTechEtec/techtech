{% extends "partials/layout.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block userInfo %} 
    {% embed "components/userInformation.twig.php" %}{% endembed %}
{% endblock %}

{% block main %}
    <div class="md:ml-[17.5rem] flex justify-center">
        <sl-tab-group id="tab-group">

            <!-- TABS -->
            <sl-tab slot="nav" panel="painel" class="tab">
            <h1 class="text-3xl font-nerko">Painel</h1>
            </sl-tab>

            <sl-tab slot="nav" panel="turmas" class="tab">
            <h1 class="text-3xl font-nerko" >Turmas</h1>
            </sl-tab>

            <sl-tab slot="nav" panel="configurações" class="tab">
            <h1 class="text-3xl font-nerko" >Configurações</h1>
            </sl-tab>

            <sl-tab slot="nav" panel="ajuda" class="tab">
            <h1 class="text-3xl font-nerko" >Ajuda</h1>
            </sl-tab>

            <!-- PERFIL TAB CONTENT -->
            <sl-tab-panel name="painel">
                <div class="mt-8 flex justify-between rounded-sm bg-white drop-shadow-lg w-[45rem] h-[3rem] items-center">
                    <h1 class="ml-4 text-4xl text-orange font-nerko">Geral</h1>
                    <p class="mr-4 font-bold text-xl">Turmas
                        <button>
                            <span class="ml-12 ph-caret-double-down"></span>
                        </button>
                    </p>
                </div>

                <h1 class="flex justify-center mt-8 text-4xl text-orange font-nerko">Média Geral da Escola</h1>
            </sl-tab-panel>

            <!-- CLASS TAB CONTENT -->
            <sl-tab-panel name="turmas">
                <h1 class="text-4xl font-nerko text-orange">Turma</h1>

                <div class="flex justify-start mt-4">
                    <div class="flex gap-[25rem] justify-around rounded-sm bg-white drop-shadow-lg w-[45rem] h-[3rem] items-center">
                        <button class="bg-lightpurple rounded-md w-[8rem] h-[2rem] drop-shadow-lg">
                            <span class="font-nerko font-bold text-2xl">Nova +</span>
                        </button>
                        <input class="rounded-sm h-[2rem] w-[11rem]"
                        type="text"
                        >
                    </div>
                </div>

                <div class="flex gap-[8.5rem] justify-start mt-[5rem]">
                    <h2 class="text-4xl text-orange font-nerko">
                        Nome
                    </h2>

                    <h2 class="text-4xl text-orange font-nerko">
                        Código
                    </h2>
                    
                    <h2 class="text-4xl text-orange font-nerko">
                        Professor
                    </h2>
                </div>

                <div class="flex justify-start mt-6">
                    <div class="grid gap-[9rem] grid-cols-4 grid-row-4">
                        <div class="space-y-6">
                            <p class="text-lg font-bold">
                            2A-Tarde
                            </p>

                            <p class="text-lg font-bold">
                            4A-Manhã
                            </p>

                            <p class="text-lg font-bold">
                            4B-Manhã
                            </p>

                            <p class="text-lg font-bold">
                            4C-Tarde
                            </p>
                            
                            <p class="text-lg font-bold">
                            5A-Manhã
                            </p>
                            
                            <p class="text-lg font-bold">
                            5B-Manhã
                            </p>
                        </div>

                        <div class="space-y-[1.8rem]">
                            <p>JEOIS234</p>
                            <p>FHSIE835</p>
                            <p>FHSIE835</p>
                            <p>URIDS934</p>
                            <p>HDEJN904</p>
                            <p>AHFIE367</p>
                        </div>

                        <div class="space-y-[1.8rem]">
                            <p>Gilmar</p>
                            <p>Gilmar</p>
                            <p>Antônio</p>
                            <p>Antônio</p>
                            <p>Renata</p>
                            <p>Renata</p>
                        </div>

                        <div class="flex flex-col space-y-[1.7rem] items-center">
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
                
                <div>
                    <!-- Painel -->
                    <h1 class="text-4xl text-lightpurple my-4 font-nerko">Perfil</h1>                    
                    <div class="flex flex-col 2sm:grid-cols-2 gap-8">
                        <div class="flex flex-col gap-2">
                            <label class=" text-xl font-bold text-eerie dark:text-grey" for="nome">Nome</label>
                            <input class="bg-grey rounded-md h-[2rem] w-[14rem]"
                            type="text"
                            id="nome">
                        </div>          
                    
                        <div class="flex flex-col gap-2">
                            <label class="text-xl font-bold text-eerie mt-4 dark:text-grey" for="nome">Conta</label>
                            <input class="bg-grey rounded-md h-[2rem] w-[14rem]"
                            type="text"
                            id="conta">
                        </div>              
                    </div>
                
                    <div class="flex flex-col gap-2">
                        <label class="mt-4 text-xl font-bold text-eerie dark:text-grey" for="bio">Bio</label>
                        <textarea class="bg-grey rounded-md h-[8rem] min-h-[8rem] w-full max-w-[28rem]"
                        type="text" 
                        id="bio"></textarea>
                    </div>
                </div>

                <!-- Conta -->
                <h1 class="text-4xl text-lightpurple my-4 font-nerko">Conta</h1>

                <div class="flex flex-col 2sm:grid-cols-2 text-eerie dark:text-grey gap-8">
                    <div class="flex flex-col items-start justify-start gap-2">
                        <h2 class="text-xl mt-2 font-bold">E-mail</h2>
                        <p>eteccarapicuiba@etec.sp.gov.br</p>
                    </div>

                    <div class="flex flex-col items-start justify-start gap-2">
                        <h2 class="text-xl mt-2 font-bold ">Escola</h2>
                        <p>ETEC de Carapicuíba</p>
                    </div>

                    <div class="flex flex-col items-start justify-start gap-2">
                        <h2 class="text-xl mt-2 font-bold ">Senha</h2>
                        <p>*********</p>
                    </div>

                </div>
            </sl-tab-panel>

            <sl-tab-panel name="ajuda">
            </sl-tab-panel>

        </sl-tab-group>   
    </div>

    <style>

    #tab-group::part(active-tab-indicator){
        border: 1px solid hsl(255, 45%, 41%);
    }

    html.dark #tab-group::part(active-tab-indicator){
        border: 1px solid hsl(252, 100%, 68%);
    }

    .tab::part(base):hover {
        color:hsl(255, 45%, 41%);
    }

    .tab::part(base){
        height:2.5rem;
        margin-right: 0.25rem;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem 0.25rem 0 0;
    }

    .tab[active]::part(base){
        color: #101241;
        background-color: hsl(281, 100%, 88%);
        height:2.5rem;
    }

    html.dark .tab::part(base):hover {
        color: white;
    }

    html.dark .tab[active]::part(base){
        color: white;
        background-color: hsl(255, 45%, 41%);
        height:2.5rem;
    }

    </style>
{% endblock %}