/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "../content/**/*.{html,php}", // Run in docker
        "../../server/app/src/view/**/*.{html,php}", // Run in host
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
