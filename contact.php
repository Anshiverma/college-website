<?php include("includes/header.php"); ?>

<!-- Contact Page Background -->
<div class="hero-contact">
    <h1>Contact Us</h1>
    <p class="tagline">We’d love to hear from you!</p>
</div>

<div class="container contact">
    <p>If you have any questions, please don’t hesitate to send us a message. We reply within 24 hours!</p>

    <div class="contact-box">
        <!-- Left side: Map + Address -->
        <div class="contact-info card">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.751651167782!2d72.8569!3d19.0176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce7dbf48b0ff%3A0xf9d186ebaa3242b4!2sS.I.W.S.%20College!5e0!3m2!1sen!2sin!4v1692800000000"
                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>

            <h3>Address</h3>
            <p>S.I.W.S. College,<br>
            Plot No. 337, Sewree Wadala Estate,<br>
            Major R. Parameshwaran Marg,<br>
            Mumbai – 400 031</p>

            <h3>Contact Us</h3>
            <p>📞 022 2418 0390</p>
            <p>✉️ siws@siwscollege.edu.in</p>
        </div>

        <!-- Right side: Contact form -->
        <div class="contact-form card">
            <form action="submit_contact.php" method="POST">
                <label>Name</label>
                <input type="text" name="name" placeholder="Your Name" required>

                <label>Email</label>
                <input type="email" name="email" placeholder="Your Email" required>

                <label>Contact No.</label>
                <input type="text" name="phone" placeholder="Your Phone">

                <label>Comments</label>
                <textarea name="message" placeholder="Suggestions, if any"></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>
