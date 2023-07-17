
@extends('layouts.site')
@section('stylesheet')

@endsection

@section('content')


<!-- Breadcrumb Area Start -->
<div class="section breadcrumb-area bg-bright">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-wrapper">
                    <h2 class="breadcrumb-title">Variable Product</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Variable Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Single Product Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2">

                <!-- Product Details Image Start -->
                <div class="product-details-img">

                    <!-- Single Product Image Start -->
                    <div class="single-product-img swiper-container product-gallery-top">
                        <div class="swiper-wrapper popup-gallery">
                            <a class="swiper-slide w-100" href="{{asset($animal->image)}}">
                                <img class="w-100" src="{{asset($animal->image)}}" alt="Product">
                            </a>
                            <a class="swiper-slide w-100" href="{{asset('assets/site/images/products/large-product/2.png')}}">
                                <img class="w-100" src="{{asset('assets/site/images/products/large-product/2.png')}}" alt="Product">
                            </a>
                            <a class="swiper-slide w-100" href="{{asset('assets/site/images/products/large-product/3.png')}}">
                                <img class="w-100" src="{{asset('assets/site/images/products/large-product/3.png')}}" alt="Product">
                            </a>
                            <a class="swiper-slide w-100" href="{{asset('assets/site/images/products/large-product/4.png')}}">
                                <img class="w-100" src="{{asset('assets/site/images/products/large-product/4.png')}}" alt="Product">
                            </a>
                            <a class="swiper-slide w-100" href="{{asset('assets/site/images/products/large-product/5.png')}}">
                                <img class="w-100" src="{{asset('assets/site/images/products/large-product/5.png')}}" alt="Product">
                            </a>
                            <a class="swiper-slide w-100" href="{{asset('assets/site/images/products/large-product/6.png')}}">
                                <img class="w-100" src="{{asset('assets/site/images/products/large-product/6.png')}}" alt="Product">
                            </a>
                            <a class="swiper-slide w-100" href="{{asset('assets/site/images/products/large-product/7.png')}}">
                                <img class="w-100" src="{{asset('assets/site/images/products/large-product/7.png')}}" alt="Product">
                            </a>
                            <a class="swiper-slide w-100" href="{{asset('assets/site/images/products/large-product/8.png')}}">
                                <img class="w-100" src="{{asset('assets/site/images/products/large-product/8.png')}}" alt="Product">
                            </a>
                        </div>
                    </div>
                    <!-- Single Product Image End -->

                    <!-- Single Product Thumb Start -->
                    <div class="single-product-thumb swiper-container product-gallery-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('assets/site/images/products/medium-plus-product/1.png')}}" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/site/images/products/medium-plus-product/2.png')}}" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/site/images/products/medium-plus-product/3.png')}}" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/site/images/products/medium-plus-product/4.png')}}" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/site/images/products/medium-plus-product/5.png')}}" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/site/images/products/medium-plus-product/6.png')}}" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/site/images/products/medium-plus-product/7.png')}}" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/site/images/products/medium-plus-product/8.png')}}" alt="Product">
                            </div>
                        </div>

                        <!-- Next Previous Button Start -->
                        <div class="swiper-button-next swiper-nav-button"><i class="ti-arrow-right"></i></div>
                        <div class="swiper-button-prev swiper-nav-button"><i class="ti-arrow-left"></i></div>
                        <!-- Next Previous Button End -->

                    </div>
                    <!-- Single Product Thumb End -->

                </div>
                <!-- Product Details Image End -->

            </div>

            <div class="col-lg-7">

                <!-- Product Summery Start -->
                <div class="product-summery position-relative">

                    <!-- Product Head Start -->
                    <div class="product-head mb-3">
                        <h2 class="product-title">{{$animal->name}}</h2>
                    </div>
                    <!-- Product Head End -->

                    <!-- Price Box Start -->
                    <div class="price-box mb-2">
                        @if ($animal->discount_price == null)
                        <span class="regular-price">${{ $animal->selling_price }}</span>
                        @else
                        <span class="regular-price">${{ $animal->discount_price }}</span>
                        <span class="old-price"><del>${{ $animal->selling_price }}</del></span>
                        @endif
                    </div>
                    <!-- Price Box End -->

                    <!-- SKU Start -->
                    <div class="sku mb-3">
                        <span>SKU: 12345</span>
                    </div>
                    <!-- SKU End -->

                    <!-- Product Inventory Start -->
                    <div class="product-inventroy mb-3">
                        <span class="inventroy-title"> <strong>Availability:</strong></span>
                        <span class="inventory-varient">12 Left in Stock</span>
                    </div>
                    <!-- Product Inventory End -->

                    <!-- Description Start -->
                    <p class="desc-content mb-5">{{$animal->description}}</p>
                    <!-- Description End -->

                    {{--  <!-- Product Coler Variation Start -->
                    <div class="product-color-variation mb-5">
                        <span> <strong>Color: </strong></span>
                        <button type="button" class="btn bg-danger"></button>
                        <button type="button" class="btn bg-primary"></button>
                        <button type="button" class="btn bg-dark"></button>
                        <button type="button" class="btn bg-light"></button>
                    </div>
                    <!-- Product Coler Variation End -->

                    <!-- Product Size Start -->
                    <div class="product-size mb-4">
                        <span><strong>Size :</strong></span>
                        <a href="#" class="size-ratio active">s</a>
                        <a href="#" class="size-ratio">m</a>
                        <a href="#" class="size-ratio">l</a>
                        <a href="#" class="size-ratio">xl</a>
                    </div>
                    <!-- Product Size End -->

                    <!-- Product Material Start -->
                    <div class="product-material mb-5">
                        <span><strong>Material :</strong></span>
                        <a href="#" class="active">Metal</a>
                        <a href="#">Resin</a>
                        <a href="#">Fibre</a>
                        <a href="#">Iron</a>
                    </div>
                    <!-- Product Material End -->  --}}

                    <!-- Quantity Start -->
                    <div class="quantity d-flex align-items-center mb-5">
                        <span class="me-2"><strong>Qty: </strong></span>
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" value="1" type="text">
                            <div class="dec qtybutton"></div>
                            <div class="inc qtybutton"></div>
                        </div>
                    </div>
                    <!-- Quantity End -->

                    <!-- Cart Button Start -->
                    <div class="cart-btn action-btn mb-6">
                        <div class="action-cart-btn-wrapper d-flex">
                            <div class="add-to_cart">
                                <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                            </div>
                            <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                        </div>
                    </div>
                    <!-- Cart Button End -->

                    {{--  <!-- Single Product Buy Button Start -->
                    <div class="single-product-buy mb-6">
                        <a href="checkout.html" class="btn btn-primary btn-hover-dark rounded-0">Buy it Now</a>
                    </div>
                    <!-- Single Product Buy Button End -->  --}}

                    <!-- Social Shear Start -->
                    <div class="social-share mb-n7">
                        <div class="widget-social justify-content-start mb-6">
                            <a title="Twitter" href="#/"><i class="icon-social-twitter"></i></a>
                            <a title="Instagram" href="#/"><i class="icon-social-instagram"></i></a>
                            <a title="Linkedin" href="#/"><i class="icon-social-linkedin"></i></a>
                            <a title="Skype" href="#/"><i class="icon-social-skype"></i></a>
                            <a title="Dribble" href="#/"><i class="icon-social-dribbble"></i></a>
                        </div>
                    </div>
                    <!-- Social Shear End -->

                </div>
                <!-- Product Summery End -->

            </div>

        </div>
    </div>
