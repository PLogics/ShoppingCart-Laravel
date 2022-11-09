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
                            @foreach ($categories as $row)
                                <a href="{{ 'category/' . $row->id }}">
                                    <li>{{ $row->categoryname }}</li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="contact">
                    <table border="1">
                        <tr>
                            <td>S.No.</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Review</td>
                            <td>Rating</td>
                        </tr>
                        @foreach ($reviewdata as $row)
                            <tr class="">
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->review }}</td>
                                <td>{{ $row->rating }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="6">{{ $reviewdata->links('pagi') }}</td>
                        </tr>
                    </table>


                    <!-- <div class="contact-us">
                        <p>{{ $row->productname }}</p>
                    </div>
                    <div class="dish-info">
                        <div class="machine-pic">
                            <div class="img">
                                <img src="{{ $row->productimage }}">
                            </div>
                            <div class="stock">
                                <p>In Stock: {{ $row->productquantity }}</p>
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
                                <span>Model:{{ $row->productname }}</span>
                                <p>Manufacturer:{{ $row->productname }}</p>
                            </div>
                            <div class="quantity">
                                <form>
                                    <table>
                                        <tr>
                                            <td class="qty">Enter quantity</td>
                                            <td><input type="text" name="quantity"></td>
                                        </tr>
                                    </table>
                                </form>
                                <div class="price">
                                    <span>{{ $row->productprice }}</span>
                                </div>
                            </div>
                            <div class="cart">
                                <input type="submit" name="save" value="Add to Cart">
                            </div>
                            <div class="checkout">
                                <input type="submit" name="save" value="checkout">
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="info">
                        <form method="post" action="/reviews">
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
                    </div> -->
                </div>
                @include ('common/footer')
            </div>
        </div>
    </div>
</body>

</html>
