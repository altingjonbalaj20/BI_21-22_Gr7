<?php
    class Post{
        public function __construct($post)
        {
            $id = $post['id'];
            $image = $post["imagename"];
            $title = $post["title"];
            echo 
            "<div class='photo-container' onclick='location.href=`../content/viewpost.php?id=$id`;' style='cursor: pointer;'>
            <figure>
                <img src='../img/fourthwebsite/$image' alt='gallery image' srcset='' width='240px' height='240px' />
                <figcaption>$title</figcaption>
            </figure>
            </div>";
        }
    }