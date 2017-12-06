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
                        <li><a href="#">Masuk</a></li>
                        <li><a href="#">Kontak</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="clear"></div>
                <div class="top-nav">
                    <nav class="clearfix">
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="#">Produk</a></li>
                            <li><a href="#">Masuk</a></li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                        <a href="#" id="pull">Menu</a>
                    </nav>
                </div>
            </div>

            <!-- start content -->
            <div class="main1">
                <div class="content">
                    <h2><a href="{{route('pilih-bebek',$product->slug)}}">{{$product->nama}}</a></h2>
                </div>
                <div class="blog">
                    <div class="blog_list">
                        <div class="blog_para">
                            <img class="gambar-product" src="{{URL::asset("images/{$product->gambar}")}}" alt="">
                            <p class="para1 deskripsi-product">"Bebek Peking (bahasa Mandarin: 北京烤鸭, pinyin: beijing kaoya) adalah makanan
                                tradisional di Tiongkok yang berasal dari Beijing.[1]

                                Makanan bebek Peking ini juga ditemui di Taiwan, dibawa oleh pemerintahan nasionalis
                                Kuomintang yang kalah perang saudara dan mundur ke Taiwan tahun 1949.

                                Bebek Peking dibuat menggunakan daging bebek khusus diternakkan untuk makanan ini.
                                Bebek-bebek digemukkan dengan cara memberikan makanan bergizi, pada saat bebek-bebek
                                kekenyangan, peternak-peternak mungkin saja memasukkan makanan ke dalam kerongkongan
                                sang bebek secara paksa. Ini yang kemudian menjadikan bebek Peking juga dikenal dengan
                                nama bebek isi. Bebek tadi disajikan setelah dipanggang dengan kayu-kayu bakar khusus
                                yang akan menambah wangi daging bebek yang dipanggang.</p>
                            <div class="read_more tombol-beli">
                                <a class="btn " href="#">Beli</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
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
                <p class="w3-link">Copyright © 2012 Designer First. All Rights Reserved. Template by&nbsp; <a
                            href="http://w3layouts.com/"> W3Layouts</a></p>
            </div>
        </div>
    </div>
    @include('base.footer')
@endsection
