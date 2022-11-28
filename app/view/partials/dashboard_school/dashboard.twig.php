<h1 class="my-[1rem] font-nerko font-normal text-4xl w-full text-left text-orange">Visualização Geral</h1>

<sl-divider style="--color: gray;"></sl-divider>

<ul class="w-full p-[1rem] flex flex-wrap flex-row items-center justify-center gap-[1.5rem]">

  <li data-tilt  data-tilt-speed="1000" data-tilt-perspective="3000" data-tilt-scale="1.025" class="flex-1 w-full w-[25rem] h-[25rem] rounded-md shadow-md border-2 border-solid p-[1rem] cursor-default py-[1.5rem] flex flex-col items-center justify-center gap-[1.5rem]">
      <h1 class="uppercase text-2xl font-roboto text-pink-500">Estudantes</h1>

      <sl-divider style="--color: gray;"></sl-divider>

      <h2 class="font-extrabold font-mukta text-[6.5rem] text-center text-pink-500">{{session.studentAmount}}</h2>
  </li>

  <li data-tilt  data-tilt-speed="1000" data-tilt-perspective="3000" data-tilt-scale="1.025" class="flex-1 w-full w-[25rem] h-[25rem] rounded-md shadow-md border-2 border-solid p-[1rem] cursor-default py-[1.5rem] flex flex-col items-center justify-center gap-[1.5rem]">
      <h1 class="uppercase text-2xl font-roboto text-pink-500">Professores</h1>

      <sl-divider style="--color: gray;"></sl-divider>

      <h2 class="font-extrabold font-mukta text-[6.5rem] text-center text-pink-500">{{session.teacher ? session.teacher|length : 0}}</h2>
  </li>

  <li data-tilt  data-tilt-speed="1000" data-tilt-perspective="3000" data-tilt-scale="1.025" class="flex-1 w-full w-[25rem] h-[25rem] rounded-md shadow-md border-2 border-solid p-[1rem] cursor-default py-[1.5rem] flex flex-col items-center justify-center gap-[1.5rem]">
      <h1 class="uppercase text-2xl font-roboto text-pink-500">Turmas</h1>

      <sl-divider style="--color: gray;"></sl-divider>

      <h2 class="font-extrabold font-mukta text-[6.5rem] text-center text-pink-500">{{session.classroom ? session.classroom|length : 0}}</h2>
  </li>

</ul>