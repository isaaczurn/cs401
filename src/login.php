<?php
    $thisPage="login";
    include("header.php");
    include("footer.php");
?>


    <div class="logincontainer">
        <h1>Login</h1>
        <form id="login" autocomplete="off" method="post" action="loginuser.php">
            <input id="username" type="text" name="username" placeholder="Username" required>
            <input id="password" type="password" name="password" placeholder="Password" pattern="^(?=.*\d).{4,8}$" title="Please enter a password 4-8 characters long, with at least one number and one letter." required>
            <button type="submit" class="searchbutton loginbutton">Login</button>
        </form>
    </div>
    <div class="logincontainer">
        <h1>Create a new user</h1>
        <p>Password must have one letter and one number, 4-8 characters in length.</p>
        <form id="create" autocomplete="off" method="post" action="createuser.php">
            <input id="newusername" type="text" name="username" placeholder="Username" required>
            <input id="newpassword" type="password" name="password" placeholder="Password" pattern="^(?=.*\d).{4,8}$" title="Please enter a password 4-8 characters long, with at least one number and one letter." required>
            <button type="submit" class="searchbutton loginbutton">Create</button>
        </form>
    </div>
</body>
