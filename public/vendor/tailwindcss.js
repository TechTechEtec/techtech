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
        darkerPurple: "#101241",
        darkpurple: "hsl(255, 45%, 41%)",
        purple: "hsl(252, 100%, 68%)",
        lightpurple: "hsl(281, 100%, 88%)",
        pink: "#F208F6",
        "pink-500": "#D71C6D",
        orange: "hsl(32, 100%, 61%)",
        black: "#181818",
        white: "#ffffff",
        ghostwhite: "#F5F5F5",
        grey: "#DADDE1",

        // Dark Colors:
        eerie: "#27242A",
        lighteerie: "#332F37",
        violet: "#B353F3",
        darkwhite: "#f7f7f7",
      },
    },
    screens: {
      sm: "460px",

      "2sm": "595px",

      md: "870px",

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
    gap: {
      '11': '42rem',
    }
  },
};
