// public/assets/js/app.js
document.addEventListener('DOMContentLoaded', () => {
  console.log('Hola Mundo MVC listo 🚀');
});

document.addEventListener('DOMContentLoaded', () => {
  const deleteButtons = document.querySelectorAll('.btn-delete');

  deleteButtons.forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      const id = btn.dataset.id;
      const url = btn.getAttribute('href');

      if (confirm(`¿Seguro que quieres eliminar el mensaje #${id}?`)) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = url;

        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'id';
        input.value = id;

        form.appendChild(input);
        document.body.appendChild(form);
        form.submit();
      }
    });
  });
});
