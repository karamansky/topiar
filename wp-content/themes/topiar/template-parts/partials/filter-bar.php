<div class="filter-bar">
	<div class="filter-bar__views">
		<a href="#" class="filter-bar__view filter-bar--table <?php if( !empty($_COOKIE['tp-view']) && $_COOKIE['tp-view'] == 'table' ) { echo 'tp-active'; } ?>">
			<i class="icon table-view-icon"></i>
		</a>
		<a href="#" class="filter-bar__view filter-bar--grid <?php if( empty($_COOKIE['tp-view']) || $_COOKIE['tp-view'] == 'grid' ) { echo 'tp-active'; } ?>">
			<i class="icon grid-view-icon"></i>
		</a>
		<a href="#" class="filter-bar__view filter-bar--list <?php if( !empty($_COOKIE['tp-view']) && $_COOKIE['tp-view'] == 'list' ) { echo 'tp-active'; } ?>">
			<i class="icon list-view-icon"></i>
		</a>
	</div>
</div>