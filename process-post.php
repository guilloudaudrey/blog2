<?php
$title = $_POST['title'];
$content = $_POST['content'];
echo '<p>title: ' . $title . '</p>';
echo '<p>content: ' . $content . '</p>';

if(!is_dir('posts')){
    mkdir('posts');
}
 
$file = fopen('posts/'.$title . '.txt', 'w');
fwrite($file, $content);
fclose($file);
echo '<p>Well done! You have created a new post!</p>'



?>