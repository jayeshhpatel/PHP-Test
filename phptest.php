<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Odesk test</title>
</head>

<body>


<strong>And expect this output:</strong><br>
+----------+---------+---------+----------+<br>
| Name     | Color   | Element |  Likes   |<br>
+----------+---------+---------+----------+<br>
| Trixie   | Green   | Earth   | Flowers  |<br>
| Tinker   | Blue    | Air     | Singing  |<br>
| Blum     | Pink    | Water   | Dancing  |<br>
+----------+---------+---------+----------+<br>

<br>
<?php

$array = array(
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ), 
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
        ),
);

$html = '<table border="2" cellspacing="2" cellpadding="5">';

// header row
$html .= '<tr>';

foreach($array[0] as $key=>$value)
	$html .= '<th>' . $key . '</th>';

$html .= '</tr>';

// data row
foreach($array as $val):
	$html .= '<tr>';
		$html .= '<td>' . $val['Name'] . '</td>';
		$html .= '<td>' . $val['Color'] . '</td>';
		$html .= '<td>' . $val['Element'] . '</td>';
		$html .= '<td>' . $val['Likes'] . '</td>';
	$html .= '</tr>';	
endforeach;

$html .= '</table>';

echo $html;
?>
</body>
</html>
