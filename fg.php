<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<center><h1>FORM GENERATOR</h1></center>

	ANSWER ELEMENTS: <button value="submit">TEXT   AREA </button>
	<button value="submit">RADIO BUTTON</button>
	<button value="submit">CHECK   BOX </button>
	<button value="submit">DATE TIME   </button> <br><br>

	Your Question: 
	<form name="Form Generator" method="POST" action="fg.php">
	<input type="text" name="qa">
	<input type="submit"  value="submit" onclick="qsfn()" name="submit"> <br>
</form>

	<script type="text/javascript">
		
		function qsfn()
		{

		}

	</script>
</body>
</html>

<?php
			if(isset($_POST["qa"]))
			{
				$conn = mysqli_connect("localhost", 'harsha', 'harsha123','db1');

				$txt=$_POST["qa"];
				$sql="INSERT INTO data1 values(null,'$txt')" ;
				mysqli_query($conn, $sql);				

				if (!$conn)
				 {
 				 die("Connection failed: " . mysqli_connect_error());
				 }
			} 
					$disp = "SELECT id, question FROM data1";
					$result = mysqli_query($conn, $disp);

					if (mysqli_num_rows($result) > 0) 
					{
 
 					 while($row = mysqli_fetch_assoc($result)) 
 					 {
    				echo $row["id"]. " " . $row["question"]. " " . "<br>";
  					}
  				}				
?>