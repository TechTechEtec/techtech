{% extends "partials/body.twig.php" %}

{% block title %} Prova Módulo 4 | Techtech {% endblock %}

{% block customStyle %}
    <style>
        html { margin: 0; height: 100%; overflow: auto; }
        iframe { position: absolute; top: 0; right: 0; bottom: 0; left: 0; border: 0; }
    </style>
{% endblock %}

{% block body %}
    <!-- MAIN CONTENT -->
    <div class="w-full h-full min-h-screen bg-lightpurple">
        <iframe data-tally-src="https://tally.so/embed/mZ9Vrz?dynamicHeight=1&userId={{session.extra.id}}&profile={{session.perfil}}" width="100%" height="3281" frameborder="0" marginheight="0" marginwidth="0" title="Prova Do Módulo 02"></iframe>
            
        <button onclick="window.location.replace('{{BASE}}'); return false" title="Voltar para dashboard" class="px-[0.5rem] py-[0.5rem] rounded-lg drop-shadow-lg bg-purple text-white font-bold w-full max-w-[8.125rem] text-center text-lg mx-auto flex flex-row items-center justify-start gap-[0.5rem] hover:translate-y-[-0.1875rem] eas-linear duration-200 cursor-pointer absolute top-[0.625rem] left-[0.625rem]">
            <i class="ph-arrow-left"></i>
            <span>Conteúdo</span>
        </button>
    </div>

    <script>
        Tally.loadEmbeds();
    </script>
  
{% endblock %}