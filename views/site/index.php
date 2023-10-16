<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&display=swap" rel="stylesheet">


    <title>Document</title>
</head>
<body>
    <header class="header">


        <img src="./img/logo.svg" alt="logo">
        <button class="header__burger-button">

            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>

        </button>
        <nav class="header__main-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Episodes</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>



            </ul>
        </nav>
    </header>
    <main class="wrapper">
        <section class="mainscreen">
            <img class="mainscreen-lines" src="./img/mainscreen-svg.svg" alt="">

            <img src="./img/man-with-headphones.jpg" alt="man-with-headphones">
            <div class="mainscreen__item">
                <span style="color: #0dcaf0">Посетителей: <?php echo $visitors ?></span>
                <h2>
                    Take your <br> podcast to the <br>
                    <span class="underline">
                        next
                        <svg fill="white" xmlns="http://www.w3.org/2000/svg" width="160" height="104" viewBox="0 0 160 104">
                            <g clip-path="url(#clip0_2_71)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M161.952 88.5318C129.845 82.7756 97.196 85.9595 65.0087 84.923C43.7248 84.2296 22.4395 82.5594 1.17106 82.0002C0.533394 81.9853 0.00896029 82.9695 0.000103908 84.2072C-0.00836745 85.4449 0.502216 86.459 1.13949 86.4739C22.4057 87.0331 43.6886 88.7034 64.9702 89.3968C97.0997 90.4332 129.687 87.2419 161.736 92.9906C162.371 93.1025 162.934 92.2003 162.995 90.9701C163.053 89.7398 162.583 88.6511 161.952 88.5318Z" fill="#118DA8"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_71">
                                    <rect width="160" height="104" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                    <span class="bold">level</span>
                </h2>
                <div class="mainscreen__socials">
                    Listen on
                    <ul>
                        <li><a href=""><img src="./img/socials/spotify.svg" alt=""></a></li>
                        <li><a href=""><img src="./img/socials/social1.svg" alt=""></a></li>
                        <li><a href=""><img src="./img/socials/social2.svg" alt=""></a></li>
                        <li><a href=""><img src="./img/socials/social3.svg" alt=""></a></li>
                        <li><a href=""><img src="./img/socials/social4.svg" alt=""></a></li>

                    </ul>
                </div>

            </div>
        </section>
        <section class="audio-info">

            <h2>Latest episodes</h2>

            <button class="button">
                View all episodes

            </button>

            <div class="audio-info__item">
                <img src="./img/audio-info-1.jpg" alt="">
                <div class="audio-info__text">
                    <h4 class="audio-info__name">
                    Gear
                    </h4>
                        <span class="audio-info__episode">
                        Episode 3
                    </span>
                    <h2>Should you get outboard audio gear?</h2>

                    <p>Is hardware really worth it when it comes to podcasting? The answer is...it depends. Here’s our reasons on why you might want to consider picking something up.</p>

                    <button class="button">
                        View Episode Details

                    </button>
                </div>
                
            </div>

        </section>

    </main>
    <script>

           function visitors(){
               const token = '1111'

               if(localStorage.getItem('token') === token) {
                   return
               } else{
                   localStorage.setItem('token', token)
                   fetch('/api/visitors-increment')
               }
               //fetch('/api/visitors-increment')
           }
           visitors()

    </script>
    <script src="./js/script.js"></script>
</body>
</html>