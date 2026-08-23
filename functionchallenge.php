<?php

$names = ['Sandy', 'Jude', 'Emeka', 'pluto'];
function printNamesToUpperCase($names) {
    foreach($names as $name) {
        $upperCaseName = strtoupper($name);
        echo $upperCaseName . '<br>';
    };
};
printNamesToUpperCase($names);

$sentence = 'This is where web Development get tricky';
function findLongestWord($sentence) {
    $words = explode(' ', $sentence);

    $longestWord = '';
foreach($words as $word) {
    $word = trim($word);

    if(strlen($word) > strlen($longestWord) || $longestWord === '')
        {
    $longestWord = $word;
        }
}
return $longestWord;
}
echo findLongestWord($sentence);
?>