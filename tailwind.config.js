/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                customPurple: "#999AE4",
                customBlue: "#92BAE1",
                customGreen: "#6CDD7E",
                customDarkBlue: "#5656BF",
                customRed: "#E15C5C",
                customBlue2: "#80B2E8",
            },
            borderRadius: {
                "br-only": "0 0 0.21rem 0", // Defina o valor conforme necessário
            },
            fontFamily: {
                itim: ["Itim", "cursive"],
            },
        },
    },
    plugins: [
        function ({ addUtilities }) {
            const newUtilities = {
                ".rounded-br-only": {
                    "border-bottom-right-radius": "2.1rem",
                },
            };
            addUtilities(newUtilities, ["responsive", "hover"]);
        },
    ],
};
