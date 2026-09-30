<?php
// Determine current active page
$currentPage = basename($_SERVER['PHP_SELF'] ?? '');
$isHome = ($currentPage === '' || $currentPage === 'index.php' || $currentPage === 'index');
$isGallery = ($currentPage === 'Photos.php');
$isContact = ($currentPage === 'contact-us.php');
$isPrices = ($currentPage === 'OurPrices.php');
$isCalendar = ($currentPage === 'Calendar.php');
?>
<!-- Font and Tailwind CDN (in case not already in parent) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>

<style>
    .font-brand-serif {
        font-family: 'Playfair Display', 'Cormorant Garamond', Georgia, serif;
    }
    .font-brand-sans {
        font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    }
    .nav-link-hover {
        position: relative;
        transition: color 0.25s ease;
    }
    .nav-link-hover:hover {
        color: #C98B22;
    }
    .gold-btn {
        background-color: #E5A93C;
        transition: all 0.25s ease;
    }
    .gold-btn:hover {
        background-color: #d69829;
        transform: translateY(-1px);
        box-shadow: 0 4px 14px rgba(229, 169, 60, 0.35);
    }
</style>

<header class="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-[0_2px_15px_rgba(0,0,0,0.04)] font-brand-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="./" class="flex items-center gap-3 group no-underline">
                <div class="w-12 h-12 flex-shrink-0 transition-transform duration-300 group-hover:scale-105">
                    <img src="./assect/logo/auro_moon_logo.png" alt="Auro Moon Logo" class="w-full h-full object-contain" />
                </div>
                <div class="flex flex-col">
                    <span class="font-brand-serif text-2xl md:text-[26px] font-bold italic text-[#1A2839] tracking-tight leading-none">
                        Auro Moon
                    </span>
                    <span class="text-[9.5px] uppercase font-semibold text-[#1A2839] tracking-[0.28em] mt-1 leading-none">
                        RESIDENCY
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-7 lg:space-x-9">
                <!-- Home Link -->
                <div class="relative py-2 flex flex-col items-center">
                    <a href="./" class="text-[15px] font-medium transition-colors no-underline <?php echo $isHome ? 'text-[#1A2839] font-semibold' : 'text-gray-700 hover:text-[#C98B22]'; ?>">
                        Home
                    </a>
                    <?php if ($isHome): ?>
                        <span class="block w-6 h-[3px] bg-[#E5A93C] rounded-full mt-1"></span>
                    <?php endif; ?>
                </div>

                <!-- About Link -->
                <a href="<?php echo $isHome ? '#about' : './#about'; ?>" class="text-[15px] font-medium text-gray-700 hover:text-[#C98B22] transition-colors no-underline">
                    About
                </a>

                <!-- Amenities Link -->
                <a href="<?php echo $isHome ? '#amenities' : './#amenities'; ?>" class="text-[15px] font-medium text-gray-700 hover:text-[#C98B22] transition-colors no-underline">
                    Amenities
                </a>

                <!-- Gallery Link -->
                <a href="./Photos.php" class="text-[15px] font-medium transition-colors no-underline <?php echo $isGallery ? 'text-[#1A2839] font-semibold' : 'text-gray-700 hover:text-[#C98B22]'; ?>">
                    Gallery
                    <?php if ($isGallery): ?>
                        <span class="block w-6 h-[3px] bg-[#E5A93C] rounded-full mt-1"></span>
                    <?php endif; ?>
                </a>

                <!-- Location Link -->
                <a href="<?php echo $isHome ? '#location' : './#location'; ?>" class="text-[15px] font-medium text-gray-700 hover:text-[#C98B22] transition-colors no-underline">
                    Location
                </a>

                <!-- Contact Link -->
                <a href="./contact-us.php" class="text-[15px] font-medium transition-colors no-underline <?php echo $isContact ? 'text-[#1A2839] font-semibold' : 'text-gray-700 hover:text-[#C98B22]'; ?>">
                    Contact
                    <?php if ($isContact): ?>
                        <span class="block w-6 h-[3px] bg-[#E5A93C] rounded-full mt-1"></span>
                    <?php endif; ?>
                </a>
            </nav>

            <!-- Right CTA Button (Book Your Stay) -->
            <div class="hidden md:flex items-center">
                <a href="./BookingPage.php" class="gold-btn inline-flex items-center gap-2.5 px-5 py-2.5 rounded-lg text-[14px] font-semibold text-[#1e170d] shadow-sm no-underline">
                    <i class="fa-regular fa-calendar-days text-[15px]"></i>
                    <span>Book Your Stay</span>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex items-center md:hidden">
                <button id="mobileMenuBtn" aria-label="Open Navigation Menu" class="p-2 text-gray-800 hover:text-[#C98B22] focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Overlay -->
    <div id="mobileMenuOverlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden opacity-0 transition-opacity duration-300"></div>

    <!-- Mobile Drawer -->
    <div id="mobileMenu" class="fixed top-0 right-0 w-[290px] max-w-[85vw] h-full bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col justify-between p-6">
        <div>
            <!-- Header -->
            <div class="flex items-center justify-between pb-5 border-b border-gray-100">
                <div class="flex items-center gap-2.5">
                    <img src="./assect/logo/auro_moon_logo.png" alt="Auro Moon" class="w-9 h-9 object-contain" />
                    <div>
                        <div class="font-brand-serif text-lg font-bold italic text-[#1A2839] leading-tight">Auro Moon</div>
                        <div class="text-[8px] uppercase font-semibold text-[#1A2839] tracking-[0.25em]">RESIDENCY</div>
                    </div>
                </div>
                <button id="closeMobileMenu" aria-label="Close Navigation Menu" class="text-gray-500 hover:text-gray-800 text-2xl focus:outline-none p-1">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Nav Links -->
            <div class="flex flex-col space-y-4 pt-6">
                <a href="./" class="flex items-center justify-between text-base font-medium text-gray-800 hover:text-[#C98B22] no-underline">
                    <span>Home</span>
                    <?php if ($isHome): ?>
                        <span class="w-2 h-2 rounded-full bg-[#E5A93C]"></span>
                    <?php endif; ?>
                </a>
                <a href="<?php echo $isHome ? '#about' : './#about'; ?>" class="text-base font-medium text-gray-800 hover:text-[#C98B22] no-underline">
                    About
                </a>
                <a href="<?php echo $isHome ? '#amenities' : './#amenities'; ?>" class="text-base font-medium text-gray-800 hover:text-[#C98B22] no-underline">
                    Amenities
                </a>
                <a href="./Photos.php" class="flex items-center justify-between text-base font-medium text-gray-800 hover:text-[#C98B22] no-underline">
                    <span>Gallery</span>
                    <?php if ($isGallery): ?>
                        <span class="w-2 h-2 rounded-full bg-[#E5A93C]"></span>
                    <?php endif; ?>
                </a>
                <a href="<?php echo $isHome ? '#location' : './#location'; ?>" class="text-base font-medium text-gray-800 hover:text-[#C98B22] no-underline">
                    Location
                </a>
                <a href="./contact-us.php" class="flex items-center justify-between text-base font-medium text-gray-800 hover:text-[#C98B22] no-underline">
                    <span>Contact</span>
                    <?php if ($isContact): ?>
                        <span class="w-2 h-2 rounded-full bg-[#E5A93C]"></span>
                    <?php endif; ?>
                </a>
            </div>
        </div>

        <!-- Mobile CTA & Info -->
        <div class="pt-6 border-t border-gray-100 flex flex-col gap-3">
            <a href="./BookingPage.php" class="gold-btn flex items-center justify-center gap-2.5 w-full py-3 rounded-xl text-center text-sm font-semibold text-[#1e170d] shadow no-underline">
                <i class="fa-regular fa-calendar-days text-base"></i>
                <span>Book Your Stay</span>
            </a>
            <div class="text-center text-xs text-gray-500 mt-2">
                <i class="fa-solid fa-phone text-xs mr-1 text-[#E5A93C]"></i>
                <a href="tel:8098299921" class="text-gray-600 no-underline hover:text-[#C98B22]">+91 80982 99921</a>
            </div>
        </div>
    </div>
