<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration Portal</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
    
        body{font-family:Arial, Helvetica, sans-serif;background:#f7f9fc;margin:0;padding:2rem;color:#111}
        .container{max-width:700px;margin:0 auto}
        .card{background:#fff;padding:2rem;border-radius:6px;border:1px solid #e6e9ef}
        label{display:block;margin-top:0.75rem}
        input,select{width:100%;padding:0.5rem;margin-top:0.25rem;border:1px solid #ddd;border-radius:4px}
        .btn{display:inline-block;padding:0.5rem 0.9rem;margin-top:0.8rem;background:#007bff;color:#fff;border-radius:4px;text-decoration:none;border:none;cursor:pointer}
        .btn.secondary{background:#6c757d}
        .btn.ghost{background:transparent;color:#007bff;border:1px solid #007bff}
        .error{color:#c00}
        .success{color:#060}
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Registration Portal</h1>
        <div class="card">
            @yield('content')
        </div>
    </div>
</body>
</html>