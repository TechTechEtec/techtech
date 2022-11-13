tailwind.config = {
  content: ["../../app/**/*.{php,html,js}"],
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
        white: "#fff",
        ghostwhite: "#F5F5F5",
        grey: "#DADDE1",
      },
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
