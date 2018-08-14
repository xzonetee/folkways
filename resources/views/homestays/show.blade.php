@extends('layouts.app')
@section('content')

<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="single-product">

                <div class="product">
                    <h1>{{ $homestay->name }}</h1>
                    <div class="col_two_fifth">
                        <img src="/images/folkend/{{ $homestay->image1 }} "/>
                        <img src="/images/folkend/{{ $homestay->image2 }} "/>
                        {{-- <img src="/images/folkend/{{ $homestay->image3 }} "/>
                        <img src="/images/folkend/{{ $homestay->image4 }} "/> --}}
                        <!-- Product Single - Gallery
                        ============================================= -->
                        {{-- <div class="product-image">
                            <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                <div class="flexslider">
                                    <div class="slider-wrap" data-lightbox="gallery">
                                        <div class="slide" data-thumb="images/folkend/{{ $homestay->image1 }}"><a href="images/shop/dress/3.jpg" title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img src="/images/folkend/{{ $homestay->image1 }}" alt="Pink Printed Dress"></a></div>
                                        <div class="slide" data-thumb="images/shop/thumbs/dress/3-1.jpg"><a href="images/shop/dress/3-1.jpg" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="images/shop/dress/3-1.jpg" alt="Pink Printed Dress"></a></div>
                                        <div class="slide" data-thumb="images/shop/thumbs/dress/3-2.jpg"><a href="images/shop/dress/3-2.jpg" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="images/shop/dress/3-2.jpg" alt="Pink Printed Dress"></a></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> --}}

                    </div>

                    <div class="col_two_fifth product-desc">

                        <!-- Product Single - Price
                        ============================================= -->
                        {{-- <div class="product-price"><ins>$24.99</ins></div><!-- Product Single - Price End --> --}}
                        
                        <!-- Product Single - Rating
                        ============================================= -->
                        {{-- <h3>Rating</h3> --}}
                        <div class="product-rating">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star-half-full"></i>
                            <i class="icon-star-empty"></i>
                        </div><!-- Product Single - Rating End -->

                        <div class="clear"></div>
                        <div class="line"></div>

                        <!-- Product Single - Quantity & Cart Button
                        ============================================= -->
                        {{-- <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
                            <div class="quantity clearfix">
                                <input type="button" value="-" class="minus">
                                <input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                                <input type="button" value="+" class="plus">
                            </div>
                            <button type="submit" class="add-to-cart button nomargin">Add to cart</button>
                        </form> --}}
                        
                        <a href="{{ route('bookings.create') }}" class="button nomargin">Booking ?</a>
                        <div class="clear"></div>
                        <div class="line"></div>

                        <!-- Product Single - Short Description
                        ============================================= -->
                        <h3>Activity</h3>
                        <p>{{ $homestay->activity }}</p>
                        <h3>Price</h3>
                        <p>{{ $homestay->price }} บาท/คน</p>
                        <h3>Nearby</h3>
                        <p>{{ $homestay->nearby }}</p>


                    </div>
                    
                    <div class="col_full nobottommargin col-lg-12 col-md-3">

                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>ชื่อผู้ติดต่อ</td>
                                                <td>{{ $homestay->nametel }}</td>
                                            </tr>
                                            <tr>
                                                <td>เบอร์โทรศัพท์</td>
                                                <td>{{ $homestay->tel }}</td>
                                            </tr>
                                            <tr>
                                                <td>E-mail</td>
                                                <td>{{ $homestay->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Website</td>
                                                <td>{{ $homestay->website }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="clearfix"><div class="line"></div>
                                    <h3>Review</h3>
                                    <div id="reviews" class="clearfix">

                                        <ol class="commentlist clearfix">

                                            <li class="comment even thread-even depth-1" id="li-comment-1">
                                                <div id="comment-1" class="comment-wrap clearfix">

                                                    <div class="comment-meta">
                                                        <div class="comment-author vcard">
                                                            <span class="comment-avatar clearfix">
                                                            <img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
                                                        </div>
                                                    </div>

                                                    <div class="comment-content clearfix">
                                                        <div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2014 at 10:46AM</a></span></div>
                                                        <p>Exemple</p>
                                                        <div class="review-comment-ratings">
                                                            <i class="icon-star3"></i>
                                                            <i class="icon-star3"></i>
                                                            <i class="icon-star3"></i>
                                                            <i class="icon-star3"></i>
                                                            <i class="icon-star-half-full"></i>
                                                        </div>
                                                    </div>

                                                    <div class="clear"></div>

                                                </div>
                                            </li>

                                            <li class="comment even thread-even depth-1" id="li-comment-1">
                                                <div id="comment-1" class="comment-wrap clearfix">

                                                    <div class="comment-meta">
                                                        <div class="comment-author vcard">
                                                            <span class="comment-avatar clearfix">
                                                            <img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
                                                        </div>
                                                    </div>

                                                    <div class="comment-content clearfix">
                                                        <div class="comment-author">Mary Jane<span><a href="#" title="Permalink to this comment">June 16, 2014 at 6:00PM</a></span></div>
                                                        <p>Exemple</p>
                                                        <div class="review-comment-ratings">
                                                            <i class="icon-star3"></i>
                                                            <i class="icon-star3"></i>
                                                            <i class="icon-star3"></i>
                                                            <i class="icon-star-empty"></i>
                                                            <i class="icon-star-empty"></i>
                                                        </div>
                                                    </div>

                                                    <div class="clear"></div>

                                                </div>
                                            </li>

                                        </ol>

                                        <!-- Modal Reviews
                                        ============================================= -->
                                        <a href="#" data-toggle="modal" data-target="#reviewFormModal" class="button button-3d nomargin fright">Add a Review</a>

                                        <div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="reviewFormModalLabel">Submit a Review</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="nobottommargin" id="template-reviewform" name="template-reviewform" action="#" method="post">

                                                            <div class="col_half">
                                                                <label for="template-reviewform-name">Name <small>*</small></label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="icon-user"></i></div>
                                                                    </div>
                                                                    <input type="text" id="template-reviewform-name" name="template-reviewform-name" value="" class="form-control required" />
                                                                </div>
                                                            </div>

                                                            <div class="col_half col_last">
                                                                <label for="template-reviewform-email">Email <small>*</small></label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><div class="input-group-text">@</div></div>
                                                                    <input type="email" id="template-reviewform-email" name="template-reviewform-email" value="" class="required email form-control" />
                                                                </div>
                                                            </div>

                                                            <div class="clear"></div>

                                                            <div class="col_full col_last">
                                                                <label for="template-reviewform-rating">Rating</label>
                                                                <select id="template-reviewform-rating" name="template-reviewform-rating" class="form-control">
                                                                    <option value="">-- Select One --</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>

                                                            <div class="clear"></div>

                                                            <div class="col_full">
                                                                <label for="template-reviewform-comment">Comment <small>*</small></label>
                                                                <textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>
                                                            </div>

                                                            <div class="col_full nobottommargin">
                                                                <button class="button button-3d nomargin" type="submit" id="template-reviewform-submit" name="template-reviewform-submit" value="submit">Submit Review</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        <!-- Modal Reviews End -->

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="clear"></div><div class="line"></div>

            <div class="col_full nobottommargin">

                

                <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">

                    <div class="oc-item">
                        <div class="product iproduct clearfix">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                                <div class="sale-flash">50% Off*</div>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                                <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="product iproduct clearfix">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
                                <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                <div class="product-price">$39.99</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="product iproduct clearfix">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/shoes/1-1.jpg" alt="Dark Brown Boots"></a>
                                <a href="#"><img src="images/shop/shoes/1.jpg" alt="Dark Brown Boots"></a>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                <div class="product-price">$49</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="product iproduct clearfix">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
                                <a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                                <div class="product-price">$19.95</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="product iproduct clearfix">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
                                <a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
                                <div class="sale-flash">Sale!</div>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection