<!DOCTYPE html>
<html>

<head>
    <title>Volunteers List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.typekit.net/omo7nhe.css">
    <script src="https://kit.fontawesome.com/d01e7b9f50.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/main.css" />
</head>

<body>
    <h1 hidden>Volunteers Updated Detail</h1>
    <nav id="navbar">
        <div id="navbar__logo">
            <a href="/"><img src="/images/logo.svg" alt="Play Fair Logo"></a>
        </div>
        <ul id="navbar__social">
            <li class="navbar__social__item"><a href="/adminlogin"><img src="/images/user_login.png"
                        alt="User Login"></a></li>
            <li class="navbar__social__item"><a href=""><img src="/images/facebook_logo.svg"
                        alt="Facebook Logo"></a></li>
            <li class="navbar__social__item"><a href=""><img src="/images/linkedin_logo.svg"
                        alt="Linkedin Logo"></a></li>
            <li class="navbar__social__item"><a href=""><img src="/images/instagram_logo.svg"
                        alt="Instagram Logo"></a></li>
            <li class="navbar__social__item"><a href=""><img src="/images/twitter_logo.svg"
                        alt="Twitter Logo"></a></li>
            <li class="navbar__social__item"><a href=""><img src="/images/youtube_logo.svg"
                        alt="Youtube Logo"></a></li>
        </ul>
    </nav>

    <div class="singlevolunteer">
      
    <div class="mascot-singlepage">
      <img src="/images/mascot_yoga_1.png" alt="mascots">
    </div>  

    <div class="user_detail_info">
        <div class="user_info">
          <h3>VOLUNTEER DETAILS </h3>
            <p class="label"><span>First Name:</span> {{ $volunteer->fname }}</p><br>
            <p class="label"><span>Last Name:</span> {{ $volunteer->lname }}</p><br>
            <p class="label"><span>Email:</span> {{ $volunteer->email }}</p><br>
            <p class="label"><span>Phone:</span> {{ $volunteer->phone }}</p><br>
            <p class="label"><span>Status Id:</span> {{ $volunteer->status_id }}</p><br>
        </div>
    </div>

    </div>


    <footer>
        <section id="footer">
            <nav id="footer__navbar">
                <div id="footer__navbar__logo">
                    <a href="/"><img src="/images/logo.svg" alt="Footer Play Fair Logo"></a>
                </div>

                <ul id="footer__social">
                    <li class="footer__social__item"><a href=""><img src="/images/footer_facebook_logo.svg"></a>
                    </li>
                    <li class="footer__social__item"><a href=""><img src="/images/footer_linkedin_logo.svg"></a>
                    </li>
                    <li class="footer__social__item"><a href=""><img src="/images/footer_instagram_logo.svg"></a>
                    </li>
                    <li class="footer__social__item"><a href=""><img src="/images/footer_twitter_logo.svg"></a>
                    </li>
                    <li class="footer__social__item"><a href=""><img src="/images/footer_youtube_logo.svg"></a>
                    </li>
                </ul>
            </nav>

            <div id="copyright">
                <h2>COPYRIGHT 2012-2023 TERMSFEED. ALL RIGHTS RESERVED.</h2>
            </div>


            <div id="copyright__down">
                <h2>COPYRIGHT 2012-2023 TERMSFEED. ALL RIGHTS RESERVED.</h2>
            </div>

        </section>

    </footer>

</body>

</html>
