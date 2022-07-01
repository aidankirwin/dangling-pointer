<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/00-index.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="scripts/dropdown.js"></script>
    <title>Dangling Pointer</title>
</head>
<body>    
    <!--Navigation bar-->
    <div class="nav-placeholder">
    </div>
    <script>
        $(function(){
            $(".nav-placeholder").load("nav.php");
        });
    </script>
    <!--end of Navigation bar-->

    <div class = "section">
        <div id = "intro">
            <img id = "big-logo" src = "images/logo_box.png">
            <p>Welcome to <b>Dangling Pointer</b>!</p>
            <p>Find the nicest answers to your software questions, 
                    and provide others with nice answers to theirs</p>

            <hr class = "solid">
            <div id = "topics">
                <p>Several topics, including...</p>
                <table>
                    <tr>
                        <td><a href = "#">C++</a></td>
                        <td><a href = "#">C#</a></td>
                        <td><a href = "#">Python</a></td>
                    </tr>
                    <tr>
                        <td><a href = "#">HTML</a></td>
                        <td><a href = "#">CSS</a></td>
                        <td><a href = "#">JavaScript</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div id = "join">
            <img id = "earth-img" src = "images/earth.png">
            <p><b>A public forum for nice people to give or recieve help with their code</b></p>
            <p>A community and moderator driven space for finding or 
                providing answers to technical challenges, with nice-ness at every corner!</p>
            <div class = "button"><a href = "01-signup.php">Join</a></div>
            <div class = "button"><a href = "02-questions.php">Search content</a></div>
        </div>

        <!--Footer-->
        <div id="foot-placeholder">
        </div>
        <script>
            $(function(){
                $("#foot-placeholder").load("footer.html");
            });
        </script>
        <!--end of Footer-->
    </div>
</body>
</html>