<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assect/logo/auro_moon_logo.png" type="image/png">
    <title>Auro Moon Residency || Photo Gallery</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .font-brand-serif {
            font-family: 'Playfair Display', 'Cormorant Garamond', Georgia, serif;
        }
        .font-brand-sans {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        }
        .fullScreenImg {
            position: fixed;
            inset: 0;
            width: 100vw;
            height: 100vh;
            z-index: 1000;
            display: none;
            justify-content: center;
            align-items: center;
            background-color: rgba(12, 17, 24, 0.88);
            backdrop-filter: blur(6px);
            padding: 16px;
        }
        .fullScreenImg img {
            max-width: 94vw;
            max-height: 88vh;
            object-fit: contain;
            border-radius: 16px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.6);
            animation: popupanim 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        @keyframes popupanim {
            from { opacity: 0; transform: scale(0.92); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>

<body class="bg-[#FAF7F2] font-brand-sans text-[#142132] antialiased min-h-screen flex flex-col">
    <?php include('navbar.php') ?>

    <!-- Fullscreen Lightbox Modal -->
    <div class="fullScreenImg" id="lightboxModal">
        <button id="closeLightbox" aria-label="Close image preview" class="absolute top-5 right-5 text-white/80 hover:text-white text-3xl p-2 focus:outline-none transition-colors">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <img src="" alt="Auro Moon Residency Preview" id="lightboxImg">
    </div>

    <!-- Main Gallery Content -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16">
        
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-14">
            <p class="text-[#B88028] text-xs sm:text-sm font-bold tracking-[0.24em] uppercase mb-2 select-none">
                PHOTO GALLERY
            </p>
            <h1 class="font-brand-serif text-3xl sm:text-4xl md:text-5xl font-bold text-[#1A2839] leading-tight">
                Take a Look Inside
            </h1>
            <div class="w-12 h-1 bg-[#DE9E36] rounded-full mx-auto mt-3 mb-4"></div>
            <p class="text-sm sm:text-base text-[#556270] leading-relaxed">
                Explore our fully furnished suites, spacious living halls, comfortable bedrooms, and serene surroundings.
            </p>
        </div>

        <!-- Section 1: Ground Floor -->
        <div class="mb-12 sm:mb-16">
            <div class="flex items-center gap-3 mb-6 pb-2 border-b border-[#ECE5D8]">
                <span class="w-2.5 h-2.5 rounded-full bg-[#DE9E36]"></span>
                <h2 class="font-brand-serif text-2xl sm:text-3xl font-bold text-[#1A2839]">
                    Ground Floor <span class="text-xs sm:text-sm font-sans font-semibold text-[#8A7968] tracking-wider uppercase ml-2 bg-[#FAF3E7] px-3 py-1 rounded-full border border-[#ECE5D8]">2BHK Suite</span>
                </h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/outside-apartment.jpg" alt="Auro Moon Residency exterior" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/Entrance.png" alt="Auro Moon Residency entrance" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/2BHK Hall.JPG" alt="Ground floor 2BHK living hall" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/2BHK Bedroom 1.jpg" alt="Ground floor bedroom 1" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/2BHK Bedroom 2.JPG" alt="Ground floor bedroom 2" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/2BHK Bathroom 1.JPG" alt="Ground floor bathroom 1" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/2BHK Bathroom 2.JPG" alt="Ground floor bathroom 2" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/2BHK Kitchen.JPG" alt="Ground floor kitchen" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
            </div>
        </div>

        <!-- Section 2: First Floor -->
        <div class="mb-12 sm:mb-16">
            <div class="flex items-center gap-3 mb-6 pb-2 border-b border-[#ECE5D8]">
                <span class="w-2.5 h-2.5 rounded-full bg-[#DE9E36]"></span>
                <h2 class="font-brand-serif text-2xl sm:text-3xl font-bold text-[#1A2839]">
                    First Floor <span class="text-xs sm:text-sm font-sans font-semibold text-[#8A7968] tracking-wider uppercase ml-2 bg-[#FAF3E7] px-3 py-1 rounded-full border border-[#ECE5D8]">2BHK Suite</span>
                </h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/2BHK Bedroom 2.JPG" alt="First floor bedroom" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/2BHK Bathroom 1.JPG" alt="First floor bathroom 1" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/2BHK Bathroom 2.JPG" alt="First floor bathroom 2" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/2BHK Kitchen.JPG" alt="First floor kitchen" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
            </div>
        </div>

        <!-- Section 3: Second Floor -->
        <div class="mb-14 sm:mb-18">
            <div class="flex items-center gap-3 mb-6 pb-2 border-b border-[#ECE5D8]">
                <span class="w-2.5 h-2.5 rounded-full bg-[#DE9E36]"></span>
                <h2 class="font-brand-serif text-2xl sm:text-3xl font-bold text-[#1A2839]">
                    Second Floor <span class="text-xs sm:text-sm font-sans font-semibold text-[#8A7968] tracking-wider uppercase ml-2 bg-[#FAF3E7] px-3 py-1 rounded-full border border-[#ECE5D8]">3BHK Suite</span>
                </h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/3BHK Hall.jpg" alt="Second floor 3BHK living hall" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/3BHK Bedroom 1.JPG" alt="Second floor bedroom 1" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/3BHK Bedroom 2.JPG" alt="Second floor bedroom 2" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/3BHK Bedroom 3.JPG" alt="Second floor bedroom 3" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/3BHK Bathroom.JPG" alt="Second floor bathroom" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
                <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 aspect-[4/3] bg-white border border-[#ECE5D8] cursor-pointer">
                    <img class="gal_img w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out" src="./assect/images/Gallery/Dinning Hall.JPG" alt="Dining area" loading="lazy">
                    <div class="absolute inset-0 bg-black/25 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white"><i class="fa-solid fa-expand text-xl"></i></div>
                </div>
            </div>
        </div>

        <!-- Book Your Stay CTA Button -->
        <div class="flex justify-center my-8">
            <a href="./BookingPage.php" class="w-full max-w-[320px] py-4 px-8 bg-[#E5A93C] hover:bg-[#d69829] text-[#1a140c] font-semibold text-base sm:text-lg rounded-xl shadow-[0_4px_20px_rgba(229,169,60,0.4)] hover:shadow-[0_6px_25px_rgba(229,169,60,0.55)] hover:-translate-y-0.5 transition-all duration-200 no-underline inline-flex items-center justify-center gap-3">
                <i class="fa-regular fa-calendar-days text-lg"></i>
                <span>Book Your Stay</span>
                <i class="fa-solid fa-arrow-right-long text-base"></i>
            </a>
        </div>

    </main>

    <!-- Lightbox Script -->
    <script>
        const images = document.querySelectorAll('.gal_img');
        const modal = document.getElementById('lightboxModal');
        const fullImage = document.getElementById('lightboxImg');
        const closeBtn = document.getElementById('closeLightbox');

        images.forEach(img => {
            img.closest('.cursor-pointer').addEventListener('click', () => {
                fullImage.src = img.src;
                modal.style.display = "flex";
                document.body.style.overflow = "hidden";
            });
        });

        function closeModal() {
            modal.style.display = "none";
            document.body.style.overflow = "";
        }

        if (closeBtn) closeBtn.addEventListener('click', closeModal);

        modal.addEventListener('click', (e) => {
            if (e.target === modal || e.target === closeBtn || e.target.closest('#closeLightbox')) {
                closeModal();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && modal.style.display === 'flex') {
                closeModal();
            }
        });
    </script>

    <?php include('Footer.php') ?>
</body>

</html>