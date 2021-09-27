<?php
$counter_name = "counter.txt";

// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counter = ( int ) fread($f, filesize($counter_name));
fclose($f);

// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counter++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counter);
  fclose($f); 
}
$counter = (string) $counter;
for($i=0;$i<strlen($counter);$i++)
	{
	switch($counter[$i])
        { 
        case '0':
        echo "<img src=static/counter/0.png class='counter'>";
        break;
        case '1':
        echo "<img src='static/counter/1.png' class='counter'>";
        break;
        case '2':
        echo "<img src='static/counter/2.png' class='counter'>";
        break;
        case '3':
        echo "<img src='static/counter/3.png' class='counter'>";
        break;
        case '4':
        echo "<img src='static/counter/4.png' class='counter'>";
        break;
        case '5':
        echo "<img src='static/counter/5.png' class='counter'>";
        break;
        case '6':
        echo "<img src='static/counter/6.png' class='counter'>";
        break;
        case '7':
        echo "<img src='static/counter/7.png' class='counter'>";
        break;
        case '8':
        echo "<img src='static/counter/8.png' class='counter'>";
        break;
        case '9':
        echo "<img src='static/counter/9.png' class='counter'>";
        break;
        }
    }
?>