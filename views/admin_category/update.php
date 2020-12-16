<?php include (ROOT . '/views/layouts/header_admin.php'); ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="login-form">
				<h4>Редактировать категорию#<?php echo $id; ?></h4>
					<form action="#" method="post" enctype="multipart/form-data">
						
						<p>Название категории</p>
						<input type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>" />
						
						<p>Порядковый номер</p>
						<input type="text" name="sort_order" placeholder="" value="<?php echo $category['sort_order']; ?>" />
						
						<p>Статус</p>
						<select name="status">
							<option value="1" <?php if($category['status'] == 1) echo ' selected="selected"';?>>Отображается</option>
							<option value="0" <?php if($category['status'] == 0) echo ' selected="selected"';?>>Скрыто</option>
						</select>
						
						<br/><br/>
						
						<input type="submit" name="submit" class="btn btn-default" value="Редактировать"/>
						
						<br/><br/>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include (ROOT . '/views/layouts/footer_admin.php'); ?>