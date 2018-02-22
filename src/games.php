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
                    echo "<li>" . $value["name"] . "</li>";
                }
            }
         ?>
        </ul>
    </div>
