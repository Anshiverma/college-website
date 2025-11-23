<?php include 'header.php'; ?>

session_start();

<!-- Hero Section -->
<div class="hero-contact">
    <h1>Admissions Open</h1>
    <p class="tagline">Apply Now for 2025-26</p>
</div>

<!-- Admission Info Section -->
<div class="container contact">

    <?php
    // Show success message if set
    if(isset($_SESSION['success_message'])){
        echo '<p class="success-message">'.$_SESSION['success_message'].'</p>';
        unset($_SESSION['success_message']);
    }
    ?>

    <h2 class="admission-heading">Eligibility Criteria</h2>
    <p><strong>Undergraduate Programs:</strong> 12th pass with minimum 50% marks.</p>
    <p><strong>Postgraduate Programs:</strong> Bachelor's degree in relevant field.</p>

    <h2 class="admission-heading">Admission Process</h2>
    <ol>
        <li>Fill the application form below.</li>
        <li>Submit required documents (mark sheets, certificates).</li>
        <li>Complete fee payment to confirm admission.</li>
    </ol>

    <!-- Admission Form -->
    <div class="contact-form">
        <form action="submit_admission.php" method="POST">
            <label>Name</label>
            <input type="text" name="name" placeholder="Your Name" required>

            <label>Email</label>
            <input type="email" name="email" placeholder="Your Email" required>

            <label>Contact No.</label>
            <input type="text" name="phone" placeholder="Your Phone" required>

            <label>Course Applying For</label>
            <select name="course" required>
                <option value="">Select Course</option>
                <option value="B.Com">B.Com</option>
                <option value="BSc IT">BSc IT</option>
                <option value="BMS">BMS</option>
                <option value="M.Com">M.Com</option>
            </select>

            <button type="submit">Submit Application</button>
        </form>
    </div>

    <h2 class="admission-heading">Important Dates</h2>
    <ul>
        <li>Admissions Start: 1st August 2025</li>
        <li>Last Date to Apply: 30th September 2025</li>
    </ul>
</div>

<?php include 'footer.php'; ?>

