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
        darkerPurple: "hsl(238, 60%, 16%)",
        darkpurple: "hsl(255, 45%, 41%)",
        purple: "hsl(252, 100%, 68%)",
        lightpurple: "hsl(281, 100%, 88%)",
        pink: "#F208F6",
        "pink-500": "#D71C6D",
        orange: "hsl(32, 100%, 61%)",
        black: "#181818",
        white: "#fff",
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
      normal: ["Roboto", "sans-serif"],
      cartoon: ["Nerko", "sans-serif"],
      clean: ["Mukta", "sans-serif"],
    },
  },
};
