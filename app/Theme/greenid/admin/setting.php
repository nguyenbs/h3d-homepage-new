
<?php
$breadcrumb = array('name' => 'Cài đặt',
  'url' => $urlPlugins . 'theme/theme/greenid-admin-setting.php',
  'sub' => array('name' => 'Cài đặt Trang chủ')
  );
addBreadcrumbAdmin($breadcrumb);
?>
<!-- Lưu -->
<script type="text/javascript">

  function save()
  {
    document.listForm.submit();
  }
</script>
<div class="thanhcongcu">
  <div class="congcu" onclick="save();">
    <input type="hidden" id="idChange" value="" />
    <span id="save">
      <input type="image" src="<?php echo $webRoot; ?>images/save.png" />
    </span>
    <br/>
    Lưu
  </div>
</div>

<div class="clear" style="height: 10px;margin-left: 15px;margin-bottom: 15px;" id='status'>

</div>


<form action="" method="post" name="listForm">
  <p><?php echo $mess;?></p>
  <table class="table table-bordered table-hover table-striped ">
    <!-- Cài đặt mạng xã hội -->
    <tr>
      <td >
        <p style="color: red;font-weight: bold;">Cài đăt mạng xã hội</p>
      </td>
    </tr>
    <tr>
     <td >
       <p>Link Facebook</p>
       <input type="" name="fb" value="<?php echo @$themeData['Option']['value']['fb'];?>" class="form-control" >
       <p>Link Twitter</p>
       <input type="" name="twitter" value="<?php echo @$themeData['Option']['value']['twitter'];?>" class="form-control" >
       <p>Link Youtube</p>
       <input type="" name="youtube" value="<?php echo @$themeData['Option']['value']['youtube'];?>" class="form-control" >
     </td>
   </tr>

   <!--  -->
   <?php 
   global $modelNotice;
   $field = $modelNotice->getAllPage();
// pr($field);
   ?>
   <tr>

     <td colspan="2" style="height: 100px">
       <p style="color: red;font-weight: bold;">Cài đặt phần Lĩnh vực trang chủ ( dưới banner) </p> 
       <p style="">Cài đặt ô 1 </p>
       <select name="tab1" class="form-control" style="margin: 0 auto; width: 90%">
         <option value="">Lựa chọn bài viết</option>
         <?php 
         if(!empty($field)){
          foreach ($field as $key => $value) {
            ?>
            <option value="<?php echo $value['Notice']['id'];?>" <?php if(isset($themeData['Option']['value']['tab1'])&&$themeData['Option']['value']['tab1']==$value['Notice']['id']) {
              echo "selected";
            } ?>><?php echo $value['Notice']['title'];?></option>
            <?php 
          }
        }
        ?>
      </select>
    </td>
  </tr>
  <tr>
   <td colspan="2" style="height: 100px">
     <p style="">Cài đặt ô 2 </p>
     <select name="tab2" class="form-control" style="margin: 0 auto; width: 90%">
      <option value="">Lựa chọn bài viết</option>
      <?php 
      if(!empty($field)){
        foreach ($field as $key => $value) {
          ?>
          <option value="<?php echo $value['Notice']['id'];?>" <?php if(!empty( $themeData['Option']['value']['tab2'])&& $themeData['Option']['value']['tab2']==$value['Notice']['id']) echo'selected';?>><?php echo $value['Notice']['title'];?></option>
          <?php 
        }
      }
      ?>
    </select>
  </td>
</tr>
<tr>
 <td colspan="2" style="height: 100px">
   <p style="">Cài đặt ô 3 </p>
   <select name="tab3" class="form-control" style="margin: 0 auto; width: 90%">
     <option value="">Lựa chọn bài viết</option>
     <?php 
     if(!empty($field)){
      foreach ($field as $key => $value) {
        ?>
        <option value="<?php echo $value['Notice']['id'];?>" <?php if(!empty( $themeData['Option']['value']['tab3'])&& $themeData['Option']['value']['tab3']==$value['Notice']['id']) echo'selected';?>><?php echo $value['Notice']['title'];?></option>
        <?php 
      }
    }
    ?>
  </select>
</td>
</tr>

