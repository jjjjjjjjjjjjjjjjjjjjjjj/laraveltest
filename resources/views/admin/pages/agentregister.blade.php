@extends('admin.adminlayouts.default')
 
@section('title')
    This is a project page title
@stop

@section('description')
    This is  a project page  description
@stop

@section('keywords')
    This is  a project page  keywords
@stop

@section('content')
<div id="base">
        <!-- BEGIN OFFCANVAS LEFT -->
        <div class="offcanvas">
                    </div><!--end .offcanvas-->
        <!-- END OFFCANVAS LEFT -->

       <!-- BEGIN CONTENT-->
        <div id="content">
                <section>
        <div class="section-header">
                <ol class="breadcrumb">
                                    <li class="active">Agent</li>
                        </ol>

        </div>
        <div class="section-body contain-lg">

            <!-- BEGIN INTRO -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary">Add Agent</h1>
                </div><!--end .col -->
                <div class="col-lg-8">
                    <article class="margin-bottom-xxl">
                     @if ($errors->has())
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                              @foreach ($errors->all() as $error)
                                <div class="alert alert-callout alert-danger" role="alert">
                                                            <strong>Oh snap! !</strong> {{$error}}
                                                        </div>    
                              @endforeach
                              </div>
                        </div>
                    </div>      
</p>
@endif

@if(session('message'))
        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="alert alert-callout alert-success" role="alert">
                                <strong>Well done!</strong> Your is created successfully  .
                            </div>
                        </div>
                    </div>        
        </div>
    



@endif

                    </article>
                </div><!--end .col -->
            </div><!--end .row -->
            <!-- END INTRO -->

    

            <!-- BEGIN VALIDATION FORM WIZARD -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ">
                            <div id="rootwizard2" class="form-wizard form-wizard-horizontal"   >
                                <!-- <form class="form floating-label form-validation" role="form" novalidate="novalidate" action="{{ url('addagent') }}"  method="post">  -->
                                
                                {{ Form::open(array('files'=> true,'url' => '/agent/register', 'method' => 'post' ,'class'=>'form floating-label form-validation','novalidate'=>'novalidate'))    }}
                                

                                    <div class="form-wizard-nav">
                                        <div class="progress"><div class="progress-bar progress-bar-primary"></div></div>
                                        <ul class="nav nav-justified">
                                            <li class="active"><a href="#step1" data-toggle="tab"><span class="step">1</span> <span class="title">PERSONAL</span></a></li>
                                            <li><a href="#step2" data-toggle="tab"><span class="step">2</span> <span class="title">ACCOUNT</span></a></li>
                                            <li><a href="#step3" data-toggle="tab"><span class="step">3</span> <span class="title">SHOP</span></a></li>
                                            <li><a href="#step4" data-toggle="tab"><span class="step">4</span> <span class="title">VERIFICATION</span></a></li>
                                        </ul>
                                    </div><!--end .form-wizard-nav -->
                                    <div class="tab-content clearfix">
                                        <div class="tab-pane active" id="step1">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="firstname" id="firstname" class="form-control" data-rule-minlength="2" required value="{{old('firstname')}}">
                                                        <label for="firstname" class="control-label">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="lastname" id="lastname" class="form-control" data-rule-minlength="2" required value="{{old('lastname')}}">
                                                        <label for="lastname" class="control-label">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                            <label for="occupation" class="control-label">Photo</label>
                                                <input type="file" name="photo" id="occupation" class="form-control" data-rule-minlength="3" required>
                                            </div>                
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                    <label class="col-sm-3 control-label">Gender</label>
                                    <div class="col-sm-9">
                                        <div class="form-control">
                                        <label class="radio-inline radio-styled">
                                            <input type="radio" name="gender" value="Male"><span>Male</span>
                                        </label>
                                        <label class="radio-inline radio-styled">
                                            <input type="radio" name="gender" value="Female"><span>Female</span>
                                        </label>
                                        </div>
                                    </div><!--end .col -->
                                </div>
                                                        </div>

                                            </div>
                                            


                                        </div><!--end #step1 -->
                                        <div class="tab-pane" id="step2">
                                            <br/><br/>
                                            <div class="row">
                                                <div class="col-sm-6">
                                            
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" value="{{old('email')}}"  class="form-control" data-rule-email="true" required>
                                                <label for="email" class="control-label">Email</label>
                                                
                                                 
                                            </div>
                                             <div class="alert alert-info emailPanel" role="alert" style="display:none">
                                                    <strong class="message">Please waite...</strong>
                                                    </div>
                                            </div>
                                            <div class="col-sm-6">
                                            
                                            <div class="form-group">
                                               <input type="text" name="mobile" id="mobile" class="form-control"  value="{{old('mobile')}}" required>
                                                <label for="email" class="control-label">Mobile</label>
                                            </div>
                                             <div class="alert alert-info mobile" role="alert" style="display:none">
                                                    <strong class="mobilemessage">Please waite...</strong>
                                                    </div>
                                            </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="password" name="password" id="password1" value="{{old('password')}}" class="form-control" required="" data-rule-minlength="5">
                                                        <label for="password1" class="control-label">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="password" name="passwordrepeat" id="passwordrepeat" class="form-control" data-rule-equalto="#password1" required="">
                                                        <label for="passwordrepeat" class="control-label">Repeat password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label class="checkbox">
                                                        <input type="checkbox" id="cb2" name="remember" required> Send personal information.
                                                    </label>
                                                </div>
                                            </div>
                                        </div><!--end #step2 -->
                                        <div class="tab-pane" id="step3">
                                            <br/><br/>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="website" id="url2" class="form-control" data-rule-url="true" required="" value="{{old('website')}}">
                                                        <label for="firstname" class="control-label">Website url</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text"  value="{{old('shopname')}}"  name="shopname" id="shopname" class="form-control" data-rule-minlength="2" required>
                                                        <label for="shopname" class="control-label">Shop Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        

                             
            <div class="row">
                
                <div class="col-sm-6">
                                                          <div class="form-group">
                                    <select class="form-control select2-list required" data-placeholder="Select an item" required  name="countryId">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
