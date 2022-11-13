<!-- STUDENT -->
{% if student != null %}
    <div class="m-2 student p-2 rounded-lg border-2 border-solid border-purple bg-[#f0f2f5] hover:bg-[#cdbacf] ease-in duration-300  w-full sm:w-[400px] h-auto p-2" id={{student.id}}>

        <p class="text-2xl font-bold font-cartoon text-purple w-full break-words">{{student[0].name}}</p>

        <div class="flex flex-row items-center justify-between p-2 gap-4 flex-wrap">
            <p class="text-black font-medium font-clean">{{student[0].email}}</p>
            <p class="text-black font-medium font-clean">{{student[0].birthday|date("d/m/Y")}}</p>
    </div>
</div>
{% endif %}

<!-- TEACHER -->
{% if teacher != null %}
    <div class="m-2 student p-2 rounded-lg border-2 border-solid border-purple bg-[#f0f2f5] hover:bg-[#cdbacf] ease-in duration-300  w-full sm:w-[400px] h-auto p-2" id={{teacher.id}}>

        <p class="text-2xl font-bold font-cartoon text-purple w-full break-words">{{teacher[0].name}}</p>

        <div class="flex flex-row items-center justify-between p-2 gap-4 flex-wrap">
            <p class="text-black font-medium font-clean">{{teacher[0].email}}</p>
        </div>
    </div>
{% endif %}

<!-- SCHOOL -->
{% if school != null %}
    <div class="m-2 student p-2 rounded-lg border-2 border-solid border-purple bg-[#f0f2f5] hover:bg-[#cdbacf] ease-in duration-300  w-full sm:w-[400px] h-auto p-2" id={{school.id}}>

        <p class="text-2xl font-bold font-cartoon text-purple w-full break-words">{{school[0].name}}</p>

        <div class="flex flex-row items-center justify-between p-2 gap-4 flex-wrap">
            <p class="text-black font-medium font-clean">{{school[0].email}}</p>
        </div>
    </div>
{% endif %}

<!-- CLASS -->
{% if class != null %}
    <div class="m-2 student p-2 rounded-lg border-2 border-solid border-purple bg-[#f0f2f5] hover:bg-[#cdbacf] ease-in duration-300  w-full sm:w-[400px] h-auto p-2" id={{class.id}}>

        <p class="text-2xl font-bold font-cartoon text-purple w-full break-words">{{class[0].name}}</p>

        <div class="flex flex-row items-center justify-between p-2 gap-4 flex-wrap">
            <p class="text-black font-medium font-clean">{{class[0].email}}</p>
        </div>
    </div>
{% endif %}