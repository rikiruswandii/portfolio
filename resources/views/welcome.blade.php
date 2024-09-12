<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto flex items-center justify-between p-4">
            <!-- Logo -->
            <a href="#" class="text-2xl font-bold text-blue-600">MyLogo</a>

            <!-- Menu -->
            <ul class="flex space-x-6">
                <li><a href="#" class="text-gray-800 hover:text-blue-600">Home</a></li>
                <li class="relative group">
                    <a href="#" class="text-gray-800 hover:text-blue-600">About</a>
                    <!-- Dropdown Menu -->
                    <ul class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
                        <li><a href="#team" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Our Team</a></li>
                        <li><a href="#history" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Our History</a></li>
                    </ul>
                </li>
                <li><a href="#services" class="text-gray-800 hover:text-blue-600">Services</a></li>
                <li><a href="#contact" class="text-gray-800 hover:text-blue-600">Contact</a></li>
            </ul>

            <!-- Button -->
            <a href="#contact" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Get in Touch</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-blue-600 text-white text-center py-16">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold mb-4">Welcome to Our Landing Page</h1>
            <p class="text-lg mb-8">We offer amazing services to help you achieve your goals.</p>
            <a href="#services" class="bg-white text-blue-600 px-6 py-3 rounded-full text-lg hover:bg-gray-100 transition">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">About Us</h2>
            <p class="text-lg mb-8">We are dedicated to providing the best services to our customers.</p>
            <!-- Add more content here -->
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-gray-200 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Our Services</h2>
            <p class="text-lg mb-8">Discover the services we offer and how we can assist you.</p>
            <!-- Add more content here -->
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
            <p class="text-lg mb-8">Get in touch with us to learn more about our services.</p>
            <!-- Add more content here -->
        </div>
    </section>
</body>

</html>
