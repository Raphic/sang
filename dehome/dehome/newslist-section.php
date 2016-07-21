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
			<div class="product-image-pro">
				<a href="#" style="background: url('resources/Layer-8-copy-3.png')">
					<img src="resources/Layer-8-copy-3.png" class="img-responsive">
				</a>
			</div><!-- product-image -->

			<div class="col-xs-12 visible-xs grid"><br></div>

			<div class="product-content-pro">
				<div class="product-name grid">
					<h3><a href="#">Tên của Pro</a></h3>
				</div><!-- product-name -->
				<div class="product-content-owner">
					<a class="title-green" href="#">
							Những tiêu chí chọn vật liệu ốp cầu thang ngoài trời
					</a>
				</div><!-- product-content-owner -->
				<div class="product-name list">
					<h3><a href="#">Người viết : Nguyễn Tử Quảng</a></h3>
				</div><!-- product-name -->
				<div class="product-excerpt list">
					<p>Cầu thang này có vai trò hỗ trợ cho cầu thang bên trong nhà. Bạn có thể đi lên ngay phòng khách phía trên thay vì phải đi xuyên qua nhà để xe. Để có thể thiết kế cầu thang ngoài trời, cần một diện tích đủ rộng. Thông thường chỉ thiết kế cầu thang ngoài trời khi có một khoảng sân hoặc vườn trước nhà. Hiếm khi cầu thang trời được thiết kế liền với đường hoặc ngõ vào nhà..</p>
					<div class="product-read-more <?php echo $i == 0 ? "active" : "default"?>">
						<a href="#">
							<span><?php echo $i == 0 ? "Rút gọn" : "Hiển thị thêm"?></span>
							<i class="fa fa-angle-down"></i>
							<i class="fa fa-angle-up"></i>
						</a>
					</div><!-- product-read-more -->
				</div><!-- product-excerpt -->
				<div>
					<div class="newslist-catology list">
						<a href="#"><span class="circle"></span>Kinh nghiệm làm nhà</a>
						<a href="#"><span class="circle"></span>Kiến trúc</a>
						<a href="#"><span class="circle"></span>Nội thất</a>
						<a href="#"><span class="circle"></span>Sử dụng vật liệu xây dựng</a>
					</div>
					<div class="newslist-calendar list">
						<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>25/10/2016</a>
					</div>
				</div>
				<!-- product-content -->
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