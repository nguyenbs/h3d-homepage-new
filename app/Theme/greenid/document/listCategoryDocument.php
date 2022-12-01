<?php getHeader() ;?>
<div class="title_page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="con_title">
					<?php echo $tmpVariable['category']['name']; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<section id="document">
	<div class="container">
		<form>
			<div class="row">
				<div class="col-sm-6">
					<div class="doc-input1">
						<input type="text" name="key" placeholder="File name">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="doc-input2">
						<input type="text" name="nam" placeholder="Publishing year: Ex 1995"><button type="submit"><strong>Search</strong></button>
					</div>
				</div>
			</div>
		</form>
		<div class="row">
			<?php 
			foreach ($tmpVariable['listNotices'] as $doc) {
				$urlDoc= $urlHomes.'view-document/'.$doc['Document']['id'];
				if(empty($doc['Document']['image'])){
					$urlImg = $urlThemeActive.'img/12.jpg';
				}else{
					$urlImg = $doc['Document']['image'];
				}


				?>
				<div  class="col-md-3 col-sm-4 col-xs-6">
					<div class="doc-item">
						<a  href="<?php echo $urlDoc; ?>">
							<img src="<?php echo $urlImg; ?>" >
							<p><?php echo $doc['Document']['name']; ?></p>
						</a>
						<div class="doc-dow2 text-right">
							Download: <?php echo @$doc['Document']['download']; ?>
						</div>
					</div>
				</div>
				<?php 
			}

			?>
		</div>
		<!-- phân trang -->
		<?php
		if(isset($_GET['page'])){
			$urlNow= str_replace('&page='.$tmpVariable['page'], '', $urlNow);
			$urlNow= str_replace('?page='.$tmpVariable['page'], '', $urlNow);
		}
		if(strpos($urlNow,'?')!== false)
		{
			$urlNow= $urlNow.'&page=';
		}
		else
		{
			$urlNow= $urlNow.'?page=';
		}
		?>
		<?php
		if ($tmpVariable['page'] > 5) { 
			$startPage = $tmpVariable['page'] - 5; 
		} else { 
			$startPage = 1; 
		} 
		if ($tmpVariable['totalPage'] > $tmpVariable['page'] + 5) { 
			$endPage = $page + 5; 
		} else { 
			$endPage = $tmpVariable['totalPage']; 
		} 
		?> 
		<?php if(!empty($tmpVariable['listNotices'])){
			?>
			<div class="c-page col-sm-12">
				<ul class="c-pag pagination ">
					<li class="page-item <?php if($tmpVariable['page']==1) echo 'disabled';?>"><a class="page-link" href="<?php echo $urlNow.$tmpVariable['back']; ?>" class="btn btn-prev">Prev Page</a></li>

					<?php for ($i = $startPage; $i <= $endPage; $i++) { ?> 
					<li class="page-item <?php 
					if ($i == $tmpVariable['page']) { echo 'active'; } 
					?>"><a class="page-link" href="<?php echo $urlNow.$i; ?>"><?php echo $i; ?></a></li> 
					<?php
				} 
				?> 
				<li class="page-item"><a class="page-link" href="<?php echo $urlNow.$tmpVariable['next'] ?>" class="btn btn-next">Next Page</a> </li>
			</ul>
		</div> 
		<?php 
	} else{
		echo '<h4 class="text-center">This category does not have any documents yet!</h4>'; 
	}
	?>

</div>
</section>
<?php getFooter() ;?>