@extends('users.layouts.main')
@section('contents')
<div class="wrapper">
    <div class="page-header" style="background-image: url('assets/img/cover.jpg')">
        <div class="filter"></div>
        <div class="content-center">
            <div class="motto">
                <h1 class="text-center">Paper Kit 2 Pro</h1>
                <h3 class="text-center">Components</h3>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="section section-buttons section-gray">
            <div class="container">
                <div class="title">
                    <h2>Basic Elements</h2>
                </div>
                <div id="buttons">
                    <div class="title">
                        <h3>Buttons <br><small>Pick your style</small>
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <button type="button" class="btn btn-info">Default</button>
                            <button type="button" class="btn btn-info btn-round">Round</button>
                            <button type="button" class="btn btn-info btn-round"><i class="fa fa-heart"></i> With Icon</button>
                            <button type="button" class="btn btn-info btn-just-icon"><i class="fa fa-heart"></i></button>
                            <button type="button" class="btn btn-info btn-link">Simple</button>
                        </div>
                    </div>
                    <div class="title">
                        <h3><small>Pick your size</small></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <button type="button" class="btn btn-outline-danger btn-sm">Small</button>
                            <button type="button" class="btn btn-outline-danger">Regular</button>
                            <button type="button" class="btn btn-outline-danger btn-lg">Large</button>
                        </div>
                    </div>
                    <div class="title">
                        <h3><small>Pick your color</small></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <button type="button" class="btn btn-outline-default btn-round">Default</button>
                            <button type="button" class="btn btn-outline-primary btn-round">Primary</button>
                            <button type="button" class="btn btn-outline-info btn-round">Info</button>
                            <button type="button" class="btn btn-outline-success btn-round">Success</button>
                            <button type="button" class="btn btn-outline-warning btn-round">Warning</button>
                            <button type="button" class="btn btn-outline-danger btn-round">Danger</button>
                            <button type="button" class="btn btn-outline-neutral btn-round">Neutral</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-8">
                            <button type="button" class="btn btn-default btn-round">Default</button>
                            <button type="button" class="btn btn-primary btn-round">Primary</button>
                            <button type="button" class="btn btn-info btn-round">Info</button>
                            <button type="button" class="btn btn-success btn-round">Success</button>
                            <button type="button" class="btn btn-warning btn-round">Warning</button>
                            <button type="button" class="btn btn-danger btn-round">Danger</button>
                            <button type="button" class="btn btn-neutral btn-round">Neutral</button>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <h3>Links</h3>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <a href="#0" class="btn btn-link btn-default">Default</a>
                        <a href="#0" class="btn btn-link btn-primary">Primary</a>
                        <a href="#0" class="btn btn-link btn-success">Success</a>
                        <a href="#0" class="btn btn-link btn-info">Info</a>
                        <a href="#0" class="btn btn-link btn-warning">Warning</a>
                        <a href="#0" class="btn btn-link btn-danger">Danger</a>
                        <a href="#0" class="btn btn-link btn-neutral">Neutral</a>
                    </div>
                </div>
                <div id="icon-buttons">
                    <div class="title">
                        <h3>Buttons with icons</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <button type="button" class="btn btn-default btn-just-icon"><i class="fa fa-twitter" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-info btn-outline-default btn-just-icon"><i class="fa fa-twitter" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-default btn-link btn-just-icon"><i class="fa fa-twitter" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-round"><i class="nc-icon nc-settings-gear-65"></i> Settings</button>
                            <button type="button" class="btn btn-outline-default btn-border btn-round"><i class="nc-icon nc-settings-gear-65"></i> Settings</button>
                            <button type="button" class="btn btn-link btn-round"><i class="nc-icon nc-settings-gear-65"></i> Settings</button>
                            <br><br>
                            <button type="button" class="btn btn-warning btn-just-icon btn-sm"><i class="nc-icon nc-sound-wave"></i></button>
                            <button type="button" class="btn btn-danger btn-just-icon"><i class="nc-icon nc-simple-remove" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-default btn-just-icon btn-lg"><i class="nc-icon nc-chat-33"></i></button>
                        </div>
                    </div>
                </div>
                <br>
                <div id="icon-buttons">
                    <div class="title">
                        <h3>Social buttons</h3>
                        <h3><small>Default</small></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <button class="btn btn-just-icon btn-twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-google">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-linkedin">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-pinterest">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-youtube">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-tumblr">
                                <i class="fa fa-tumblr" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-github">
                                <i class="fa fa-github-alt" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-dribbble">
                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-reddit">
                                <i class="fa fa-reddit-alien" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-instagram">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="title">
                        <h3><small>Bordered</small></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <button class="btn btn-just-icon btn-border btn-twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-border btn-facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-border btn-google">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-border btn-linkedin">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-border btn-pinterest">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-border btn-youtube">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-border btn-tumblr">
                                <i class="fa fa-tumblr" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-border btn-github">
                                <i class="fa fa-github-alt" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-border btn-dribbble">
                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-border btn-reddit">
                                <i class="fa fa-reddit-alien" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-border btn-instagram">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="title">
                        <h3><small>Links</small></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <button class="btn btn-just-icon btn-link btn-twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-link btn-facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-link btn-google">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-link btn-linkedin">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-link btn-pinterest">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-link btn-youtube">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-link btn-tumblr">
                                <i class="fa fa-tumblr" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-link btn-github">
                                <i class="fa fa-github-alt" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-link btn-dribbble">
                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-link btn-reddit">
                                <i class="fa fa-reddit-alien" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-just-icon btn-link btn-instagram">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="animated-buttons">
                    <div class="title">
                        <h3>Animated Buttons</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <button class="btn btn-rotate btn-round"><i class="nc-icon nc-settings-gear-65"></i> Settings</button>
                            <button class="btn btn-magnify btn-round"><i class="nc-icon nc-zoom-split"></i> Search</button>
                            <button class="btn btn-move-left btn-round"><i class="nc-icon nc-minimal-left"></i> Back</button>
                            <button class="btn btn-move-right btn-round">Next <i class="nc-icon nc-minimal-right"></i> </button>
                        </div>
                    </div>
                </div>
                <div id="inputs">
                    <div class="title">
                        <h3>Inputs</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" value="" placeholder="Simple" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" value="" placeholder="No Border" class="form-control no-border">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" value="" placeholder="Disabled" class="form-control" disabled="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="input-group">
                            <!-- 	   Since the css properties cannot check the previous sibling of an element and for the design consistency we recommend to use the "input-group-addon" after the "form-control" like in this example -->
                              <input type="text" placeholder="Group Addon" class="form-control">
                              <span class="input-group-addon"><i class="fa fa-group"></i></span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group no-border">
                              <input type="text" placeholder="No Border" class="form-control no-border">
                              <span class="input-group-addon no-border">%</span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group" disabled="">
                              <input type="text" placeholder="Group Disabled" class="form-control" disabled="">
                              <span class="input-group-addon"><i class="fa fa-group"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group has-success">
                            <input type="text" value="Success" id="inputSuccess1" class="form-control form-control-success">
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group has-success">
                            <input type="text" value="Success" id="inputSuccess1" class="form-control form-control-success no-border">
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group has-danger">
                                <input type="text" class="form-control form-control-danger" id="inputDanger1" value="Error">
                                <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group has-danger">
                                <input type="text" class="form-control form-control-danger no-border" id="inputDanger1" value="Error">
                                <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="title">
                            <h3>Checkboxes</h3>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                Unchecked
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked="">
                                Checked
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" disabled="">
                                Disabled unchecked
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" disabled="" checked="">
                                Disabled checked
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="title">
                            <h3>Radio Buttons</h3>
                        </div>

                        <div class="form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                Radio is off
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked="">
                                Radio is on
                                <span class="form-check-sign"></span>
                            </label>
                        </div>

                        <div class="form-check-radio disabled">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled="">
                                Disabled radio is off
                                <span class="form-check-sign"></span>
                            </label>
                        </div>

                        <div class="form-check-radio disabled">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadioz" id="exampleRadios4" value="option4" checked="" disabled="">
                                Disabled radio is on
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div id="textarea">
                    <div class="title">
                        <h3>Textarea</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <textarea class="form-control border-input" placeholder="This is a textarea with border. Here can be your nice text" rows="3"></textarea>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <textarea class="form-control textarea-limited" placeholder="This is a textarea limited to 150 characters." rows="3" ,="" maxlength="150"></textarea>
                            <h5><small><span id="textarea-limited-message" class="pull-right">150 characters left</span></small></h5>
                        </div>
                    </div>
                </div>
                <div id="switches">
                    <div class="title">
                        <h3>Switches</h3>
                    </div>
                    <label>
                        <div class="bootstrap-switch-on bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-default" style="width: 50px;">ON</span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 50px;">OFF</span><input type="checkbox" data-toggle="switch" checked="" data-on-color="default" data-off-color="default"></div></div><span class="toggle"></span>
                    </label>
                    <label>
                        <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: -50px;"><span class="bootstrap-switch-handle-on bootstrap-switch-default" style="width: 50px;">ON</span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 50px;">OFF</span><input type="checkbox" data-toggle="switch" data-off-color="default" data-on-color="default"></div></div><span class="toggle"></span>
                    </label>&nbsp;&nbsp;&nbsp;
                    <label>
                        <div class="bootstrap-switch-on bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 50px;">ON</span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-primary" style="width: 50px;">OFF</span><input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"></div></div><span class="toggle"></span>
                    </label>
                    <label>
                        <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: -50px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 50px;">ON</span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-primary" style="width: 50px;">OFF</span><input type="checkbox" data-toggle="switch" data-off-color="primary" data-on-color="primary"></div></div><span class="toggle"></span>
                    </label>&nbsp;&nbsp;&nbsp;
                    <label>
                        <div class="bootstrap-switch-on bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-info" style="width: 50px;">ON</span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-info" style="width: 50px;">OFF</span><input type="checkbox" data-toggle="switch" checked="" data-on-color="info" data-off-color="info"></div></div><span class="toggle"></span>
                    </label>
                    <label>
                        <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: -50px;"><span class="bootstrap-switch-handle-on bootstrap-switch-info" style="width: 50px;">ON</span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-info" style="width: 50px;">OFF</span><input type="checkbox" data-toggle="switch" data-off-color="info" data-on-color="info"></div></div><span class="toggle"></span>
                    </label>

                    <div class="title">
                        <h3>Switches with icons</h3>
                    </div>
                    <label>
                        <div class="bootstrap-switch-on bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-success" style="width: 50px;"><i class="nc-icon nc-check-2"></i></span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-success" style="width: 50px;"><i class="nc-icon nc-simple-remove"></i></span><input type="checkbox" data-toggle="switch" checked="" data-on-text="<i class='nc-icon nc-check-2'></i>" data-off-text="<i class='nc-icon nc-simple-remove'></i>" data-on-color="success" data-off-color="success"></div></div><span class="toggle"></span>
                    </label>
                    <label>
                        <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: -50px;"><span class="bootstrap-switch-handle-on bootstrap-switch-success" style="width: 50px;"><i class="nc-icon nc-check-2"></i></span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-success" style="width: 50px;"><i class="nc-icon nc-simple-remove"></i></span><input type="checkbox" data-toggle="switch" data-on-text="<i class='nc-icon nc-check-2'></i>" data-off-text="<i class='nc-icon nc-simple-remove'></i>" data-on-color="success" data-off-color="success"></div></div><span class="toggle"></span>
                    </label>&nbsp;&nbsp;&nbsp;
                    <label>
                        <div class="bootstrap-switch-on bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-warning" style="width: 50px;"><i class="nc-icon nc-check-2"></i></span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-warning" style="width: 50px;"><i class="nc-icon nc-simple-remove"></i></span><input type="checkbox" data-toggle="switch" checked="" data-on-text="<i class='nc-icon nc-check-2'></i>" data-off-text="<i class='nc-icon nc-simple-remove'></i>" data-on-color="warning" data-off-color="warning"></div></div><span class="toggle"></span>
                    </label>
                    <label>
                        <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: -50px;"><span class="bootstrap-switch-handle-on bootstrap-switch-warning" style="width: 50px;"><i class="nc-icon nc-check-2"></i></span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-warning" style="width: 50px;"><i class="nc-icon nc-simple-remove"></i></span><input type="checkbox" data-toggle="switch" data-on-text="<i class='nc-icon nc-check-2'></i>" data-off-text="<i class='nc-icon nc-simple-remove'></i>" data-on-color="warning" data-off-color="warning"></div></div><span class="toggle"></span>
                    </label>&nbsp;&nbsp;&nbsp;
                    <label>
                        <div class="bootstrap-switch-on bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-danger" style="width: 50px;"><i class="nc-icon nc-check-2"></i></span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger" style="width: 50px;"><i class="nc-icon nc-simple-remove"></i></span><input type="checkbox" data-toggle="switch" checked="" data-on-text="<i class='nc-icon nc-check-2'></i>" data-off-text="<i class='nc-icon nc-simple-remove'></i>" data-on-color="danger" data-off-color="danger"></div></div><span class="toggle"></span>
                    </label>
                    <label>
                        <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: -50px;"><span class="bootstrap-switch-handle-on bootstrap-switch-danger" style="width: 50px;"><i class="nc-icon nc-check-2"></i></span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger" style="width: 50px;"><i class="nc-icon nc-simple-remove"></i></span><input type="checkbox" data-toggle="switch" data-on-text="<i class='nc-icon nc-check-2'></i>" data-off-text="<i class='nc-icon nc-simple-remove'></i>" data-on-color="danger" data-off-color="danger"></div></div><span class="toggle"></span>
                    </label>
                </div>
                <div id="labels">
                    <div class="title">
                        <h3>Labels</h3>
                        <h3><small>Simple</small></h3>
                    </div>
                    <span class="label label-default">Default</span>
                    <span class="label label-primary">Primary</span>
                    <span class="label label-info">Info</span>
                    <span class="label label-success">Success</span>
                    <span class="label label-warning">Warning</span>
                    <span class="label label-danger">Danger</span>
                    <br>
                    <div class="title">
                        <h3><small>Icons</small></h3>
                    </div>
                    <span class="label label-default"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                    <span class="label label-primary"><i class="fa fa-id-card-o" aria-hidden="true"></i></span>
                    <span class="label label-info"><i class="fa fa-info" aria-hidden="true"></i></span>
                    <span class="label label-success"><i class="fa fa-comments" aria-hidden="true"></i></span>
                    <span class="label label-warning"><i class="fa fa-cog" aria-hidden="true"></i></span>
                    <span class="label label-danger"><i class="fa fa-battery-half" aria-hidden="true"></i></span>
                </div>
                <div id="tags">
                    <div class="title">
                        <h3>Tags</h3>
                    </div>
                    <div class="bootstrap-tagsinput"><span class="badge badge badge-success">Minimal<span data-role="remove"></span></span> <span class="badge badge badge-success"> Light<span data-role="remove"></span></span> <span class="badge badge badge-success"> New<span data-role="remove"></span></span> <span class="badge badge badge-success"> Friends<span data-role="remove"></span></span> <input type="text" placeholder=""></div><input type="text" value="Minimal, Light, New, Friends" data-role="tagsinput" style="display: none;">
                </div>
                <div id="select">
                    <div class="title">
                        <h3>Select</h3>
                    </div>
                    <div class="row">
                       <div class="col-md-2 col-sm-3">
                            <div class="form-group">
                                <div class="btn-group bootstrap-select"><button type="button" class="dropdown-toggle bs-placeholder btn btn-default" data-toggle="dropdown" role="button" title="Choose city"><span class="filter-option pull-left"> Choose city</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="disabled selected"><a tabindex="-1" class="" data-tokens="null" role="option" href="#" aria-disabled="true" aria-selected="true"><span class="text"> Choose city</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paris </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bucharest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rome</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New York</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Miami </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Piatra Neamt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paris </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bucharest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rome</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New York</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Miami </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Piatra Neamt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="13"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paris </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="14"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bucharest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="15"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rome</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="16"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New York</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="17"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Miami </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="18"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Piatra Neamt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker" data-style="btn btn-default" tabindex="-98">
                                    <option disabled="" selected=""> Choose city</option>
                                    <option value="1">Paris </option>
                                    <option value="1">Bucharest</option>
                                    <option value="1">Rome</option>
                                    <option value="1">New York</option>
                                    <option value="1">Miami </option>
                                    <option value="1">Piatra Neamt</option>
                                    <option value="1">Paris </option>
                                    <option value="1">Bucharest</option>
                                    <option value="1">Rome</option>
                                    <option value="1">New York</option>
                                    <option value="1">Miami </option>
                                    <option value="1">Piatra Neamt</option>
                                    <option value="1">Paris </option>
                                    <option value="1">Bucharest</option>
                                    <option value="1">Rome</option>
                                    <option value="1">New York</option>
                                    <option value="1">Miami </option>
                                    <option value="1">Piatra Neamt</option>
                               </select></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="form-group">
                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle bs-placeholder btn-link btn-success btn-round" data-toggle="dropdown" role="button" title="Choose city"><span class="filter-option pull-left"> Choose city</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="disabled selected"><a tabindex="-1" class="" data-tokens="null" role="option" href="#" aria-disabled="true" aria-selected="true"><span class="text"> Choose city</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paris </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bucharest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rome</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New York</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Miami </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Piatra Neamt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paris </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bucharest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rome</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New York</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Miami </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Piatra Neamt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="13"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paris </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="14"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bucharest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="15"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rome</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="16"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New York</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="17"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Miami </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="18"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Piatra Neamt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select name="huge" class="selectpicker" data-style="btn-link btn-success btn-round" data-menu-style="dropdown-success" tabindex="-98">
                                    <option disabled="" selected=""> Choose city</option>
                                    <option value="1">Paris </option>
                                    <option value="1">Bucharest</option>
                                    <option value="1">Rome</option>
                                    <option value="1">New York</option>
                                    <option value="1">Miami </option>
                                    <option value="1">Piatra Neamt</option>
                                    <option value="1">Paris </option>
                                    <option value="1">Bucharest</option>
                                    <option value="1">Rome</option>
                                    <option value="1">New York</option>
                                    <option value="1">Miami </option>
                                    <option value="1">Piatra Neamt</option>
                                    <option value="1">Paris </option>
                                    <option value="1">Bucharest</option>
                                    <option value="1">Rome</option>
                                    <option value="1">New York</option>
                                    <option value="1">Miami </option>
                                    <option value="1">Piatra Neamt</option>
                                </select></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 ">
                            <div class="form-group">
                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle bs-placeholder btn-danger btn-round" data-toggle="dropdown" role="button" title="Choose city"><span class="filter-option pull-left"> Choose city</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="disabled selected"><a tabindex="-1" class="" data-tokens="null" role="option" href="#" aria-disabled="true" aria-selected="true"><span class="text"> Choose city</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paris </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bucharest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rome</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New York</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Miami </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Piatra Neamt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paris </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bucharest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rome</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New York</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Miami </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Piatra Neamt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="13"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paris </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="14"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bucharest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="15"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rome</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="16"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New York</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="17"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Miami </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="18"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Piatra Neamt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select name="huge" class="selectpicker" data-style="btn-danger btn-round" data-menu-style="dropdown-danger" tabindex="-98">
                                    <option disabled="" selected=""> Choose city</option>
                                    <option value="1">Paris </option>
                                    <option value="1">Bucharest</option>
                                    <option value="1">Rome</option>
                                    <option value="1">New York</option>
                                    <option value="1">Miami </option>
                                    <option value="1">Piatra Neamt</option>
                                    <option value="1">Paris </option>
                                    <option value="1">Bucharest</option>
                                    <option value="1">Rome</option>
                                    <option value="1">New York</option>
                                    <option value="1">Miami </option>
                                    <option value="1">Piatra Neamt</option>
                                    <option value="1">Paris </option>
                                    <option value="1">Bucharest</option>
                                    <option value="1">Rome</option>
                                    <option value="1">New York</option>
                                    <option value="1">Miami </option>
                                    <option value="1">Piatra Neamt</option>
                                </select></div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3">
                            <div class="form-group">
                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle bs-placeholder btn-info btn-round" data-toggle="dropdown" role="button" title="Choose city"><span class="filter-option pull-left"> Choose city</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="disabled selected"><a tabindex="-1" class="" data-tokens="null" role="option" href="#" aria-disabled="true" aria-selected="true"><span class="text"> Choose city</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paris </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bucharest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rome</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New York</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Miami </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Piatra Neamt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paris </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bucharest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rome</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New York</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Miami </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Piatra Neamt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="13"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paris </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="14"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bucharest</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="15"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rome</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="16"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New York</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="17"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Miami </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="18"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Piatra Neamt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select name="huge" class="selectpicker" data-style="btn-info btn-round" data-menu-style="dropdown-info" tabindex="-98">
                                    <option disabled="" selected=""> Choose city</option>
                                    <option value="1">Paris </option>
                                    <option value="1">Bucharest</option>
                                    <option value="1">Rome</option>
                                    <option value="1">New York</option>
                                    <option value="1">Miami </option>
                                    <option value="1">Piatra Neamt</option>
                                    <option value="1">Paris </option>
                                    <option value="1">Bucharest</option>
                                    <option value="1">Rome</option>
                                    <option value="1">New York</option>
                                    <option value="1">Miami </option>
                                    <option value="1">Piatra Neamt</option>
                                    <option value="1">Paris </option>
                                    <option value="1">Bucharest</option>
                                    <option value="1">Rome</option>
                                    <option value="1">New York</option>
                                    <option value="1">Miami </option>
                                    <option value="1">Piatra Neamt</option>
                                </select></div>
                            </div>
                        </div>
                    </div>
                    <div id="preloaders">
                        <div class="title">
                            <h3>Preloaders</h3>
                        </div>
                        <div class="uil-reload-css" style=""><div></div></div>
                        <div class="uil-reload-css reload-small" style=""><div></div></div>

                        <div class="uil-reload-css reload-background" style=""><div></div></div>
                        <div class="uil-reload-css reload-background reload-small" style=""><div></div></div>

                        <a href="#paper-kit" class="btn btn-round"><div class="uil-reload-css reload-small" style=""><div></div></div> Something</a>
                    </div>
                    <div id="menu-dropdown">
                        <div class="title">
                            <h3>Dropdown</h3>
                            <br>
                            <div id="navbar-dropdown">
                                <nav class="navbar navbar-expand-md navbar-default">
                                    <div class="container">
                                        <a class="navbar-brand" href="#paper-kit">Dropdown colors</a>
                                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                            <span class="navbar-toggler-icon"></span>
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbar-menu">
                                            <ul class="navbar-nav ml-auto">
                                                <!-- default color -->
                                                <li class="nav-item dropdown">
                                                    <button href="#paper-kit" class="dropdown-toggle btn btn-round" data-toggle="dropdown">Default <b class="caret"></b></button>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <div class="dropdown-header">Dropdown header</div>
                                                        <a class="dropdown-item" href="#paper-kit">Action</a>
                                                        <a class="dropdown-item" href="#paper-kit">Another action</a>
                                                        <a class="dropdown-item" href="#paper-kit">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#paper-kit">Separated link</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#paper-kit">Another separated link</a>
                                                    </ul>
                                                </li>
                                                <!-- primary color -->
                                                <li class="nav-item dropdown">
                                                    <button href="#paper-kit" class="dropdown-toggle btn btn-round btn-primary" data-toggle="dropdown">Primary <b class="caret"></b></button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-primary">
                                                        <div class="dropdown-header">Dropdown header</div>
                                                        <a class="dropdown-item" href="#paper-kit">Action</a>
                                                        <a class="dropdown-item" href="#paper-kit">Another action</a>
                                                        <a class="dropdown-item" href="#paper-kit">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#paper-kit">Separated link</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#paper-kit">Another separated link</a>
                                                    </ul>
                                                </li>
                                                <!-- info color -->
                                                <li class="nav-item dropdown">
                                                    <button href="#paper-kit" class="dropdown-toggle btn btn-round btn-info" data-toggle="dropdown">Info <b class="caret"></b></button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-info">
                                                        <div class="dropdown-header">Dropdown header</div>
                                                        <a class="dropdown-item" href="#paper-kit">Action</a>
                                                        <a class="dropdown-item" href="#paper-kit">Another action</a>
                                                        <a class="dropdown-item" href="#paper-kit">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#paper-kit">Separated link</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#paper-kit">Another separated link</a>
                                                    </ul>
                                                </li>
                                                <!-- success color -->
                                                <li class="nav-item dropdown">
                                                    <button href="#paper-kit" class="dropdown-toggle btn btn-round btn-success" data-toggle="dropdown">Success <b class="caret"></b></button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-success">
                                                        <div class="dropdown-header">Dropdown header</div>
                                                        <a class="dropdown-item" href="#paper-kit">Action</a>
                                                        <a class="dropdown-item" href="#paper-kit">Another action</a>
                                                        <a class="dropdown-item" href="#paper-kit">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#paper-kit">Separated link</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#paper-kit">Another separated link</a>
                                                    </ul>
                                                </li>
                                                <!-- warning color -->
                                                <li class="nav-item dropdown">
                                                    <button href="#paper-kit" class="dropdown-toggle btn btn-round btn-warning" data-toggle="dropdown">Warning <b class="caret"></b></button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-warning">
                                                        <div class="dropdown-header">Dropdown header</div>
                                                        <a class="dropdown-item" href="#paper-kit">Action</a>
                                                        <a class="dropdown-item" href="#paper-kit">Another action</a>
                                                        <a class="dropdown-item" href="#paper-kit">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#paper-kit">Separated link</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#paper-kit">Another separated link</a>
                                                    </ul>
                                                </li>
                                                <!-- danger color -->
                                                <li class="nav-item dropdown">
                                                    <button href="#paper-kit" class="dropdown-toggle btn btn-round btn-danger" data-toggle="dropdown">Danger <b class="caret"></b></button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                                                        <div class="dropdown-header">Dropdown header</div>
                                                        <a class="dropdown-item" href="#paper-kit">Action</a>
                                                        <a class="dropdown-item" href="#paper-kit">Another action</a>
                                                        <a class="dropdown-item" href="#paper-kit">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#paper-kit">Separated link</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#paper-kit">Another separated link</a>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-navigation">
            <div class="container tim-container">
                <div class="title">
                    <h3>Navigation Areas</h3>
                </div>
            </div>
            <div id="navbar-full">
                <div class="navigation-example">
            <!--        default navbar with search form -->
                    <nav class="navbar navbar-expand-md bg-primary">
                        <div class="container">
                            <a class="navbar-brand" href="#paper-kit">Brand</a>
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar"></span>
                                <span class="navbar-toggler-bar"></span>
                                <span class="navbar-toggler-bar"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#paper-kit">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#paper-kit">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#paper-kit">Disabled</a>
                                    </li>
                                </ul>

                                <form class="form-inline ml-auto">
                                    <input class="form-control mr-sm-2 no-border" type="text" placeholder="Search">
                                    <button type="submit" class="btn btn-primary btn-just-icon btn-round"><i class="nc-icon nc-zoom-split" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </nav>

            <!--        default navbar with profile photo -->
                    <nav class="navbar navbar-expand-md bg-info">
                        <div class="container">
                            <a class="navbar-brand" href="#paper-kit">Navbar with icon</a>
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar"></span>
                                <span class="navbar-toggler-bar"></span>
                                <span class="navbar-toggler-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#paper-kit">
                                            Discover
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#paper-kit">
                                            Wishlist
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="btn btn-just-icon btn-warning  ">
                                            <i class="nc-icon nc-sound-wave"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#paper-kit" class="btn btn-just-icon" data-toggle="dropdown">
                                            <i class="nc-icon nc-email-85"></i>
                                        </a>
                                        <span class="label label-danger notification-bubble">2</span>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#paper-kit" class="nav-link" data-toggle="dropdown" width="30" height="30">
                                            <div class="profile-photo-small">
                                                <img src="assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-responsive img-no-padding">
                                            </div>
                                        </a>
                                          <ul class="dropdown-menu dropdown-menu-right dropdown-info">
                                            <a class="dropdown-item" href="#paper-kit">Me</a>
                                            <a class="dropdown-item" href="#paper-kit">Settings</a>
                                            <li class="divider"></li>
                                            <a class="dropdown-item" href="#paper-kit">Sign out</a>
                                          </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <!--         default navbar with notifications     -->
                    <nav class="navbar navbar-expand-md bg-danger">
                        <div class="container">
                            <a class="navbar-brand" href="#paper-kit">Navbar with notification</a>
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar"></span>
                                <span class="navbar-toggler-bar"></span>
                                <span class="navbar-toggler-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#paper-kit">
                                            Discover
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#paper-kit">
                                            Wishlist
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="btn btn-just-icon btn-warning  " data-toggle="dropdown">
                                            <i class="nc-icon nc-sound-wave"></i>
                                        </a>

                                          <ul class="dropdown-menu dropdown-menu-right dropdown-notification">
                                            <li class="no-notification">
                                                   You're all clear!
                                            </li>

                                          </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="btn btn-just-icon btn-danger  " data-toggle="dropdown">
                                            <i class="nc-icon nc-email-85"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right dropdown-wide dropdown-notification">
                                            <li class="dropdown-header">
                                                You have 7 unread notifications
                                            </li>
                                            <li>
                                            <ul class="dropdown-notification-list scroll-area">
                                                <a href="#paper-kit" class="notification-item">
                                                    <div class="notification-text">
                                                        <span class="label label-icon label-success"><i class="nc-icon nc-chat-33"></i></span>
                                                        <span class="message"><b>Patrick</b> mentioned you in a comment.</span>
                                                        <br>
                                                        <span class="time">20min ago</span>

                                                        <button class="btn btn-just-icon read-notification btn-round">
                                                            <i class="nc-icon nc-check-2"></i>
                                                        </button>
                                                    </div>
                                                </a>


                                                <a href="#paper-kit" class="notification-item">
                                                   <div class="notification-text">
                                                        <span class="label label-icon label-info"><i class="nc-icon nc-alert-circle-i"></i></span>

                                                        <span class="message">Our privacy policy changed!</span>
                                                        <br>
                                                        <span class="time">1day ago</span>
                                                    </div>
                                                </a>

                                                <a href="#paper-kit" class="notification-item">
                                                    <div class="notification-text">
                                                        <span class="label label-icon label-warning"><i class="nc-icon nc-ambulance"></i></span>

                                                        <span class="message">Please confirm your email address.</span>
                                                        <br>
                                                        <span class="time">2days ago</span>
                                                    </div>
                                                </a>
                                                <a href="#paper-kit" class="notification-item">
                                                    <div class="notification-text">
                                                        <span class="label label-icon label-primary"><i class="nc-icon nc-paper"></i></span>
                                                        <span class="message">Have you thought about marketing?</span>
                                                        <br>
                                                        <span class="time">3days ago</span>
                                                    </div>
                                                </a>
                                             </ul>
                                             </li>
                                            <!--      end scroll area -->

                                            <li class="dropdown-footer">
                                                <ul class="dropdown-footer-menu">
                                                    <li>
                                                        <a href="#paper-kit">Mark all as read</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#paper-kit" class="nav-link navbar-brand" data-toggle="dropdown" width="30" height="30">
                                            <div class="profile-photo-small">
                                                <img src="assets/img/faces/erik-lucatero-2.jpg" alt="Circle Image" class="img-circle img-responsive img-no-padding">
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                                            <div class="dropdown-header">Dropdown header</div>
                                            <a class="dropdown-item" href="#paper-kit">Action</a>
                                            <a class="dropdown-item" href="#paper-kit">Another action</a>
                                            <a class="dropdown-item" href="#paper-kit">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#paper-kit">Separated link</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#paper-kit">Another separated link</a>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-navbars">
        <div class="container" id="menu-dropdown">
            <div class="title">
                <h3>Menu</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-md bg-warning">
                        <div class="container">
                            <a class="navbar-brand" href="#paper-kit">Yellow Menu</a>
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar-menu">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#paper-kit">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#paper-kit">Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#paper-kit" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                        <ul class="dropdown-menu dropdown-menu-right dropdown-warning">
                                            <div class="dropdown-header">Dropdown header</div>
                                            <a class="dropdown-item" href="#paper-kit">Action</a>
                                            <a class="dropdown-item" href="#paper-kit">Another action</a>
                                            <a class="dropdown-item" href="#paper-kit">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#paper-kit">Separated link</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#paper-kit">Another separated link</a>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-md bg-success">
                        <div class="container">
                            <a class="navbar-brand" href="#paper-kit">Green Menu</a>
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-menu-icon" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2 no-border" type="text" placeholder="Search">
                                        <button type="submit" class="btn btn-primary btn-just-icon btn-round"><i class="nc-icon nc-zoom-split"></i></button>
                                    </form>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#paper-kit">Link <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#paper-kit">Another Link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- pre-footer areas -->
    <div class="wrapper">
        <div class="section">
            <div class="container tim-container">
                <div class="title" id="subscription">
                    <h3>Pre-footer Areas</h3>
                </div>
                <h4><small>Subscription</small></h4>
            </div>
        </div>
    </div>
    <div class="subscribe-line">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <form class="">
                        <div class="form-group">
                              <input type="text" value="" class="form-control" placeholder="Enter your email...">
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-4">
                    <button type="button" class="btn btn-danger btn-block btn-lg">Subscribe Now!</button>
                </div>
            </div>
        </div>
    </div>
    <div class="separator"></div>

    <div class="subscribe-line subscribe-line-black">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <form class="">
                        <div class="form-group">
                            <input type="text" value="" class="form-control" placeholder="Enter your email...">
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-4">
                    <button type="button" class="btn btn-neutral btn-block btn-lg">Join Newsletter</button>
                </div>
            </div>
        </div>
    </div>
    <div class="separator"></div>

    <div class="subscribe-line subscribe-line-transparent" style="background-image: url('assets/img/sections/pavel-kosov.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <form class="">
                        <div class="form-group">
                            <input type="text" value="" class="form-control" placeholder="Enter your email...">
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-4">
                    <button type="button" class="btn btn-info btn-block btn-round">Subscribe Now!</button>
                </div>
            </div>
        </div>
    </div>
    <div class="separator"></div>


    <!-- social and sharing areas -->
    <div class="section">
        <div class="container tim-container">
            <div class="title">
                <h4><small>Social and Sharing</small></h4>
            </div>
        </div>
    </div>
    <div class="social-line" id="sharing">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h4 class="title">We are social</h4>
                </div>
                <div class="col-md-2 col-sm-3">
                    <a href="" class="btn btn-link btn-just-icon btn-facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i> Facebook
                    </a>
                </div>
                  <div class="col-md-2 col-sm-3">
                    <a href="" class="btn btn-link btn-just-icon btn-twitter">
                        <i class="fa fa-twitter" aria-hidden="true"></i> Twitter
                    </a>
                 </div>
                 <div class="col-md-2 col-sm-3">
                    <a href="" class="btn btn-link btn-just-icon btn-dribbble">
                        <i class="fa fa-dribbble" aria-hidden="true"></i> Dribbble
                    </a>
                </div>
                <div class="col-md-2 col-sm-3">
                    <a href="" class="btn btn-link btn-just-icon btn-youtube">
                        <i class="fa fa-youtube" aria-hidden="true"></i> Youtube
                    </a>
                </div>
            </div>
        </div>
     </div>

    <div class="separator"></div>
    <div class="social-line social-line-black">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h4 class="title">Follow Us</h4>
                </div>
                <div class="col-md-2 col-sm-3">
                    <a href="" class="btn btn-link btn-neutral">
                        <i class="fa fa-twitter" aria-hidden="true"></i> Twitter
                    </a>
                </div>
                <div class="col-md-2 col-sm-3">
                    <a href="" class="btn btn-link btn-neutral">
                        <i class="fa fa-dribbble" aria-hidden="true"></i> Dribbble
                    </a>
                </div>
                <div class="col-md-2 col-sm-3">
                    <a href="" class="btn btn-link btn-neutral">
                        <i class="fa fa-youtube" aria-hidden="true"></i> Youtube
                    </a>
                </div>
                <div class="col-md-2 col-sm-3">
                    <a href="" class="btn btn-link btn-neutral">
                        <i class="fa fa-google-plus" aria-hidden="true"></i> Google+
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="separator"></div>
    <div class="social-line" id="social-sharing">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="title">Thank you for sharing!</h4>
                </div>
                <div class="col-md-2 col-sm-6">
                    <a href="" class="btn btn-round btn-facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i> Share · 753
                    </a>
                </div>
                <div class="col-md-2 col-sm-6">
                    <a href="" class="btn btn-round btn-twitter">
                        <i class="fa fa-twitter" aria-hidden="true"></i> Tweet · 832
                    </a>
                </div>
                <div class="col-md-2 col-sm-6">
                    <a href="" class="btn btn-round btn-google">
                        <i class="fa fa-google-plus" aria-hidden="true"></i> Share · 131
                    </a>
                </div>
                <div class="col-md-2 col-sm-6">
                    <a href="" class="btn btn-round btn-youtube">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i> Pin it · 323
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end pre-footer areas -->

    <!-- footer areas -->
    <div class="wrapper">
        <div class="section">
            <div class="container tim-container">
                <div class="title" id="footers">
                    <h3>Footers</h3>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-big">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-9 ml-auto mr-auto">
                    <div class="links">
                        <ul class="uppercase-links">
                            <li>
                                <a href="#paper-kit">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#paper-kit">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#paper-kit">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#paper-kit">
                                   Team
                                </a>
                            </li>
                            <li>
                                <a href="#paper-kit">
                                   Blog
                                </a>
                            </li>
                            <li>
                                <a href="#paper-kit">
                                   Contact
                                </a>
                            </li>


                        </ul>
                        <hr>

                        <div class="copyright">
                            © <script>document.write(new Date().getFullYear())</script>2022, made with <i class="fa fa-heart heart"></i> by Creative Tim
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-2">
                    <div class="social-area">
                        <a href="#facebook" class="btn btn-neutral btn-round btn-just-icon btn-facebook facebook-sharrre">
                           <i class="fa fa-facebook" aria-hidden="true"></i>
                       </a>
                        <a href="#twitter" class="btn btn-neutral btn-just-icon btn-round btn-twitter twitter-sharrre">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="#google" class="btn btn-neutral btn-just-icon btn-round btn-google google-sharrre">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                        <a href="#pin" class="btn btn-neutral btn-just-icon btn-round btn-pinterest pinterest-sharrre">
                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="separator"></div>
    <footer class="footer footer-black footer-big">

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 ml-auto mr-auto">
                    <div class="logo text-center">
                        <h3>Creative Tim</h3>
                    </div>
                </div>
                <div class="col-md-6 offset-md-2 col-sm-8">
                    <div class="links">
                        <ul>
                            <li>
                                <a href="#paper-kit">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#paper-kit">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#paper-kit">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#paper-kit">
                                   Team
                                </a>
                            </li>
                            <li>
                                <a href="#paper-kit">
                                   Contact
                                </a>
                            </li>
                            <li>
                                <a href="#paper-kit">
                                   We're Hiring!
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="copyright">
                            <div class="pull-left">
                                © <script>document.write(new Date().getFullYear())</script>2022, made with <i class="fa fa-heart heart"></i> in Bucharest
                            </div>
                            <div class="pull-right">
                                <ul>
                                    <li>
                                        <a href="#paper-kit">
                                            Terms
                                        </a>
                                    </li>
                                    |
                                    <li>
                                        <a href="#paper-kit">
                                            Privacy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <div class="separator"></div>
    <footer class="footer footer-big">

        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-6 ml-auto mr-auto">
                     <div class="form-group">
                        <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-default btn-block btn-round" data-toggle="dropdown" role="button" title="English"><span class="filter-option pull-left">English</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bahasa Indonesia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bahasa Melayu</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Català</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Dansk</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Deutsch</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">English</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Español</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Eλληνικά</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Français</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Italiano</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Magyar</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Nederlands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Norsk</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="13"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Polski</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="14"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Português</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="15"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Suomi</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="16"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Svenska</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="17"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Türkçe</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="18"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Íslenska</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="19"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Čeština</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="20"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Русский</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="21"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">ภาษาไทย</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="22"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">中文 (简体)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="23"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">中文 (繁體)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="24"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">日本語</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="25"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">한국어</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select name="huge" class="selectpicker" data-style="btn-default btn-block btn-round" data-menu-style="dropdown-blue" tabindex="-98">
                          <option value="id">Bahasa Indonesia</option>
                          <option value="ms">Bahasa Melayu</option>
                          <option value="ca">Català</option>
                          <option value="da">Dansk</option>
                          <option value="de">Deutsch</option>
                          <option value="en" selected="">English</option>
                          <option value="es">Español</option>
                          <option value="el">Eλληνικά</option>
                          <option value="fr">Français</option>
                          <option value="it">Italiano</option>
                          <option value="hu">Magyar</option>
                          <option value="nl">Nederlands</option>
                          <option value="no">Norsk</option>
                          <option value="pl">Polski</option>
                          <option value="pt">Português</option>
                          <option value="fi">Suomi</option>
                          <option value="sv">Svenska</option>
                          <option value="tr">Türkçe</option>
                          <option value="is">Íslenska</option>
                          <option value="cs">Čeština</option>
                          <option value="ru">Русский</option>
                          <option value="th">ภาษาไทย</option>
                          <option value="zh">中文 (简体)</option>
                          <option value="zh-TW">中文 (繁體)</option>
                          <option value="ja">日本語</option>
                          <option value="ko">한국어</option>
                        </select></div>
                    </div>
                     <div class="form-group">
                        <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-default btn-block btn-round" data-toggle="dropdown" role="button" title="USD"><span class="filter-option pull-left">USD</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">ARS</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">AUD</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">BRL</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">CAD</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">CHF</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">CNY</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">CZK</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">DKK</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">EUR</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">GBP</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">HKD</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">HUF</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">IDR</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="13"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">ILS</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="14"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">INR</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="15"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">JPY</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="16"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">KRW</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="17"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">MYR</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="18"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">MXN</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="19"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">NOK</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="20"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">NZD</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="21"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">PHP</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="22"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">PLN</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="23"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">RUB</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="24"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">SEK</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="25"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">SGD</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="26"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">TWD</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="27" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">USD</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="28"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">VND</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="29"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">ZAR</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select name="huge" class="selectpicker" data-style="btn-default btn-block btn-round" data-menu-style="dropdown-blue" tabindex="-98">
                          <option value="ARS">ARS</option>
                          <option value="AUD">AUD</option>
                          <option value="BRL">BRL</option>
                          <option value="CAD">CAD</option>
                          <option value="CHF">CHF</option>
                          <option value="CNY">CNY</option>
                          <option value="CZK">CZK</option>
                          <option value="DKK">DKK</option>
                          <option value="EUR">EUR</option>
                          <option value="GBP">GBP</option>
                          <option value="HKD">HKD</option>
                          <option value="HUF">HUF</option>
                          <option value="IDR">IDR</option>
                          <option value="ILS">ILS</option>
                          <option value="INR">INR</option>
                          <option value="JPY">JPY</option>
                          <option value="KRW">KRW</option>
                          <option value="MYR">MYR</option>
                          <option value="MXN">MXN</option>
                          <option value="NOK">NOK</option>
                          <option value="NZD">NZD</option>
                          <option value="PHP">PHP</option>
                          <option value="PLN">PLN</option>
                          <option value="RUB">RUB</option>
                          <option value="SEK">SEK</option>
                          <option value="SGD">SGD</option>
                          <option value="TWD">TWD</option>
                          <option value="USD" selected="">USD</option>
                          <option value="VND">VND</option>
                          <option value="ZAR">ZAR</option>

                        </select></div>
                    </div>
                </div>
                <div class="col-md-9 ml-auto mr-auto col-sm-9 col-12">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="links">
                                <ul class="uppercase-links stacked-links">
                                    <li>
                                        <a href="#paper-kit">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                            Discover
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                            Blog
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="links">
                                <ul class="uppercase-links stacked-links">
                                    <li>
                                        <a href="#paper-kit">
                                           Contact Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                           We're Hiring
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                           About Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="links">
                                <ul class="uppercase-links stacked-links">
                                    <li>
                                        <a href="#paper-kit">
                                            Portfolio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                           How it works
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                           Testimonials
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="social-area">
                                <a class="btn btn-just-icon btn-round btn-facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-just-icon btn-round btn-twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-just-icon btn-round btn-google">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-just-icon btn-round btn-pinterest">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="copyright">
                        <div class="pull-left">
                            © <script>document.write(new Date().getFullYear())</script>2022 Creative Tim, made with love
                        </div>
                        <div class="links pull-right">
                            <ul>
                                <li>
                                    <a href="#paper-kit">
                                        Company Policy
                                    </a>
                                </li>
                                |
                                <li>
                                    <a href="#paper-kit">
                                        Terms
                                    </a>
                                </li>
                                |
                                <li>
                                    <a href="#paper-kit">
                                        Privacy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <div class="separator"></div>
    <footer class="footer footer-black footer-big">
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center col-sm-3 col-12 ml-auto mr-auto">
                    <h4>Creative Tim</h4>
                    <div class="social-area">
                        <a class="btn btn-just-icon btn-round btn-facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-just-icon btn-round btn-twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-just-icon btn-round btn-google">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-12 ml-auto mr-auto">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="links">
                                <ul class="uppercase-links stacked-links">
                                    <li>
                                        <a href="#paper-kit">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                            Discover
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                            Live Support
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                            Money Back
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="links">
                                <ul class="uppercase-links stacked-links">
                                    <li>
                                        <a href="#paper-kit">
                                           Contact Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                           We're Hiring
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                           About Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="links">
                                <ul class="uppercase-links stacked-links">
                                    <li>
                                        <a href="#paper-kit">
                                            Portfolio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                           How it works
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#paper-kit">
                                           Testimonials
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="links">
                                <ul class="stacked-links">
                                    <li>
                                        <h4>13.723<br> <small>accounts</small></h4>
                                    </li>
                                    <li>
                                        <h4>55.234<br> <small>downloads</small></h4>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="copyright">
                        <div class="pull-left">
                            © <script>document.write(new Date().getFullYear())</script>2022 Creative Tim, made with love
                        </div>
                        <div class="links pull-right">
                            <ul>
                                <li>
                                    <a href="#paper-kit">
                                        Company Policy
                                    </a>
                                </li>
                                |
                                <li>
                                    <a href="#paper-kit">
                                        Terms
                                    </a>
                                </li>
                                |
                                <li>
                                    <a href="#paper-kit">
                                        Privacy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- end footer areas -->

