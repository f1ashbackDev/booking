@extends('layouts.index')
@section('content')
    <!-- Home -->

    <div class="home">

        <!-- Home Slider -->

        <div class="home_slider_container">

            <div class="owl-carousel owl-theme home_slider">

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <!-- Image by https://unsplash.com/@anikindimitry -->
                    <div class="home_slider_background" style="background-image:url({{ url(asset('images/home_slider.jpg')) }})"></div>

                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                            <h1>discover</h1>
                            <h1>the world</h1>
                            <div class="button home_slider_button"><div class="button_bcg"></div><a href="#">Исследуйте сейчас<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url({{ url(asset('images/home_slider.jpg')) }})"></div>

                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                            <h1>discover</h1>
                            <h1>the world</h1>
                            <div class="button home_slider_button"><div class="button_bcg"></div><a href="#">Исследуйте сейчас<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url({{ url(asset('images/home_slider.jpg')) }})"></div>

                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                            <h1>discover</h1>
                            <h1>the world</h1>
                            <div class="button home_slider_button"><div class="button_bcg"></div><a href="#">Исследуйте сейчас<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Home Slider Nav - Prev -->
            <div class="home_slider_nav home_slider_prev">
                <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
                        <linearGradient id='home_grad_prev'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
                    <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
					11.042,18.219 "/>
				</svg>
            </div>

            <!-- Home Slider Nav - Next -->
            <div class="home_slider_nav home_slider_next">
                <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
                        <linearGradient id='home_grad_next'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                    <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
                    <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
				17.046,15.554 "/>
				</svg>
            </div>

        </div>

    </div>
    <!-- CTA -->

    <div class="cta">
        <!-- Image by https://unsplash.com/@thanni -->
        <div class="cta_background" style="background-image:url(images/cta.jpg)"></div>

        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- CTA Slider -->

                    <div class="cta_slider_container">
                        <div class="owl-carousel owl-theme cta_slider">

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">Пакет услуг класса люкс на Мальдивах</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">Побалуйте себя незабываемым отдыхом на Мальдивах, архипелаге из более чем 1000 потрясающих островов в Индийском океане. “Travelix” предлагает эксклюзивные туры на Мальдивы, которые позволят вам испытать всю красоту этого райского уголка.</p>
                                <div class="button cta_button"><div class="button_bcg"></div><a href="#">Оформить<span></span><span></span><span></span></a></div>
                            </div>

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">Пакет услуг класса люкс на Мальдивах</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">Побалуйте себя незабываемым отдыхом на Мальдивах, архипелаге из более чем 1000 потрясающих островов в Индийском океане. “Travelix” предлагает эксклюзивные туры на Мальдивы, которые позволят вам испытать всю красоту этого райского уголка.</p>
                                <div class="button cta_button"><div class="button_bcg"></div><a href="#">Оформить<span></span><span></span><span></span></a></div>
                            </div>

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">Пакет услуг класса люкс на Мальдивах</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">Побалуйте себя незабываемым отдыхом на Мальдивах, архипелаге из более чем 1000 потрясающих островов в Индийском океане. “Travelix” предлагает эксклюзивные туры на Мальдивы, которые позволят вам испытать всю красоту этого райского уголка.</p>
                                <div class="button cta_button"><div class="button_bcg"></div><a href="#">Оформить<span></span><span></span><span></span></a></div>
                            </div>

                        </div>

                        <!-- CTA Slider Nav - Prev -->
                        <div class="cta_slider_nav cta_slider_prev">
                            <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
                                    <linearGradient id='cta_grad_prev'>
                                        <stop offset='0%' stop-color='#fa9e1b'/>
                                        <stop offset='100%' stop-color='#8d4fff'/>
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
                                <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
								11.042,18.219 "/>
							</svg>
                        </div>

                        <!-- CTA Slider Nav - Next -->
                        <div class="cta_slider_nav cta_slider_next">
                            <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
                                    <linearGradient id='cta_grad_next'>
                                        <stop offset='0%' stop-color='#fa9e1b'/>
                                        <stop offset='100%' stop-color='#8d4fff'/>
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
                                <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
							17.046,15.554 "/>
							</svg>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Offers -->

    <div class="offers">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="section_title">ЛУЧШИЕ ПРЕДЛОЖЕНИЯ С НОМЕРАМИ</h2>
                </div>
            </div>
            @foreach($services as $item)
                <div class="row offers_items">
                    <div class="col-lg-6 offers_col">
                        <div class="offers_item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="offers_image_container">
                                        <!-- Image by https://unsplash.com/@mantashesthaven -->
                                        <div class="offers_image_background" style="background-image:url({{ asset('/storage/'. $item->image) }})"></div>
                                        <div class="offer_name"><a href="#">{{ $item->name }}</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="offers_content">
                                        <div class="offers_price">{{ $item->price }}<span>За ночь</span></div>
                                        <p class="offers_text">{{ $item->description }}</p>
                                        <div class="offers_icons">
                                            <ul class="offers_icons_list">
                                                <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                                <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                            </ul>
                                        </div>
                                        <div class="offers_link"><a href="offers.html">Читать далее</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
    </div>

    <!-- Testimonials -->

    <div class="testimonials">
        <div class="test_border"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="section_title">что наши клиенты говорят о нас</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <!-- Testimonials Slider -->

                    <div class="test_slider_container">
                        <div class="owl-carousel owl-theme test_slider">

                            <!-- Testimonial Item -->
                            <div class="owl-item">
                                <div class="test_item">
                                    <div class="test_image"><img src="images/test_1.jpg" alt="https://unsplash.com/@anniegray"></div>
                                    <div class="test_icon"><img src="images/backpack.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">carla smith</div>
                                                <div class="test_date">May 24, 2017</div>
                                            </div>
                                            <div class="test_quote_title">" Лучший отпуск в моей жизни "</div>
                                            <p class="test_quote_text">Этот отпуск был лучшим в моей жизни. Я провел его на Мальдивах.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item -->
                            <div class="owl-item">
                                <div class="test_item">
                                    <div class="test_image"><img src="images/test_2.jpg" alt="https://unsplash.com/@tschax"></div>
                                    <div class="test_icon"><img src="images/island_t.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">carla smith</div>
                                                <div class="test_date">May 24, 2017</div>
                                            </div>
                                            <div class="test_quote_title">" Лучший отпуск в моей жизни "</div>
                                            <p class="test_quote_text">Этот отпуск был лучшим в моей жизни. Я провел его на Мальдивах.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item -->
                            <div class="owl-item">
                                <div class="test_item">
                                    <div class="test_image"><img src="images/test_3.jpg" alt="https://unsplash.com/@seefromthesky"></div>
                                    <div class="test_icon"><img src="images/kayak.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">carla smith</div>
                                                <div class="test_date">May 24, 2017</div>
                                            </div>
                                            <div class="test_quote_title">" Лучший отпуск в моей жизни "</div>
                                            <p class="test_quote_text">Этот отпуск был лучшим в моей жизни. Я провел его на Мальдивах.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item -->
                            <div class="owl-item">
                                <div class="test_item">
                                    <div class="test_image"><img src="images/test_2.jpg" alt=""></div>
                                    <div class="test_icon"><img src="images/island_t.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">carla smith</div>
                                                <div class="test_date">May 24, 2017</div>
                                            </div>
                                            <div class="test_quote_title">" Лучший отпуск в моей жизни "</div>
                                            <p class="test_quote_text">Этот отпуск был лучшим в моей жизни. Я провел его на Мальдивах.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item -->
                            <div class="owl-item">
                                <div class="test_item">
                                    <div class="test_image"><img src="images/test_1.jpg" alt=""></div>
                                    <div class="test_icon"><img src="images/backpack.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">carla smith</div>
                                                <div class="test_date">May 24, 2017</div>
                                            </div>
                                            <div class="test_quote_title">" Лучший отпуск в моей жизни "</div>
                                            <p class="test_quote_text">Этот отпуск был лучшим в моей жизни. Я провел его на Мальдивах.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item -->
                            <div class="owl-item">
                                <div class="test_item">
                                    <div class="test_image"><img src="images/test_3.jpg" alt=""></div>
                                    <div class="test_icon"><img src="images/kayak.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">carla smith</div>
                                                <div class="test_date">May 24, 2017</div>
                                            </div>
                                            <div class="test_quote_title">" Лучший отпуск в моей жизни "</div>
                                            <p class="test_quote_text">Этот отпуск был лучшим в моей жизни. Я провел его на Мальдивах.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Testimonials Slider Nav - Prev -->
                        <div class="test_slider_nav test_slider_prev">
                            <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
                                    <linearGradient id='test_grad_prev'>
                                        <stop offset='0%' stop-color='#fa9e1b'/>
                                        <stop offset='100%' stop-color='#8d4fff'/>
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
                                <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
								11.042,18.219 "/>
							</svg>
                        </div>

                        <!-- Testimonials Slider Nav - Next -->
                        <div class="test_slider_nav test_slider_next">
                            <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
                                    <linearGradient id='test_grad_next'>
                                        <stop offset='0%' stop-color='#fa9e1b'/>
                                        <stop offset='100%' stop-color='#8d4fff'/>
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
                                <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
							17.046,15.554 "/>
							</svg>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
