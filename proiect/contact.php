<?php
include 'conn.contact.php';
include 'contactHandler.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c9d4d08321.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contactStyle.css">
    <title>Odd british foods</title>
</head>
<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="main.html">Home</a>
            </li>
            <li>
                <a href="introduction.html">Introduction</a>
            </li>
            <li>
                <a href="food.html">4 ODD FOODS</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
        </ul>
    </div>
    <nav>
        <div id="logo-img">
            <a href="main.html">
                <img src="imagines/8.png" alt="Food Logo">
            </a>

        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="main.html">Home</a>
            </li>
            <li>
                <a href="introduction.html">Introduction</a>
            </li>
            <li>
                <a href="food.html">4 ODD FOODS</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
                <div id="search-icon">
                 
                </div>
            </li>
        </ul>
    </nav>
    <main>
        <h2 class="page-heading">Contact</h2> 
        <div id="post-container">
            <section id="blogpost">
                <div class="card">
                    <div class="card-image">
                        <img src="imagines/13.jpg" alt="Card Image">
                    </div>
                    <div class="card-description">
                        <h1>Contact me!</h1>
                        <h2>always here to answer your questions!</h2>
                    </div>
                    <div class="contact-form">
                    <?php
                        echo "<form id='contact-form' method='POST' action = ''".setContact($contact)."''>
                        <input  type='text' name='name'  class='form-control' placeholder='Your Name' required>
                        <br>
                        <input type='email' name='email'  class='form-control' placeholder='Your Email' required>
                        <br>
                        <textarea name='message' class='form-control' placeholder='Message' row='4' required></textarea><br>
                        <input type='submit' name='submit' class='form-control submit' value='SEND MESSAGE'>
                    </form>";
                        ?>
                    </div>
                </div>
            </section>
            <aside id="sidebar">
                <p>“One cannot think well, love well, sleep well, if one has not dined well.”
                                                             ― Virginia Woolf, A Room of One's Own</p>
                <p>“There is no love sincerer than the love of food.”
                                                             ― George Bernard Shaw, Man and Superman</p>
                <p>“Let food be thy medicine and medicine be thy food.”
                                                             ― Hippocrates</p>
                <p>“We must have a pie. Stress cannot exist in the presence of a pie.”
                                                             ― David Mamet, Boston Marriage</p>
                <p>“Anything is good if it’s made of chocolate.” – Jo Brand</p>
                <p>“Tell me what you eat, and I will tell you what you are.” – Anthelme Brillat-Savarin</p>
                <p>“Food is the most primitive form of comfort.” – Sheila Graham</p>
                <p>“Good food ends with good talk.” – Geoffrey Neighor</p>
                <p>“Eat breakfast like a king, lunch like a prince, and dinner like a pauper.” – Adelle Davis</p>
                <p>“Ice-cream is exquisite. What a pity it isn’t illegal.” – Voltaire</p>
                <p>“Life is uncertain. Eat dessert first.” – Ernestine Ulmer</p>
                <p>“First we eat, then we do everything else.” – M.F.K. Fisher</p>
            </aside>
        </div>
        <footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="main.html">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="introduction.html">Introduction</a>
                        </li>
                        <li>
                            <a href="food.html">4 Odd Foods</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </p>
            </div>

            <div id="right-footer">
                <h3>Follow me on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/teodora.brotea">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/teodora.brotea/?hl=ro">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/teodora-brotea-6b36981a0/">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>This website is developed by Teodora Brotea</p>
            </div>
        </footer>

    </main>
    <script src="index.js"></script>
</body>
</html>