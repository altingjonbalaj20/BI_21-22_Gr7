<?php
class Posts
{
    public function __construct($postQuery)
    {
        include('post.php');
        require_once('../database/database.php');
        $db = new Database();
        $retval = $db->execQuery($postQuery, "Error on fetching Post Data for Gallery");
        echo "<div class='photos-container'>";
        while ($row = mysqli_fetch_assoc($retval)) {
            new Post($row);
        }
        echo "</div>";
    }
}
