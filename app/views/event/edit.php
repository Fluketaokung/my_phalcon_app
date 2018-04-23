<?php 
$id=$this->session->get('id');
$act=Event::findFirst("id = '$id'");?>
<div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">     
    <form name="formUser" action="" method="post">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label col-form-label-sm">Activity Name: </label>
          <div class="col-sm-10">
            <input class="form-control" id="name" name="name" required="" type="text" value="<?php echo $act->name;?>">
            <div class="invalid-feedback">
              Please fill data.
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label col-form-label-sm">Date : </label>
          <div class="col-sm-10">
            <input class="form-control" id="day" name="day" required="" type="date" value="<?php echo $act->date;?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label col-form-label-sm">Detail : </label>
          <div class="col-sm-10">
            <textarea class="form-control" id="detail" name="detail" required="" type="text"><?php echo $act->detail;?></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label col-form-label-sm"></label>
          <div class="col-sm-10">
              <input type="file" class="form-control custom-file-input" name="customFile" id="customFile" value="<?php echo $act->picture;?>">
              <label class="custom-file-label" for="customFile" accept="image/*">Choose picture</label>
          </div>
        </div>
        <div class="form-group">
          <input class="btn btn-sm btn-success" type="submit" value="Submit">
        </div>
      </form>
      </div>
      <div class="col-sm">     
    </div>
 </div>