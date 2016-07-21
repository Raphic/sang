<?php function getProducts($isListByDefault, $haveGetMoreButton, $number) { ?>

<!--

******************* IMPORTANT NOTE *******************

- Child of class "products" have "list" mean in grid view they will be display none
- Otherwise have "grid" mean in list view they will be dislay none

-->

<div class="row">
	<div class="products clearfix grid">

		<?php for ($i=0; $i < 18; $i++) { ?>

		<div class="col-xs-12 product-separate-line list"><hr></div>

		<div class="product clearfix">
			<div class="product-image  product-image-owner">
				<a href="#" style="background: url('resources/imageDemo.png')">
					<img src="resources/imageDemo.png" class="img-responsive">
				</a>
		       
			</div><!-- product-image -->

			<div class="col-xs-12 visible-xs grid"><br></div>

			<div class="product-content">
				<div class="product-name grid">
					<h3><a href="#">Tên của ảnh</a></h3>
				</div><!-- product-name -->
				
				
				
				
			</div><!-- product-content -->
		</div><!-- product -->

		<?php
			}
			if ($haveGetMoreButton) {
		?>
		
		<div class="product-get-more col-xs-12">
			<a href="#">Hiển thị thêm</a>
		</div>

		<?php } ?>
	</div><!-- products -->
</div>

<?php } ?>