/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                merah: "#DD555A",
            },
        },
    },
    plugins: [require("tailwind-scrollbar-hide")],
};
