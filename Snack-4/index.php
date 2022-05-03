<?php 
// Snack 4
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
// Prendere il paragrafo e suddividerlo in tanti paragrafi. 
// Ogni punto un nuovo paragrafo.

// Data
    
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Qui voluptate ex provident iure fugit aliquam non explicabo aliquid, inventore maiores omnis quam possimus. 
    Nulla aspernatur cumque veniam sunt eaque inventore repudiandae provident. Corporis minima perspiciatis distinctio
    dicta nemo consectetur iusto nam vitae, aspernatur cupiditate. Quo dicta ea repellendus ipsam autem.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Qui voluptate ex provident iure fugit aliquam non explicabo aliquid, inventore maiores omnis quam possimus. 
    Nulla aspernatur cumque veniam sunt eaque inventore repudiandae provident. Corporis minima perspiciatis distinctio
    dicta nemo consectetur iusto nam vitae, aspernatur cupiditate. Quo dicta ea repellendus ipsam autem.';

    
$newText = explode('.', $text);

echo('<h2>' . 'Old text' . '</h2>');
echo($text);

echo('<h2>' . 'New text' . '</h2>');
for($i=0; $i < count($newText); $i++){
    echo "<p>" . $newText[$i] . "</p>";
}
?>