<?php
echo "- Voer een getal in" . PHP_EOL;
$aantal = readline("- ");
$getal = 1;
$totaal = 1;   
if (is_numeric($aantal)) {
    while ($getal <= $aantal) {
        $totaal = $totaal * $getal;
        $getal++;
    }  
}

echo "Je antwoord is: " . ($totaal);