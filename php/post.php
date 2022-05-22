<?php
    class Post{
        public function __construct($post)
        {
            $image = $post["imagename"];
            $title = $post["title"];
            echo 
            "<div class='photo-container'>
            <figure>
                <img src='../img/fourthwebsite/$image' alt='gallery image' srcset='' width='240px' height='240px' />
                <figcaption>$title</figcaption>
            </figure>
            </div>";
        }
    }