<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Roost - Material Design Real Estate</title>

        <!-- Vendors -->

        <!-- Material design colors -->
        
		<link rel="stylesheet" href="{{ URL::asset('asset//css/material-design-iconic-font.min.css') }}">
        <!-- CSS animations -->
       	<link rel="stylesheet" href="{{ URL::asset('asset//css/animate.min.css') }}">
        <!-- Select2 - Custom Selects -->
        
		<link rel="stylesheet" href="{{ URL::asset('asset/css/select2.min.css') }}">
        <!-- NoUiSlider - Input Slider -->
        
		<link rel="stylesheet" href="{{ URL::asset('asset/css/nouislider.min.css') }}">
        
        <!-- Site -->
        
		<link rel="stylesheet" href="{{ URL::asset('asset/css/app_1.min.css') }}">
        
		<link rel="stylesheet" href="{{ URL::asset('asset/css/app_2.min.css') }}">
       
        <!-- Page Loader JS -->
        <script src="{{ URL::asset('asset/js/page-loader.min.js') }}" async></script>
    </head>

    <body>
        <!-- Start page loader -->
        <div id="page-loader">
            <div class="page-loader__spinner"></div>
        </div>
        <!-- End page loader -->

        <header id="header">
            <div class="header__top">
                <div class="container">
                    <ul class="top-nav">
                        <li class="dropdown top-nav__guest">
                            <a data-toggle="dropdown" href="#">Register</a>

                            <form class="dropdown-menu stop-propagate">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <i class="form-group__bar"></i>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <i class="form-group__bar"></i>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                    <i class="form-group__bar"></i>
                                </div>

                                <p><small>By Signing up with Roost, you're agreeing to our <a href="#">terms and conditions</a>.</small></p>

                                <button class="btn btn-primary btn-block m-t-10 m-b-10">Register</button>

                                <div class="text-center"><small><a href="#">Are you an Agent?</a></small></div>

                                <div class="top-nav__auth">
                                    <span>or</span>

                                    <div>Sign in using</div>

                                    <a href="#" class="mdc-bg-blue-500">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </a>

                                    <a href="#" class="mdc-bg-cyan-500">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </a>

                                    <a href="#" class="mdc-bg-red-400">
                                        <i class="zmdi zmdi-google"></i>
                                    </a>
                                </div>

                            </form>
                        </li>

                        <li class="dropdown top-nav__guest">
                            <a data-toggle="dropdown" href="#" data-rmd-action="switch-login">Login</a>

                            <div class="dropdown-menu">
                                <div class="tab-content">
                                    <form class="tab-pane active in fade" id="top-nav-login">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email Address">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <button class="btn btn-primary btn-block m-t-10 m-b-10">Login</button>

                                        <div class="text-center">
                                            <a href="#top-nav-forgot-password" data-toggle="tab"><small>Forgot email/password?</small></a>
                                        </div>

                                        <div class="top-nav__auth">
                                            <span>or</span>

                                            <div>Sign in using</div>

                                            <a href="#" class="mdc-bg-blue-500">
                                                <i class="zmdi zmdi-facebook"></i>
                                            </a>

                                            <a href="#" class="mdc-bg-cyan-500">
                                                <i class="zmdi zmdi-twitter"></i>
                                            </a>

                                            <a href="#" class="mdc-bg-red-400">
                                                <i class="zmdi zmdi-google"></i>
                                            </a>
                                        </div>
                                    </form>

                                    <form class="tab-pane fade forgot-password" id="top-nav-forgot-password">
                                        <a href="#top-nav-login" class="top-nav__back" data-toggle="tab"></a>

                                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Emaill Address">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <button class="btn btn-warning btn-block">Reset Password</button>
                                    </form>
                                </div>
                            </div>
                        </li>

                        <li class="pull-right top-nav__icon">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="pull-right top-nav__icon">
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                        </li>
                        <li class="pull-right top-nav__icon">
                            <a href="#"><i class="zmdi zmdi-google"></i></a>
                        </li>

                        <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-email"></i>hello@Roost.com</span></li>
                        <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-phone"></i>001-541-754-3010</span></li>
                    </ul>
                </div>
            </div>

            <div class="header__main">
                <div class="container">
                    <a class="logo" href="index.html">
                        <img src="img/logo.png" alt="">
                        <div class="logo__text">
                            <span>Roost</span>
                            <span>Material Design Real Estate</span>
                        </div>
                    </a>

                    <div class="navigation-trigger visible-xs visible-sm" data-rmd-action="block-open" data-rmd-target=".navigation">
                        <i class="zmdi zmdi-menu"></i>
                    </div>

                    <ul class="navigation">
                        <li class="visible-xs visible-sm"><a class="navigation__close" data-rmd-action="navigation-close" href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>

                        <li class="navigation__dropdown">
                            <a href="index.html">Home</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="after-login.html">After Login</a></li>
                                <li><a href="home-alternative.html">Home Alternative</a></li>
                                <li><a href="dashboard/index.html">Dashboard</a></li>
                            </ul>
                        </li>

                        <li class="active navigation__dropdown">
                            <a href="#" class="prevent-default">Listings</a>

                            <ul class="active navigation__drop-menu">
                                <li class="active"><a href="listings-grid.html">Grid view</a></li>
                                <li><a href="listings-list.html">List view</a></li>
                                <li><a href="listings-map.html">Map view</a></li>
                                <li><a href="listing-detail.html">Listing Detail</a></li>
                            </ul>
                        </li>


                        <li><a href="submit-property.html">Submit</a></li>

                        <li class="navigation__dropdown">
                            <a href="mortgage.html">Mortgages</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="mortgage-detail.html">Mortgage Detail</a></li>
                                <li><a href="mortgage-detail-reviews.html">Mortgage Reviews</a></li>
                                <li><a href="mortgage-detail-disclaimer.html">Mortgage Disclaimer</a></li>
                            </ul>
                        </li>

                        <li class="navigation__dropdown">
                            <a href="agents.html">Agents</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="agent-detail.html">Agent Detail</a></li>
                                <li><a href="agent-detail-properties.html">Agent Properties</a></li>
                                <li><a href="agent-detail-reviews.html">Agent Reviews</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.html">Contact</a></li>

                        <li class="navigation__dropdown">
                            <a href="#" class="prevent-default">More</a>

                            <ul class="navigation__drop-menu navigation__drop-menu--right">
                                <li><a href="profile.html">Profile Private</a></li>
                                <li><a href="profile-public.html">Profile Public</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Detail</a></li>
                                <li><a href="neighborhood-guide.html">Neighborhood Guide</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="email/listing-mail.html">Email Template</a></li>
                                <li><a href="404.html">Error - 404</a></li>
                                <li><a href="empty-page.html">Empty Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="action-header">
            <div class="container">
                <div class="action-header__item action-header__item--search">
                    <form>
                        <input class="hidden-xs" type="text" placeholder="Search by neighborhood, city, zip or address..."><!-- For desktop -->
                        <input class="visible-xs" type="text" placeholder="Search..."><!-- For mobile -->
                    </form>
                </div>

                <div class="action-header__item action-header__views hidden-xs">
                    <a href="listings-grid.html" class="zmdi zmdi-apps active"></a>
                    <a href="listings-list.html" class="zmdi zmdi-view-list"></a>
                    <a href="listings-map.html" class="zmdi zmdi-map"></a>
                </div>

                <div class="action-header__item action-header__item--sort hidden-xs">
                    <span class="action-header__small">Sort by :</span>

                    <select class="select2">
                        <option>Featured listings</option>
                        <option>Newest to oldest</option>
                        <option>Oldest to Newest</option>
                        <option>Price hight to low</option>
                        <option>Price low to high</option>
                        <option>Newest to Oldest</option>
                        <option>No. of photos</option>
                    </select>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="container">
                <header class="section__title">
                    <h2>Duis mollisest non commodo luctus nisierat porttito</h2>
                    <small>Vestibulum id ligula porta felis euismod semper</small>
                </header>

                <div class="row listings-grid">
                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="{{ URL::asset('asset/img/1.jpg') }}" alt="">
                                    <div class="listings-grid__price">$1,175,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>21 Shop St, San Francisco</small>
                                    <h5>Integer tempor luctus maximus</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/2.jpg" alt="">
                                    <div class="listings-grid__price">$1,200,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>Beverly Hills, CA 90210</small>
                                    <h5>Duis sollicitudin ante bibendum</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/3.jpg" alt="">
                                    <div class="listings-grid__price">$910,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>132 04th St, San Francisco</small>
                                    <h5>Fusce quis libero nonorcious</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/4.jpg" alt="">
                                    <div class="listings-grid__price">$2,542,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>132 Lockslee, San Francisco</small>
                                    <h5>Pellentesque habitant</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 03</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/5.jpg" alt="">
                                    <div class="listings-grid__price">$823,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>San Francisco, CA 900212 </small>
                                    <h5>Maecenas sed purus lorem aliquet cursus</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 0</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/6.jpg" alt="">
                                    <div class="listings-grid__price">$1,120,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>21120 Broadway St, San Fransisco</small>
                                    <h5>Maecenas sed purus at lorem</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/7.jpg" alt="">
                                    <div class="listings-grid__price">$3,000,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>San Francisco, CA 937202</small>
                                    <h5>Nullam finibus libero at hendrerit</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 06</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 05</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/8.jpg" alt="">
                                    <div class="listings-grid__price">$1,175,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>4313 Beverly Hills, CA 90210</small>
                                    <h5>Donec ullamcorper nulla non metus auctor fringilla</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/9.jpg" alt="">
                                    <div class="listings-grid__price">$2,675,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>121 Hickory Mount, MD 21771</small>
                                    <h5>Integer posuere eratante venenatis</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/10.jpg" alt="">
                                    <div class="listings-grid__price">$575,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>677 Morris Lemont, IL 60439</small>
                                    <h5>Praesent commodo cursus scelerisque consectetur</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/11.jpg" alt="">
                                    <div class="listings-grid__price">$4299,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>451 Henry Livingston, NJ 07039</small>
                                    <h5>Morbi leorisus consectetur vestibulum</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 06</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 06</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 03</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/12.jpg" alt="">
                                    <div class="listings-grid__price">$2,329,980</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>722 Chestnut Dublin, GA 31021</small>
                                    <h5>Curabitur blandit tempus porttitor</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 04</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 04</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 04</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/13.jpg" alt="">
                                    <div class="listings-grid__price">$1,100,900</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>409 Magnolia Mansfield, MA 02048</small>
                                    <h5>Aenean Pellentesque lacinia quam venenatis vestibulum</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/14.jpg" alt="">
                                    <div class="listings-grid__price">$3,400,110</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>277 Elm Avenue, TN 37128</small>
                                    <h5>Cras mattis consectetur purus sit amet fermentum</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/15.jpg" alt="">
                                    <div class="listings-grid__price">$1,200,000</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>304 East Wenatchee, WA 98801</small>
                                    <h5>Nullam iddolor idnibh ultricies vehicula</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 00</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="listing-detail.html">
                                <div class="listings-grid__main">
                                    <img src="img/demo/listing/thumbs/16.jpg" alt="">
                                    <div class="listings-grid__price">900,900</div>
                                </div>

                                <div class="listings-grid__body">
                                    <small>735 San Angelo, TX 76901</small>
                                    <h5>Cras justo odio dapibus facilisis egestas</h5>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                    <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="load-more">
                    <a href="#"><i class="zmdi zmdi-refresh-alt"></i> Load more listings</a>
                </div>
            </div>
        </section>

        <!-- Advanced Listing Search -->
        <button class="btn btn--action btn--circle" data-rmd-action="block-open" data-rmd-target="#advanced-search">
            <i class="zmdi zmdi-search-for"></i>
        </button>

        <aside id="advanced-search" class="rmd-sidebar">
            <form class="card">
                <div class="card__header">
                    <h2>Advanced Property Search</h2>

                    <div class="dropdown m-t-5">
                        <a data-toggle="dropdown" href="#" class="text-muted">05 Saved Searches <i class="caret"></i></a>

                        <ul class="dropdown-menu">
                            <li><a href="#">2012/05/01 - 1</a></li>
                            <li><a href="#">2012/05/01 - 2</a></li>
                            <li><a href="#">2012/06/12</a></li>
                            <li><a href="#">2012/08/19</a></li>
                            <li><a href="#">2012/08/20</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card__body m-t-20">
                    <div class="form-group form-group--float">
                        <input type="text" class="form-control" value="New York, NY">
                        <label class="fg-float">Location</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <label>Listing Type</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn active">
                                <input type="radio" name="advanced-search-beds" id="rent" checked>Rent
                            </label>
                            <label class="btn">
                                <input type="radio" name="advanced-search-beds" id="buy">Buy
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Ownership Type</label>

                        <select class="select2">
                            <option value="">Single Family Home</option>
                            <option value="">Condo</option>
                            <option value="">Townhome</option>
                            <option value="">Apartment Community</option>
                            <option value="">Room</option>
                            <option value="">Single Family Home</option>
                            <option value="">Condo</option>
                            <option value="">Townhome</option>
                            <option value="">Apartment Community</option>
                            <option value="">Room</option>
                            <option value="">Single Family Home</option>
                            <option value="">Condo</option>
                            <option value="">Townhome</option>
                            <option value="">Apartment Community</option>
                            <option value="">Room</option>
                            <option value="">Single Family Home</option>
                            <option value="">Condo</option>
                            <option value="">Townhome</option>
                            <option value="">Apartment Community</option>
                            <option value="">Room</option>
                            <option value="">Single Family Home</option>
                            <option value="">Condo</option>
                            <option value="">Townhome</option>
                            <option value="">Apartment Community</option>
                            <option value="">Room</option>
                            <option value="">Single Family Home</option>
                            <option value="">Condo</option>
                            <option value="">Townhome</option>
                            <option value="">Apartment Community</option>
                            <option value="">Room</option>
                            <option value="">Single Family Home</option>
                            <option value="">Condo</option>
                            <option value="">Townhome</option>
                            <option value="">Apartment Community</option>
                            <option value="">Room</option>
                            <option value="">Single Family Home</option>
                            <option value="">Condo</option>
                            <option value="">Townhome</option>
                            <option value="">Apartment Community</option>
                            <option value="">Room</option>
                            <option value="">Single Family Home</option>
                            <option value="">Condo</option>
                            <option value="">Townhome</option>
                            <option value="">Apartment Community</option>
                            <option value="">Room</option>
                            <option value="">Single Family Home</option>
                            <option value="">Condo</option>
                            <option value="">Townhome</option>
                            <option value="">Apartment Community</option>
                            <option value="">Room</option>
                            <option value="">Single Family Home</option>
                            <option value="">Condo</option>
                            <option value="">Townhome</option>
                            <option value="">Apartment Community</option>
                            <option value="">Room</option>
                        </select>
                    </div>

                    <div class="form-group form-group--range">
                        <label>Price Range</label>
                        <div class="input-slider-values clearfix">
                            <div class="pull-left"><span>$</span><span id="property-price-upper"></span></div>
                            <div class="pull-right"><span>$</span><span id="property-price-lower"></span></div>
                        </div>
                        <div id="property-price-range"></div>
                    </div>

                    <div class="form-group form-group--range">
                        <label>Area Size (sqft)</label>
                        <div class="input-slider-values clearfix">
                            <div class="pull-left" id="property-area-upper"></div>
                            <div class="pull-right" id="property-area-lower"></div>
                        </div>
                        <div id="property-area-range"></div>
                    </div>

                    <div class="form-group">
                        <label>Bedrooms</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn">
                                <input type="checkbox" name="inner-search-beds" id="bed1">1
                            </label>
                            <label class="btn active">
                                <input type="checkbox" name="inner-search-beds" id="bed2" checked>2
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-beds" id="bed3">3
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-beds" id="bed4">4
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-beds" id="bed5">4+
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Bathrooms</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn">
                                <input type="checkbox" name="inner-search-baths" id="bath1">1
                            </label>
                            <label class="btn active">
                                <input type="checkbox" name="inner-search-baths" id="bath2" checked>2
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-baths" id="bath3">3
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-baths" id="bath4">4
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-baths" id="bath5">4+
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Garages</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn">
                                <input type="checkbox" name="inner-search-garage" id="garage1">1
                            </label>
                            <label class="btn active">
                                <input type="checkbox" name="inner-search-garage" id="garage2" checked>2
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-garage" id="garage3">3
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-garage" id="garage4">4
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-garage" id="garage5">4+
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-group--range">
                        <label>Lot Size (sqft)</label>
                        <div class="input-slider-values clearfix">
                            <div class="pull-left" id="property-lot-upper"></div>
                            <div class="pull-right" id="property-lot-lower"></div>
                        </div>
                        <div id="property-lot-range"></div>
                    </div>

                    <div class="form-group form-group--range">
                        <label>Year Built</label>
                        <div class="input-slider-values clearfix">
                            <div class="pull-left" id="property-yb-upper"></div>
                            <div class="pull-right" id="property-yb-lower"></div>
                        </div>
                        <div id="property-year-built"></div>
                    </div>
                </div>

                <div class="card__footer">
                    <button class="btn btn-sm btn-primary">Search</button>
                    <a href="#" class="btn btn-sm btn-link" data-rmd-action="block-close" data-rmd-target="#advanced-search">Save</a>
                    <a href="#" class="btn btn-sm btn-link" data-rmd-action="block-close" data-rmd-target="#advanced-search">Cancel</a>
                </div>
            </form>
        </aside>

        <footer id="footer">
            <div class="container hidden-xs">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="footer__block">
                            <a class="logo clearfix" href="#">
                                <div class="logo__text">
                                    <span>Roost</span>
                                    <span>Material Design Real Estate</span>
                                </div>
                            </a>

                            <address class="m-t-20 m-b-20 f-14">
                                44-46 Morningside Road,
                                Edinburgh, Scotland
                            </address>

                            <div class="f-20">0062-345678910</div>
                            <div class="f-14 m-t-5">hello@Roost.com / info@Roost.com</div>

                            <div class="f-20 m-t-20">
                                <a href="#" class="m-r-10"><i class="zmdi zmdi-google"></i></a>
                                <a href="#" class="m-r-10"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer__block footer__block--blog">
                            <div class="footer__title">Latest from our blog</div>

                            <a href="#">
                                Aenean lacinia bibendum nulla sed
                                <small>On 2016/06/20 at 6:00 PM</small>
                            </a>
                            <a href="#">
                                Vestibulum id ligula porta felis euismod semper
                                <small>On 2016/06/18 at 7:12 PM</small>
                            </a>
                            <a href="#">
                                Etiam porta sem malesuada magna mollis euismod
                                <small>On 2016/06/10 at 12:59 PM</small>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer__block">
                            <div class="footer__title">Disclaimer</div>

                            <div>Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <div class="container">
                    <span class="footer__copyright">© Roost Real Estates</span>

                    <a href="#">About Us</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Careers</a>
                    <a href="#">Agent Login</a>
                </div>

                <div class="footer__to-top" data-rmd-action="scroll-to" data-rmd-target="html">
                    <i class="zmdi zmdi-chevron-up"></i>
                </div>
            </div>
        </footer>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
            <div class="ie-warning__inner">
                <ul class="ie-warning__download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="img/browsers/chrome.png" alt="">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="img/browsers/firefox.png" alt="">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="img/browsers/safari.png" alt="">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                            <div>IE (New)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
        <![endif]-->


        <!-- Javascript -->

        <!-- jQuery -->
        <script src="{{ URL::asset('asset/js/jquery.min.js') }}" async></script>
        

        <!-- Bootstrap -->
        <script src="{{ URL::asset('asset/js/bootstrap.min.js') }}" async></script>


        <!-- Waves button ripple effects -->
        <script src="{{ URL::asset('asset/js/waves.min.js') }}" async></script>
        


        <!-- Select 2 - Custom Selects -->
        <script src="{{ URL::asset('asset/js/select2.full.min.js') }}" async></script>
        


        <!-- NoUiSlider -->
        <script src="{{ URL::asset('asset/js/nouislider.min.js') }}" async></script>


        <!-- IE9 Placeholder -->
        <!--[if IE 9 ]>
        <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Site functions and actions -->
        <script src="{{ URL::asset('asset/js/app.min.js') }}" async></script>
        


        <!-- Demo only -->
        <script src="{{ URL::asset('asset/js/demo.js') }}" async></script>
        

    </body>

</html>