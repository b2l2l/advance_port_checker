<?php 
$host = $_POST['host'];
$ports = array(2083);

foreach ($ports as $port)
{
    $connection = @fsockopen($host, $port);

    if (is_resource($connection))
    {
     $output= '<h2>' . $host . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ') is open.</h2>' . "\n";
		echo $output;
        fclose($connection);
    }

    else
    {
        echo '<h2>' . $host . ':' . $port . ' is not responding.</h2>' . "\n";
    }
} 

if(strstr($output, "2083 () is open"))
 {
 echo "Cpanel port in open ";
 }
 
 
	
?>
