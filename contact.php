<?php include "header.php" ?>
<main class="contact-all-screen">
    <div class="contact-main">
        <div class="contact_image">
            <div class="container">
                <div class="contact_heading">
                    <h3 class="animate__animated animate__zoomIn">Contact Us</h3>
                    <p>purchase any product</p>
                    <h5>Contact Now</h5>
                </div>
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_px0ntw70.json" background="transparent" speed="1" style="width: 300px; height: 300px; z-index: 66666;top:8%;position: absolute;" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
    <div class="contact-map">
        <div class="contact-map-1">
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30149.795884362153!2d72.83315320762165!3d19.163533757923105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6e571c29e33%3A0x7536c07aeb1efa84!2sCreative%20Glass!5e0!3m2!1sen!2sin!4v1660815369995!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="true"></iframe>
            </div>
        </div>

    </div>
    <div class="contact-info" style="padding-top:70px;padding-bottom:60px">
        <div class="contact-main-info">
            <div class="contact-text">
                <span class="text-primary text-uppercase contact-heading-1 fs-6 fw-bold ">TRUST AND RECOMMEND</span>
                <h3 class="contact-heading-2">Contact us</h3>
            </div>
            <div class="contact-carding">
                <div class="contact-card-part">
                    <div class="contact-card-part-1">
                        <img src="./assets/images/icon/smartphone.png" alt="" srcset="">
                        <h6>Phone Number</h6>
                        <p>+91 9664671800</p>
                        <p>+91 8948712017</p>
                    </div>
                </div>
                <div class="contact-card-part">
                    <div class="contact-card-part-1">
                        <img src="./assets/images/icon/email-marketing.png" alt="" srcset="">
                        <h6>Email address</h6>
                        <p>creativeglasscreation@gmail.com</p>
                    </div>
                </div>
                <div class="contact-card-part">
                    <div class="contact-card-part-1">
                        <img src="./assets/images/icon/pin.png" alt="" srcset="">
                        <h6>Address info</h6>
                        <p>Plot No. 01 Ground floor Zarina Manzil near Jain Mandir Mahim west Mumbai 400016 Maharashtra</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-form-main">
        <div class="col-sm-6 contact-img">
            <img src="./assets/images/contact-bg.jpg" alt="" srcset="">
        </div>

        <div class="col-sm-6 contact-form ">
            <h5>contact form</h5>
            <h3 class="get-in-touch">Get In Touch</h3>
            <div id="contactForm">
                <div class="col-sm-6 contact-form-1 row">
                    <div class="form-field-col-lg-6">
                        <input id="name" class="input-text" type="text" name="">
                        <label for="name" class="label">name</label>
                    </div>
                    <div class="form-field-col-lg-6">
                        <input id="email" class="input-text" type="text" name="">
                        <label for="name" class="label">email</label>
                    </div>
                    <div class="form-field-col-lg-6">
                        <input id="info" class="input-text" type="text" name="">
                        <label for="name" class="label">info</label>
                    </div>
                    <div class="form-field-col-lg-6">
                        <input id="contact" class="input-text" type="text" name="">
                        <label for="name" class="label">contact no</label>
                    </div>
                    <div class="form-field-col-lg-12">
                        <input class="submit-btn" id="submitContact" type="submit" value="submit" name="">

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>










<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>

<script type="text/javascript">
    (function() {
        emailjs.init("UcS_JWnUzSn4rrGxe");
    })();


    document.addEventListener('DOMContentLoaded', () => {

        document.getElementById('submitContact').addEventListener('click', () => {
            console.log('submit is running')
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const info = document.getElementById('info').value;
            const contact = document.getElementById('contact').value;

            var templateParams = {
                to_name: "cgc",
                from_name: name,
                from_email: email,
                message: info,
                from_contact: contact
            };

            emailjs.send('service_yzzk0ug', 'template_wtjc3xr', templateParams)
                .then(function(response) {
                    if (response.text == 'OK') {
                        alert("form submitted successfully")
                    }
                }, function(error) {
                    console.log('FAILED...', error);
                });
        })

    })
</script>


<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<?php include "footer.php" ?>