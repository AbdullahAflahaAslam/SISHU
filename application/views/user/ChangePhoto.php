<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#test').attr('src', e.target.result);
                    //$("#test").css("display", "block");
                   /* $('#test').css({"display":"block","float":"left" });*/

                }
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

<div class="card demo-icons">
  <div class="card-header">
    <h4 class="card-title"> Upload Image </h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <code><?php echo $status; ?></code>
    <?php echo form_open_multipart(base_url()."User/ChangePhoto"); ?>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> <span class="required"></span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <?php 
            if (empty($user[0]->file_photo)){
          ?>
          <img src="<?php echo base_url() ?>assets/img/photo/default.jpg" alt="..." id="test" style="max-width: 180px; max-height: 240px;line-height: 10px; margin: auto;" >
          <?php 
           }else{
          ?>
          <img src="<?php echo base_url().'file/'.$user[0]->id_user .'/'.$user[0]->file_photo ?>" alt="..." id="test" style="max-width: 180px; max-height: 240px;line-height: 10px; margin: auto;" >
          <?php 
            }
          ?>
          <hr class="sidebar-divider">

          <input type="file" name="PhotoProfile" class="default" id="image_file"  onchange="readURL(this);" accept=".jpg, .png, .jpeg">
          <input type="hidden"  name="id_user" value="<?php echo $user[0]->id_user; ?>">
        </div>
      </div> 
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <hr class="sidebar-divider">
        <input type="submit" class="btn btn-success" name="Simpan" value="Save" id="upload"></input>
        </div>
      </div>
    </form>
    </div>
  </div>
