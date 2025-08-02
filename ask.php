<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask a Medico</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navs/header-footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<style>
    /* Ask a Medico Page */
.ask-page {
    padding: 40px 0;
}

.ask-header {
    text-align: center;
    padding: 20px 0;
    background: #0077b6;
    color: white;
}

.ask-header h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
}

.ask-header p {
    font-size: 1.2em;
    margin-bottom: 10px;
}

.ask-form {
    padding: 40px 20px;
    background: #f9f9f9;
}

.form {
    max-width: 600px;
    margin: auto;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1em;
}

.form-group textarea {
    resize: vertical;
}

.form-group.checkbox {
    display: flex;
    align-items: center;
}

.form-group.checkbox input {
    margin-right: 10px;
}

.ask-sidebar {
    padding: 20px;
    background: white;
    text-align: center;
}

.ask-sidebar h2 {
    color: #0077b6;
    margin-bottom: 20px;
}

.ask-sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.ask-sidebar ul li {
    margin-bottom: 10px;
}

.ask-sidebar ul li a {
    text-decoration: none;
    color: #0077b6;
    font-weight: bold;
    transition: color 0.3s;
}

.ask-sidebar ul li a:hover {
    color: #005f73;
}

.ask-sidebar .disclaimer {
    margin-top: 20px;
    font-size: 0.9em;
    color: #555;
}
</style>
<body>
<?php include 'navs/header.php'; ?>

    <main class="ask-page">
        <section class="ask-header">
            <div class="container">
                <h1>Ask a Medico</h1>
                <p>Have a question about health, medicine, or Islam's view on it? Ask here!</p>
                <p>Submit your question below. Our team of medical and Islamic experts will review and respond via email or a future post on our blog or lecture section.</p>
            </div>
        </section>

        <section class="ask-form">
            <div class="container">
                <form action="submit-question.php" method="post" class="form">
                    <div class="form-group">
                        <label for="name">🧑 Name (optional)</label>
                        <input type="text" id="name" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">📧 Email (optional)</label>
                        <input type="email" id="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label for="contact">📞 Contact Number (optional)</label>
                        <input type="tel" id="contact" name="contact" placeholder="Your Contact Number">
                    </div>
                    <div class="form-group">
                        <label for="category">🗂️ Category</label>
                        <select id="category" name="category" required>
                            <option value="Health">Health</option>
                            <option value="Mental Health">Mental Health</option>
                            <option value="Islamic View">Islamic View</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="question">📝 Question</label>
                        <textarea id="question" name="question" rows="5" placeholder="Type your question here..." required></textarea>
                    </div>
                    <div class="form-group checkbox">
                        <input type="checkbox" id="public" name="public">
                        <label for="public">Allow my question to be answered publicly (anonymously)</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>

        <section class="ask-sidebar">
            <div class="container">
                <h2>Helpful Links</h2>
                <ul>
                    <li><a href="blog.php">🔗 Recent Q&A or Blog Posts</a></li>
                    <li><a href="tips.php">💡 Tips for Asking Better Questions</a></li>
                </ul>
                <p class="disclaimer">📜 Disclaimer: This is for educational purposes and not a substitute for a doctor’s consultation.</p>
            </div>
        </section>
    </main>

    <?php include 'navs/footer.php'; ?>
</body>
</html>
