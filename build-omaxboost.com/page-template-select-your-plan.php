<?php get_template_part('block','header'); ?>
<?php the_post(); ?>

<main id="select-plan">
	<section id="mainCTA">
		<div class="heading">
			<div class="container">
				<h1>Select Your Plan</h1>	
			</div>
		</div>
		<div class="offers">
			<div class="container">
				<div class="flexbox">
					<div class="box" id="first">
						<h2>One-Time</h2>
						<div class="text">
							<div class="priceGroup">
								<span class="price">$49.95</span>
								<hr>
								<span class="shipping">FREE SHIPPING</span>
							</div>
							<span class="gift">PLUS FREE Gift:</span>
							<span class="check">&#x2713; 30 Days to Better Brain eBook</span>
						</div>
						<div class="productImage"></div>
						<hr>
						<a class="button" href="<?php getOfferURL(1); ?>"><span>Order Now</span></a>
					</div>
					<div class="box" id="second">
						<div class="ribbon"></div>
						<h2>Subscribe & Save</h2>
						<div class="text">
							<div class="priceGroup">
								<span class="price"><span>First Box</span> $19.95<small>*</small></span>
								<span class="supply">Then $45/month</span>
								<hr>
								<span class="shipping">FREE SHIPPING</span>
							</div>
							<span class="gift">PLUS 2 FREE Gifts:</span>
							<span class="check">&#x2713; 30 Days to Better Brain eBook</span>
							<span class="check">&#x2713; One (1) bottle of Vitamin D3</span>
						</div>
						<div class="productImage"></div>
						<span class="value">$100 Value!</span>
						<hr>
						<a class="button" href="<?php getOfferURL(2); ?>"><span>Order Now</span></a>
					</div>
				</div>
			</div>			
		</div>
	</section>
	
	<section id="lowerTagline">
		<div class="container">
			<h2>
				<h1>Omax Cognitive Boost Builds A Better Brain For Life</h1>
			</h2>	
		</div>
	</section>
			
</main>

<?php get_template_part('block','footer'); ?>