</optgroup>
<optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
</optgroup>
<optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option><option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
</optgroup>
<optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
</optgroup>
<optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
    <option value="VT">Vermont</option><option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
</optgroup>
                                    </select>
                                    <label>Select Country</label>
                                </div>
                </div><!--end .col -->
                <div class="col-sm-6">
                    
                            <form class="form">
                                                                <div class="form-group">
                                    <select  name="stateId" required class="form-control select2-list  required" data-placeholder="Select an item">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
</optgroup>
<optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
</optgroup>
<optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option><option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
</optgroup>
<optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
</optgroup>
<optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
    <option value="VT">Vermont</option><option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
</optgroup>
                                    </select>
                                    <label>Select State </label>
                                </div>
                                
                            
                    
                </div><!--end .col -->
            </div><!--end .row -->
                               <div class="row">
                
                <div class="col-sm-6">
                                                          <div class="form-group">
                                                          <label>Select City</label>
                                    <select  name="cityId"  required class="form-control select2-list required" data-placeholder="Select an item">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="">Select</option>
    <option value="HI">Hawaii</option>
</optgroup>
<optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
</optgroup>
<optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option><option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
</optgroup>
<optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
</optgroup>
<optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
    <option value="VT">Vermont</option><option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
