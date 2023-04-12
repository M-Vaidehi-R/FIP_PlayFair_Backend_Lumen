<!DOCTYPE html>
<html>

<head>
    <title>Volunteer Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.typekit.net/omo7nhe.css">
    <script src="https://kit.fontawesome.com/d01e7b9f50.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/main.css" />
</head>

<body>
    <h1 hidden>Volunteer Details</h1>
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
<div class="update">
<div class="update_form">
    <form method="POST" action="/admin/volunteers/{{ $volunteer->id }}">
        <input type="hidden" name="_method" value="PUT">

        <div>
        <label for="fname">First Name</label>
        <input type="text" name="fname" value="{{ $volunteer->fname }}"><br>
        </div>

        <div>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" value="{{ $volunteer->lname }}"><br>
        </div>    

        <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $volunteer->email }}"><br>
        </div>

        <div>
        <label for="phone">Phone</label>
        <input type="tel" name="phone" value="{{ $volunteer->phone }}"><br>
        </div>

        <div>
        <label for="status">Status</label>
        <input type="text" name="status" value="{{ $volunteer->status_id }}"><br>
        </div>

        <div>
        <button type="submit" name="submit">Update Volunteer</button>
        </div>   
    </form>
</div>

<div class="mascot_tennis">
    <img src="/images/mascot_tennis.png" alt="mascot">
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
</body>
</html>


