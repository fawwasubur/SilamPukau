<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-[#f8f1e8] text-[#4a2c2a]">

    <!-- HEADER -->
    <header class="flex items-center justify-between px-6 py-4 bg-[#ffffff] shadow-md">
        <button id="menu-btn" class="text-2xl text-white"><i class="fas fa-bars"></i></button>
        <a href="#"><img class="w-16" src="assets/1-1-removebg-preview-2.png" alt="Logo"></a>
        <nav class="hidden md:flex space-x-4">
          <a href="#home" class="text-[#4a2c2a] hover:text-[#6b4f4f]">Home</a>
          <a href="#about" class="text-[#4a2c2a] hover:text-[#6b4f4f]">About</a>
          <a href="#menu" class="text-[#4a2c2a] hover:text-[#6b4f4f]">Menu</a>
          <a href="#review" class="text-[#4a2c2a] hover:text-[#6b4f4f]">Review</a>
          <a href="#book" class="text-[#4a2c2a] hover:text-[#6b4f4f]">Book</a>
        </nav>
        <a href="#book" class="hidden md:inline-block px-4 py-2 text-white bg-[#d4a373] rounded-lg hover:bg-[#c69266]">Book a Table</a>
    </header>

    <!-- HOME -->
    <section class="home bg-[url('assets/home.jpg')] bg-cover bg-center text-white py-16" id="home">
        <div class="container mx-auto flex flex-col lg:flex-row items-center">
            <div class="content text-center lg:text-left lg:w-1/2">
                <h3 class="text-4xl font-bold mb-4">Fresh Coffee in the Morning</h3>
                <a href="#book" class="btn bg-[#d4a373] hover:bg-[#c69266] text-white px-6 py-2 rounded-full transition">Buy One Now</a>
            </div>

            <div class="image lg:w-1/2 mt-8 lg:mt-0">
                <img src="assets/gambar-whatsapp-2024-09-03-pukul-21-29-36-4655b0df-removebg-prev.png" class="main-home-image mx-auto" alt="">
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="p-8 bg-[#f4e7db]">
        <h1 class="text-center text-4xl font-bold mb-6">About Us <span class="text-[#6b4f4f]">Why Choose Us</span></h1>
        <div class="flex flex-col md:flex-row items-center gap-6">
            <img src="assets/about-img2.jpg" alt="About Image" class="w-64 md:w-1/2 rounded-lg shadow-md">
            <div class="space-y-4">
                <h3 class="text-2xl font-semibold">Apasih Enaknya Nongki di SilamPukau?</h3>
                <p>
                    Selamat datang di Silampukau, tempat di mana cita rasa, kenyamanan, dan kehangatan bersatu. Terinspirasi dari pesona burung Silampukau yang hidup di alam bebas...
                </p>
                <a href="#" class="inline-block px-6 py-3 text-white bg-[#d4a373] rounded-lg hover:bg-[#c69266]">Read More</a>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-6">
                    <div class="text-center">
                        <img src="assets/about-icon-1.png" alt="Quality Coffee" class="w-16 mx-auto">
                        <h3 class="font-medium">Kualitas Coffee</h3>
                    </div>
                    <div class="text-center">
                        <img src="assets/about-icon-2.png" alt="Strategic Place" class="w-16 mx-auto">
                        <h3 class="font-medium">Tempat Strategis</h3>
                    </div>
                    <div class="text-center">
                        <img src="assets/about-icon-3.png" alt="Free Delivery" class="w-16 mx-auto">
                        <h3 class="font-medium">Free Ongkir</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MENU -->
    <section id="menu" class="p-8 bg-[#e3d5c9]">
        <h1 class="text-center text-4xl font-bold mb-6">Menu <span class="text-[#6b4f4f]">Our Best</span></h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Menu Item -->

            @foreach($tables as $row)

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="storage/{{$row->picture}}" alt="Menu Item" class="w-full">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">
                        {{ $row->name }}
                    </h3>
                    <div class="flex items-center mt-2">
                        <img src="assets/bintang.png" alt="Star" class="w-5">
                        <span class="ml-2">
                            {{ $row->rate }} (1.6k Reviewers)</span>
                    </div>
                    <div class="mt-4 text-right">
                        <span class="text-lg font-bold text-[#6b4f4f]"> {{ $row->price }}K</span>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </section>

    <!-- REVIEW -->
    <section id="review" class="p-8 bg-[#f4e7db]">
        <h1 class="text-center text-4xl font-bold mb-6">Reviews <span class="text-[#6b4f4f]">What People Say</span></h1>
        <div class="flex flex-col md:flex-row items-center justify-center gap-6">
            <div class="bg-[#e3d5c9] rounded-lg p-4 shadow-md w-full md:w-1/3">
                <img src="assets/pic-1.png" alt="Reviewer 1" class="w-16 mx-auto mb-4">
                <p class="text-center">Saya suka saya suka.</p>
                <h3 class="text-center font-medium">Tok Dalang</h3>
            </div>
        </div>
    </section>

    <!-- BOOK -->
    <section id="book" class="p-8 bg-[#e3d5c9]">
        <h1 class="text-center text-4xl font-bold mb-6">Booking <span class="text-[#6b4f4f]">Reserve a Table</span></h1>
        <form class="space-y-4 max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <input type="text" placeholder="Name" class="w-full px-4 py-2 border rounded-lg">
            <input type="email" placeholder="Email" class="w-full px-4 py-2 border rounded-lg">
            <input type="number" placeholder="Number" class="w-full px-4 py-2 border rounded-lg">
            <textarea placeholder="Message" class="w-full px-4 py-2 border rounded-lg"></textarea>
            <button type="submit" class="w-full px-4 py-2 text-white bg-[#d4a373] rounded-lg hover:bg-[#c69266]">Send Message</button>
        </form>
    </section>

    <!-- FOOTER -->
    <footer class="p-8 bg-[#6b4f4f] text-[#f8e8d8]">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div>
                <h3 class="text-lg font-semibold">Our Branches</h3>
                <a href="#" class="block text-[#d4c3b6]">India</a>
                <a href="#" class="block text-[#d4c3b6]">USA</a>
            </div>
        </div>
        <div class="mt-8 text-center">Created by <span class="text-[#d4a373]">Silampukau Coffee</span> | All rights reserved</div>
    </footer>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
