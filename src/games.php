<?php
    $thisPage = "games";
    include("header.php");
    include("footer.php");
?>

    <div class="gameslistcontainer">
        <ul>
        <?php
            $file = 'applistsmall.json';
            $json = file_get_contents($file, true);
            // var_dump(json_decode($json, true));
            $json = json_decode($json, true);
            $json = $json["applist"];
            $json = $json["apps"];
            foreach ($json as $value) {
                if($value["appid"] > 9){
                    $curUrl = 'http://api.steampowered.com/ISteamUserStats/GetNumberOfCurrentPlayers/v0001/?appid=' . $value["appid"];
                    $players = json_decode(file_get_contents($curUrl, true), true);
                    // var_dump($players);
                    $players = $players["response"];
                    $players = $players["player_count"];
                    echo "<li>" . $value["name"] . "\t Current Players: "  . $players .  "</li>";
                }
            }
         ?>
        </ul>
    </div>
