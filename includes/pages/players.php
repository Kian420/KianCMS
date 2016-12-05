	<div class="content">
		<div class="post">
			<table class="players">
				<tr>
					<th>Player Name</th>
					<th>Class</th>
					<th>Level</th>
					<th>Zone</th>
					<th>Latency</th>
					<th>Kills</th>
				</tr>

	<?php
		$sql = "SELECT * FROM $dbnamec WHERE online=1";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
				?>
				<tr>
					<td><?php echo $row['name'] ; ?></td>
		<?php
			if($row['class']=="1")
			{
				$class="Warrior";
			} 
			elseif($row['class']=="2")
			{
				$class="Paladin";
			}
			elseif($row['class']=="3")
			{
				$class="Hunter";
			}
			elseif($row['class']=="4")
			{
				$class="Rogue";
			}
			elseif($row['class']=="5")
			{
				$class="Priest";
			}
			elseif($row['class']=="6")
			{
				$class="Death Knight";
			}
			elseif($row['class']=="7")
			{
				$class="Shaman";
			}
			elseif($row['class']=="8")
			{
				$class="Mage";
			}
			elseif($row['class']=="9")
			{
				$class="Warlock";
			}
			elseif($row['class']=="10")
			{
				$class="Monk";
			}
			elseif($row['class']=="11")
			{
				$class="Druid";
			} else
			{
				$class="unknown";
			}
		?>
				<td><?php echo $class; ?></td>
					<td><?php echo $row['level'] ; ?></td>
					<td><?php echo $row['Zone'] ; ?></td>
					<td><?php echo $row['latency'] ; ?></td>
					<td><?php echo $row['totalKills'] ; ?></td>
				</tr>
				
		<?php
				}
			}
			$con->close();
		?>
			</table>
		</div>
</div>