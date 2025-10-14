document.addEventListener('DOMContentLoaded', function() {
  const sidebar = document.getElementById('sidebar');
  const menuToggle = document.getElementById('menu-toggle');
  const breakpoint = 1220;

  function closeSidebar() {
    sidebar.classList.remove('sidebar-open');
    menuToggle.setAttribute('aria-expanded', 'false'); 
  }

  menuToggle.addEventListener('click', function() {
    sidebar.classList.toggle('sidebar-open');
    const isExpanded = this.getAttribute('aria-expanded') === 'true' || false;
    this.setAttribute('aria-expanded', !isExpanded);
  });
  
  window.addEventListener('resize', function() {
    if (window.innerWidth > breakpoint) {
      if (sidebar.classList.contains('sidebar-open')) {
        closeSidebar();
      }
    }
  });

});