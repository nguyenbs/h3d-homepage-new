<?php include('header.php'); ?>
<?php
global $downloadSetting;
?>
<style type="text/css">

.oc_bh15_svg_4 .oc_bh15_btn_svg{
	margin:0 !important;
	border-color: transparent !important;
</style>
<div class="banner_cat" style="background: linear-gradient(0deg,rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo hashUrl($downloadSetting['Option']['value']['AnhBanner'])?>');">
	<div class="banner_cat_in">
		<div class="banner_cat_in_tit text-center">
			<h1><?php echo @$downloadSetting['Option']['value']['BannerMota1']?></h1>
		</div>

		<div class="banner_cat_in_des text-center">
			<p> <?php echo @$downloadSetting['Option']['value']['BannerMota2']?></p>
		</div>
	</div>
</div>

<section class=" download">
	<div class="downloadone">
		<div class="text-center secone_title">
			<h1><?php echo @$downloadSetting['Option']['value']['WindowMacTieuDe']?></h1>
			<div class="line_title"></div>
		</div>
		<div class="container-fluid">
			<div class="row" >
				<div class="col-md-6 col-lg-6 col-xl-6 pdb">
					<div class="downloadone_sub downloadone_sub_left">
						<div class="downloadone_img" >
							<img src="<?php echo hashUrl(@$downloadSetting['Option']['value']['IconWindow'])?>" class="img-fluid" >
						</div>
						<br>
						<div class="downloadone_sub_version text-center">
							<p><?php echo @$downloadSetting['Option']['value']['VersionWindow']?></p>
						</div>
						<br>
						<div class="container">
							<div class="row">
								<div class="col-sm-4 text-right button_window">
									<!-- button -->
									<div class="oc_bh15_svg_4">
                                        <!--Win32 download button-->
										<a class=" btn  oc_bh15_btn_svg  " href="<?php echo @$downloadSetting['Option']['value']['LinkWindow32']?>" >
											<span class="oc_bh15_btn_svg_label"><i class="fas fa-download index_fontawe" ></i>Windows 32-bit</span>
											<svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="140" >
												<g class="oc_bh15_btn_svg_border_left ">
													<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
												</g>
												<g class="oc_bh15_btn_svg_border_right">
													<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
												</g>
											</svg>
										</a>
									</div>
                                    <div class="clearfix">  </div>
								</div>
								<div class="col-sm-3 text-center button_window">
									<!-- button -->
									<div class="oc_bh15_svg_4">
                                        <!-- Win64 download button-->
										<a class=" btn  oc_bh15_btn_svg  " href="<?php echo @$downloadSetting['Option']['value']['LinkWindow64']?>">
											<span class="oc_bh15_btn_svg_label"><i class="fas fa-download index_fontawe" ></i>Windows 64-bit</span>
											<svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="140" >
												<g class="oc_bh15_btn_svg_border_left ">
													<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
												</g>
												<g class="oc_bh15_btn_svg_border_right">
													<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
												</g>
											</svg>
										</a>
									</div>
                                    <div class="clearfix">  </div>
								</div>
                                <div class="col-sm-4 text-left button_window">
                                    <!-- button -->
                                    <div class="oc_bh15_svg_4">
                                        <!-- Win64 download button-->
                                        <a class=" btn  oc_bh15_btn_svg  " href="ms-windows-store://pdp/?productid=9N4F1R0M8NBH">
                                            <span class="oc_bh15_btn_svg_label"><i class="fas fa-download index_fontawe" ></i>Microsoft Store</span>
                                            <svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="140" >
                                                <g class="oc_bh15_btn_svg_border_left ">
                                                    <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
                                                </g>
                                                <g class="oc_bh15_btn_svg_border_right">
                                                    <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="clearfix">  </div>
                                </div>
							</div>
						</div>
                        <br>
                        <!-- Warning Section -->
                        <div class="downloadone_sub_warning text-center">
                            <p style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <i style="font-size: 12px; display: block;">For Windows 10/8.1/8/7.</i>
                                <i style="font-size: 12px;">Note: If you use Windows 7 see <a href="https://wiki.house3d.com/requirement:h3d-srs:desktop-app-srs:intall_win7">this guide.</a></i>
                            </p>
                        </div>
					</div>
				</div>

				<div class="col-md-6 col-lg-6 col-xl-6 pdb">
					<div class="downloadone_sub downloadone_sub_right" >
						<div class="downloadone_img" >
							<img src="<?php echo hashUrl(@$downloadSetting['Option']['value']['IconMac'])?>" class="img-fluid" >
						</div>
						<br>
						<div  class="downloadone_sub_version text-center">
							<p><?php echo @$downloadSetting['Option']['value']['VersionMac']?></p>
						</div>
						<br>
						<!-- button -->
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 text-right button_window">
                                    <div class="oc_bh15_svg_4">
                                        <a class="btn  oc_bh15_btn_svg  " href="<?php echo @$downloadSetting['Option']['value']['LinkMac']?>">
                                            <span class="oc_bh15_btn_svg_label"><i class="fas fa-download index_fontawe" ></i> Mac</span>
                                            <svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="140" style="">
                                                <g class="oc_bh15_btn_svg_border_left ">
                                                    <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
                                                </g>
                                                <g class="oc_bh15_btn_svg_border_right">
                                                    <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="clearfix">  </div>
                                </div>
                                <div class="col-sm-6 text-left button_window">
                                    <div class="oc_bh15_svg_4">
                                        <a class="btn  oc_bh15_btn_svg  " href="<?php echo @$downloadSetting['Option']['value']['LinkMacRetina']?>">
                                            <span class="oc_bh15_btn_svg_label"><i class="fas fa-download index_fontawe" ></i> Mac Retina</span>
                                            <svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="140" style="">
                                                <g class="oc_bh15_btn_svg_border_left ">
                                                    <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
                                                </g>
                                                <g class="oc_bh15_btn_svg_border_right">
                                                    <path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="clearfix">  </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Warning Section -->
                        <div class="downloadone_sub_warning text-center">
                            <p style="display: block; margin-top: 0em; margin-bottom: 0em;">
                                <i style="font-size: 12px; display: block;">For OS X 10.7+</i>
                                <i style="font-size: 12px;">&nbsp;</i>
                            </p>
                        </div>
					</div>

				</div>
			</div><div class="clearfix"></div>
		</div>
	</div>

	<div class="downloadtwo">
		<div class="text-center secone_title">
			<h1 ><?php echo @$downloadSetting['Option']['value']['KhoiCongCuTieuDe']?></h1>
			<div class="line_title"></div>
		</div>
		<div class="container" style="max-width: 1600px !important;">
			<div class="row" >
				<div class="col-xl-1 d-none d-xl-block"></div>
				<div class="col-xl-5 col-lg-6 ">
					<div class="row_downloadtwo row_downloadtwo_left">
						<div class="row " >
							<div class="col-sm-2 downloadtwosub_img_container">
								<div class="downloadtwosub_img">
									<img src="<?php echo @$downloadSetting['Option']['value']['CongCuTKKhoi1Icon']?>" class="img-fluid">
								</div>
							</div>
							<div class="col-sm-6  info_downloadtwo">
								<div class="downloadtwosub_tit">
									<h1><?php echo @$downloadSetting['Option']['value']['CongCuTKKhoi1MoTa1']?></h1>
								</div>
								<div class="downloadtwosub_des">
									<p><?php echo @$downloadSetting['Option']['value']['CongCuTKKhoi1MoTa2']?></p>
								</div>
							</div>
							<div class="col-sm-4 button_dl">
								<!-- button -->
								<div class="oc_bh15_svg_4">
									<a  class=" btn  oc_bh15_btn_svg  " href="<?php echo @$downloadSetting['Option']['value']['CongCuTKKhoi1LinkTai']?>">
										<span class="oc_bh15_btn_svg_label"><i class="fas fa-download index_fontawe" ></i>Download</span>
										<svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="140" style="">
											<g class="oc_bh15_btn_svg_border_left ">
												<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
											</g>
											<g class="oc_bh15_btn_svg_border_right">
												<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
											</g>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-5 col-lg-6">
					<div class="row_downloadtwo row_downloadtwo_right">
						<div class="row " >
							<div class="col-sm-2 downloadtwosub_img_container">
								<div class="downloadtwosub_img">
									<img src="<?php echo hashUrl(@$downloadSetting['Option']['value']['CongCuTKKhoi2Icon'])?>" class="img-fluid">
								</div>
							</div>
							<div class="col-sm-6  info_downloadtwo">
								<div class="downloadtwosub_tit">
									<h1><?php echo @$downloadSetting['Option']['value']['CongCuTKKhoi2MoTa1']?></h1>
								</div>
								<div class="downloadtwosub_des">
									<p><?php echo @$downloadSetting['Option']['value']['CongCuTKKhoi2MoTa2']?></p>
								</div>
							</div>
							<div class="col-sm-4 button_dl">
								<!-- button -->
								<div class="oc_bh15_svg_4">
									<span style="background-color: grey;" class=" btn  oc_bh15_btn_svg" href="<?php echo @$downloadSetting['Option']['value']['CongCuTKKhoi2LinkTai']?>">
										<span class="oc_bh15_btn_svg_label"><i class="fas fa-download index_fontawe" ></i>Download</span>
										<svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="140" style="">
											<g class="oc_bh15_btn_svg_border_left ">
												<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
											</g>
											<g class="oc_bh15_btn_svg_border_right">
												<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
											</g>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-1 d-none d-xl-block"></div>

				<div class="col-xl-1 d-none d-xl-block"></div>
				<div class="col-xl-5 col-lg-6" style="display: none;">
					<div class="row_downloadtwo row_downloadtwo_left">
						<div class="row " >
							<div class="col-sm-2 downloadtwosub_img_container">
								<div class="downloadtwosub_img">
									<img src="<?php echo hashUrl(@$downloadSetting['Option']['value']['CongCuTKKhoi3Icon'])?>" class="img-fluid">
								</div>
							</div>
							<div class="col-sm-6  info_downloadtwo">
								<div class="downloadtwosub_tit">
									<h1><?php echo @$downloadSetting['Option']['value']['CongCuTKKhoi3MoTa1']?></h1>
								</div>
								<div class="downloadtwosub_des">
									<p><?php echo @$downloadSetting['Option']['value']['CongCuTKKhoi3MoTa2']?></p>
								</div>
							</div>
							<div class="col-sm-4 button_dl">
								<!-- button -->
								<div class="oc_bh15_svg_4">
									<a  class=" btn  oc_bh15_btn_svg  " href="<?php echo @$downloadSetting['Option']['value']['CongCuTKKhoi3LinkTai']?>">
										<span class="oc_bh15_btn_svg_label"><i class="fas fa-download index_fontawe" ></i>Download</span>
										<svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="140" style="">
											<g class="oc_bh15_btn_svg_border_left ">
												<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
											</g>
											<g class="oc_bh15_btn_svg_border_right">
												<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
											</g>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-5 col-lg-6 "  style="display: none;">
					<div class="row_downloadtwo row_downloadtwo_right">
						<div class="row " >
							<div class="col-sm-2 downloadtwosub_img_container">
								<div class="downloadtwosub_img">
									<img src="<?php echo hashUrl(@$downloadSetting['Option']['value']['CongCuTKKhoi4Icon'])?>" class="img-fluid">
								</div>
							</div>
							<div class="col-sm-6  info_downloadtwo">
								<div class="downloadtwosub_tit">
									<h1><?php echo @$downloadSetting['Option']['value']['CongCuTKKhoi4MoTa1']?></h1>
								</div>
								<div class="downloadtwosub_des">
									<p><?php echo @$downloadSetting['Option']['value']['CongCuTKKhoi4MoTa2']?></p>
								</div>
							</div>
							<div class="col-sm-4 button_dl">
								<!-- button -->
								<div class="oc_bh15_svg_4">
									<a  class=" btn  oc_bh15_btn_svg  " href="<?php echo @$downloadSetting['Option']['value']['CongCuTKKhoi4LinkTai']?>">
										<span class="oc_bh15_btn_svg_label"><i class="fas fa-download index_fontawe" ></i>Download</span>
										<svg class="oc_bh15_btn_svg_border" preserveAspectRatio="none" viewBox="2 29.3 56.9 13.4" enable-background="new 2 29.3 56.9 13.4" width="140" style="">
											<g class="oc_bh15_btn_svg_border_left ">
												<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9H9c0,0-6.2-0.3-6.2-5.9S9,30.1,9,30.1h21.4"></path>
											</g>
											<g class="oc_bh15_btn_svg_border_right">
												<path fill="none" stroke="#FFF" stroke-width="0.5" stroke-miterlimit="1" d="M30.4,41.9h21.5c0,0,6.1-0.4,6.1-5.9s-6-5.9-6-5.9H30.4"></path>
											</g>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-1 d-none d-xl-block"></div>
			</div><div class="clearfix">  </div>
		</div>
	</div>

	<?php include('download/other-resources.php'); ?>
</section>

<?php include('footer.php'); ?>
