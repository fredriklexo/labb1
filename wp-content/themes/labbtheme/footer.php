
<footer id="footer">
	<div class="container">
		<div class="row top">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<?php dynamic_sidebar("footer-colum-1"); ?> <!-- calls the widget in function labbtheme_widgets_init() that has the id = "footer-colum-1"  -->
				
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
				<?php dynamic_sidebar("footer-colum-2"); ?> <!-- calls the widget in function labbtheme_widgets_init() that has the id = "footer-colum-2"  -->
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
				<ul class="social">
					<?php dynamic_sidebar("footer-colum-3"); ?> <!-- calls the widget in function labbtheme_widgets_init() that has the id = "footer-colum-3"  -->
				</ul>
			</div>
		</div>
		<div class="row bottom">
			<div class="col-xs-12">
				<p>Copyright &copy; Grupp X, 2016</p>
			</div>
		</div>
	</div>
</footer>

    <?php wp_footer(); ?> <!--Fire the wp_footer action. -->

    </div> <!-- closing div for id= wrap in header -->
</body>
</html>