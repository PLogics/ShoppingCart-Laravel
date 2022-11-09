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
                                <a href="{{ 'category/' . $row->id }}">
                                    <li>{{ $row->categoryname }}</li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="contact">
                    <div class="contact-us">
                        <p>Products in Cart</p>
                    </div>
                    <div class="costomer-info1">
                        <div class="costomer-service">
                            <p></p>
                        </div>
                        <table border="1" class="table2">
                            <tr>
                                <th>S.No.</th>
                                {{-- <td>User ID</td> --}}
                                <th>User Name</th>
                                {{-- <td>Product Id</td> --}}
                                <th>Product Name</th>
                                {{-- <th>Product Image</th> --}}
                                <th>Product Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                            @foreach ($data as $row)
                                <tr class="">
                                    <td>{{ $row->id }}</td>
                                    {{-- <td>{{$row->userid}}</td> --}}
                                    <td>{{ $row->username }}</td>
                                    {{-- <td>{{$row->productid}}</td> --}}
                                    <td>{{ $row->productname }}</td>
                                    {{-- <td>{{ $row->productimage }}</td> --}}
                                    <td>{{ $row->productprice }}</td>
                                    <td>{{ $row->quantity }}</td>
                                    <td>{{ $row->total }}</td>
                                    <td><a href="{{'removeProduct/'.$row->id}}">Remove</a></td>
                                </tr>
                            @endforeach
                        </table>
                        <hr class="hr">
                        {{-- <table border="1" class="tableamt"> --}}
                            <h3 class="th3" >Total Amount: {{$subtotal}}</h3>
                        {{-- </table> --}}
                        {{-- <div class="info"> --}}
                            <div class="required-info">

                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
                @include ('common/footer')
            </div>
        </div>
    </div>
</body>

</html>
