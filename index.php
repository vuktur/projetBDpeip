<?php
session_start();
if(isset($_POST['submit-nl'])){
    $_SESSION['email']=strtolower($_POST['email-nl']);
    header('Location:#newsletter');
    exit;
};
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    if(!empty($email)){
        $headers="Content-type: text/html; charset=utf-8"."\r\n".
        "Return-Path: root@localhost.com"."\r\n".
        "Reply-To: root@localhost.com"."\r\n".
        "Errors-To: root@localhost.com"."\r\n".
        "To: {$email}"."\r\n".
        "From: root@localhost.com";
        mail($email,"Hello","hello",$headers);
        // add email to database
        echo("<script>alert('a verification email have been sent to $email.');</script>");
    }
    // else{
    //     echo("<script>alert('empty');</script>");
    // };
    unset($_SESSION['email']);
}
?>

<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='utf-8'/>
        <link rel='stylesheet' href='style.css'/>
        <title>Ptitips</title>
    </head>
    <body>
        <div class="main-wrap">
            <header class="nav">
                <nav class="nav__list nav__list--left">
                    <a class="nav__list-item nav__list-item--logo" href="index.html">
                        <img class="logo" src="logo.png" height="70" alt="Ptitips"/>
                    </a>
                    <a class="nav__list-item nav__list-item--text" href="test.html">NEWS</a>
                    <a class="nav__list-item nav__list-item--text" href="test.html">TIPS</a>
                    <a class="nav__list-item nav__list-item--text" href="test.html">ABOUT&nbsp;US</a>
                </nav>
                <nav class="nav__list nav__list--right">
                    <a class ="nav__list-item nav__list-item--logo" href="test.html"><img src="userw.png" alt="Connexion"/></a>
                    <form class="nav__list-item nav__list-item--searchbar" action="#" method="GET" name="searchbar">
                        <input type="text" id="searchbar" name="search" placeholder="Search"/>
                    </form>
                </nav>
            </header>
            <div class="container">
                <div class="content-item">
                    <h1>php</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. <br/>Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. </p>
                </div>
                <div class="content-item">
                    <button class="button--big" onclick="window.location.href='test.html';">C'est Parti !</button>
                </div>
                <div class="content-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. <br/>Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. </p>
                </div>
                <div class="content-item card-wrap">
                    <a href="test.html"><div class="card">
                        <div class="card__img"><img src="8a9.jpg" alt="harold"/></div>
                        <div class="card__text"><h1>10 astuces joie et bonne humeur</h1><p>Comment être heureux et éviter le suicide</p></div>
                    </div></a>
                    <a href="test.html"><div class="card">
                        <div class=card__img><img src="20501.jpg" alt="healthy dish image"/></div>
                        <div class="card__text"><h1>5 astuces pâté</h1><p>Existe aussi pour les végans !</p></div>
                    </div></a>
                    <a href="test.html"><div class="card">
                        <div class=card__img><img src="SDFGH.jpg" alt="clebs"/></div>
                        <div class="card__text"><p>Plus de 990255734 astuces sur les teckels</p></div>
                    </div></a>
                    <a href="test.html"><div class="card">
                        <div class=card__img><img src="IMG_0935.JPG" alt="vendre"/></div>
                        <div class="card__text"><p>Vendre ses talents en situation de retrutement</p></div>
                    </div></a>
                    <a href="test.html"><div class="card">
                        <div class=card__img><img src="IMG_1281.JPG" alt="exam"/></div>
                        <div class="card__text"><p>Réussir ses révisions</p></div>
                    </div></a>
                    <a href="test.html"><div class="card">
                        <div class=card__img><img src="IMG_0838.jpg" alt="clodo"/></div>
                        <div class="card__text"><h1>Gérer ses finances</h1><p>Ou comment ne pas finir à la rue</p></div>
                    </div></a>
                </div>
                <div class="content-item">
                    <p>Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. <br/>Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. <br/>Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. </p>
                </div>
            </div>
            <div class="newsletter-wrap">
                <form class="newsletter" id="newsletter" action="#newsletter" id="nl" method="POST" target="_self">
                    <h2>Newsletter</h2>
                    <p>Si tu veux t'inscrire à notre newsletter, vas-y ! Promis on va pas spammer...</p>
                    <div class="newsletter__email">
                        <input id="email-nl__field" type="email" name="email-nl" placeholder="Email" required/>
                        <!-- pattern="(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*)@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)" -->
                        <button id="email-nl__submit" type="submit" name="submit-nl">Go !</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>