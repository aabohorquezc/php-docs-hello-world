<?php
$image = 'https://i.pinimg.com/736x/7a/9c/fb/7a9cfb9d6a0c58904d3c980af64400d0.jpg';
$imageData = base64_encode(file_get_contents($image));
echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
echo "Wu Ji Bi Fan que significa vamos a dormir mi chitita hermosa te amo";
?>
