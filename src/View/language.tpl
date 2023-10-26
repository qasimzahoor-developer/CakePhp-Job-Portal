<?php if (count($languages) >= 1) { ?>
<div class="language">
	<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-language">
	  <div class="btn-group">
		<button class="btn-link dropdown-toggle btn-language" data-toggle="dropdown">
		<?php foreach ($languages as $language) { ?>
			<?php if ($language['code'] == $code) { ?>
				<?php echo $language['name']; ?>
			<?php } ?>
		<?php } ?>
		</button>
		<ul class="dropdown-menu dropdown-language">
		  <?php foreach ($languages as $language) { ?>
			<?php if ($language['code'] == $code) { ?>
				<li><button class="btn btn-link btn-block language-select language-selected" type="button" name="<?php echo $language['code']; ?>"><?php echo $language['name']; ?></button></li>
			<?php } else { ?>
				<li><button class="btn btn-link btn-block language-select" type="button" name="<?php echo $language['code']; ?>"><?php echo $language['name']; ?></button></li>
			<?php } ?>
		  <?php } ?>
		</ul>
	  </div>
	  <input type="hidden" name="code" value="" />
	  <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
	</form>
</div>
<?php } ?>
