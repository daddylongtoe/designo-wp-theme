const contactForm = document.getElementById('contact-form');
const button = document.querySelector('#submit-button');

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();

        button.disabled = true;
        fetch('/wp-admin/admin-ajax.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams(new FormData(contactForm)),
        })
            .then((response) => response.json())
            .then(({data}) => console.log({data}))
            .then(() => contactForm.replaceChildren('Thank you for your message'));
    });
}