<!--              description area -->
<div class="container tim-container">
    <div id="description-areas">
        <div class="title">
            <h3>Description Areas</h3>
        </div>

        <div class="row">
            <div class="col-md-5 col-sm-12">
                <h4><small>Horizontal Tabs</small></h4>

                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul id="tabs" class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Messages</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="my-tab-content" class="tab-content text-center">
                    <div class="tab-pane active" id="home" role="tabpanel"><p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.</p></div>
                    <div class="tab-pane" id="profile" role="tabpanel"><p>Here is your profile.</p></div>
                    <div class="tab-pane" id="messages" role="tabpanel"><p>Here are your messages.</p></div>
                </div>
            </div>
            <div class="col-md-7 col-sm-12">
                <h4><small>Vertical Tabs</small></h4>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-6">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs flex-column nav-stacked" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#info" role="tab" data-toggle="tab">Info</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#description" role="tab" data-toggle="tab">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#concept" role="tab" data-toggle="tab">Concept</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#support" role="tab" data-toggle="tab">Support</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#extra" role="tab" data-toggle="tab">Extra</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-6">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="info">
                                     <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.</p>
                                     <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                                  </div>
                                  <div class="tab-pane" id="description">
                                        <p>The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design. </p>
                                        <p>There are no distinct edges. No gaps. Just a smooth, seamless bond of metal and glass that feels like one continuous surface.</p>
                                 </div>
                                  <div class="tab-pane" id="concept">
                                        <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                                        <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. </p>
                                  </div>
                                  <div class="tab-pane" id="support">
                                        <p>From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.</p>
                                        <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                                  </div>
                                  <div class="tab-pane" id="extra">
                                        <p>It’s one continuous form where hardware and software function in perfect unison, creating a new generation of phone that’s better by any measure.</p>
                                        <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. </p>
                                  </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--             info areas -->
        <div id="info-areas">
            <div class="title">
                <h3>Info Areas</h3>
                <h4><small>Simple</small></h4>
            </div>

            <div class="row">
                <div class="col-md-4">
                   <div class="info">
                        <div class="icon">
                            <i class="nc-icon nc-time-alarm"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"> Save Time </h4>
                            <p>Spend your time generating new ideas. You don't have to think of implementing anymore.</p>
                        </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="info">
                        <div class="icon">
                            <i class="nc-icon nc-delivery-fast"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"> Fast Prototyping </h4>
                            <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p>
                        </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="info">
                        <div class="icon">
                            <i class="nc-icon nc-palette"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"> Beautiful Colors </h4>
                            <p>Choose from a veriety of colors resembling sugar paper pastels.</p>
                        </div>
                   </div>
                </div>
            </div>
            <h4><small>Coloured Icons</small></h4>
            <div class="row">
                <div class="col-md-4">
                   <div class="info">
                        <div class="icon icon-primary">
                            <i class="nc-icon nc-album-2"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"> Beautiful Gallery </h4>
                            <p>Spend your time generating new ideas. You don't have to think of implementing anymore.</p>
                        </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="info">
                        <div class="icon icon-warning">
                            <i class="nc-icon nc-bulb-63"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"> New Ideas </h4>
                            <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p>
                        </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-chart-bar-32"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"> Statistics </h4>
                            <p>Choose from a veriety of colors resembling sugar paper pastels.</p>
                        </div>
                   </div>
                </div>
            </div>
            <h4><small>Horizontal</small></h4>
            <div class="row">
                <div class="col-md-4">
                   <div class="info info-horizontal">
                        <div class="icon">
                            <i class="nc-icon nc-camera-compact"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"> Beautiful Gallery </h4>
                            <p>Spend your time generating new ideas. You don't have to think of implementing anymore.</p>
                            <a href="#paper-kit" class="btn btn-link btn-info">See more</a>
                        </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="info info-horizontal">
                        <div class="icon icon-warning">
                            <i class="nc-icon nc-glasses-2"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"> New Ideas </h4>
                            <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p>
                            <a href="#paper-kit" class="btn btn-link btn-info">See more</a>
                        </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="info info-horizontal">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-sound-wave"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"> Statistics </h4>
                            <p>Choose from a veriety of colors resembling sugar paper pastels.</p>
                            <a href="#paper-kit" class="btn btn-link btn-info">See more</a>
                        </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="title">
            <h3>Navigation Pills</h3>
        </div>
        <div class="col-md-6">
            <ul class="nav nav-pills nav-pills-danger">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#info-pill" role="tab">Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu-pill" role="tab">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#messages-pill" role="tab">Concept</a>
                </li>
            </ul>
            <!-- Pill panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="info-pill" role="tabpanel"></div>
                <div class="tab-pane" id="menu-pill" role="tabpanel"></div>
                <div class="tab-pane" id="messages-pill" role="tabpanel"></div>
            </div>
        </div>
        <div class="title">
            <h3>Progress Bar</h3>
        </div>
        <div class="col-md-8">
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
            <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar progress-bar-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="title">
                    <h3>Pagination</h3>
                    <br>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#paper-kit" aria-label="Previous">
                                <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#paper-kit">1</a></li>
                        <li class="page-item"><a class="page-link" href="#paper-kit">2</a></li>
                        <li class="page-item"><a class="page-link" href="#paper-kit">3</a></li>
                        <li class="page-item"><a class="page-link" href="#paper-kit">4</a></li>
                        <li class="page-item"><a class="page-link" href="#paper-kit">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#paper-kit" aria-label="Next">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <br>
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#paper-kit" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#paper-kit">1</a></li>
                        <li class="page-item"><a class="page-link" href="#paper-kit">2</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#paper-kit">3<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#paper-kit">4</a></li>
                        <li class="page-item"><a class="page-link" href="#paper-kit">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#paper-kit">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="container tim-container">
        <div class="title">
            <h3>Typography</h3>
        </div>
        <div id="typography">
            <div class="row">
                <div class="typography-line">
                    <h1>
                        <span class="note">Header 1</span> Thinking in textures
                    </h1>
                </div>
                <div class="typography-line">
                    <h2>
                        <span class="note">Header 2</span> Thinking in textures
                    </h2>
                </div>
                <div class="typography-line">
                    <h3>
                        <span class="note">Header 3</span> Thinking in textures
                    </h3>
                </div>
                <div class="typography-line">
                    <h4>
                        <span class="note">Header 4</span> Thinking in textures
                    </h4>
                </div>
                <div class="typography-line">
                    <h5>
                        <span class="note">Header 5</span> Thinking in textures
                    </h5>
                </div>
                <div class="typography-line">
                    <h6>
                        <span class="note">Header 6</span> Thinking in textures
                    </h6>
                </div>
                <div class="typography-line">
                    <p>
                        <span class="note">Paragraph</span> Thinking in textures
                    </p>
                </div>
                <div class="typography-line">
                    <span class="note">Quote</span>
                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p><br>
                        <footer class="blockquote-footer">Someone famous in <cite title="source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
                <div class="typography-line">
                    <span class="note">Muted text</span>
                    <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                </div>
                <div class="typography-line">
                    <span class="note">Primary text</span>
                    <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
                <div class="typography-line">
                    <span class="note">Success text</span>
                    <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                </div>
                <div class="typography-line">
                    <span class="note">Info text</span>
                    <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                </div>
                <div class="typography-line">
                    <span class="note">Warning text</span>
                    <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                </div>
                <div class="typography-line">
                    <span class="note">Danger text</span>
                    <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
                <div class="typography-line">
                    <h2><span class="note">Small tag</span>Header with small subtitle
                        <br>
                        <small>".small" is a tag for the headers</small>
                    </h2>
                </div>
            </div>
        </div>
        <br>
        <div id="images">
            <div class="container">
                <div class="title">
                    <h3>Images</h3>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <h4 class="images-title">Rounded Image</h4>
                        <img src="assets/img/sections/por7o.jpg" class="img-rounded img-responsive" alt="Rounded Image">
                        <div class="img-details">
                            <div class="author">
                                <img src="assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                            </div>
                            <p>Sonia Green </p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 mr-auto ml-auto">
                        <h4 class="images-title">Circle Image</h4>
                        <img src="assets/img/faces/kaci-baum-2.jpg" class="img-circle img-no-padding img-responsive" alt="Rounded Image">
                        <p class="text-center">Brigitte Bardot</p>
                    </div>
                    <div class="col-sm-3 col-md-2 mr-auto">
                        <h4 class="images-title">Thumbnail</h4>
                        <img src="assets/img/faces/erik-lucatero-2.jpg" class="img-thumbnail img-responsive" alt="Rounded Image">
                        <p class="text-center">John Keynes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="section section-gray">
    <div class="container tim-container">
        <div class="title">
            <h3>Notifications</h3>
        </div>
    </div>
    <div id="notifications">
        <div class="alert alert-info">
            <div class="container">
                <span>This is a plain notification! </span>
            </div>
        </div>
        <div class="alert alert-success">
            <div class="container">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="nc-icon nc-simple-remove"></i>
                </button>
                <span>This is a notification with close button. </span>
            </div>
        </div>
        <div class="alert alert-warning alert-with-icon" data-notify="container">
            <div class="container">
                <div class="alert-wrapper">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <div class="message"><i class="nc-icon nc-bell-55"></i> This is a notification with close button and icon.</div>
                </div>
            </div>
        </div>
        <div class="alert alert-danger alert-with-icon" data-notify="container">
            <div class="container">
                <div class="alert-wrapper">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <div class="message"><i class="nc-icon nc-bell-55"></i> This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</div>
                </div>
            </div>
        </div>
    </div><!--  end notifications -->
