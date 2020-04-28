<?php
    date_default_timezone_set('Europe/Bucharest');
    include 'conn.inc.php';
    include 'comment.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c9d4d08321.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="style.css">
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
                <a href="about.html">About</a>
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
                <a class="active" href="about.html">About</a>
            </li>
            <li>
                <div id="search-icon">
                  
                </div>
            </li>
        </ul>
    </nav>
    <main>
        <h2 class="page-heading">About</h2> 
        <div id="post-container">
            <section id="blogpost">
                <div class="card">
                    <div class="card-image">
                        <img src="imagines/10.jpg" alt="Card Image">
                    </div>
                    <div class="card-description">
                        <h3>Conclusion</h3>
                        <p>Traditional foods played a major role in traditions of British culture, for thousands of years including foods that have been consumed locally and regionally for an extended time period. Preparation methods of traditional foods are part of the folklore of British.</p>
                        <p>Traditional food is a food with a specific feature or features which distinguish it clearly from other similar products of the same category in terms of the use of “traditional ingredients” or “traditional composition” or “traditional type of production and /or processing method”.</p>
                        <p>Because of its importance in everyday life, food has been always an unlimited source of inspiration for Art in all its aspects. As a famous chef said: “Sometimes, particular aspects of cooking develop extraordinarily high levels of creative expression and can be compared to other artistic disciplines. In those cases I do regard cooking as an art form.” (Elena Arzak) </p>
                        <p>So what is British cuisine? Roast Beef and Yorkshire Pudding, Steak and Kidney Pie, Trifle – these are the dishes that everyone associates with Britain. But like the country of Britain which is constantly changing and evolving, so is British food, and whilst today these dishes are ‘traditionally British’, in the future perhaps dishes such as the British Curry will join them!</p>

                    </div>
                </div>
                <div id="comments-section">
                <?php
                    echo "<form method='POST' action='".setComments($conn)."'>
                        <input type='hidden' name='uid' value='Anonymous'>
                        <input type = 'hidden' name = 'date' value='".('Y-m-d H:i:s')."'>
                        <textarea name='message'></textarea><br>
                        <button type='submit' name='commentSubmit'>Comment</button>
                    </form>";
                    getComment($conn)
                    ?>
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
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="introduction.html">Introduction</a>
                        </li>
                        <li>
                            <a href="food.html">4 Odd Foods</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
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