<?php include "header.php"; ?></div>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBe23YIH_bS2jxaFHMnvalNLEbD93cUkUs"></script>

<section id="contact">
	<div class="title_page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="con_title">
						Liên hệ
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container margin_t_b_30">
		<div class="row">
			<div class="col-sm-6">
				<div class="contact">
					<form class="form-horizontal" id="user_contact" action="" method="POST">

						<div class="form-group row">
							<label class="col-sm-3">Họ và tên *</label>
							<div class="col-sm-9">
								<input type="text" maxlength="50" pattern=".{0,50}" name="fullName" class="form-control" required="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3">Email *</label>
							<div class="col-sm-9">
								<input type="email" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Định dạng hợp lệ dạng manmo@example.com" name="email" class="form-control" required="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3">Số điện thoại *</label>
							<div class="col-sm-9">
								<input type="text" name="fone" maxlength="11" pattern="^(01[2689]|02[0-9]|09|08)[0-9]{8}" title="Vui lòng điền đúng theo định dạng đầu số điện thoại hiện hành theo quy định!" class="form-control" required="">
							</div>
						</div>           
						<div class="form-group row">
							<label class="col-sm-3">Chủ đề</label>
							<div class="col-sm-9">
								<input type="text" placeholder="Chủ đề" class="form-control" name="">
							</div>
						</div>           
						<div class="form-group row">
							<label class="col-sm-3">Nội dung</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="5" name="content"></textarea>
							</div>
						</div>           
						<div class="form-group row">
							<label class="col-sm-3">Mã xác nhận *</label>
							<div class="col-sm-9">
								<div class="captcha_code">
									<div class="show_captchatext">648314</div>
									<div class="input_captchatext">
										<input type="text" maxlength="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control" name="captcha" required="" placeholder="Nhập mã xác nhận">
									</div>
									<button type="submit" class="btn btn_submit">Gửi liên hệ</button>
								</div>
							</div>
						</div>           
					</form>
					<div class="col-sm-12">
						<span id="status" class="text-danger"></span>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<ul class="list-unstyled des_contact">
					<li><h4>Văn phòng tại Hà Nội</h4></li>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Phòng 707 , tầng 7, tòa nhà Sunrise Building, 90 Trần Thái Tông,Cầu Giấy, Hà Nội</li>
					<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> &nbsp; 043 795 6372  - Fax: 043 7956372</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp; nfo@greenidvietnam.org.vn</li>
					<li><i class="fa fa-internet-explorer" aria-hidden="true"></i> &nbsp; http://greenidvietnam.org.vn/</li>
				</ul>
			</div>
			<div class="col-sm-12">
				<div class="map_contact">
					<div id="map_HS"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	var locations = [
	['<a href="https://www.lotte.vn/">Lotte Center Hanoi</a> <br/> 54 Liễu Giai', 21.032106, 105.812831, 5],
	['<a href="https://www.lotte.vn/">Lotte Cinema Thang Long</a> <br/> 212 Trần Duy Hưng', 21.008264, 105.792331, 4],
	['<a href="https://www.lotte.vn/">Lotte Mart Đống Đa</a> <br/> 229 Tây Sơn', 21.005700, 105.824603, 3],
	['<a href="https://www.lotte.vn/">Lotte cinema Hà Đông</a> <br/> Melinh Plaza, Tô Hiệu, Hà Đông', 20.963387, 105.771731, 2],
	['<a href="https://www.lotte.vn/">Lotte Cinema Landmark</a> <br/> Tầng 5,6 Phạm Hùng', 21.016925, 105.783748, 1]
	];
	var map;
	var markers = [];

	function init() {
		map = new google.maps.Map(document.getElementById('map_HS'), {
			zoom: 12,
			center: new google.maps.LatLng(21.03, 105.83),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		var num_markers = locations.length;
		for (var i = 0; i < num_markers; i++) {
			markers[i] = new google.maps.Marker({
				position: {lat: locations[i][1], lng: locations[i][2]},
				map: map,
				html: locations[i][0],
				id: i,
			});

			google.maps.event.addListener(markers[i], 'click', function () {
				var infowindow = new google.maps.InfoWindow({
					id: this.id,
					content: this.html,
					position: this.getPosition()
				});
				google.maps.event.addListenerOnce(infowindow, 'closeclick', function () {
					markers[this.id].setVisible(true);
				});
				this.setVisible(false);
				infowindow.open(map);
			});
		}
	}

	init();
</script>

<?php include "footer.php"; ?>