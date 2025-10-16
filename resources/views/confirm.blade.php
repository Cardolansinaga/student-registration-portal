@extends('layout')

@section('content')
    <h2>Konfirmasi Pendaftaran</h2>
    <div id="info"></div>
    <a class="btn" href="/register">Daftar Lagi</a>
    <a class="btn" href="/login" style="background:#28a745">Login</a>

    <script>
        (function(){
            const info = document.getElementById('info');
            const last = localStorage.getItem('lastRegistered');
            if(!last){
                info.innerHTML = '<p class="error">Tidak ada data pendaftaran terakhir. Silakan daftar terlebih dahulu.</p>';
                return;
            }
            const user = JSON.parse(last);
            info.innerHTML = `
                <p><strong>Nama:</strong> ${user.name}</p>
                <p><strong>Email:</strong> ${user.email}</p>
                <p><strong>Jurusan:</strong> ${user.major}</p>
                <p class="success">Pendaftaran berhasil disimpan di localStorage.</p>
            `;
        })();
    </script>
@endsection