document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  const menuButton = document.querySelector('.menu-btn');
  const menu = document.querySelector('.nav-links');

  const closeMenu = () => {
    if (!menu || !menuButton) return;
    menu.classList.remove('open');
    menuButton.setAttribute('aria-expanded', 'false');
    menuButton.setAttribute('aria-label', 'Abrir menú');
    document.body.classList.remove('menu-open');
  };

  menuButton?.addEventListener('click', () => {
    const open = !menu.classList.contains('open');
    menu.classList.toggle('open', open);
    menuButton.setAttribute('aria-expanded', String(open));
    menuButton.setAttribute('aria-label', open ? 'Cerrar menú' : 'Abrir menú');
    document.body.classList.toggle('menu-open', open);
  });
  menu?.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));
  document.addEventListener('keydown', event => { if (event.key === 'Escape') closeMenu(); });
  window.addEventListener('resize', () => { if (window.innerWidth > 900) closeMenu(); });

  const updateHeader = () => header?.classList.toggle('scrolled', window.scrollY > 18);
  updateHeader();
  window.addEventListener('scroll', updateHeader, { passive: true });

  const page = document.body.dataset.page;
  document.querySelectorAll('[data-nav]').forEach(link => {
    if (link.dataset.nav === page) link.setAttribute('aria-current', 'page');
  });
  document.querySelectorAll('[data-year]').forEach(el => { el.textContent = new Date().getFullYear(); });

  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!reducedMotion && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => entries.forEach(entry => {
      if (entry.isIntersecting) { entry.target.classList.add('visible'); observer.unobserve(entry.target); }
    }), { threshold: .12 });
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
  } else document.querySelectorAll('.reveal').forEach(el => el.classList.add('visible'));

  const products = [...document.querySelectorAll('.product-card')];
  const filters = [...document.querySelectorAll('.filter')];
  const search = document.querySelector('#catalog-search');
  const empty = document.querySelector('.empty-state');
  const visibleCount = document.querySelector('#catalog-visible-count');
  let category = 'todos';
  const filterProducts = () => {
    const term = (search?.value || '').trim().toLocaleLowerCase('es');
    let visible = 0;
    products.forEach(card => {
      const matchesCategory = category === 'todos' || card.dataset.category === category;
      const matchesTerm = card.textContent.toLocaleLowerCase('es').includes(term);
      card.hidden = !(matchesCategory && matchesTerm);
      if (!card.hidden) visible += 1;
    });
    if (visibleCount) visibleCount.textContent = String(visible);
    if (empty) empty.style.display = visible ? 'none' : 'block';
  };
  filters.forEach(button => button.addEventListener('click', () => {
    category = button.dataset.filter;
    filters.forEach(item => { item.classList.toggle('active', item === button); item.setAttribute('aria-pressed', String(item === button)); });
    filterProducts();
  }));
  search?.addEventListener('input', filterProducts);

  const params = new URLSearchParams(location.search);
  const requestedCategory = params.get('categoria');
  if (requestedCategory && filters.some(button => button.dataset.filter === requestedCategory)) {
    category = requestedCategory;
    filters.forEach(button => {
      const selected = button.dataset.filter === category;
      button.classList.toggle('active', selected);
      button.setAttribute('aria-pressed', String(selected));
    });
    filterProducts();
  }
  const productField = document.querySelector('#asunto');
  const messageField = document.querySelector('#mensaje');
  if (params.get('producto') && productField && messageField) {
    productField.value = 'Cotización';
    messageField.value = `Hola, quisiera cotizar ${params.get('producto')}.`;
  }

  const form = document.querySelector('#contact-form');
  form?.addEventListener('submit', event => {
    event.preventDefault();
    if (!form.reportValidity()) return;
    const data = new FormData(form);
    const subject = `${data.get('asunto')} — ${data.get('nombre')}`;
    const body = [`Nombre: ${data.get('nombre')}`, `Email: ${data.get('email')}`, `Teléfono: ${data.get('telefono') || 'No indicado'}`, '', data.get('mensaje')].join('\n');
    const status = document.querySelector('.form-status');
    if (status) status.textContent = 'Abrimos tu aplicación de correo con el mensaje listo para enviar.';
    window.location.href = `mailto:ventas@premiumplas.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
  });
});
