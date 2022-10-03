@extends('users.layout.main')
@section('contents')
<div class="wrapper">
    <div class="main">
        <div class="section">
            <div class="container">
                <h3>Add Product</h3>
                <form>
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <h6>Product Image</h6>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail img-no-padding"
                                    style="max-width: 370px; max-height: 250px;">
                                    <img src="../assets/img/image_placeholder.jpg" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail img-no-padding"
                                    style="max-width: 370px; max-height: 250px;"></div>
                                <div>
                                    <span class="btn btn-outline-default btn-round btn-file"><span
                                            class="fileinput-new">Select image</span><span
                                            class="fileinput-exists">Change</span><input type="file"
                                            name="test[]"></span>
                                    <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists"
                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>

                            <h6>Tags</h6>
                            <div id="tags">
                                <div class="bootstrap-tagsinput"><span class="badge badge badge-success">Minimal<span
                                            data-role="remove"></span></span> <span class="badge badge badge-success">
                                        Light<span data-role="remove"></span></span> <span
                                        class="badge badge badge-success"> New<span data-role="remove"></span></span>
                                    <span class="badge badge badge-success"> Friends<span
                                            data-role="remove"></span></span> <input type="text" placeholder="">
                                </div>
                                <input type="text" value="Minimal, Light, New, Friends" data-role="tagsinput"
                                    style="display: none;">
                                <!-- <div class="tagsinput-add"></div> -->
                                <!-- You can change "tag-primary" with with "tag-info", "tag-success", "tag-warning","tag-danger" -->
                            </div>
                            <h6>Categories</h6>
                            <div id="tags-2">
                                <div class="bootstrap-tagsinput"><span class="badge badge badge-success">Food<span
                                            data-role="remove"></span></span> <span class="badge badge badge-success">
                                        Drink<span data-role="remove"></span></span> <input type="text" placeholder="">
                                </div><input type="text" value="Food, Drink" data-role="tagsinput"
                                    style="display: none;">
                                <!-- <div class="tagsinput-add"></div> -->
                                <!-- You can change "tag-primary" with with "tag-info", "tag-success", "tag-warning","tag-danger" -->
                            </div>

                            <h6>Format <span class="icon-danger">*</span></h6>
                            <div class="form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1" value="option1">
                                    Digital
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                            <div class="form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios2" value="option2" checked="">
                                    Print
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>

                        </div>

                        <div class="col-md-7 col-sm-7">
                            <div class="form-group">
                                <h6>Name <span class="icon-danger">*</span></h6>
                                <input type="text" class="form-control border-input"
                                    placeholder="enter the product name here...">
                            </div>
                            <div class="form-group">
                                <h6>Tagline <span class="icon-danger">*</span></h6>
                                <input type="text" class="form-control border-input"
                                    placeholder="enter the product tagline here...">
                            </div>
                            <div class="row price-row">
                                <div class="col-md-6">
                                    <h6>Price <span class="icon-danger">*</span></h6>
                                    <div class="input-group border-input">
                                        <input type="text" value="" placeholder="enter price"
                                            class="form-control border-input">
                                        <span class="input-group-addon"><i class="fa fa-euro"></i></span>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <h6>Discount</h6>
                                    <div class="input-group border-input">
                                        <input type="text" value="" placeholder="enter discount"
                                            class="form-control border-input">
                                        <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6>Description</h6>
                                <textarea class="form-control textarea-limited"
                                    placeholder="This is a textarea limited to 150 characters." rows="13" ,=""
                                    maxlength="150"></textarea>
                                <h5><small><span id="textarea-limited-message" class="pull-right">150 characters
                                            left</span></small></h5>

                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="">
                                    Display on landing page
                                    <span class="form-check-sign"></span>
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="row buttons-row">
                        <div class="col-md-4 col-sm-4">
                            <button class="btn btn-outline-danger btn-block btn-round">Cancel</button>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button class="btn btn-outline-primary btn-block btn-round">Save</button>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button class="btn btn-primary btn-block btn-round">Save &amp; Publish </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection