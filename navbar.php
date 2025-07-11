<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/398c77c1ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, rgba(30, 85, 92, 0.9) 0%, rgba(67, 160, 71, 0.8) 100%);
        }
        .amenity-icon {
            transition: all 0.3s ease;
        }
        .amenity-card:hover .amenity-icon {
            transform: scale(1.1);
            color: #1e555c;
        }
        .gallery-image {
            transition: all 0.3s ease;
        }
        .gallery-image:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .logo {
  width: 94px;
  height: 54px;
  margin-bottom: 12px;
}
    </style>



</head>

<body>
    


    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class=" mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <img src="./assect/logo/aaha home stay.png" alt="Logo" class="logo mr-2" />
                <span class="text-xl font-bold text-gray-800">SERENITY STAY</span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="./" class="text-gray-800 hover:text-teal-600 font-medium no-underline">Home</a>
                <a href="./Photos.php" class="text-gray-800 hover:text-teal-600 font-medium no-underline">Gallery</a>
                <a href="./Calendar.php" class="text-gray-800 hover:text-teal-600 font-medium no-underline">Calendar</a>
                <a href="./OurPrices.php" class="text-gray-800 hover:text-teal-600 font-medium no-underline">Our Prices</a>
                <a href="./contact-us.php" class="text-gray-800 hover:text-teal-600 font-medium no-underline">Contact Us</a>
            </div>
            <button id="mobileMenuBtn" class="md:hidden text-gray-800">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        <!-- Mobile Menu Overlay -->
        <div id="mobileMenuOverlay" class="fixed inset-0 bg-black bg-opacity-40 z-50 hidden"></div>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg z-50 transform translate-x-full transition-transform duration-300 flex flex-col p-6 space-y-6 md:hidden">
            <div class="flex justify-between items-center mb-4">
                <span class="text-xl font-bold text-gray-800">Menu</span>
                <button id="closeMobileMenu" class="text-gray-800 text-2xl">&times;</button>
            </div>
            <a href="./" class="text-gray-800 hover:text-teal-600 font-medium no-underline">Home</a>
            <a href="./Photos.php" class="text-gray-800 hover:text-teal-600 font-medium no-underline">Gallery</a>
            <a href="./Calendar.php" class="text-gray-800 hover:text-teal-600 font-medium no-underline">Calendar</a>
            <a href="./OurPrices.php" class="text-gray-800 hover:text-teal-600 font-medium no-underline">Our Prices</a>
            <a href="./contact-us.php" class="text-gray-800 hover:text-teal-600 font-medium no-underline">Contact Us</a>
        </div>
    </nav>


    <script>
        // Mobile menu logic
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
        const closeMobileMenu = document.getElementById('closeMobileMenu');

        function openMobileMenu() {
            mobileMenu.classList.remove('translate-x-full');
            mobileMenuOverlay.classList.remove('hidden');
        }
        function closeMenu() {
            mobileMenu.classList.add('translate-x-full');
            mobileMenuOverlay.classList.add('hidden');
        }
        mobileMenuBtn.addEventListener('click', openMobileMenu);
        closeMobileMenu.addEventListener('click', closeMenu);
        mobileMenuOverlay.addEventListener('click', closeMenu);

        const closeBtn=document.getElementById('closeBtn'); 
        const contactBtn = document.getElementById('contact');
        const contactForm = document.getElementById('contactUs');
        const contactCard = document.getElementById('contactCard');

        contactBtn.addEventListener('click', () => {
            contactForm.style.display = "flex";
        })
        contactForm.addEventListener('click', (e) => {
            if (!contactCard.contains(e.target)) {
                contactForm.style.display = "none";
            }
        })
        closeBtn.addEventListener('click', ()=>{
            contactForm.style.display = "none";
        })
    </script>

</body>

</html>