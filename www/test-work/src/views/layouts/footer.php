</body>
</html>

<script>
document.getElementById('registerForm').addEventListener('submit', function(event) {
    let valid = true;

    // Сброс ошибок
    document.getElementById('emailError').innerText = '';
    document.getElementById('usernameError').innerText = '';
    document.getElementById('phoneError').innerText = '';
    document.getElementById('passwordError').innerText = '';

    const email = document.getElementById('email').value;
    const username = document.getElementById('username').value;
    const phone = document.getElementById('phone').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    // Проверка на совпадение паролей
    if (password !== confirmPassword) {
        valid = false;
        document.getElementById('passwordError').innerText = 'Пароли не совпадают.';
    }

    // Эмуляция проверки уникальности полей (необходимо реализовать на сервере)
    const existingEmails = ['test@example.com']; // Пример существующих email
    const existingUsernames = ['user1']; // Пример существующих логинов
    const existingPhones = ['+1234567890']; // Пример существующих телефонов

    if (existingEmails.includes(email)) {
        valid = false;
        document.getElementById('emailError').innerText = 'Этот email уже существует.';
    }
    if (existingUsernames.includes(username)) {
        valid = false;
        document.getElementById('usernameError').innerText = 'Этот логин уже существует.';
    }
    if (existingPhones.includes(phone)) {
        valid = false;
        document.getElementById('phoneError').innerText = 'Этот телефонный номер уже существует.';
    }

    if (!valid) {
        event.preventDefault(); // Остановить отправку формы при ошибке
    }
});
</script>