</header>

<script>
    (function () {
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
        const closeMobileMenu = document.getElementById('closeMobileMenu');

        function openMenu() {
            if (!mobileMenu || !mobileMenuOverlay) return;
            mobileMenuOverlay.classList.remove('hidden');
            setTimeout(() => {
                mobileMenuOverlay.classList.remove('opacity-0');
                mobileMenu.classList.remove('translate-x-full');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            if (!mobileMenu || !mobileMenuOverlay) return;
            mobileMenu.classList.add('translate-x-full');
            mobileMenuOverlay.classList.add('opacity-0');
            setTimeout(() => {
                mobileMenuOverlay.classList.add('hidden');
                document.body.style.overflow = '';
            }, 300);
        }

        if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', openMenu);
        if (closeMobileMenu) closeMobileMenu.addEventListener('click', closeMenu);
        if (mobileMenuOverlay) mobileMenuOverlay.addEventListener('click', closeMenu);

        // Close drawer when mobile link is clicked
        const mobileLinks = mobileMenu ? mobileMenu.querySelectorAll('a') : [];
        mobileLinks.forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Contact popups if present
        const closeBtn = document.getElementById('closeBtn');
        const contactBtn = document.getElementById('contact');
        const contactForm = document.getElementById('contactUs');
        const contactCard = document.getElementById('contactCard');

        if (contactBtn && contactForm) {
            contactBtn.addEventListener('click', () => {
                contactForm.style.display = "flex";
            });
        }
        if (contactForm && contactCard) {
            contactForm.addEventListener('click', (e) => {
                if (!contactCard.contains(e.target)) {
                    contactForm.style.display = "none";
                }
            });
        }
        if (closeBtn && contactForm) {
            closeBtn.addEventListener('click', () => {
                contactForm.style.display = "none";
            });
        }
    })();
</script>