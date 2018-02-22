<html lang="en">

<head>
    <link href=<?php if ($thisPage == "index") {echo '"src/style.css"';} else {echo '"style.css"';} ?> type="text/css" rel="stylesheet">
</head>

<body>

    <div class="navbar">
        <span><b>steam</b>.fyi</span>
        <ul>
            <li <?php if ($thisPage == "login") {echo 'class="currentpage"';}?>>
                <a href=<?php if ($thisPage == "index") {echo '"src/login.php"';} else {echo '"login.php"';}?>>Login</a>
            </li>
            <li <?php if ($thisPage == "games") {echo 'class="currentpage"';}?>>
                <a href=<?php if ($thisPage == "index") {echo '"src/games.php"';} else {echo '"games.php"';}?>>Games</a>
            </li>
            <li <?php if ($thisPage == "index") {echo 'class="currentpage"';}?>>
                <a href=<?php if ($thisPage == "index") {echo '"index.php"';} else {echo '"../index.php"';} ?>>Home</a>
            </li>
        </ul>
    </div>
