<?php
$fruits1 = array('apple', 'banana', 'orange');
$fruits2 = array('banana', 'grape', 'kiwi');

// Merge two arrays
$mergedFruits = array_merge($fruits1, $fruits2);
print_r($mergedFruits);
echo '<br';

// Check if an element exists in the array
$searchItem = 'orange';
if (in_array($searchItem, $mergedFruits)) {
    echo "$searchItem exists in the array.\n";
    echo '<br';

} else {
    echo "$searchItem does not exist in the array.\n";
    echo '<br';

}

// Find the difference between two arrays
$diff = array_diff($fruits1, $fruits2);
print_r($diff);

// Find the difference between two arrays with key-value comparison
$fruits3 = array('apple' => 'red', 'banana' => 'yellow', 'orange' => 'orange');
$fruits4 = array('banana' => 'yellow', 'grape' => 'purple', 'kiwi' => 'green');

$diffAssoc = array_diff_assoc($fruits3, $fruits4);
var_dump($diffAssoc);

?>