<?php


$teachers = array('Joey', 'Theo', 'Jelle');

echo $teachers[1];

$teachers[1] = 'ed';

//var_dump($teachers);
//print_r($teachers);

for($i =0; $i < 3; $i++)

   echo '<p>' . $teachers[$i] . '</p>' ;

array_push($teachers, 'Gerrit', 'Leo', 'Hugo', 'Birgit');

$teachers[] = 'Ingrid';

foreach ($teachers as $one_teachers)
    echo '<p>' . $one_teachers . '</p>';

//associative array

$subject = array('ingrid => Bap', 'Joey => Pro', 'Jelle => Fro');

echo $subject['ingrid'];

foreach ($subject as $teacher => $one_subject){
    echo $teachers . 'teachers' . $subject . '<br>';
}

