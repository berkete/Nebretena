@extends('layouts.layouts')



@section('content')
    <div class="container">
        @if(Auth::check())
            @if(isset($details))
                <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                <h2>Searched Post details</h2>
                <table class="table tab-pane">
                    <thead>
                    <tr>
                        <th>Post ID</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Created by</th>
                        <th>Category</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($details as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            {{--<td><a href=""> View Post!</a>  </td>--}}

                            <td><a href="{{route('home.post',$post->id)}}">{{$post->title}}</a></td>
                            <td>{{str_limit($post->body,50)}}</td>
                            <td>{{$post->user->name}}</td>
                            <td>{{$post->category->name}}</td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-5">
                        {{--{{$details->render()}}--}}

                    </div>
                    @else
                        {{--<h4 STYLE="text-align: right; font-style: oblique;color: #2e6da4">...no such post search result!</h4>--}}
                       {{--{{$message}}--}}
                    @endif
                    @else
                        <h4 class="bg-info pull-right" style="font-style: italic">These Guest page Register and login to access the informations</h4>
                    @endif

                    <section id="slider" style="background-color: mintcream"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                            <li data-target="#slider-carousel" data-slide-to="3"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>B</span>-Post</h1>
                                    <h2>Closed group page</h2>
                                    <p>welcome all Here you can add your comments for our company </p>
                                    <button type="button" class="btn btn-default get">Get it!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/main/1.png" class="girl img-responsive" alt="" />
                                    <img src="images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    {{--@if(count($details)>0)--}}

                                        {{--@foreach($details as $user)--}}

                                            {{--{{$user->name}}--}}
                                            {{--@endforeach--}}
                                        {{--@endif--}}
                                    <h1><span>B</span>-Post</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>welcome all Here you can add your comments for our company </p>
                                    <button type="button" class="btn btn-default get">Get it!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/main/2.jpeg" class="girl img-responsive" alt="" />
                                    <img src="images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>B</span>-Post</h1>
                                    <h2>Closed group post</h2>
                                    <p>welcome all!<br>Here you can add your comments for our company </p>
                                    <button type="button" class="btn btn-default get">Get it!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/main/3.jpeg" class="girl img-responsive" alt="" />
                                    <img src="images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>B</span>-Post</h1>
                                    <h2>Closed group post</h2>
                                    <p>welcome all Here you can add your comments for our company </p>
                                    <button type="button" class="btn btn-default get">Get it!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/main/4.png" class="girl img-responsive" alt="" />
                                    <img src="images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->
@if(Auth::check())
    <section style="    margin-left: -50px">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        @include('shared.sidebar')
                    </div>
                </div>
@endif
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center" style="margin-top: 46px">Company Advertisement</h2>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/services/1.png" alt="" />
                                        <h2>6</h2>
                                        <p>WELCOME TO THESE PAGE</p>
                                        <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>6</h2>
                                            <p>WELCOME TO THESE PAGE</p>
                                            <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="{{url('/contact')}}"><i class="fa fa-plus-square"></i>contact us</a></li>
                                        <li><a href="{{url('/service')}}"><i class="fa fa-plus-square"></i>Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/services/2.png" alt="" />
                                        <h2>6</h2>
                                        <p>WELCOME TO THESE PAGE</p>
                                        <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>6</h2>
                                            <p>WELCOME TO THESE PAGE</p>
                                            <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                        </div>
                                    </div>
                                    <img src="" class="new" alt="" />
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="{{url('/contact')}}"><i class="fa fa-plus-square"></i>contact us</a></li>
                                        <li><a href="{{url('/service')}}"><i class="fa fa-plus-square"></i>Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/services/3.jpeg" alt="" />
                                        <h2>6</h2>
                                        <p>WELCOME TO THESE PAGE</p>
                                        <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-chevron-up"></i>Read more..</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>6</h2>
                                            <p>WELCOME TO THESE PAGE</p>
                                            <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                        </div>
                                    </div>
                                    <img src="" class="new" alt="" />
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="{{url('/contact')}}"><i class="fa fa-plus-square"></i>contact us</a></li>
                                        <li><a href="{{url('/service')}}"><i class="fa fa-plus-square"></i>Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--features_items-->
        @if(Auth::check())
                    <div class="category-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs" style=" width:90%;margin-left: 20px">
                                <li><a href="#users" data-toggle="tab">Admin & Author</a></li>
                                <li><a href="#posts" data-toggle="tab">Posts highlights</a></li>
                                <li><a href="#categories" data-toggle="tab">Post Categories </a></li>
                                {{--<li><a href="#photo" data-toggle="tab">Post Photo lists</a></li>--}}
                                {{--<li><a href="#kids" data-toggle="tab">Countries</a></li>--}}

                            </ul>

                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="users" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/author/1.jpg" alt="" />
                                                <h2>1</h2>
                                                <p>WELCOME TO THESE PAGE</p>
                                                <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/author/2.jpg" alt="" />
                                                <h2>2</h2>
                                                <p>WELCOME TO THESE PAGE</p>
                                                <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>read more...</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/author/3.jpg" alt="" />
                                                <h2>3</h2>
                                                <p>WELCOME TO THESE PAGE</p>
                                                <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>read more ...</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/author/4.jpg" alt="" />
                                                <h2>4</h2>
                                                <p>WELCOME TO THESE PAGE</p>
                                                <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>read more...</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="posts" >
                                <div class="col-sm-12">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <div class="panel-group category-products" id="accordian" >

                                                </div>


                                                <div class="brands_products"><!--brands_products-->
                                                    <h2 style="margin-top: -36px">Post Lists</h2>
                                                    <div class="brands-name">
                                                        <ul class="nav nav-pills nav-stacked" style="">
                                                            <table class="table" style="color: #99cb84;align-self: center">
                                                                <thead>
                                                                  <tr>
                                                                    <th>Body Highlight</th>
                                                                    <th>Post picture</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                @if($posts)
                                                                    @foreach($posts as $post)
                                                                  <tr class="success">
                                                                    <td><li><a href='{{route('home.post',$post->id)}}'> <span class="pull-right color bg-primary"></span>{{str_limit($post->body,50)}}</a></li>
                                                                    </td>
                                                                    <td> <li><img src="{{URL::to('/images/'.$post->photo->file)}} "></li></td>

                                                                  </tr>
                                                                    @endforeach
                                                                @endif

                                                                </tbody>
                                                              </table>
                                                            {{--{{$posts->render()}}--}}






                                                        </ul>
                                                    </div>
                                                </div><!--/brands_products-->

                                                    <h2>1</h2>


                                                <p>WELCOME TO THESE PAGE</p>
                                                <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>read more about our service...</a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="photo" >
                                <div class="col-sm-12">
                                    <div class="product-image-wrapper">

                                        <div class="single-products">

                                            <div class="productinfo text-center">
                                                <h2 style="">Post Photo Lists</h2>
                                                @if($posts)
                                                    @foreach($posts as $post)

                                                        <a href='{{route('home.post',$post->id)}}'> <span class="pull-right color bg-primary"></span>{{str_limit($post->category->name,15)}}</a>
                                                        <img src="{{URL::to('/images/'.$post->photo->file)}} ">

                                                    @endforeach
                                                @endif
                                                <h2>6</h2>
                                                <p>WELCOME TO THESE PAGE</p>
                                                <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="kids" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="" alt="" />


                                                <h2>6</h2>
                                                <p>WELCOME TO THESE PAGE</p>
                                                <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="" alt="" />
                                                <h2>6</h2>
                                                <p>WELCOME TO THESE PAGE</p>
                                                <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="" alt="" />
                                                <h2>6</h2>
                                                <p>WELCOME TO THESE PAGE</p>
                                                <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="" alt="" />
                                                <h2>6</h2>
                                                <p>WELCOME TO THESE PAGE</p>
                                                <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="categories" >
                                <div class="col-sm-11">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">

                                                <div class="panel-group category-products" id="accordian" >

                                                    <h2 style="margin-top: 1px">Category</h2>
                                                    <div class="brands-name">
                                                        <ul class="nav nav-pills nav-stacked" style="margin: 30px;margin-top: 10px">

                                                            <table class="table" style="color: salmon">
                                                                <thead>
                                                                  <tr>
                                                                    <th>Category_Name</th>
                                                                    <th >Category Photo</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                @if($posts)
                                                                    @foreach($posts as $post)
                                                                  <tr class="success">
                                                                    <td><li><a href='{{route('home.post',$post->id)}}'> <span class="pull-right color bg-primary"></span>{{str_limit($post->category->name,15)}}</a></li></td>
                                                                    <td> <li><img src="{{URL::to('/images/'.$post->photo->file)}} "></li></td>

                                                                  </tr>







                                                                @endforeach
                                                            @endif
                                                                </tbody>
                                                            </table>
                                                            {{--{{$posts->render()}}--}}
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h2>6</h2>
                                                <p>WELCOME TO THESE PAGE</p>
                                                <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div><!--/category-tab-->

                    <div class="recommended_items" style="margin: 51px;width: 75%"><!--recommended_items-->
                        <h2 class="title text-center">Subscribers</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/subscriber/5.jpg" alt="" />
                                                    <h2>1</h2>
                                                    <p>WELCOME TO THESE PAGE</p>
                                                    <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/subscriber/6.jpg" alt="" />
                                                    <h2>2</h2>
                                                    <p>WELCOME TO THESE PAGE</p>
                                                    <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/subscriber/7.jpg" alt="" />
                                                    <h2>3</h2>
                                                    <p>WELCOME TO THESE PAGE</p>
                                                    <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/subscriber/8.jpg" alt="" />
                                                    <h2>4</h2>
                                                    <p>WELCOME TO THESE PAGE</p>
                                                    <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/subscriber/9.jpg" alt="" />
                                                    <h2>5</h2>
                                                    <p>WELCOME TO THESE PAGE</p>
                                                    <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/subscriber/10.jpg" alt="" />
                                                    <h2>6</h2>
                                                    <p>WELCOME TO THESE PAGE</p>
                                                    <a href="{{url('/service')}}" class="btn btn-default add-to-cart"><i class="fa fa-angle-double-right"></i>Read more..</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div><!--/recommended_items-->
@endif
                </div>
            </div>
        </div>
    </section>
    </div>
</div>
@endsection
