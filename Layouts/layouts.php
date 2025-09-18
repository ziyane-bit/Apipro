<?php
class layouts {

public function heading($conf) {

    echo "Welcome to " . $conf['site_name'] . "!";
}

public function welcome($conf) {

    echo "<p>Empowering your transfers, Empowering you</p>";

}

public function footer($conf) {

    echo"<footer>
    
    copyright &copy; " . date("Y") . " " . $conf['site_name'] . "

    </br></br>contact us at <a href='mailto:{$conf['site_email']}'> {$conf['site_email']}</a></footer>";
}

}