</optgroup>
                                    </select>
                                    
                                </div>
                </div><!--end .col -->
                <div class="col-sm-6">
                         
                                                    <div class="form-group">
                                                        <input type="text" name="zipcode" id="zipcode" class="form-control" data-rule-minlength="2" required>
                                                        <label for="shopname" class="control-label">Enter Zipcode</label>
                                                    </div>
                                                
                            
                    
                </div><!--end .col -->
            </div><!--end .row -->   
     <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                      <label for="firstname" class="control-label">Shop Logo</label>
                                                        <input type="file" name="logo" id="logo" class="form-control" data-rule-minlength="2" required>
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="slogan" id="slogan" class="form-control" data-rule-minlength="2" required>
                                                        <label for="lastname" class="control-label">Slogan</label>
                                                    </div>
                                                </div>
                                            </div>

                                           <div class="form-group">
                                                <div class="form-group">
                                                <textarea name="address" value="{{old('address')}}" id="address" class="form-control" rows="3"></textarea>
                                                <label>Address</label>
                                            </div>
                                            </div>     

                                        </div><!--end #step3 -->
                                        <div class="tab-pane" id="step4">
                                            <br/><br/>
                                            <div class="verficationpanel">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                      <div class="form-group">
                                                        <input type="text" name="emailcode" id="emailcode" class="form-control" data-rule-minlength="2" required>
                                                        <label for="lastname" class="control-label">Enter  Email Verification Code </label>
                                                       </div>
                                                </div>
                                                <div class="col-sm-6 hide">
                                                    <div class="form-group">
                                                        <input type="text" name="mobilecode" id="mobilecode" class="form-control" >
                                                        <label for="lastname" class="control-label">Enter Mobile Verification Code</label>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="alert alert-info emailPanel" role="alert" style="display:none">
                                                    <strong class="message">Please waite...</strong>
                                                    </div>    

                                                    <button type="button" class="btn ink-reaction btn-raised btn-primary emailbtn">Check Code</button>
                                                     <button type="button" class="btn ink-reaction btn-raised btn-primary resendemail">Resend code on Email</button>
                                                </div>
                                                <div class="col-sm-6 hide">
                                                    <button type="button" class="btn ink-reaction btn-raised btn-primary">Check Code</button>
                                                      <button type="button" class="btn ink-reaction btn-raised btn-primary">Resend code on Mobile</button>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="savepanel"  style="display:none" >
                                                  <div class="row">
                                                      <div class="col-sm-6">
                                                      Congragualation ! verification done sucessfully.
                                                      Now you can click save button to create your account.
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <button type="submit" class="btn ink-reaction btn-raised btn-primary">Save</button>
                                                     </div>
                                                  </div>                  

                                            </div>
                                        </div><!--end #step4 -->
                                    </div><!--end .tab-content -->
                                    <ul class="pager wizard">
                                        <li class="previous first"><a class="btn-raised" href="javascript:void(0);">First</a></li>
                                        <li class="previous"><a class="btn-raised" href="javascript:void(0);">Previous</a></li>
                                        <li class="next last"><a class="btn-raised" href="javascript:void(0);">Last</a></li>
                                        <li class="next"><a class="btn-raised" href="javascript:void(0);">Next</a></li>
                                    </ul>
                                </form>
                            </div><!--end #rootwizard -->
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                    <em class="text-caption">all fileds with star sign are mandatry</em>
                </div><!--end .col -->
            </div><!--end .row -->
            <!-- END VALIDATION FORM WIZARD -->

        </div><!--end .section-body -->
    </section>
        </div><!--end #content-->       
        <!-- END CONTENT -->
        <!-- BEGIN MENUBAR-->
        <div id="menubar" class="menubar-inverse ">
            <div class="menubar-fixed-panel">
                <div>
                    <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="expanded">
                    <a href="dashboard.html">
                        <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
                    </a>
                </div>
            </div>
            <div class="menubar-scroll-panel">
                <!-- BEGIN MAIN MENU -->
                @include('admin.adminincludes.sidebar')
                <!-- END MAIN MENU -->

                <div class="menubar-foot-panel">
                    <small class="no-linebreak hidden-folded">
                        <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
                    </small>
                </div>
            </div><!--end .menubar-scroll-panel-->
        </div><!--end #menubar-->
        <!-- END MENUBAR -->

        <!-- BEGIN OFFCANVAS RIGHT -->
        <div class="offcanvas">
            


