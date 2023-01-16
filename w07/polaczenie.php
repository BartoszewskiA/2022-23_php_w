<!-- <?php
$con = mysqli_connect("localhost","student","123");
mysqli_select_db($con,"wyklad");
$tabela = "przedmioty";
$query = "SELECT * FROM $tabela";
$result = mysqli_query($con,$query);
	
	if($result){
		while($row = mysqli_fetch_array($result)){
			$name = $row[""];
			echo "Nazwa: ".$name."br/>";
		}
    }
?> -->
<?php
	$hostname="localhost";
	$username="student";
	$password="123";
	$dbname="wyklad";
	$usertable="przedmioty";
	$yourfield = "nazwa";
	
	$con = mysqli_connect($hostname,$username, $password);
	mysqli_select_db($con,$dbname);
	
	# Sprawdź, czy dany rekord istnieje
	
	$query = "SELECT * FROM $usertable";
	
	$result = mysqli_query($con,$query);
	
	if($result){
		while($row = mysqli_fetch_array($result)){
			print_r($row);
			echo "<br><br>";
		}
		// while($row = mysqli_fetch_assoc($result)){
		// 	print_r($row);
		// 	echo "<br><br>";
            // foreach($row as $klucz=>$wartosc)
            // {
            //     echo $klucz."  -  ".$wartosc."<br>";
            // }
		// }
	}
?>