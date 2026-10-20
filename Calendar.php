<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="smile4kids" />
    <link rel="shortcut icon" href="./assect/logo/auro_moon_logo.png" type="image/png">
    <title>Auro Moon Residency || Calendar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <!-- calender -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <style>
        .nav_list li #contact {
            color: #fff;
        }

        .nav_list li #contact:hover {
            color: #68bb47;
            transition-duration: 0.5s;
        }
    </style>

</head>

<body>
    <?php include('navbar.php') ?>
    <main class="flex-1 max-w-5xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
        <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-10">
            <p class="text-[#B88028] text-xs sm:text-sm font-bold tracking-[0.24em] uppercase mb-2 select-none">
                AVAILABILITY
            </p>
            <h1 class="font-brand-serif text-3xl sm:text-4xl font-bold text-[#1A2839]">
                Booking Calendar
            </h1>
            <div class="w-12 h-1 bg-[#DE9E36] rounded-full mx-auto mt-3 mb-3"></div>
            <p class="text-xs sm:text-sm text-[#556270]">
                Check available dates for Auro Moon Residency. Booked dates are highlighted.
            </p>
        </div>

        <div class="bg-white rounded-3xl p-4 sm:p-7 md:p-8 border border-[#ECE5D8] shadow-sm overflow-x-auto">
            <div id="calendar" class="min-w-[300px]"></div>
        </div>

        <div class="flex justify-center my-8">
            <a href="./BookingPage.php" 
                class="w-full max-w-[320px] py-4 px-8 bg-[#E5A93C] hover:bg-[#d69829] text-[#1a140c] font-semibold text-base sm:text-lg rounded-xl shadow-[0_4px_20px_rgba(229,169,60,0.4)] hover:shadow-[0_6px_25px_rgba(229,169,60,0.55)] hover:-translate-y-0.5 transition-all duration-200 no-underline inline-flex items-center justify-center gap-3">
                <i class="fa-regular fa-calendar-days text-lg"></i>
                <span>Book Your Stay</span>
                <i class="fa-solid fa-arrow-right-long text-base"></i>
            </a>
        </div>
    </main>

    <?php include('Footer.php') ?>

</body>
<script>
    $(document).ready(function() {
        var calendar = $('#calendar').fullCalendar({
            editable: false,
            header: {
                left: 'title',
                center: '',
                right: 'prev,next'
            },
            eventSources: [{
                url: 'calender-dates.php',
                display: 'background',
                color: '#c44569', // an option!
                textColor: '#fff'
            }],
            selectable: false,
            selectHelper: false,
            eventLimit: true,
            displayEventTime: false,
            eventRender: function(event, element, view) {

                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },

            

            // editable: true,
            // eventResize: function(event) {
            //     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
            //     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
            //     //var title = event.title;
            //     var id = event.id;
            //     $.ajax({
            //         url: "update.php",
            //         type: "POST",
            //         data: {
            //             start: start,
            //             end: end,
            //             id: id
            //         },
            //         success: function() {
            //             calendar.fullCalendar('refetchEvents');
            //             alert('Event Update');
            //         }
            //     })
            // },

            // eventDrop: function(event) {
            //     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
            //     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
            //     //var title = event.title;
            //     var id = event.id;
            //     $.ajax({
            //         url: "update.php",
            //         type: "POST",
            //         data: {
            //             //title: title,
            //             start: start,
            //             end: end,
            //             id: id
            //         },
            //         success: function() {
            //             calendar.fullCalendar('refetchEvents');
            //             alert("Event Updated");
            //         }
            //     });
            // },

            // eventClick: function(event) {
            //     if (confirm("Are you sure you want to remove it?")) {
            //         var id = event.id;
            //         $.ajax({
            //             url: "delete.php",
            //             type: "POST",
            //             data: {
            //                 id: id
            //             },
            //             success: function() {
            //                 calendar.fullCalendar('refetchEvents');
            //                 alert("Event Removed");
            //             }
            //         })
            //     }
            // },

        });
    });
</script>

</html>