</div>
<div class="section section-gray">
    <div class="container tim-container">
        <div class="title">
            <h3>Tables</h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4>Simple Table</h4>
            </div>
            <div class="col-md-8 ml-auto mr-auto">
            <h4 class="title"><small>Simple With Actions</small></h4>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Job Position</th>
                            <th>Since</th>
                            <th class="text-right">Salary</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Andrew Mike</td>
                            <td>Develop</td>
                            <td>2013</td>
                            <td class="text-right">€ 99,225</td>
                            <td class="td-actions text-right">
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                    <i class="fa fa-user"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>

                            <td class="text-center">2</td>
                            <td>John Doe</td>
                            <td>Design</td>
                            <td>2012</td>
                            <td class="text-right">€ 89,241</td>
                            <td class="td-actions text-right">
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                    <i class="fa fa-user"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Alex Mike</td>
                            <td>Design</td>
                            <td>2010</td>
                            <td class="text-right">€ 92,144</td>
                            <td class="td-actions text-right">
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                    <i class="fa fa-user"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Mike Monday</td>
                            <td>Marketing</td>
                            <td>2013</td>
                            <td class="text-right">€ 49,990</td>
                            <td class="td-actions text-right">
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                    <i class="fa fa-user"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Paul Dickens</td>
                            <td>Communication</td>
                            <td>2016</td>
                            <td class="text-right">€ 69,201</td>
                            <td class="td-actions text-right">
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Profile" class="btn btn-info btn-link btn-sm">
                                    <i class="fa fa-user"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Profile" class="btn btn-success btn-link btn-sm">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove" class="btn btn-danger btn-link btn-sm">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>

                <h4 class="title"><small>Striped With Checkboxes</small></h4>
                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th></th>
                            <th>Product Name</th>
                            <th>Type</th>
                            <th>Qty</th>
                            <th class="text-right">Price</th>
                            <th class="text-right">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-sign"></span>
                                    </label>
                                </div>
                            </td>
                            <td>Moleskine Agenda</td>
                            <td>Office</td>
                            <td>25</td>
                            <td class="text-right">€ 49</td>
                            <td class="text-right">€ 1,225</td>
                        </tr>
                        <tr>

                            <td class="text-center">2</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" checked="">
                                        <span class="form-check-sign"></span>
                                    </label>
                                </div>
                            </td>
                            <td>Stabilo Pen</td>
                            <td>Office</td>
                            <td>30</td>
                            <td class="text-right">€ 10</td>
                            <td class="text-right">€ 300</td>
                        </tr>
                        <tr>

                            <td class="text-center">3</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" checked="">
                                        <span class="form-check-sign"></span>
                                    </label>
                                </div>
                            </td>
                            <td>A4 Paper Pack</td>
                            <td>Office</td>
                            <td>50</td>
                            <td class="text-right">€ 10.99</td>
                            <td class="text-right">€ 109</td>
                        </tr>
                        <tr>

                            <td class="text-center">4</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-sign"></span>
                                    </label>
                                </div>
                            </td>
                            <td>Apple iPad</td>
                            <td>Meeting</td>
                            <td>10</td>
                            <td class="text-right">€ 499.00</td>
                            <td class="text-right">€ 4,990</td>
                        </tr>
                        <tr>

                            <td class="text-center">5</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-sign"></span>
                                    </label>
                                </div>
                            </td>
                            <td>Apple iPhone</td>
                            <td>Communication</td>
                            <td>10</td>
                            <td class="text-right">€ 599.00</td>
                            <td class="text-right">€ 5,999</td>
                        </tr>
                        <tr>
                            <td colspan="5"></td>
                            <td class="td-total">
                                Total
                            </td>
                            <td class="td-price">
                                <small>€</small>12,999
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="title">Shopping Cart Table</h4>
            </div>
            <div class="col-md-10 ml-auto mr-auto">
                <div class="table-responsive">
                <table class="table table-shopping">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th></th>
                            <th class="text-right">Price</th>
                            <th class="text-right">Quantity</th>
                            <th class="text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="img-container">
                                    <img src="assets/img/tables/agenda.png" alt="Agenda">
                                </div>
                            </td>
                            <td class="td-product">
                                <strong>Get Shit Done Notebook</strong>
                                <p>
                                Most beautiful agenda for the office, really nice paper and black cover. Most beautiful agenda for the office.</p>
                            </td>

                            <td class="td-price">
                                <small>€</small>49
                            </td>
                            <td class="td-number td-quantity">
                                1
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-border btn-round"> - </button>
                                    <button class="btn btn-sm btn-border btn-round"> + </button>
                                </div>
                            </td>
                            <td class="td-number">
                                <small>€</small>49
                            </td>
                        </tr>
                        <tr>
                             <td>
                                <div class="img-container">
                                    <img src="assets/img/tables/stylus.jpg" alt="Stylus">
                                </div>
                            </td>
                            <td class="td-product">
                                <strong>Stylus</strong>
                                <p>Design is not just what it looks like and feels like. Design is how it works.  </p>
                            </td>

                            <td class="td-price">
                                <small>€</small>499
                            </td>
                            <td class="td-number td-quantity">
                                2
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-border btn-round"> - </button>
                                    <button class="btn btn-sm btn-border btn-round"> + </button>
                                </div>
                            </td>
                            <td class="td-number">
                                <small>€</small>998
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="img-container">
                                    <img src="assets/img/tables/evernote.png" alt="Evernote">
                                </div>
                            </td>
                            <td class="td-product">
                                <strong>Evernote iPad Stander</strong>
                                <p>A groundbreaking Retina display. All-flash architecture. Fourth-generation Intel processors.</p>
                            </td>

                            <td class="td-price">
                                <small>€</small>799
                            </td>
                            <td class="td-number td-quantity">
                                1
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-border btn-round"> - </button>
                                    <button class="btn btn-sm btn-border btn-round"> + </button>
                                </div>
                            </td>
                            <td class="td-number">
                                <small>€</small>799
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td></td>
                            <td class="td-total">
                               Total
                            </td>
                            <td class="td-total">
                                <small>€</small>12,999
                            </td>
