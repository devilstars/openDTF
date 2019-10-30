const tailwindcss = require("tailwindcss");
const autoprefixer = require("autoprefixer");
const purgecss = require("@fullhuman/postcss-purgecss");
module.exports = {
    plugins: [
        tailwindcss("./tailwind.config.js"),
        autoprefixer({
            add: true,
            grid: true
        }),
        //Only add purgecss in production
        process.env.NODE_ENV === "production" ? purgecss({
            content: [
                "../public/index.html",
                "../resources/views/front/index.blade.php",
                "./src/**/*.html",
                "./src/**/*.vue"
            ],
            defaultExtractor: cont => cont.match(/[A-Za-z0-9-_:/]+/g) || []
        }) : ""
    ]
};
