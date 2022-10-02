@extends('users.layouts.main')
<input type="text" name="caption">
<div class="col-md-5 col-sm-8">
    <h4 class="title"><small>Regular Image</small></h4>
    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
        <div class="fileinput-new thumbnail img-no-padding" style="max-width: 400px; max-height: 250px;">
            <img src="assets/img/image_placeholder.jpg" alt="...">
        </div>
        <div class="fileinput-preview fileinput-exists thumbnail img-no-padding" style="max-width: 400px; max-height: 250px;"></div>
        <div>
            <span class="btn btn-outline-default btn-file btn-round"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
            <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists btn-round" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
        </div>
    </div>
</div>