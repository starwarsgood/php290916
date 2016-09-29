<?php
function printTree($level=l) { 
$d = @opendir("."); 
if (!$d) return; 
while (($e=readdir($d)) !== false) {  
if ($e=='.' || $e=='..') continue;  
if (!@is_dir($e)) continue; 
for ($i=0; $i<$level; $i++) echo " "; 
echo "$е\n"; 
if (!chdir($e)) continue; 
printTree($level+l); 
chdir(". ."); 
flush();
} 
closedir($d); 
} 
echo "<рге>"; 
echo "/\n"; 
chdir($_SERVER['DOCUMENT_ROOT']); 
PrintTree(); 
echo "</pre>"; 
?> 