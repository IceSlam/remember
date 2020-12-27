<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<input type="text" value="<?php echo get_search_query() ?>" style="width:100%;max-width:1000px;" name="s" id="s" placeholder="Введите запрос..." />
	<input type="submit" id="searchsubmit" style="margin:0 auto;display:inline-block;width:100%;max-width:252px" class="is-btn-blue" value="Найти" />
</form>
