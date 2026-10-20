<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Auro Moon Residency || Our Pricing</title>
    <link rel="shortcut icon" href="./assect/logo/auro_moon_logo.png" type="image/png">
    
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
    </style>
</head>

<body class="bg-[#FAF7F2] font-brand-sans text-[#142132] antialiased min-h-screen flex flex-col">
    <?php include('navbar.php') ?>

    <main class="flex-1 max-w-5xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
        
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-14">
            <p class="text-[#B88028] text-xs sm:text-sm font-bold tracking-[0.24em] uppercase mb-2 select-none">
                TRANSPARENT TARIFFS
            </p>
            <h1 class="font-brand-serif text-3xl sm:text-4xl md:text-5xl font-bold text-[#1A2839] leading-tight">
                Our Pricing &amp; Plans
            </h1>
            <div class="w-12 h-1 bg-[#DE9E36] rounded-full mx-auto mt-3 mb-4"></div>
            <p class="text-sm sm:text-base text-[#556270] leading-relaxed">
                We charge for the <strong class="text-[#1A2839]">entire private homestay property</strong>, not by individual rooms. Enjoy exclusive access for <strong class="text-[#DE9E36]">6 to 12 guests</strong>.
            </p>
        </div>

        <!-- Pricing Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 max-w-4xl mx-auto mb-12">
            
            <!-- Plan 1: Off-Peak Season -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-[#ECE5D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="inline-block px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-[#FAF3E7] text-[#B88028] border border-[#ECE5D8] mb-4">
                        Standard Period
                    </div>
                    <h2 class="font-brand-serif text-2xl sm:text-3xl font-bold text-[#1A2839] mb-2">
                        Off-Peak Season
                    </h2>
                    <p class="text-xs sm:text-sm text-[#707D8B] mb-6">
                        Valid during regular months throughout the rest of the year.
                    </p>

                    <div class="flex items-baseline gap-1.5 mb-6 pb-6 border-b border-[#ECE5D8]">
                        <span class="text-3xl sm:text-4xl font-extrabold text-[#1A2839]">₹8,000</span>
                        <span class="text-xs sm:text-sm text-[#707D8B] font-medium">/ per night</span>
                    </div>

                    <!-- Inclusions -->
                    <ul class="space-y-3 text-xs sm:text-sm text-[#4B5768] list-none p-0 mb-8">
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#DE9E36] text-sm"></i>
                            <span>Exclusive booking of entire property</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#DE9E36] text-sm"></i>
                            <span>Accommodates 6 to 12 guests</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#DE9E36] text-sm"></i>
                            <span>Air-conditioned bedrooms</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#DE9E36] text-sm"></i>
                            <span>Equipped kitchen with refrigerator &amp; stove</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#DE9E36] text-sm"></i>
                            <span>High-speed Wi-Fi &amp; smart TV</span>
                        </li>
                    </ul>
                </div>

                <a href="./BookingPage.php" class="w-full py-3.5 px-6 rounded-xl border-2 border-[#DE9E36] bg-transparent hover:bg-[#DE9E36] text-[#1A2839] hover:text-[#1a140c] font-semibold text-sm sm:text-base text-center transition-all duration-300 no-underline shadow-xs hover:shadow-md block">
                    Book Off-Peak Stay
                </a>
            </div>

            <!-- Plan 2: Peak Season -->
            <div class="relative bg-white rounded-3xl p-6 sm:p-8 border-2 border-[#DE9E36] shadow-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                <!-- Highlight Badge -->
                <div class="absolute -top-3.5 right-6 bg-[#DE9E36] text-[#1a140c] text-[11px] font-bold uppercase tracking-wider px-3.5 py-1 rounded-full shadow-sm">
                    Holiday Season
                </div>

                <div>
                    <div class="inline-block px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-[#FAF3E7] text-[#B88028] border border-[#ECE5D8] mb-4">
                        High Demand Period
                    </div>
                    <h2 class="font-brand-serif text-2xl sm:text-3xl font-bold text-[#1A2839] mb-2">
                        Peak Season
                    </h2>
                    <p class="text-xs sm:text-sm text-[#707D8B] mb-6">
                        May 01 &ndash; June 05 &amp; Dec 15 &ndash; Jan 05.
                    </p>

                    <div class="flex items-baseline gap-1.5 mb-6 pb-6 border-b border-[#ECE5D8]">
                        <span class="text-3xl sm:text-4xl font-extrabold text-[#DE9E36]">₹12,000</span>
                        <span class="text-xs sm:text-sm text-[#707D8B] font-medium">/ per night</span>
                    </div>

                    <!-- Inclusions -->
                    <ul class="space-y-3 text-xs sm:text-sm text-[#4B5768] list-none p-0 mb-8">
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#DE9E36] text-sm"></i>
                            <span>Exclusive booking of entire property</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#DE9E36] text-sm"></i>
                            <span>Accommodates 6 to 12 guests</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#DE9E36] text-sm"></i>
                            <span>All bedrooms air-conditioned</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#DE9E36] text-sm"></i>
                            <span>Full kitchen, refrigerator, cookware &amp; gas</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-circle-check text-[#DE9E36] text-sm"></i>
                            <span>Dedicated support &amp; priority check-in</span>
                        </li>
                    </ul>
                </div>

                <a href="./BookingPage.php" class="w-full py-3.5 px-6 rounded-xl bg-[#E5A93C] hover:bg-[#d69829] text-[#1a140c] font-semibold text-sm sm:text-base text-center shadow-md hover:shadow-lg transition-all duration-300 no-underline block">
                    Book Peak Stay
                </a>
            </div>

        </div>

        <!-- Note & Assistance -->
        <div class="bg-white rounded-2xl p-6 sm:p-7 border border-[#ECE5D8] max-w-4xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
            <div class="flex items-center gap-3.5">
                <div class="w-10 h-10 rounded-full bg-[#FAF3E7] text-[#DE9E36] flex items-center justify-center flex-shrink-0 text-base">
                    <i class="fa-solid fa-circle-info"></i>
                </div>
                <div>
                    <h3 class="text-sm sm:text-base font-bold text-[#1A2839]">Have questions about dates or group sizes?</h3>
                    <p class="text-xs sm:text-sm text-[#707D8B]">Contact us directly for special arrangements and customized requests.</p>
                </div>
            </div>
            <a href="./contact-us.php" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl border border-[#DE9E36] text-[#1A2839] hover:bg-[#FAF3E7] text-xs sm:text-sm font-semibold transition-colors no-underline flex-shrink-0">
                <span>Contact Host</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

    </main>

    <?php include('Footer.php') ?>
</body>

</html>