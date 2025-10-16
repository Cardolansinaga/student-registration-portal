@extends('layout')

@section('content')
    <h2>Form Registrasi Mahasiswa Baru</h2>
    <form id="registerForm">
        <label for="name">Nama</label>
        <input id="name" name="name" type="text" required>

        <label for="email">Email</label>
        <input id="email" name="email" type="email" required>
        <div id="emailError" class="error" style="display:none">Email tidak boleh kosong</div>

        <label for="major">Jurusan</label>
        <select id="major" name="major">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
        </select>

        <label for="password">Password</label>
        <input id="password" name="password" type="password" required>
        <div id="passwordError" class="error" style="display:none">Password minimal 6 karakter</div>

        <button class="btn" type="submit">Daftar</button>
        <a class="btn" href="/login" style="background:#28a745">Login</a>
    </form>

    <script>
        (function(){
            const form = document.getElementById('registerForm');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const nameEl = document.getElementById('name');
            const majorEl = document.getElementById('major');
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');

            form.addEventListener('submit', function(e){
                e.preventDefault();
                let valid = true;
                emailError.style.display = 'none';
                passwordError.style.display = 'none';

                if(!email.value.trim()){
                    emailError.style.display = 'block';
                    valid = false;
                }
                if(!password.value || password.value.length < 6){
                    passwordError.style.display = 'block';
                    valid = false;
                }

                if(!valid) return;

                // Build user object
                const user = {
                    name: nameEl.value.trim(),
                    email: email.value.trim(),
                    major: majorEl.value,
                    password: password.value
                };

                // Load existing users
                const usersJson = localStorage.getItem('users');
                let users = usersJson ? JSON.parse(usersJson) : [];

                // Check duplicate email
                const exists = users.some(u => u.email.toLowerCase() === user.email.toLowerCase());
                if(exists){
                    alert('Email sudah terdaftar. Silakan login.');
                    window.location.href = '/login';
                    return;
                }

                users.push(user);
                localStorage.setItem('users', JSON.stringify(users));

                // Store last registered user for confirmation page
                localStorage.setItem('lastRegistered', JSON.stringify(user));

                // Redirect to confirmation page
                window.location.href = '/confirm';
            });
        })();
    </script>
@endsection