document.addEventListener('DOMContentLoaded', () => {
  const sidebar = document.getElementById('adminSidebar');
  const sidebarToggle = document.getElementById('adminSidebarToggle');
  const backdrop = document.getElementById('adminBackdrop');

  const closeSidebar = () => {
    if (!(sidebar instanceof HTMLElement) || !(backdrop instanceof HTMLElement)) {
      return;
    }
    sidebar.classList.remove('is-open');
    backdrop.classList.remove('is-open');
  };

  if (sidebar instanceof HTMLElement && sidebarToggle instanceof HTMLElement && backdrop instanceof HTMLElement) {
    sidebarToggle.addEventListener('click', () => {
      sidebar.classList.toggle('is-open');
      backdrop.classList.toggle('is-open');
    });

    backdrop.addEventListener('click', closeSidebar);
    sidebar.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', closeSidebar);
    });
  }

  const typeSelects = document.querySelectorAll('[data-menu-type]');
  typeSelects.forEach(select => {
    const form = select.closest('form');
    if (!form) return;
    const redirectFields = form.querySelectorAll('[data-redirect-fields]');
    if (!redirectFields.length) return;
    
    const syncRedirectFields = () => {
      const isRedirect = select.value === 'link';
      redirectFields.forEach((field) => {
        field.classList.toggle('hidden', !isRedirect);
      });

      const redirectUrl = form.querySelector('input[name="url"]');
      if (redirectUrl instanceof HTMLInputElement) {
        redirectUrl.required = isRedirect;
      }
    };
    
    syncRedirectFields();
    select.addEventListener('change', syncRedirectFields);
  });

  const slugSources = document.querySelectorAll('[data-slug-source]');
  slugSources.forEach(source => {
    const form = source.closest('form');
    if (!form) return;
    const target = form.querySelector('[data-slug-target]');
    if (!target) return;

    let textEdited = false;
    target.addEventListener('input', () => { textEdited = true; });

    source.addEventListener('input', () => {
      if (!textEdited) {
        target.value = source.value
          .toLowerCase()
          .replace(/[^a-z0-9]+/g, '-')
          .replace(/(^-|-$)+/g, '');
      }
    });
  });
});
