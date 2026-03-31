<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Learning Project')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Clean, professional color scheme */
        :root {
            --bg-light: #f4f6f9;
            --bg-white: #ffffff;
            --text-dark: #2c3e50;
            --text-muted: #6c757d;
            --border-color: #e9ecef;
            --primary-color: #3498db;
            --primary-hover: #2980b9;
            --success-color: #27ae60;
            --danger-color: #e74c3c;
            --warning-color: #f39c12;
            --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.07);
            --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        body {
            background-color: var(--bg-light);
            color: var(--text-dark);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.5;
        }

        /* Navbar Styling */
        .navbar {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            box-shadow: var(--shadow-md);
            padding: 0.8rem 0;
            margin-bottom: 2rem;
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.3rem;
            letter-spacing: -0.3px;
            color: white !important;
        }

        .navbar-brand i {
            margin-right: 8px;
        }

        .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: all 0.2s ease;
            margin: 0 2px;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: white !important;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
        }

        .btn-outline-light {
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.4rem 1rem;
            border-radius: 8px;
        }

        .btn-outline-light:hover {
            background: white;
            color: #2c3e50;
            border-color: white;
        }

        /* Card Styling */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: var(--shadow-sm);
            transition: all 0.2s ease;
            background: var(--bg-white);
            margin-bottom: 1.5rem;
        }

        .card:hover {
            box-shadow: var(--shadow-md);
        }

        .card-header {
            background: var(--bg-white);
            border-bottom: 1px solid var(--border-color);
            padding: 1.2rem 1.5rem;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 12px 12px 0 0 !important;
        }

        .card-body {
            padding: 1.5rem;
        }

        /* Dashboard Cards (Stat Cards) */
        .stat-card {
            background: var(--bg-white);
            border-radius: 12px;
            padding: 1.2rem;
            margin-bottom: 1rem;
            box-shadow: var(--shadow-sm);
            transition: all 0.2s ease;
            border-left: 4px solid var(--primary-color);
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.25rem;
        }

        .stat-label {
            color: var(--text-muted);
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Table Styling - Clean with alternating rows */
        .table-container {
            background: var(--bg-white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
        }

        .table {
            margin-bottom: 0;
            background: var(--bg-white);
        }

        .table thead th {
            background: #f8f9fa;
            color: #495057;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 1rem 1rem;
            border-bottom: 2px solid var(--border-color);
            vertical-align: middle;
        }

        .table tbody tr {
            transition: background-color 0.15s ease;
            border-bottom: 1px solid var(--border-color);
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            color: #495057;
            background: var(--bg-white);
        }

        /* Form Styling */
        .form-label {
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: #495057;
            font-size: 0.9rem;
        }

        .form-control,
        .form-select {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 0.6rem 0.9rem;
            transition: all 0.2s ease;
            background: var(--bg-white);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
            outline: none;
        }

        /* Button Styling */
        .btn {
            border-radius: 8px;
            padding: 0.5rem 1.2rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn-primary {
            background: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background: var(--primary-hover);
            border-color: var(--primary-hover);
            transform: translateY(-1px);
        }

        .btn-danger {
            background: var(--danger-color);
            border-color: var(--danger-color);
        }

        .btn-danger:hover {
            background: #c0392b;
            border-color: #c0392b;
            transform: translateY(-1px);
        }

        .btn-sm {
            padding: 0.3rem 0.8rem;
            font-size: 0.85rem;
        }

        /* Toast Messages */
        .toast-container {
            position: fixed;
            top: 1.5rem;
            right: 1.5rem;
            z-index: 1090;
        }

        .toast {
            border: none;
            border-radius: 12px;
            box-shadow: var(--shadow-lg);
            min-width: 300px;
            backdrop-filter: blur(10px);
        }

        .toast-success {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            border-left: 4px solid var(--success-color);
        }

        .toast-error {
            background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
            border-left: 4px solid var(--danger-color);
        }

        .toast-header {
            background: transparent;
            border-bottom: none;
            font-weight: 600;
            padding: 0.8rem 1rem;
        }

        .toast-body {
            padding: 0.5rem 1rem 1rem 1rem;
            color: #495057;
        }

        /* Page Header */
        .page-header {
            margin-bottom: 2rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid var(--border-color);
        }

        .page-header h1,
        .page-header h2 {
            font-size: 1.6rem;
            font-weight: 600;
            margin-bottom: 0;
            color: var(--text-dark);
        }

        /* Spacing Utilities */
        .mt-4 {
            margin-top: 1.5rem !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .py-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .gap-2 {
            gap: 0.5rem;
        }

        .gap-3 {
            gap: 1rem;
        }

        /* Action Buttons in Tables */
        .action-buttons {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .btn-icon {
            padding: 0.3rem 0.7rem;
            font-size: 0.85rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .toast-container {
                top: 1rem;
                right: 1rem;
                left: 1rem;
            }

            .toast {
                width: auto;
                min-width: auto;
            }

            .stat-card {
                margin-bottom: 1rem;
            }

            .table-container {
                overflow-x: auto;
            }

            .table {
                min-width: 600px;
            }
        }
    </style>
</head>

<body>

    <!-- Enhanced Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
                <i class="bi bi-mortarboard-fill fs-4"></i>
                <span>Laravel Learning</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                            href="{{ route('dashboard') }}">
                            <i class="bi bi-speedometer2 me-1"></i> Dashboard
                        </a>
                    </li>

                    @can('manage-users')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}"
                            href="{{ route('users.index') }}">
                            <i class="bi bi-people me-1"></i> Users
                        </a>
                    </li>
                    @endcan

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('posts.*') ? 'active' : '' }}"
                            href="{{ route('posts.index') }}">
                            <i class="bi bi-file-text me-1"></i> Posts
                        </a>
                    </li>

                    <li class="nav-item ms-lg-2">
                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                            @csrf
                            <button class="btn btn-outline-light" type="submit">
                                <i class="bi bi-box-arrow-right me-1"></i> Logout
                            </button>
                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}"
                            href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Login
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}"
                            href="{{ route('register') }}">
                            <i class="bi bi-person-plus me-1"></i> Register
                        </a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container py-4">
        @yield('content')
    </main>

    <!-- Toast Container for Flash Messages -->
    <div class="toast-container">
        @if(session('success'))
        <div class="toast toast-success" role="alert" data-bs-autohide="true" data-bs-delay="4000">
            <div class="toast-header">
                <i class="bi bi-check-circle-fill me-2 text-success"></i>
                <strong class="me-auto">Success!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
                {{ session('success') }}
            </div>
        </div>
        @endif

        @if(session('error'))
        <div class="toast toast-error" role="alert" data-bs-autohide="true" data-bs-delay="4000">
            <div class="toast-header">
                <i class="bi bi-exclamation-triangle-fill me-2 text-danger"></i>
                <strong class="me-auto">Error!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
                {{ session('error') }}
            </div>
        </div>
        @endif
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto-initialize and show toasts
        document.addEventListener('DOMContentLoaded', function() {
            const toastElements = document.querySelectorAll('.toast');
            toastElements.forEach(toastEl => {
                const toast = new bootstrap.Toast(toastEl, {
                    autohide: true,
                    delay: 4000
                });
                toast.show();
            });
        });
    </script>
    @stack('scripts')
</body>

</html>