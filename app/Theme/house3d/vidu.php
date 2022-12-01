<?php getHeader();?>
<div class="banner_cat" style="background: rgba(60,151,100,1);">
	<div class="banner_cat_in">
		<div class="banner_cat_in_tit text-center">
			<h1>Bảng giá</h1>
		</div>

		<div class="banner_cat_in_des text-center">
			<p> Ví dụ</p>
		</div>
	</div>
</div>

<div id="vidu" class=" pd_40">
	<div class="container-fluid">
		<div class="h3d-container">
			<div class="row">
				<div class="col-lg-8">
					<div class="view_hcoin" style="text-align: justify;">
						<strong style="font-size: 18px;">Doanh nghiệp Đối tác</strong> <br>
						<em>Dưới đây là 02 ví dụ về doanh nghiệp đối tác có thể thu được lợi nhuận nhờ hợp tác kinh doanh trên nền tảng House3D</em><br><br>
						<span style="text-decoration: underline;"><strong>VD1: </strong></span><br>
						Công ty sàn gỗ Floor Vietnam: Hợp đồng với House3D 
						100,000,000/tháng để sử dụng tính năng Gói Doanh nghiệp / Đối tác <br>
						Nạp 500,000,000 VND nhận được 1,500,000 HCoin <br><br>
						Giá Showroom mua qua hợp đồng đối tác: 1,500 Hcoin/tháng 
						H3D thu 500,000 VNĐ/tháng/Showroom <br>
						Tạo 1,000 Showroom => Sử dụng 1,500,000 HCoin <br><br>
						Thu của đại lý 700,000 VND/Showroom => Thu về 700,000,000 VNĐ/tháng <br>
						Lãi 100,000,000/tháng <br>
						Đại lý được mua rẻ hơn 1,300,000 so với giá bán lẻ <br>
						<br><br>
						<span style="text-decoration: underline;"><strong>VD2: </strong></span> <br>
						Công ty tủ gỗ ABC: Hợp đồng đối tác với House3D <br>
						Nạp 50,000,000 VND nhận được 100,000 HCoin <br>
						Giá Showroom mua qua HĐ đối tác: 1,500 Hcoin/tháng <br>
						H3D Thu 750,000 VND/tháng/Showroom <br>
						Tạo 50 Showroom => Sử dụng 75,000 HCoin <br> <br>
						Thu của đại lý 1,000,000 VND/Showroom => Thu về 50,000,000 VNĐ/tháng

					</div>
				</div>
				<div class="col-lg-4 d-none d-lg-block">
					<aside class="sticky-top">
						<div class="consultant_ct" >
							<div class="consultant">
								<div class="consultant_img">
									<img src="<?php echo hashUrl($urlThemeActive.'img/danhsachtuvan.jpg'); ?>" class="img-fluid" alt="img">
								</div>
								<div>
									<div class="consultant_info">
										<ul class="consultant_list">
											<li> Hỗ trợ : <a href=""><strong> <?php echo @$contactSite['Option']['value']['fone'];?></strong></a></li>
											<li> Email : <?php echo @$contactSite['Option']['value']['email'];?></li>
											<li> <?php echo @$contactSite['Option']['value']['address'];?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
</div>
<?php getFooter(); ?>