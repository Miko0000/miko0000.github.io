<nav class="top">
	<?php ob_start(); ?>
	<?php ob_start(); ?>
	<div class="hint">
		<a
			href="../"
			tabindex="0"
			class="hint"
		>
			<div class="hint-content">Back</div>
			<i class="ri-arrow-go-back-fill icon"></i>
		</a>
	</div>
	<?php
		echo isset($top_back);

		if(!isset($top_back) || $top_back == true)
			echo ob_get_clean();
		else
			ob_get_clean();
	?>
	<?php
		if(isset($top_content))
			$top_content = ob_get_clean();
		else
			echo ob_get_clean();
	?>
	<?php if(isset($top)) echo $top ?>
</nav>