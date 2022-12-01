<?php getHeader() ;?>
<section>
	<div class="title_page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="con_title">
						<?php echo $tmpVariable['data']['Document']['name'] ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="doc-vn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="single">
					Download <?php echo @$tmpVariable['data']['Document']['download'] ;?>	
					<div class="time">
						<span>
							<?php 
							if(isset($tmpVariable['data']['Document']['time'])){
								$time = getdate($tmpVariable['data']['Document']['time']);
								if ($time['mday']<10) {
									$time['mday'] = '0'.$time['mday'];
								}
								if ($time['mon']<10) {
									$time['mon'] = '0'.$time['mon'];
								}
								if ($time['hours']<10) {
									$time['hours'] = '0'.$time['hours'];
								}
								echo $time['mday'].'/'.$time['mon'].'/'.$time['year'].' | '.$time['hours'].':'.$time['minutes'];
							}
							?>
						</span>
						<?php 
						$urlDocument = $urlHomes.$tmpVariable['data']['Document']['file'];
						$urlComments = $urlHomes.'view-document/'.$tmpVariable['data']['Document']['id'];
						?>
						<span style="padding-left: 10px;" onclick="update('<?php echo $tmpVariable['data']['Document']['id'];?>');">
							<img src="<?php echo $urlThemeActive; ?>img/icon-do.png" height="20px" alt="" title="Tải về">
						</span>
					</div>
					<div class="content-single">
						<p>Please download the file if you can not see it directly: 
							<span style="padding-left: 10px;" onclick="update('<?php echo $tmpVariable['data']['Document']['id'];?>');">
								<img src="<?php echo $urlThemeActive; ?>img/icon-do.png" height="20px" alt="" title="Download">
							</span>
						</p>
						<iframe id="printAble" src="<?php echo $tmpVariable['urlViewFile']; ?>" style="width: 100%; height: 800px;" frameborder="0"></iframe>
					</div>
					<div class="fb-comments" data-href="<?php echo $urlComments ?>" data-numposts="10" data-width="100%" data-colorscheme="light"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	var urlWeb="/updateDowload";
	var urlNow="<?php echo $urlDocument ;?>";
	function update(idDocument)
	{
		$.ajax({
			type: "POST",
			url: urlWeb,
			data: { idDocument:idDocument}
		}).done(function( msg ) { 	
			window.location= urlNow;
		})

		// }    
	}
</script>
<?php getFooter() ;?>