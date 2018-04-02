<?php
    $thisPage = "games";
    include("header.php");
    require_once("searchbar.php");
    include("footer.php");
    // require_once("dao.php");
    // $dao = new Dao();
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
                    echo "<li>" . $value["name"] . "</li>";
                }
            }
         ?>
        </ul>

        <h2>Note</h2>
        <p>
            It is possible for me to pull steams full applist from the api, but right now it slows down heroku to a crawl.
            So I picked 10 of the apps and made a smaller list for showing the current implemented features.
        </p>
    </div>
