
<sl-switch id="toggleDarkModeButton" style="--width: 3.125rem; --height: 1.5rem; --thumb-size: 1rem;">
    Dark
</sl-switch>

<style>
    #toggleDarkModeButton::part(thumb) {
        background: #DADDE1
    }

    html.dark #toggleDarkModeButton::part(thumb) {
        background: #332F37;
        border: none;
    }

    #toggleDarkModeButton[checked]::part(control){
        background: #D71C6D;
        border: none;
    }
</style>

