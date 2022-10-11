<!-- STUDENTS LIST -->
{% if students != null %}
<ul class="students w-full sm:w-[400px] h-auto p-2 list-none flex flex-col items-stretch justify-start gap-4 cursor-default">
    {% for student in students %}
        <li class="p-2 rounded-lg border-2 border-solid border-purple bg-[#f0f2f5] hover:bg-[#cdbacf] ease-in duration-300" id={{student.id}}>
            <span class="text-2xl font-bold font-cartoon text-purple w-full break-words">{{student.name}}</span>
           
            <div class="flex flex-row items-center justify-between p-2 gap-4 flex-wrap">
                <span class="text-black font-medium font-clean">{{student.email}}</span>
                <span class="text-black font-medium font-clean">{{student.birthday|date("d/m/Y")}}</span>
            </div>

        </li>
    {% endfor %}
</ul>
{% endif %}

<!-- TEACHERS LIST -->
{% if teachers != null %}
    <ul class="students w-full sm:w-[400px] h-auto p-2 list-none flex flex-col items-stretch justify-start gap-4 cursor-default">
        {% for teacher in teachers %}
            <li class="p-2 rounded-lg border-2 border-solid border-purple bg-[#f0f2f5] hover:bg-[#cdbacf] ease-in duration-300" id={{teacher.id}}>
                <span class="text-2xl font-bold font-cartoon text-purple w-full break-words">{{teacher.name}}</span>
            
                <div class="flex flex-row items-center justify-between p-2 gap-4 flex-wrap">
                    <span class="text-black font-medium font-clean">{{teacher.email}}</span>
                </div>
            </li>
        {% endfor %}
    </ul>

{% endif %}

<!-- TEACHERS TYPE LIST 2 -->
{% if teachers_type2 != null %}
    {% for teacher in teachers_type2 %}
        <option value="{{teacher.email}}">{{teacher.email}}</option>
    {% endfor %}
{% endif %}

<!-- SCHOOL LIST -->
{% if schools != null %}
<ul class="students w-full sm:w-[400px] h-auto p-2 list-none flex flex-col items-stretch justify-start gap-4 cursor-default">
    {% for school in schools %}
        <li class="p-2 rounded-lg border-2 border-solid border-purple bg-[#f0f2f5] hover:bg-[#cdbacf] ease-in duration-300" id={{school.id}}>
            <span class="text-2xl font-bold font-cartoon text-purple w-full break-words">{{school.name}}</span>
           
            <div class="flex flex-row items-center justify-between p-2 gap-4 flex-wrap">
                <span class="text-black font-medium font-clean">{{school.email}}</span>
            </div>
        </li>
    {% endfor %}
</ul>
{% endif %}

<!-- CLASS LIST -->
{% if classes != null %}
<ul class="students w-full  h-auto p-2 list-none flex flex-col items-stretch justify-start gap-4 cursor-default">
    {% for class in classes %}
        <li class="p-2 rounded-lg border-2 border-solid border-purple bg-[#f0f2f5] hover:bg-[#cdbacf] ease-in duration-300" id={{class.id}}>
            <span class="text-2xl font-bold font-cartoon text-purple w-full break-words">{{class.name}}</span>
           
            <div class="flex flex-row items-center justify-between p-2 gap-4 flex-wrap">
                <span class="text-black font-medium font-clean">{{class.code}}</span>
                <span class="text-black font-medium font-clean">{{class.teacher_email}}</span>
            </div>
        </li>
    {% endfor %}
</ul>
{% else %}
<p class="text-purple font-roboto font-extrabold w-full text-center text-xl uppercase"> Não há nenhuma classe cadastrada!</p>
<img src="{{BASE}}svgs/techbo_error.svg" alt="techbo error image" class="w-full h-full max-w-[120px] max-h-[120px]"/>

{% endif %}