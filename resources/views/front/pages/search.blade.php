 @extends('front.frontlayouts.default')
 
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


@stop