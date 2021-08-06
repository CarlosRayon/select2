<?php

/* Search Data */
$search = $_POST['search'];
// var_dump($search);

// . . .

/* Format data  https://select2.org/data-sources/formats*/
$data = ['results' => [
    ['id' => 'id-one', 'text' => 'text-one'],
    ['id' => 'id-two', 'text' => 'text-two']
]];

echo json_encode($data);
