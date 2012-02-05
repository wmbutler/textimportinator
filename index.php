<?php

// Directory containing csv file(s)
$path = "/p/dev/ftp/optimal/in";
// Name of csv file(s), pattern matching accepted
$filename = "NRG_01032012.csv";
// Strip off leading lines
$trimlead = 3;
// Strip off trailing lines
$trimtrail = 2;
// Strip out blank lines
$trimblank = 1;


// Merge files (reconsider this)
// $filename = "merged_" . date('Ymd');
// Merge files
//echo "merging...\n";
//exec ('cat /p/prod/ftp/firsttn/in/frvx880t.* > /p/prod/ftp/firsttn/in/merged_`date +%Y%m%d`');

//include ('/var/www/html/dbconnect.php');
//date_default_timezone_set('America/Chicago');


$row = 1;
if (($handle = fopen("$path/$filename", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { 
	$num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        	for ($c=0; $c < $num; $c++) {
            	echo $data[$c] . "<br />\n";

	}
    }
    fclose($handle);
}
?>
