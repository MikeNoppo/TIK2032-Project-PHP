
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michael Manoppo</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="icon" type="image/x-icon" href="Gambar/cute2.png">

</head>
<body>
    <header class="header">
        <a href= "index.html" class="logo"><span>Michael </span>Manoppo</a>
        <nav class="navbar" id="navbar">
            <a href="#A" class="active">home</a>
            <a href="#A1">About</a>
            <a href="#A2">Blog</a>
            <a href="#A3">Gallery</a>
            <a href="#">Project</a>
        </nav>
        <a href="#A5" class="contact">Contact Me</a>
    </header>  

    <section id="A" class="home">
        <div class="home-content">
            <h3>Hi</h3>

            <h1>I'm <span>Michael<br></span>a Informatics Student</h1>

            <p>Hey there, I'm Mikel – not your average perfectionist, but hey, I'll code my way to perfection! 😉</p>

            <div class="btn-box">
                <button class="btn-1" id="certificateBtn" href="#p6">certificate</button>
            </div>
        </div>
        <div class="img-box">
            <img src="Gambar/selfie-kacamata.webp"alt="profile pict">
        </div>
    </section>
    
    <section id="A1" class="about">
        <div class="about-img">
            <img src="Gambar/Profil home.jpg" alt="about me">
        </div>
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Hello <span>World!</span></h3>
            <p>I'm in my fourth semester studying informatics engineering at Sam Ratulangi University.
            I'm just starting to learn about coding, and I really love technology, especially programming.
            I'm also a big fan of gaming, especially PUBG.</p>
        </div>
    </section>

    <section id="A2" class="blog">
        <div class="blog-content">
            <h2>Latest Blog Posts</h2>
            <?php
            include 'db_connection.php';

            $sql = "SELECT * FROM articles";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<article>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p>" . $row["content"] . "</p>";
                    echo "<a href='" . $row["link"] . "' target='_blank'>Read More</a>";
                    echo "</article>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </div>
    </section> 
    
    <section id="A3" class="gallery">
        <h1>Gallery</h1>
        <div class="container">
            <div class="filter-buttons">
                <button id="p1" class="active">Show all</button>
                <button id="p2">Azariah</button>
                <button id="p3">Malefincent</button>
                <button id="p4">Michael</button>
                <button id="p5">Unity</button>
                <button id="p6">Certificate</button>
                
            </div>
    
            <div class="filterable-photo">
                <?php include 'retrieve_photos.php'; ?> 
            </div>
        </div>
    </section>
    

    <footer id="A5" class="footer">
        <div class="social">
            <a href="https://web.facebook.com/michael.manoppo.1" target="_blank"><img src="Gambar/facebook.png" alt="Facebook"></a>
            <a href="https://github.com/MikeNoppo" target="_blank"><img src="Gambar/GitHub.png" alt="GitHub"></a>
            <a href="https://www.instagram.com/mikelnoppo/" target="_blank"><img src="Gambar/Instagram_icon.png" alt="Instagram"></a>
        </div>

        <ul class="list">
            <li>
                <a href="#A1">About me</a>
            </li>
            <li>
                <a href="https://wa.me/6281342938366" target="_blank">FAQ</a>
            </li>
            <li>
                <a href="">Don't click</a>
            </li>
        </ul>

        <p class="copyright">&copy; Michael Manoppo | All rights reserved</p>
    </footer>
</body>
</html>

