<?php
include('func.php');

echo "Array memory usage example.".'<br>';
$base_memory_usage = memory_get_usage();
$base_memory_usage = memory_get_usage();
 
echo 'Base usage.'.'<br>'.PHP_EOL;
memoryUsage(memory_get_usage(), $base_memory_usage);
 
$a = array(
		someBigValue(), 
		someBigValue(), 
		someBigValue(), 
		someBigValue()
	);
 
echo 'Array is set.'.'<br>'.PHP_EOL;
memoryUsage(memory_get_usage(), $base_memory_usage);
$b = &$a;
//echo '<br>';
//xdebug_debug_zval('a');
//echo '<br>';

foreach ($a as $k=>$v) {
	$a[$k] = someBigValue();
	
	//echo '<br>';
	//xdebug_debug_zval('v');
	//echo '<br>';
	
	unset($k, $v);
	echo 'In FOREACH cycle.'.'<br>'.PHP_EOL;
	memoryUsage(memory_get_usage(), $base_memory_usage);
}

unset($b);
echo 'Usage right after FOREACH.'.'<br>'.PHP_EOL;
echo 'Array unset.'.'<br>'.PHP_EOL;
memoryUsage(memory_get_usage(), $base_memory_usage);
?>