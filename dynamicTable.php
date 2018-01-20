<?include("connectToDB.inc.php");?>

<?	$sql="SELECT * FROM leaderboard
		  ORDER BY difficulty DESC, score DESC
		  LIMIT 7";
	$result = mysql_query($sql,$db);
	while($myrow=mysql_fetch_array($result))
	{
		if($myrow['difficulty']==0)
		{
			$difficulty = "Easy";
		}else if($myrow['difficulty']==1)
			{
			$difficulty = "Medium";
			
		}else if($myrow['difficulty']==2)
			{$difficulty = "Hard";
		}
		echo "	<tr>
					<td>
					<p><small>". $myrow['score'] ."</small></p>
					</td>
					<td>
					<p><small>". $myrow['name'] ."</small></p>
					</td>
					<td>
					<p><small>". $difficulty ."</small></p>
					</td>
					<td>
					<p><small>". $myrow['updated'] ."</small></p>
					</td>
				</tr>
			";
	}
?>
<?mysql_close($db);?>