import Alpine from "alpinejs";
import persist from '@alpinejs/persist';
// import Fuse from "fuse.js";
// window.Fuse = Fuse;

window.Alpine = Alpine;
Alpine.plugin(persist);

// Move the store registration into the 'alpine:init' listener
document.addEventListener('alpine:init', () => {
    Alpine.store('theme', {
        showIntro: Alpine.$persist(true).as('has_not_seen_intro'),
        closeIntro() {
            this.showIntro = false;
        }
    })
})
Alpine.start();