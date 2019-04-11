<?php
/**
 * @package WordPress
 * @subpackage estsb
 */
?>

<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
	
<div class="input-group mb-3">
<input type="text" class="form-control"  name="s" value="<?php echo esc_html(the_search_query()); ?>" placeholder="Search">
  <div class="input-group-append">
    <button class="btn btn-success" type="submit">Go</button> 
  </div>
</div>
</form>
