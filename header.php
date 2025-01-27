<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            header{
                display: flex;
                justify-content: center;
                width: 100%;
            }
            .hdcon{
                background: url('https://4kwallpapers.com/images/wallpapers/black-rocks-dark-3840x2160-13127.jpg');
                /* background-attachment: fixed;
                background-position: top;
                background-repeat: no-repeat;
                background-size: cover; */
                display: flex;
                align-items: center;
                position: fixed;
                padding: 20px 0;
                width: 100%;
                max-width: 1600px;
                box-shadow: 0 0px 10px black;
                transition: padding-bottom .4s;
                z-index: 100000;
            }
            .inhdcon{
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0 auto;
            }
            .inhdcon .hct{
                margin: 0 40px;
                color: white;
                font-size: 20px;
                cursor: pointer;
                transform: translateY(10px);
                transition: .5s;
            }
            .clipsimage{
                width: 50px;
                height: 50px;
                border-radius: 5px;
                display: flex;
            }
            .clipsimage img{
                width: 100%;
                height: 100%;
                border-radius: 50%;
                box-shadow: 0 0 5px 1px white;
                transition: 1s;
                cursor: pointer;
            }
            .clipsimage:hover img{
                box-shadow: 0 0 10px 2px white;
            }
            .cot{
                margin: 0 20px !important;
                font-size: 30px !important;
                transform: translateY(15px) !important;
            }
            .dropdown{
                max-height: 0;
                opacity: 1;
                position: absolute;
                overflow: hidden;
                z-index: 100;
                background: url('https://e1.pxfuel.com/desktop-wallpaper/65/5/desktop-wallpaper-dark-textured-backgrounds-design-patterns-website-psd-dark-textured-backgrounds-thumbnail.jpg');
                background-attachment: fixed;
                background-position: top;
                background-repeat: no-repeat;
                background-size: cover;
                transition: .7s;
                width: 250px;
                font-size: 15px;
                padding: 0px 5px;
                cursor: pointer;
                transform: translate(-40px, 0px);
                border-radius: 5px;
                box-shadow: 0 0 5px black;
                /* display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center; */
            }
            a{
                text-decoration: none;
                color: white;
            }
            br{
                font-size: 5px;
                transform: scale(.5);
            }
            .hct:hover{
                color: gainsboro;
            }
            .hct:hover .dropdown{
                max-height: 250px;
                opacity: 1;
                padding: 5px;
            }
            .hcs{
                margin: 0 20px !important;
                width: 120px;
                color: white;
                font-size: 20px;
                cursor: pointer;
                transform: translateY(10px);
                transition: .5s;
            }
            .hcs a{
                padding: 5px 20px;
                background: rgba(255,255,255,0.5);
                color: black !important;
                border-radius: 5px;
                width: 100px;
                transition: .5s;
            }
            .hcs:hover a{
                color: gray !important;
                background: white;
            }
            .hide{
                display: none;
            }
            .drop{
                margin: 0px auto;
                padding: 10px;
                border-radius: 5px;
            }
            .drop:hover{
                background-color: rgba(255,255,255,.5);
                color: black;
            }
            @media (max-width: 1200px){
                .inhdcon .hct{
                    margin: 0 20px !important;
                }
                .hcs{
                    margin: 0 10px !important;
                }
            }
            @media (max-width: 1000px){
                .inhdcon .hct{
                    margin: 0 20px !important;
                }
                .hcs{
                    margin: 0 10px !important;
                }
                .hidct{
                    display: block;
                    opacity: 0;
                    transition: 0.2s;
                    transform: translateX(-1000px);
                }
                .shoct{
                    opacity: 1;
                    display: block;
                    transform: translateX(0);
                    transition: .4s;
                }
                .hide{
                    display: initial;
                    color: white;
                }
                .fa-layer-group{
                    animation: difcol 10s infinite;
                }
                @keyframes difcol {
                    0%{
                        color: greenyellow;
                    }
                    10%{
                        color: gold;
                    }
                    20%{
                        color: orange;
                    }
                    30%{
                        color: plum;
                    }
                    40%{
                        color: blueviolet;
                    }
                    50%{
                        color: orangered;
                    }
                    60%{
                        color: lightskyblue;
                    }
                    70%{
                        color: white;
                    }
                    80%{
                        color: lightcoral;
                    }
                    90%{
                        color: green;
                    }
                    100%{
                        color: gray;
                    }
                }
                .hdcon{
                    padding: 50px ;
                }
                .inhdcon{
                    position: absolute;
                }
                .hdcon1{
                    /* top: 25px; */
                    left: 100px;
                }
                .hdcon4{
                    right: 70px;
                }
                .hdcon2{
                    left: 150px;
                    top: 100px;
                }
                .hdcon3{
                    left: 150px;
                    top: 300px;
                }
                .hdpad{
                    padding-bottom: 400px;
                }
                .hdpad1{
                    padding-bottom: 600px;
                }
                .hdpad2{
                    padding-bottom: 560px;
                }
                .hcs{
                    display: block;
                    text-align: center;
                }
                .hpd{
                    width: 120px;
                    padding: 10px 20px !important;
                    display: block;
                }
                .dropdown{
                    position: relative;
                    box-shadow: none;
                    border: none;
                    background: transparent;
                    transform: none;
                    z-index: 1000;
                }
                .drop:hover{
                    background-color: rgba(255,255,255,0);
                    color: lightskyblue;
                }
            }
            @media (max-width: 400px){
                .cot{
                    transform: scale(.5, 1)  translateY(20px) !important;
                    transform-origin: left center;
                    /* content: "" !important;
                    color: transparent !important;
                    z-index: -100; */
                }
                /* .cot::before{
                    content: "C . O . T";
                    color: white;
                    position: absolute;
                    z-index: 100;
                } */
                .clipsimage{
                    transform: scale(.8) !important;
                }
                .clipsimage img{
                    border-radius: 0px;
                }
                .fa-layer-group{
                    transform: scale(.8);
                }
            }
        </style>
    </head>
    <header>
        <section class="hdcon nhdpad">
            <section class="hdcon1 inhdcon">
                <div class="clipsimage"><a href="index.php"><img src="clipsoftaleslogo.png" alt=""></a></div>
                <p class="cot hct">Clips&nbspof&nbspTales <br><br></p>
            </section>
            <section class="hdcon2 inhdcon hidct">
                <section class="hct"><a href="index.php#about" class="uppad">About&nbspUs</a><br><br></section>
                <section class="hct hcd">Aspects <br><br>
                    <div class="dropdown">
                        <a href="index.php#entertain"><p class="drop">Full On Entertainment</p></a>
                        <a href="index.php#content"><p class="drop">Content Creating</p></a>
                        <a href="index.php#trends"><p class="drop">Upto The Trends</p></a>
                        <a href="index.php#reaction"><p class="drop">Public Reaction</p></a>
                    </div>
                </section>
                <section class="hct"><a href="index.php#contact" class="uppad">Contact</a><br><br></section>
                <section class="hct hcd2"><a href="dashboard.php">Dashboard</a> <br><br>
                    <!-- <div class="dropdown">
                        <a href="dashboard.php#horror"><p class="drop playlist-item">Horror Stories</p></a>
                        <a href="dashboard.php#soft"><p class="drop playlist-item">Soft Tales</p></a>
                        <a href="dashboard.php#movie"><p class="drop playlist-item">Movies Stories</p></a>
                    </div> -->
                </section>
            </section>
            <section class="hdcon3 inhdcon hidct">
                <section class="hcs"><a class="hpd" href="login.php#logpg">Sign In</a><br><br></section>
                <section class="hcs"><a class="hpd" href="signup.php#signpg">Sign up</a><br><br></section>
            </section>
            <section class="hdcon4 inhdcon hide">
                <section class="hct"><i class="fa-solid fa-layer-group fa-2xl"></i><br><br></section>
            </section>
        </section>
        <script>
            document.querySelector(".hide").addEventListener('click', () => {
                document.querySelectorAll(".hidct").forEach((e) => {
                    e.classList.toggle("shoct");
                });
                document.querySelectorAll(".nhdpad").forEach((e) => {
                    e.classList.toggle("hdpad");
                });
            });
            document.querySelectorAll(".drop, .uppad").forEach((dropElement) => {
                dropElement.addEventListener('click', () => {
                    window.scrollBy({left: 0, top: -100, behavior: 'smooth'});
                    // Remove the "shoct" class from all ".hidct" elements
                    document.querySelectorAll(".hidct").forEach((e) => {
                        e.classList.remove("shoct");
                    });

                    // Remove multiple classes from all ".nhdpad" elements
                    document.querySelectorAll(".nhdpad").forEach((e) => {
                        e.classList.remove("hdpad", "hdpad1", "hdpad2");
                    });

                    // Scroll the window upwards smoothly
                });
            });


            const mediaQuery = window.matchMedia("(max-width: 1000px)");

            // Function to handle media query match
            function handleMediaQuery(e) {
                if (e.matches) {
                    // Code to run if the media query matches
                    document.querySelector(".hcd").addEventListener("mouseover", ()=>{
                    document.querySelector(".hdcon3").style['margin-top']="180px";
                    document.querySelector(".hdpad").classList.add('hdpad1');
                    });
                    document.querySelector(".hcd").addEventListener("mouseleave", ()=>{
                    document.querySelector(".hdcon3").style['margin-top']="0px";
                    document.querySelector(".hdpad").classList.remove('hdpad1');
                    });
                    // document.querySelector(".hcd2").addEventListener("mouseover", ()=>{
                    // document.querySelector(".hdcon3").style['margin-top']="140px";
                    // document.querySelector(".hdpad").classList.add('hdpad2');
                    // });
                    document.querySelector(".hcd2").addEventListener("mouseleave", ()=>{
                    document.querySelector(".hdcon3").style['margin-top']="0px";
                    document.querySelector(".hdpad").classList.remove('hdpad2');
                    });
                } else {
                    // Code to run if the media query does not match
                    document.querySelector(".hcd").addEventListener("mouseover", ()=>{
                    document.querySelector(".hdcon3").style['margin-top']="0px";
                    });
                    document.querySelector(".hcd").addEventListener("mouseleave", ()=>{
                    document.querySelector(".hdcon3").style['margin-top']="0px";
                    });
                    document.querySelector(".hcd2").addEventListener("mouseover", ()=>{
                    document.querySelector(".hdcon3").style['margin-top']="0px";
                    });
                    document.querySelector(".hcd2").addEventListener("mouseleave", ()=>{
                    document.querySelector(".hdcon3").style['margin-top']="0px";
                    });
                }
            }

            // Initial check
            handleMediaQuery(mediaQuery);

            // Add listener for changes
            mediaQuery.addEventListener("change", handleMediaQuery);

        </script>
    </header>
</html>