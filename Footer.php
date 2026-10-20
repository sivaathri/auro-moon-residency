<?php
// Auro Moon Residency - Luxury Master Footer Component
?>
<!-- Luxury Master Footer -->
<footer class="relative w-full font-brand-sans overflow-hidden bg-[#FAF8F5]">

    <!-- ======================================================== -->
    <!-- 1. TOP NEWSLETTER BANNER (STAY CONNECTED & GET OFFERS)   -->
    <!-- ======================================================== -->
    <div class="relative w-full overflow-hidden bg-stone-100 border-b border-stone-200/70" style="background-image: url('./assect/images/footer_newsletter_bg.jpg'); background-size: cover; background-position: center right;">
        <!-- Warm ambient overlay to ensure perfect contrast while preserving resort scenery -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#F9F5EE]/95 via-[#FAF6F0]/85 to-transparent pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 xl:px-20 py-12 sm:py-16">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                
                <!-- Left Text Column -->
                <div class="text-left max-w-xl w-full">
                    <span class="block text-[11px] sm:text-xs font-bold uppercase tracking-[0.25em] text-[#8E5B1D] mb-1.5">
                        STAY CONNECTED
                    </span>
                    <h2 class="font-brand-serif text-3xl sm:text-4xl lg:text-[42px] font-bold text-[#182230] leading-tight mb-2.5">
                        Get Updates &amp; Offers
                    </h2>
                    <p class="text-sm sm:text-base text-[#4F5968] leading-relaxed m-0 font-normal">
                        Be the first to know about special stays, seasonal offers and experiences at Auro Moon Residency.
                    </p>
                </div>

                <!-- Right Pill-Shaped Newsletter Input -->
                <div class="w-full lg:max-w-md xl:max-w-lg flex-shrink-0">
                    <form action="#" method="POST" class="m-0" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Auro Moon Residency offers!');">
                        <div class="relative flex items-center bg-white rounded-full shadow-[0_4px_25px_rgba(0,0,0,0.06)] border border-stone-200/90 p-1.5 pl-5 sm:pl-6 transition-all duration-300 focus-within:shadow-[0_6px_30px_rgba(158,101,30,0.15)] focus-within:border-[#9E651E]/40">
                            <!-- Envelope Icon -->
                            <i class="fa-regular fa-envelope text-[#8E9CAE] text-base mr-3 flex-shrink-0"></i>
                            
                            <!-- Input -->
                            <input type="email" required placeholder="Enter your email address" class="w-full bg-transparent border-0 outline-none text-[#232F3E] placeholder-[#9AA5B5] text-sm sm:text-base focus:ring-0 pr-2">
                            
                            <!-- Subscribe Button -->
                            <button type="submit" class="inline-flex items-center gap-2 px-6 sm:px-7 py-3 rounded-full bg-gradient-to-r from-[#9F651C] to-[#875212] hover:from-[#895413] hover:to-[#74430D] text-white font-medium text-sm sm:text-base shadow-sm hover:shadow transition-all duration-300 flex-shrink-0 cursor-pointer">
                                <span>Subscribe</span>
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- ======================================================== -->
    <!-- 2. MAIN 4-COLUMN FOOTER CONTENT (CREAM IVORY BACKGROUND) -->
    <!-- ======================================================== -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 xl:px-20 pt-16 sm:pt-20 pb-12 sm:pb-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 xl:gap-12">
            
            <!-- Column 1: Brand & Identity (4 Cols on LG) -->
            <div class="lg:col-span-4 flex flex-col items-start">
                <!-- Golden Crescent Moon & Lotus Logo -->
                <a href="./" class="inline-flex flex-col items-center group no-underline mb-4">
                    <svg class="w-20 h-20 transition-transform duration-300 group-hover:scale-105" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="auroGoldGrad" x1="15%" y1="10%" x2="85%" y2="90%">
                                <stop offset="0%" stop-color="#E9B958" />
                                <stop offset="45%" stop-color="#D49938" />
                                <stop offset="100%" stop-color="#9C6619" />
                            </linearGradient>
                            <linearGradient id="lotusStrokeGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#F2CA6D" />
                                <stop offset="60%" stop-color="#C78E2C" />
                                <stop offset="100%" stop-color="#8F5A13" />
                            </linearGradient>
                            <linearGradient id="lotusPetalFill" x1="0%" y1="0%" x2="0%" y2="100%">
                                <stop offset="0%" stop-color="#FDF7EA" stop-opacity="0.9" />
                                <stop offset="100%" stop-color="#F9E8C5" stop-opacity="0.8" />
                            </linearGradient>
                        </defs>
                        <!-- Crescent Moon Cradle -->
                        <path d="M 28 22 C 16 38 18 68 38 84 C 54 96 74 95 86 86 C 64 92 42 84 34 68 C 26 52 30 36 38 22 C 34 22 30 22 28 22 Z" fill="url(#auroGoldGrad)" />
                        
                        <!-- Lotus Blossom inside Crescent -->
                        <!-- Center Tall Petal -->
                        <path d="M 55 36 C 55 36 47 48 47 58 C 47 64 50 69 55 71 C 60 69 63 64 63 58 C 63 48 55 36 55 36 Z" fill="url(#lotusPetalFill)" stroke="url(#lotusStrokeGrad)" stroke-width="2" stroke-linejoin="round" />
                        
                        <!-- Inner Left Petal -->
                        <path d="M 52 42 C 43 49 39 57 42 65 C 44 69 49 71 53 71 C 49 66 49 57 52 42 Z" fill="url(#lotusPetalFill)" stroke="url(#lotusStrokeGrad)" stroke-width="1.8" stroke-linejoin="round" />
                        
                        <!-- Inner Right Petal -->
                        <path d="M 58 42 C 67 49 71 57 68 65 C 66 69 61 71 57 71 C 61 66 61 57 58 42 Z" fill="url(#lotusPetalFill)" stroke="url(#lotusStrokeGrad)" stroke-width="1.8" stroke-linejoin="round" />
                        
                        <!-- Outer Flared Left Petal -->
                        <path d="M 43 54 C 34 60 31 67 35 72 C 38 74 44 74 50 71 C 42 70 38 64 43 54 Z" fill="url(#lotusPetalFill)" stroke="url(#lotusStrokeGrad)" stroke-width="1.8" stroke-linejoin="round" />
                        
                        <!-- Outer Flared Right Petal -->
                        <path d="M 67 54 C 76 60 79 67 75 72 C 72 74 66 74 60 71 C 68 70 72 64 67 54 Z" fill="url(#lotusPetalFill)" stroke="url(#lotusStrokeGrad)" stroke-width="1.8" stroke-linejoin="round" />
                        
                        <!-- Base Arc -->
                        <path d="M 38 68 C 46 73 64 73 72 68" stroke="url(#lotusStrokeGrad)" stroke-width="2" stroke-linecap="round" fill="none" />
                    </svg>
                    
                    <div class="flex flex-col items-center mt-2">
                        <span class="font-brand-serif text-2xl sm:text-[28px] font-bold text-[#182333] tracking-tight leading-none group-hover:text-[#C59239] transition-colors">
                            Auro Moon
                        </span>
                        <span class="text-[10.5px] uppercase font-semibold text-[#182333] tracking-[0.32em] mt-1.5 leading-none">
                            RESIDENCY
                        </span>
                    </div>
                </a>

                <!-- Bio description -->
                <p class="text-sm text-[#546070] leading-relaxed max-w-xs mb-6">
                    A cozy and comfortable homestay in the heart of Pondicherry, offering a peaceful and memorable stay for families, couples and solo travelers.
                </p>

                <!-- Location callout -->
                <div class="flex items-start gap-3">
                    <i class="fa-solid fa-location-dot text-[#1F2937] text-base mt-0.5"></i>
                    <div>
                        <div class="text-sm font-bold text-[#1F2937]">Pondicherry, India</div>
                        <div class="text-xs text-[#6B7788] mt-0.5">Close to beach &amp; major attractions</div>
                    </div>
                </div>
            </div>

            <!-- Column 2: Quick Links (2.5 Cols on LG) -->
            <div class="lg:col-span-2 sm:pl-2">
                <h4 class="font-brand-serif text-xl sm:text-[22px] font-bold text-[#182333]">
                    Quick Links
                </h4>
                <div class="w-8 h-[2.5px] bg-[#C59239] rounded-full mt-2 mb-6"></div>
                
                <ul class="space-y-3.5 list-none p-0 m-0">
                    <li><a href="./" class="text-sm text-[#4B5768] hover:text-[#C59239] transition-colors no-underline">Home</a></li>
                    <li><a href="./#about" class="text-sm text-[#4B5768] hover:text-[#C59239] transition-colors no-underline">About Us</a></li>
                    <li><a href="./#amenities" class="text-sm text-[#4B5768] hover:text-[#C59239] transition-colors no-underline">Amenities</a></li>
                    <li><a href="./Photos.php" class="text-sm text-[#4B5768] hover:text-[#C59239] transition-colors no-underline">Gallery</a></li>
                    <li><a href="./#explore" class="text-sm text-[#4B5768] hover:text-[#C59239] transition-colors no-underline">Location</a></li>
                    <li><a href="./contact-us.php" class="text-sm text-[#4B5768] hover:text-[#C59239] transition-colors no-underline">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3: Our Amenities (2.8 Cols on LG) -->
            <div class="lg:col-span-3">
                <h4 class="font-brand-serif text-xl sm:text-[22px] font-bold text-[#182333]">
                    Our Amenities
                </h4>
                <div class="w-8 h-[2.5px] bg-[#C59239] rounded-full mt-2 mb-6"></div>
                
                <ul class="space-y-3.5 list-none p-0 m-0">
                    <li class="flex items-center gap-3.5 text-sm text-[#4B5768]">
                        <i class="fa-solid fa-wifi w-5 text-center text-[#232F3E]"></i>
                        <span>Free WiFi</span>
                    </li>
                    <li class="flex items-center gap-3.5 text-sm text-[#4B5768]">
                        <i class="fa-regular fa-snowflake w-5 text-center text-[#232F3E]"></i>
                        <span>Air Conditioning</span>
                    </li>
                    <li class="flex items-center gap-3.5 text-sm text-[#4B5768]">
                        <i class="fa-solid fa-tv w-5 text-center text-[#232F3E]"></i>
                        <span>Smart TV</span>
                    </li>
                    <li class="flex items-center gap-3.5 text-sm text-[#4B5768]">
                        <i class="fa-solid fa-car-side w-5 text-center text-[#232F3E]"></i>
                        <span>Car Parking</span>
                    </li>
                    <li class="flex items-center gap-3.5 text-sm text-[#4B5768]">
                        <i class="fa-solid fa-mug-hot w-5 text-center text-[#232F3E]"></i>
                        <span>Complimentary Tea/Coffee</span>
                    </li>
                    <li class="flex items-center gap-3.5 text-sm text-[#4B5768]">
                        <i class="fa-regular fa-circle-check w-5 text-center text-[#232F3E]"></i>
                        <span>Clean &amp; Hygienic</span>
                    </li>
                    <li class="flex items-center gap-3.5 text-sm text-[#4B5768]">
                        <i class="fa-solid fa-users w-5 text-center text-[#232F3E]"></i>
                        <span>Ideal for Families</span>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Contact Us (3 Cols on LG) -->
            <div class="lg:col-span-3">
                <h4 class="font-brand-serif text-xl sm:text-[22px] font-bold text-[#182333]">
                    Contact Us
                </h4>
                <div class="w-8 h-[2.5px] bg-[#C59239] rounded-full mt-2 mb-6"></div>
                
                <div class="space-y-4">
                    <!-- Phone -->
                    <div class="flex items-center gap-3.5">
                        <i class="fa-solid fa-phone text-[#232F3E] text-sm w-4 text-center"></i>
                        <a href="tel:8098299921" class="text-sm font-medium text-[#232F3E] hover:text-[#C59239] transition-colors no-underline">
                            +91 98765 43210
                        </a>
                    </div>

                    <!-- Email -->
                    <div class="flex items-center gap-3.5">
                        <i class="fa-regular fa-envelope text-[#232F3E] text-base w-4 text-center"></i>
                        <a href="mailto:info@auromonresidency.com" class="text-sm font-medium text-[#232F3E] hover:text-[#C59239] transition-colors no-underline break-all">
                            info@auromonresidency.com
                        </a>
                    </div>

                    <!-- Location with Subtext -->
                    <div class="flex items-start gap-3.5">
                        <i class="fa-solid fa-location-dot text-[#232F3E] text-base w-4 text-center mt-0.5"></i>
                        <div>
                            <span class="text-sm font-bold text-[#1F2937] block">Pondicherry, India</span>
                            <span class="text-xs text-[#6B7788] block mt-0.5">Close to beach &amp; major attractions</span>
                        </div>
                    </div>

                    <!-- Social Icons Row -->
                    <div class="pt-3 flex items-center gap-3">
                        <!-- Instagram -->
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-[#F5ECE0] hover:bg-[#EBDBC8] text-[#4A3B2C] hover:text-[#1E2530] flex items-center justify-center transition-all duration-200 no-underline shadow-sm" title="Instagram">
                            <i class="fa-brands fa-instagram text-base"></i>
                        </a>
                        <!-- Facebook -->
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-[#F5ECE0] hover:bg-[#EBDBC8] text-[#4A3B2C] hover:text-[#1E2530] flex items-center justify-center transition-all duration-200 no-underline shadow-sm" title="Facebook">
                            <i class="fa-brands fa-facebook-f text-sm"></i>
                        </a>
                        <!-- WhatsApp -->
                        <a href="https://wa.me/918098299921?text=Hello%20Auro%20Moon%20Residency%2C%20I%20would%20like%20to%20enquire%20about%20room%20availability%20and%20rates." target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-[#F5ECE0] hover:bg-[#EBDBC8] text-[#4A3B2C] hover:text-[#1E2530] flex items-center justify-center transition-all duration-200 no-underline shadow-sm" title="Chat on WhatsApp">
                            <i class="fa-brands fa-whatsapp text-base"></i>
                        </a>
                        <!-- Location Map -->
                        <a href="https://www.google.com/maps/dir/?api=1&destination=92,+12th+Cross+St,+Anna+Nagar,+Pondicherry,+605013" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-[#F5ECE0] hover:bg-[#EBDBC8] text-[#4A3B2C] hover:text-[#1E2530] flex items-center justify-center transition-all duration-200 no-underline shadow-sm" title="Directions on Google Maps">
                            <i class="fa-solid fa-map-location-dot text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ======================================================== -->
    <!-- 3. TRANSITION WAVE, BOTANICAL LEAVES & DARK BOTTOM BAR   -->
    <!-- ======================================================== -->
    <div class="relative w-full overflow-hidden">
        
        <!-- Organic Flowing Wave Divider -->
        <div class="w-full leading-none -mb-[1px]">
            <svg class="w-full h-20 sm:h-28 lg:h-36 block text-[#1C1713]" viewBox="0 0 1440 140" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="waveGoldAccent1" x1="50%" y1="0%" x2="100%" y2="80%">
                        <stop offset="0%" stop-color="#D49938" stop-opacity="0.55" />
                        <stop offset="60%" stop-color="#A26F1E" stop-opacity="0.35" />
                        <stop offset="100%" stop-color="#1C1713" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="waveGoldAccent2" x1="40%" y1="20%" x2="95%" y2="70%">
                        <stop offset="0%" stop-color="#F2CA6D" stop-opacity="0.6" />
                        <stop offset="50%" stop-color="#C78E2C" stop-opacity="0.3" />
                        <stop offset="100%" stop-color="#1C1713" stop-opacity="0" />
                    </linearGradient>
                </defs>

                <!-- Upper Golden Wave Swoosh -->
                <path d="M 620 90 C 850 60 1100 18 1440 28 L 1440 68 C 1180 50 920 78 620 90 Z" fill="url(#waveGoldAccent1)" />
                <path d="M 780 72 C 1000 40 1230 12 1440 22 L 1440 45 C 1260 30 1060 55 780 72 Z" fill="url(#waveGoldAccent2)" />

                <!-- Main Dark Silhouette Wave -->
                <path d="M 0 45 C 320 85 550 110 880 78 C 1120 54 1300 20 1440 35 L 1440 140 L 0 140 Z" fill="#1C1713" />
            </svg>
        </div>

        <!-- Dark Bottom Container -->
        <div class="relative bg-[#1C1713] pt-2 pb-8 sm:pb-10">

            <!-- Botanical Golden Leaves (Bottom-Left Corner) -->
            <div class="absolute bottom-0 left-0 w-36 sm:w-48 lg:w-56 pointer-events-none z-10 opacity-90 select-none">
                <svg viewBox="0 0 220 220" fill="none" class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="leafGradLeft1" x1="20%" y1="0%" x2="80%" y2="100%">
                            <stop offset="0%" stop-color="#DEAA52" />
                            <stop offset="45%" stop-color="#A57321" />
                            <stop offset="100%" stop-color="#462E08" />
                        </linearGradient>
                        <linearGradient id="leafGradLeft2" x1="0%" y1="10%" x2="100%" y2="90%">
                            <stop offset="0%" stop-color="#F2C56F" />
                            <stop offset="50%" stop-color="#B88329" />
                            <stop offset="100%" stop-color="#55380D" />
                        </linearGradient>
                        <linearGradient id="leafDark1" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#805615" />
                            <stop offset="100%" stop-color="#2D1C05" />
                        </linearGradient>
                    </defs>

                    <!-- Lower Leaves -->
                    <path d="M -10 220 C 10 180 30 170 80 180 C 60 210 20 220 -10 220 Z" fill="url(#leafDark1)" opacity="0.85" />
                    <path d="M -20 220 C -5 160 20 145 65 155 C 45 190 10 220 -20 220 Z" fill="url(#leafGradLeft1)" opacity="0.9" />

                    <!-- Upright Center Leaf -->
                    <path d="M 0 200 C 15 150 40 100 80 65 C 85 90 70 140 35 180 Z" fill="url(#leafGradLeft2)" />
                    <!-- Leaf Central Vein -->
                    <path d="M 0 200 Q 40 135 80 65" stroke="#FCE2A6" stroke-width="1.8" stroke-linecap="round" opacity="0.8" />
                    <!-- Delicate Side Veins -->
                    <path d="M 28 155 Q 45 145 55 135" stroke="#FCE2A6" stroke-width="1" opacity="0.6" />
                    <path d="M 45 125 Q 60 115 68 102" stroke="#FCE2A6" stroke-width="1" opacity="0.6" />
                    <path d="M 18 175 Q 30 170 38 160" stroke="#FCE2A6" stroke-width="1" opacity="0.5" />

                    <!-- Side Flaring Leaf -->
                    <path d="M -10 170 C 10 130 30 95 65 80 C 60 110 40 145 5 170 Z" fill="url(#leafGradLeft1)" opacity="0.95" />
                    <path d="M -10 170 Q 25 125 65 80" stroke="#FCE2A6" stroke-width="1.4" opacity="0.75" />
                </svg>
            </div>

            <!-- Botanical Golden Palm / Fern (Bottom-Right Corner) -->
            <div class="absolute bottom-0 right-0 w-36 sm:w-48 lg:w-56 pointer-events-none z-10 opacity-85 select-none">
                <svg viewBox="0 0 220 220" fill="none" class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="leafGradRight1" x1="100%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#F2C56F" />
                            <stop offset="50%" stop-color="#B88329" />
                            <stop offset="100%" stop-color="#3D280A" />
                        </linearGradient>
                    </defs>

                    <!-- Fan of Palm Leaflets -->
                    <!-- Stem -->
                    <path d="M 230 220 Q 180 150 140 80" stroke="#FCE2A6" stroke-width="2" stroke-linecap="round" opacity="0.65" />
                    
                    <!-- Leaflet 1 -->
                    <path d="M 215 180 C 185 140 150 110 140 80 C 165 95 195 130 215 180 Z" fill="url(#leafGradRight1)" />
                    <!-- Leaflet 2 -->
                    <path d="M 205 195 C 175 160 135 135 120 115 C 145 130 180 160 205 195 Z" fill="url(#leafGradRight1)" opacity="0.9" />
                    <!-- Leaflet 3 -->
                    <path d="M 225 160 C 190 120 160 85 155 55 C 180 75 210 110 225 160 Z" fill="url(#leafGradRight1)" opacity="0.95" />
                    <!-- Leaflet 4 -->
                    <path d="M 230 130 C 205 90 180 60 180 30 C 200 55 220 85 230 130 Z" fill="url(#leafGradRight1)" opacity="0.8" />
                    <!-- Leaflet 5 (Lower) -->
                    <path d="M 190 210 C 160 185 130 170 110 160 C 135 175 165 195 190 210 Z" fill="url(#leafGradRight1)" opacity="0.75" />
                </svg>
            </div>

            <!-- Divider Line Above Legal & Copyright -->
            <div class="relative z-20 max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 xl:px-20 mb-5">
                <div class="w-full h-[1px] bg-stone-700/60"></div>
            </div>

            <!-- Legal Links & Copyright Row -->
            <div class="relative z-20 max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 xl:px-20 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-[#9CA3AF]">
                
                <!-- Left: Policies -->
                <div class="flex flex-wrap items-center justify-center md:justify-start gap-2 sm:gap-3 text-stone-400">
                    <a href="#" class="hover:text-[#DEAA52] transition-colors no-underline text-stone-400">Privacy Policy</a>
                    <span class="text-stone-600">|</span>
                    <a href="#" class="hover:text-[#DEAA52] transition-colors no-underline text-stone-400">Terms &amp; Conditions</a>
                    <span class="text-stone-600">|</span>
                    <a href="#" class="hover:text-[#DEAA52] transition-colors no-underline text-stone-400">Cancellation Policy</a>
                </div>

                <!-- Right: Copyright & Made with Love -->
                <div class="flex flex-wrap items-center justify-center md:justify-end gap-2 text-stone-400 text-center md:text-right">
                    <span>&copy; <?php echo date("Y"); ?> Auro Moon Residency. All rights reserved.</span>
                    <span class="text-stone-600 hidden sm:inline">|</span>
                    <span class="hidden sm:inline">Designed with <i class="fa-solid fa-heart text-red-500 text-[11px] mx-0.5"></i> in Pondicherry</span>
                </div>

            </div>

        </div>

    </div>

</footer>