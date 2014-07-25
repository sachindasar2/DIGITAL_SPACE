<div id="horizon">
	<div class="band2">
		<ul>
			<li><form action="get_bloginfo2.php" method="POST">
				<label for="sort">SORT BY</label><select name="sort" id="sort">
				<option value="o" selected>none</option>
				<option value="l">LIKES</option>
				<option value="v">VIEWS</option>
				<option value="r">RATING</option>
				<option value="d">DATE</option>
				<option value="a">SHOW ALL</option>
			</select>
			<input type="submit" name="submit" id="hsubmit">
		</form></li>
		<li></li>
	</ul>
</div>
<div id="boxdiv">
	<?php	echo $blogbody; ?>
	<div class="band3">
		<ul>
			<?php	echo $paginationCtrls; ?>
		</ul>
	</div>
</div>
</div>