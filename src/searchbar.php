    <form class="searchbar" autocomplete="off" action=<?php if ($thisPage == "index") {echo '"src/search.php"';} else {echo '"search.php"';}?>>
        <!-- <i class="material-icons">search</i> -->
        <input id="searchbar" type="text" name="search" placeholder="Search">
        <button type="submit" value="Search" class="searchbutton">fyi</button>
    </form>
