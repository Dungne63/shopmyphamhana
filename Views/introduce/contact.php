<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thông tin liên hệ</h2>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> // </span>Liên hệ</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- contact content section start -->
<div class="pages contact-page section-padding">
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-12">
				<div class="googleMap-info">
					<div id="googleMap"></div>
					<div class="map-info">
						<p><strong>Shop Mỹ Phẩm </strong></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-text-center">
				<div class="contact-details">
					<div class="row">
						<div class="col-sm-4">
							<div class="single-contact">
								<i class="mdi mdi-map-marker"></i>
								<p>12, Chùa Bộc, Đống Đa, Hà Nội</p>
								<p>Cửa hàng mỹ phẩm</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-contact">
								<i class="mdi mdi-phone"></i>
								<p>(+84) 388501003</p>
								<p>(+84) 328612797</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-contact">
								<i class="mdi mdi-email"></i>
								<p>shopmypham@gmail.com</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contact content section end -->
<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
	function initialize() {

		var mapOptions = {
			zoom: 17,
			hue: '#E9E5DC',
			scrollwheel: false,
			mapTypeId: google.maps.MapTypeId.TERRAIN,
			center: new google.maps.LatLng(21.0078332,105.8253805)
		};

		var map = new google.maps.Map(document.getElementById('googleMap'),
			mapOptions);


		var marker = new google.maps.Marker({
			position: map.getCenter(),
			icon: 'public/img/map-marker.png',
			map: map
		});

	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>