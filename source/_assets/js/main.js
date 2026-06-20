import Alpine from "alpinejs";
import persist from '@alpinejs/persist';
// import Fuse from "fuse.js";
// window.Fuse = Fuse;

window.Alpine = Alpine;
Alpine.plugin(persist);

Alpine.store('visitor', {
  firstVisitDate: Alpine.$persist(null).as('firstVisitDate'),
	from: Alpine.$persist('home').as('from'),
	interest: Alpine.$persist(null).as('interest'),
	prefills: {
			'websites': 'I am looking for more information about your website services...',
			'websites-new': 'I want to build a new website...',
			'websites-redesign': 'I want to redesign my website...',
			'websites-support': 'I need help with my website...',
			'websites-ongoing': 'I started a new site but I am stuck...',
			'websites-cta': 'I want to own a piece of the web...',
			'ecommerce': 'I am interested in having my own online store...',
			'ecommerce-custom': 'I want a customized online store for my product...',
			'ecommerce-managed': 'I want to hit the ground running with Shopify...',
			'ecommerce-cheap': 'I want to build the most cost efficient online store possible...',
			'custom-web-apps': 'I am curious what a custom web app could do for me...',
			'custom-web-apps-community': 'I want to build an online community...',
			'custom-web-apps-productivity': 'I want to build custom tools to be more productive...',
			'custom-web-apps-integration': 'I want to integrate my website with other tools I use...',
			'custom-web-apps-innovation': 'I have an idea for a new product, but how do I build it...',
			'digital-consulting': 'I am interested in bringing in an expert to help with my web goals...',
			'digital-consulting-rebuild': 'I think I need to rebuild my website...',
			'digital-consulting-takeover': 'I took over a website but what I do with it...',
			'digital-consulting-team': 'I want my own dev team...',
			'digital-consulting-strategy': 'If you were me what would you do...',
			'digital-consulting-redesign': 'I need to redesign my website...',
			'special': 'You could never have predicted what I am about to say...',
			'hello': 'Allow me to introduce myself...',
	},
	get prefill() {
			return this.prefills[this.from] ?? ''
	}
})

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

if(!Alpine.store('visitor').firstVisitDate){
	document.addEventListener('click', (e) => {
		const link = e.target.closest('a')
		if (link && link.href && !link.href.startsWith('#')) {
			Alpine.store('visitor').firstVisitDate = new Date().toDateString()
		}
	}, { once: true })
}

Alpine.start();

