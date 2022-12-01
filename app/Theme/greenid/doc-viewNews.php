<?php include "header.php" ;?></div>

<section id="doc-vn">
	<div class="title_page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="con_title">
						Chính sách an toàn môi trường và xã hội
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="single">
					Lượt tải 2	
					<div class="time">
						<span>11/09/2017 | 17:4</span>
						<span style="padding-left: 10px;" onclick="update('5a5736cb5cd7e81f2193af84');">
							<img src="img/icon-do.png" height="20px" alt="" title="Tải về">
						</span>
					</div>
					<div class="content-single">
						<p>Vui lòng tải file về máy nếu bạn không xem trực tiếp được: 
							<span style="padding-left: 10px;" onclick="update('5a5736cb5cd7e81f2193af84');">
								<img src="img/icon-do.png" height="20px" alt="" title="Tải về">
							</span>
						</p>
						<iframe id="printAble" src="http://docs.google.com/viewer?url=http%3A%2F%2Fgreenidvietnam.org.vn%2F%2Fapp%2Fwebroot%2Fupload%2Fadmin%2Ffiles%2FInfo_Cs_ngan%2520hang_KEXIM.pdf&amp;embedded=true" style="width: 100%; height: 800px;" frameborder="0"></iframe>
					</div>
					<div class="fb-comments" data-href="http://greenidvietnam.org.vn/view-document/5a5736cb5cd7e81f2193af84" data-numposts="10" data-width="100%" data-colorscheme="light"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	var urlWeb="/updateDowload";
	var urlNow="http://greenidvietnam.org.vn//app/webroot/upload/admin/files/Info_Cs_ngan%20hang_KEXIM.pdf";
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
<?php include "footer.php" ;?>