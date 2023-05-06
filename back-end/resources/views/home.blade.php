@extends('layouts.app')

@section('content')

<div class="container">
        <div class="header">
            <!-- <img src="assets/images/header_img.jpg" alt="Background Image"> -->
            <div class="overlay-text">
                <p class="header_title ">{{ __('app.header_title') }}</p>
                <ul class="header_ul">
                    <li class="">{{ __('app.header_li1') }}</li>
                    <li class="">{{ __('app.header_li2') }}</li>
                    <li class="">{{ __('app.header_li3') }}</li>
                    <li class="">{{ __('app.header_li4') }}</li>
                    <li class="">{{ __('app.header_li5') }}</li>
                    <li class="">{{ __('app.header_li6') }}</li>
                    <li class="">{{ __('app.header_li7') }}</li>
                    <li class="">{{ __('app.header_li8') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header_next_cards">
            <div class="card one">
                <div class="card_title ">{{ __('app.card1_title') }}</div>
                <div class="card_text ">{{ __('app.card1_text') }}</div>
            </div>
            <div class="card two">
                <div class="card_title ">{{ __('app.card2_title') }}</div>
                <div class="card_text ">{{ __('app.card2_text') }}</div>
            </div>
            <div class="card three">
                <div class="card_title ">{{ __('app.card3_title') }}</div>
                <div class="card_text ">{{ __('app.card3_text') }}</div>
            </div>
        </div>
    </div>
    <!-- service cards start-->
    <div class="services">
        <div class="container" style="background-color: #F2F7FA;">
            <h1 class=" services_title">{{ __('app.services_title') }}</h1>
            <h4 class=" services_text">{{ __('app.services_text') }}</h4>
            <div class="services_cards_container">
                <!-- card1-->
                <div class="service_card">
                    <img src="{{ asset('/images/service1.jpg') }}" alt="" class="service_card_img">
                    <div class="service_card_container">
                        <h3 class="service_card_title ">{{ __('app.service_card1_title') }}</h3>
                        <p class="service_card_text ">{{ __('app.service_card1_text') }}</p>
                        <ul class="service_card_ul">
                            <li class="servise_card_li ">{{ __('app.service_card1_li1') }}</li>
                            <li class="servise_card_li ">{{ __('app.service_card1_li2') }}</li>
                            <li class="servise_card_li ">{{ __('app.service_card1_li3') }}</li>
                            <li class="servise_card_li ">{{ __('app.service_card1_li4') }}</li>
                            <li class="servise_card_li ">{{ __('app.service_card1_li5') }}</li>
                            <li class="servise_card_li ">{{ __('app.service_card1_li6') }}</li>
                            <li class="servise_card_li ">{{ __('app.service_card1_li7') }}</li>
                            <li class="servise_card_li ">{{ __('app.service_card1_li8') }}</li>
                        </div>
                        <div class="service_card_buttons">
                            <a href="" class="enroll service_card_enroll" >{{ __('app.enroll') }}</a>
                            <a href="" class="service_card_more ">{{ __('app.more') }}</a>
                        </div>
                    </div>
                    <!-- card2-->
                    <div class="service_card">
                        <img src="{{ asset('/images/service2.jpg') }}" alt="" class="service_card_img">
                        <div class="service_card_container">
                            <h3 class="service_card_title ">{{ __('app.service_card2_title') }}</h3>
                            <p class="service_card_text ">{{ __('app.service_card2_text') }}</p>
                            <ul class="service_card_ul">
                                <li class="servise_card_li ">{{ __('app.service_card2_li1') }}</li>
                                <li class="servise_card_li ">{{ __('app.service_card2_li2') }}</li>
                                <li class="servise_card_li ">{{ __('app.service_card2_li3') }}</li>
                                <li class="servise_card_li ">{{ __('app.service_card2_li4') }}</li>
                                <li class="servise_card_li ">{{ __('app.service_card2_li5') }}</li>
                                <li class="servise_card_li ">{{ __('app.service_card2_li6') }}</li>
                            </ul>
                        </div>
                        <div class="service_card_buttons">
                            <a href="" class="enroll service_card_enroll" >{{ __('app.enroll') }}</a>
                            <!-- <a href="" class="service_card_more"  key="more">more</a> -->
                        </div>
                    </div>
                    <!-- card3-->
                    <div class="service_card">
                        <img src="{{ asset('/images/service3.jpg') }}" alt="" class="service_card_img">
                        <div class="service_card_container card_height1">
                            <h3 class="service_card_title ">{{ __('app.service_card7_title') }}</h3>
                            <p class="service_card_text ">{{ __('app.service_card7_text') }}</p>
                        </div>
                        <div class="service_card_buttons">
                            <a href="" class="enroll service_card_enroll" >{{ __('app.enroll') }}</a>
                            <a href="" class="service_card_more ">{{ __('app.more') }}</a>
                        </div>
                    </div>
                    <!-- card4-->
                    <div class="service_card">
                        <img src="{{ asset('/images/service4.jpg') }}" alt="" class="service_card_img">
                        <div class="service_card_container card_height1">
                            <h3 class="service_card_title ">{{ __('app.service_card4_title') }}</h3>
                            <p class="service_card_text ">{{ __('app.service_card4_text') }}</p>
                        </div>
                        <div class="service_card_buttons">
                            <a href="" class="enroll service_card_enroll" >{{ __('app.enroll') }}</a>
                            <!-- <a href="" class="service_card_more"  key="more">more</a> -->
                        </div>
                    </div>
                    <!-- card5-->
                    <div class="service_card">
                        <img src="{{ asset('/images/service5.jpg') }}" alt="" class="service_card_img">
                        <div class="service_card_container card_height2">
                            <h3 class="service_card_title ">{{ __('app.service_card5_title') }}</h3>
                            <p class="service_card_text ">{{ __('app.service_card5_text') }}</p>
                        </div>
                        <div class="service_card_buttons">
                            <a href="" class="enroll service_card_enroll" >{{ __('app.enroll') }}</a>
                            <a href="" class="service_card_more ">{{ __('app.more') }}</a>
                        </div>
                    </div>
                    <!-- card6-->
                    <div class="service_card ">
                        <img src="{{ asset('/images/service6.jpg') }}" alt="" class="service_card_img">
                        <div class="service_card_container card_height2">
                            <h3 class="service_card_title ">{{ __('app.service_card6_title') }}</h3>
                            <p class="service_card_text ">{{ __('app.service_card6_text') }}</p>
                        </div>
                        <div class="service_card_buttons">
                            <a href="" class="enroll service_card_enroll" >{{ __('app.enroll') }}</a>
                            <a href="" class="service_card_more ">{{ __('app.more') }}</a>
                        </div>
                    </div>
                    <!-- card7-->
                    <div class="service_card ">
                        <img src="{{ asset('/images/service7.jpg') }}" alt="" class="service_card_img">
                        <div class="service_card_container card_height">
                            <h3 class="service_card_title ">{{ __('app.service_card3_title') }}</h3>
                            <p class="service_card_text ">{{ __('app.service_card3_text') }}</p>
                        </div>
                        <div class="service_card_buttons">
                            <a href="" class="enroll service_card_enroll" >{{ __('app.enroll') }}</a>
                            <a href="" class="service_card_more">{{ __('app.more') }}</a>
                        </div>
                    </div>
                    <!-- card8-->
                </div>
            </div>
        </div>
        <!-- service cards ends-->
        <div class="consultation" style="background-image: url('{{ asset('/images/header_img.jpg') }}');">
            <div class="overlay_consultation">
                <div class="consultation_container">
                    <h2 class="consultation_title ">
                        <!-- Бесплатная консультация -->
                        {{ __('app.consultation_title') }}
                    </h2>
                    <p class="consultation_text ">
                        <!-- Запишитесь на консультацию и получите
                    профессиональный осмотр от главного
                    специалиста центра -->
                    {{ __('app.consultation_text') }}</p>
                    <a href="" class="consultation_button ">{{ __('app.consultation_button') }}</a>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="container about_container">
                <div class="about_img_text">
                    <div class="about_texts">
                        <h2 class="about_title ">{{ __('app.about_title') }}</h2>
                        <p class="about_text ">
                  
                        {{ __('app.about_text1') }}</p>
                        <p class="about_text ">
                            
                        {{ __('app.about_text2') }}</p>
                    </div>
                    <img src="{{ asset('/images/about.png') }}" alt="" class="about_img">
                </div>
                <div class="about_cards">
                    <div class="about_card">
                        <img
                            class="t503__img t-img"
                            src="https://static.tildacdn.com/tild3436-3865-4534-a437-353162646339/6Artboard_4.svg"
                            imgfield="li_img__1476978655843"
                            style="width:50px;"
                            alt=""
                        >
                        <h3 class="about_card_title ">{{ __('app.about_card1_title') }}</h3>
                        <p class="about_card_text ">
                            
                        {{ __('app.about_card1_text') }}</p>
                    </div>
                    <div class="about_card">
                        <img
                            class="t503__img t-img"
                            src="https://static.tildacdn.com/tild3965-3134-4739-b061-643537343464/6Artboard_5.svg"
                            imgfield="li_img__1476978737724"
                            style="width:50px;"
                            alt=""
                        >
                        <h3 class="about_card_title ">{{ __('app.about_card2_title') }}</h3>
                        <p class="about_card_text ">
                            
                        {{ __('app.about_card2_text') }}</p>
                    </div>
                    <div class="about_card">
                        <img
                            class="t503__img t-img"
                            src="https://static.tildacdn.com/tild3831-3038-4239-a538-636331663139/6Artboard_6.svg"
                            imgfield="li_img__1476978755814"
                            style="width:50px;"
                            alt=""
                        >
                        <h3 class="about_card_title ">{{ __('app.about_card3_title') }}</h3>
                        <p class="about_card_text ">
                           
                        {{ __('app.about_card3_text') }}</p>
                    </div>
                    <div class="about_card">
                        <img
                            class="t503__img t-img"
                            src="https://static.tildacdn.com/tild3735-3863-4135-b536-663931636266/6Artboard_7.svg"
                            imgfield="li_img__1476978778074"
                            style="width:50px;"
                            alt=""
                        >
                        <h3 class="about_card_title ">{{ __('app.about_card4_title') }}</h3>
                        <p class="about_card_text ">
                          
                        {{ __('app.about_card4_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="our_expert">
            <!-- <div class="container"> -->
            <div class="expert_texts">
                <h1 class="expert_title ">{{ __('app.expert_title') }}</h1>
                <p class="expert_text ">{{ __('app.expert_text') }}</p>
            </div>
            <!-- <div class="experts_card_container"> -->
            <div class="card-slider">
                <div class="card-wrapper">
                    <!-- Bitta kardni shu yerda qo'shing -->
                    <div class="expert_card_container">
                        <div class="expert_card">
                            <img src="{{ asset('/images/expert1.png') }}" alt="Profile 1" class="expert_card_img">
                            <div class="card-body">
                                <h5 class="card-title ">{{ __('app.expert_card1_title') }}</h5>
                                <p class="card-text ">{{ __('app.expert_card1_text') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="expert_card_container">  
                        <div class="expert_card">
                            <img src="{{ asset('/images/expert2.png') }}" alt="Profile 1" class="expert_card_img">
                            <div class="card-body">
                                <h5 class="card-title ">{{ __('app.expert_card2_title') }}</h5>
                                <p class="card-text ">{{ __('app.expert_card2_text') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="expert_card_container">
                        <div class="expert_card">
                            <img src="{{ asset('/images/expert3.png') }}" alt="Profile 1" class="expert_card_img">
                            <div class="card-body">
                                <h5 class="card-title ">{{ __('app.expert_card3_title') }}</h5>
                                <p class="card-text ">{{ __('app.expert_card3_text') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="expert_card_container">
                        <div class="expert_card">
                            <img src="{{ asset('/images/expert4.png') }}" alt="Profile 1" class="expert_card_img">
                            <div class="card-body">
                                <h5 class="card-title ">{{ __('app.expert_card4_title') }}</h5>
                                <p class="card-text ">{{ __('app.expert_card4_text') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="expert_card_container">
                        <div class="expert_card">
                            <img src="{{ asset('/images/expert5.png') }}" alt="Profile 1" class="expert_card_img">
                            <div class="card-body">
                                <h5 class="card-title ">{{ __('app.expert_card5_title') }}</h5>
                                <p class="card-text ">{{ __('app.expert_card5_text') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="expert_card_container">
                        <div class="expert_card">
                            <img src="{{ asset('/images/expert6.png') }}" alt="Profile 1" class="expert_card_img">
                            <div class="card-body">
                                <h5 class="card-title ">{{ __('app.expert_card6_title') }}</h5>
                                <p class="card-text ">{{ __('app.expert_card6_text') }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Boshqa kardlarni shu yerda qo'shing -->
                </div>
                <button class="prev-btn">
                    <i class="fa fa-chevron-circle-left prev_button"></i>
                </button>
                <button class="next-btn"> <i class="fa fa-chevron-circle-right next_button"></i></button>
            </div>
            <!-- </div> -->
        </div>

@endsection
