<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'My Portfolio') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html { scroll-behavior: smooth; }
        body { background: #f8f9fa; }
        section { border-radius: 1rem; background: #fff; box-shadow: 0 2px 8px #0001; padding: 2rem; margin-bottom: 2rem; }
        #hero { background: linear-gradient(90deg, #0d6efd 0%, #6610f2 100%); color: #fff; box-shadow: 0 4px 24px #0d6efd22; }
        #hero nav .btn { border-color: #fff; color: #fff; }
        #hero nav .btn:hover { background: #fff; color: #0d6efd; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="/experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; {{ date('Y') }} My Portfolio. All rights reserved.
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
