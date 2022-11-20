tailwind.config = {
  content: ["../../app/**/*.{php,html,js}"],
  darkMode: "class",
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
  },
  theme: {
    extend: {
      colors: {
        blue: "#00c3ff",
        darkerPurple: document.getElementById("page").classList.contains("dark") ? "#8C10DF" : "#101241",
        darkpurple: "hsl(255, 45%, 41%)",
        purple: "hsl(252, 100%, 68%)",
        lightpurple: document.getElementById("page").classList.contains("dark") ? "#242323" : "hsl(281, 100%, 88%)", 
        pink: "#F208F6",
        "pink-500": "#D71C6D",
        orange: "hsl(32, 100%, 61%)",
        black: document.getElementById("page").classList.contains("dark") ? "#f7f7f7" : "#181818",
        white: document.getElementById("page").classList.contains("dark") ? "1c1c1c" : "#fff",
        ghostwhite: document.getElementById("page").classList.contains("dark") ? "1c1c1c" : "#F5F5F5",
        grey: "#DADDE1",

        eerie: "#1c1c1c",
        lighteerie: "#242323",
        violet: "#8C10DF",
        darkwhite: "#f7f7f7",
      }
    },
    screens: {
      sm: "460px",

      "2sm": "595px",

      md: "768px",

      "2md": "900px",

      lg: "1024px",

      xl: "1280px",

      "2xl": "1536px",
    },
    fontFamily: {
      roboto: ["Roboto", "sans-serif"],
      nerko: ["Nerko One", "cursive"],
      mukta: ["Mukta", "sans-serif"],
    },
    lineHeight: {
      eloose: "4.5",
    },
  },
};
