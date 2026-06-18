import Alpine from "alpinejs";
import persist from '@alpinejs/persist';
// import Fuse from "fuse.js";
// window.Fuse = Fuse;

window.Alpine = Alpine;
Alpine.plugin(persist);

Alpine.directive('in-view', (el, binding, { cleanup }) => {
  if (!window.matchMedia('(hover: none)').matches) return;

  const check = () => {
    const { top, bottom } = el.getBoundingClientRect();
    el.classList.toggle('in-view', top < window.innerHeight - 600 && bottom > 200);
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

