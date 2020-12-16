<?php 
	
	include ROOT . '/views/layouts/header.php';
?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <div class="panel-group category-products">
                                <?php foreach($categories as $categoryItem): ?>
								<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
											<a href="/category/<?php echo $categoryItem['id']; ?>">
												<?php echo $categoryItem['name']; ?>
											</a>
										</h4>
                                    </div>
                                </div>
								<?php endforeach; ?>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
						
                            <h2 class="title text-center">Последние товары</h2>
							<?php foreach($latestProducts as $product): ?>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
												<h2><?php echo $product['price']; ?>$</h2>
												<p>
													<a href="/product/<?php echo $product['id']; ?>">
														<?php echo $product['name']; ?>
													</a>
												</p>
												<a href="#" data-id="<?php echo $product['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
											</div>
											<?php if($product['is_new']): ?>
												<img src="/template/images/home/new.png" class="new" alt="" />
											<?php endif; ?>
										</div>
									</div>
								</div>
							<?php endforeach; ?>

                        </div><!--features_items-->
					</div>
					</div>
					<div class="row">
					
					<div class="col">
						<h2 class="title text-center">Рекомендуемые товары</h2>
                    
                   <!-- Пример того как слайдер работает
				   <div class="slider-gallery">
						<div class="slider-slide">
							<img src="/upload/images/products/31.jpg" alt="Фото рекомендованного товара" />
							<h3>Название рекомендованного товара</h3>
							<p>Цена рекомендованного товара</p>
							<a href="#" data-id="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
							
						</div>
						<div class="slider-slide">
							<img src="/upload/images/products/no-image.jpg" alt="Фото рекомендованного товара" />
							<h3>Название рекомендованного товара2</h3>
							<p>Цена рекомендованного товара2</p>
							<a href="#" data-id="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
							
						</div>
						<div class="slider-slide">
							<img src="/upload/images/products/13453_original.jpg" alt="Рекомендуемый товар" />
						</div>
						<div class="slider-slide">
							<img src="/upload/images/products/17965.jpg" alt="Рекомендуемый товар" />
						</div>
						<div class="slider-slide">
							<img src="/upload/images/products/33187.jpg" alt="Рекомендуемый товар" />
						</div>
						<div class="slider-slide">
							<img src="/upload/images/products/53575d050edbb5e2680c0ba7.jpg" alt="Рекомендуемый товар" />
						</div>
						<div class="slider-slide">
							<img src="/upload/images/products/172310-iphone-7-pink-2.jpg" alt="Рекомендуемый товар" />
						</div>
					</div> -->
					
					<div class="slider-gallery">
					<?php foreach($recommendedProducts as $recommendedProduct): ?>
						<div class="slider-slide">
						
							<img src="<?php echo Product::getImage($recommendedProduct['id']); ?>" alt="Фото рекомендованного товара" />
							<h3><?php echo $recommendedProduct['name']; ?></h3>
							<p>$<?php echo $recommendedProduct['price']; ?></p>
							<a href="#" data-id="<?php echo $recommendedProduct['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
							<?php if($recommendedProduct['is_new']): ?>
								<img src="/template/images/home/new.png" class="new" alt="" />
							<?php endif; ?>
							
						</div>
						<?php endforeach; ?>
					</div>
					
					</div>
					
                            </div>
                     
                    </div>
        </section>

<?php 
	
	include ROOT . '/views/layouts/footer.php';
?>