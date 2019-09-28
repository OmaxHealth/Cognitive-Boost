<?php /* set_query_var('custom_body_class','page-home'); */ ?>
<?php get_template_part('block','header'); ?>
<?php the_post(); ?>

<main id="home">
	
	<section id="hero">
		<div class="container">
			<div class="offer">
				<div class="ln1">Now Only <div class="price"><span>$</span>29<span>95</span><small>*</small></div></div>
				<div class="ln2">Limited Time: Free Shipping!</div>
				<img class="asotv" src="<?php bloginfo('template_directory'); ?>/images/home/icon-asotv.svg" alt="As Seen on TV"/>
				<img class="seal" src="<?php bloginfo('template_directory'); ?>/images/home/hero-seal.png" alt="100% Money Back Guarantee"/>
			</div>
			<ul class="checkmarks">
				<li>Boost focus <br/>& concentration</li>
				<li>Improve energy <br/>levels</li>
				<li>Support mood <br/>& mind</li>
			</ul>
			<div class="product">&nbsp;</div>
			<div class="cta"><a class="button red" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a></div>
		</div>
	</section>

	<section id="icons">
		<div class="container">
			<div class="flexbox">
				<div class="box left">
					<h3>No Caffeine</h3>
				</div>
				<div class="box center">
					<h3>60-DAY Guarantee</h3>
				</div>
				<div class="box right">
					<h3>Clinically Tested</h3>
				</div>
			</div>
		</div>
	</section>

	<section id="reviews">
		<div class="container">
			<div class="title">
				<div class="ln1">Read Our</div>
				<h2 class="ln2">5-Star <strong>Reviews</strong></h2>
			</div>
			
			<div class="flexcolumn">
				<div class="column">
					<div class="video" data-id="yhxWTkY-V-0">
						<img class="overlay" src="<?php bloginfo('template_directory'); ?>/images/home/review-gretchen.jpg" alt="Gretchen" />
						<div class="player"></div>
					</div>
					<div class="text">
						<img class="stars" src="<?php bloginfo('template_directory'); ?>/images/home/review-stars-yellow.svg" alt="5 stars" />
						<h3>Great Stuff</h3>
						<p class="quote">&ldquo;Within the first few days I felt an upswing in my mental clarity, energy levels and motivation.&rdquo;</p>
						<p class="person">Gretchen G.</p>
					</div>
				</div>
				<div class="column">
					<div class="video" data-id="SdZWXlrpqUg">
						<img class="overlay" src="<?php bloginfo('template_directory'); ?>/images/home/review-greg.jpg" alt="Greb" />
						<div class="player"></div>
					</div>
					<div class="text">
						<img class="stars" src="<?php bloginfo('template_directory'); ?>/images/home/review-stars-yellow.svg" alt="5 stars" />
						<h3>I Feel Younger</h3>
						<p class="quote">&ldquo;Cognitive Boost has really helped me. It’s enhanced my ability to remember things, and the benefits have been amazing!&rdquo;</p>
						<p class="person">Greg H.</p>
					</div>
				</div>
				<div class="column">
					<div class="video" data-id="4WLslTLql2I">
						<img class="overlay" src="<?php bloginfo('template_directory'); ?>/images/home/review-cynthia.jpg" alt="Cynthia" />
						<div class="player"></div>
					</div>
					<div class="text">
						<img class="stars" src="<?php bloginfo('template_directory'); ?>/images/home/review-stars-yellow.svg" alt="5 stars" />
						<h3>More Focused</h3>
						<p class="quote">&ldquo;It’s really had an effect on my memory, focus and overall mood. I would recommend it to anyone looking for a healthy brain boost.&rdquo;</p>
						<p class="person">Cynthia Z.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="powerhouse">
		<div class="container">
			<div class="title">
				<h2 class="ln1">Powerhouse</h2>
				<p class="ln2">Alpha & Omega<sup>&trade;</sup> Formula gives you the ultimate mental edge</p>
			</div>
			<div class="flexcolumn">
				<div class="column left">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/powerhouse-product.png" alt="product" /> 
				</div>
				<div class="column right">
					<ul>
						<li>Breakthrough, dual-action formula</li>
						<li>Pure ingredients, clinically tested</li>
						<li>Life-long preventative brain health</li>
					</ul>
				</div>
			</div>	
			
		</div>
	</section>

	<section id="science">
		<div class="container">
			<div class="title">
				<h2 class="ln1">Real <strong>Science</strong></h2>
				<p class="ln2">Developed by world-class science and medical expertise</p>
			</div>
			<div class="image">
				<div class="ln1">It really is possible to<br/><span>maximize your brain’s<br/>potential</span> at any age.&rdquo;</div>
				<div class="box"><span>Dr. Amy Killen,</span> Board Certified Physician, <br/>Anti-Aging Expert</div>
			</div>
		</div>
		<div class="cta">
			<a class="button red" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Get 40% off your first box*</span></a>
		</div>
	</section>
	
	<section id="howitworks">
		<div class="container">
			<div class="title">
				<h2 class="ln1">Clinically Studied</h2>
				<p class="ln2">Alpha GPC & Omega-3 DHA are essential nutrients that have been clinically studied for brain health for decades. Omax Cognitive Boost is scientifically developed to replenish these essential nutrients, improving your ability to think faster, stay focused, and feel on top of your game.</p>
			</div>
			<div class="flexcolumn">
				<div class="column left">
					<h3>Alpha-gpc</h3>
					<ul>
						<li>Naturally found in your brain<br/> and in mother’s milk</li>
						<li>Critical for brain<br/> development and<br/> neurotransmission</li>
						<li>Supports enhanced<br/> concentration, focus, and recall</li>
					</ul>
				</div>
				<div class="column center">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/howitworks-brain.png" alt="brain"/>
				</div>
				<div class="column right">
					<h3>Omega-3 DHA</h3>
					<ul>
						<li>Fatty-acids essential<br/> for brain health</li>
						<li>Impacts optimal<br/> memory function<br/> and mood</li>
						<li>Promotes optimal<br/> brain health</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<section id="better">
		<div class="container">
			<div class="title">
				<h2 class="ln1">Everyone Needs <strong>Cognitive Boost</strong></h2>
				<p class="ln2">Students • Moms • Gamers • Seniors • Professionals</p>
				<p class="ln3">People from every walk of life can benefit from a better brain. Omax Cognitive Boost can immediately impact your mood, memory and focus, and most importantly, YOUR LIFE.</p>
			</div>
			<div class="flexbox">
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/better-bg1.jpg" />
					<h3>Stay alert &<br/> motivated</h3>
				</div>
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/better-bg2.jpg" />
					<h3>Improve energy<br/> & stress</h3>
				</div>
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/better-bg3.jpg" />
					<h3>Get back on<br /> your game</h3>
				</div>
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/better-bg4.jpg" />
					<h3>Feel sharper &<br/> more engaged</h3>
				</div>
			</div>
				
			</div>
		</div>
	</section>	

	<section id="featured">
		<div class="container">
			<h2>As Seen In</h2>
			<div class="flexbox">
				<div class="box"><img src="<?php bloginfo('template_directory'); ?>/images/home/featured-ok.png" alt="OK!"/></div>
				<div class="box"><img src="<?php bloginfo('template_directory'); ?>/images/home/featured-touch.png" alt="inTouch Weekly"/></div>
				<div class="box"><img src="<?php bloginfo('template_directory'); ?>/images/home/featured-womans_world.png" alt="Woman's World"/></div>
				<div class="box"><img src="<?php bloginfo('template_directory'); ?>/images/home/featured-first.png" alt="First for Women"/></div>
			</div>
		</div>
	</section>	

	<section id="purity">
		<div class="container">
			<div class="flexbox">
				<div class="box"><img src="<?php bloginfo('template_directory'); ?>/images/home/purity-seal.svg" alt="Omega-3 Purity"/></div>
				<div class="box"><h2>Purity & Safety Guaranteed</h2></div>
				<div class="box"><p>Every batch is tested twice for purity and concentration, and arrives individually blister packed for maximum freshness.</p></div>
			</div>
		</div>
	</section>

	<section id="lowerCTA">
		<div class="container">
			<div class="upper">
				<div class="center">
					<img class="plus" src="<?php bloginfo('template_directory'); ?>/images/home/icon-plus.svg" alt="Plus!" />
					<div class="ln1">2 Free Gifts</div>
					<div class="ln2">With your Order</div>
					<div class="ln3">A $100 Value</div>
				</div>
				<div class="products">
					<img class="desktop" src="<?php bloginfo('template_directory'); ?>/images/home/lowerCTA-products-desktop.jpg" alt="Omax Cognitive Boost" />
					<img class="mobile" src="<?php bloginfo('template_directory'); ?>/images/home/lowerCTA-products-mobile.jpg" alt="Omax Cognitive Boost" />
				</div>
			</div>
			<div class="cta">
				<div class="ln1">Now Only <div class="price"><span>$</span>29<span>95</span><small>*</small></div></div>
				<div class="ln2">Limited Time: Free Shipping!</div>
				<a class="button" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>
			</div>
		</div>
	</section>

</main>

<?php get_template_part('block','footer'); ?>
