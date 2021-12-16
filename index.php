<?php 

// Stringa di testo di partenza
$text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. In nihil necessitatibus aut doloribus aliquam totam laborum. Porro vel, minus molestiae qui officiis, quis aspernatur sint quos tenetur recusandae enim tempore!';

// Frase Completa
echo '<strong>Frase completa:</strong><br>';
echo $text.'<br>';
echo 'Lunghezza: '.strlen($text).'<br><br>';

// Frase censurata
$textCensored = str_replace($_GET["censor"], "***", $text);
echo '<strong>Frase censurata:</strong><br>';
echo $textCensored.'<br>';
echo 'Lunghezza: '.strlen($textCensored);

?>