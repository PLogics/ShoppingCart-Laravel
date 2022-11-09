
<!DOCTYPE html>
<html>

<head>
    <title>My Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/shoppingcartlaravel/public/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main-div">
        <div class="head-div">
            <div class="main">
                <div class="head">
                    <span>My Shopping Project</span>
                    <p>THE BIGGEST CHOICE OF THE WEB</p>
                </div>
                <div class="btn">
                    <a href="{{url('/loginRegister')}}"><input type="submit" name="login" value="Log In"></a>
                </div>
            </div>
        </div>
        <div class="home-page">
            <div class="pagnation">
                <div class="list">
                    <ul>
                        <li><a href="{{url('index')}}">HOME</a></li>
                        <li>NEW PROJECT</li>
                        <li>SPECIAL</li>
                        <li>ALL PRODUCTS</li>
                        <li>REVIEWS</li>
                        <li><a href="{{url('contactUs')}}">CONTACT</a></li>
                        <li>FAQS</li>
                    </ul>
                </div>
                <div class="search">
                    <div class="search-1">
                        <div class="input">
                            <input type="text" name="">
                        </div>
                        <div class="btnn">
                            <input type="button" name="" value="Search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="null">
        </div>
        <div class="main-categorious">
            <div class="footer">
                <div class="main-img">
                    <img src="http://localhost/shoppingcartlaravel/public/images/16.png">
                </div>
                <div class="categorious">
                    <div class="cate-heading">
                        <p>CATEGORIES</p>
                    </div>

                    <div class="items">
                        <ul>
                            @foreach($categories as $row)
                            {{-- <a href="{{'category/'.$row->id }}"> --}}
                                <li>{{$row->categoryname}}</li></a>
                            @endforeach
                        </ul>
                    </div>

                </div>
                <div class="contact">
                    <div class="contact-us">
                        <p>FEATURED PRODUCTS</p>
                    </div>
                    <div class="Camera-info">
                        <!-- <div class="cam-info"> -->
                        <div class="samsung-cam">
                            <div class="cam-info">
                                <img src="http://localhost/shoppingcartlaravel/public/images/sam.png">
                                <div class="sam-prc">
                                    <span>Samsung LED</span>
                                    <p>Rs.20000</p>
                                </div>
                                <hr class="hr2">
                                <div class="cart-btn">
                                    <i class="fa fa-plus-circle iconn" aria-hidden="true"></i>
                                    <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    <input type="submit" name="" value="Add to cart">
                                </div>
                            </div>
                        </div>
                        <div class="nikon-cam">
                            <div class="cam-info">
                                <img src="http://localhost/shoppingcartlaravel/public/images/nk2.jpeg">
                                <div class="nik-prc">
                                    <span>Nikon D7000</span>
                                    <p>Rs.3000</p>
                                </div>
                                <hr class="hr2">
                                <div class="cart-1-btn">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    <input type="submit" name="" value="Add to cart">
                                </div>
                            </div>
                        </div>
                        <div class="kodak-cam">
                            <div class="cam-info">
                                <img src="http://localhost/shoppingcartlaravel/public/images/kod.jpg">
                                <div class="kod-prc">
                                    <span>Kodak Camera</span>
                                    <p>Rs.3500</p>
                                </div>
                                <hr class="hr2">
                                <div class="cart-2-btn">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    <input type="submit" name="" value="Add to cart">
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="Camera-info">
                        <div class="samsung-cam">
                            <div class="cam-info">
                                <img src="http://localhost/shoppingcartlaravel/public/images/sam-pro.jpg">
                                <div class="sam-prc">
                                    <span>Samsung Projector</span>
                                    <p>Rs.27950</p>
                                </div>
                                <hr class="hr2">
                                <div class="cart-btn">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    <input type="submit" name="" value="Add to cart">
                                </div>
                            </div>
                        </div>
                        <div class="nikon-cam">
                            <div class="cam-info">
                                <img src="http://localhost/shoppingcartlaravel/public/images/sony.png">
                                <div class="nik-prc">
                                    <span>Sony camcorders</span>
                                    <p>Rs.16000</p>
                                </div>
                                <hr class="hr2">
                                <div class="cart-1-btn">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    <input type="submit" name="" value="Add to cart">
                                </div>
                            </div>
                        </div>
                        <div class="kodak-cam">
                            <div class="cam-info">
                                <img src="http://localhost/shoppingcartlaravel/public/images/acer.jpg">
                                <div class="kod-prc">
                                    <span>Acer Monitor</span>
                                    <p>Rs.15000</p>
                                </div>
                                <hr class="hr2">
                                <div class="cart-2-btn">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    <input type="submit" name="" value="Add to cart">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'common/footer.blade.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>
