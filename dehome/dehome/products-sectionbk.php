<?php function getProducts($isListByDefault, $haveGetMoreButton, $number) { ?>

<!--

******************* IMPORTANT NOTE *******************

- Child of class "products" have "list" mean in grid view they will be display none
- Otherwise have "grid" mean in list view they will be dislay none

-->

<div class="row">
	<div class="products clearfix <?php echo $isListByDefault ? "list" : "grid" ?>">

		<?php for ($i=0; $i < $number; $i++) { ?>

		<div class="col-xs-12 product-separate-line list"><hr></div>

		<div class="product clearfix">
			<div class="product-image">
				<a href="#" style="background: url('resources/imageDemo.png')">
					<img src="resources/imageDemo.png" class="img-responsive">
				</a>
		        <a href="vnexpress.net" style="height:100%; width:100%; display:block">
			        <div class="grid grid-popup">
						<div class="actions-center">
							<a href="#" class="action-1"><i class="fa fa-plus"></i></a>
							<a href="#" class="action-2"><i class="fa fa-envelope-o"></i></a>
						</div><!-- actions-center -->
						<div class="action-bottom">
							<a href="#">Xem chi tiết </a>
						</div><!-- action-bottom -->
					</div><!-- grid-popup -->
		        </a>
			</div><!-- product-image -->

			<div class="col-xs-12 visible-xs grid"><br></div>

			<div class="product-content">
				<div class="product-name grid">
					<h3><a href="#">Tên của dự án</a></h3>
				</div><!-- product-name -->
				<div class="product-content-owner">
					<a href="#">
						<img src="resources/userIcon.png" class="list">
						Tên người tạo dự án 
					</a>
					<span class="owner-rating list">
						<?php  for ($j=0; $j < 5; $j++) { ?>

						<img src="resources/ratingStart.png">

						<?php } ?>

						<span class="owner-rating-numer">7 đánh giá</span>
					</span><!-- owner-rating -->
				</div><!-- product-content-owner -->
				<div class="product-name list">
					<h3><a href="#">Tên của dự án</a></h3>
					<span class="list">
						<span>Có 78 người thích</span>
						<span> | </span>
						<span>23 câu hỏi</span>
					</span>
				</div><!-- product-name -->
				<div class="product-excerpt list">
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<div class="product-read-more <?php echo $i == 0 ? "active" : "default"?>">
						<a href="#">
							<span><?php echo $i == 0 ? "Rút gọn" : "Hiển thị thêm"?></span>
							<i class="fa fa-angle-down"></i>
							<i class="fa fa-angle-up"></i>
						</a>
					</div><!-- product-read-more -->
				</div><!-- product-excerpt -->
				<div class="product-socials list">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-yahoo"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-skype"></i></a>
				</div><!-- product-socials -->
				<div class="product-view-detail list">
					<a href="#">Có 23 bình luận <i class="fa fa-caret-right"></i></a>
				</div><!-- product-view-detail -->
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