document.querySelector('form').addEventListener('submit', (e) => {
    const phone = document.getElementById('phone');
    if (phone.value.length !== 10) {
        alert('Phone number must be 10 digits');
        e.preventDefault();
    }
});