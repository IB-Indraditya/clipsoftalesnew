<html>
    <head>
        <style>
            .con1{
                background: url('https://i.pinimg.com/originals/df/61/4b/df614b93e7419cebb0101773432e2831.jpg');
                background-attachment: fixed;
                background-position: top;
                background-repeat: no-repeat;
                background-size: cover;
                padding-bottom: 100px;
                width: 100%;
                display: flex;
                justify-content: center;
                /* align-items: center; */
            }
            .con1 .mid{
                margin: 200px auto;
                width: 90%;
                background: rgba(0, 100, 0, .4);
                border-radius: 5px;
                margin-bottom: 0;
                padding: 20px;
                padding-bottom: 50px;
                display: grid;
                place-items: center;
            }
            .con1 .midl{
                background: url('clipsoftalestransparent.png');
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: top;
                background-size: cover;
            }
            .con1 h1{
                margin: 50px auto;
                text-align: center;
                color: white;
                font-size: 70px;
                text-shadow: 0 0 5px black;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                overflow-wrap: anywhere;
            }
            .mid p{
                font-size: 25px;
                /* width: 80%; */
                padding: 50px;
                background: rgba(0, 0, 0, .4);
                color: gold;
                border-radius: 5px;
                margin: 10px auto;
            }
            .mid a{
                padding:10px 20px;
                border-radius: 5px;
                background-color: orangered;
                color: white;
                font-size: 25px;
                margin: 50px auto;
                box-shadow: 0 0 5px black;
                transition: .5s;
            }
            .subs{
                text-align: center;
                padding: 50px 5% !important;
                width: 90%;
            }
            .mid a:hover{
                background: rgb(180, 51, 5);
                box-shadow: 0 0 2px black;
            }
            .mid1{
                margin: 20px auto !important;
            }
            .mid1{
                display: flex;
                justify-content: center;
            }
            .con3 .mid2{
                background: rgba(0, 0, 100, .4);
            }
            .con4 .mid3{
                background: rgba(100, 0, 100, .4);
            }
            .con5 .mid4{
                background: rgba(100, 0, 0, .4);
            }
            .con6 .mid5{
                background: rgba(100, 100, 0, .4);
            }
            .con7 .mid6{
                background: rgba(100, 100, 100, .4);
            }
            .con8 .mid7{
                background: rgba(100, 200, 100, .4);
            }
            .midin{
                display: flex;
                justify-content: center;
                width: 100%;
            }
            .midtext p{
                width: 80%;
                margin-right: 60px;
            }
            .mid .logoimg{
                width: 100%;
                border-radius: 5px;
            }
            .mid .logoimg img{
                width: 100%;
                height: 100%;
                border-radius: 5px;
                transform: scale(1.02);
                /* box-shadow: inset 0 0 5px black; */
            }
            .midimage{
                display: flex;
                justify-content: center;
                min-width: 40%;
                overflow: hidden;
                border-radius: 5px;
                /* margin: 10px; */
            }
            .midimage img{
                width: 100%;
                margin: 10px auto;
                border-radius: 5px;
                /* box-shadow: 0 0 5px black; */
                background: rgba(0, 0, 0, .6);
                transition: 1s;
            }
            .midimage img:hover{
                transform: scale(1.05);
            }
            .midtext p span{
                color: white !important;
                font-style: oblique;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .midin2{
                direction: rtl;
            }
            .midin2 .midtext{
                direction: ltr;
            }
            .midin2 .midtext p{
                margin-right: 0;
            }
            .midin2 .midimage{
                flex-direction: column;
                min-width: 50%;
                /* min-height: 30%; */
                overflow: hidden;
                border-radius: 5px;
            }
            .midin2 .midimage img{
                height: 100%;
            }
            .midtext p input, textarea{
                width: 100%;
                margin: 5px auto;
                padding: 10px 5px;
                border: none;
                border-radius: 5px;
                background: rgba(255, 255, 255, .5);
                font-size: 20px;
                transition: .5s;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            textarea{
                height: 300px;
                resize: none;
            }
            input:focus, textarea:focus{
                outline: none;
                box-shadow: 0 0 30px .5px lightskyblue;
                background:  rgba(255, 255, 255, .8) !important;
            }
            input[type='submit']:hover{
                background: white;
                color: dimgray;
                cursor: pointer;
            }
            .midtext p i{
                margin: 0 50px;
                color: white;
                font-size: 40px;
                transition: .5s;
            }
            .midtext p i:hover{
                color: lightblue;
                cursor: pointer;
            }
            .midbox{
                display: flex;
                min-width: 300px;
                min-height: 300px;
                padding: 10px;
                background: rgba(0, 0, 0, .6);
                margin: 0 auto;
                align-items: center;
                justify-content: center;
                border-radius: 5px;
                font-size: 20px;
                color: white;
                box-shadow: 0 0 5px lightgreen;
                flex-direction: column;
            }
            .midout{
                display: flex;
                align-items: center;
                /* width: 100%; */
                margin-bottom: 50px;
            }
            b{
                font-size: 50px;
                margin: 10px auto;
            }
            .midbox span{
                color: gold;
            }
            @media (max-width: 1400px){
                .midin{
                    display: flex;
                    justify-content: center;
                    flex-direction: column;
                }
                .midtext p{
                    margin-right: 0;
                    width: auto;
                }
                .midtext p i{
                    margin: 10px 4vw;
                    color: white;
                    font-size: 40px;
                }
                textarea{
                    height: 30vw;
                }
                .midtext p i{
                    font-size: 30px;
                }
                .midout{
                    flex-direction: column;
                }
                .midbox{
                    margin: 0px auto;
                    min-width: 100%;
                    min-height: 100%;
                    padding: 20px;
                }

            }
            @media (max-width: 500px){
                h1{
                    font-size: 40px !important;
                }
                .mid p{
                    padding: 10px;
                    font-size: 20px;
                }
                .con1 .mid{
                    padding: 10px;
                    width: 92%;
                }
                textarea{
                    height: 35vw;
                }
                .midtext p i{
                    font-size: 20px;
                }
                .midbox{
                    margin: 0px auto;
                    min-width: 40vw;
                    min-height: 40vw;
                    
                }
            }
        </style>
    </head>
    <body>
        <section class="con1" id="about">
            <section class="mid midl">
                <h1><span style="color: white;">About </span><span style="color: yellow;">Clips </span><span style="color: gold;">Of </span><span style="color: orange;">Tales</span></h1>
                <p style="color: gold;">Clips of Tales is a channel which is dedicated to providing classic works of fiction in audio story format. These audio stories are intended to educate, entertain and relax and calm the mind of the listeners or viewers.</p>
                <p style="color: orange;">All artwork for the channel is created by our team and music and sounds are curated using online sound libraries.
                So, stay tuned to Clips of Tales.</p>
                <!-- <div class="midimage logoimg"><img src="clipsoftaleslogo.png" alt=""></div> -->
                <p class="subs">Clips of Tales is where stories meet real emotions and reactions. <br><br> <a href="https://www.youtube.com/@clipsoftales?sub_confirmation=1" target='_blank'>Subscribe</a></p>
            </section>
        </section>
        <section class="con1 con2" id="creator">
            <section class="mid mid1">
                <h1><span style="color: lightgreen;">The </span>Creator</h1>
                <div class="midin">
                    <div class="midtext">
                        <p style="color: lightgreen;">Meet the creator behind the magic – <span>Indraditya</span>, a passionate storyteller with a deep love for sharing tales that connect with people. With a keen eye for detail and a heart full of creativity, I bring stories to life, ensuring they resonate with every viewer. My mission is to spread joy, spark curiosity, and create a space where everyone can appreciate the power of storytelling.</p>
                        <p style="color: white;">So, whether you’re here for inspiration, entertainment, or simply to unwind, Clips of Tales promises a tale for everyone. Don’t forget to like, comment, and subscribe to join our growing community of story lovers! Let’s keep the magic alive, one tale at a time.</p>
                    </div>
                    <div class="midimage">
                        <img src="creatorimage.png" alt="">
                    </div>
                </div>
            </section>
            
        </section>
        <section class="con1 con2 con3" id="entertain">
            <section class="mid mid1 mid2">
                <h1><span style="color: lightblue;">Full</span><span style="color: gold;"> On</span> <span style="color: orange;"> Entertainment</span></h1>
                <div class="midin midin2">
                    <div class="midtext">
                        <p style="color: lightblue">At Clips of Tales, we believe storytelling isn’t just about words—it’s about creating an immersive, entertaining experience that keeps you hooked from start to finish. That’s why Full-On Entertainment is at the heart of our channel!</p>

                        <p style="color: gold;">We take pride in presenting tales with vivid visuals, engaging narrations, and a dash of creativity that guarantees you’ll have a smile on your face or chills down your spine.</p>

                        <p style="color: orange;">So, whether you’re here for inspiration, entertainment, or simply to unwind, Clips of Tales promises a tale for everyone. Don’t forget to like, comment, and subscribe to join our growing community of story lovers! Let’s keep the magic alive, one tale at a time.</p>
                    </div>
                    <div class="midimage">
                        
                        <img src="https://png.pngtree.com/thumb_back/fh260/background/20240724/pngtree-next-level-content-creation-studio-image_16019775.jpg" alt="">
                    </div>
                </div>
            </section>
        </section>
        <section class="con1 con2 con4" id="content">
            <section class="mid mid1 mid3">
                <h1><span style="color: lightsalmon;">Creating </span><span style="color: violet;">Contents</span></h1>
                <div class="midin">
                    <div class="midtext">
                        <p style="color: lightcoral;">At Clips of Tales, content creation isn’t just a process—it’s a passion. With every story we bring to life, we strive to deliver imaginative and engaging content that resonates with our audience.</p>
                        <p style="color: plum;">Clips of Tales embraces the art of innovation, experimenting with diverse genres, formats, and techniques to create stories that appeal to a wide audience. From brainstorming unique ideas to delivering the final masterpiece, our content creation journey is all about pushing the boundaries of imagination while connecting with viewers on a personal level.</p>
                    </div>
                    <div class="midimage">
                        <img src="https://img.freepik.com/premium-photo/neon-landscape-with-mountains-sun_900396-8322.jpg" alt="">
                    </div>
                </div>
            </section>
        </section>
        <section class="con1 con2 con3 con5" id="trends">
            <section class="mid mid1 mid4">
                <h1><span style="color: lightblue;">Upto </span> The <span style="color: violet;">Trends</span></h1>
                <div class="midin midin2">
                    <div class="midtext">
                        <p style="color: lightblue">At Clips of Tales, we don’t just tell stories; we stay ahead of the curve by keeping up with the latest trends. Our channel thrives on being dynamic and adaptable, ensuring our content is always fresh, relevant, and engaging. Whether it’s viral challenges, popular themes, or the latest in storytelling techniques, we incorporate trending elements to keep our audience entertained and connected.</p>

                        <p style="color: white;">By staying updated on what’s hot in the digital world, we make sure that our tales resonate with contemporary audiences. From weaving trending topics into our narratives to experimenting with modern styles of presentation, Clips of Tales is your go-to channel for stories that reflect the pulse of the moment.</p>

                        <p style="color: violet;">Join us at Clips of Tales, where we blend timeless storytelling with the trends of today. Subscribe now and experience content that’s always ahead of the game!</p>
                    </div>
                    <div class="midimage">
                        <img src="https://images.ctfassets.net/cpumif18y1gd/3x540nvHBYF2h2d6MB1qDa/ec206da46b7e82ff5babe06174a7a95e/EMP175-_5_biggest_customer_expectations_from_social_care_-_625x417_____2.png" alt="">
                        <img src="https://media.chirpn.com/5_b_f21b7062e0.png" alt="">
                    </div>
                </div>
            </section>
        </section>
        <section class="con1 con2 con5 con6" id="reaction">
            <section class="mid mid1 mid5">
                <h1>Public <span style="color: gold;">Reaction</span></h1>
                <div class="midin">
                    <div class="midtext">
                        <p style="color: white;">At Clips of Tales, the heartbeat of our channel is the connection we share with our audience. One of our standout features is showcasing public reactions to our engaging stories and entertaining content. We thrive on the energy, excitement, and feedback that comes from viewers as they experience our tales.</p>
                        <p style="color: yellow;">Public feedback also plays a pivotal role in shaping our channel. We listen, adapt, and create content inspired by the voices of our community. By involving our audience, we make storytelling a shared experience, amplifying its impact and reach.</p>
                    </div>
                    <div class="midimage">
                        <img src="https://www.asset.edu.au/wp-content/uploads/2021/06/public-relations-manager.jpg" alt="">
                    </div>
                </div>
            </section>
        </section>
        <section class="con1 con2 con5 con7" id="contact">
            <section class="mid mid1 mid6">
                <h1>Contact</h1>
                <div class="midin">
                    <div class="midtext">
                        <form action="" method="GET">
                            <p style="color: white;">
                                <input type="text" name="fullname" placeholder="John Doe" required>
                                <input type="email" name="email" placeholder="Johndoe@gmail.com" required>
                                <input type="number" name="phnumber" placeholder="91897XXXX792" required>
                                <textarea name="message" id="" placeholder="Your suggestions for improvement" required></textarea>
                                <input type="submit" value="Submit">
                            </p>
                        </form>
                        <p style="text-align: center;"><i class="fa-brands fa-youtube"></i><i class="fa-brands fa-facebook"></i><i class="fa-brands fa-twitter"></i><i class="fa-brands fa-instagram"></i><i class="fa-brands fa-linkedin"></i></p>
                    </div>
                </div>
            </section>
        </section>
        <section class="con1 con2 con5 con8">
            <section class="mid mid1 mid7">
                <h1>Statistics</h1>
                <div class="midin">
                    <div class="midout">
                        <div class="midbox"><b>10 +</b> <span> Videos</span></div>
                        <div class="midbox"><b>10K +</b><span>Views</span></div>
                        <div class="midbox"><b>4K +</b> <span>Visitors</span></div>
                        <div class="midbox"><b>50 +</b><span>Subscribers</span></div>
                    </div>
                </div>
            </section>
        </section>
        <script>
            // document.querySelector("form").addEventListener('submit', (event)=>{
            //     event.preventDefault();
            // });
            // const newURL = window.location.protocol + "//" + window.location.host + "/php_files/clipsoftales/index.php";
            // window.history.pushState({ path: newURL }, '', newURL);
        </script>
    </body>
</html>
<?php
    
    if (isset($_GET['fullname'], $_GET['email'], $_GET['phnumber'], $_GET['message'])){
        $fullname=$_GET['fullname'];
        $email=$_GET['email'];
        $phnumber=$_GET['phnumber'];
        $message=$_GET['message'];
        $con=new mysqli("localhost", "root", "", "clipsoftales");
        $sql="INSERT INTO contact (fullname, email, phnumber, message) values (?,?,?,?)";
        $stmt=$con->prepare($sql);
        $stmt->bind_param("ssis", $fullname, $email, $phnumber, $message);
        if( $stmt->execute()){
            echo "<script>
                    const newURL = window.location.protocol + \"//\" + window.location.host + \"/php_files/clipsoftales/index.php\";
                    window.history.pushState({ path: newURL }, '', newURL);
                    alert('Message sent successfully !');
                </script>";
            // header("Location: index.php#contact");
            // exit();
        }else{
            echo "<script>alert('Error !!');</script>";
        }
    }
?>