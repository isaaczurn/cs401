<?php
    $thisPage="login";
    include("header.php");
    include("footer.php");
?>


    <div class="logincontainer">
        <form id="login" autocomplete="off" method="post" action="loginuser.php">
            <input id="username" type="text" name="username" placeholder="Username">
            <input id="password" type="text" name="password" placeholder="Password">
            <button type="submit" class="searchbutton">Login</button>
        </form>
    </div>
</body>