<tr>
 <td colspan="2" style="height: 100px">
   <p style="">Cài đặt ô 4 </p>
   <select name="tab4" class="form-control" style="margin: 0 auto; width: 90%">
    <option value="">Lựa chọn bài viết</option>
    <?php 
    if(!empty($field)){
      foreach ($field as $key => $value) {
        ?>
        <option value="<?php echo $value['Notice']['id'];?>" <?php if(!empty( $themeData['Option']['value']['tab4'])&& $themeData['Option']['value']['tab4']==$value['Notice']['id']) echo'selected';?>><?php echo $value['Notice']['title'];?></option>
        <?php 
      }
    }
    ?>
  </select>
</td>
</tr>



<!-- Cài đặt sự kiện trang chủ -->
<tr>
  <td >
   <p style="color: red;font-weight: bold;">Cài đặt chuyên mục tin cho phần Sự kiện trang chủ</p> 
   <select name="sukien" class="form-control">
     <option value="">Chọn chuyên mục tin tức</option>
     <?php 
     if(!empty($categoryNotice)){
      foreach ($categoryNotice as $key => $value) {
        ?>
        <option value="<?php echo $value['id'];?>" <?php if(!empty($themeData['Option']['value']['sukien'])&&$themeData['Option']['value']['sukien']==$value['id']) echo'selected';?>><?php echo $value['name'];?></option>
        <?php 
      }
    }
    ?>
  </select>
</td>
</tr>
<!-- Cài đặt dự án trang chủ -->

<tr>

 <td colspan="2" style="height: 100px">
   <p style="color: red;font-weight: bold;">Cài đặt Dự án hiển thị phần dự án</p> 
   <p style="">Cài đặt ô dự án 1 </p>
   <select name="duan1" class="form-control" style="margin: 0 auto; width: 90%">
     <option value="">Lựa chọn dự án</option>
     <?php 
     if(function_exists('getListTimeLine')){
      $data=getListTimeLine(10);
      if(!empty($data)){
        foreach ($data as $key => $value) {
          // pr($value);
          ?>
          <option <?php if(!empty($themeData['Option']['value']['duan1']) && ($themeData['Option']['value']['duan1'] ==$value['TimeLine']['id'])) echo 'selected'; ?> value="<?php echo $value['TimeLine']['id']; ?>"><?php echo $value['TimeLine']['name'];  ?></option>
          <?php 
        }
      }
    }

    ?>
  </select>
</td>
</tr>

<tr>
 <td colspan="2" style="height: 100px">
   <p style="">Cài đặt ô dự án 2 </p>
   <select name="duan2" class="form-control" style="margin: 0 auto; width: 90%">
     <option value="">Lựa chọn dự án</option>
     <?php 
     if(function_exists('getListTimeLine')){
      $data=getListTimeLine(10);
      if(!empty($data)){
        foreach ($data as $key => $value) {
          // pr($value);
          ?>
          <option <?php if(!empty($themeData['Option']['value']['duan2']) && ($themeData['Option']['value']['duan2'] ==$value['TimeLine']['id'])) echo 'selected'; ?> value="<?php echo $value['TimeLine']['id']; ?>"><?php echo $value['TimeLine']['name'];  ?></option>
          <?php 
        }
      }
    }

    ?>
  </select>
</td>
</tr>

<!-- Cài đặt dự án trang chủ -->
<?php
global $modelOption;
$partner = $modelOption->getOption('partnerSetting');
$donor = $modelOption->getOption('donorSetting');
?>
<tr>

 <td colspan="2" style="height: 100px">
   <p style="color: red;font-weight: bold;">Cài đặt slide footer</p> 
   <select name="donghanh" class="form-control" style="margin: 0 auto; width: 90%">
     <option value="">Lựa chọn đối tác hoặc nhà tài trợ</option>
     <option <?php if(!empty($themeData['Option']['value']['donghanh']) && ($themeData['Option']['value']['donghanh'] ==$partner['Option']['value']['tData'])) echo 'selected'; ?> value="<?php echo $partner['Option']['value']['tData']; ?>">Đối tác</option>
     <option <?php if(!empty($themeData['Option']['value']['donghanh']) && ($themeData['Option']['value']['donghanh'] ==$donor['Option']['value']['tData'])) echo 'selected'; ?>value="<?php echo $donor['Option']['value']['tData']; ?>">Nhà tài trợ</option>
   </select>
 </td>
</tr>
</table>
</form>