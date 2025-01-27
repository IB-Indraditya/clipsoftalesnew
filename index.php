<html>
    <head>
        <style>
            *{
                margin: 0;
                padding: 0;
                scroll-behavior: smooth;
            }
            body{
                display: flex;
                align-items: flex-start;
                justify-content: center;
                flex-direction: column;
                font-family: Arial, Helvetica, sans-serif;
            }
            .main{
                display: flex;
                /* justify-content: center; */
                align-items: center;
                max-width: 1600px;
                width: 100%;
                min-width: 300px;
                flex-direction: column;
                margin: 0 auto;
                height: auto;
            }
        </style>
    </head>
    <body>
        <section class="main">
            <?php include "header.php" ?>
            <?php include "body.php" ?>
            <?php include "footer.php" ?>
        </section>
    </body>
</html>