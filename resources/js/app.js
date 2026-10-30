import './bootstrap';

const status = document.getElementById('status');
const button = document.getElementById('statusButton');

let active = true;

if (button && status) {

    button.textContent = 'Pausar App';

    button.addEventListener('click', function () {

        active = !active;

        if (active) {
            status.textContent = 'Aplicación funcionando';
            status.style.background = '#14532d55';
            status.style.color = '#4ade80';
            button.textContent = 'Pausar App';
        } else {
            status.textContent = 'Te lo has cargado';
            status.style.background = '#7f1d1d55';
            status.style.color = '#f87171';
            button.textContent = 'Reactivar aplicación';
        }

    });
}