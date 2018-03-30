<html lang="en">
<?php session_start();?>
<head>
    <link href=<?php if ($thisPage == "index") {echo '"src/style.css"';} else {echo '"style.css"';} ?> type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>steam FYI</title>
</head>

<body>

    <div class="navbar">
        <span><b>steam</b>.fyi</span>
        <ul>
            <li <?php if ($thisPage == "login") {echo 'class="currentpage"';}?>>
                <a href=<?php
                if (isset($_SESSION['logged']) && $_SESSION['logged']) { $logged = true;} else { $logged = false; }
                if (!$logged) {
                    if ($thisPage == "index") {
                        echo '"src/login.php" >';
                    } else {
                        echo '"login.php" >';
                    }
                    echo "Login";
                } else {
                    if ($thisPage == "index") {
                        echo '"src/logout.php" >';
                    } else {
                        echo '"logout.php" >';
                    }
                    echo "Logout";
                }
                // if (isset($_SESSION['logged']) && $_SESSION['logged']) { echo "Logout";} else { echo "Login"; }?>
                </a>
            </li>
            <li <?php if ($thisPage == "games") {echo 'class="currentpage"';}?>>
                <a href=<?php if ($thisPage == "index") {echo '"src/games.php"';} else {echo '"games.php"';}?>>Games</a>
            </li>
            <li <?php if ($thisPage == "index") {echo 'class="currentpage"';}?>>
                <a href=<?php if ($thisPage == "index") {echo '"index.php"';} else {echo '"../index.php"';} ?>>Home</a>
            </li>
        </ul>
    </div>
