<?php require_once '_layouts/header.php' ?>
<section class="container">
	<table class="table table-hover">
		<tr	class="success">
			<td>標題</td>
			<td>編輯</td>
			<td>刪除</td>
		</tr>
		<?php foreach ($query as $key => $value): ?>
			<tr>
				<td><a href="<?= base_url('article/show/'.$value->id)?>"><?= $value->title?></a></td>
				<td><a href="<?= base_url('article/edit/'.$value->id)?>" class="btn btn-warning">編輯</a></td>
				<td><a href="<?= base_url('article/delete/'.$value->id)?>" class="btn btn-danger">刪除</a></td>
			</tr>
		<?php endforeach ?>
	</table>
</section>
<?php require_once '_layouts/footer.php' ?>