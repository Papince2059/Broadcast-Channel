<html>
    <head>
        <link rel="stylesheet" href="css/index-page.css">
        <style>
            body {
                background-image: url('bg.jpeg');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                transition: background-image 0.5s ease;
            }
        </style>
    </head>
    <body>
    
        
        <section class="home">
            <header>
                <a href="#" class="logo">Fun Olympics </a>
                
                <ul>
                    <li><a href="index.php">Home</a></li>
                    
                    <li><a href="login.php">Login</a></li>
                   
                </ul>
            </header>
            <div class="content">
                <div class="textBox">
                    <h2>Here's What <br><span>you like</span></h2>
                    <p>
                        "Welcome to our sports broadcast platform, where passion meets precision! Experience
                         the thrill of your favorite sporting events from anywhere,
                         anytime. Join our vibrant community for live matches, engaging discussions, and real-time stats.
                         With user-friendly navigation and compatibility across devices, 
                         your sports journey starts here. Sign up now and dive into the excitement!"
                    </p>
                    <a href="#"> Get Started </a>
                </div>
                <div class="imgBox">
                    <img src="pics/About.png" alt="" class="sports">
                </div>
            </div>
            <ul class="thumb">
                <li><img src="pics/pic1.png" onclick="imgSlider('pics/pic1.png'); changeColor('#d0dcb3');"></li>
                <li><img src="pics/pic2.png" onclick="imgSlider('pics/pic2.png'); changeColor('#2236b4');"></li>
                <li><img src="pics/pic3.png" onclick="imgSlider('pics/pic3.png'); changeColor('#566a3b');"></li>
            </ul>
        </section>
    </body>
</html>

<script>
    function imgSlider(someThing){
        document.querySelector('.sports').src = someThing;
    }
    function changeColor(color)
    {
        const sec = document.querySelector('.home');
        sec.style.background = color;
    }
</script>