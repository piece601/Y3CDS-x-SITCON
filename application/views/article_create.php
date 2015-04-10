<?php require_once VIEWPATH.'_layouts/header.php' ?>
<section class="container">
	<form action="" method="post">
		<div class="form-group">
			<label for="">標題</label>
			<input type="text" class="form-control" name="title">
		</div>
		<div class="form-group">
			<label for="">內容</label>
			<textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for=""></label>
			<input type="submit" name="送出"	 class="btn btn-primary">
		</div>
	</form>
</section>
<?php require_once VIEWPATH.'_layouts/footer.php' ?>