</div>
<!-- Single Product Section End -->

<!-- Single Product Tab Start -->
<div class="section section-padding bg-bright">
    <div class="container">
        <div class="row">

            <!-- Single Product Tab Start -->
            <div class="col-lg-12 single-product-tab">
                <ul class="nav nav-tabs mb-n3" id="myTab" role="tablist">
                    <li class="nav-item mb-3">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Reviews</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#connect-3" role="tab" aria-selected="false">Shipping Policy</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" id="review-tab" data-bs-toggle="tab" href="#connect-4" role="tab" aria-selected="false">Size Chart</a>
                    </li>
                </ul>

                <div class="tab-content mb-text" id="myTabContent">
                    <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                        <div class="desc-content">
                            <p class="mb-3">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
                            <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Start Single Content -->
                        <div class="product_tab_content mt-8 p-3 border">

                            <!-- Start Single Review -->
                            <div class="single-review d-flex mb-4">

                                <!-- Review Thumb Start -->
                                <div class="review_thumb">
                                    <img alt="review images" src="{{asset('assets/site/images/review/1.jpg')}}">
                                </div>
                                <!-- Review Thumb End -->

                                <!-- Review Details Start -->
                                <div class="review_details">
                                    <div class="review_info mb-2">

                                        <!-- Rating Start -->
                                        <span class="rating justify-content-start mb-3">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        <!-- Rating End -->

                                        <!-- Review Title & Date Start -->
                                        <div class="review-title-date d-flex">
                                            <h5 class="title">Admin - </h5><span> January 19, 2021</span>
                                        </div>
                                        <!-- Review Title & Date End -->

                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in viverra ex, vitae vestibulum arcu. Duis sollicitudin metus sed lorem commodo, eu dapibus libero interdum. Morbi convallis viverra erat, et aliquet orci congue vel. Integer in odio enim. Pellentesque in dignissim leo. Vivamus varius ex sit amet quam tincidunt iaculis.</p>
                                </div>
                                <!-- Review Details End -->

                            </div>
                            <!-- End Single Review -->

                            <!-- Rating Wrap Start -->
                            <div class="rating_wrap">
                                <h5 class="rating-title mb-2">Add a review </h5>
                                <p class="mb-2">Your email address will not be published. Required fields are marked *</p>
                                <h6 class="rating-sub-title mb-2">Your Rating</h6>

                                <!-- Rating Start -->
                                <span class="rating justify-content-start mb-3">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                <!-- Rating End -->

                            </div>
                            <!-- Rating Wrap End -->

                            <!-- Comments ans Replay Start -->
                            <div class="comments-area comments-reply-area">
                                <div class="row">
                                    <div class="col-lg-12 ">

                                        <!-- Comment form Start -->
                                        <form action="#" class="comment-form-area">
                                            <div class="row comment-input">

                                                <!-- Input Name Start -->
                                                <div class="col-md-6 comment-form-author mb-3">
                                                    <label>Name</label>
                                                    <input type="text" required="required" name="Name">
                                                </div>
                                                <!-- Input Name End -->

                                                <!-- Input Email Start -->
                                                <div class="col-md-6 comment-form-emai mb-3">
                                                    <label>Email</label>
                                                    <input type="text" required="required" name="email">
                                                </div>
                                                <!-- Input Email End -->

                                            </div>
                                            <!-- Comment Texarea Start -->
                                            <div class="comment-form-comment mb-3">
                                                <label>Comment</label>
                                                <textarea class="comment-notes" required="required"></textarea>
                                            </div>
                                            <!-- Comment Texarea End -->

                                            <!-- Comment Submit Button Start -->
                                            <div class="comment-form-submit">
                                                <button class="btn btn-primary btn-hover-dark border-0">Submit</button>
                                            </div>
                                            <!-- Comment Submit Button End -->

                                        </form>
                                        <!-- Comment form End -->

                                    </div>
                                </div>
                            </div>
                            <!-- Comments ans Replay End -->

                        </div>
                        <!-- End Single Content -->
                    </div>
                    <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                        <!-- Shipping Policy Start -->
                        <div class="shipping-policy mt-8 mb-n3">
                            <h4 class="title mb-4">Shipping policy for our store</h4>
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate</p>
                            <ul class="policy-list mb-3">
                                <li>1-2 business days (Typically by end of day)</li>
                                <li><a href="#">30 days money back guaranty</a></li>
                                <li>24/7 live support</li>
                                <li>odio dignissim qui blandit praesent</li>
                                <li>luptatum zzril delenit augue duis dolore</li>
                                <li>te feugait nulla facilisi.</li>
                            </ul>
                            <p class="mb-3">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
                            <p class="mb-3">claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per</p>
                            <p class="mb-3">seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                        <!-- Shipping Policy End -->
                    </div>
                    <div class="tab-pane fade" id="connect-4" role="tabpanel" aria-labelledby="review-tab">
                        <div class="size-tab table-responsive-lg mt-8">
                            <h4 class="title-3 mb-4">Size Chart</h4>
                            <table class="table border mb-0">
                                <tbody>
                                    <tr>
                                        <td class="cun-name"><span>UK</span></td>
                                        <td>18</td>
                                        <td>20</td>
                                        <td>22</td>
                                        <td>24</td>
                                        <td>26</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>European</span></td>
                                        <td>46</td>
                                        <td>48</td>
                                        <td>50</td>
                                        <td>52</td>
                                        <td>54</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>usa</span></td>
                                        <td>14</td>
                                        <td>16</td>
                                        <td>18</td>
                                        <td>20</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>Australia</span></td>
                                        <td>28</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>Canada</span></td>
                                        <td>24</td>
                                        <td>18</td>
                                        <td>14</td>
                                        <td>42</td>
                                        <td>36</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Single Product Tab End -->

        </div>
    </div>
</div>
<!-- Single Product Tab End -->

<!-- Product Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="title">Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col">

                <div class="product-carousel arrow-outside-container">
                    <div class="swiper-container">

                        <div class="swiper-wrapper">






                         
                            @foreach ($related_animal as $val)
                            <div class="swiper-slide">
                                <!-- Product Start -->
                                <div class="product-wrapper">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="fit-image" src="{{asset($val->image)}}" alt="Product" />
                                            </a>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Basic Dog Trainning</a></h5>
                                            <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            <span class="price">
                                                    <span class="new">$55.00</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->
                            </div>
                            @endforeach

                         

                        </div>

                        <div class="swiper-pagination d-block d-md-none"></div>
                        <div class="swiper-button-prev swiper-nav-button d-none d-md-flex"><i class="ti-angle-left"></i></div>
                        <div class="swiper-button-next swiper-nav-button d-none d-md-flex"><i class="ti-angle-right"></i></div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- Product Section End -->



@endsection

@section('script')

@endsection