<!--
                            <td> <button type="button" class="btn btn-info btn-l">Complete Purchase <i class="fa fa-chevron-right"></i></button></td>

                            <td></td>
-->
                        </tr>
                        <tr class="tr-actions">
                           <td colspan="3"></td>
                           <td colspan="2" class="text-right">
                               <button type="button" class="btn btn-danger btn-lg">Complete Purchase <i class="fa fa-chevron-right"></i></button>
                           </td>
                        </tr>
                    </tbody>
                </table>
                </div>

            </div>
        </div>

    </div>
</div>
<div class="section section-nude-gray">
    <div class="container container-tim">
        <div class="title" id="comments">
            <h3>Comments Area</h3>
        </div>
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="media-area">
                    <h3>Comments · 10</h3>
                    <div class="media">
                          <a class="pull-left" href="#paper-kit">
                           <div class="avatar">
                                <img class="media-object" src="assets/img/faces/clem-onojeghuo-2.jpg" alt="...">
                           </div>
                          </a>
                          <div class="media-body">
                            <h5 class="media-heading">John Wayne</h5>
                            <div class="pull-right">
                                <h6 class="text-muted">Sep 11, 11:53 AM</h6>
                                <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                            </div>
                            <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                            <p> Don't forget, You're Awesome!</p>

                            <div class="media-footer">
                                <a href="#paper-kit" class="btn btn-danger btn-link">
                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i> 243
                                </a>
                                <a href="#paper-kit" class="btn btn-link">
                                    <i class="fa fa-thumbs-down" aria-hidden="true"></i> 2
                                </a>
                                <a href="#paper-kit" class="btn btn-link">
                                     Follow · 3
                                </a>
                            </div>

                             <div class="media media-post">
                                     <a class="pull-left author" href="#paper-kit">
                                      <div class="avatar">
                                            <img class="media-object" alt="64x64" src="assets/img/faces/kaci-baum-2.jpg">
                                      </div>
                                  </a>
                                  <div class="media-body">
                                        <textarea class="form-control" placeholder="Write a nice reply or go home..." rows="4"></textarea>
                                        <div class="media-footer">
                                             <a href="#paper-kit" class="btn btn-info pull-right">Reply</a>
                                        </div>
                                  </div>
                             </div> <!-- end media-post -->
                          </div>
                    </div> <!-- end media -->

                    <!--  Comment                    -->
                    <div class="media">
                      <a class="pull-left" href="#paper-kit">
                          <div class="avatar">
                             <img class="media-object" alt="Tim Picture" src="assets/img/faces/ayo-ogunseinde-2.jpg">
                          </div>
                      </a>
                      <div class="media-body">

                        <h5 class="media-heading">Flume</h5>
                        <div class="pull-right">
                            <h6 class="text-muted">Sep 11, 11:54 AM</h6>
                            <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                        </div>

                         <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>

                         <div class="media-footer">
                            <a href="#paper-kit" class="btn btn-link">
                                <i class="fa fa-thumbs-up" aria-hidden="true"></i> 243
                            </a>
                            <a href="#paper-kit" class="btn btn-primary btn-link">
                                <i class="fa fa-thumbs-down" aria-hidden="true"></i> 2
                            </a>
                            <a href="#paper-kit" class="btn btn-link">
                                 Follow · 3
                            </a>
                         </div>
                         <div class="media">
                              <a class="pull-left" href="#paper-kit">
                                  <div class="avatar">
                                        <img class="media-object" alt="64x64" src="assets/img/faces/erik-lucatero-2.jpg">
                                  </div>
                              </a>
                              <div class="media-body">
                                    <h5 class="media-heading">Eric Faker</h5>
                                    <div class="pull-right">
                                        <h6 class="text-muted">Sep 11, 11:56 AM</h6>
                                        <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                                    </div>
                                    <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                    <p> Don't forget, You're Awesome!</p>

                                    <div class="media-footer">
                                        <a href="#paper-kit" class="btn btn-danger btn-link">
                                            <i class="fa fa-thumbs-up" aria-hidden="true"></i> 243
                                        </a>
                                        <a href="#paper-kit" class="btn btn-link">
                                            <i class="fa fa-thumbs-down" aria-hidden="true"></i> 2
                                        </a>
                                        <a href="#paper-kit" class="btn btn-info btn-link">
                                             Follow · 3
                                        </a>
                                    </div>
                              </div>
                          </div> <!-- end media -->
                      </div>
                    </div> <!-- end media -->
                    <div class="media">
                          <a class="pull-left" href="#paper-kit">
                              <div class="avatar">
                                    <img class="media-object" alt="64x64" src="assets/img/faces/joe-gardner-2.jpg">
                              </div>
                          </a>
                          <div class="media-body">
                                <h5 class="media-heading">Banks</h5>
                                <div class="pull-right">
                                    <h6 class="text-muted">Sep 11, 11:57 AM</h6>
                                    <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                                </div>
                                <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                <p> Don't forget, You're Awesome!</p>

                                <div class="media-footer">
                                    <a href="#paper-kit" class="btn btn-link">
                                        <i class="fa fa-thumbs-up" aria-hidden="true"></i> 243
                                    </a>
                                    <a href="#paper-kit" class="btn btn-link">
                                        <i class="fa fa-thumbs-down" aria-hidden="true"></i> 2
                                    </a>
                                    <a href="#paper-kit" class="btn btn-link">
                                         Follow · 3
                                    </a>
                                </div>
                          </div>
                    </div> <!-- end media -->
                    <br>
                    <div class="pagination-area">
                        <ul class="pagination pagination-primary pagination-no-border justify-content-center">
                              <li class="page-item"><a href="#paper-kit" class="page-link"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                              <li class="page-item active"><a href="#paper-kit" class="page-link">1</a></li>
                              <li class="page-item"><a href="#paper-kit" class="page-link">2</a></li>
                              <li class="page-item"><a href="#paper-kit" class="page-link">3</a></li>
                              <li class="page-item"><a href="#paper-kit" class="page-link">4</a></li>
                              <li class="page-item"><a href="#paper-kit" class="page-link">5</a></li>
                              <li class="page-item"><a href="#paper-kit" class="page-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                         </ul>
                    </div>
                </div> <!-- end media-area -->
            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->
    </div>
