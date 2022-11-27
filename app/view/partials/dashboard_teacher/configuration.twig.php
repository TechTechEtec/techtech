<h1 class="text-3xl text-lightpurple my-[1rem] font-nerko uppercase">Gerais</h1>

<form method="post" action="{{BASE}}@update-teacher">

  <div class="flex flex-col items-start justify-start md:flex-row flex-wrap md:items-center md:justify-between gap-[1rem] py-[1rem] w-full">
    <div class="flex flex-col gap-[0.5rem] flex-1">
      <label class=" text-xl font-bold text-eerie dark:text-grey" for="nome">Nome</label>
      <input class="bg-grey rounded-lg h-[2rem] w-full max-w-[16rem]" type="text" id="nome" name="name" value="{{session.name}}">
    </div>  
    
    <div class="flex flex-col gap-[0.5rem] flex-1">
      <label class=" text-xl font-bold text-eerie dark:text-grey" for="email">E-mail</label>
      <input class="bg-grey rounded-lg h-[2rem] w-full max-w-[16rem]" type="email" id="email" name="email" value="{{session.email}}">
    </div>
  </div>

  <div class="flex flex-col items-start justify-start md:flex-row flex-wrap md:items-start md:justify-between gap-1rem md:gap-[2rem] py-[1rem] w-full">
    <div class="flex flex-col gap-[0.5rem] flex-1">
      <label class="mt-4 text-xl font-bold text-eerie dark:text-grey" for="bio">Biografia</label>
      <textarea class="bg-grey rounded-lg h-[8rem] min-h-[8rem] w-full min-w-[24rem] max-w-[24rem]" type="text" id="bio" name="bio">{{session.bio}}
      </textarea>
    </div>

    <div class="flex-1">
        <div class="flex flex-col gap-[0.5rem]  mt-4">
          <label class="text-xl font-bold text-eerie dark:text-grey" for="old_password">Senha Antiga</label>
          <input class="bg-grey rounded-lg h-[2rem] w-full max-w-[16rem]" type="password" name="old_password" id="new_password">
        </div>

        <div class="flex flex-col gap-[0.5rem] mt-4">
          <label class="text-xl font-bold text-eerie dark:text-grey" for="new_password">Nova Senha</label>
          <input class="bg-grey rounded-lg h-[2rem] w-full max-w-[16rem]" type="password" name="new_password" id="new_password">
        </div>
    </div>
  </div>
              
  <button class="w-full max-w-[9rem] rounded-md shadow-sm cursor-pointer transition-all ease-linear duration-200 hover:-translate-y-[2px] bg-pink-500 text-white font-bold text-sm py-2 mt-8">Confirmar</button>
</form>

<hr class="shadow-md my-[1rem]">

<!-- Conta -->
<h2 class="text-3xl text-lightpurple my-[1rem] font-nerko uppercase">Conta</h2>

<div class="grid grid-cols-1 2sm:grid-cols-2 text-eerie dark:text-grey gap-8">
    <div class="flex flex-col items-start justify-start gap-2">
        <h2 class="text-xl mt-[1rem] font-bold">Categoria</h2>
        <p>{{session.perfil == 'student' ? "Estudante" : session.perfil == 'school' ? "Escola": session.perfil == 'teacher' ? "Professor" : 'Administrador'}}</p>
    </div>

    <div class="flex flex-col items-start justify-start gap-2">
        <h2 class="text-xl mt-[1rem] font-bold ">Data de nascimento</h2>
        <p>{{session.extra.birthday|date("d/m/Y")}}</p>
    </div>

    <div class="flex flex-col items-start justify-start gap-2">
        <h2 class="text-xl mt-[1rem] font-bold ">Criado em</h2>
        <p>{{session.extra.created_at|date("d/m/Y")}}</p>
    </div>

    {% if session.extra.schoolName %}
        <div class="flex flex-col items-start justify-start gap-2">
            <h2 class="text-xl mt-[1rem] font-bold ">Escola</h2>
            <p>{{session.school.name ?? "Não tem"}}</p>
        </div>
    {% else %}

        <p class="mt-[2rem] text-eerie dark:text-grey text-lg capitalize">Você não está cadastrado em uma escola</p>

    {% endif %}

</div>

<h2 class="text-3xl text-lightpurple my-[2rem] font-nerko uppercase">Dark Mode</h2>

{% embed "components/toggleDarkModeButton.twig.php" %}{% endembed %}