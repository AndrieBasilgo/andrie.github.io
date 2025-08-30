document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('.registration-form');
    const contactNumber = document.getElementById('contact-number');
    const email = document.getElementById('email');
    const batchSelect = document.getElementById('batch');

    for (let i = 1; i <= 35; i++) {
        const option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        batchSelect.appendChild(option);
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const requiredFields = ['first-name', 'last-name', 'batch', 'technology', 'id-number'];
        for (let id of requiredFields) {
            const field = document.getElementById(id);
            if (!field.value.trim()) {
                alert('Please fill in all required fields.');
                return;
            }
        }

        if (contactNumber.value && !/^09\d{9}$/.test(contactNumber.value)) {
            alert('Please enter a valid contact number starting with 09 and 11 digits long.');
            return;
        }
        
        if (email.value) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email.value)) {
                alert('Please enter a valid email address.');
                return;
            }
        }

        alert('Registration Successful!');
        form.submit();
    });
});
