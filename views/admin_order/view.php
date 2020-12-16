<?php include (ROOT . '/views/layouts/header_admin.php'); ?>


<section>
	<div class="container">
		<div class="row">
			<br/>
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="/admin">Админпанель</a></li>
					<li class="active"><a href="/admin/order">Управление заказами</a></li>
				</ol>
			</div>
			
			
			<h4>Заказ #<?php echo $id; ?></h4>
			
			<br/>
			<h5>Информация о заказе</h5>
			<table class="table-bordered table-striped table">
				<tr>
					<td>Номер заказа</td>
					<td><?php echo $order['id']; ?></td>
				</tr>
				<tr>
					<td>Имя клиента</td>
					<td><?php echo $order['user_name']; ?></td>
				</tr>
				<tr>
					<td>Телефон клиента</td>
					<td><?php echo $order['user_phone']; ?></td>
				</tr>
				<tr>
					<td>Комментарий клиента</td>
					<td><?php echo $order['user_comment']; ?></td>
				</tr>
				<?php if($order['user_id'] != 0): ?>
					<tr>
						<td>ID клиента</td>
						<td><?php echo $order['user_id']; ?></td>
					</tr>
				<?php endif; ?>
				<tr>
					<td>Статус заказа</td>
					<td><?php echo Order::getStatusText($order['status']); ?></td>
				</tr>
				<tr>
					<td>Дата заказа</td>
					<td><?php echo $order['date']; ?></td>
				</tr>
			</table>
			<h5>Товары в заказе</h5>
			<table class="table-admin-medium table-bordered table-striped table">
			<tr>
				<th>ID товара</th>
				<th>Артикул</th>
				<th>Название</th>
				<th>Цена</th>
				<th>Количество</th>
			</tr>
			
				<?php foreach($products as $product): ?>
				<tr>

					<td><?php echo $product['id']; ?></td>


					<td><?php echo $product['code']; ?></td>


					<td><?php echo $product['name']; ?></td>


					<td><?php echo $product['price']; ?></td>


					<td><?php echo $productsQuantity[$product['id']]; ?></td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</section>



<?php include ROOT . '/views/layouts/footer_admin.php'; ?>