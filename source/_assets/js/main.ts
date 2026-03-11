import Alpine from "alpinejs";
import persist from '@alpinejs/persist'
// import Fuse from "fuse.js";

// window.Fuse = Fuse;
Alpine.plugin(persist)
window.Alpine = Alpine;

Alpine.store('theme', {
    dark: Alpine.$persist(false),
		showIntro: Alpine.$persist(true),
		toggle() {
        this.dark = !this.dark;
    },
		closeIntro() {
        this.showIntro = false;
    }
})

Alpine.start();


