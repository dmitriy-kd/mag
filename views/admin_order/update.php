<?php include (ROOT . '/views/layouts/header_admin.php'); ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="login-form">
				<h4>Редактировать заказ#<?php echo $id; ?></h4>
					<form action="#" method="post" enctype="multipart/form-data">
						<p>Статус</p>
						<select name="status">
							<option value="1" <?php if($order['status'] == 1) echo ' selected="selected"';?>>Новый</option>
							<option value="2" <?php if($order['status'] == 2) echo ' selected="selected"';?>>В обработке</option>
							<option value="3" <?php if($order['status'] == 3) echo ' selected="selected"';?>>Доставляется</option>
							<option value="4" <?php if($order['status'] == 4) echo ' selected="selected"';?>>Закрыт</option>
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