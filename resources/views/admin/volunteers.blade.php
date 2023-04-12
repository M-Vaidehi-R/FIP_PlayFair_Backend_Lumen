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
    <h1 hidden>Volunteers List</h1>
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

    <div class="volunteer-list">

        <div class="flex_row">
            <h2 class="volunteer_title">VOLUNTEERS</h2>

            <div class="mascot_volunteer">
                <img src="/images/mascot_yoga_2.png">
            </div>
        </div>

        <table class="my-table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Status</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($volunteers as $volunteer)
                    <tr>
                        <td>{{ $volunteer->fname }}</td>
                        <td>{{ $volunteer->status_name }}</td>
                        <td>
                            <button class="volunteer-list-button"><a href="/admin/volunteers/{{ $volunteer->id }}/edit">EDIT DETAILS</a></button>

                            <form method="POST" action="/admin/volunteers/{{ $volunteer->id }}">
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="volunteer-list-button" type="submit">DELETE VOLUNTEER</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

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
