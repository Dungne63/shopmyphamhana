<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php if (isset($_GET['dk'])) {
				?>

					<div class="pages-title-text text-center">
						<h2>Đăng ký</h2>
						<ul class="text-left">
							<li><a href="?act=home">Trang chủ</a></li>
							<li><span> // </span>Đăng ký</li>
						</ul>
					</div>

				<?php } else { ?>
					<div class="pages-title-text text-center">
						<h2>Đăng nhập</h2>
						<ul class="text-left">
							<li><a href="?act=home">Trang chủ</a></li>
							<li><span> // </span>Đăng nhập</li>
						</ul>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- login content section start -->
<section class="pages login-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<?php

				if (isset($_GET['dk'])) {
					include_once('dangky.php');
				} else {
					include_once('dangnhap.php');
				}


				?>
			</div>





		</div>
	</div>
</section>
<!-- login content section end -->