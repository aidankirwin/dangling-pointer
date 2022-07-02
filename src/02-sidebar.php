<div id="sidebar">
    <div id="sidebar-content">
        <ul id="home">
            <li>
                <div><a href="index.php">Home</a></div>
            </li>
        </ul>
        <div id="public">PUBLIC</div>
        <ul>
            <li>
                <div id="questions">
                    <a href="02-questions.php">
                        <i class='fa fa-globe'></i>
                        <span>Questions</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="nav"><a href="02-topics.php">Topics</a></div>
            </li>
            <li>
                <div class="nav"><a href="02-users.php">Users</a></div>
            </li>
            <li>
                <div class="nav"><a href="#">About</a></div>
            </li>
        </ul>
    </div>
</div>

<!-- Change the colour of the button on the navbar corresponding to the current page -->
<script>
    let current_url = document.location;
    document.querySelectorAll("#sidebar-content ul li div a").forEach(function(e){
       if(e.href == current_url){
        e = e.parentNode.parentNode;
        e.classList += "active";
       }
    });
</script>