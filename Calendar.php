<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="smile4kids" />
    <link rel="shortcut icon" href="./assect/logo/aaha home stay.png" type="image/x-icon">
    <title>AAHA Serenity Stay || Calendar</title>
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
    <div class="container my-3">
        <h3 class="h3 fw-bold text-center">Calendar</h3>
        <div id="calendar">
        </div>
    </div>
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