<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<div class="search-form">
			<div class="search-submit">
				<span class="icon-search" aria-hidden="true">
					<i class="fa fa-search"></i>
				</span>
				<span class="screen-reader-text">
					<?php echo esc_html( 'Search' ); ?>
				</span>
			</div><!-- end of search-submit -->
         	<div class="submit-text">
				<label>
					<input type="search" class="search-field" placeholder="Search" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" required/>
				</label>
			</div><!-- end of submit-text -->
		</div><!-- end of search-form -->
	</fieldset>
</form>

