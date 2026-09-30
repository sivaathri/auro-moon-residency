<?php
?><?php
?><?php
?><?php
?><?php
?><?php
?><?php
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auro Moon Residency | Luxury Homestay in Pondicherry</title>

    <meta name="description" content="Auro Moon Residency is a peaceful, luxury homestay in Pondicherry offering entire property booking, prime location, and warm hospitality.">
    <meta name="keywords" content="Auro Moon Residency, Pondicherry homestay, homestay in Pondicherry, luxury homestay Pondicherry, Auroville homestay, homestay booking">
    <meta property="og:site_name" content="Auro Moon Residency" />
    <meta property="og:title" content="Auro Moon Residency | Luxury Homestay in Pondicherry" />
    <meta property="og:locale" content="en_US" />

    <link rel="shortcut icon" href="./assect/logo/auro_moon_logo.svg" type="image/svg+xml">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- css link    -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>



    <style>
      .hero-bg-slide {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        will-change: transform;
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
      }

      .testimonial-section {
    background-color: #127873; /* Tailwind's teal-700 */
    color: white;
    padding: 4rem 1rem;
}

.testimonial-section .container {
    max-width: 1200px;
    margin: 0 auto;
}

.testimonial-section .header {
    text-align: center;
    margin-bottom: 3rem;
}

.testimonial-section .header h2 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.testimonial-section .underline {
    width: 6rem;
    height: 4px;
    background-color: white;
    margin: 0 auto;
    border-radius: 2px;
}

.testimonial-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
}

@media (min-width: 768px) {
    .testimonial-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.testimonial-card {
    background-color: rgba(255, 255, 255, 0.2);
    padding: 1.5rem;
    border-radius: 1rem;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    transition: transform 0.3s;
}

.testimonial-card:hover {
    transform: translateY(-5px);
}

.stars {
    color: #facc15; /* Tailwind's yellow-400 */
    margin-bottom: 1rem;
    font-size: 1.1rem;
}

.quote {
    font-style: italic;
    margin-bottom: 1rem;
    font-size: 1rem;
}

.author {
    font-weight: 600;
    font-size: 0.95rem;
}

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

        .find-us-section {
    padding: 3rem 0;
    background-color: #0f766e; /* Tailwind's teal-800 */
    color: white;
}

.find-us-section .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.find-us-section .content {
    text-align: center;
}

.find-us-section h3 {
    font-size: 1.25rem; /* text-xl */
    font-weight: 600;
    margin-bottom: 1.5rem;
}

.find-us-section .tags {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
}

.find-us-section .tags span {
    background-color: rgba(255, 255, 255, 0.2);
    padding: 0.5rem 1rem;
    border-radius: 9999px; /* fully rounded */
    font-size: 0.95rem;
    transition: background-color 0.3s;
}

.find-us-section .tags span:hover {
    background-color: rgba(255, 255, 255, 0.3);
}



        #navcontainer {
            background-color: transparent;
            position: fixed;
        }

        @media only screen and (max-width:991px) {
            #navcontainer {
                background-color: #c44569;
                position: sticky;
                top: 0;
            }
        }

        .first-banner .booking_btn{
            background-color: #c44569;
            color: white;
            font-weight: bold;
        }
        .first-banner .booking_btn:hover{
            background-color:white ;
            color: #c44569;
        }

        .section-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem 1rem;
}

.section-header {
  text-align: center;
  margin-bottom: 3rem;
}

.section-header h2 {
  font-size: 2rem;
  font-weight: 700;
  color: #1f2937; /* text-gray-800 */
  margin-bottom: 1rem;
}

.underline {
  width: 96px;
  height: 4px;
  background-color: #0d9488; /* teal-600 */
  margin: 0 auto;
  border-radius: 2px;
}

.section-content {
  display: flex;
  flex-direction: column;
  gap: 2rem;
}

@media (min-width: 768px) {
  .section-content {
    flex-direction: row;
    align-items: center;
  }
}

.image-box {
  flex: 1;
  padding-right: 1rem;
}

.section-image {
  width: 700px;
  height: 400px; /* ⬅️ Increase this value as needed */
  /* object-fit: contain; */
  border-radius: 0.75rem;
  box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
}


.text-box {
  flex: 1;
  font-size: 1.125rem;
  color: #374151; /* text-gray-700 */
}

.text-box p {
  margin-bottom: 1.5rem;
  line-height: 1.7;
}

.highlight {
  color: #0f766e; /* text-teal-700 */
  font-weight: 600;
}

.btn-wrapper {
  margin-top: 2rem;
}

.explore-btn {
  background-color: #0d9488;     /* Teal */
  color: white;                  /* Button text color */
  font-weight: 700;
  padding: 0.75rem 1.5rem;
  border-radius: 9999px;
  text-decoration: none;
  transition: background-color 0.3s ease, color 0.3s ease;
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
}

.explore-btn:hover {
  background-color: #0f766e;     /* Light blue or choose your preferred */
  color: white;                  /* Make sure text stays white */
}