</div>
<div class="section section-gray">
    <div class="container tim-container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                  <h3 class="text-center">Post your comment</h3>
                  <div class="media media-post">
                      <a class="pull-left author" href="#paper-kit">
                          <div class="avatar">
                                <img class="media-object" alt="64x64" src="assets/img/faces/ayo-ogunseinde-2.jpg">
                          </div>
                      </a>
                      <div class="media-body">
                            <textarea class="form-control border-input" placeholder="Write some nice stuff or nothing..." rows="6"></textarea>
                            <div class="media-footer">
                                 <a href="#paper-kit" class="btn btn-info btn-wd pull-right">Post Comment</a>
                            </div>
                      </div>
                  </div> <!-- end media-post -->

                  <h3 class="text-center">Post your comment</h3>
                  <div class="media media-post">
                      <form class="form">
                      <a class="pull-left author" href="#paper-kit">
                          <div class="avatar">
                                <img class="media-object" alt="64x64" src="assets/img/faces/kaci-baum-2.jpg">
                          </div>
                      </a>
                      <div class="media-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <input type="email" class="form-control border-input" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <input type="email" class="form-control border-input" placeholder="Your email">
                                    </div>
                                </div>
                            </div>
                            <textarea class="form-control border-input" placeholder="Write some nice stuff or nothing..." rows="6"></textarea>
                            <div class="media-footer">
                                <h6 class="text-muted">Sign in with</h6>
                                <a href="#twitter" class="btn btn-just-icon btn-round btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#facebook" class="btn btn-round btn-just-icon btn-facebook">
                                   <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#google" class="btn btn-just-icon btn-round btn-google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#paper-kit" class="btn btn-info pull-right">Post Comment</a>
                            </div>
                      </div><!-- end media-body -->
                      </form>
                  </div> <!-- end media-post -->
            </div>
        </div> <!-- end row -->
    </div>
