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
    <title>AAHA SERENITY STAYS</title>

    <meta name="description" content="AAHA SERENITY STAYS is offering budget rooms with free Wi-Fi connectivity, provides in-room amenities like television, refrigerator, cooking facilities and attached washroom with hot and cold running water supply, laundry, cab rental, medical assistance and room service are additional services provided at the property.">
    <meta name="keywords" content="pondy homestay, homestay in pondycherry,cheap homestay, homestay booking, booking rooms for one day, short stay home stay, cheap motels">
    <!-- <link rel="shortcut icon" href="/assect/logo/pondycoworkinglogo.svg" type="image/x-icon"> -->
    <meta property="og:site_name" content="AAHA SERENITY STAY| Homestay" />
    <meta property="og:title" content="AAHA SERENITY STAY." />
    <meta property="og:url" content="https://aahaserenitystays.com/" />
    <meta property="og:locale" content="en_US" />
    <!-- <meta property="og:image" content="assect/logopondycoworkinglogo.svg" /> -->

    <link rel=“canonical” href=“https://aahaserenitystays.com/” />

    <link rel="shortcut icon" href="./assect/logo/aaha home stay.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- css link    -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />



    <style>
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
    <!-- first banner -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <div class="first-banner">
    
           <!-- Hero Section -->
           <section id="home" class="relative h-screen flex items-center justify-center text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="bg-cover bg-center absolute inset-0 parallax" style="background-image: url('./assect/images/Gallery/Entrance.png');"></div>

     <!-- Black Overlay -->
     <div class="absolute inset-0 bg-black opacity-40"></div>

    <div class="container mx-auto px-4 z-10 text-center">
        <!-- Main Heading -->
        <h1 class="text-4xl md:text-8xl font-bold mb-6">
            <span style="color:#7ac943;">AAHA </span> 
            <span class="text-white"> SERENITY STAY </span>
        </h1>

        <!-- Line Separator -->
        <div class="w-full max-w-6xl h-4 bg-teal-600 mx-auto mb-6"></div>


        <!-- Subheading -->
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
            <span style="color:white;">A serene private cottage in Anna Nagar, Puducherry</span>
        </p>
       
        <!-- Contact -->
        <h2 class="text-xl md:text-2xl font-semibold mb-6 text-white">Contact no - 8098299921</h2>

        <!-- Social Media Icons -->
        <div class="flex justify-center space-x-9 mb-9 text-5xl">
            <a href="https://wa.me/918098299921" target="_blank" class="text-green-500 hover:text-green-600">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://www.instagram.com/" target="_blank" class="text-pink-500 hover:text-pink-600">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/" target="_blank" class="text-blue-600 hover:text-blue-700">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://g.page/" target="_blank" class="text-red-500 hover:text-red-600">
                <i class="fab fa-google"></i>
            </a>
        </div>

        <!-- Booking Button -->
        <a href="./BookingPage.php" 
           class="bg-teal-600 hover:bg-teal-700 text-white font-bold py-[30px] w-[340px] h-[100px] rounded-full transition duration-300 inline-block no-underline">
           <span class="text-[25px]">Book Your Stay</span> 
        </a>
    </div>
      
        <div class="absolute bottom-10 left-0 right-0 flex justify-center">
            <a href="#about" class="text-white animate-bounce">
                <i class="fas fa-chevron-down text-3xl"></i>
            </a>
        </div>
    </section>
    </div>

        <!-- About Section -->
        <section id="about" class="py-16 bg-white">
        <div class="section-container">
  <div class="section-header">
    <h2>Your Peaceful Retreat in Puducherry</h2>
    <div class="underline"></div>
  </div>

  <div class="section-content">
    <div class="image-box">
      <img
        src="./assect/images/Gallery/AAHA Serenity Stay view.png"
        alt="AAHA Serenity Stay"
        class="section-image"
      />
    </div>
    <div class="text-box">
      <p>
        We are a fully Licensed Bed & Breakfast (Homestay) establishment approved by Ministry of Tourism, Government of India and Department of Tourism, Government of Puducherry.
      </p>
      <p>
        Enjoy <span class="highlight">affordable rooms with cooking facilities</span>, <span class="highlight">free Wi-Fi</span>, and <span class="highlight">in-room amenities</span> like TV and refrigerator – perfect for <span class="highlight">families, business stays, and long-term guests</span>.
      </p>
      <p>
        Our homestay also provides <span class="highlight">laundry service</span>, <span class="highlight">cab rental for local travel</span>, <span class="highlight">room service</span>, and <span class="highlight">medical assistance on request</span>.
      </p>
      <div class="btn-wrapper">
        <a href="#amenities" class="explore-btn">
          Explore Amenities <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</div>

    </section>

    <!-- our services  -->
    <!-- <div id="services" class="container py-5" style="background: #fff; border-radius: 12px;">
        <h2 class="text-center fw-bold mb-5 section-title">
            Our services
        </h2>
        <div class="mb-4">
            <span style="font-weight: bold; font-size: 1.3rem;">
                4 - 12 guests &middot; 5 bedrooms &middot; 5 beds &middot; 2.5 bathrooms
            </span>
        </div>
        <div class="mb-3" style="font-size: 1.1rem;">
            We are a fully Licensed Bed & Breakfast (Homestay) establishment approved by Ministry of Tourism, Government of India and Department of Tourism, Government of Puducherry.
        </div>
        <div class="mb-3" style="font-size: 1.1rem;">
            AAHA Serenity Stay – A serene private cottage in Anna Nagar, Puducherry. Enjoy <b>affordable rooms with cooking facilities</b>, <b>free Wi-Fi</b>, and <b>in-room amenities</b> like TV and refrigerator – perfect for <b>families, business stays, and long-term guests</b>.
        </div>
        <div class="mb-3" style="font-size: 1.1rem;">
            Our homestay also provides <b>laundry service</b>, <b>cab rental for local travel</b>, <b>room service</b>, and <b>medical assistance on request</b>. Enjoy a <b>peaceful and homely environment</b> just minutes away from <b>Puducherry's top attractions</b>, including Promenade Beach, Auroville, and White Town.
        </div>
        <div class="mb-4" style="font-size: 1.1rem;">
            Book your stay today at one of the <b>best budget homestays in Puducherry</b>, and make your trip truly memorable.
        </div>
        <div class="row" style="font-size: 1.05rem;">
            <div class="col-md-6">
                <ul style="list-style:none; padding-left:0;">
                    <li><i class="fa fa-home text-green"></i> <b>Budget homestay in Puducherry</b></li>
                    <li><i class="fa fa-map-marker text-green"></i> <b>Homestay in Anna Nagar Puducherry</b></li>
                    <li><i class="fa fa-cutlery text-green"></i> <b>Affordable rooms with cooking facilities Puducherry</b></li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul style="list-style:none; padding-left:0;">
                    <li><i class="fa fa-users text-green"></i> <b>Homestay for family and business stay</b></li>
                    <li><i class="fa fa-calendar text-green"></i> <b>Long-term stay homestay Puducherry</b></li>
                    <li><i class="fa fa-wifi text-green"></i> <b>Room with free Wi-Fi in Pondicherry</b></li>
                </ul>
            </div>
        </div>
    </div> -->
    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Why Choose AAHA Serenity Stay?</h2>
                <div class="w-24 h-1 bg-teal-600 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md text-center hover:shadow-xl transition duration-300">
                    <div class="text-teal-600 mb-4">
                        <i class="fas fa-home text-5xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Homely Environment</h3>
                    <p class="text-gray-600">Experience a peaceful and comfortable stay that feels just like home, away from home.</p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-md text-center hover:shadow-xl transition duration-300">
                    <div class="text-teal-600 mb-4">
                        <i class="fas fa-map-marker-alt text-5xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Prime Location</h3>
                    <p class="text-gray-600">Located just minutes away from Puducherry's top attractions including Promenade Beach and Auroville.</p>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-md text-center hover:shadow-xl transition duration-300">
                    <div class="text-teal-600 mb-4">
                        <i class="fas fa-wallet text-5xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Budget Friendly</h3>
                    <p class="text-gray-600">Affordable accommodation without compromising on comfort and essential amenities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Amenities Section -->
    <section id="amenities" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Amenities</h2>
                <div class="w-24 h-1 bg-teal-600 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Amenity 1 -->
                <div class="amenity-card bg-gray-50 p-6 rounded-lg text-center hover:bg-teal-50 transition duration-300">
                    <div class="amenity-icon text-teal-600 mb-4">
                        <i class="fas fa-wifi text-4xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Free Wi-Fi</h3>
                    <p class="text-gray-600">Stay connected with high-speed internet access throughout your stay.</p>
                </div>
                
                <!-- Amenity 2 -->
                <div class="amenity-card bg-gray-50 p-6 rounded-lg text-center hover:bg-teal-50 transition duration-300">
                    <div class="amenity-icon text-teal-600 mb-4">
                        <i class="fas fa-utensils text-4xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Cooking Facilities</h3>
                    <p class="text-gray-600">Prepare your own meals with our fully equipped kitchen facilities.</p>
                </div>
                
                <!-- Amenity 3 -->
                <div class="amenity-card bg-gray-50 p-6 rounded-lg text-center hover:bg-teal-50 transition duration-300">
                    <div class="amenity-icon text-teal-600 mb-4">
                        <i class="fas fa-tv text-4xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">TV & Entertainment</h3>
                    <p class="text-gray-600">Relax with in-room television and entertainment options.</p>
                </div>
                
                <!-- Amenity 4 -->
                <div class="amenity-card bg-gray-50 p-6 rounded-lg text-center hover:bg-teal-50 transition duration-300">
                    <div class="amenity-icon text-teal-600 mb-4">
                        <i class="fas fa-snowflake text-4xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Air Conditioning</h3>
                    <p class="text-gray-600">Stay comfortable with climate-controlled rooms.</p>
                </div>
                
                <!-- Amenity 5 -->
                <div class="amenity-card bg-gray-50 p-6 rounded-lg text-center hover:bg-teal-50 transition duration-300">
                    <div class="amenity-icon text-teal-600 mb-4">
                        <i class="fas fa-car text-4xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Cab Rental</h3>
                    <p class="text-gray-600">Convenient local travel options available on request.</p>
                </div>
                
                <!-- Amenity 6 -->
                <div class="amenity-card bg-gray-50 p-6 rounded-lg text-center hover:bg-teal-50 transition duration-300">
                    <div class="amenity-icon text-teal-600 mb-4">
                        <i class="fas fa-tshirt text-4xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Laundry Service</h3>
                    <p class="text-gray-600">Keep your clothes fresh with our laundry facilities.</p>
                </div>
                
                <!-- Amenity 7 -->
                <div class="amenity-card bg-gray-50 p-6 rounded-lg text-center hover:bg-teal-50 transition duration-300">
                    <div class="amenity-icon text-teal-600 mb-4">
                        <i class="fas fa-concierge-bell text-4xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Room Service</h3>
                    <p class="text-gray-600">Enjoy the convenience of in-room service.</p>
                </div>
                
                <!-- Amenity 8 -->
                <div class="amenity-card bg-gray-50 p-6 rounded-lg text-center hover:bg-teal-50 transition duration-300">
                    <div class="amenity-icon text-teal-600 mb-4">
                        <i class="fas fa-first-aid text-4xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Medical Assistance</h3>
                    <p class="text-gray-600">Peace of mind with medical help available when needed.</p>
                </div>
            </div>
        </div>
    </section>


