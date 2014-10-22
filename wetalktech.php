<?php 
	$talk = array();
	$talk['theme'] = "We Start Tech";
	$talk['date'] = "March 12th, 2014 6:00pm-8:00p.m.";
	$talk['location'] = "Volta Labs (5415 Spring Garden Rd)";
	$talk['keynote'] = "Sreejata Chatterjee (Co-founder and CPO, Leadsift)";
	$talk['present'] = "Sage Franch (Lead Technical Evangelist Intern, Microsoft)";

	$sponsors = array(
		array('name' => 'Computer Science Faculty', 'img' => 'FCS.png'),
		array('name' => 'Computer Science Society', 'img' => 'CSS.png'),
		array('name' => 'Candian Women in Technology', 'img' => 'CanWIT.png')
	);
?>
<!DOCTYPE html>
<html lang="en">
	<?php include('head.php') ?>
	<body>
		<?php $wetalktech = true ?>
		<?php include('navbar.php') ?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>We Talk Tech</h1>
			</div>
			
			<div class="row">
				<div class="col-xs-12">
					<img src="images/WTT.png" style="margin:auto;" class="img-responsive" alt="We Talk Tech">		
				</div>
			</div>
			
			<div class="row">
				<section class="col-xs-12">
					<h2>What is it?</h2>
					<p>
						We Talk Tech is a networking event for people in IT from industry and academia. 
					</p>
					<p>
						It is a great way to connect with each other and discuss issues centralized on women in tech.
					</p>
				</section>

				<section class="col-xs-12">
					<h2>When is the next We Talk Tech?</h2>
					<p>
						<label>Theme:</label> <?php echo $talk['theme']; ?>
					</p>
					<p>
						<label>Date:</label> <?php echo $talk['date']; ?>
					</p>
					<p>
						<label>Location:</label> <?php echo $talk['location']; ?>
					</p>
					<p>
						<label>Keynote Speaker:</label> <?php echo $talk['keynote']; ?>
					</p>
					<p>
						<label>Presentations by:</label> <?php echo $talk['present']; ?>
					</p>
				</section>

				<section class="col-xs-12">
					<h2>Sponsors</h2>
					<div class="row">
						<?php foreach ($sponsors as $sponsor) : ?>
							<div class="col-xs-4">
								<img src="images/<?php echo $sponsor['img'] ?>" class="img-responsive" alt="<?php echo $sponsor['name'] ?>">	
							</div>
						<?php endforeach; ?>		
					</div>
				</section>

			</div>
		</div>

		<?php include('footer.php') ?>
		<?php include('javascript.php') ?>
	</body>
</html>