<!-- BEGIN OFFCANVAS SEARCH -->
<div id="offcanvas-search" class="offcanvas-pane width-8">
    <div class="offcanvas-head">
        <header class="text-primary">Search</header>
        <div class="offcanvas-tools">
            <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                <i class="md md-close"></i>
            </a>
        </div>
    </div>

    <div class="offcanvas-body no-padding">
        <ul class="list ">
            <li class="tile divider-full-bleed">
                <div class="tile-content">
                    <div class="tile-text"><strong>A</strong></div>
                </div>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar1.jpg" alt="" />
                    </div>
                    <div class="tile-text">
                        Alex Nelson
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar1.jpg?1422538623" alt="" />
                    </div>
                    <div class="tile-text">
                        Ann Laurens
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile divider-full-bleed">
                <div class="tile-content">
                    <div class="tile-text"><strong>J</strong></div>
                </div>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar2666b.jpg?1422538624" alt="" />
                    </div>
                    <div class="tile-text">
                        Jessica Cruise
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar8463a.jpg?1422538626" alt="" />
                    </div>
                    <div class="tile-text">
                        Jim Peters
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile divider-full-bleed">
                <div class="tile-content">
                    <div class="tile-text"><strong>M</strong></div>
                </div>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar52dba.jpg?1422538625" alt="" />
                    </div>
                    <div class="tile-text">
                        Mabel Logan
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar114335.jpg?1422538623" alt="" />
                    </div>
                    <div class="tile-text">
                        Mary Peterson
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar3666b.jpg?1422538624" alt="" />
                    </div>
                    <div class="tile-text">
                        Mike Alba
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile divider-full-bleed">
                <div class="tile-content">
                    <div class="tile-text"><strong>N</strong></div>
                </div>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar6463a.jpg?1422538626" alt="" />
                    </div>
                    <div class="tile-text">
                        Nathan Peterson
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile divider-full-bleed">
                <div class="tile-content">
                    <div class="tile-text"><strong>P</strong></div>
                </div>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar7463a.jpg?1422538626" alt="" />
                    </div>
                    <div class="tile-text">
                        Philip Ericsson
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile divider-full-bleed">
                <div class="tile-content">
                    <div class="tile-text"><strong>S</strong></div>
                </div>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar104335.jpg?1422538623" alt="" />
                    </div>
                    <div class="tile-text">
                        Samuel Parsons
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
        </ul>
    </div><!--end .offcanvas-body -->
</div><!--end .offcanvas-pane -->
<!-- END OFFCANVAS SEARCH -->

            


<!-- BEGIN OFFCANVAS CHAT -->
<div id="offcanvas-chat" class="offcanvas-pane style-default-light width-12">
    <div class="offcanvas-head style-default-bright">
        <header class="text-primary">Chat with Ann Laurens</header>
        <div class="offcanvas-tools">
            <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                <i class="md md-close"></i>
            </a>
            <a class="btn btn-icon-toggle btn-default-light pull-right" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                <i class="md md-arrow-back"></i>
            </a>
        </div>
        <form class="form">
            <div class="form-group floating-label">
                <textarea name="sidebarChatMessage" id="sidebarChatMessage" class="form-control autosize" rows="1"></textarea>
                <label for="sidebarChatMessage">Leave a message</label>
            </div>
        </form>
    </div>

    <div class="offcanvas-body">
        <ul class="list-chats">
            <li>
                <div class="chat">
                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar14335.jpg?1422538623" alt="" /></div>
                    <div class="chat-body">
                        Yes, it is indeed very beautiful.
                        <small>10:03 pm</small>
                    </div>
                </div><!--end .chat -->
            </li>
            <li class="chat-left">
                <div class="chat">
                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar9463a.jpg?1422538626" alt="" /></div>
                    <div class="chat-body">
                        Did you see the changes?
                        <small>10:02 pm</small>
                    </div>
                </div><!--end .chat -->
            </li>
            <li>
                <div class="chat">
                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar14335.jpg?1422538623" alt="" /></div>
                    <div class="chat-body">
                        I just arrived at work, it was quite busy.
                        <small>06:44pm</small>
                    </div>
                    <div class="chat-body">
                        I will take look in a minute.
                        <small>06:45pm</small>
                    </div>
                </div><!--end .chat -->
            </li>
            <li class="chat-left">
                <div class="chat">
                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar9463a.jpg?1422538626" alt="" /></div>
                    <div class="chat-body">
                        The colors are much better now.
                    </div>
                    <div class="chat-body">
                        The colors are brighter than before.
                        I have already sent an example.
                        This will make it look sharper.
                        <small>Mon</small>
                    </div>
                </div><!--end .chat -->
            </li>
            <li>
                <div class="chat">
                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar14335.jpg?1422538623" alt="" /></div>
                    <div class="chat-body">
                        Are the colors of the logo already adapted?
                        <small>Last week</small>
                    </div>
                </div><!--end .chat -->
            </li>
        </ul>
    </div><!--end .offcanvas-body -->