.card-custom {
  background-color: #ffffff;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15); /* Stronger visible shadow */
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-custom:hover {
  transform: translateY(-6px);
  box-shadow: 0 20px 45px rgba(0, 0, 0, 0.2); /* Stronger on hover */
}


    </style>
</head>

<body style="background-color:#fff;">
    <?php include('navbar.php') ?>
    <!-- Exact Auro Moon Residency Hero Section -->
    <section id="home" class="relative w-full h-[calc(100vh-80px)] min-h-[760px] flex items-center overflow-hidden font-brand-sans" style="height: calc(100vh - 80px); height: calc(100dvh - 80px);">
        <!-- Background Image Container -->
        <div id="heroBgContainer" class="absolute inset-0 overflow-hidden pointer-events-none">
            <div id="heroSlide0" class="hero-bg-slide" style="background-image: url('./assect/images/herobg2.png'); transform: translateX(0%) translateZ(0);"></div>
            <div id="heroSlide1" class="hero-bg-slide" style="background-image: url('./assect/images/auro_moon_hero.jpg'); transform: translateX(100%) translateZ(0);"></div>
            <div id="heroSlide2" class="hero-bg-slide" style="background-image: url('./assect/images/herobg3.png'); transform: translateX(100%) translateZ(0);"></div>
        </div>


        <!-- Main Hero Overlay Content -->
        <div class="relative z-10 w-full px-6 sm:px-10 md:px-14 lg:px-36 py-10">
            <div class="max-w-2xl text-left">
                <!-- Eyebrow Subtitle -->
                <p class="text-[#E8C782] text-xs sm:text-sm font-semibold tracking-[0.24em] uppercase mb-3.5 select-none font-brand-sans">
                    A PEACEFUL HOMESTAY IN
                </p>

                <!-- Hero Title -->
                <h1 class="font-brand-serif text-5xl sm:text-6xl md:text-7xl lg:text-[76px] font-normal text-white leading-[1.08] mb-4 drop-shadow-[0_2px_14px_rgba(0,0,0,0.4)] select-none">
                    Auro Moon<br>Residency
                </h1>

                <!-- Tagline -->
                <p class="font-brand-serif text-xl sm:text-2xl text-white/95 font-light leading-snug mb-8 max-w-xl">
                    Feel at Home in the Heart of Pondicherry
                </p>

                <!-- 3 Feature Badges -->
                <div class="flex items-center gap-6 sm:gap-9 mb-9 flex-wrap select-none">
                    <!-- Entire Property -->
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 flex-shrink-0 flex items-center justify-center">
                            <svg class="w-7 h-7 stroke-white fill-none" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>
                        <div class="text-white text-xs sm:text-sm font-medium leading-tight font-brand-sans">
                            Entire<br>Property
                        </div>
                    </div>

                    <!-- Prime Location -->
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 flex-shrink-0 flex items-center justify-center">
                            <svg class="w-7 h-7 stroke-white fill-none" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div class="text-white text-xs sm:text-sm font-medium leading-tight font-brand-sans">
                            Prime<br>Location
                        </div>
                    </div>

                    <!-- Warm Hospitality -->
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 flex-shrink-0 flex items-center justify-center">
                            <svg class="w-7 h-7 stroke-white fill-none" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <div class="text-white text-xs sm:text-sm font-medium leading-tight font-brand-sans">
                            Warm<br>Hospitality
                        </div>
                    </div>
                </div>

                <!-- CTA Button -->
                <a href="./BookingPage.php" class="inline-flex items-center gap-3 px-8 py-3.5 bg-[#E5A93C] hover:bg-[#d69829] text-[#FFFDF7] font-semibold text-base sm:text-lg rounded-xl shadow-[0_4px_20px_rgba(229,169,60,0.4)] hover:shadow-[0_6px_25px_rgba(229,169,60,0.55)] hover:-translate-y-0.5 transition-all duration-200 no-underline font-brand-sans group select-none">
                    <span>Book Your Stay</span>
                    <i class="fa-solid fa-arrow-right-long text-base transition-transform duration-200 group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>

        <!-- Bottom Carousel Indicators -->
        <div class="absolute bottom-6 left-0 right-0 flex justify-center items-center gap-3 z-20">
            <button type="button" aria-label="Slide 1" onclick="switchHeroSlide(0)" id="heroDot0" class="hero-dot w-2.5 h-2.5 rounded-full bg-white ring-2 ring-white/50 transition-all duration-300"></button>
            <button type="button" aria-label="Slide 2" onclick="switchHeroSlide(1)" id="heroDot1" class="hero-dot w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300"></button>
            <button type="button" aria-label="Slide 3" onclick="switchHeroSlide(2)" id="heroDot2" class="hero-dot w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300"></button>
        </div>
    </section>

    <!-- Top Feature Highlights Bar -->
    <section class="bg-[#FAF7F2] border-b border-[#ECE5D8] py-8 font-brand-sans">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 divide-y md:divide-y-0 md:divide-x divide-[#ECE5D8]">
                <!-- Feature 1: Entire Property -->
                <div class="flex flex-col items-center text-center px-4 py-4 md:py-2">
                    <div class="w-12 h-12 flex items-center justify-center mb-2.5">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="#DE9E36" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 10.5L12 3l9 7.5"/>
                            <path d="M5 9.5V20a1 1 0 001 1h12a1 1 0 001-1V9.5"/>
                            <path d="M19 7V4h-3v1.5"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#1C2530] text-sm md:text-base leading-tight mb-1 font-brand-sans">Entire Property</h3>
                    <p class="text-xs md:text-sm text-gray-500 font-normal font-brand-sans">Private & Peaceful Stay</p>
                </div>

                <!-- Feature 2: Prime Location -->
                <div class="flex flex-col items-center text-center px-4 py-4 md:py-2">
                    <div class="w-12 h-12 flex items-center justify-center mb-2.5">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="#DE9E36" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 21s7-6.5 7-12a7 7 0 10-14 0c0 5.5 7 12 7 12z"/>
                            <circle cx="12" cy="9" r="2.5" fill="#DE9E36"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#1C2530] text-sm md:text-base leading-tight mb-1 font-brand-sans">Prime Location</h3>
                    <p class="text-xs md:text-sm text-gray-500 font-normal font-brand-sans">Close to Beach & Attractions</p>
                </div>

                <!-- Feature 3: Fully Furnished -->
                <div class="flex flex-col items-center text-center px-4 py-4 md:py-2">
                    <div class="w-12 h-12 flex items-center justify-center mb-2.5">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="#DE9E36" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 9V7a2 2 0 00-2-2H6a2 2 0 00-2 2v2"/>
                            <path d="M2 13v5a1 1 0 001 1h1v1a1 1 0 002 0v-1h12v1a1 1 0 002 0v-1h1a1 1 0 001-1v-5a3 3 0 00-3-3H5a3 3 0 00-3 3z"/>
                            <path d="M4 14h16"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#1C2530] text-sm md:text-base leading-tight mb-1 font-brand-sans">Fully Furnished</h3>
                    <p class="text-xs md:text-sm text-gray-500 font-normal font-brand-sans">Modern & Comfortable</p>
                </div>

                <!-- Feature 4: Safe & Secure -->
                <div class="flex flex-col items-center text-center px-4 py-4 md:py-2">
                    <div class="w-12 h-12 flex items-center justify-center mb-2.5">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="#DE9E36" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3s7 2.5 7 8c0 5.5-3.5 9-7 10-3.5-1-7-4.5-7-10 0-5.5 7-8 7-8z"/>
                            <path d="M9 12l2 2 4-4"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#1C2530] text-sm md:text-base leading-tight mb-1 font-brand-sans">Safe & Secure</h3>
                    <p class="text-xs md:text-sm text-gray-500 font-normal font-brand-sans">A Homely Atmosphere</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="relative pt-16 md:pt-24 pb-8 md:pb-12 bg-[#FAF7F2] overflow-hidden font-brand-sans">
        <!-- Floating Botanical Decorative Element on Right -->
        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-64 md:w-80 lg:w-96 pointer-events-none opacity-40 select-none hidden sm:block">
            <svg viewBox="0 0 320 520" fill="none" stroke="#D8B57F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M 300 500 C 270 380 230 250 140 100" />
                <path d="M 270 420 C 220 400 200 410 190 435 C 220 455 255 445 270 420 Z" fill="#F3E9D5" />
                <path d="M 245 340 C 190 325 170 345 160 375 C 195 390 230 370 245 340 Z" fill="#F3E9D5" />
                <path d="M 220 260 C 245 220 280 225 295 250 C 280 280 245 285 220 260 Z" fill="#F3E9D5" />
                <path d="M 195 200 C 145 180 130 205 125 235 C 155 250 190 230 195 200 Z" fill="#F3E9D5" />
                <path d="M 160 135 C 185 95 225 105 240 130 C 220 160 180 165 160 135 Z" fill="#F3E9D5" />
                <path d="M 140 100 C 130 50 165 40 180 60 C 175 90 150 100 140 100 Z" fill="#F3E9D5" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                <!-- Left Image Column -->
                <div class="lg:col-span-6">
                    <div class="relative w-full rounded-2xl md:rounded-3xl overflow-hidden shadow-2xl bg-white border border-[#E8DFC8]">
                        <img 
                            src="./assect/images/auro_about_bedroom.jpg" 
                            alt="A Comfortable Home at Auro Moon Residency" 
                            class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-700 ease-out"
                        />
                    </div>
                </div>

                <!-- Right Content Column -->
                <div class="lg:col-span-6 pl-0 lg:pl-6">
                    <!-- Kicker -->
                    <p class="text-[#B88028] text-xs md:text-sm font-semibold tracking-[0.24em] uppercase mb-2.5 select-none font-brand-sans">
                        ABOUT
                    </p>

                    <!-- Title -->
                    <h2 class="font-brand-serif text-3xl sm:text-4xl md:text-5xl font-bold text-[#1A2839] leading-[1.18] mb-4">
                        A Comfortable Home<br>for Your Pondicherry Stay
                    </h2>

                    <!-- Golden Underline -->
                    <div class="w-12 h-1 bg-[#DE9E36] rounded-full mb-6"></div>

                    <!-- Description -->
                    <p class="text-[#556270] text-base md:text-lg leading-relaxed mb-8 font-normal font-brand-sans">
                        Auro Moon Residency is a single property homestay located in the heart of Pondicherry. We offer a peaceful, clean and comfortable stay with modern amenities, making it an ideal choice for families, couples and solo travelers.
                    </p>

                    <!-- CTA Button -->
                    <a href="./BookingPage.php" class="inline-flex items-center gap-3 px-7 sm:px-8 py-3.5 sm:py-4 bg-[#E5A93C] hover:bg-[#d69829] text-[#1a140c] font-semibold text-sm sm:text-base rounded-xl shadow-md hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200 no-underline font-brand-sans group select-none">
                        <i class="fa-regular fa-calendar-days text-base"></i>
                        <span>Book Your Stay</span>
                        <i class="fa-solid fa-arrow-right-long text-sm transition-transform duration-200 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Preview Section -->
    <section id="gallery" class="pt-6 md:pt-10 pb-16 md:pb-24 bg-[#FAF7F2] font-brand-sans">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <!-- Header Row -->
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-5 mb-7 sm:mb-9">
                <!-- Title & Kicker -->
                <div>
                    <p class="text-[#B88028] text-xs sm:text-sm font-bold tracking-[0.24em] uppercase mb-2 select-none">
                        GALLERY
                    </p>
                    <h2 class="font-brand-serif text-3xl sm:text-4xl md:text-5xl font-bold text-[#1A2839] leading-tight">
                        Take a Look Inside
                    </h2>
                    <!-- Golden Underline Bar -->
                    <div class="w-12 h-1 bg-[#DE9E36] rounded-full mt-3"></div>
                </div>

                <!-- View Full Gallery CTA Button -->
                <div class="flex-shrink-0">
                    <a href="./Photos.php" class="inline-flex items-center gap-2.5 px-6 sm:px-7 py-2.5 sm:py-3 rounded-xl border-2 border-[#DE9E36] bg-transparent hover:bg-[#DE9E36] text-[#1A2839] hover:text-[#1a140c] font-semibold text-sm sm:text-base shadow-sm hover:shadow-md transition-all duration-300 no-underline group select-none">
                        <span>View Full Gallery</span>
                        <i class="fa-solid fa-arrow-right text-sm transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>

            <!-- 5-Column Photo Preview Strip -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3.5 sm:gap-4 md:gap-5">
                <!-- Photo 1: Cozy Bedroom -->
                <a href="./Photos.php" class="group block relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 bg-white aspect-[4/3] focus:outline-none" title="Bedroom - Auro Moon Residency">
                    <img 
                        src="./assect/images/auro_about_bedroom.jpg" 
                        alt="Bedroom at Auro Moon Residency" 
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out"
                        loading="lazy"
                    />
                    <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors duration-300"></div>
                </a>

                <!-- Photo 2: Living Room -->
                <a href="./Photos.php" class="group block relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 bg-white aspect-[4/3] focus:outline-none" title="Living Room - Auro Moon Residency">
                    <img 
                        src="./assect/images/auro_gallery_living.jpg" 
                        alt="Living Room at Auro Moon Residency" 
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out"
                        loading="lazy"
                    />
                    <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors duration-300"></div>
                </a>

                <!-- Photo 3: Dining Area -->
                <a href="./Photos.php" class="group block relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 bg-white aspect-[4/3] focus:outline-none" title="Dining Area - Auro Moon Residency">
                    <img 
                        src="./assect/images/auro_gallery_dining.jpg" 
                        alt="Dining Area at Auro Moon Residency" 
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out"
                        loading="lazy"
                    />
                    <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors duration-300"></div>
                </a>

                <!-- Photo 4: Equipped Kitchen -->
                <a href="./Photos.php" class="group block relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 bg-white aspect-[4/3] focus:outline-none" title="Kitchen - Auro Moon Residency">
                    <img 
                        src="./assect/images/auro_gallery_kitchen.jpg" 
                        alt="Kitchen at Auro Moon Residency" 
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out"
                        loading="lazy"
                    />
                    <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors duration-300"></div>
                </a>

                <!-- Photo 5: Corridor / Hallway -->
                <a href="./Photos.php" class="group block relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 bg-white aspect-[4/3] col-span-2 sm:col-span-1 focus:outline-none" title="Veranda & Hallway - Auro Moon Residency">
                    <img 
                        src="./assect/images/auro_gallery_hallway.jpg" 
                        alt="Veranda and Hallway at Auro Moon Residency" 
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out"
                        loading="lazy"
                    />
                    <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors duration-300"></div>
                </a>
            </div>
        </div>
    </section>

    <!-- Amenities Section -->
    <section id="amenities" class="py-16 md:py-24 bg-white font-brand-sans border-t border-[#ECE5D8]">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <!-- Header Row (Theme Pattern Matching Gallery) -->
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-5 mb-10 sm:mb-12">
                <!-- Title & Kicker -->
                <div>
                    <p class="text-[#B88028] text-xs sm:text-sm font-bold tracking-[0.24em] uppercase mb-2 select-none">
                        AMENITIES
                    </p>
                    <h2 class="font-brand-serif text-3xl sm:text-4xl md:text-5xl font-bold text-[#1A2839] leading-tight">
                        Thoughtful Comforts for Your Stay
                    </h2>
                    <!-- Golden Underline Bar -->
                    <div class="w-12 h-1 bg-[#DE9E36] rounded-full mt-3"></div>
                </div>

                <!-- Book Your Stay CTA Button -->
                <div class="flex-shrink-0">
                    <a href="./BookingPage.php" class="inline-flex items-center gap-2.5 px-6 sm:px-7 py-2.5 sm:py-3 rounded-xl border-2 border-[#DE9E36] bg-transparent hover:bg-[#DE9E36] text-[#1A2839] hover:text-[#1a140c] font-semibold text-sm sm:text-base shadow-sm hover:shadow-md transition-all duration-300 no-underline group select-none">
                        <span>Book Your Stay</span>
                        <i class="fa-solid fa-arrow-right text-sm transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>

            <!-- Amenities Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Amenity 1: Free Wi-Fi -->
                <div class="group relative p-6 sm:p-7 rounded-2xl bg-[#FCFBF8] hover:bg-white border border-[#ECE5D8] hover:border-[#DE9E36]/70 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col items-start">
                    <div class="w-14 h-14 rounded-2xl bg-[#FAF3E7] group-hover:bg-[#DE9E36] text-[#DE9E36] group-hover:text-white flex items-center justify-center mb-5 transition-all duration-300 shadow-sm">
                        <i class="fa-solid fa-wifi text-2xl"></i>
                    </div>
                    <h3 class="font-brand-sans font-bold text-lg text-[#1A2839] group-hover:text-[#DE9E36] transition-colors duration-200 mb-2">
                        Free High-Speed Wi-Fi
                    </h3>
                    <p class="text-sm text-[#556270] leading-relaxed">
                        Stay connected effortlessly with fast, uninterrupted internet access throughout the homestay.
                    </p>
                </div>

                <!-- Amenity 2: Cooking Facilities -->
                <div class="group relative p-6 sm:p-7 rounded-2xl bg-[#FCFBF8] hover:bg-white border border-[#ECE5D8] hover:border-[#DE9E36]/70 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col items-start">
                    <div class="w-14 h-14 rounded-2xl bg-[#FAF3E7] group-hover:bg-[#DE9E36] text-[#DE9E36] group-hover:text-white flex items-center justify-center mb-5 transition-all duration-300 shadow-sm">
                        <i class="fa-solid fa-utensils text-2xl"></i>
                    </div>
                    <h3 class="font-brand-sans font-bold text-lg text-[#1A2839] group-hover:text-[#DE9E36] transition-colors duration-200 mb-2">
                        Equipped Kitchen
                    </h3>
                    <p class="text-sm text-[#556270] leading-relaxed">
                        Prepare home-cooked meals with refrigerator, gas stove, cookware, and dining sets.
                    </p>
                </div>

                <!-- Amenity 3: TV & Entertainment -->
                <div class="group relative p-6 sm:p-7 rounded-2xl bg-[#FCFBF8] hover:bg-white border border-[#ECE5D8] hover:border-[#DE9E36]/70 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col items-start">
                    <div class="w-14 h-14 rounded-2xl bg-[#FAF3E7] group-hover:bg-[#DE9E36] text-[#DE9E36] group-hover:text-white flex items-center justify-center mb-5 transition-all duration-300 shadow-sm">
                        <i class="fa-solid fa-tv text-2xl"></i>
                    </div>
                    <h3 class="font-brand-sans font-bold text-lg text-[#1A2839] group-hover:text-[#DE9E36] transition-colors duration-200 mb-2">
                        Smart TV & Media
                    </h3>
                    <p class="text-sm text-[#556270] leading-relaxed">
                        Relax in comfort with in-room smart television, digital streaming, and entertaining channels.
                    </p>
                </div>

                <!-- Amenity 4: Air Conditioning -->
                <div class="group relative p-6 sm:p-7 rounded-2xl bg-[#FCFBF8] hover:bg-white border border-[#ECE5D8] hover:border-[#DE9E36]/70 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col items-start">
                    <div class="w-14 h-14 rounded-2xl bg-[#FAF3E7] group-hover:bg-[#DE9E36] text-[#DE9E36] group-hover:text-white flex items-center justify-center mb-5 transition-all duration-300 shadow-sm">
                        <i class="fa-solid fa-snowflake text-2xl"></i>
                    </div>
                    <h3 class="font-brand-sans font-bold text-lg text-[#1A2839] group-hover:text-[#DE9E36] transition-colors duration-200 mb-2">
                        Air Conditioning
                    </h3>
                    <p class="text-sm text-[#556270] leading-relaxed">
                        Individual climate control across bedrooms ensures a cool, restful retreat night and day.
                    </p>
                </div>

                <!-- Amenity 5: Cab Rental -->
                <div class="group relative p-6 sm:p-7 rounded-2xl bg-[#FCFBF8] hover:bg-white border border-[#ECE5D8] hover:border-[#DE9E36]/70 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col items-start">
                    <div class="w-14 h-14 rounded-2xl bg-[#FAF3E7] group-hover:bg-[#DE9E36] text-[#DE9E36] group-hover:text-white flex items-center justify-center mb-5 transition-all duration-300 shadow-sm">
                        <i class="fa-solid fa-car text-2xl"></i>
                    </div>
                    <h3 class="font-brand-sans font-bold text-lg text-[#1A2839] group-hover:text-[#DE9E36] transition-colors duration-200 mb-2">
                        Cab & Travel Support
                    </h3>
                    <p class="text-sm text-[#556270] leading-relaxed">
                        Convenient local travel arrangements, rental assistance, and sightseeing recommendations.
                    </p>
                </div>

                <!-- Amenity 6: Laundry Service -->
                <div class="group relative p-6 sm:p-7 rounded-2xl bg-[#FCFBF8] hover:bg-white border border-[#ECE5D8] hover:border-[#DE9E36]/70 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col items-start">
                    <div class="w-14 h-14 rounded-2xl bg-[#FAF3E7] group-hover:bg-[#DE9E36] text-[#DE9E36] group-hover:text-white flex items-center justify-center mb-5 transition-all duration-300 shadow-sm">
                        <i class="fa-solid fa-shirt text-2xl"></i>
                    </div>
                    <h3 class="font-brand-sans font-bold text-lg text-[#1A2839] group-hover:text-[#DE9E36] transition-colors duration-200 mb-2">
                        Laundry Facilities
                    </h3>
                    <p class="text-sm text-[#556270] leading-relaxed">
                        Keep your wardrobe fresh and ready with easy in-house laundry and washing setup.
                    </p>
                </div>

                <!-- Amenity 7: Attentive Hospitality -->
                <div class="group relative p-6 sm:p-7 rounded-2xl bg-[#FCFBF8] hover:bg-white border border-[#ECE5D8] hover:border-[#DE9E36]/70 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col items-start">
                    <div class="w-14 h-14 rounded-2xl bg-[#FAF3E7] group-hover:bg-[#DE9E36] text-[#DE9E36] group-hover:text-white flex items-center justify-center mb-5 transition-all duration-300 shadow-sm">
                        <i class="fa-solid fa-bell-concierge text-2xl"></i>
                    </div>
                    <h3 class="font-brand-sans font-bold text-lg text-[#1A2839] group-hover:text-[#DE9E36] transition-colors duration-200 mb-2">
                        Attentive Hospitality
                    </h3>
                    <p class="text-sm text-[#556270] leading-relaxed">
                        Warm, personalized care with regular housekeeping and on-call assistance when needed.
                    </p>
                </div>

                <!-- Amenity 8: Safe Stay & First Aid -->
                <div class="group relative p-6 sm:p-7 rounded-2xl bg-[#FCFBF8] hover:bg-white border border-[#ECE5D8] hover:border-[#DE9E36]/70 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col items-start">
                    <div class="w-14 h-14 rounded-2xl bg-[#FAF3E7] group-hover:bg-[#DE9E36] text-[#DE9E36] group-hover:text-white flex items-center justify-center mb-5 transition-all duration-300 shadow-sm">
                        <i class="fa-solid fa-shield-halved text-2xl"></i>
                    </div>
                    <h3 class="font-brand-sans font-bold text-lg text-[#1A2839] group-hover:text-[#DE9E36] transition-colors duration-200 mb-2">
                        Safe Stay & First Aid
                    </h3>
                    <p class="text-sm text-[#556270] leading-relaxed">
                        Peace of mind with secure surroundings, first-aid kit ready, and local medical support.
                    </p>
                </div>
            </div>
        </div>
    </section>


<!-- Premium UI Section: Things to Do in Auroville & Pondicherry -->
<section id="explore" class="py-16 md:py-24 bg-[#FAF7F2] font-brand-sans border-t border-[#ECE5D8]">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
        <!-- Header Row (Theme Pattern Matching Gallery) -->
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-5 mb-10 sm:mb-12">
            <!-- Title & Kicker -->
            <div>
                <p class="text-[#B88028] text-xs sm:text-sm font-bold tracking-[0.24em] uppercase mb-2 select-none">
                    LOCAL GUIDE
                </p>
                <h2 class="font-brand-serif text-3xl sm:text-4xl md:text-5xl font-bold text-[#1A2839] leading-tight">
                    Things to Do in Auroville & Pondicherry
                </h2>
                <!-- Golden Underline Bar -->
                <div class="w-12 h-1 bg-[#DE9E36] rounded-full mt-3"></div>
            </div>

            <!-- Plan Your Trip CTA Button -->
            <div class="flex-shrink-0">
                <a href="./BookingPage.php" class="inline-flex items-center gap-2.5 px-6 sm:px-7 py-2.5 sm:py-3 rounded-xl border-2 border-[#DE9E36] bg-transparent hover:bg-[#DE9E36] text-[#1A2839] hover:text-[#1a140c] font-semibold text-sm sm:text-base shadow-sm hover:shadow-md transition-all duration-300 no-underline group select-none">
                    <span>Plan Your Trip</span>
                    <i class="fa-solid fa-arrow-right text-sm transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>

        <!-- 2 Destination Showcase Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10">
            <!-- Card 1: Auroville Highlights -->
            <div class="bg-white rounded-3xl p-7 sm:p-9 border border-[#ECE5D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Card Header -->
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-[#FAF3E7] text-[#DE9E36] flex items-center justify-center text-2xl flex-shrink-0 shadow-sm">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <div>
                            <h3 class="font-brand-serif text-2xl sm:text-3xl font-bold text-[#1A2839] leading-tight">
                                Auroville Highlights
                            </h3>
                            <p class="text-xs sm:text-sm text-[#8A7968] font-medium mt-0.5">
                                Spiritual landmarks, sound gardens & artisan bakeries
                            </p>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="w-full h-px bg-[#ECE5D8] mb-6"></div>

                    <!-- Top Places -->
                    <div class="mb-7">
                        <h4 class="text-xs uppercase font-bold tracking-[0.2em] text-[#B88028] mb-3.5 flex items-center gap-2">
                            <i class="fa-solid fa-location-dot text-[#DE9E36]"></i> Top Places to Visit
                        </h4>
                        <div class="flex flex-wrap gap-2.5">
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-xl text-xs sm:text-sm font-medium bg-[#FCFBF8] text-[#1A2839] border border-[#ECE5D8] hover:border-[#DE9E36] transition-colors">
                                <i class="fa-solid fa-location-pin text-[#DE9E36] text-xs"></i> Visitor's Centre
                            </span>
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-xl text-xs sm:text-sm font-medium bg-[#FCFBF8] text-[#1A2839] border border-[#ECE5D8] hover:border-[#DE9E36] transition-colors">
                                <i class="fa-solid fa-sun text-[#DE9E36] text-xs"></i> Matrimandir
                            </span>
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-xl text-xs sm:text-sm font-medium bg-[#FCFBF8] text-[#1A2839] border border-[#ECE5D8] hover:border-[#DE9E36] transition-colors">
                                <i class="fa-solid fa-music text-[#DE9E36] text-xs"></i> Svaram Sound Garden
                            </span>
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-xl text-xs sm:text-sm font-medium bg-[#FCFBF8] text-[#1A2839] border border-[#ECE5D8] hover:border-[#DE9E36] transition-colors">
                                <i class="fa-solid fa-tree text-[#DE9E36] text-xs"></i> Bamboo Centre
                            </span>
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-xl text-xs sm:text-sm font-medium bg-[#FCFBF8] text-[#1A2839] border border-[#ECE5D8] hover:border-[#DE9E36] transition-colors">
                                <i class="fa-solid fa-water text-[#DE9E36] text-xs"></i> Serenity Beach
                            </span>
                        </div>
                    </div>

                    <!-- Recommended Cafes -->
                    <div class="mb-7">
                        <h4 class="text-xs uppercase font-bold tracking-[0.2em] text-[#B88028] mb-3.5 flex items-center gap-2">
                            <i class="fa-solid fa-utensils text-[#DE9E36]"></i> Recommended Cafes & Dining
                        </h4>
                        <div class="space-y-3">
                            <div>
                                <span class="text-[11px] font-bold text-[#8A7968] uppercase tracking-wider block mb-1.5">Breakfast</span>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Auroville Bakery</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Bread and Chocolate</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Marc's Cafe</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Coffee Break</span>
                                </div>
                            </div>
                            <div>
                                <span class="text-[11px] font-bold text-[#8A7968] uppercase tracking-wider block mb-1.5">Lunch</span>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Tanto</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Aurelec</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Umami Kitchen</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Cafe 73</span>
                                </div>
                            </div>
                            <div>
                                <span class="text-[11px] font-bold text-[#8A7968] uppercase tracking-wider block mb-1.5">Dinner</span>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Nowana</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Tanto</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Umami</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activities -->
                <div class="pt-5 border-t border-[#ECE5D8]">
                    <h4 class="text-xs uppercase font-bold tracking-[0.2em] text-[#B88028] mb-3.5 flex items-center gap-2">
                        <i class="fa-solid fa-compass text-[#DE9E36]"></i> Popular Activities
                    </h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                        <div class="flex items-center gap-2.5 text-xs sm:text-sm text-[#1A2839]">
                            <i class="fa-solid fa-water text-[#DE9E36] w-4 text-center"></i>
                            <span>Surfing</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs sm:text-sm text-[#1A2839]">
                            <i class="fa-solid fa-bicycle text-[#DE9E36] w-4 text-center"></i>
                            <span>E-Bike Cycling in Auroville</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs sm:text-sm text-[#1A2839]">
                            <i class="fa-solid fa-spa text-[#DE9E36] w-4 text-center"></i>
                            <span>Massage in Kalarigram</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs sm:text-sm text-[#1A2839]">
                            <i class="fa-solid fa-headphones text-[#DE9E36] w-4 text-center"></i>
                            <span>Sound Healing</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs sm:text-sm text-[#1A2839] sm:col-span-2">
                            <i class="fa-solid fa-horse text-[#DE9E36] w-4 text-center"></i>
                            <span>Horse Riding from Red Earth</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: Pondicherry Highlights -->
            <div class="bg-white rounded-3xl p-7 sm:p-9 border border-[#ECE5D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Card Header -->
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-[#FAF3E7] text-[#DE9E36] flex items-center justify-center text-2xl flex-shrink-0 shadow-sm">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                        <div>
                            <h3 class="font-brand-serif text-2xl sm:text-3xl font-bold text-[#1A2839] leading-tight">
                                Pondicherry Highlights
                            </h3>
                            <p class="text-xs sm:text-sm text-[#8A7968] font-medium mt-0.5">
                                French colonial lanes, coastal promenades & heritage shrines
                            </p>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="w-full h-px bg-[#ECE5D8] mb-6"></div>

                    <!-- Top Places -->
                    <div class="mb-7">
                        <h4 class="text-xs uppercase font-bold tracking-[0.2em] text-[#B88028] mb-3.5 flex items-center gap-2">
                            <i class="fa-solid fa-location-dot text-[#DE9E36]"></i> Top Places to Visit
                        </h4>
                        <div class="flex flex-wrap gap-2.5">
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-xl text-xs sm:text-sm font-medium bg-[#FCFBF8] text-[#1A2839] border border-[#ECE5D8] hover:border-[#DE9E36] transition-colors">
                                <i class="fa-solid fa-umbrella-beach text-[#DE9E36] text-xs"></i> Promenade Beach
                            </span>
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-xl text-xs sm:text-sm font-medium bg-[#FCFBF8] text-[#1A2839] border border-[#ECE5D8] hover:border-[#DE9E36] transition-colors">
                                <i class="fa-solid fa-house-chimney text-[#DE9E36] text-xs"></i> White & French Town
                            </span>
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-xl text-xs sm:text-sm font-medium bg-[#FCFBF8] text-[#1A2839] border border-[#ECE5D8] hover:border-[#DE9E36] transition-colors">
                                <i class="fa-solid fa-church text-[#DE9E36] text-xs"></i> Lady of Angels Church
                            </span>
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-xl text-xs sm:text-sm font-medium bg-[#FCFBF8] text-[#1A2839] border border-[#ECE5D8] hover:border-[#DE9E36] transition-colors">
                                <i class="fa-solid fa-om text-[#DE9E36] text-xs"></i> Manakula Vinayagar Temple
                            </span>
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-xl text-xs sm:text-sm font-medium bg-[#FCFBF8] text-[#1A2839] border border-[#ECE5D8] hover:border-[#DE9E36] transition-colors">
                                <i class="fa-solid fa-hands-praying text-[#DE9E36] text-xs"></i> Aurobindo Ashram
                            </span>
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-xl text-xs sm:text-sm font-medium bg-[#FCFBF8] text-[#1A2839] border border-[#ECE5D8] hover:border-[#DE9E36] transition-colors">
                                <i class="fa-solid fa-water text-[#DE9E36] text-xs"></i> Paradise Island
                            </span>
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-xl text-xs sm:text-sm font-medium bg-[#FCFBF8] text-[#1A2839] border border-[#ECE5D8] hover:border-[#DE9E36] transition-colors">
                                <i class="fa-solid fa-umbrella-beach text-[#DE9E36] text-xs"></i> Sand Dunes Beach
                            </span>
                        </div>
                    </div>

                    <!-- Recommended Cafes -->
                    <div class="mb-7">
                        <h4 class="text-xs uppercase font-bold tracking-[0.2em] text-[#B88028] mb-3.5 flex items-center gap-2">
                            <i class="fa-solid fa-utensils text-[#DE9E36]"></i> Recommended Cafes & Dining
                        </h4>
                        <div class="space-y-3">
                            <div>
                                <span class="text-[11px] font-bold text-[#8A7968] uppercase tracking-wider block mb-1.5">Breakfast</span>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Indian Coffee House</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Surguru</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Baker's Street</span>
                                </div>
                            </div>
                            <div>
                                <span class="text-[11px] font-bold text-[#8A7968] uppercase tracking-wider block mb-1.5">Lunch</span>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Coromandel Cafe</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Hotel Kamatchi Mess</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Promenade</span>
                                </div>
                            </div>
                            <div>
                                <span class="text-[11px] font-bold text-[#8A7968] uppercase tracking-wider block mb-1.5">Dinner</span>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Villa Shanti</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Le Dupleix</span>
                                    <span class="px-3 py-1 rounded-lg text-xs font-medium bg-[#FAF3E7] text-[#1A2839] border border-[#EADBCA]">Bay of Buddha</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activities -->
                <div class="pt-5 border-t border-[#ECE5D8]">
                    <h4 class="text-xs uppercase font-bold tracking-[0.2em] text-[#B88028] mb-3.5 flex items-center gap-2">
                        <i class="fa-solid fa-compass text-[#DE9E36]"></i> Popular Activities
                    </h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                        <div class="flex items-center gap-2.5 text-xs sm:text-sm text-[#1A2839]">
                            <i class="fa-solid fa-person-swimming text-[#DE9E36] w-4 text-center"></i>
                            <span>Scuba with Temple Adventures</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs sm:text-sm text-[#1A2839]">
                            <i class="fa-solid fa-motorcycle text-[#DE9E36] w-4 text-center"></i>
                            <span>Ride Around French Town</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs sm:text-sm text-[#1A2839]">
                            <i class="fa-solid fa-ship text-[#DE9E36] w-4 text-center"></i>
                            <span>Paradise Island Boat Ride</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-xs sm:text-sm text-[#1A2839]">
                            <i class="fa-solid fa-tree text-[#DE9E36] w-4 text-center"></i>
                            <span>Mangrove Forest Boating</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Back to Top Button -->
<button id="backToTop" class="fixed bottom-6 right-6 bg-[#E5A93C] hover:bg-[#d69829] text-[#1a140c] p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 z-50">
    <i class="fas fa-arrow-up"></i>
</button>




    <section class="testimonial-section">
    <div class="container">
        <div class="header">
            <h2>What Our Guests Say</h2>
            <div class="underline"></div>
        </div>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="quote">"The perfect home away from home! The cooking facilities were a lifesaver for our family trip."</p>
                <p class="author">- Ramesh K.</p>
            </div>

            <div class="testimonial-card">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="quote">"Excellent location and very comfortable stay. The staff went above and beyond to help us."</p>
                <p class="author">- Priya M.</p>
            </div>

            <div class="testimonial-card">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="quote">"Great value for money. The rooms were clean and had all the amenities we needed for our month-long stay."</p>
                <p class="author">- Arjun S.</p>
            </div>
        </div>
    </div>
</section>


 <!-- Location Section -->
 <section id="location" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                    <div class="text-center md:text-left mb-8">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Location</h2>
                        <div class="w-24 h-1 bg-teal-600 mx-auto md:mx-0"></div>
                    </div>
                    
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Nearby Attractions</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt text-teal-600 mt-1 mr-3"></i>
                                <span>Promenade Beach - 10 min drive</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt text-teal-600 mt-1 mr-3"></i>
                                <span>Auroville - 15 min drive</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt text-teal-600 mt-1 mr-3"></i>
                                <span>White Town - 12 min drive</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt text-teal-600 mt-1 mr-3"></i>
                                <span>Pondicherry Railway Station - 8 min drive</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="h-96 w-full bg-gray-200 rounded-lg overflow-hidden">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.97254453737554!2d79.80971806108442!3d11.93562946751948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a536174f703e3bd%3A0xc201ded8a0aaae5a!2s92%2C%2012th%20Cross%20St%2C%20Anna%20Nagar%2C%20Pondicherry%2C%20605013!5e0!3m2!1sen!2sin!4v1660889513828!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                            class="w-full h-full">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- <div style="background-color: white;">
   <div class="container">
        <h2 class="text-center fw-bold mb-5 section-title">
            DIRECTIONS
        </h2>
        <div class="pb-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.97254453737554!2d79.80971806108442!3d11.93562946751948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a536174f703e3bd%3A0xc201ded8a0aaae5a!2s92%2C%2012th%20Cross%20St%2C%20Anna%20Nagar%2C%20Pondicherry%2C%20605013!5e0!3m2!1sen!2sin!4v1660889513828!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
   </div> -->
 <!-- Keywords Section -->
 <section class="find-us-section">
    <div class="container">
        <div class="content">
            <h3 style="color:white;">Find us as</h3>
            <div class="tags">
                <span>Budget homestay in Pondicherry</span>
                <span>Homestay in Anna Nagar Pondicherry</span>
                <span>Affordable rooms with cooking facilities Pondicherry</span>
                <span>Homestay for family and business stay</span>
                <span>Long-term stay homestay Pondicherry</span>
                <span>Room with free Wi-Fi in Pondicherry</span>
            </div>
        </div>
    </div>
</section>

    <script>


 // Back to Top Button
 const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Mobile Menu Toggle (would need implementation)
        // const mobileMenuButton = document.querySelector('.md\\:hidden');
        // mobileMenuButton.addEventListener('click', () => {
        //     // Implement mobile menu toggle functionality
        //     alert('Mobile menu would open here in a full implementation');
        // });



        window.addEventListener("load", function () {
        const preloader = document.getElementById("preloader");
        preloader.style.opacity = "0";
        preloader.style.transition = "opacity 0.5s ease-out";
        setTimeout(() => {
            preloader.style.display = "none";
        }, 500);
    });
        // Preload images
        const images = [
            "./assect/images/herobg2.png",
            "./assect/images/auro_moon_hero.jpg",
            "./assect/images/herobg3.png",
            "./assect/images/Gallery/2BHK Bedroom 2.JPG",
            "./assect/images/Gallery/2BHK Bedroom 1.JPG",
            "./assect/images/Gallery/2BHK Kitchen.JPG",
            "./assect/images/Gallery/3BHK Bedroom 1.JPG",
            "./assect/images/Gallery/3BHK Bedroom 2.JPG",
            "./assect/images/Gallery/3BHK Bedroom 3.JPG"
        ];

        // Function to preload images
        function preloadImages() {
            images.forEach(src => {
                const img = new Image();
                img.src = src;
            });
        }

        // Call preload when page loads
        window.addEventListener('load', preloadImages);

        // Hero Smooth Right-to-Left Slide Carousel (3 slides)
        const totalHeroSlides = 3;
        let currentHeroIndex = 0;
        let isSliding = false;
        let heroTimer = null;

        function slideTo(nextIndex) {
            if (isSliding || nextIndex === currentHeroIndex) return;
            isSliding = true;

            const outgoing = document.getElementById('heroSlide' + currentHeroIndex);
            const incoming = document.getElementById('heroSlide' + nextIndex);

            if (!outgoing || !incoming) {
                isSliding = false;
                return;
            }

            // Ensure incoming slide is positioned off-screen to the right
            incoming.style.transition = 'none';
            incoming.style.transform = 'translateX(100%) translateZ(0)';
            // Force DOM reflow
            void incoming.offsetHeight;

            // Animate both slides from right to left with smooth luxury easing
            const easeCurve = 'transform 1200ms cubic-bezier(0.25, 1, 0.35, 1)';
            outgoing.style.transition = easeCurve;
            incoming.style.transition = easeCurve;

            outgoing.style.transform = 'translateX(-100%) translateZ(0)';
            incoming.style.transform = 'translateX(0%) translateZ(0)';

            // Update dots
            currentHeroIndex = nextIndex;
            for (let i = 0; i < totalHeroSlides; i++) {
                const dot = document.getElementById('heroDot' + i);
                if (dot) {
                    if (i === currentHeroIndex) {
                        dot.className = 'hero-dot w-2.5 h-2.5 rounded-full bg-white ring-2 ring-white/50 transition-all duration-300';
                    } else {
                        dot.className = 'hero-dot w-2.5 h-2.5 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300';
                    }
                }
            }

            // Once animation completes, reset outgoing slide to the right
            setTimeout(() => {
                outgoing.style.transition = 'none';
                outgoing.style.transform = 'translateX(100%) translateZ(0)';
                isSliding = false;
            }, 1250);
        }

        function switchHeroSlide(index) {
            slideTo(index);
            resetHeroTimer();
        }

        function resetHeroTimer() {
            if (heroTimer) clearInterval(heroTimer);
            heroTimer = setInterval(() => {
                const nextIndex = (currentHeroIndex + 1) % totalHeroSlides;
                slideTo(nextIndex);
            }, 6000);
        }

        window.switchHeroSlide = switchHeroSlide;
        resetHeroTimer();

        const navBar = document.getElementById('navcontainer');
        if (navBar) {
            document.onscroll = () => {
                if (window.scrollY > 50) {
                    navBar.style.backgroundColor = "#c44569";
                } else {
                    var smallDevice = window.matchMedia("(max-width: 991px)");
                    if (!smallDevice.matches) {
                        navBar.style.backgroundColor = "transparent";
                    } else {
                        navBar.style.backgroundColor = "#c44569";
                    }
                }
            };
        }
    </script>
    <?php include ('Footer.php') ?>
</body>

</html>