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
        @include ('common/header')
        <div class="null">

        </div>
        <div class="main-categorious">
            <div class="footer">
                <div class="categorious">
                    <div class="cate-heading">
                        <p>CATEGORIES</p>
                    </div>
                    <div class="items">
                        <ul>
                            @foreach($categories as $row)
                            <a href="http://localhost/shoppingcartlaravel/public/{{'Product/'.$row->id }}"><li>{{$row->categoryname}}</li></a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="contact">
                    <div class="contact-us">
                        <p>Products</p>
                    </div>
                    <div class="product-info">
                        <span>Sort by:</span>
                        <form action="" method="post">
                            <select>
                                <option>product</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                    </div>
                    <div class="display-product">

                        <span>Displaying 1 to 5(of 6 new product)</span>
                        <div class="btnnn">
                            <input class="pre" type="submit" name="" value="Previous">
                            <input class="nxt" type="submit" name="" value="Next">
                        </div>
                    </div>
                </form>
                @foreach ($product as $row)
                    <div class="dish-info">
                        <div class="machine-pic">

                            <div class="img">
                                <img src="/shoppingcartlaravel/public/{{$row->productimage}}">
                            </div>
                            {{-- <div class="stock">
                                <p>In Stock:{{$row->productquantity}}</p>
                            </div> --}}
                        </div>
                        <div class="machine-info">
                            <div class="date">
                                <span> Date Added:2022-06-01 08:05:32</span>
                            </div>
                            <div class="washer">
                                <p>{{$row->productname}}</p>
                            </div>
                            <div class="model-info">
                                <span>Model:{{$row->productname}}</span>
                                <p>Manufacturer:{{$row->productname}}</p>
                            </div>
                            <div class="price">
                                <span>Rs.{{$row->productprice}}</span>
                            </div>
                            <div class="checkout">
                                <a href="{{'/shoppingcartlaravel/public/buyProduct/'.$row->id}}"><input type="submit" name="" value="BUY NOW"></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @include ('common/footer')
            </div>
        </div>
    </div>
</body>

</html>
