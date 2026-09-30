<?php
include('dbconfig.php');

// Fetch all contact submissions ordered by newest first
$query = "SELECT * FROM contact_submissions ORDER BY submitted_at DESC";
$statement = $dbconn->prepare($query);
$statement->execute();

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AAHA Serenity Stay || CONTACT SUBMISSIONS</title>
    <link rel="shortcut icon" href="./assect/logo/aaha home stay.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/398c77c1ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- css path -->
    <link rel="stylesheet" href="style.css">

    <style>
        .status-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 0.85em;
            font-weight: 600;
        }
        .status-pending {
            background-color: #ffeaa7;
            color: #d63031;
        }
        .status-read {
            background-color: #dfe6e9;
            color: #2d3436;
        }
        .message-preview {
            max-height: 60px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>

</head>

<body>

    <div class="pb-3" style="min-height:100vh ;">
        <?php include('navbar.php') ?>
        <div class="text-end p-3"><a href="./Admin.php" class="text-decoration-none"><i class="fa-solid fa-arrow-left"></i> Back to Requests</a></div>

        <h3 class="fw-bold h3 text-center p-3">Contact Submissions</h3>
        <div class="container">
            <?php
            if ($statement->rowCount() > 0) {
                $result = $statement->fetchAll();
                foreach ($result as $row) {
            ?>
                    <div class="row align-items-center mt-3 shadow-lg p-3 mx-2" style="background-color: #c8d6e5; border-radius:10px" id='row<?php echo $row['id']; ?>'>
                        <div class="col-md-4" style="align-self: center; color:darkslategray;">
                            <div class="fs-4 fw-bold"><span><?php echo htmlspecialchars($row['name']); ?></span></div>
                            <div class="fw-bold" data-bs-toggle="tooltip" title="EMAIL">
                                <i class="fa fa-envelope"></i> <?php echo htmlspecialchars($row['email']); ?>
                            </div>
                            <div class="fw-bold" data-bs-toggle="tooltip" title="PHONE NUMBER">
                                <i class="fa fa-phone"></i> <?php echo htmlspecialchars($row['phone']); ?>
                            </div>
                            <div class="mt-2">
                                <span class="status-badge status-<?php echo $row['status']; ?>">
                                    <?php echo strtoupper($row['status']); ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-5" style="align-self: center;">
                            <div class="fw-bold mb-1" style="color: #2d3436;">Message:</div>
                            <div class="message-preview" style="color: #636e72;">
                                <?php echo nl2br(htmlspecialchars($row['message'])); ?>
                            </div>
                            <div class="mt-2 text-muted" style="font-size: 0.85em;">
                                <i class="fa fa-clock-o"></i> <?php echo date('d-m-Y h:i A', strtotime($row['submitted_at'])); ?>
                            </div>
                        </div>
                        <div class="col-md-3 text-center py-3" style="align-self: center justify-content-center;">
                            <?php if ($row['status'] == 'pending'): ?>
                                <button type="button" class="mark-read btn shadow-none fw-bold btn-success m-1" id='<?php echo $row['id']; ?>'>
                                    <i class="fa fa-check"></i> Mark as Read
                                </button>
                            <?php endif; ?>
                            <button type="button" class="delete-contact btn shadow-none fw-bold btn-danger m-1" id='<?php echo $row['id']; ?>'>
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </div>
                    </div>
                <?php
                }
            } else { ?>
                <div class="row align-items-center mt-3 shadow-lg p-2 mx-2" style="background-color: white; border-radius:10px">
                    <div class="" style="align-self: center;">
                        <div class=" fs-4 fw-bold text-center">No Contact Submissions Found</span></div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
    <?php include('Footer.php') ?>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        // Mark as Read functionality
        $('.mark-read').each(function() {
            $(this).click(function() {
                var contactId = $(this).attr('id');
                var action = 'mark_contact_read';
                $.ajax({
                    url: 'fetch.php',
                    type: "POST",
                    data: {
                        id: contactId,
                        action: action
                    },
                    success: function(resp) {
                        console.log(resp);
                        if (resp == 'success') {
                            location.reload();
                        } else {
                            alert('Something went wrong!');
                        }
                    }
                })
            });
        });

        // Delete functionality
        $('.delete-contact').each(function() {
            $(this).click(function() {
                var contactId = $(this).attr('id');
                var action = 'delete_contact';
                if (confirm('Are you sure you want to delete this contact submission?')) {
                    $.ajax({
                        url: 'fetch.php',
                        type: "POST",
                        data: {
                            id: contactId,
                            action: action
                        },
                        success: function(resp) {
                            console.log(resp);
                            if (resp == 'success') {
                                $("#row" + contactId).remove();
                                alert('Contact submission deleted successfully!');
                            } else {
                                alert('Something went wrong!');
                            }
                        }
                    })
                }
            });
        });
    });
</script>