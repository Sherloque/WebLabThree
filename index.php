<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
		include ("connection.php");
		$sql = "SELECT id, type, source FROM content";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				if($row["type"]=='iframe'){
				echo	"<iframe width=\"1349\" height=\"489\" src=\"$row[source]\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
				}
				else if($row["type"]=='image'){
				echo "<img src=\"image/$row[source]\">";
			}
				else if($row["type"]=='audio'){
					echo "<audio src=\"audio/$row[source]\" controls></audio>";
				}
				else if($row["type"]=='video'){
					echo "<video src=\"video/$row[source]\"></video>";
				}

		}
	}

			?>
	</body>
</html>
