<?php
	$otherResources = @$themeData['Option']['value']['otherResources'];
?>

<tr>
	<td>
		<div class="container-fluid" id="other-resources">
			<div class="row">
				<div class="col-md-12">
					<p class="bold-center" style="color:red">KHỐI CÁC TÀI NGUYÊN KHÁC</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<p class="p-center">Tiêu đề khối</p>
					<input type="text" class="form-control" placeholder="" name="otherResources[mainTitle]"
						   value="<?php echo @$otherResources['mainTitle']; ?>">
				</div>
				<div class="col-md-3"></div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="pull-right">
							<?php $blockIndex = @$otherResources['blockIndex'];
							if (!$blockIndex) $blockIndex = 0;
							?>
							<input type="hidden" class="form-control" id="other-resources-block-index"
								   name="otherResources[blockIndex]" value="<?= $blockIndex; ?>">
							<button type="button" class="btn btn-danger" id="other-resources-remove-block">
								<i class="glyphicon glyphicon-minus"></i> Xóa Bớt Khối
							</button>
							<button type="button" class="btn btn-success" id="other-resources-add-block">
								<i class="glyphicon glyphicon-plus"></i> Thêm Khối
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="row" id="block-list">

				<?php
				$blocks = @$otherResources['blocks'];
				if ($blocks) {
					foreach ($blocks as $index => $block) {
						$blockName = "otherResources[blocks][$index]";
						?>
						<div class="col-md-6 block-container">
							<p class="p-center">Khối <?= $index?>:</p>

							<div class="form-group">
								<label class="control-label col-sm-2" for="<?= $blockName?>[Icon]">Icon:</label>

								<div class="col-sm-10">
									<input style="float: left;" type="text" name="<?= $blockName?>[Icon]" id="<?= $blockName?>[Icon]"
										   value="<?= @$block['Icon']; ?>">
									<input type="button" value="Lựa chọn" onclick="BrowseServer( 'Files:/', '<?= $blockName?>[Icon]' );">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="<?= $blockName?>[title]">Tiêu đề:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="<?= $blockName?>[title]"
										   name="<?= $blockName?>[title]" placeholder="Nhập tiêu đề cho khối"
										   value="<?= @$block['title']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="<?= $blockName?>[description]">Miêu tả:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="<?= $blockName?>[description]"
										   name="<?= $blockName?>[description]" placeholder="Nhập miêu tả cho khối"
										   value="<?= @$block['description']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="<?= $blockName?>[downloadLink]">link tải:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="<?= $blockName?>[downloadLink]"
										   name="<?= $blockName?>[downloadLink]" placeholder="Nhập link tải cho khối"
										   value="<?= @$block['downloadLink']; ?>">
								</div>
							</div>
						</div>
						<?php
					}
				}
				?>

			</div>
		</div>
	</td>
</tr>

<script type="text/javascript">
	$( document ).ready(function() {
		var index = $('#other-resources #other-resources-block-index').val();
		$('#other-resources #other-resources-add-block').click(function () { //add block function
			var list = $('#other-resources #block-list');
			index ++;

			var block_html = '<div class="col-md-6 block-container">' +
				'<p class="p-center">Khối '+index+':</p>' +
				'<div class="form-group">' +
				'<label class="control-label col-sm-2" for="otherResources[blocks]['+index+'][Icon]">Icon:</label>' +
				'<div class="col-sm-10">' +
				'<input style="float: left;" type="text" name="otherResources[blocks]['+index+'][Icon]" id="otherResources[blocks]['+index+'][Icon]" value="">' +
				'<input type="button" value="Lựa chọn" onclick="BrowseServer( \'Files:/\', \'otherResources[blocks]['+index+'][Icon]\' );">' +
				'</div>' +
				'</div>' +
				'<div class="form-group">' +
				'<label class="control-label col-sm-2" for="otherResources[blocks]['+index+'][title]">Tiêu đề:</label>' +
				'<div class="col-sm-10">' +
				'<input type="text" class="form-control" id="otherResources[blocks]['+index+'][title]" name="otherResources[blocks]['+index+'][title]" placeholder="Nhập tiêu đề cho khối" value="">' +
				'</div>' +
				'</div>' +
				'<div class="form-group">' +
				'<label class="control-label col-sm-2" for="otherResources[blocks]['+index+'][description]">Miêu tả:</label>' +
				'<div class="col-sm-10">' +
				'<input type="text" class="form-control" id="otherResources[blocks]['+index+'][description]" name="otherResources[blocks]['+index+'][description]" placeholder="Nhập miêu tả cho khối" value="">' +
				'</div>' +
				'</div>' +
				'<div class="form-group">' +
				'<label class="control-label col-sm-2" for="otherResources[blocks]['+index+'][downloadLink]">link tải:</label>' +
				'<div class="col-sm-10">' +
				'<input type="text" class="form-control" id="otherResources[blocks]['+index+'][downloadLink]" name="otherResources[blocks]['+index+'][downloadLink]" placeholder="Nhập link tải cho khối" value="">' +
				'</div>' +
				'</div>' +
				'</div>';

			list.append( block_html );
			$('#other-resources #other-resources-block-index').val(index);
		});

		$('#other-resources #other-resources-remove-block').click(function () {
			var blocks = $('#other-resources #block-list .block-container');

			if (index > 0) {
				blocks.last().remove();
				index--;
				$('#other-resources #other-resources-block-index').val(index);
			}
		});
	});

	function BrowseServer( startupPath, functionData )
	{
		var finder = new CKFinder();

		finder.basePath = '../';
		finder.startupPath = startupPath;
		finder.selectActionFunction = SetFileField;
		finder.selectActionData = functionData;
		finder.popup();
	}

	function SetFileField( fileUrl, data )
	{
		document.getElementById( data["selectActionData"] ).value = fileUrl;
	}
</script>
