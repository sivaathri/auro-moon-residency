<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assect/logo/aaha home stay.png" type="image/x-icon">
    <title>AAHA Serenity Stay || Photos</title>
    <!-- css link  -->
    <link rel="stylesheet" href="style.css">
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>

    </style>
</head>

<body>
    <?php include('navbar.php') ?>
    <div class="fullScreenImg">
        <img src="" alt="home stay full ima">
    </div>
    <div id="gal" class="my-5">
        <h3 class="h3 text-center fw-bold">GALLERY</h3>
        <div class="container">
            <div class="d-flex flex-wrap galContainer justify-content-center">
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/outside-apartment.jpg" alt="Serenity stay appartment out side"></div>
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/Entrance.png" alt="Serenity stay appartment Entrance"></div>
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/2BHK Hall.JPG" alt="Serenity stay appartment 2BHK Hall"></div>
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/2BHK Bedroom 1.JPG" alt="Serenity stay 2BHK Bedroom 1"></div>
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/2BHK Bedroom 2.JPG" alt="Serenity stay 2BHK Bedroom 2"></div>
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/2BHK Bathroom 1.JPG" alt="Serenity stay 2BHK Bathroom 1"></div>
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/2BHK Bathroom 2.JPG" alt="Serenity stay 2BHK Bathroom 2"></div>
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/2BHK Kitchen.JPG" alt="Serenity stay 2BHK Kitchen"></div>
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/3BHK Hall.jpg" alt="Serenity stay 3BHK Hall"></div>
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/3BHK Bedroom 1.JPG" alt="Serenity stay 3BHK Bedroom 1"></div>
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/3BHK Bedroom 2.JPG" alt="Serenity stay 3BHK Bedroom 2"></div>
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/3BHK Bedroom 3.JPG" alt="Serenity stay 3BHK Bedroom 3"></div>
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/3BHK Bathroom.JPG" alt="Serenity stay 3BHK Bathroom"></div>
                <div class="card gal"><img class="gal_img" src="./assect/images/Gallery/Dinning Hall.JPG" alt="Serenity stay dining table "></div>
   
            </div>
            <div class="flex justify-center mt-8">
    <a href="./BookingPage.php" class="bg-teal-600 hover:bg-teal-700 text-white font-bold px-[75px] py-[30px] w-[340px] h-[100px] rounded-full transition duration-300 inline-block no-underline flex items-center justify-center">
        <span class="text-[25px]">Book Your Stay</span>
    </a>
</div>           
        </div>
    </div>


    <script>
        const images = document.querySelectorAll('.gal_img');
        const fullImages = document.querySelector('.fullScreenImg');
        const fullImage = fullImages.querySelector('img');

        images.forEach(img => {
            img.addEventListener('click', () => {
                fullImage.src = img.src;
                fullImages.style.display = "flex";
            })
        })

        fullImages.addEventListener('click', (e) => {
            if (!fullImage.contains(e.target)) {
                fullImages.style.display = "none";
            }
        })
    </script>

    <?php include('Footer.php') ?>
</body>

</html>