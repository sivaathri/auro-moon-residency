<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Design Preview - Auro Moon Residency</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'brand-serif': ['"Playfair Display"', '"Cormorant Garamond"', 'Georgia', 'serif'],
                        'brand-sans': ['"Plus Jakarta Sans"', 'system-ui', '-apple-system', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        .font-brand-serif {
            font-family: 'Playfair Display', 'Cormorant Garamond', Georgia, serif;
        }
        .font-brand-sans {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        }
    </style>
</head>
<body class="bg-[#eef2f6] min-h-screen flex flex-col justify-end m-0 p-0 font-brand-sans">

    <!-- Preview Container -->
    <div class="w-full">
        <!-- INCLUDE FOOTER HERE -->
        <?php include('Footer.php'); ?>
    </div>

</body>
</html>
