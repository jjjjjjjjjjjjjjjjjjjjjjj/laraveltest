
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

                        <li class="active navigation__dropdown">
                            <a href="index.html">Home</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="after-login.html">After Login</a></li>
                                <li><a href="home-alternative.html">Home Alternative</a></li>
                                <li><a href="dashboard/index.html">Dashboard</a></li>
                            </ul>
                        </li>

                        <li class="navigation__dropdown">
                            <a href="#" class="prevent-default">Listings</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="listings-grid.html">Grid view</a></li>
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