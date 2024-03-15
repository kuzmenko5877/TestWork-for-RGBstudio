document.addEventListener('DOMContentLoaded', () => {
    const spinner = document.querySelector('.spinner-border');
    const input = document.querySelector("#phone");

    if (input) {
        window.intlTelInput(input, {
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/js/utils.js",
            initialCountry: "ua"
        });
    }

    document.getElementById('name').addEventListener('input', event => {
        let correctedValue = event.target.value.replace(/[^a-zA-Zа-яА-ЯёЁ\s]/g, '');
        correctedValue = correctedValue.replace(/\s+/g, ' ').trimStart();
        event.target.value = correctedValue;
    });

    document.getElementById('phone').addEventListener('input', event => {
        event.target.value = event.target.value.replace(/\D/g, '');
    });``

    document.querySelectorAll('.form-item').forEach(formItemElement => {
        const input = formItemElement.querySelector('input');
        input.addEventListener('invalid', event => {
            event.preventDefault();
            formItemElement.classList.add('error');
        });
        input.addEventListener('input', () => {
            formItemElement.classList.remove('error');
        });
    });

    document.getElementById('form').addEventListener('submit', event => {
        event.preventDefault();

        const formData = new FormData(event.target);
        formData.append('action', 'submit_lead_form');
        spinner.classList.remove('d-none');

        fetch('/wp-content/themes/TestTask/ajax.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                spinner.classList.add('d-none');
                if (data.success) {
                    event.target.reset();
                    const myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
                    myModal.toggle();
                } else {
                    alert('Ошибка');
                }
            })
            .catch(error => {
                console.error('Вывод ошибки:', error);
            });
    });
});
