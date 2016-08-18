<?php
session_start();

class Layout
{
    public function addHeader()
    {
        echo "<!DOCTYPE html>\n<html lang='en'>";
        include "./head.php";
        echo "<body>\n";
        include "./shared/header.php";
    }

    public function addFooter()
    {
        include "./shared/footer.php";
        echo "\n</body>\n</html>";
    }
}