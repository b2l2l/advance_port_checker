<?php 
$host = $_POST['host'];
$ports = array($_POST['checks']);

foreach ($ports as $port)
{
    $connection = @fsockopen($host, $port);

    if (is_resource($connection))
    {
     $output= '<h2><center>' . $host . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ') is open.</center></h2>' . "\n";
		echo $output;
        fclose($connection);
    }

    else
    {
    }
} 

if(strstr($output, "2083 () is open"))
 {
 echo "Cpanel port in open ";
 }
 
 
	
?>
