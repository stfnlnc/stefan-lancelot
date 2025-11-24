import tailwindcss from "@tailwindcss/vite";
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/css/main.css",
                "resources/js/main.js",
                "resources/css/vaste.css",
                "resources/js/vaste.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
