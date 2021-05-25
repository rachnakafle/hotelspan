<!DOCTYPE html>
<html lang="en">
	<header>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP Upload File With Progressbar</title>
		
		
	</header>
	<body>

				
					<a href="index.php" class="btn btn-info">Go Back</a>
				
					<br/>
					<?php 
						$conn = mysqli_connect("localhost","root","","phpfiles");
						
						$query = "SELECT *FROM UserFiles";
						
						$result = mysqli_query($conn, $query);
						
						if(mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
							
					?>

								<img src="<?php echo $row['FilePath'];?>" height="100px" width="100px">
					<?php
							}
						}
						else
						{
					?>
						<p>There are no images uploaded to display.</p>
					<?php
						}
					?>					
			
			
	
		
			
	</body>
</html>