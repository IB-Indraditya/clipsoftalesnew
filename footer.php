<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <style>
            footer{
                width: 100%;
                background: url('https://4kwallpapers.com/images/wallpapers/black-rocks-dark-3840x2160-13127.jpg');
                background-attachment: fixed;
                background-position: bottom;
                background-repeat: no-repeat;
                background-size: cover;
                display: flex;
                justify-content: center;
                flex-direction: column;
                padding: 30px 0;
                overflow: hidden;
                box-shadow: inset 0 0 50px 5px black;

            }
            .footersec{
                background: rgba(0,0,0, .3);
                height: 400px;
                width: 90%;
                padding: 40px 10px;
                display: flex;
                justify-content: center;
                flex-direction: column;
                box-shadow: 0 0 200px .4px rgb(101, 30, 10);
                border-radius: 5px;
                margin: 0 auto;
                overflow: hidden;
            }
            .hdft{
                display: flex;
                margin: 0 auto;
                width: 100%;
            }
            .fthd{
                margin: 0 auto;
                display: flex;
                flex-direction: column;
            }
            .fthd p{
                color: white;
                font-size: 25px;
                margin: 0 auto;
            }
            .hdtext{
                display: flex;
                width: 100%;
                justify-content: center;
                align-items: center;
                margin: 0px auto;
                margin-bottom: 20px;
            }
            .hdtext p{
                color: lightgreen;
                font-size: 30px;
                margin: 0px 450px;
                margin-bottom: 20px;
            }
            .fttext p{
                 font-size: 15px;
                 color: palevioletred;
                 margin: 30px auto;
                 margin-bottom: 0;
            }
            .hdtext p span{
                font-size: 20px;
                padding: 0px 10px;
                border-radius: 5px;
                margin: 0 10px;
                border: solid 1px white;
            }
            .ftext p{
                color: lightskyblue;
                font-size: 15px;
                margin: 25px auto;
                transition: .4s;
            }
            .ftext p:hover{
                color: lightsalmon;
                cursor: pointer;
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
                        color: springgreen;
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
                        color: cyan;
                    }
                    100%{
                        color: silver;
                    }
                }
            @media (max-width: 1400px){
                .hdtext p{
                    margin: 0 30vw;
                }
            }
            @media (max-width: 900px){
                .hdtext p{
                    margin: 0 25vw;
                }
            }
            @media (max-width: 700px){
                .hdtext p{
                    margin: 0 auto;
                }
                .footersec{
                    height: auto;
                }
                .hdft{
                    display: block;
                }
                .fthd{
                    display: block;
                    padding: 0 20px;
                }
            }
        </style>
    </head>
    <footer>
        <section class="footersec">
            <section class='hdtext'>
                <p>Clips&nbspOf&nbspTales</p>
                <p style="font-size: 12px; animation: difcol 20s infinite;" id="clock">Time</p>
            </section>
            <hr style="border-color: lightsalmon; transform: translateY(-20px); width: 85%; margin: auto; margin-bottom: 20px;">
            <section class="hdft">
                <section class="fthd">
                    <p>Testimonial</p>
                    <section class="ftext">
                        <p>Creator's Sign</p>
                        <p>WorkShop</p>
                        <p>Contribution</p>
                        <p>Android APK</p>
                    </section>
                </section>
                <section class="fthd">
                    <p>Services</p>
                    <section class="ftext">
                        <p>Social Media</p>
                        <p>Designing</p>
                        <p>Content</p>
                        <p>Video Editing</p>
                        <p>Thumbnail</p>
                    </section>
                </section>
                <section class="fthd">
                    <p>Equipments</p>
                    <section class="ftext">
                        <p>Image Editor</p>
                        <p>Calculator</p>
                        <p>OCR</p>
                        <p>Pdf Convertor</p>
                    </section>
                </section>
                <section class="fthd">
                    <p>Support</p>
                    <section class="ftext">
                        <p>Help Desk</p>
                        <p>Contact Us</p>
                    </section>
                </section>
            </section>
            <section class='hdtext fttext'>
                <p>Thank you all <span></span><span></span><span></span><span></span> viewers for visiting Clips Of Tales</p>
            </section>
        </section>
        <script>
            function updateClock() {
                const clockElement = document.getElementById('clock');
                const now = new Date();
    
                // Format the time
                const hours = now.getHours();
                const minutes = now.getMinutes();
                const seconds = now.getSeconds();
                const ampm = hours >= 12 ? 'PM' : 'AM';
    
                // Format hours to 12-hour clock
                const formattedHours = hours % 12 || 12;
    
                // Pad minutes and seconds with leading zeros
                const formattedMinutes = minutes.toString().padStart(2, '0');
                const formattedSeconds = seconds.toString().padStart(2, '0');
    
                // Combine into a time string
                const timeString = `${formattedHours}:${formattedMinutes}:${formattedSeconds}&nbsp${ampm}`;
    
                // Update the clock element
                clockElement.innerHTML = timeString;
            }
    
            // Update the clock every second
            setInterval(updateClock, 1000);
    
            // Initial call to display clock immediately
            updateClock();
        </script>
    </footer>
    <footer style="padding: 10px 0; color: white; text-align: center; background: url('https://e1.pxfuel.com/desktop-wallpaper/65/5/desktop-wallpaper-dark-textured-backgrounds-design-patterns-website-psd-dark-textured-backgrounds-thumbnail.jpg');">ClipsOfTales@Copyright: since 2021</footer>
</html>