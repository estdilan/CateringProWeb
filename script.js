document.addEventListener('DOMContentLoaded', function() {
  const menu = document.getElementById('menu');
  const menuToggle = document.getElementById('menu-toggle');
  const breakpoint = 1220;

  function closeMenu() {
    menu.classList.remove('menu-open');
    menuToggle.setAttribute('aria-expanded', 'false'); 
  }

  menuToggle.addEventListener('click', function() {
    menu.classList.toggle('menu-open');
    const isExpanded = this.getAttribute('aria-expanded') === 'true' || false;
    this.setAttribute('aria-expanded', !isExpanded);
  });
  
  window.addEventListener('resize', function() {
    if (window.innerWidth > breakpoint) {
      if (menu.classList.contains('menu-open')) {
        closeMenu();
      }
    }
  });
});

function formToObject(formElement) {
   
    const formData = new FormData(formElement);
    const dataObject = Object.fromEntries(formData.entries());
    
    return dataObject;
}

const form = document.getElementById('form-box');
form.addEventListener('submit', function(event) {
    event.preventDefault(); 
    const formDataObject = formToObject(form);
    console.log("Objeto de Datos del Formulario:");
    console.log(formDataObject); 
});

function sendFormWithXHR(formElement, url) {
    const formDataObject = formToObject(formElement);
    const jsonString = JSON.stringify(formDataObject);
    
    const xhr = new XMLHttpRequest();
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status >= 200 && xhr.status < 300) {
                try {
                    const responseData = JSON.parse(xhr.responseText);
                    console.log('Éxito. Respuesta del servidor:', responseData);
                    alert('Formulario enviado con AJAX tradicional!');
                } catch (e) {
                    console.error('Error al parsear JSON:', e);
                }
            } else {
                console.error('Error en la petición AJAX:', xhr.status, xhr.statusText);
            }
        }
    };
    xhr.send(jsonString);
}