<!-- Premium UI Section: Things to Do in Auroville & Pondicherry -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<section class="premium-places-section py-5 bg-white">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 section-title">Things to Do in Auroville & Pondicherry</h2>
      <div class="row g-4">
        <!-- Auroville Card -->
        <div class="col-md-6">
          <div class="card-custom shadow-sm p-4 bg-white h-100">
            <h3 class="mb-3 section-subtitle"><i class="fas fa-leaf me-2"></i>Auroville Highlights</h3>

          <div class="mb-4">
            <h5 class="section-heading">Top Places</h5>
            <ul class="list-unstyled lh-lg mb-3">
              <li><i class="fas fa-map-marker-alt icon-primary"></i> Visitor's Centre</li>
              <li><i class="fas fa-sun icon-warning"></i> Matrimandir</li>
              <li><i class="fas fa-music icon-danger"></i> Svaram Sound Garden</li>
              <li><i class="fas fa-tree icon-success"></i> Bamboo Centre</li>
              <li><i class="fas fa-water icon-info"></i> Serenity Beach</li>
            </ul>
          </div>

          <div class="mb-4">
            <h5 class="section-heading">Recommended Cafes</h5>
            <p class="fw-bold">Breakfast</p>
            <div class="badge-container">
              <span class="badge-custom">Auroville Bakery</span>
              <span class="badge-custom">Bread and Chocolate</span>
              <span class="badge-custom">Marc's Cafe</span>
              <span class="badge-custom">Coffee Break</span>
            </div>
            <p class="fw-bold mt-3">Lunch</p>
            <div class="badge-container">
              <span class="badge-custom">Tanto</span>
              <span class="badge-custom">Aurelec</span>
              <span class="badge-custom">Umami Kitchen</span>
              <span class="badge-custom">Cafe 73</span>
            </div>
            <p class="fw-bold mt-3">Dinner</p>
            <div class="badge-container">
              <span class="badge-custom">Nowana</span>
              <span class="badge-custom">Tanto</span>
              <span class="badge-custom">Umami</span>
            </div>
          </div>

          <div>
            <h5 class="section-heading">Activities</h5>
            <ul class="list-unstyled lh-lg">
              <li><i class="fas fa-water icon-primary"></i> Surfing</li>
              <li><i class="fas fa-bicycle icon-danger"></i> E-Bike Cycling in Auroville</li>
              <li><i class="fas fa-spa icon-success"></i> Massage in Kalarigram</li>
              <li><i class="fas fa-headphones icon-warning"></i> Sound Healing</li>
              <li><i class="fas fa-horse icon-info"></i> Horse Riding from Red Earth</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Pondicherry Card -->
      <div class="col-md-6">
        <div class="card-custom shadow-sm p-4 bg-white h-100">
          <h3 class="mb-3 section-subtitle"><i class="fas fa-city me-2"></i>Pondicherry Highlights</h3>

          <div class="mb-4">
            <h5 class="section-heading">Top Places</h5>
            <ul class="list-unstyled lh-lg mb-3">
              <li><i class="fas fa-umbrella-beach icon-info"></i> Promenade Beach</li>
              <li><i class="fas fa-home icon-primary"></i> White and French Town</li>
              <li><i class="fas fa-church icon-danger"></i> Lady of Angels Church</li>
              <li><i class="fas fa-place-of-worship icon-success"></i> Manakula Vinayagar Temple</li>
              <li><i class="fas fa-praying-hands icon-warning"></i> Aurobindo Ashram</li>
              <li><i class="fas fa-umbrella-beach icon-info"></i> Paradise Island</li>
              <li><i class="fas fa-water icon-primary"></i> Sand Dunes Beach</li>
            </ul>
          </div>

          <div class="mb-4">
            <h5 class="section-heading">Recommended Cafes</h5>
            <p class="fw-bold">Breakfast</p>
            <div class="badge-container">
              <span class="badge-custom">Indian Coffee House</span>  
              <span class="badge-custom">Surguru</span> 
              <span class="badge-custom">Baker's Street</span>
            </div>
            <p class="fw-bold mt-3">Lunch</p>
            <div class="badge-container">
              <span class="badge-custom">Coromandel Cafe</span>
              <span class="badge-custom">Hotel Kamatchi Mess</span>
              <span class="badge-custom">Promenade</span>
            </div>
            <p class="fw-bold mt-3">Dinner</p>
            <div class="badge-container">
              <span class="badge-custom">Villa Shanti</span>
              <span class="badge-custom">Le Dupleix</span>
              <span class="badge-custom">Bay of Buddha</span>
            </div>
          </div>

          <div>
            <h5 class="section-heading">Activities</h5>
            <ul class="list-unstyled lh-lg">
              <li><i class="fas fa-swimmer icon-primary"></i> Scuba from Temple Adventures</li>
              <li><i class="fas fa-motorcycle icon-danger"></i> Ride Around French Town</li>
              <li><i class="fas fa-ship icon-success"></i> Paradise Island Boat Ride</li>
              <li><i class="fas fa-leaf icon-info"></i> Pondicherry Mangrove Forest Boating</li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- Back to Top Button -->
