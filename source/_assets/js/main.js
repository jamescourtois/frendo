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

Alpine.directive('in-view', (el, binding, { cleanup }) => {
  if (!window.matchMedia('(hover: none)').matches) return;

  const check = () => {
    const { top, bottom } = el.getBoundingClientRect();
    el.classList.toggle('in-view', top < window.innerHeight - 300 && bottom > 300);
  };

  window.addEventListener('scroll', check, { passive: true });
  window.addEventListener('resize', check, { passive: true });
  check();

  cleanup(() => {
    window.removeEventListener('scroll', check);
    window.removeEventListener('resize', check);
  });
});

Alpine.start();

