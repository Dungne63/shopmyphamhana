<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- pages-title-start -->
<!-- &partnerCode=MOMOBKUN20180529&orderId=1680683892&requestId=1680683892&amount=17505000&orderInfo=Thanh+toán+qua+MoMo&orderType=momo_wallet&transId=2947660655&resultCode=0&message=Successful.&payType=napas&responseTime=1680683940271&extraData=&signature=45d0e374e0951c46905be06a9f8a02b6eac85ffefe1920f6012ed90de58ada69-->
<?php
include_once("dbhelp.php");
if(isset($_GET['message']))
{
	$_SESSION['thanhcong']=$_GET['message'];
	$total= $_GET['amoun'];
	$sql="";
}

if(isset($_SESSION['thanhcong']))
{



?>
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thanh toán thành công</h2>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> // </span>Thanh toán thành công</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- about-us-section-start -->
<div class="pages about-us section-padding">
	<div class="container">
		<div class="row">
			<div class="main-padding section-padding-top clearfix">
				<div class="col-sm-12 col-md-5">
					<div class="about-img">
						<img src="public/img/about/1.jpg" alt="" />
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="about-text">
						<div class="about-author">
							<h4>Bạn đã thanh toán thành công cảm ơn bạn</h4>
						</div>
						<h5>Cửa hàng chúng tôi với:</h5>
						<ol>
							<li>Chế độ trả góp ưu đãi</li>
							<li>Thái độ phục vụ tốt</li>
							<li>Nguồn cung cấp uy tín và ổn định</li>
							<li>Chế độ bảo hành hợp lý</li>
						</ol>
						<p>Với những chế độ đó chúng tôi hứa sẽ mang lại cho khách một sự hài lòng nhất khi đến với cửa hàng của chúng tôi</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- about-us section end -->

<?php
}
else
{
	
}
?>