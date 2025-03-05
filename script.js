const nav = document.getElementById('nav');

window.addEventListener ('scroll', function() {
    scrollposition = window.scrollY;

    if (scrollposition >=60){
        nav.classList.add('nav-dark');
    }
    else if (scrollposition <=60) {
        nav.classList.remove('nav-dark')
    }
})
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const statusMessage = document.getElementById('statusMessage');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch('process_message.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data === 'success') {
                statusMessage.textContent = 'Pesan berhasil terkirim!';
                statusMessage.style.color = 'green';
                form.reset();
            } else {
                statusMessage.textContent = 'Gagal mengirim pesan. Silakan coba lagi.';
                statusMessage.style.color = 'red';
            }
        })
        .catch(error => {
            statusMessage.textContent = 'Terjadi kesalahan. Silakan coba lagi.';
            statusMessage.style.color = 'red';
        });
    });
}); 