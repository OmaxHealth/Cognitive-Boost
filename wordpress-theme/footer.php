<footer>
	<div class="container">
		<p class="disclaimer">These statements have not been evaluated by the Food & Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease.</p>
		<p>*with enrollment into VIP auto-shipment program. 60-day money-back guarantee on first box only.</p>
		<p>Customer is responsible for obtaining a return authorization and paying return shipping costs.</p>
		<p>Dr. Maroon is a paid endorser of Cognitive Boost. Results will vary. Real user testimonials have been reimbursed for associated costs of filming.</p>
		<p>There is an additional cost of $9.95 to ship to Canada, Hawaii, Alaska and Puerto Rico.</p>
		<p class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Omax Health, Inc.</p>
		<nav class="links">
			<a href="<?php bloginfo('url'); ?>/terms-and-conditions/">Terms & Conditions</a>
			<a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a>
			<a href="mailto:contact@omaxhealth.com?subject=Cognitive%20Boost%20Question">Contact Us</a>
		</nav>
	</div>
</footer>

<?php wp_enqueue_script('plugins',get_bloginfo('template_directory').'/js/plugins.min.js',array('jquery')); ?>
<?php wp_enqueue_script('functions',get_bloginfo('template_directory').'/js/main.min.js',array('jquery','plugins')); ?>
<?php wp_footer(); ?>

</body>
</html>
