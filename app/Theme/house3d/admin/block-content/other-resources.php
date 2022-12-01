<?php
$otherResources = @$themeData['Option']['value']['otherResources'];
?>

<br>
<br>
<div class="container-fluid" id="other-resources">
    <div class="row">
        <div class="col-md-12">
            <p class="bold-center" style="color:red">THÊM KHỐI NỘI DUNG</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <?php $blockIndex = @$otherResources['blockIndex'];
                if (!$blockIndex) $blockIndex = 0;
                ?>
                <input type="hidden" class="form-control" id="other-resources-block-index"
                       name="otherResources[blockIndex]" value="<?= $blockIndex; ?>">

                <button type="button" class="btn btn-success" id="other-resources-add-block">
                    <i class="glyphicon glyphicon-plus"></i> Thêm Khối
                </button>
            </div>
        </div>
    </div>
    <div class="row" id="block-list">
        <?php
        $blocks = @$otherResources['blocks'];
        if ($blocks) {
            $blocks = array_merge($blocks);
            foreach ($blocks as $index => $block) {
                $blockName = "otherResources[blocks][$index]";
                ?>
                <div class="block" id="<?= $index?>">
                    <div class="col-md-12">
                        <p class="p-center text-center">Nội dung <?= $index+4?></p>
                    </div>
                    <div class="col-md-4">
                        <label for="<?= $blockName?>[Head]">Heading nội dung <?= $index+4?></label>
                        <input type="text" class="form-control" placeholder="" name="<?= $blockName?>[Head]" id="<?= $blockName?>[Head]" value="<?= @$block['Head']; ?>">
                    </div>
                    <div class="col-md-4">
                        <p class="p-center">Poster - video nội dung <?= $index+4?></p>
                        <input type="text" name="<?= $blockName?>[Poster]" id="<?= $blockName?>[Poster]" value="<?= @$block['Poster']; ?>">
                        <input type="button" value="Lựa chọn" onclick="BrowseServer( 'Files:/', '<?= $blockName?>[Poster]' );">
                    </div>
                    <div class="col-md-4">
                        <p class="p-center">Video nội dung <?= $index+4?></p>
                        <input type="text" name="<?= $blockName?>[Video]" id="<?= $blockName?>[Video]" value="<?= @$block['Video']; ?>">
                        <input type="button" value="Lựa chọn" onclick="BrowseServer( 'Files:/', '<?= $blockName?>[Video]' );">
                    </div>
                    <br>
                    <div class="col-md-12" style="margin-top: 20px">
                        <label for="<?= $blockName?>[con]"> Nội dung</label>
                        <?php showEditorInput(@$blockName.'[Content]',@$blockName.'[Content]', @$block['Content']);?>
                    </div>
                    <div class="col-md-12" style="margin-top: 10px">
                        <button type="button" class="btn btn-danger remove" id="other-resources-remove-block<?= $index?>">
                            <i class="glyphicon glyphicon-minus"></i> Xóa Khối
                        </button>
                    </div>
                </div>

                <?php
            }
        }
        ?>
    </div>
    <div class="col-md-12">
        <button type="button" class="btn btn-danger" id="remove-block" style="float:right;display: none;margin-top: 15px;">
            <i class="glyphicon glyphicon-minus"></i> Xóa Khối
        </button>
    </div>
</div>

<script type="text/javascript">
    $( document ).ready(function() {
        var index = $('#other-resources #other-resources-block-index').val();
        $('#other-resources #other-resources-add-block').click(function () {
            var list = $('#other-resources #block-list');
            index++;
            var x = Number(index)+3;
            var block_html = '<div class="block_new">'+'<div class="col-md-12">' +
                '<p class="p-center text-center">Nội dung '+x+'</p>' +
                '</div>' +
                '<div class="col-md-4">' +
                '<label for="otherResources[blocks]['+index+'][Head]">Heading nội dung '+x+'</label>' +
                '<input type="text" class="form-control" placeholder="" name="otherResources[blocks]['+index+'][Head]" id="otherResources[blocks]['+index+'][Head]" value=""><br>' +
                '</div>'+
                '<div class="col-md-4">'+
                '<p class="p-center">Poster - video nội dung '+x+'</p>'+
                '<input type="text" name="otherResources[blocks]['+index+'][Poster]" id="otherResources[blocks]['+index+'][Poster]" value="">'+
                '<input type="button" value="Lựa chọn" onclick="BrowseServer( \'Files:/\', \'otherResources[blocks]['+index+'][Poster]\' );">'+
                '</div>'+
                '<div class="col-md-4">'+
                '<p class="p-center">Video nội dung '+x+'</p>'+
                '<input type="text" name="otherResources[blocks]['+index+'][Video]" id="otherResources[blocks]['+index+'][Video]" value="">'+
                '<input type="button" value="Lựa chọn" onclick="BrowseServer( \'Files:/\', \'otherResources[blocks]['+index+'][Video]\' );">'+
                '</div>'+
                '<div class="col-md-12">'+
                '<textarea name="otherResources[blocks]['+index+'][Content]" id="otherResources[blocks]['+index+'][Content]" ></textarea>'+
                '<script type="text/javascript">'+
                'CKEDITOR.replace("otherResources[blocks]['+index+'][Content]");'+
                'CKEDITOR.contentEditable=true;'+
                '</'+'script>'+
                '</div>'+
                '</div>';

            list.append( block_html );
            $('#other-resources #other-resources-block-index').val(index);
            $('#remove-block').css('display','block');
        });

        $('.remove').click(function () {
            var arr = $(this).attr('id');
            arr = arr.substring(arr.length-1,arr.length);
            $(this).parent().parent().get(0).remove();
            var inde = $('#other-resources #other-resources-block-index').val();
            inde--;
            $('#other-resources #other-resources-block-index').val(inde);
        });
        $('#remove-block').on('click', function(e) {
            e.preventDefault();
            $('.block_new').remove();
            $('#remove-block').css('display','none');
            var inde = $('#other-resources #other-resources-block-index').val();
            inde--;
            $('#other-resources #other-resources-block-index').val(inde);
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