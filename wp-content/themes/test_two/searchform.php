<form method="get" action="<?php echo esc_url(home_url()); ?>/">
<div id="searchform">
	<input type="text" name="s" id="s" placeholder="Search Here....." onfocus="if (this.value == 'Search') {this.value=='';}" onblur="if (this.value=='') {this.value == 'Search';}">
	<input type="submit" id="searchsubmit" value="search">
</div></form>