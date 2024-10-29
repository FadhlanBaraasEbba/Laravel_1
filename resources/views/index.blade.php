<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Blabla Coffee</title>
</head>

<body class="bg-gray-100">

    <header class="bg-white shadow-md p-4 flex justify-between items-center">
        <div class="text-xl font-bold">
            <a href="#">Blabla <span class="text-yellow-600">Coffee</span></a>
        </div>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="#" class="hover:text-yellow-500">Home</a></li>
                <li><a href="#menu" class="hover:text-yellow-500">Menu</a></li>
                <li><a href="#shop" class="hover:text-yellow-500">Shop</a></li>
                <li><a href="#contact" class="hover:text-yellow-500">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="text-center py-16">
        <h2 class="text-4xl font-bold text-gray-800">Blabla Coffee</h2>
        <p class="text-lg text-gray-600 mt-4">Apakah Anda ingin memulai hari dengan kopi yang nikmat?</p>
    </div>

    <div id="menu" class="py-16 bg-white">
        <div class="text-center mb-12">
            <h3 class="text-2xl font-semibold text-gray-800">Menu</h3>
            <h4 class="text-lg text-gray-600">Blabla Coffee Menu</h4>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
            <div class="bg-gray-50 p-4 rounded-lg shadow-lg">
                <img src="assets/image/image/hot-coffees.jpg" alt="" class="rounded-t-lg">
                <h2 class="text-xl font-semibold mt-4">Hot Coffees</h2>
                <p class="text-gray-600">Hot coffee dapat disajikan dalam berbagai variasi, seperti espresso, latte, cappuccino, dan lainnya.</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg shadow-lg">
                <img src="assets/image/image/cold-coffees.jpg" alt="" class="rounded-t-lg">
                <h2 class="text-xl font-semibold mt-4">Cold Coffees</h2>
                <p class="text-gray-600">Cold coffee dapat bervariasi, mulai dari kopi hitam dingin hingga minuman dengan susu dan sirup rasa.</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg shadow-lg">
                <img src="assets/image/image/frappuccino.jpg" alt="" class="rounded-t-lg">
                <h2 class="text-xl font-semibold mt-4">Frappuccino Coffees</h2>
                <p class="text-gray-600">Frappuccino disajikan dengan topping krim kocok dan berbagai sirup, seperti karamel atau cokelat.</p>
            </div>
        </div>
    </div>

    <div id="shop" class="py-16 bg-gray-100">
        <div class="text-center mb-12">
            <h3 class="text-2xl font-semibold text-gray-800">Shop</h3>
            <h4 class="text-lg text-gray-600">Blabla Coffee Drinks</h4>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4">
            <div class="bg-white rounded-lg shadow-lg">
                <img src="assets/image/image/caramel-macchiato.jpg" alt="" class="rounded-t-lg">
                <div class="p-4">
                    <div class="flex items-center space-x-1 text-yellow-500">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
                    </div>
                    <h3 class="text-xl font-semibold mt-2">Caramel Macchiato</h3>
                    <p class="text-gray-600">Rp.45.000</p>
                    <p class="text-gray-600 mt-2">Minuman kopi dengan susu kukus, espresso, sirup vanila, dan saus karamel.</p>
                </div>
            </div>
            <!-- Tambahkan item lainnya dengan struktur yang sama -->
        </div>
    </div>

    <div id="contact" class="py-16 bg-white">
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2">
                <img src="assets/image/image/bg-image.jpeg" alt="" class="rounded-lg">
            </div>
            <div class="w-full md:w-1/2 p-8">
                <form>
                    <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
                    <div class="mb-4">
                        <input type="text" placeholder="Username" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                    <div class="mb-4">
                        <input type="email" placeholder="Email" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                    <button type="submit" class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-yellow-600 transition">Send</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex space-x-4">
                <a href="#" class="hover:text-yellow-500"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="hover:text-yellow-500"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-yellow-500"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="hover:text-yellow-500"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <p>&copy; 2024 Blabla Coffee</p>
        </div>
    </footer>

</body>

</html>
