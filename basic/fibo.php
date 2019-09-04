<?php 
# Tinh gia tri 40 so dau tien cua day fibo dua vao mang va in ra duoi dang bang
#|   STT    |   Gia tri |
#|   1      |   1       |
#|   2      |   1       |
#|   3      |   2       |
#|   4      |   3       |
#|   5      |   5       |
#|   ...    |   ...     |

?>
<h1>Fibo</h1>
<?php 
	require 'lib/functions.php';
	$fibo[] = 1;
	$fibo[] = 1;
	for ($i=2; $i < 39; $i++) { 
	 	$fibo[$i] = $fibo[$i - 1] + $fibo[$i - 2];
	 } 

	 printArray($fibo);
 ?>