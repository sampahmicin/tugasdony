<?php
/**
 * Created by PhpStorm.
 * User: id-by
 * Date: 11/26/2017
 * Time: 9:10 PM
 */
?>
@extends('base.layout')
@section('head')
    <!-- here head-->
    @include('base.head')
@endsection
@section('content')
    <!-- start body-->
    <div class="wrap">
        <div class="wrapper">
            <!-- start header-->
            <div class="header">
                <div class="logo">
                    <a href="{{route('index')}}"><img src="{{URL::asset("images/bebek-logo.png")}}" alt=""></a>
                </div>
                <div class="cssmenu">
                    <ul>
                        <li class="active"><a href="{{route('index')}}">Home</a></li>
                        <li><a href="#">Produk</a></li>
                        <li ><a href="#">Masuk</a></li>
                        <li ><a href="#">Kontak</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="clear"></div>
                <div class="top-nav">
                    <nav class="clearfix">
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="#">Produk</a></li>
                            <li ><a href="#">Masuk</a></li>
                            <li ><a href="#">Kontak</a></li>
                        </ul>
                        <a href="#" id="pull">Menu</a>
                    </nav>
                </div>
            </div>
            <!-- start banner -->
            <div class="banner">
                <div class="banner-division d_img">
                    <img src="images/banner.png" alt="" />
                </div>
                <div class="banner-division">
                    <h3>Anda mencari bibit bebek berkualitas?</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                        <a href="#">Read more</a>
                </div>
                <div class="clear"></div>
{{--                <div class="banner-division d_img">
                    <img src="images/banner_2.png" alt="" />
                </div>
                <div class="banner-division">
                    <h3>Looking for rockstar graphic designers?</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                        <a href="#">Read more</a>
                </div>--}}
                <div class="clear"></div>
            </div>

            <!-- start content -->
            <div class="main">
                <div class="content">
                    <h2>Produk Unggulan kami</h2>
                </div>
                <!--  product -->
                @include('product.index')

                <div class="content">
                    <h2>Kenapa Harus membeli produk dari {{env('APP_NAME', 'Istanah Bebek')}}?</h2>
                </div>
                <div class="grids_of_3">
                    <div class="grid_1_of_3 images_1_of_3">
                        <h3 class="tools_icon">Berkualitas Tinggi</h3>
                        <p>Our website design and development provides quality web solutions which are talored to your needs. These can range from simple <span> CSS </span> and <span>HTML</span> sites to bespoke CMS and E-Commerce Sites. </p>
                    </div>
                    <div class="grid_1_of_3 images_1_of_3">
                        <h3 class="wordpress_icon">Harga Bersaing</h3>
                        <p>There are many variations of <span> passages </span>  of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly.</p>
                    </div>
                    <div class="grid_1_of_3 images_1_of_3">
                        <h3 class="tools_icon">Pelayanan Ramah</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <span> eiusmod </span>  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisp.</p>
                    </div>
                    <div class="clear"></div>
                </div>
{{--
                <div class="grids_of_3">
                    <div class="grid_1_of_3 images_1_of_3">
                        <h3 class="user_icon">Branding</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered <span> alteration </span> in some form, by injected humour, or randomised words which don't look even slightly.</p>
                    </div>
                    <div class="grid_1_of_3 images_1_of_3">
                        <h3 class="gallery_icon">Print Design</h3>
                        <p>Our website design and development provides quality web solutions which are talored to your needs. These can range from simple <span> CSS </span> and <span>HTML</span> sites to bespoke CMS and E-Commerce Sites. </p>
                    </div>
                    <div class="grid_1_of_3 images_1_of_3">
                        <h3 class="cog_icon">Search Engine Optimization</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or <span>randomised </span> words which don't look even slightly.</p>
                    </div>
                    <div class="clear"></div>
                </div>
--}}
            </div>
        </div>
    </div>

@endsection
@section('footer')
    <!-- start foorter -->
    <div class="footer_bg">
{{--        <div class="wrap">
            <div class="wrapper">
                <div class="footer">
                    <div class="span_1_of_3">
                        <h3>Contact Us</h3>
                        <div class="footer_grid">
                            <div class="foot_img">
                                <img src="images/home.png" alt="" />
                            </div>
                            <div class="foot_text">
                                <p>500 Lorem Ipsum Dolor Sit,</p>
                                <p>22-56-2-9 Sit Amet, Lorem,</p>
                                <p>USA</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="footer_grid">
                            <div class="foot_img">
                                <img src="images/call.png" alt="" />
                            </div>
                            <div class="foot_text">
                                <p>(416) 431-4437</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <a href=""><h4 class="mail">info(at)mycompany.com</h4></a>
                        <div class="foot_nav">
                            <ul>
                                <li><a href="#"><img src="images/soc_icon1.png" alt="" /></a></li>
                                <li><a href="#"><img src="images/soc_icon2.png" alt="" /></a></li>
                                <li><a href="#"><img src="images/soc_icon3.png" alt="" /></a></li>
                                <li><a href="#"><img src="images/soc_icon4.png" alt="" /></a></li>
                                <div class="clear"></div>
                            </ul>

                        </div>
                    </div>
 --}}{{--                   <div class="span_1_of_3">
                        <h3>Latest Tweets</h3>
                        <div class="footer_grid">
                            <div class="foot_img">
                                <img src="images/twitter.png" alt="" />
                            </div>
                            <div class="foot_text">
                                <p>Confucius: Lorem Ipsum is simply dummy text of the printing.<br /> <b>#famousquotes</b></p>
                                <h4>8 days ago</h4>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="footer_grid">
                            <div class="foot_img">
                                <img src="images/twitter.png" alt="" />
                            </div>
                            <div class="foot_text">
                                <p>Bruce Lee: Lorem Ipsum is simply dummy text of the printing.<br /> <b>#famousquotes</b></p>
                                <h4>1 hour ago</h4>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="span_1_of_3">
                        <h3>Latest Posts</h3>
                        <a href=""><h5 class="fountain">Starting a new journey today</h5></a>
                        <a href=""><h5 class="fountain">The life of a web designer</h5></a>
                        <a href=""><h5 class="fountain">Your guide to navigating Around to wordoress</h5></a>
                        <a href=""><h5 class="fountain">introduction to HTML5 and CSS3</h5></a>
                        <a href=""><h5 class="fountain">The life of a web designer</h5></a>
                    </div>--}}{{--
                    <div class="clear"></div>
                </div>
            </div>
        </div>--}}
    </div>
    <!-- start footer copy -->
   <div class="wrap">
        <div class="wrapper">
            <div class="copy">
                <p class="w3-link">Copyright © 2012 Designer First. All Rights Reserved. Template by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></p>
            </div>
        </div>
    </div>
    @include('base.footer')
@endsection
