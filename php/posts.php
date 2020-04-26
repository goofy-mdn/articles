<?php 
		include('../php/db.php');
        include('../php/parsedown/Parsedown.php');

        $getart = "SELECT * FROM `articles`";
        $result = mysqli_query($conn, $getart);
        while($data = mysqli_fetch_array($result)) {
            /// $Parsedown = new Parsedown();
            $originalcontent = $data["content"];
            $first = str_replace('#', '', $originalcontent);
            $second = str_replace('*', '', $first);
            $last = str_replace('>', '', $second);
            echo '<div class="article">';
            echo '<div class="imgcontainer" style="background-image: url(\'../upload/' . $data["id"] . '.' . $data["icon"] . '\')"></div>';
            echo '<div class="article-content"><span>' . $data["category"] . '</span><h1>' . $data["title"] . '</h1><div class="text-container"><p>' . $last . '</p></div><a class="button-main" href="#"><span>Lire la suite</span></a></div>';
            echo '</div>';
        }
?>