</div>
<div class="section section-nude-gray">
    <div class="container tim-container">
        <div class="title">
            <h3>Comments Area Small</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="media-area media-area-small">
                    <h3>Comments · 10</h3>
                    <div class="media">
                          <a class="pull-left" href="#paper-kit">
                           <div class="avatar">
                                <img class="media-object" src="assets/img/faces/clem-onojeghuo-2.jpg" alt="...">
                           </div>
                          </a>
                          <div class="media-body">
                            <h5 class="media-heading">John Wayne</h5>
                            <div class="pull-right">
                                <h6 class="text-muted">Sep 11, 11:53 AM</h6>
                                <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                            </div>
                            <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>

                            <div class="media-footer">
                                <a href="#paper-kit" class="btn btn-danger btn-link">
                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i> 243
                                </a>
                                <a href="#paper-kit" class="btn btn-link">
                                    <i class="fa fa-thumbs-down" aria-hidden="true"></i> 2
                                </a>
                                <a href="#paper-kit" class="btn btn-link">
                                     Follow · 3
                                </a>
                            </div>
                          </div>
                    </div> <!-- end media -->

                    <!--  Comment                    -->
                    <div class="media">
                      <a class="pull-left" href="#paper-kit">
                          <div class="avatar">
                             <img class="media-object" alt="Tim Picture" src="assets/img/faces/clem-onojeghuo-3.jpg">
                          </div>
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">Chet Faker</h5>
                        <div class="pull-right">
                            <h6 class="text-muted">Sep 11, 11:54 AM</h6>
                            <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                        </div>
                         <p>Hello guys, nice to have you on the platform!</p>

                        <div class="media-footer">
                            <a href="#paper-kit" class="btn btn-danger btn-link">
                                <i class="fa fa-thumbs-up" aria-hidden="true"></i> 243
                            </a>
                            <a href="#paper-kit" class="btn btn-link">
                                <i class="fa fa-thumbs-down" aria-hidden="true"></i> 2
                            </a>
                            <a href="#paper-kit" class="btn btn-link">
                                 Follow · 3
                            </a>
                        </div>
                         <div class="media">
                              <a class="pull-left" href="#paper-kit">
                                  <div class="avatar">
                                        <img class="media-object" alt="64x64" src="assets/img/faces/erik-lucatero-2.jpg">
                                  </div>
                              </a>
                              <div class="media-body">
                                    <h5 class="media-heading">Flume</h5>
                                    <div class="pull-right">
                                        <h6 class="text-muted">Sep 11, 11:56 AM</h6>
                                        <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                                    </div>
                                    <p> Don't forget, You're Awesome!</p>

                                    <div class="media-footer">
                                        <a href="#paper-kit" class="btn btn-danger btn-link">
                                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>243
                                        </a>
                                        <a href="#paper-kit" class="btn btn-link">
                                            <i class="fa fa-thumbs-down" aria-hidden="true"></i> 2
                                        </a>
                                        <a href="#paper-kit" class="btn btn-info btn-link">
                                             Follow · 3
                                        </a>
                                    </div>
                              </div>
                          </div> <!-- end media -->
                      </div>
                    </div> <!-- end media -->
                    <div class="media">
                          <a class="pull-left" href="#paper-kit">
                              <div class="avatar">
                                    <img class="media-object" alt="64x64" src="assets/img/faces/clem-onojeghuo-2.jpg">
                              </div>
                          </a>
                          <div class="media-body">
                                <h5 class="media-heading">Banks</h5>
                                <div class="pull-right">
                                    <h6 class="text-muted">Sep 11, 11:57 AM</h6>
                                    <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                                </div>
                                <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                <p> Don't forget, You're Awesome!</p>

                                <div class="media-footer">
                                    <a href="#paper-kit" class="btn btn-link">
                                        <i class="fa fa-thumbs-up" aria-hidden="true"></i> 243
                                    </a>
                                    <a href="#paper-kit" class="btn btn-primary btn-link">
                                        <i class="fa fa-thumbs-down" aria-hidden="true"></i> 2
                                    </a>
                                    <a href="#paper-kit" class="btn btn-link">
                                         Follow · 3
                                    </a>
                                </div>
                          </div>
                    </div> <!-- end media -->
                    <div class="pagination-area">
                        <ul class="pagination pagination-primary justify-content-center">
                              <li class="page-item"><a href="#paper-kit" class="page-link"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                              <li class="page-item active"><a href="#paper-kit" class="page-link">1</a></li>
                              <li class="page-item"><a href="#paper-kit" class="page-link">2</a></li>
                              <li class="page-item"><a href="#paper-kit" class="page-link">3</a></li>
                              <li class="page-item"><a href="#paper-kit" class="page-link">4</a></li>
                              <li class="page-item"><a href="#paper-kit" class="page-link">5</a></li>
                              <li class="page-item"><a href="#paper-kit" class="page-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                         </ul>
                    </div>

                    <h3 class="text-center">Post your comment</h3>
                    <div class="media media-post">
                      <form class="form">
                      <a class="pull-left author" href="#paper-kit">
                          <div class="avatar">
                                <img class="media-object" alt="64x64" src="assets/img/faces/erik-lucatero-2.jpg">
                          </div>
                      </a>
                      <div class="media-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <input type="email" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <input type="email" class="form-control" placeholder="Your email">
                                    </div>
                                </div>
                            </div>
                            <textarea class="form-control" placeholder="Write some nice stuff or nothing..." rows="6"></textarea>
                            <div class="media-footer">
                                <h6 class="text-muted">Sign in with</h6>
                                <a href="#twitter" class="btn btn-just-icon btn-round btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#facebook" class="btn btn-round btn-just-icon btn-facebook">
                                   <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#google" class="btn btn-just-icon btn-round btn-google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#paper-kit" class="btn btn-primary pull-right btn-round">Post Comment</a>
                            </div>
                      </div><!-- end media-body -->
                      </form>
                    </div> <!-- end media-post -->

                </div> <!-- end media-area-small -->
            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->

    </div>
