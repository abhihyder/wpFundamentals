<footer class="site-footer clearfix">
			<p>All Rights Reserved, <a href="http://itbari.com">IT-Bari Tutorials</a> &copy; <?php echo date('Y'); ?></p>
			<nav id="footer_nav">
				<?php
					
					$argmnt =array (
					'theme_location' => 'footer'
					);

				wp_nav_menu($argmnt);?>
			</nav>
		</footer>
	</div>
	<?php wp_footer();?>
</body>
</html>