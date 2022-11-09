<!DOCTYPE html>
<html>

<head>
    <title>My Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/ShoppingCartLaravel/public/css/style.css">
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
                            @foreach ($categories as $row)
                            {{-- <a href="{{'category/'.$row->id }}"> --}}
                            <li>{{ $row->categoryname }}</li></a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @foreach ($product as $row)
                <div class="contact">
                    <div class="contact-us">
                        <p>{{ $row->productname }}</p>
                    </div>
                    <form action="{{ url('addToCart') }}" method="post">
                        {{ csrf_field() }}
                        <div class="dish-info">
                            <div class="machine-pic">
                                <div class="img">
                                    <img src="/shoppingcartlaravel/public/{{ $row->productimage }}">
                                </div>
                                <div class="stockb">
                                    {{-- <p>In Stock:{{ $row->productquantity }}</p> --}}
                                </div>
                                <div class="detail">
                                    <span>Details:</span>
                                    <p>{{ $row->productname }}</p>
                                </div>
                            </div>
                            <div class="machine-info">
                                <div class="washer">
                                    <p>{{ $row->productname }}</p>
                                </div>
                                <div class="model-info">
                                    <span>Model: {{ $row->productname }}</span>
                                    <p>Manufacturer: {{ $row->productname }}</p>
                                </div>
                                <div class="quantity">
                                        <input type="hidden" name="productid" value="{{ $row->id }}" />
                                        <input type="hidden" name="productprice" value="{{ $row->productprice }}" />
                                        <input type="hidden" name="userid" value="{{ Session()->get('user_id') }}" />
                                        <input type="hidden" name="productname" value="{{ $row->productname }}" />
                                        <input type="hidden" name="productimage" value="{{ $row->productimage }}" />
                                        <input type="hidden" name="username" value="{{ Session()->get('fullname') }}" />
                                    <table>
                                        <tr>
                                            <td class="qty">Enter quantity</td>
                                            <td><input type="text" name="quantity"></td>
                                        </tr>
                                    </table>

                                    <div class="price">
                                        <span>Rs.{{ $row->productprice }}</span>
                                    </div>
                                </div>
                                <div class="cart">
                                    <input type="submit" name="save" value="Add to Cart">
                                </div>
                    </form>
                    <div class="checkout">
                        <a href="{{ url('checkout') }}"><input type="submit" name="save" value="checkout"></a>
                    </div>
                </div>
            </div>
            {{-- <div class="info">
                <form method="post" action="{{ url('/reviews') }}">
                    {{ csrf_field() }}
                    <table class="table-info">
                        <tr>
                            <td class="nme">Enter name</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <td class="nme">Enter Email</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td class="nme">Enter Review</td>
                            <td><input type="text" name="review"></td>
                        </tr>
                        <tr>
                            <td class="nme">Rating</td>
                            <td><input type="text" name="rating"></td>
                        </tr>
                        <tr>
                            <td class="btnn-1">
                                <input type="submit" name="save" value="Submit query">
                            </td>
                        </tr>
                    </table>
                </form>
            </div> --}}
        </div>
        @endforeach
        @include ('common/footer')
    </div>
    </div>
    </div>
</body>

</html>
