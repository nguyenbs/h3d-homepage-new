<?php
	$otherResources = @$downloadSetting['Option']['value']['otherResources'];
	$blocks = @$otherResources['blocks'];

	if ($blocks) {
		?>
		<div class="download-three" style="background: rgb(215, 230, 210);padding-top: 50px;">
			<div class="text-center secone_title">
				<h1><?php echo @$otherResources['mainTitle'] ?></h1>
				<div class="line_title"></div>
			</div>
			<div class="container" style="max-width: 1600px !important;">
		<?php

		$count = 0;
		$total = count($blocks);
		foreach ($blocks as $block) {
			if ($count % 2 == 0) { //open row
				?>
					<div class="row">
					<div class="col-xl-1 d-none d-xl-block"></div>
				<?php
			}
			?>
			<div class="col-xl-5 col-lg-6 ">
				<div class="row_downloadtwo row_downloadtwo_left">
					<div class="row " >
						<div class="col-sm-2 downloadtwosub_img_container">
							<div class="downloadtwosub_img">
								<img src="<?php echo @$block['Icon']?>" class="img-fluid">
							</div>
						</div>
						<div class="col-sm-6  info_downloadtwo">
							<div class="downloadtwosub_tit">
								<h1><?php echo @$block['title']?></h1>
							</div>
							<div class="downloadtwosub_des">
								<p><?php echo @$block['description']?></p>
							</div>
						</div>
						<div class="col-sm-4 button_dl">
							<!-- button -->
							<div class="oc_bh15_svg_4">
								<a  class=" btn  oc_bh15_btn_svg  " href="<?php echo @$block['downloadLink']?>">
									<span class="oc_bh15_btn_svg_label"><i class="fas fa-download index_fontawe" ></i>Tải về</span>
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


			<?php
			$count++;
			if ($count % 2 == 0 || $count == $total) { //close row
				?>
					<div class="col-xl-1 d-none d-xl-block"></div>
					</div>
				<?php
			}
		}
		?>

			</div>
		</div>
<?php
	}
?>