</div>
        <div class="section section-blue">
            <div class="container">
                <div class="title">
                    <h2>Javascript Components</h2>
                </div>
                <div class="row" id="modals">
                    <div class="col-md-12">
                        <div class="title">
                            <h3>Modals</h3>
                        </div>

                        <!-- classicModal -->
                        <button type="button" class="btn btn-round" data-toggle="modal" data-target="#classicModal">
                            Classic modal
                        </button>
                        

                        <!-- notice modal -->
                        <button type="button" class="btn btn-round" data-toggle="modal" data-target="#noticeModal">
                            Notice modal
                        </button>
                        

                        <!-- small modal -->
                        <button type="button" class="btn btn-danger btn-round" data-toggle="modal" data-target="#smallAlertModal">
                            Small alert modal
                        </button>
                        

                        <!-- small notice modal -->
                        <button type="button" class="btn btn-danger btn-round" data-toggle="modal" data-target="#smallNoticeModal">
                            Small norice modal
                        </button>
                        

                        <!-- login modal -->
                        <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#loginModal">
                            Login modal
                        </button>
                        

                        <!-- register modal -->
                        <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#registerModal">
                            Register modal
                        </button>
                        
                    </div>
                </div>

                <div class="title">
                    <h3>Collapse</h3>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div id="acordeon">
                            <div id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="card no-transition">
                                    <div class="card-header card-collapse" role="tab" id="headingOne">
                                        <h5 class="mb-0 panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Default Collapsible Item 1
                                                <i class="nc-icon nc-minimal-down"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                    <div class="card-header card-collapse" role="tab" id="headingTwo">
                                        <h5 class="mb-0 panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Default Collapsible Item 2
                                                <i class="nc-icon nc-minimal-down"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                    <div class="card-header card-collapse" role="tab" id="headingThree">
                                        <h5 class="mb-0 panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Default Collapsible Item 3
                                                <i class="nc-icon nc-minimal-down"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div><!--  end acordeon -->
                        </div>
                    </div>
                </div>
                <div class="title">
                    <h3>Gallery</h3>
                </div>
                <!--             gallery -->
                                <!-- Root element of PhotoSwipe. Must have class pswp. -->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                    <!-- Background of PhotoSwipe.
                         It's a separate element as animating opacity is faster than rgba(). -->
                    <div class="pswp__bg"></div>

                    <!-- Slides wrapper with overflow:hidden. -->
                    <div class="pswp__scroll-wrap">

                        <!-- Container that holds slides.
                            PhotoSwipe keeps only 3 of them in the DOM to save memory.
                            Don't modify these 3 pswp__item elements, data is added later on. -->
                        <div class="pswp__container">
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                        </div>

                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                        <div class="pswp__ui pswp__ui--hidden">

                            <div class="pswp__top-bar">

                                <!--  Controls are self-explanatory. Order can be changed. -->

                                <div class="pswp__counter"></div>

                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                                <button class="pswp__button pswp__button--share" title="Share"></button>

                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                <!-- element will get class pswp__preloader--active when preloader is running -->
                                <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                      <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                <div class="pswp__share-tooltip"></div>
                            </div>

                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

                            <div class="pswp__caption">
                                <div class="pswp__caption__center"></div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery" data-pswp-uid="1">
            <div class="row">
                <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject" class="col-md-3 col-sm-4 gallery-item">
                    <a href="assets/img/gallery/outfit-gucci.jpg" itemprop="contentUrl" data-size="750x1002">
                        <img src="assets/img/gallery/outfit-gucci.jpg" itemprop="thumbnail" alt="Image description" class="vertical-image img-rounded img-responsive">
                    </a>
                    <figcaption itemprop="caption description" class="gallery-caption">Gucci</figcaption>
                </figure>

                <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject" class="col-md-3 col-sm-4 gallery-item">
                    <a href="assets/img/gallery/outfit-paul-smith.jpg" itemprop="contentUrl" data-size="750x1002">
                        <img src="assets/img/gallery/outfit-paul-smith.jpg" itemprop="thumbnail" alt="Image description" class="vertical-image img-rounded img-responsive">
                    </a>
                    <figcaption itemprop="caption description" class="gallery-caption">Paul Smith</figcaption>
                </figure>

                <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject" class="col-md-3 col-sm-4 gallery-item">
                    <a href="assets/img/gallery/outfit-maison-margiela.jpg" itemprop="contentUrl" data-size="750x1002">
                        <img src="assets/img/gallery/outfit-maison-margiela.jpg" itemprop="thumbnail" alt="Image description" class="vertical-image img-rounded img-responsive">
                    </a>
                    <figcaption itemprop="caption description" class="gallery-caption">Maison Margiela</figcaption>
                </figure>
                <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject" class="col-md-3 col-sm-4 gallery-item">
                    <a href="assets/img/gallery/outfit-burberry.jpg" itemprop="contentUrl" data-size="750x1002">
                        <img src="assets/img/gallery/outfit-burberry.jpg" itemprop="thumbnail" alt="Image description" class="vertical-image img-rounded img-responsive">
                    </a>
                    <figcaption itemprop="caption description" class="gallery-caption">Burberry</figcaption>
                </figure>
            </div>

            <div class="row">
                <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject" class="col-md-3 col-sm-4 gallery-item">
                    <a href="assets/img/gallery/ressence.jpg" itemprop="contentUrl" data-size="960x800">
                        <img src="assets/img/gallery/ressence.jpg" itemprop="thumbnail" alt="Image description" class="horizontal-image img-rounded img-responsive">
                    </a>
                </figure>
                <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject" class="col-md-3 col-sm-4 gallery-item">
                    <a href="assets/img/gallery/gucci-sun.jpg" itemprop="contentUrl" data-size="960x800">
                        <img src="assets/img/gallery/gucci-sun.jpg" itemprop="thumbnail" alt="Image description" class="small-horizontal-image img-rounded img-responsive">
                    </a>
                </figure>
                <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject" class="col-md-3 col-sm-4 gallery-item">
                    <a href="assets/img/gallery/bottega.jpg" itemprop="contentUrl" data-size="960x800">
                        <img src="assets/img/gallery/bottega.jpg" itemprop="thumbnail" alt="Image description" class="small-horizontal-image img-rounded img-responsive">
                    </a>
                </figure>
                <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject" class="col-md-3 col-sm-4 gallery-item">
                    <a href="assets/img/gallery/bracelet.jpg" itemprop="contentUrl" data-size="960x800">
                        <img src="assets/img/gallery/bracelet.jpg" itemprop="thumbnail" alt="Image description" class="small-horizontal-image img-rounded img-responsive">
                    </a>
                </figure>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-md-12">
            <div class="title">
                <h3>Tooltips</h3>
            </div>
            <button type="button" class="btn btn-warning btn-round" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">On left</button>
            <button type="button" class="btn btn-warning btn-round" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">On right</button>
            <button type="button" class="btn btn-warning btn-round" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">On top</button>
            <button type="button" class="btn btn-warning btn-round" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">On bottom</button>
        </div>
        <div class="col-md-12">
            <div class="title">
                <h3>Popovers</h3>
            </div>
            <button type="button" class="btn btn-round" data-toggle="popover" data-placement="top" title="" data-content="Here will be some very useful information about this popover." data-original-title="Popover on top">Nude on top</button>
            <button type="button" class="btn btn-round" data-toggle="popover" data-placement="bottom" title="" data-content="Here will be some very useful information about this popover." data-original-title="Popover on bottom">Nude on bottom</button>
                <button type="button" class="btn btn-round" data-toggle="popover" data-placement="left" title="" data-content="Here will be some very useful information about this popover." data-original-title="Popover on left">Nude on left</button>
                <button type="button" class="btn btn-round" data-toggle="popover" data-placement="right" title="" data-content="Here will be some very useful information about this popover." data-original-title="Popover on right">Nude on right</button>
        </div>

        <div class="col-md-12">
            <div class="title">
                <h3>Dropup</h3>
            </div>
            <div id="special-drowdown">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4 class="title"><small>Dropup with sharing</small></h4>
                        <div class="dropup">
                            <button id="dLabel" type="button" class="btn btn-block btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sharing
                            </button>
                            <ul class="dropdown-menu dropdown-sharing dropdown-menu-right " aria-labelledby="dLabel">
                                <li class="dropdown-header text-center">Sharing is caring!</li>
                                <a class="dropup-item">
                                    <div class="social-line">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <span class="icon-twitter"><i class="fa fa-twitter"></i></span>
                                            </div>
                                            <div class="col-sm-6">Twitter</div>
                                            <div class="col-sm-4">
                                                <label>
                                                    <div class="bootstrap-switch-on bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-success" style="width: 50px;"><i class="nc-icon nc-check-2"></i></span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-success" style="width: 50px;"><i class="nc-icon nc-simple-remove"></i></span><input type="checkbox" data-toggle="switch" checked="" data-on-text="<i class='nc-icon nc-check-2'></i>" data-off-text="<i class='nc-icon nc-simple-remove'></i>" data-on-color="success" data-off-color="success"></div></div><span class="toggle"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropup-item">
                                    <div class="social-line">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <span class="icon-facebook"><i class="fa fa-facebook"></i></span>
                                            </div>
                                            <div class="col-sm-6">Facebook</div>
                                            <div class="col-sm-4">
                                                <label>
                                                    <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: -50px;"><span class="bootstrap-switch-handle-on bootstrap-switch-success" style="width: 50px;"><i class="nc-icon nc-check-2"></i></span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-success" style="width: 50px;"><i class="nc-icon nc-simple-remove"></i></span><input type="checkbox" data-toggle="switch" data-on-text="<i class='nc-icon nc-check-2'></i>" data-off-text="<i class='nc-icon nc-simple-remove'></i>" data-on-color="success" data-off-color="success"></div></div><span class="toggle"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropup-item">
                                    <div class="social-line">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <span class="icon-pinterest"><i class="fa fa-pinterest"></i></span>
                                            </div>
                                            <div class="col-sm-6">Pinterest</div>
                                            <div class="col-sm-4">
                                                <label>
                                                    <div class="bootstrap-switch-off bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 72px;"><div class="bootstrap-switch-container" style="width: 122px; margin-left: -50px;"><span class="bootstrap-switch-handle-on bootstrap-switch-success" style="width: 50px;"><i class="nc-icon nc-check-2"></i></span><span class="bootstrap-switch-label" style="width: 26px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-success" style="width: 50px;"><i class="nc-icon nc-simple-remove"></i></span><input type="checkbox" data-toggle="switch" data-on-text="<i class='nc-icon nc-check-2'></i>" data-off-text="<i class='nc-icon nc-simple-remove'></i>" data-on-color="success" data-off-color="success"></div></div><span class="toggle"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropup-item text-center" href="#paper-kit">
                                    <button class="btn btn-info btn-round ml-auto mr-auto">Share</button>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4 class="title"><small>Dropup with actions</small></h4>

                        <div class="dropup">
                          <button id="dLabel" type="button" class="btn btn-block btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                          </button>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel">
                                <a class="dropdown-item">
                                    <div href="#paper-kit" class="action-line">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <span class="icon-simple"><i class="nc-icon nc-single-copy-04"></i></span>
                                            </div>
                                            <div class="col-sm-9">Duplicate</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item">
                                    <div href="#paper-kit" class="action-line">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <span class="icon-simple"><i class="nc-icon nc-user-run"></i></span>
                                            </div>
                                            <div class="col-sm-9">Move from here</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item">
                                    <div href="#paper-kit" class="action-line link-danger">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <span class="icon-simple"><i class="nc-icon nc-box-2"></i></span>
                                            </div>
                                            <div class="col-sm-9">Archive</div>
                                        </div>
                                    </div>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="title">
                <h3>Datepicker</h3>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-group date" id="datetimepicker">
                            <input type="text" class="form-control datetimepicker" placeholder="06/07/2017">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- fileupload -->
        <div class="tim-tile">
            <h3>File Upload</h3>
        </div>
        <div class="row">
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
            <div class="col-md-3 col-sm-4">
                <h4 class="title"><small>Avatar</small></h4>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail img-circle img-no-padding" style="width: 150px; height: 150px;">
                        <img src="assets/img/placeholder.jpg" alt="...">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail img-circle img-no-padding" style="max-width: 150px; max-height: 150px;"></div>
                    <div>
                        <span class="btn btn-outline-default btn-file btn-round"><span class="fileinput-new">Add Photo</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                        <br>
                        <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists btn-round" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="title">
            <h3>Carousel</h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="card card-raised page-carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item carousel-item-next carousel-item-left">
                                <img class="d-block img-fluid" src="http://www.hudsonmgmt.com/hms/images/slider-img-1.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Somewhere</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="http://96bda424cfcc34d9dd1a-0a7f10f87519dba22d2dbc6233a731e5.r41.cf2.rackcdn.com/ermu/sliders-1/fall-residential-faders/Fall_Fader2.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Somewhere else</p>
                                </div>
                            </div>
                            <div class="carousel-item active carousel-item-left">
                                <img class="d-block img-fluid" src="http://www.jveroassociates.com/images/slider/slider-02.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>Here it is</p>
                                </div>
                            </div>
                        </div>

                        <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-gray" id="cards">
        <div class="container tim-container">
            <div class="title">
                <h2>Cards</h2>
            </div>
            <h4 class="title">Blog cards</h4>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card card-blog">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="assets/img/sections/neill-kumar.jpg">
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">
                                We will create a great experience
                            </h4>
                            <div class="card-description">
                                Cards are an interaction model that are spreading pretty widely, in fact. What all of these have in common is that they're pulling...
                            </div>
                            <div class="card-footer">
                                <a href="#pablo" class="btn btn-danger btn-round">View Article</a>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-color="purple" data-background="color">
                        <div class="card-body text-center">
                            <h6 class="card-category">
                                <i class="fa fa-dribbble" aria-hidden="true"></i> Dribbble
                            </h6>
                            <h5 class="card-title">
                                <a href="#pablo">"Good Design Is as Little Design as Possible"</a>
                            </h5>
                            <p class="card-description">
                                Design makes an important contribution to the preservation of the environment. It conserves resources and minimises physical and visual pollution throughout the lifecycle of the product....
                            </p>
                            <div class="card-footer text-center">
                                <a href="#pablo" rel="tooltip" title="Bookmark" class="btn btn-outline-neutral btn-round btn-just-icon"><i class="fa fa-bookmark-o"></i></a>
                                <a href="#pablo" class="btn btn-neutral btn-round"><i class="fa fa-newspaper-o"></i> Read</a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h6 class="author pull-left">Ronna Johnson</h6>
                            <span class="category-social text-info pull-right">
                                <i class="fa fa-twitter"></i>
                            </span>
                            <div class="clearfix"></div>
                            <p class="card-description">
                                "It clarifies the product’s structure. Better still, it can make the product clearly express its function by making use of the <a href="#twitter" class="text-danger">@mike</a>'s intuition. At best, it is self-explanatory."
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card card-blog">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="assets/img/sections/anders-jilden.jpg">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                Good Design Is Aesthetic
                            </h4>
                            <div class="card-description">
                                Cards are an interaction model that are spreading pretty widely, in fact. What all of these have in common is that they're pulling...
                            </div>
                            <hr>
                            <div class="card-footer">
                                <div class="author">
                                    <a href="#pablo">
                                       <img src="assets/img/faces/ayo-ogunseinde-2.jpg" alt="..." class="avatar img-raised">
                                       <span>Mike John</span>
                                    </a>
                                </div>
                                <div class="stats">
                                     <i class="fa fa-clock-o" aria-hidden="true"></i> 5 min read
                                 </div>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-background="image" style="background-image: url('assets/img/sections/rawpixel-com.jpg')">
                        <div class="card-body">
                            <a href="#pablo">
                                <h3 class="card-title">Ten Principles of “Good Design”</h3>
                            </a>
                            <p class="card-description">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <div class="card-footer">
                                <a href="#pablo" class="btn btn-success btn-round">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card" data-background="color" data-color="orange">
                        <div class="card-body">
                            <div class="author">
                                <a href="#pablo">
                                   <img src="assets/img/faces/erik-lucatero-2.jpg" alt="..." class="avatar img-raised">
                                   <span>Erik Johnson</span>
                                </a>
                            </div>
                            <span class="category-social pull-right">
                                <i class="fa fa-quote-right"></i>
                            </span>
                            <div class="clearfix"></div>
                            <p class="card-description">
                                "Less, but better – because it concentrates on the essential aspects, and the products are not burdened with non-essentials. Back to purity, back to simplicity. At best, it is self-explanatory."
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body text-center">
                            <span class="category-social text-info pull-right">
                                <i class="fa fa-twitter"></i>
                            </span>
                            <div class="clearfix"></div>
                            <div class="author">
                                <a href="#pablo">
                                   <img src="assets/img/faces/kaci-baum-2.jpg" alt="..." class="avatar-big img-raised border-gray">
                                </a>
                                <h5 class="card-title">Kaci Baum</h5>
                                <p class="category"><a href="#twitter" class="text-danger">@kacibaum</a></p>
                            </div>
                            <p class="card-description">
                                "Less, but better – because it concentrates on the essential aspects, and the products are not burdened with non-essentials."
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img" src="assets/img/sections/david-marcu.jpg">
                            </a>
                        </div>
                        <div class="card-body">
                            <label class="label label-warning">Travel</label>
                            <h5 class="card-title">
                                Currently at the San Francisco Museum of Modern Art
                            </h5>
                            <hr>
                            <div class="card-footer">
                                <div class="author">
                                    <a href="#pablo">
                                       <img src="assets/img/rihanna.jpg" alt="..." class="avatar img-raised">
                                       <span>Lord Alex</span>
                                    </a>
                                </div>
                               <div class="stats">
                                    <i class="fa fa-heart" aria-hidden="true"></i> 5.3k
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="title">Text Coloured Cards</h4>
            <div class="row coloured-cards">
                <div class="col-md-4 col-sm-6">
                    <div class="card-big-shadow">
                        <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                            <div class="card-body">
                                <h6 class="card-category">Best cards</h6>
                                <h4 class="card-title"><a href="#paper-kit">Blue Card</a></h4>
                                <p class="card-description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card-big-shadow">
                        <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                            <div class="card-body">
                                <h6 class="card-category">Best cards</h6>
                                <h4 class="card-title"><a href="#paper-kit">Green Card</a></h4>
                                <p class="card-description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card-big-shadow">
                        <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
                            <div class="card-body">
                                <h6 class="card-category">Best cards</h6>
                                <h4 class="card-title"><a href="#paper-kit">Yellow Card</a></h4>
                                <p class="card-description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card-big-shadow">
                        <div class="card card-just-text" data-background="color" data-color="brown" data-radius="none">
                            <div class="card-body">
                                <h6 class="card-category">Best cards</h6>
                                <h4 class="card-title"><a href="#paper-kit">Brown Card</a></h4>
                                <p class="card-description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card-big-shadow">
                        <div class="card card-just-text" data-background="color" data-color="purple" data-radius="none">
                            <div class="card-body">
                                <h6 class="card-category">Best cards</h6>
                                <h4 class="card-title"><a href="#paper-kit">Purple Card</a></h4>
                                <p class="card-description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card-big-shadow">
                        <div class="card card-just-text" data-background="color" data-color="orange" data-radius="none">
                            <div class="card-body">
                                <h6 class="card-category">Best cards</h6>
                                <h4 class="card-title"><a href="#paper-kit">Orange Card</a></h4>
                                <p class="card-description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>

            </div>

            <h4 class="title">Pricing cards</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-pricing">
                        <div class="card-body">
                            <h6 class="card-category">Enterprise</h6>
                            <h1 class="card-title">$139</h1>
                            <ul>
                                <li><i class="fa fa-check text-success" aria-hidden="true"></i> Sharing Tools</li>
                                <li><i class="fa fa-check text-success" aria-hidden="true"></i> Design Tools</li>
                                <li><i class="fa fa-times text-danger" aria-hidden="true"></i> Private Messages</li>
                                <li><i class="fa fa-times text-danger" aria-hidden="true"></i> Personal Brand</li>
                                <li><i class="fa fa-times text-danger" aria-hidden="true"></i> Twitter API</li>
                            </ul>
                            <a href="#pablo" class="btn btn-success btn-round card-link">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-pricing" data-color="orange">
                        <div class="card-body">
                            <div class="card-icon">
                                <span class="icon-simple"><i class="nc-icon nc-istanbul"></i></span>
                            </div>
                            <h3 class="card-title">$249</h3>

                            <p class="card-description">
                                This is good if your company size is between 100 and 299 employees.
                            </p>
                            <div class="card-footer">
                                <a href="#pablo" class="btn btn-neutral btn-round">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-pricing">
                        <div class="card-body">
                            <h6 class="card-category">Premium</h6>
                            <h1 class="card-title">€89</h1>
                            <ul>
                                <li><b>10</b> Projects</li>
                                <li><b>80</b> Team Members</li>
                                <li><b>Unlimited</b> Contacts</li>
                                <li><b>Unlimited</b> Messages</li>
                            </ul>
                            <a href="#pablo" class="btn btn-warning btn-round">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-pricing" data-background="image" style="background-image: url('assets/img/sections/mika-matin.jpg')">
                        <div class="card-body">
                            <h6 class="card-category">Single User</h6>
                            <div class="card-icon">
                                <i class="nc-icon nc-user-run"></i>
                            </div>
                            <h3 class="card-title">$29</h3>
                            <p class="card-description">
                                This is good if you are a freelancer of photographer.
                            </p>
                            <div class="card-footer">
                                <a href="#pablo" class="btn btn-info btn-round card-link">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <h4 class="title">Full background cards</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" data-background="image" style="background-image: url('assets/img/sections/uriel-soberanes.jpg')">
                        <div class="card-body">
                            <h6 class="card-category">
                                <i class="fa fa-newspaper-o"></i> Technology</h6>
                            <a href="#pablo">
                                <h3 class="card-title">The aesthetic quality of a product</h3>
                            </a>
                            <p class="card-description">
                                 It clarifies the product’s structure. Better still, it can make the product clearly express its function by making use of the user’s intuition.
                            </p>
                            <div class="card-footer">
                                <div class="author">
                                    <a href="#pablo">
                                       <img src="assets/img/faces/ayo-ogunseinde-2.jpg" alt="..." class="avatar img-raised">
                                       <span>Ayo Michael</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" data-background="image" style="background-image: url('assets/img/sections/david-marcu.jpg')">
                        <div class="card-body">
                            <h6 class="card-category">Travel</h6>
                            <div class="card-icon">
                                <i class="nc-icon nc-spaceship"></i>
                            </div>
                            <p class="card-description">Unlike fashionable design, it lasts many years – even in today’s throwaway society.</p>

                            <div class="card-footer">
                                <a href="#pablo" class="btn btn-danger btn-round card-link">
                                    <i class="fa fa-book" aria-hidden="true"></i> Read Article
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" data-background="image" style="background-image: url('assets/img/sections/leonard-cotte.jpg')">
                        <div class="card-body">
                            <label class="label label-info">Web Design</label>
                            <a href="#pablo">
                                <h3 class="card-title">San Francisco Museum of Modern Art</h3>
                            </a>
                            <p class="card-description">Nothing must be arbitrary or left to chance. Care and accuracy in the design process show respect towards the consumer.
                            </p>
                            <div class="card-footer">
                                <a href="#pablo" class="btn btn-link btn-neutral">
                                    <i class="fa fa-book" aria-hidden="true"></i> Read
                                </a>
                                <a href="#pablo" class="btn btn-link btn-neutral">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i> Bookmark
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <h4 class="title">Team Members Cards</h4>
            <div class="row">
                <div class="col-md-3 col-sm-6">

                    <div class="card card-profile">
                        <div class="card-cover" style="background-image: url('assets/img/sections/angelo-pantazis.jpg')">
                        </div>
                        <div class="card-avatar border-white">
                            <a href="#avatar">
                                <img src="assets/img/faces/ayo-ogunseinde-2.jpg" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Ayo Michael</h4>
                            <h6 class="card-category">Designer</h6>
                            <p class="card-description">
                            Hey there! Welcome to your user card. As you can see, it is already looking great.
                            </p>
                        </div>
                    </div> <!-- end card -->

                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card card-profile">
                        <div class="card-cover" style="background-image: url('assets/img/sections/pavel-kosov.jpg')">
                        </div>
                        <div class="card-avatar border-white">
                            <a href="#avatar">
                                <img src="assets/img/faces/joe-gardner-2.jpg" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Audrey Hepburn</h4>
                            <h6 class="card-category">Developer</h6>

                            <div class="card-footer text-center">
                                <a href="#paper-kit" class="btn btn-just-icon btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#paper-kit" class="btn btn-just-icon btn-dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                                <a href="#paper-kit" class="btn btn-just-icon btn-facebook">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card card-profile">
                        <div class="card-avatar border-white">
                            <a href="#avatar">
                                <img src="assets/img/faces/kaci-baum-2.jpg" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Laci Thor</h4>
                            <h6 class="card-category">Marketing Specialist</h6>
                            <p class="card-description">
                            British actress and humanitarian recognised as a film and fashion icon.
                            </p>
                            <div class="card-footer text-center">
                                <a href="#paper-kit" class="btn btn-just-icon btn-outline-default">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#paper-kit" class="btn btn-just-icon btn-outline-default ">
                                    <i class="fa fa-github-alt" aria-hidden="true"></i>
                                </a>
                                <a href="#paper-kit" class="btn btn-just-icon btn-outline-default">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card card-profile">
                        <div class="card-avatar border-white">
                            <a href="#avatar">
                                <img src="assets/img/faces/erik-lucatero-2.jpg" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Joe Gardner</h4>
                            <h6 class="card-category">Artist and Music Composer</h6>
                            <p class="card-description">
                            One of the co-founders. Joe drives the technical strategy of the platform, customer support and brand.
                            </p>
                            <div class="card-footer text-center">
                               <button href="#paper-kit" class="btn btn-icon btn-outline-default btn-border btn-round"><i class="fa fa-check"></i> Following</button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>

            </div>

            <h4 class="title"><small>Plain</small></h4>
            <div class="row">
                <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar border-white">
                            <a href="#avatar">
                                <img src="assets/img/placeholder.jpg" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Anonymous Tim</h4>
                            <h6 class="card-category">A private guy</h6>
                            <p class="card-description">
                            Hey there! Welcome to your user card. As you can see, it is already looking great. But if you want to tell us more about yourself by adding details in the settings page.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#paper-kit" class="btn btn-icon btn-rotate btn-round"><i class="fa fa-cog"></i> Settings</a>
                        </div>
                    </div> <!-- end card -->
                </div>

                <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar border-white">
                            <a href="#avatar">
                                <img src="assets/img/faces/joe-gardner-2.jpg" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Joe Gardner</h4>
                            <h6 class="card-category">Artist and Music Composer</h6>
                            <p class="card-description">
                            Joe Garnder is one of the co-founders and drives the technical strategy of the platform, customer support and brand. Talk with Joe only interesting topics.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                           <button href="#paper-kit" class="btn btn-icon btn-outline-default btn-border btn-round"><i class="fa fa-check"></i> Following</button>
                        </div>

                    </div> <!-- end card -->
                </div>
            </div>

            <h4 class="title">Image Cards</h4>
            <h4 class="title"><small>Cards with creators</small></h4>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card card-plain">

                        <div class="card-image">
                            <a href="#paper-kit">
                                <img src="assets/img/sections/ilya-yakover.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                            </a>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <img src="assets/img/faces/clem-onojeghuo-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive img-raised">
                                    </div>
                                    <span class="name">Eric Faker</span>
                                </a>
                                <div class="meta">Thinking in Textures</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card-image text-center">
                        <a href="#paper-kit">
                            <img src="assets/img/sections/rawpixel-coms.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                        </a>
                        <div class="card-body details-center">
                            <a href="#paper-kit">
                                <div class="author">
                                    <img src="assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                    <div class="text">
                                        <span class="name">Tom Hanks</span>
                                        <div class="meta">Drawn on 23 Jan</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-image text-center">
                        <a href="#paper-kit">
                            <img src="assets/img/sections/joshua-stannard.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                        </a>
                        <div class="card-body details-center">
                            <a href="#paper-kit">
                                <div class="author">
                                    <img src="assets/img/faces/erik-lucatero-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                    <div class="text">
                                        <span class="name">Sunset Bling</span>
                                        <div class="meta">Lincoln</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="title"><small>Cards with products</small></h4>
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="card card-product card-plain">
                        <div class="card-image">
                            <a href="#paper-kit">
                                <img src="assets/img/balmain-1.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                            </a>
                            <div class="card-body">
                                <div class="card-description">
                                    <h5 class="card-title">Double Breasted Mini Dress</h5>
                                    <p class="card-description">Dresses &amp; Skirts</p>
                                </div>
                                <div class="actions">
                                    <h5>$300</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="card card-product card-plain">
                        <div class="card-image">
                            <a href="#paper-kit">
                                <img src="assets/img/balmain-2.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                            </a>
                            <div class="card-body">
                                <div class="card-description">
                                    <h5 class="card-title">Chrystal Dress</h5>
                                    <div class="meta">Dresses &amp; Skirts</div>
                                </div>

                                <div class="actions">
                                    <button class="btn btn-link btn-just-icon"><i class="fa fa-star-o" aria-hidden="true"></i></button>
                                    <button class="btn btn-link btn-just-icon"><i class="nc-icon nc-simple-delete"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="card card-product card-plain">
                        <div class="card-image">
                            <a href="#paper-kit">
                                <img src="assets/img/balmain-3.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                            </a>
                            <div class="card-body">
                                <div class="card-description">
                                    <h5 class="card-title">Chrystal Skirt</h5>
                                    <p class="card-description">Only on demand</p>
                                </div>

                                <div class="actions">
                                    <button class="btn btn-link btn-danger btn-just-icon">234 <i class="nc-icon nc-favourite-28"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
@endsection