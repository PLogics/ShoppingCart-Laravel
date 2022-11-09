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
        {{-- <div class="head-div">
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
        </div> --}}
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
                            <a href="{{'category/'.$row->id }}"><li>{{$row->categoryname}}</li></a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="contact">
                    <div class="contact-us">
                        <p>CONTACT US</p>
                    </div>
                    <div class="costomer-info">
                        <div class="costomer-service">
                            <p>Customer Service:91 7508115758</p>
                            <p>Ludhiana,Punjab,INDIA</p>
                            <p>Yorex Infotec.</p>
                        </div>
                        <hr class="hr">
                        <div class="info">
                            <div class="required-info">
                                <h4>Contact Us</h4>
                                <p>Have a question? We have 24x7 Costomer Service.</p>
                                <p>Befor you contact us,skim through our self Serve opton and Frequently Asked
                                    Question
                                    for Quicker answer.</p>
                                <p>Want to know more about the status of the orders?</p>
                                <p>Login to view our order.</p>
                            </div>
                        </div>
                        <div class="border">
                            <div class="border-1">
                                <div class="border-2">
                                    <p>Contact Us</p>
                                </div>
                                <div class="requir-info">
                                    <span>*Required information</span>
                                </div>
                                <div class="input-info">
                                    <div class="input-information">
                                        <form action="{{url('contactUsForm')}}" method="post">
                                            {{csrf_field()}}
                                            <table class=" form">
                                                <tr>
                                                    <td>
                                                        <p>full Name* </p>
                                                    </td>
                                                    <td><input type="text" name="fullname"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>E-mail Address </p>
                                                    </td>
                                                    <td><input type="text" name="email"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Message</p>
                                                    </td>
                                                    <td><input type="text" name="message"></td>
                                                </tr>
                                            </table>
                                            <div class="snd-btn">
                                                <input type="submit" name="save" value="Save Form" class="snd-btn1" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include ('common/footer')
            </div>
        </div>
    </div>
</body>

</html>
