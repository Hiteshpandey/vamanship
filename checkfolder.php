<style type="text/css">
	td {
    text-align: center;
}

table{
	margin: 0 auto;
}
</style>
<?php
require_once "config/Database.php";
require_once "Includes/gettoken.php";
//echo "Session value : ".$_SESSION['csrf_token'];

if ($_POST['csrf_token'] === $_SESSION['csrf_token']) {

if (isset($_POST['urlvalue'])) {
	$urlvalue = $_POST['urlvalue'];
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

/*echo "<table border=1 width=500>
		<tr>
			<th>value</th>
			<th>Level</th>
			<th>Parent directory</th>
		</tr>";
	$dir  = $urlvalue;
	$parent = NULL;
	$pid = 0;

	function getdir1($dir,$parent,$pid){
		$pid ++;
		$files1 = scandir($dir);
		print_r($files1);
			foreach ($files1 as $value) {
				if($value!=".." && $value!="." && !empty($value))
				{	
					$parent = $dir."/".$value;
					getdir1($parent,$value,$pid);
						if ($dir == "Folders") {
						// echo "current : ".$value." ";
						// echo "pid(parent) : ".$pid." ";
						// echo "parent : ".$dir." "."<br>";
						 echo "
								
								<tr>
									<td>".$value."</td>
									<td>0</td>
									<td>".$dir."</td>
								</tr>";

					}
					else{
						echo "

								<tr>
									<td>".$value."</td>
									<td>".$pid."</td>
									<td>".$dir."</td>
								</tr>
						";
					}
					
				

					// $query = "INSERT INTO folds ()";
					// $stmt = $dbins->prepare($query);
					// $stmt->execute();

				}
			}
	}
*/

	$did = 0;

	function getdir1($dir,$did){
		$result = array();
		$files1 = scandir($dir); // get files on each level
		$did += 1; //calculate depth
		foreach ($files1 as $key=>$value) {
			if($value!=".." && $value!="." && !empty($value))
			{	
				$link = $dir."/".$value; // create a link appending the root path
				// echo $value."<br>";
				$result['parent'] = $dir; // set parent index
				if (is_dir($link)) // if directory
				{
					$result['depth'] = $did;
					$result[$value] = getdir1($link,$did);
				}
			}
		}

		return $result;
	}

	if (file_exists($urlvalue)) {
	echo "<pre>";
	$results = getdir1($urlvalue,$did);
	print_r($results);

	$jsonval = json_encode($results);
	$query = "INSERT INTO folds (fname,paths) values (:fname,:paths)";
			$stmt = $dbins->prepare($query);
					$stmt->bindParam(':paths', $jsonval);
					$stmt->bindParam(':fname', $urlvalue);
					$stmt->execute();
	echo "insert done";
	session_unset();
	generateToken();
		}
	else
	{
		echo "Filed directory not found!!!";
	}
	$dbins = NULL;

}
else
{
	echo "Please enter a url";
	// session_unset();
	// generateToken();
}

}

else
{
	echo "Access mismatch. Try reloading the form";
}

// $filedata = getdir1($urlvalue);
// $did = 0;
// $previousValue = NULL;
// function nestecho($data,$did,$dbins,$pval){
// 	$did += 1;
// 	foreach ($data as $key => $value) {
// 		if (is_array($value)) {
// 			echo $key."<br>	";
// 			echo $did."<br>";
// 			$query = "INSERT INTO folds (fname,did) values (:firstname,:did)";
// 			$stmt = $dbins->prepare($query);
// 				    $stmt->bindParam(':firstname', $key);
// 					$stmt->bindParam(':did', $did);	
// 					$stmt->execute();
// 			nestecho($value,$did,$dbins,$pval);
// 		}
// 		else
// 		{
// 			$query = "INSERT INTO folds (fname,did) values (:firstname,:did)";
// 			$stmt = $dbins->prepare($query);
// 					$stmt->bindParam(':firstname', $key);
// 					$stmt->bindParam(':did', $did);	
// 					$stmt->execute();
// 			echo $key."<br>";
// 			echo $did."<br>";
// 		}
// 	}
// 	$previousValue = $did;
// 	$conn = NULL;
// }

//nestecho($filedata,$did,$dbins,$previousValue);

