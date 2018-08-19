<?php
//$count = 0;
//while ($count++ < 5) {
//    var_dump($count);
//}
//
//$learn = [
//    'a',
//    'b',
//    'c'
//];

//// While loop
//while (list($key, $val) = each($learn)) {
//    echo "$key: $val \n";
//}

//// For loop
//for (; $count++ < 10;) {
//    var_dump($count);
//}
//
//for ($i = 0; $i < count($learn); $i++) {
//    var_dump($learn[$i]);
//}

// Foreach loop
$list = array();
$list[] = array(
    'title' => 'Laundry',
    'priority' => 2,
    'due' => '06/09/2016',
    'day' => 0,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Dishes',
    'priority' => 2,
    'due' => null,
    'day' => 0,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Dust',
    'priority' => 3,
    'due' => null,
    'day' => 5,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Vacuum',
    'priority' => 1,
    'due' => '06/09/2016',
    'day' => 1,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Make Dinner',
    'priority' => 1,
    'due' => null,
    'day' => 0,
    'repeat' => true,
    'complete' => false,
);
$list[] = array(
    'title' => 'Clean Out Fridge',
    'priority' => 2,
    'due' => '07/30/2016',
    'day' => 0,
    'repeat' => true,
    'complete' => true,
);

foreach ($list as $key => $item) {
    echo $key . ' = ' . $item['title'] . "<br/>";
}

echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';
foreach ($list as $item) {
    echo '<tr>';
    echo '<td>' . $item['title'] . "</td>\n";
    echo '<td>' . $item['priority'] . "</td>\n";
    echo '<td>' . $item['due'] . "</td>\n";
    echo '<td>' . ($item['complete'] ? 'Yes' : 'No') . "</td>\n";
    echo '</tr>';
}

usort(
    $list, function ($a, $b) {
        return $a['priority'] > $b['priority'];
    }
);

echo '<h1>After sorting</h1>';
foreach ($list as $item) {
    echo '<tr>';
    echo '<td>' . $item['title'] . "</td>\n";
    echo '<td>' . $item['priority'] . "</td>\n";
    echo '<td>' . $item['due'] . "</td>\n";
    echo '<td>' . ($item['complete'] ? 'Yes' : 'No') . "</td>\n";
    echo '</tr>';
}
