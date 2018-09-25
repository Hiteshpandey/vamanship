<?php
require_once "config/Database.php";

if (isset($_POST['urlvalue'])) {
	$urlvalue = $_POST['urlvalue'];
	echo "hhi";
	$db = new Database();
	$dbins = $db->connect();
	// Insert to database

	/*$di = new RecursiveDirectoryIterator($urlvalue, RecursiveIteratorIterator::SELF_FIRST);
	foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
	    echo $filename . ' - ' . $file->getSize() . ' bytes <br/>';
		 
		//get all files in specified directory
		$dirs = array_filter(glob($file), 'is_dir');
		print_r( $dirs);
	}*/

	$dir  = $urlvalue;
	$parent = NULL;
	$pid = 0;
	function getdir1($dir,$parent,$pid){
		$files1 = scandir($dir);
			foreach ($files1 as $value) {
				if($value!=".." && $value!="." && !empty($value))
				{	
					$parent = $dir."/".$value;
					$pid += 1;
					getdir1($parent,$value,$pid);
						if ($dir == "Folders") {
						echo "current : ".$value." ";
						echo "pid(parent) : ".$pid." ";
						echo "parent : ".$dir." "."<br>";

					}
					else{
						echo "current : ".$value." ";
						echo "PID : ".$pid." ";
						echo "parent : ".$dir." "."<br>";
					}
					
				

					// $query = "INSERT INTO folds ()";
					// $stmt = $dbins->prepare($query);
					// $stmt->execute();

				}
			}
	}

	getdir1($dir,$parent,$pid);

}
else
{
	echo "Please enter a url";
}

