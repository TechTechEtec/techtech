<sl-dialog label="Escolha seu avatar" class="dialog-overview" style="--width: min(500px, 95%); overflow:auto">

    <!-- IMAGES IDS  -->

    <!-- STUDENTS IMAGES -->
    {% set imagesStudents = [
            {id: "1XgluXrQ_UUF2XqI4q08lnIQa8_RYoKgj", label: "avatar_students_1"},
            {id: "1t-CwxcY61EgLf5o1a1ED3bJdVQeLTcEc", label: "avatar_students_2"},
            {id: "1O-0gwXgK7tcmszMZ3kwGdJpiv0sfeE1G", label: "avatar_students_3"},
            {id: "1TUP77UNGynx00L9dPaNIaXfL3aL1Snoj", label: "avatar_students_4"},
            {id: "1Vj54kVhWcftNGcrC9R30Kxx1F0ItH7Dr", label: "avatar_students_5"},
            {id: "1wPYyjZRCetdTqBR3g-ETGZFG8BS3TbQQ", label: "avatar_students_6"},
            {id: "1PHl-HLF1hO6_L8qUkpegnFixPYO8cV5v", label: "avatar_students_7"},
            {id: "1_ePnHfr-GJlJJd1T0UMvc30OHu6FSeu4", label: "avatar_students_8"},
            {id: "15wdhej-uY351HX95rEH8PD_kKEon85Dp", label: "avatar_students_9"},
            {id: "1KucPqVJ3hByTI0W_KBhVWJJOudcMsuoF", label: "avatar_students_10"},
            {id: "1OGk5iqgZWTop3K0_2eGPlEpsUbDZrBsl", label: "avatar_students_11"},
            {id: "12PooKyqGcrvUganpCD3U6NiqenCzyzSm", label: "avatar_students_12"},
            {id: "1Q46fVZQjZXGM19bWVx6vSuGeZIUU-CYr", label: "avatar_students_13"},
            {id: "1vczinxOM0nV7TlMSESRevOVUCNvEyW9Z", label: "avatar_students_14"},
            {id: "1MMLJCpipWFFJAAvnlWiRNo80MF238o9F", label: "avatar_students_15"},
            {id: "1sDY7LMF_ykXTw4F9k4JjUX1CqwO0ClUW", label: "avatar_students_16"},
        ]
    %}

     <!-- SCHOOLS IMAGES -->
     {% set imagesSchools = [
            {id: "12NCQgxtrVMexua457fDutFYNyo67Kxzq", label: "avatar_school_1"},
            {id: "1W3CSg4Vl7bbG9UZ5-Fs4XoIbGe253g-W", label: "avatar_school_2"},
            {id: "1yjq3zFfRYzpUW1GGVpxSYACQt92xqbdO", label: "avatar_school_8"},
            {id: "1sR8lA0jhKf7YeO2x2jv98tZYgZagjsvs", label: "avatar_school_6"},
            {id: "1qUVOjC9fxzKLANmHhjaCr9j-pRTNa1vJ", label: "avatar_school_4"},
            {id: "1zFYJDKcBEaO2NLRzUmxtB4sqqlJQZbf7", label: "avatar_school_5"},
            {id: "1DV9iKbc4LN7-_nb_ZN4BItwo3gyfZX-0", label: "avatar_school_7"},
            {id: "17m6z5SBt4LKUNdSyPL65px8lqrO28NHH", label: "avatar_school_3"},
            
            
            ]
     %}
    <!-- TEACHERS IMAGES -->
    {% set imagesTeachers = [
            {id: "1nLHtv8PMxQeiHQBKzAG8Uo7QQRpqofl9", label: "avatar_teacher_8"},
            {id: "10xk-rdWrEggIKlP71XqvpF-9a9LGgrd_", label: "avatar_teacher_2"},
            {id: "17_Dw2--eWMhgSdvhqfWiqcyjz5L8poke", label: "avatar_teacher_5"},
            {id: "13RjBTyui0J2HDIYHipoJLJxeBF-ETcVG", label: "avatar_teacher_1"},
            {id: "1XqfPqmaNEiOTuwFsVz2n6F8Dy5cpulU5", label: "avatar_teacher_7"},
            {id: "1EJBRTinwgqw2PUpoBPUzo44UZ1h1y1Qh", label: "avatar_teacher_3"},
            {id: "1Dnlm2b4Lfue1KrOc_9F90B8mPv4Z5HkB", label: "avatar_teacher_6"},
            {id: "1DDpsNCc6Qk_webMO6tZEadz_oH9W8uCj", label: "avatar_teacher_4"},


            
            ]
     %}

    <!-- STUDENTS -->

    {% block imageStudents %} {% endblock %}

    <!-- SCHOOLS -->

     {% block imageSchools %} {% endblock %}

     <!-- TEACHERS -->
     {% block imageTeachers %} {% endblock %}

       
    </div>
    <sl-button slot="footer" variant="danger">Fechar</sl-button>
</sl-dialog>
