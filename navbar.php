<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img id="wits_logo" src="images/WiTSLogo.png" alt="WITS"/></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
<!--                <li><img id="wits_logo" src="images/WiTSLogo.png" alt="WiTS"/></li>-->
				<li <?php if (isset($home)) echo 'class="active"'; ?>><a href="index.php">Home</a></li>
				<li <?php if (isset($about)) echo 'class="active"'; ?>><a href="news.php">Members</a></li>
				<li <?php if (isset($portfolio)) echo 'class="active"'; ?>><a href="minutes.php">Minutes</a></li>
				<li <?php if (isset($members)) echo 'class="active"'; ?>><a href="members.php">Calendar</a></li>
                <li <?php if (isset($wetalktech)) echo 'class="active"'; ?>><a href="wetalktech.php">We Talk Tech</a></li>
				<li <?php if (isset($relatedlinks)) echo 'class="active"'; ?>><a href="members.php">Related Links</a></li>
				<li <?php if (isset($contact)) echo 'class="active"'; ?>><a href="#">Contact</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>