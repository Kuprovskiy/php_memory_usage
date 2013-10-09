<?php
function memoryUsage($usage, $base_memory_usage) {
	printf("Bytes diff: %d\n", $usage - $base_memory_usage).'<br>';
}

function someBigValue() {
	return str_repeat('SOME BIG STRING', 1024);
}
?>