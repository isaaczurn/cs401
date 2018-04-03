<?php
    require_once('header.php');
    require_once('dao.php');
    $dao = new Dao();
    $search_term = $_GET['search'];
    $game = $dao->getGame($search_term);
    if(!$game){
        header("Location: games.php");
    }
    $appid = $game['applist_apps_appid'];
    $gamename = $game['applist_apps_name'];
?>

    <div class="game">
        <h1><?php echo $game['applist_apps_name']?></h1>
        <?php
        $curUrl = 'http://api.steampowered.com/ISteamUserStats/GetNumberOfCurrentPlayers/v0001/?appid=' . $appid;
        $players = json_decode(file_get_contents($curUrl, true), true);
        $players = $players["response"];
        $players = $players["player_count"];
        echo "<h2>Current Players: "  . $players .  "</h2>";
        ?>
        <div class="news">
            <h1>News</h1>
            <p>
            <?php
                $curUrl = 'http://api.steampowered.com/ISteamNews/GetNewsForApp/v0001/?appid=' . $appid;
                $news = json_decode(file_get_contents($curUrl, true), true);
                $appnews = $news['appnews'];
                $newsitems = $appnews['newsitems'];
                $newsitems = $newsitems['newsitem'];
                foreach ($newsitems as $newsitem) {
                    echo "<h2>" . "<a href=" . $newsitem['url'] . ">" . $newsitem['title'] . "</h2>";
                    echo $newsitem['contents'];
                }
             ?>
            </p>
        </div>
    </div>

</body>

<?php
    require_once('footer.php');
?>
