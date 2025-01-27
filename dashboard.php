<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['user_email'])) {
        header("Location: login.php#logpg");
        exit();
    }

    // Check if name is set in the session
    

    $conn = new mysqli('localhost', 'root', '', 'clipsoftales');
    if ($conn->connect_error) {
        die('Database connection failed: ' . $conn->connect_error);
    }

    // if (isset($_GET['title'], $_GET['content'])) {
    //     $title = $conn->real_escape_string($_GET['title']);
    //     $content = $conn->real_escape_string($_GET['content']);
    //     $author_name = $_SESSION['name'];
    //     $author_email = $_SESSION['user_email'];

    //     // Insert blog post
    //     $sql = "INSERT INTO contact (title, content, author_name, author_email) VALUES ('$title', '$content', '$author_name', '$author_email')";
    //     if ($conn->query($sql) === TRUE) {
    //         header("Location: blog.php?status=success");
    //         exit();
    //     } else {
    //         echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
    //     }
    // }
    // $conn->close();
?>
<?php
    $email = $_SESSION['user_email'];
    $sql2 = "SELECT * FROM registration WHERE email = ?";
    $stmt = $conn->prepare($sql2);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row=$result->fetch_assoc();
    $name=$row['fullname'];
    $password=$row['cpassword'];
    $stmt->close();
    
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Add New Blog Post">
    <meta name="keywords" content="PHP Blog, Add Post, Blogging System">
    <meta name="author" content="Your Name">
    <title>Add New Post</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                /* cursor: url('gcursor1.png'), auto; */
            }
            body{
                display: flex;
                align-items: flex-start;
                justify-content: center;
                font-family: Arial, Helvetica, sans-serif;
            }
            .main{
                display: flex;
                flex-direction: column;
                height: auto;
                width: 100%;
                max-width: 1600px;
                min-height: 300px;
                box-shadow: 0 0 10px dimgray;
            }
            .con{
                height: auto;
                background: url('https://static.vecteezy.com/system/resources/previews/036/165/898/non_2x/ai-generated-abstract-golden-bokeh-on-black-background-christmas-and-new-year-concept-detail-fire-sparks-isolated-on-a-black-background-ai-generated-free-photo.jpg');
                background-attachment: fixed;
                background-position: top;
                background-repeat: no-repeat;
                background-size: cover;
                /* direction: rtl; */
                height: 100vh;
                display: flex;
                overflow: hidden;
            }
            .con1{
                margin: 100px 0px;
                margin-bottom: 0;
                min-width: .1px;
                height: auto;
                background: rgba(100, 20, 70, .4);
                box-shadow: 0px 0px 0px darkblue;
                transition: .5s;
                animation: glow 10s infinite;
                overflow: hidden;
                /* transform: translateX(-20px); */
            }
            @keyframes glow {
                50%{
                    box-shadow: 0px 0 10px 5px darkblue;
                }
                100%{
                    box-shadow: 0px 0 0px darkblue;
                }
            }
            @keyframes glowgreen {
                50%{
                    box-shadow: 0px 0 10px .1px lightgreen;
                }
                100%{
                    box-shadow: 0 0 1px .5px lightgreen;
                }
            }
            .con2{
                margin: 100px 0px;
                margin-bottom: 0;
                background: rgba(0, 0, 0, 0.2);
                transform: translateX(0.2%);
                min-width: 99.8%;
                transition: .4s;
                display: flex;
                justify-content: center;
                align-items: center;
                /* padding: 20px; */
            }
            .con1:hover{
                min-width: 20%;
                animation: none;
            }
            .con1:hover .mid{
                /* display: block; */
                width: 100%;
            }
            .mid{
                padding: 50px 0;
                overflow: hidden;
                /* width: 100px; */
                /* display: none; */
                width: 0;
                transition: 2s;
            }
            .mid2{
                /* position: absolute;
                top: 50%; */
                /* transform: translateY(100px);
                color: white;
                font-size: 20px; */
            }
            .mid p{
                color: lightskyblue;
                /* margin: 20px 0; */
                padding: 20px 40px;
                /* font-size: 20px; */
                width: 400px;
                cursor: pointer;
                transition: .5s;
                overflow: hidden;
                /* border-bottom: solid 1px gray; */
                /* background: rgba(0, 0, 105, .4); */
            }
            .mid a {
                color: gold;
                cursor: pointer;
            }
            .mid p:hover{
                color: white;
                background: rgba(200, 100, 0, 0.2);
            }
            .conbd{
                background: rgba(0, 0, 0, .6);
                box-shadow: 0 0 1px .5px lightgreen;
                border-radius: 0px;
                width: 80%;
                height: 80%;
                padding: 20px;
                overflow: hidden;
                overflow-y: scroll;
                scrollbar-width: thin;
                scrollbar-color: white transparent;
                animation: glowgreen 5s infinite
                /* transition: 0s; */
            }
            .details{
                text-align: center;
            }
            .details b{
                font-size: 40px;
                color: lightblue;
                text-align: center;
            }
            .details div{
                margin: 50px auto;
                background: rgba(255, 0, 255, 0.2);
                padding: 20px 40px;
                width: 60%;
                border-radius: 5px;
                overflow-wrap: anywhere;
            }
            .details div p{
                color: white;
                margin: 40px auto;
                text-align: left;
            }
            p textarea{
                width: 100%;
                height: 200px;
                resize: none;
                border-radius: 5px;
                font-size: 20px;
                background: rgba(255, 255, 255, 0.6);
                color: darkblue;
                font-family: Georgia, 'Times New Roman', Times, serif;
                scrollbar-width: thin;
            }
            textarea:focus, input:focus{
                border: none;
                outline: none;
                box-shadow: 0 0 5px lightblue;
            }
            p input{
                width: 100%;
                padding: 10px 5px;
                font-size: 20px;
                border-radius: 5px;
                background: rgba(0, 0, 0, .4);
                color: lightcoral;
                border: none;
            }
            input[type='submit']:hover{
                background: white;
                cursor: pointer;
                transition: .5s;
            }
            .ptext{
                display: flex;
            }
            .ptext span{
                width: 50%;
                padding: 10px 20px;
                background: rgba(0, 0, 0, .4);
                border-radius: 5px;
                margin: 0px 5px;
            }
            .video-container, .playlistcontainer{
                display: flex;
                scrollbar-width: thin;
                scrollbar-color: white transparent;
                width: auto !important;
                padding: 10px 5px !important;
            }
            .video-container{
                /* height: 200px; */
                overflow-x: scroll;
                display: none;
            }
            .playlistcontainer{
                overflow-wrap: break-word !important;
            }
            .video-container iframe{
                margin: 0 10px;
                border-radius: 5px;
                min-width: 500px;
                height: 280px;
            }
            .inplaylist{
                margin: 10px !important;
            }
            dfn{
                text-align: left;
                color: lightcyan;
                cursor: pointer;
                border: solid 1px white;
                padding: 5px;
            }
            dfn:hover{
                color: gold;
            }
            #startRecording, #stopRecording{
                padding: 10px;
                border: solid 1px white;
                border-radius: 5px;
                cursor: pointer;
                text-align: center;
                transition: .5s;
            }
            #startRecording:hover, #stopRecording:hover{
                background: white;
                color: blueviolet;
            }
            b{
                display: none;
            }
            @media (min-width: 1900px){
                .con{
                    height: auto;
                }
            }
            @media (min-width: 3000px){
                .con{
                    height: 100vh !important;
                }
            }
            @media (max-width: 1000px){
                .dashboard{
                    transform: scaleX(.7);
                    transform-origin: left center;
                }
            }
            @media (max-width: 760px){
                .dashboard{
                    transform: scaleX(.6);
                    font-weight: bold;
                    transform-origin: left center;
                }
            }
            @media (max-width: 700px){
                .dashboard{
                    transform: scaleX(1);
                    font-weight: bold;
                    transform-origin: left center;
                }
                audio{
                    width: 100%;
                    height: 40px;
                }
                .conbd{
                    padding: 0;
                    width: 90%;
                }
                .con1{
                    background: rgba(0, 20, 100, .6);
                }
                .con1:hover{
                    min-width: 70px;
                    width: 70px;
                }
                .mid{
                    padding: 10px 20px;
                }
                .mid p{
                    padding: 20px 0px;
                }
                .mid p:hover{
                    background: transparent;
                }
                .mid p span{
                    display: none;
                }
            }
        </style>
        </style>
    </head>
    <body>
        <section class="main"  id="gotop">
            <?php include 'header.php' ?>
            <section class="con">
                <section class="con1">
                    <section class="mid">
                        <p class="dashboard" style="font-size: 25px; color: lightgreen !important; background: transparent !important;"><i class="fa-solid fa-gauge"></i>&nbsp&nbsp&nbsp&nbsp<span>Dashboard</span></p>
                        <p class="profile"><i class="fa-solid fa-user"></i>&nbsp&nbsp&nbsp&nbsp<span>Profile</span></p>
                        <p class="playlist"><i class="fa-solid fa-music"></i>&nbsp&nbsp&nbsp&nbsp<span>Playlists</span></p>
                        <p class="upload"><i class="fa-solid fa-cloud-arrow-up"></i>&nbsp&nbsp&nbsp&nbsp<span>Upload</span></p>
                        <p class="write"><i class="fa-solid fa-feather-pointed"></i>&nbsp&nbsp&nbsp&nbsp<span>Write</span></p>
                        <p class="record"><i class="fa-solid fa-microphone-lines"></i>&nbsp&nbsp&nbsp&nbsp<span>Record</span></p>
                        <p class="settings"><i class="fa-solid fa-gear"></i>&nbsp&nbsp&nbsp&nbsp<span>Settings</span></p>
                        <p><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp&nbsp&nbsp&nbsp<span>Log out</span></a></p>
                    </section>
                    <section class="mid2"><i class="fa-solid fa-forward"></i></section>
                </section>
                <section class="con2">
                    <section class='conbd'>
                    </section>
                </section>
            </section>
            <?php include 'footer.php' ?>
        </section>
        <script>
            document.querySelector('.con1').addEventListener('mouseover', ()=>{
                document.querySelector('.con2').style['min-width']='79.8%';
            });
            document.querySelector('.con1').addEventListener('mouseleave', ()=>{
                document.querySelector('.con2').style['min-width']='99.8%';
            });
            // Function to clear all existing '.details' elements
            function clearDetails() {
                document.querySelectorAll('.details').forEach((detailElement) => {
                    detailElement.remove(); // Remove the existing details
                });
            }
            window.onload= () => {
                clearDetails(); // Clear other sections
                const postprofile = document.createElement('div');
                postprofile.classList.add('details');
                postprofile.innerHTML = `<b>Hello <?php echo $name ?></b>
                                         <div style='color: gold; font-size: 20px;'>
                                            Welcome to Clips Of Tales <?php echo $name ?> !<br><br>Thank you for joining <br><br><br><i class="fa-solid fa-handshake fa-2xl"></i>
                                            <br><br>
                                            <p><i class="fa-solid fa-star"></i> Hover on the left blue margin for menus</p>
                                         </div>`;
                document.querySelector('.conbd').appendChild(postprofile);
            }
            document.querySelector('.dashboard').addEventListener("click", () => {
                clearDetails(); // Clear other sections
                const postprofile = document.createElement('div');
                postprofile.classList.add('details');
                postprofile.innerHTML = `<b>Hello <?php echo $name ?></b>
                                         <div style='color: gold; font-size: 20px;'>
                                            Welcome to Clips Of Tales my Friend !<br><br>Thank you for joining <br><br><br><i class="fa-solid fa-handshake fa-2xl"></i>
                                            <br><br>
                                            <p><i class="fa-solid fa-star"></i> Hover on the left blue margin for menus</p>
                                         </div>`;
                document.querySelector('.conbd').appendChild(postprofile);
            });
            // Event listener for the profile button
            document.querySelector('.profile').addEventListener("click", () => {
                clearDetails(); // Clear other sections
                const postprofile = document.createElement('div');
                postprofile.classList.add('details');
                postprofile.innerHTML = `<b>Profile</b>
                                        <div>
                                            <p>Account details<p>
                                            <p class='ptext'><span>Registered Name</span> <span><?php echo $name; ?></span></p>
                                            <p class='ptext'><span>Email ID</span> <span><?php echo $email; ?></span></p>
                                            <p class='ptext'><span>Password</span> <span><?php echo $password; ?></span></p>
                                        </div>`;
                document.querySelector('.conbd').appendChild(postprofile);
            });

            // Event listener for the upload button
            document.querySelector('.upload').addEventListener("click", () => {
                clearDetails(); // Clear other sections
                const postprofile = document.createElement('div');
                postprofile.classList.add('details');
                postprofile.innerHTML = `<b>Upload</b>
                                        <form method='POST' action='media.php' enctype='multipart/form-data'>
                                            <div style='color: gold;'>
                                                <p>Create for Clips Of Tales<p>
                                                <p><input type='file' name="fileToUpload" id="fileToUpload" required></p>
                                                <p><input type='submit' value='Upload' name="submit"></p>
                                                Thanks in advance !
                                            </div>
                                        </form>`;
                document.querySelector('.conbd').appendChild(postprofile);
            });

            // Event listener for the write button
            document.querySelector('.write').addEventListener("click", () => {
                clearDetails(); // Clear other sections
                const postprofile = document.createElement('div');
                postprofile.classList.add('details');
                postprofile.innerHTML = `<b>Write</b>
                                        <form method='GET' action='contribute.php'>
                                            <div>
                                                <p>Write for Clips Of Tales</p>
                                                <p><textarea name='content' placeholder='Write Content for shorts'></textarea></p>
                                                <p><input type='submit' value='Contribute'></p>
                                            </div>
                                         </form>`;
                document.querySelector('.conbd').appendChild(postprofile);
            });
            document.querySelector('.record').addEventListener("click", () => {
                clearDetails(); // Clear other sections

                const postprofile = document.createElement('div');
                postprofile.classList.add('details');
                postprofile.innerHTML = `
                <b>Record</b>
                <div>
                    <p id="startRecording">Start</p>
                    <p id="stopRecording" disabled>Stop</p>
                    <p><audio id="audioPlayback" controls></audio></p>
                    <p id="recordStatus">Press "Start Recording" to begin...</p>
                    <p><input type='submit' id="sendButton" value='Send Us' disabled></p>
                </div>
                `;
                document.querySelector('.conbd').appendChild(postprofile);

                let mediaRecorder;
                let audioChunks = [];
                let audioBlob; // To store the audio blob for uploading

                const startButton = document.getElementById('startRecording');
                const stopButton = document.getElementById('stopRecording');
                const sendButton = document.getElementById('sendButton');
                const audioPlayback = document.getElementById('audioPlayback');
                const recordStatus = document.getElementById('recordStatus');

                startButton.addEventListener('click', async () => {
                try {
                    const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                    mediaRecorder = new MediaRecorder(stream);

                    mediaRecorder.ondataavailable = (event) => {
                        audioChunks.push(event.data);
                    };

                    mediaRecorder.onstop = () => {
                        audioBlob = new Blob(audioChunks, { type: 'audio/webm' });
                        audioChunks = []; // Clear chunks for the next recording

                        const audioURL = URL.createObjectURL(audioBlob);
                        audioPlayback.src = audioURL;
                        recordStatus.textContent = 'Recording stopped. Audio is ready for playback!';
                        sendButton.disabled = false; // Enable the send button
                    };

                    mediaRecorder.start();
                    startButton.disabled = true;
                    stopButton.disabled = false;
                    recordStatus.textContent = 'Recording...';
                } catch (err) {
                    console.error('Error accessing microphone:', err);
                    recordStatus.textContent = 'Error accessing microphone.';
                }
                });

                stopButton.addEventListener('click', () => {
                if (mediaRecorder && mediaRecorder.state === 'recording') {
                    mediaRecorder.stop();
                }
                startButton.disabled = false;
                stopButton.disabled = true;
                });

                sendButton.addEventListener('click', () => {
                if (!audioBlob) {
                    recordStatus.textContent = 'No audio to send.';
                    return;
                }

                const formData = new FormData();
                const filename = `recorded_audio_${Date.now()}.webm`;
                formData.append('file', audioBlob);
                formData.append('filename', filename);

                fetch('saveaudio.php', {
                    method: 'POST',
                    body: formData,
                })
                    .then((response) => response.text())
                    .then((filename) => {
                        recordStatus.textContent = `Audio sent successfully! File saved as: ${filename}`;
                        sendButton.disabled = true; // Disable send button after upload
                    })
                    .catch((err) => {
                        console.error('Error uploading audio:', err);
                        recordStatus.textContent = 'Error uploading audio.';
                    });
                });
                });


            document.querySelector('.playlist').addEventListener("click", () => {
                clearDetails(); // Clear other sections
                const postprofile = document.createElement('div');
                const movieslist=["https://www.youtube.com/embed/lIv3Qk0IRcI?si=oNifdysJJs1CQQyk", "https://www.youtube.com/embed/J2UlQGtz1BY?si=IeY8Mbq1d1T3BCIT&amp;start=7", "https://www.youtube.com/embed/E9Cj5rBEGiU?si=OoCmpmzJ4iw4HW7u&amp;start=7", "https://www.youtube.com/embed/JZMJsxsBDIw?si=tRdsEuMHCHWlVZYm", "https://www.youtube.com/embed/dMfJJnRL5UU?si=Ro9RLeZTJjLbllZP", "https://www.youtube.com/embed/960CriYwMz4?si=XSJ8ox8rLY-aKMvq", "https://www.youtube.com/embed/Z1YMufber0M?si=ugkD2c5Ns5fk-Zb5", "https://www.youtube.com/embed/Rxce4JPKFYQ?si=nLIAQfqBr4V_CCrP"];
                const softlist=["https://www.youtube.com/embed/KIqQ9oQ-D2g?si=Z-5DZyr3qjD_Zsfe"];
                const horrorlist=["https://www.youtube.com/embed/vCYwDbdKUuE?si=dPxXbXR6ItxGudct", "https://www.youtube.com/embed/MeegpS2z_wA?si=W3H5a-MUWtjfw4WN"];
                postprofile.classList.add('details');
                postprofile.innerHTML = `<b>Playlists</b>
                                        <div class="playlistcontainer">
                                            <p class='inplaylist'>
                                                <dfn class="playlist-item" id="movie" data-videos='${JSON.stringify(movieslist)}'>Movies Stories Explained</dfn>
                                                <dfn class="playlist-item" id="soft" data-videos='${JSON.stringify(softlist)}'>Soft Tales</dfn>
                                                <dfn class="playlist-item" id="horror" data-videos='${JSON.stringify(horrorlist)}'>Horror Stories</dfn>
                                            </p>
                                        </div>
                                        <div class="video-container"></div>`;
                document.querySelector('.conbd').appendChild(postprofile);

                // Add event listeners to playlist items
                document.querySelectorAll('.playlist-item').forEach((item) => {
                    item.addEventListener("click", () => {
                        const videoContainer = document.querySelector('.video-container');
                        videoContainer.innerHTML = ''; // Clear previous videos
                        const videoUrls = JSON.parse(item.getAttribute('data-videos'));
                        videoContainer.style.display='flex';

                        // Add YouTube iframes for each video URL
                        videoUrls.forEach((url) => {
                            const iframe = document.createElement('iframe');
                            iframe.src = url;
                            // iframe.width = "auto";
                            // iframe.height = "auto";
                            iframe.frameBorder = "0";
                            iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
                            iframe.allowFullscreen = true;
                            videoContainer.appendChild(iframe);
                        });
                    });
                });
            });

            document.querySelector('.settings').addEventListener("click", () => {
                clearDetails(); // Clear other sections
                const postprofile = document.createElement('div');
                postprofile.classList.add('details');
                postprofile.innerHTML = `
                    <b>Settings</b>
                    <form id="updateForm" method="GET" action="updatesettings.php">
                        <div>
                            <p>Personal Information</p>
                            <p><input type="text" name="value" placeholder="Change your name"></p>
                            <input type="hidden" name="type" value="name">
                            <p><input type="submit" value="Change Name"></p>
                        </div>
                    </form>
                    <form id="passwordForm" method="GET" action="updatesettings.php">
                        <div>
                            <p>Sensitive Information</p>
                            <p><input type="password" name="value" placeholder="Change your password"></p>
                            <input type="hidden" name="type" value="password">
                            <p><input type="submit" value="Change Password"></p>
                        </div>
                    </form>`;
                document.querySelector('.conbd').appendChild(postprofile);
            });


        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#fileToUpload').on('change', function() {
            var fileName = $(this).val().split('\\').pop();
            $('#file-name').text(fileName || "No file chosen");
        });

        $(document).ready(function() {
            $('#uploadForm').on('submit', function(event) {
                event.preventDefault();
                
                var formData = new FormData(this);
                
                $.ajax({
                    url: 'upload.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.trim() !== '') {
                            location.reload(); // Reload the page to display the uploaded file
                        } else {
                            alert("Error: " + response);
                        }
                    }
                });
            });
        });
    </script>
    </body>
</html>