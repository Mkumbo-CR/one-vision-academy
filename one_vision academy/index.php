<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>One Vision Academy | Home</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include "includes/navbar.php"; ?>

<section class="slider" id="homeSlider">
    <div class="slide active">
        <img src="images/academy-campus.jpg" alt="One Vision Academy campus">
        <div class="slide-overlay">
            <span>ONE VISION ACADEMY</span>
            <h1>Learn. Grow. Lead.</h1>
            <p>Building confident learners through quality education, technology and innovation.</p>
            <div class="hero-buttons">
                <a class="btn primary" href="admissions.php">Apply Now</a>
                <a class="btn glass" href="courses.php">Explore Courses</a>
            </div>
        </div>
    </div>
    <div class="slide">
        <img src="images/classroom-students.jpg" alt="Students in classroom">
        <div class="slide-overlay">
            <span>SMART LEARNING</span>
            <h1>Education With A Vision</h1>
            <p>Practical learning, supportive teachers and a modern academic environment.</p>
            <a class="btn primary" href="about.php">Discover Us</a>
        </div>
    </div>
    <div class="slide">
        <img src="images/computer-lab.jpg" alt="Computer laboratory">
        <div class="slide-overlay">
            <span>TECHNOLOGY</span>
            <h1>Skills For The Digital Future</h1>
            <p>Develop digital, programming and computer skills through practical learning.</p>
            <a class="btn primary" href="courses.php">View Programs</a>
        </div>
    </div>
    <button class="slider-arrow prev" onclick="changeSlide(-1)">‹</button>
    <button class="slider-arrow next" onclick="changeSlide(1)">›</button>
    <div class="dots">
        <button onclick="goToSlide(0)" class="dot active"></button>
        <button onclick="goToSlide(1)" class="dot"></button>
        <button onclick="goToSlide(2)" class="dot"></button>
    </div>
</section>

<section class="stats">
    <div><strong>500+</strong><span>Students</span></div>
    <div><strong>30+</strong><span>Teachers</span></div>
    <div><strong>15+</strong><span>Programs</span></div>
    <div><strong>10+</strong><span>Years Vision</span></div>
</section>

<section class="section">
    <div class="section-heading">
        <span>WELCOME</span>
        <h2>Education That Prepares You For Tomorrow</h2>
        <p>One Vision Academy combines academic learning, practical skills and technology.</p>
    </div>
    <div class="about-grid">
        <div class="image-frame"><img src="images/students-learning.jpg" alt="Students learning"></div>
        <div class="content-box">
            <h2>Why One Vision?</h2>
            <p>Our learning environment encourages curiosity, discipline, creativity and responsible leadership.</p>
            <div class="checks">
                <p>✓ Modern learning environment</p>
                <p>✓ Technology-supported education</p>
                <p>✓ Practical learning activities</p>
                <p>✓ Supportive teachers and mentorship</p>
            </div>
            <a class="btn primary" href="about.php">Read More</a>
        </div>
    </div>
</section>

<section class="section light">
    <div class="section-heading">
        <span>OUR PROGRAMS</span>
        <h2>Popular Courses</h2>
    </div>
    <div class="card-grid">
        <article class="course-card">
            <img src="images/information-technology.jpg" alt="Information Technology">
            <div><span>TECHNOLOGY</span><h3>Information Technology</h3><p>Programming, databases, web development and networking.</p><a href="courses.php">Explore →</a></div>
        </article>
        <article class="course-card">
            <img src="images/business-analytics.jpg" alt="Business Analytics">
            <div><span>BUSINESS</span><h3>Business Analytics</h3><p>Data analysis, reporting and business intelligence.</p><a href="courses.php">Explore →</a></div>
        </article>
        <article class="course-card">
            <img src="images/computer-studies.jpg" alt="Computer Studies">
            <div><span>COMPUTING</span><h3>Computer Studies</h3><p>Computer fundamentals and practical digital skills.</p><a href="courses.php">Explore →</a></div>
        </article>
    </div>
</section>

<section class="section">
    <div class="section-heading">
        <span>ACADEMY LIFE</span>
        <h2>Inside One Vision</h2>
    </div>
    <div class="photo-grid">
        <img src="images/academy-campus.jpg" alt="Campus">
        <img src="images/classroom-students.jpg" alt="Classroom">
        <img src="images/students-learning.jpg" alt="Students">
        <img src="images/teacher-teaching.jpg" alt="Teacher">
        <img src="images/computer-lab.jpg" alt="Computer lab">
        <img src="images/business-analytics.jpg" alt="Business learning">
    </div>
    <div class="center"><a class="btn primary" href="gallery.php">Open Full Gallery</a></div>
</section>

<section class="cta">
    <div><h2>Start Your Journey With One Vision</h2><p>Admissions are open for new learners.</p></div>
    <a href="admissions.php" class="btn white">Apply Now</a>
</section>

<?php include "includes/footer.php"; ?>
</body>
</html>