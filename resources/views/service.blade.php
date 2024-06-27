@extends('layouts.headers')
@section('content-test')
    <!-- Offers -->

    <div class="offers">

        <!-- Offers -->

        <div class="container">
            <div class="row" style="padding-top: 120px">
                <div class="col-lg-1 temp_col"></div>
                <div class="col-lg-11">

                    <!-- Offers Sorting -->
                    <div class="offers_sorting_container">
                        <ul class="offers_sorting">
                            <li>
                                <span class="sorting_text">цена</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }' data-parent=".price_sorting"><span>показать всё</span></li>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "price" }' data-parent=".price_sorting"><span>возрастание</span></li>
                                </ul>
                            </li>
                            <li>
                                <span class="sorting_text">местоположение</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>по умолчанию</span></li>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "name" }'><span>алфавитный</span></li>
                                </ul>
                            </li>
                            <li>
                                <span class="sorting_text">звезды</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="filter_btn" data-filter="*"><span>show all</span></li>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "stars" }'><span>возрастание</span></li>
                                    <li class="filter_btn" data-filter=".rating_3"><span>3</span></li>
                                    <li class="filter_btn" data-filter=".rating_4"><span>4</span></li>
                                    <li class="filter_btn" data-filter=".rating_5"><span>5</span></li>
                                </ul>
                            </li>
                            <li class="distance_item">
                                <span class="sorting_text">расстояние от центра</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="num_sorting_btn"><span>дистанция</span></li>
                                    <li class="num_sorting_btn"><span>дистанция</span></li>
                                    <li class="num_sorting_btn"><span>дистанция</span></li>
                                </ul>
                            </li>
                            <li>
                                <span class="sorting_text">обзоры</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="num_sorting_btn"><span>обзор</span></li>
                                    <li class="num_sorting_btn"><span>обзор</span></li>
                                    <li class="num_sorting_btn"><span>обзор</span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                @foreach($service as $item)
                    <div class="col-lg-12">
                        <!-- Offers Grid -->

                        <div class="offers_grid">

                            <!-- Offers Item -->

                            <div class="offers_item rating_4">
                                <div class="row">
                                    <div class="col-lg-1 temp_col"></div>
                                    <div class="col-lg-3 col-1680-4">
                                        <div class="offers_image_container">
                                            <!-- Image by https://unsplash.com/@kensuarez -->
                                            <div class="offers_image_background" style="background-image:url({{ asset('/storage/' . $item->image) }})"></div>
                                            <div class="offer_name"><a href="single_listing.html">{{ $item->name }}</a></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="offers_content">
                                            <div class="offers_price">{{ $item->price }}<span>per night</span></div>
                                            <p class="offers_text">{{ $item->description }}</p>
                                            <div class="offers_icons">
                                                <ul class="offers_icons_list">
                                                    <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                                    <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                                    <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                                    <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                                </ul>
                                            </div>
                                            <div class="button book_button"><a href="{{ route('order.store', $item) }}">Арендовать<span></span><span></span><span></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
