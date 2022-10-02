@extends('users.layout.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('users.layout.navbar')
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
</body>
</html>