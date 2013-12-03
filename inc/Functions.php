<?php

function sanitize($string = '', $isFilename = false) {
    $string = preg_replace('/[^\w\-'. ($isFilename ? '~_\.' : ''). ']+/u', '-', $string);
    return mb_strtolower(preg_replace('/--+/u', '-', $string), 'UTF-8');
}

/*function escapeIt($file){
	if (($handle = fopen("files/$file", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, "	")) !== FALSE) {
        $num = count($data);
        
       	//mysql_query(INSERT INTO temneins(id, date) VALUES('', '$data[9]'));
       	//mysql_query(UPDATE temneins SET text = $data[10] WHERE ID = $row);
       	
       	//executeDB("INSERT INTO temneins(id,text) VALUES('','".mysql_real_escape_string($data[10])."')",$db);
       	
       	$row++;
        
        
        //echo $data[9] . "<br />\n";
        //echo $data[10] . "<br />\n";
        //for ($c = 9; $c < $num; $c++) {
        //  echo $data[$c] . "<br />\n";
        //}
    }
    fclose($handle);
}*/


?>