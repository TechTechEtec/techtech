{% extends "partials/body.twig.php" %}

{% block title %} Prova Módulo 1 | Techtech {% endblock %}

{% block customStyle %}
    <style>
        html { margin: 0; height: 100%; overflow: auto; }
        iframe { position: absolute; top: 0; right: 0; bottom: 0; left: 0; border: 0; }
    </style>
{% endblock %}

{% block body %}
    <!-- MAIN CONTENT -->
    
    <!-- Iframe with userID and module hidden query parameters in URL -->
        
    <a href="{{BASE}}modules/01" title="Voltar para o módulo 04" class="px-4 py-0 rounded-lg drop-shadow-lg bg-purple text-white font-bold w-[120px] text-center text-lg mx-auto flex flex-row items-center justify-around gap-[1rem] hover:translate-y-[-3px] eas-linear duration-300 cursor-pointer absolute top-[10px] left-[10px]">
        <sl-icon style="font-size: 3rem" slot="prefix" name="arrow-left-short"></sl-icon>
        voltar
    </button>
    
    <script>
        Tally.loadEmbeds();
    </script>
  
{% endblock %}