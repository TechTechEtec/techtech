<sl-dialog label="Escolha seu avatar" class="dialog-overview" style="--width: min(850px, 95%); overflow:auto">

    <!-- IMAGES IDS  -->
    {% set images = [
            {id: "1Qy-zB382HMXBMegryPkFvVK5hc4bMwbw", label: "Avatar 1 de 50"},
            {id: "1XgluXrQ_UUF2XqI4q08lnIQa8_RYoKgj", label: "Avatar 2 de 50"},
            {id: "12NCQgxtrVMexua457fDutFYNyo67Kxzq", label: "Avatar 3 de 50"},
            {id: "1W3CSg4Vl7bbG9UZ5-Fs4XoIbGe253g-W", label: "Avatar 4 de 50"},
            {id: "1OGk5iqgZWTop3K0_2eGPlEpsUbDZrBsl", label: "Avatar 5 de 50"},
            {id: "13RjBTyui0J2HDIYHipoJLJxeBF-ETcVG", label: "Avatar 6 de 50"},
            {id: "1OT9Y8y2YKaDoIb49rpR-F_UVWes2_ZNP", label: "Avatar 7 de 50"},
            {id: "1TUP77UNGynx00L9dPaNIaXfL3aL1Snoj", label: "Avatar 8 de 50"},
            {id: "10xk-rdWrEggIKlP71XqvpF-9a9LGgrd_", label: "Avatar 9 de 50"},
            {id: "1uYXMoTgljtXVR6UgltXTnTGxnSMgg5OA", label: "Avatar 10 de 50"}
        ]
    %}

    <div class="avatar-group flex flex-row flex-wrap justify-start items-center gap-[1rem]">
        {% for image in images %}
            <sl-avatar
                shape="circle"
                style="--size:6rem; cursor:pointer;"
                image="http://drive.google.com/uc?id={{image.id}}"
                label="{{image.label}}"
                class="avatar"
            ></sl-avatar>
        {% endfor %}
    </div>
    <sl-button slot="footer" variant="danger">Fechar</sl-button>
</sl-dialog>