</div><!--end .offcanvas-pane -->


                    </div><!--end .offcanvas-->
      
    </div><!--end #base-->
<!-- BEGIN FORM MODAL MARKUP -->
            <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="formModalLabel">Error</h4>
                        </div>
                        <form class="form-horizontal" role="form">
                            <div class="modal-body">
                                    
                                <div class="alert alert-callout alert-danger" role="alert">
                                                            <strong>Error!</strong>
                                                        Invalide verification code. please enter correct verification that you recieve on entered email address or you can click on resend email button to recieve new verification code.
                                                        </div> 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                               
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- END FORM MODAL MARKUP -->


    <script type="text/javascript">
    $(document).on('click','.emailbtn',function(){
        $.ajax({
            url:'/verifyEmailCode',
            type:'post',
            dataType:'json',
            data:{_token:'<?php echo csrf_token() ?>',emailcode:$("#emailcode").val()},
            success:function(data){
                if(data.vstatus=="1"){
                $(".verficationpanel").hide("slow");
                $('.savepanel').show("slow");                   
                }else{
                $("#formModal").modal('show');        
                }
            }
        });
    });
    function emailCode(){
        $('.savepanel').hide("slow");
        if($("[name='email']").val()!=""){
                $(".emailPanel").show('slow');
                $('.message').text('Please waite...');
                $.ajax({
                    url:'/emailcode',
                    type:'post',
                    dataType:'json',
                    data:{_token:'<?php echo csrf_token() ?>',email:$("[name='email']").val()},
                    success:function(data){
                         $(".emailPanel").show('slow');
                         $(".emailPanel").removeClass('alert-danger');
                         $('.message').text(data.message);
                    },
                    error:function(jqXHR, exception){
                        var response= jqXHR.responseJSON;
                        $(".emailPanel").show('slow');
                        $(".emailPanel").addClass('alert-danger');
                        $('.message').text(response.email);
                        //console.log(jqXHR.responseJSON.email);
                    }   
                });
        }else{
                        $(".emailPanel").hide('slow');
        }
    }
    $("#email").blur(function() {
      emailCode();
    });
    $(document).on('click','.resendemail',function(){
      
      emailCode();
    });
    $("#mobile").blur(function() {
        $.ajax({
                    url:'/sendMobileCode',
                    type:'post',
                    dataType:'json',
                    data:{_token:'<?php echo csrf_token() ?>',mobile:$("[name='mobile']").val()},
                    success:function(data){
                         /*$(".alert-info").show('slow');
                         $(".alert-info").removeClass('alert-danger');
                         $('.message').text(data.message);*/
                         $(".mobile").hide('slow');
                    },
                    error:function(jqXHR, exception){
                        var response= jqXHR.responseJSON;
                        $(".mobile").show('slow');
                        $(".mobile").addClass('alert-danger');
                        $('.mobilemessage').text(response.mobile);
                        //console.log(jqXHR.responseJSON.email);
                    }   
                });
    });
</script> 
@stop
