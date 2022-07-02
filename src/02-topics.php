<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/02-sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/02-questions.css">
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

    <div class="question-container">

        <!--Side navigation bar-->
        <div class="sidebar-placeholder">
        </div>
        <script>
            $(function(){
                $(".sidebar-placeholder").load("02-sidebar.php");
            });
        </script>
        <!--end of side navigation bar-->
    
        <div id="content">

        </div>
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
</body>