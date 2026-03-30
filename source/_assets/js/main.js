import Alpine from "alpinejs";
import persist from '@alpinejs/persist';
import collapse from '@alpinejs/collapse';
// import Fuse from "fuse.js";
// window.Fuse = Fuse;

window.Alpine = Alpine;
Alpine.plugin(persist,collapse);

// Move the store registration into the 'alpine:init' listener
document.addEventListener('alpine:init', () => {
    Alpine.store('theme', {
        dark: Alpine.$persist(false).as('theme_dark'),
        showIntro: Alpine.$persist(true).as('has_not_seen_intro'),
        toggle() {
            this.dark = !this.dark;
        },
        closeIntro() {
            this.showIntro = false;
        }
    })
})
Alpine.start();