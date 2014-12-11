<form action="<?php echo home_url( '/' ); ?>" method="get">

	<div class="input-group">
          <input class="form-control" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
          <span class="input-group-btn">
            <input type="submit" class="btn btn-default" value="Pesquisar" />
          </span>
        </div>	

</form>