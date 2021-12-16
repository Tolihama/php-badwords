<?php 

$text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. In nihil necessitatibus aut doloribus aliquam totam laborum. Porro vel, minus molestiae qui officiis, quis aspernatur sint quos tenetur recusandae enim tempore!';

// Frase Completa
echo 'Frase completa:';
echo '<br>';
echo $text;

echo '<br><br>';

// Frase censurata
echo 'Frase censurata:';
echo '<br>';
echo str_replace($_GET["censor"], "***", $text);

?>