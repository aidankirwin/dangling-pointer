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
<body onload="typeWriter()">    
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

            <div id = "type-container">
                <table>
                    <tr>
                        <td id="type"></td>

                        <script>
                        
                            var i = 0;
                            var j = 0;
                            var txt = 'test test test test...';
                            var speed = 60;

                            function typeWriter() {
                                if(i < txt.length) {
                                    document.getElementById("type").innerHTML += txt.charAt(i);
                                    i++;
                                    setTimeout(typeWriter, speed);
                                }
                                else {
                                    delay(1000).then(() => {
                                        typeDeleter();
                                    });    
                                }
                            }

                            function typeDeleter() {
                                if(i >= 0) {
                                    document.getElementById("type").innerHTML = 
                                        (document.getElementById("type").innerText).slice(0, (document.getElementById("type").innerText).length - 1);
                                    i--;
                                    setTimeout(typeDeleter, speed);
                                }
                                else{
                                    delay(1000).then(() => {
                                        typeWriter();
                                    });                                    
                                }
                            }

                            function delay(ms) {
                                return new Promise(resolve => setTimeout(resolve, ms));
                            }

                        </script>
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