<button id="backToTop" class="fixed bottom-6 right-6 bg-teal-600 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300">
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
 <section class="py-16 bg-white">
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
                                <span>Puducherry Railway Station - 8 min drive</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="h-96 w-full bg-gray-200 rounded-lg overflow-hidden">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.97254453737554!2d79.80971806108442!3d11.93562946751948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a536174f703e3bd%3A0xc201ded8a0aaae5a!2s92%2C%2012th%20Cross%20St%2C%20Anna%20Nagar%2C%20Puducherry%2C%20605013!5e0!3m2!1sen!2sin!4v1660889513828!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" 
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.97254453737554!2d79.80971806108442!3d11.93562946751948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a536174f703e3bd%3A0xc201ded8a0aaae5a!2s92%2C%2012th%20Cross%20St%2C%20Anna%20Nagar%2C%20Puducherry%2C%20605013!5e0!3m2!1sen!2sin!4v1660889513828!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
   </div> -->
 <!-- Keywords Section -->
 <section class="find-us-section">
    <div class="container">
        <div class="content">
            <h3 style="color:white;">Find us as</h3>
            <div class="tags">
                <span>Budget homestay in Puducherry</span>
                <span>Homestay in Anna Nagar Puducherry</span>
                <span>Affordable rooms with cooking facilities Puducherry</span>
                <span>Homestay for family and business stay</span>
                <span>Long-term stay homestay Puducherry</span>
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

        const navBar = document.getElementById('navcontainer');
        document.onscroll = () => {
            if (window.scrollY > 50) {
                navBar.style.backgroundColor = "#c44569"
            } else {
                var smallDevice = window.matchMedia("(max-width: 991px)");
                if (!smallDevice.matches) {
                    navBar.style.backgroundColor = "transparent"
                }else{
                    navBar.style.backgroundColor = "#c44569"
                }
            }
        };
    </script>
    <?php include ('Footer.php') ?>
</body>

</html>