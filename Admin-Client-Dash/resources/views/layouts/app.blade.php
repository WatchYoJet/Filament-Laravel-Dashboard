<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Include any CSS or stylesheets here -->
</head>
<body>
    <header>
        <!-- Navigation bar goes here -->
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
                <!-- Add more navigation links as needed -->
            </ul>
        </nav>
    </header>

    <main>
        <!-- Content section -->
        @yield('content')
    </main>

    <footer>
        <!-- Footer content goes here -->
        <p>&copy; {{ date('Y') }} Your Company</p>
    </footer>

    <!-- Include any JavaScript files or scripts here -->
</body>
</html>
