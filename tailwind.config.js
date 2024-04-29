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
                'primary':'#19BFBE',
                'theme-purple': '#212E84',
            },
            container:{
                center: true, // Centers the container horizontally
            }
        },
    },
    plugins: [],
}
