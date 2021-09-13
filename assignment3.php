<h2>XML with PHP</h2>
<link rel="stylesheet" type="text/css" href="style3.css">
<?php
$xml=simplexml_load_file("assignment1.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
echo "<p id='title'><strong style='color:red;'>" . $books->title . "</strong>, ";
echo $books->author . ", ";
echo "<b style='color:brown;'>".$books->year . "</b>, ";
echo "<i style='color:purple'>".$books->price . "</i>, ";
echo "<u>".$books->publication . "</u>, ";
echo $books->sold . ", ";
echo "<strong id='date'>".$books->date . "</strong></P>";
}
?>
