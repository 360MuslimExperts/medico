<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medico 360 - Learn, Heal, Reflect</title>
    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Link your new CSS -->
    <link rel="stylesheet" href="styles.css">
    <!-- Link Header/Footer CSS if it contains styles not covered by styles.css -->
    <link rel="stylesheet" href="navs/header-footer.css">
    <!-- Optional: Add Font Awesome for icons if you replace emojis later -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> -->
</head>
<body>
    <?php include 'navs/header.php'; ?>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <h1>Learn, Heal, and Reflect with Medico 360</h1>
            <p>Integrating medical knowledge with Islamic values — explore articles, lectures, books, and resources tailored for students, professionals, and the curious mind.</p>
            <div class="cta-buttons">
                <a href="blog.php" class="btn btn-primary">Explore Blog</a>
                <a href="notes.php" class="btn btn-secondary">Get Free Notes</a>
                <a href="lectures.php" class="btn btn-primary">Watch Lectures</a>
            </div>
        </div>
    </section>

    <!-- About Summary -->
    <section id="about" class="about">
        <div class="container">
            <h2>About Medico 360</h2>
            <p>Medico 360, an initiative of 360 Muslim Experts, is dedicated to bridging the gap between medical science and the Islamic perspective. We provide valuable resources for students, healthcare professionals, and anyone seeking knowledge at the intersection of health and faith.</p>
            <a href="about.php" class="btn btn-secondary">Learn More About Us</a>
        </div>
    </section>

    <!-- Featured Content Blocks -->
    <section id="featured-content" class="featured-content">
        <div class="container">
            <h2>Featured Content</h2>
            <div class="content-grid">
                <!-- Card 1: Blog -->
                <div class="content-card">
                    <img src="images/blog-thumbnail.jpg" alt="Abstract medical graphic"> <!-- Use descriptive alt text -->
                    <h3>📝 Latest Blog Post</h3>
                    <p>Discover insights on balancing modern medicine with timeless Islamic principles in our newest article.</p>
                    <a href="blog.php" class="btn btn-primary">Read More</a>
                </div>
                <!-- Card 2: Lecture -->
                <div class="content-card">
                     <img src="images/lecture-thumbnail.jpg" alt="Person speaking at a podium"> <!-- Use descriptive alt text -->
                    <h3>🎧 Featured Lecture</h3>
                    <p>Watch our featured lecture series covering critical topics in medical ethics from an Islamic viewpoint.</p>
                    <a href="lectures.php" class="btn btn-secondary">Watch Now</a>
                </div>
                <!-- Card 3: Book -->
                <div class="content-card">
                    <img src="images/book-thumbnail.jpg" alt="Cover of a featured book"> <!-- Use descriptive alt text -->
                    <h3>📚 Book of the Month</h3>
                    <p>Explore this month's recommended reading for deeper understanding and reflection.</p>
                    <a href="bookstore.php" class="btn btn-primary">View Book</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Highlights -->
    <section id="navigation-highlights" class="navigation-highlights">
        <div class="container">
            <h2>Explore Our Resources</h2>
            <div class="nav-links">
                <a href="materials.php" class="nav-link">🔬 Learning Materials</a>
                <a href="bookstore.php" class="nav-link">📖 Bookstore</a>
                <a href="blog.php" class="nav-link">🗂️ Articles / Blog</a>
                <a href="ask.php" class="nav-link">❓ Ask a Medico</a>
                <a href="about.php" class="nav-link">👥 About Us</a>
                <a href="lectures.php" class="nav-link">🎬 Lectures</a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2>What Our Community Says</h2>
            <div class="testimonials-grid">
                <blockquote>“Medico 360 is an invaluable resource. Finally, a platform that respects both my profession and my faith.” <span>- Dr. Aisha K.</span></blockquote>
                <blockquote>“The lectures are insightful and the articles are well-researched. A unique platform for continuous learning and spiritual growth.” <span>- Omar S. (Medical Student)</span></blockquote>
                <blockquote>“I appreciate the balanced perspective Medico 360 offers. It's the perfect blend of essential medical knowledge and Islamic values.” <span>- Fatima Z.</span></blockquote>
            </div>
        </div>
    </section>

    <?php include 'navs/footer.php'; ?>

    <!-- Optional: Add JS file link here if needed later -->
    <!-- <script src="script.js"></script> -->
</body>
</html>
