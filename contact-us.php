 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAHA Serenity Stay || Contact US </title>
    <link rel="shortcut icon" href="./assect/logo/aaha home stay.png" type="image/x-icon">
    <style>#contactUs {
  background: #f8f9fa;
}

.card {
  background-color: #fff;
  transition: all 0.3s ease-in-out;
}

.card:hover {
  box-shadow: 0 0 40px rgba(0, 0, 0, 0.1);
}

input::placeholder,
textarea::placeholder {
  color: #adb5bd;
}

button:focus {
  outline: none !important;
  box-shadow: #127873;
}
.btn-custom-green {
  background-color: #127873 !important;
  color: #ffffff !important;
  border: none !important;
  box-shadow: 0 4px 12px rgba(18, 120, 115, 0.2);
  transition: all 0.3s ease-in-out;
}

.btn-custom-green:hover {
  background-color: #127873 !important;
  color: #ffffff !important;
  box-shadow: 0 6px 18px rgba(18, 120, 115, 0.4);
}




</style>
 </head>
 <body>
 <?php include('navbar.php') ?>
 <div id="contactUs" class="py-5">
 <section id="contactUs" class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8 col-12">
        <div class="card shadow rounded-4 p-4 border-0">
          <h3 class="text-center fw-bold mb-2">Contact Us</h3>
          <p class="text-center text-muted mb-4">
            Please fill in the details below, submit the form and we will
            process your enquiry as quickly as possible.
          </p>
          <form method="POST" action="contactBackend.php" class="needs-validation" novalidate>
            <div class="mb-3">
              <label for="name" class="form-label fw-semibold">Full Name</label>
              <input type="text" class="form-control rounded-3 shadow-sm" id="name" name="userName" placeholder="Enter your name" required>
              <div class="invalid-feedback">Please enter your name.</div>
            </div>
            <div class="mb-3">
              <label for="userEmail" class="form-label fw-semibold">Email Address</label>
              <input type="email" class="form-control rounded-3 shadow-sm" id="userEmail" name="userEmail" placeholder="Enter your email" required>
              <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>
            <div class="mb-3">
              <label for="phoneNumber" class="form-label fw-semibold">Phone Number</label>
              <input type="tel" class="form-control rounded-3 shadow-sm" id="phoneNumber" name="userPhnumber" pattern="(\d{10}|\d{12})" placeholder="10 or 12-digit phone number" required>
              <div class="invalid-feedback">Please enter a valid 10-digit Indian number (starting with 6-9) or 12-digit UK number (starting with 44).</div>
            </div>
            <div class="mb-3">
              <label for="messageBox" class="form-label fw-semibold">Message</label>
              <textarea class="form-control rounded-3 shadow-sm" id="messageBox" name="userMsg" rows="4" placeholder="Write your message..." required></textarea>
              <div class="invalid-feedback">Please enter your message.</div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <button type="submit" name="eqSubmit"class="btn btn-custom-green rounded-pill px-4 py-2 fw-semibold">Submit </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

    </div>

    <script>
        // (function() {
        //     'use strict'

        //     var forms = document.querySelectorAll('.needs-validation')

        //     Array.prototype.slice.call(forms)
        //         .forEach(function(form) {
        //             form.addEventListener('submit', function(event) {
        //                 if (!form.checkValidity()) {
        //                     event.preventDefault()
        //                     event.stopPropagation()
        //                 }

        //                 form.classList.add('was-validated')
        //             }, false)
        //         })
        // })()

        
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            var nameInput = form.querySelector('#name');
            var messageInput = form.querySelector('#messageBox');
            var emailInput = form.querySelector('#userEmail');
            var phoneInput = form.querySelector('#phoneNumber');

            function validateTrimmed(input) {
                if (!input) return;
                var trimmed = input.value.trim();
                input.classList.remove('is-valid', 'is-invalid');
                if (trimmed === "") {
                    input.value = "";
                    input.classList.add('is-invalid');
                } else if (input === phoneInput) {
                    // Custom phone validation: 10 digits (India, starts 6-9) or 12 digits (UK, starts 44)
                    var phonePatternIndia = /^[6-9][0-9]{9}$/;
                    var phonePatternUK = /^44[0-9]{10}$/;
                    if (phonePatternIndia.test(trimmed) || phonePatternUK.test(trimmed)) {
                        input.classList.add('is-valid');
                        return;
                    } else {
                        input.classList.add('is-invalid');
                        return;
                    }
                } else if (input.checkValidity()) {
                    input.classList.add('is-valid');
                }
            }

            if (nameInput) {
                nameInput.addEventListener('input', function() {
                    validateTrimmed(nameInput);
                });
            }
            if (messageInput) {
                messageInput.addEventListener('input', function() {
                    validateTrimmed(messageInput);
                });
            }
            if (emailInput) {
                emailInput.addEventListener('input', function() {
                    validateTrimmed(emailInput);
                });
            }
            if (phoneInput) {
                phoneInput.addEventListener('input', function() {
                    validateTrimmed(phoneInput);
                });
            }

            form.addEventListener('submit', function (event) {
                validateTrimmed(nameInput);
                validateTrimmed(messageInput);
                validateTrimmed(emailInput);
                validateTrimmed(phoneInput);
                if (!form.checkValidity() ||
                    (nameInput && nameInput.value.trim() === "") ||
                    (messageInput && messageInput.value.trim() === "") ||
                    (emailInput && emailInput.value.trim() === "") ||
                    (phoneInput && phoneInput.value.trim() === "")
                ) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();


    </script>


 </body>
 <?php include('Footer.php') ?>
 </html>   
    

