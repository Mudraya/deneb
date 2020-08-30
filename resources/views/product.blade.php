@extends('layouts.master')

@section('title', 'Главная')

@section('content')


    <!-- broad -->
    <div class="broad">
        <div class="container">
            <ul>
                <li><a href="#"><span>Главная</span></a></li>
                <li><a href="#"><span>Инсектициды</span></a></li>
                <li>Антиколорад</li>
            </ul>
        </div>
    </div>
    <!-- broad -->

    <!-- catalog -->
    <main class="catalog">
        <div class="container">
            <div class="product">

                <!-- product top -->
                <div class="product-top">

                    <div class="mobile-title">
                        Антиколорад
                    </div>

                    <div class="product-thumb">
                        <a href="#">
                            <img src="/images/prod-thumb.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-descr">
                        <div class="product-tit">
                            <h1>
                                Антиколорад
                            </h1>
                        </div>

                        <div class="product-text">
                            Комбінований високоефективний контактно-системний інсектицид широкого спектру дії з акарицидними та репелентними властивостями для захисту широкого спектру культур від комплексу шкідників.
                        </div>

                        <div class="product-info">
                            <div class="price-wrap">
                                <div class="product-price">
                                    <span>24</span> грн
                                </div>
                            </div>

                            <div class="btns-prod">
                                <div class="product-bay">
                                    <a href="#" class="def-bt" data-toggle="modal" data-target="#bask">
                                        Купить
                                    </a>
                                </div>
                                <div class="comp-prod">
                                    <a href="#">
                                        <i>
                                            <svg width="32" height="28" viewBox="0 0 32 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M31.9226 16.4949L27.3048 7.24176C27.406 7.11088 27.4687 6.94858 27.4687 6.77028C27.4687 6.34248 27.1218 5.99561 26.694 5.99561H17.9685C18.3437 5.87415 18.6152 5.52234 18.6152 5.10666C18.6152 4.59046 18.1969 4.17209 17.6807 4.17209H17.3371C17.8467 3.7739 18.1756 3.15509 18.1756 2.45835C18.1756 1.25678 17.2016 0.282867 16.0001 0.282867C14.7986 0.282867 13.8247 1.25693 13.8247 2.45835C13.8247 3.15524 14.1536 3.77405 14.6632 4.17209H14.3195C13.8033 4.17209 13.3849 4.59046 13.3849 5.10666C13.3849 5.52234 13.6565 5.87415 14.0317 5.99561H5.3945L5.39315 5.99292L5.39181 5.99561H5.30595C4.87815 5.99561 4.53128 6.34248 4.53128 6.77028C4.53128 6.97491 4.6122 7.15964 4.74173 7.29815L0.0773948 16.6445C0.00454953 16.7905 -0.0142975 16.9484 0.010084 17.0982C0.00754112 17.1272 0.00619491 17.1568 0.0091865 17.1869C0.271848 19.9292 2.5821 22.0738 5.39315 22.0738C8.2042 22.0738 10.5146 19.9292 10.7773 17.1869C10.7801 17.1566 10.7789 17.1272 10.7764 17.098C10.8008 16.9484 10.7819 16.7905 10.7091 16.6445L6.16783 7.54495H14.9553V25.4107H7.74813C6.88102 25.4107 6.17815 26.1136 6.17815 26.9807C6.17815 27.394 6.5132 27.7291 6.92649 27.7291H25.0736C25.4869 27.7291 25.822 27.394 25.822 26.9807C25.822 26.1136 25.1191 25.4107 24.252 25.4107H17.0448V7.54481H25.7575L21.2909 16.4947C21.2181 16.6407 21.1992 16.7988 21.2236 16.9484C21.2211 16.9774 21.2197 17.0069 21.2227 17.0371C21.4854 19.7795 23.7956 21.924 26.6067 21.924C29.4179 21.924 31.7281 19.7795 31.9908 17.0371C31.9936 17.0069 31.9924 16.9774 31.9899 16.9483C32.0143 16.7988 31.9954 16.6409 31.9226 16.4949ZM1.73877 16.6648L5.393 9.34245L9.04723 16.6648H1.73877ZM22.9524 16.5152L26.6067 9.19287L30.2609 16.5152H22.9524Z" fill="#F47920"/>
                                            </svg>
                                        </i>
                                        <span>
												Сравнить
											</span>
                                    </a>
                                </div>
                            </div>

                            <div class="product-number">
                                <div class="num-name">
                                    Количество, шт.
                                </div>
                                <div class="num-wrap">
                                    <div class="num-block">
                                        <div class="num-in">
                                            <span class="minus dis"></span>
                                            <input type="text" class="in-num" value="1" readonly="">
                                            <span class="plus"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / product top -->

                <!-- prod tabs -->
                <div class="product-tabs-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="descr-tab" data-toggle="tab" href="#descr" role="tab" aria-controls="descr" aria-selected="true">Описание</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="char-tab" data-toggle="tab" href="#char" role="tab" aria-controls="char" aria-selected="false">Характеристики</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Отзывы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="quest-tab" data-toggle="tab" href="#quest" role="tab" aria-controls="quest" aria-selected="false">Вопросы</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <!-- one tab -->
                        <div class="tab-pane fade show active" id="descr" role="tabpanel" aria-labelledby="descr-tab">
                            <div class="prod-about">
                                <div class="prod-tab-tit">
                                    Описание
                                </div>
                                <p>
                                    Комбинированный высокоэффективный контактно-системный инсектицид широкого спектра действия с акарицидные и репелентнимы свойствами для защиты широкого спектра культур от комплекса вредителей.
                                </p>
                                <p>
                                    Спектр действия:
                                </p>
                                <ul>
                                    <li>Колорадский жук и его личинки </li>
                                    <li>Гусеницы подгрызающих совок </li>
                                    <li>Почечный долгоносик </li>
                                    <li>Тля </li>
                                    <li>Цветоед </li>
                                    <li>Плодожорки </li>
                                    <li>Блошки </li>
                                    <li>Белянка </li>
                                    <li>Трипсы</li>
                                </ul>
                                <p>
                                    <strong>Применение.</strong> Перед проведением опрыскивание необходимо расчетное количество препарата (см. Табл.) Растворить в чистой воде и тщательно перемешать. Рабочий раствор использовать в день его приготовления, так как при длительном хранении теряются свойства препарата, что приводит к снижению эффективности действия против вредителей. Обработку проводить при благоприятных погодных условиях (отсутствие порывистого ветра, температура воздуха не выше 25 ° С), обычно это утренние (до 10-11) и вечерние (18-22) часа. Во время опрыскивания необходимо достигать равномерного покрытия листьев и стеблей растений раствором. Целесообразным и экономически выгодным является использование в смеси с фунгицидом ЗАЩИТА.
                                </p>

                                <div class="product-video">
                                    <div class="prod-vid">
                                        <div class="play-vid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / one tab -->
                        <!-- one tab -->
                        <div class="tab-pane fade" id="char" role="tabpanel" aria-labelledby="char-tab">
                            <div class="prod-tab-char">
                                <div class="prod-tab-tit">
                                    Характеристика
                                </div>
                                <div class="all-char">
                                    <div class="one-char">
                                        <div class="one-char-name">
                                            Принцип действия
                                        </div>
                                        <ul>
                                            <li>избирательное</li>
                                        </ul>
                                    </div>
                                    <div class="one-char">
                                        <div class="one-char-name">
                                            Действующее вещество
                                        </div>
                                        <ul>
                                            <li>метрибузин</li>
                                            <li>дикамба</li>
                                        </ul>
                                    </div>
                                    <div class="one-char">
                                        <div class="one-char-name">
                                            Фасовка
                                        </div>
                                        <ul>
                                            <li>1000 мл</li>
                                        </ul>
                                    </div>
                                    <div class="one-char">
                                        <div class="one-char-name">
                                            Культура
                                        </div>
                                        <ul>
                                            <li>картофель</li>
                                            <li>перец</li>
                                            <li>томат</li>
                                            <li>капуста</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / one tab -->
                        <!-- one tab -->
                        <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                            <div class="prod-tab-comments">
                                <div class="leave-comm">
                                    <a class="sec-bt" href="#" data-toggle="modal" data-target="#comm">
                                        Оставить отзыв
                                    </a>
                                </div>
                                <div class="prod-tab-tit">
                                    Все отзывы <span>3</span>
                                </div>

                                <div class="all-comm">
                                    <!-- one-comm -->
                                    <div class="one-comm">
                                        <div class="one-comm-top">
                                            <div class="one-comm-auth">
                                                <div class="one-comm-thumb">
                                                    <img src="/images/post-author.png" alt="">
                                                </div>
                                                <div class="one-comm-name">
                                                    Роман Андреев
                                                </div>
                                                <div class="one-comm-rat">
                                                    <div class="stars">
															<span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.4433 5.29637L10.5607 5.57413L10.8611 5.59994L15.8611 6.02948L12.0688 9.31501L11.8409 9.51245L11.9092 9.80614L13.0455 14.6935L8.74909 12.1024L8.49088 11.9467L8.23266 12.1024L3.93621 14.6935L5.07254 9.80614L5.14083 9.51246L4.91294 9.31502L1.11983 6.02865L6.11983 5.59911L6.42024 5.57331L6.5376 5.29557L8.49046 0.674288L10.4433 5.29637ZM3.8882 14.9L3.88821 14.8999L3.8882 14.9Z" fill="#FFA900" stroke="#FFA900"/>
																</svg>
															</span>
                                                        <span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.4433 5.29637L10.5607 5.57413L10.8611 5.59994L15.8611 6.02948L12.0688 9.31501L11.8409 9.51245L11.9092 9.80614L13.0455 14.6935L8.74909 12.1024L8.49088 11.9467L8.23266 12.1024L3.93621 14.6935L5.07254 9.80614L5.14083 9.51246L4.91294 9.31502L1.11983 6.02865L6.11983 5.59911L6.42024 5.57331L6.5376 5.29557L8.49046 0.674288L10.4433 5.29637ZM3.8882 14.9L3.88821 14.8999L3.8882 14.9Z" fill="#FFA900" stroke="#FFA900"/>
																</svg>
															</span>
                                                        <span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.4433 5.29637L10.5607 5.57413L10.8611 5.59994L15.8611 6.02948L12.0688 9.31501L11.8409 9.51245L11.9092 9.80614L13.0455 14.6935L8.74909 12.1024L8.49088 11.9467L8.23266 12.1024L3.93621 14.6935L5.07254 9.80614L5.14083 9.51246L4.91294 9.31502L1.11983 6.02865L6.11983 5.59911L6.42024 5.57331L6.5376 5.29557L8.49046 0.674288L10.4433 5.29637ZM3.8882 14.9L3.88821 14.8999L3.8882 14.9Z" fill="#FFA900" stroke="#FFA900"/>
																</svg>
															</span>
                                                        <span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.4433 5.29637L10.5607 5.57413L10.8611 5.59994L15.8611 6.02948L12.0688 9.31501L11.8409 9.51245L11.9092 9.80614L13.0455 14.6935L8.74909 12.1024L8.49088 11.9467L8.23266 12.1024L3.93621 14.6935L5.07254 9.80614L5.14083 9.51246L4.91294 9.31502L1.11983 6.02865L6.11983 5.59911L6.42024 5.57331L6.5376 5.29557L8.49046 0.674288L10.4433 5.29637ZM3.8882 14.9L3.88821 14.8999L3.8882 14.9Z" fill="#FFA900" stroke="#FFA900"/>
																</svg>
															</span>
                                                        <span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.2734 5.29637L10.3908 5.57413L10.6912 5.59994L15.6912 6.02948L11.8989 9.31501L11.671 9.51245L11.7393 9.80614L12.8756 14.6935L8.57917 12.1024L8.32096 11.9467L8.06274 12.1024L3.76628 14.6935L4.90262 9.80614L4.9709 9.51246L4.74302 9.31502L0.94991 6.02865L5.94991 5.59911L6.25032 5.57331L6.36768 5.29557L8.32054 0.674288L10.2734 5.29637ZM3.71828 14.9L3.71829 14.8999L3.71828 14.9Z" stroke="#FFA900"/>
																</svg>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="one-comm-date">
                                                <div class="post-date">
                                                    <div class="post-date-ico">
															<span>
																<svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M24.7188 2.19019H23.4062V0.00268555H21.2188V2.19019H6.78125V0.00268555H4.59375V2.19019H3.28125C1.47197 2.19019 0 3.66215 0 5.47144V24.7214C0 26.5307 1.47197 28.0027 3.28125 28.0027H24.7188C26.528 28.0027 28 26.5307 28 24.7214V5.47144C28 3.66215 26.528 2.19019 24.7188 2.19019ZM25.8125 24.7214C25.8125 25.3245 25.3218 25.8152 24.7188 25.8152H3.28125C2.67816 25.8152 2.1875 25.3245 2.1875 24.7214V10.2839H25.8125V24.7214ZM25.8125 8.09644H2.1875V5.47144C2.1875 4.86834 2.67816 4.37769 3.28125 4.37769H4.59375V6.56519H6.78125V4.37769H21.2188V6.56519H23.4062V4.37769H24.7188C25.3218 4.37769 25.8125 4.86834 25.8125 5.47144V8.09644Z" fill="#00A94F"></path>
																	<path d="M6.34375 12.5808H4.15625V14.7683H6.34375V12.5808Z" fill="#00A94F"></path>
																	<path d="M10.7188 12.5808H8.53125V14.7683H10.7188V12.5808Z" fill="#00A94F"></path>
																	<path d="M15.0938 12.5808H12.9062V14.7683H15.0938V12.5808Z" fill="#00A94F"></path>
																	<path d="M19.4688 12.5808H17.2812V14.7683H19.4688V12.5808Z" fill="#00A94F"></path>
																	<path d="M23.8438 12.5808H21.6562V14.7683H23.8438V12.5808Z" fill="#00A94F"></path>
																	<path d="M6.34375 16.9558H4.15625V19.1433H6.34375V16.9558Z" fill="#00A94F"></path>
																	<path d="M10.7188 16.9558H8.53125V19.1433H10.7188V16.9558Z" fill="#00A94F"></path>
																	<path d="M15.0938 16.9558H12.9062V19.1433H15.0938V16.9558Z" fill="#00A94F"></path>
																	<path d="M19.4688 16.9558H17.2812V19.1433H19.4688V16.9558Z" fill="#00A94F"></path>
																	<path d="M6.34375 21.3308H4.15625V23.5183H6.34375V21.3308Z" fill="#00A94F"></path>
																	<path d="M10.7188 21.3308H8.53125V23.5183H10.7188V21.3308Z" fill="#00A94F"></path>
																	<path d="M15.0938 21.3308H12.9062V23.5183H15.0938V21.3308Z" fill="#00A94F"></path>
																	<path d="M19.4688 21.3308H17.2812V23.5183H19.4688V21.3308Z" fill="#00A94F"></path>
																	<path d="M23.8438 16.9558H21.6562V19.1433H23.8438V16.9558Z" fill="#00A94F"></path>
																</svg>
															</span>
                                                    </div>
                                                    <div class="post-date-num">
                                                        20.10.2019
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="one-comm-descr">
                                            Очень доволен результатом реально хорошо сработал. Быстро доставили, буду заказывать еще.
                                        </div>
                                    </div>
                                    <!-- / one-comm -->
                                    <!-- one-comm -->
                                    <div class="one-comm">
                                        <div class="one-comm-top">
                                            <div class="one-comm-auth">
                                                <div class="one-comm-thumb">
                                                    <img src="/images/post-author.png" alt="">
                                                </div>
                                                <div class="one-comm-name">
                                                    Роман Андреев
                                                </div>
                                                <div class="one-comm-rat">
                                                    <div class="stars">
															<span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.4433 5.29637L10.5607 5.57413L10.8611 5.59994L15.8611 6.02948L12.0688 9.31501L11.8409 9.51245L11.9092 9.80614L13.0455 14.6935L8.74909 12.1024L8.49088 11.9467L8.23266 12.1024L3.93621 14.6935L5.07254 9.80614L5.14083 9.51246L4.91294 9.31502L1.11983 6.02865L6.11983 5.59911L6.42024 5.57331L6.5376 5.29557L8.49046 0.674288L10.4433 5.29637ZM3.8882 14.9L3.88821 14.8999L3.8882 14.9Z" fill="#FFA900" stroke="#FFA900"/>
																</svg>
															</span>
                                                        <span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.4433 5.29637L10.5607 5.57413L10.8611 5.59994L15.8611 6.02948L12.0688 9.31501L11.8409 9.51245L11.9092 9.80614L13.0455 14.6935L8.74909 12.1024L8.49088 11.9467L8.23266 12.1024L3.93621 14.6935L5.07254 9.80614L5.14083 9.51246L4.91294 9.31502L1.11983 6.02865L6.11983 5.59911L6.42024 5.57331L6.5376 5.29557L8.49046 0.674288L10.4433 5.29637ZM3.8882 14.9L3.88821 14.8999L3.8882 14.9Z" fill="#FFA900" stroke="#FFA900"/>
																</svg>
															</span>
                                                        <span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.4433 5.29637L10.5607 5.57413L10.8611 5.59994L15.8611 6.02948L12.0688 9.31501L11.8409 9.51245L11.9092 9.80614L13.0455 14.6935L8.74909 12.1024L8.49088 11.9467L8.23266 12.1024L3.93621 14.6935L5.07254 9.80614L5.14083 9.51246L4.91294 9.31502L1.11983 6.02865L6.11983 5.59911L6.42024 5.57331L6.5376 5.29557L8.49046 0.674288L10.4433 5.29637ZM3.8882 14.9L3.88821 14.8999L3.8882 14.9Z" fill="#FFA900" stroke="#FFA900"/>
																</svg>
															</span>
                                                        <span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.4433 5.29637L10.5607 5.57413L10.8611 5.59994L15.8611 6.02948L12.0688 9.31501L11.8409 9.51245L11.9092 9.80614L13.0455 14.6935L8.74909 12.1024L8.49088 11.9467L8.23266 12.1024L3.93621 14.6935L5.07254 9.80614L5.14083 9.51246L4.91294 9.31502L1.11983 6.02865L6.11983 5.59911L6.42024 5.57331L6.5376 5.29557L8.49046 0.674288L10.4433 5.29637ZM3.8882 14.9L3.88821 14.8999L3.8882 14.9Z" fill="#FFA900" stroke="#FFA900"/>
																</svg>
															</span>
                                                        <span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.2734 5.29637L10.3908 5.57413L10.6912 5.59994L15.6912 6.02948L11.8989 9.31501L11.671 9.51245L11.7393 9.80614L12.8756 14.6935L8.57917 12.1024L8.32096 11.9467L8.06274 12.1024L3.76628 14.6935L4.90262 9.80614L4.9709 9.51246L4.74302 9.31502L0.94991 6.02865L5.94991 5.59911L6.25032 5.57331L6.36768 5.29557L8.32054 0.674288L10.2734 5.29637ZM3.71828 14.9L3.71829 14.8999L3.71828 14.9Z" stroke="#FFA900"/>
																</svg>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="one-comm-date">
                                                <div class="post-date">
                                                    <div class="post-date-ico">
															<span>
																<svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M24.7188 2.19019H23.4062V0.00268555H21.2188V2.19019H6.78125V0.00268555H4.59375V2.19019H3.28125C1.47197 2.19019 0 3.66215 0 5.47144V24.7214C0 26.5307 1.47197 28.0027 3.28125 28.0027H24.7188C26.528 28.0027 28 26.5307 28 24.7214V5.47144C28 3.66215 26.528 2.19019 24.7188 2.19019ZM25.8125 24.7214C25.8125 25.3245 25.3218 25.8152 24.7188 25.8152H3.28125C2.67816 25.8152 2.1875 25.3245 2.1875 24.7214V10.2839H25.8125V24.7214ZM25.8125 8.09644H2.1875V5.47144C2.1875 4.86834 2.67816 4.37769 3.28125 4.37769H4.59375V6.56519H6.78125V4.37769H21.2188V6.56519H23.4062V4.37769H24.7188C25.3218 4.37769 25.8125 4.86834 25.8125 5.47144V8.09644Z" fill="#00A94F"></path>
																	<path d="M6.34375 12.5808H4.15625V14.7683H6.34375V12.5808Z" fill="#00A94F"></path>
																	<path d="M10.7188 12.5808H8.53125V14.7683H10.7188V12.5808Z" fill="#00A94F"></path>
																	<path d="M15.0938 12.5808H12.9062V14.7683H15.0938V12.5808Z" fill="#00A94F"></path>
																	<path d="M19.4688 12.5808H17.2812V14.7683H19.4688V12.5808Z" fill="#00A94F"></path>
																	<path d="M23.8438 12.5808H21.6562V14.7683H23.8438V12.5808Z" fill="#00A94F"></path>
																	<path d="M6.34375 16.9558H4.15625V19.1433H6.34375V16.9558Z" fill="#00A94F"></path>
																	<path d="M10.7188 16.9558H8.53125V19.1433H10.7188V16.9558Z" fill="#00A94F"></path>
																	<path d="M15.0938 16.9558H12.9062V19.1433H15.0938V16.9558Z" fill="#00A94F"></path>
																	<path d="M19.4688 16.9558H17.2812V19.1433H19.4688V16.9558Z" fill="#00A94F"></path>
																	<path d="M6.34375 21.3308H4.15625V23.5183H6.34375V21.3308Z" fill="#00A94F"></path>
																	<path d="M10.7188 21.3308H8.53125V23.5183H10.7188V21.3308Z" fill="#00A94F"></path>
																	<path d="M15.0938 21.3308H12.9062V23.5183H15.0938V21.3308Z" fill="#00A94F"></path>
																	<path d="M19.4688 21.3308H17.2812V23.5183H19.4688V21.3308Z" fill="#00A94F"></path>
																	<path d="M23.8438 16.9558H21.6562V19.1433H23.8438V16.9558Z" fill="#00A94F"></path>
																</svg>
															</span>
                                                    </div>
                                                    <div class="post-date-num">
                                                        20.10.2019
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="one-comm-descr">
                                            Очень доволен результатом реально хорошо сработал. Быстро доставили, буду заказывать еще.
                                        </div>
                                    </div>
                                    <!-- / one-comm -->
                                    <!-- one-comm -->
                                    <div class="one-comm">
                                        <div class="one-comm-top">
                                            <div class="one-comm-auth">
                                                <div class="one-comm-thumb">
                                                    <img src="/images/post-author.png" alt="">
                                                </div>
                                                <div class="one-comm-name">
                                                    Роман Андреев
                                                </div>
                                                <div class="one-comm-rat">
                                                    <div class="stars">
															<span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.4433 5.29637L10.5607 5.57413L10.8611 5.59994L15.8611 6.02948L12.0688 9.31501L11.8409 9.51245L11.9092 9.80614L13.0455 14.6935L8.74909 12.1024L8.49088 11.9467L8.23266 12.1024L3.93621 14.6935L5.07254 9.80614L5.14083 9.51246L4.91294 9.31502L1.11983 6.02865L6.11983 5.59911L6.42024 5.57331L6.5376 5.29557L8.49046 0.674288L10.4433 5.29637ZM3.8882 14.9L3.88821 14.8999L3.8882 14.9Z" fill="#FFA900" stroke="#FFA900"/>
																</svg>
															</span>
                                                        <span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.4433 5.29637L10.5607 5.57413L10.8611 5.59994L15.8611 6.02948L12.0688 9.31501L11.8409 9.51245L11.9092 9.80614L13.0455 14.6935L8.74909 12.1024L8.49088 11.9467L8.23266 12.1024L3.93621 14.6935L5.07254 9.80614L5.14083 9.51246L4.91294 9.31502L1.11983 6.02865L6.11983 5.59911L6.42024 5.57331L6.5376 5.29557L8.49046 0.674288L10.4433 5.29637ZM3.8882 14.9L3.88821 14.8999L3.8882 14.9Z" fill="#FFA900" stroke="#FFA900"/>
																</svg>
															</span>
                                                        <span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.4433 5.29637L10.5607 5.57413L10.8611 5.59994L15.8611 6.02948L12.0688 9.31501L11.8409 9.51245L11.9092 9.80614L13.0455 14.6935L8.74909 12.1024L8.49088 11.9467L8.23266 12.1024L3.93621 14.6935L5.07254 9.80614L5.14083 9.51246L4.91294 9.31502L1.11983 6.02865L6.11983 5.59911L6.42024 5.57331L6.5376 5.29557L8.49046 0.674288L10.4433 5.29637ZM3.8882 14.9L3.88821 14.8999L3.8882 14.9Z" fill="#FFA900" stroke="#FFA900"/>
																</svg>
															</span>
                                                        <span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.4433 5.29637L10.5607 5.57413L10.8611 5.59994L15.8611 6.02948L12.0688 9.31501L11.8409 9.51245L11.9092 9.80614L13.0455 14.6935L8.74909 12.1024L8.49088 11.9467L8.23266 12.1024L3.93621 14.6935L5.07254 9.80614L5.14083 9.51246L4.91294 9.31502L1.11983 6.02865L6.11983 5.59911L6.42024 5.57331L6.5376 5.29557L8.49046 0.674288L10.4433 5.29637ZM3.8882 14.9L3.88821 14.8999L3.8882 14.9Z" fill="#FFA900" stroke="#FFA900"/>
																</svg>
															</span>
                                                        <span class="active">
																<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10.2734 5.29637L10.3908 5.57413L10.6912 5.59994L15.6912 6.02948L11.8989 9.31501L11.671 9.51245L11.7393 9.80614L12.8756 14.6935L8.57917 12.1024L8.32096 11.9467L8.06274 12.1024L3.76628 14.6935L4.90262 9.80614L4.9709 9.51246L4.74302 9.31502L0.94991 6.02865L5.94991 5.59911L6.25032 5.57331L6.36768 5.29557L8.32054 0.674288L10.2734 5.29637ZM3.71828 14.9L3.71829 14.8999L3.71828 14.9Z" stroke="#FFA900"/>
																</svg>
															</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="one-comm-date">
                                                <div class="post-date">
                                                    <div class="post-date-ico">
															<span>
																<svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M24.7188 2.19019H23.4062V0.00268555H21.2188V2.19019H6.78125V0.00268555H4.59375V2.19019H3.28125C1.47197 2.19019 0 3.66215 0 5.47144V24.7214C0 26.5307 1.47197 28.0027 3.28125 28.0027H24.7188C26.528 28.0027 28 26.5307 28 24.7214V5.47144C28 3.66215 26.528 2.19019 24.7188 2.19019ZM25.8125 24.7214C25.8125 25.3245 25.3218 25.8152 24.7188 25.8152H3.28125C2.67816 25.8152 2.1875 25.3245 2.1875 24.7214V10.2839H25.8125V24.7214ZM25.8125 8.09644H2.1875V5.47144C2.1875 4.86834 2.67816 4.37769 3.28125 4.37769H4.59375V6.56519H6.78125V4.37769H21.2188V6.56519H23.4062V4.37769H24.7188C25.3218 4.37769 25.8125 4.86834 25.8125 5.47144V8.09644Z" fill="#00A94F"></path>
																	<path d="M6.34375 12.5808H4.15625V14.7683H6.34375V12.5808Z" fill="#00A94F"></path>
																	<path d="M10.7188 12.5808H8.53125V14.7683H10.7188V12.5808Z" fill="#00A94F"></path>
																	<path d="M15.0938 12.5808H12.9062V14.7683H15.0938V12.5808Z" fill="#00A94F"></path>
																	<path d="M19.4688 12.5808H17.2812V14.7683H19.4688V12.5808Z" fill="#00A94F"></path>
																	<path d="M23.8438 12.5808H21.6562V14.7683H23.8438V12.5808Z" fill="#00A94F"></path>
																	<path d="M6.34375 16.9558H4.15625V19.1433H6.34375V16.9558Z" fill="#00A94F"></path>
																	<path d="M10.7188 16.9558H8.53125V19.1433H10.7188V16.9558Z" fill="#00A94F"></path>
																	<path d="M15.0938 16.9558H12.9062V19.1433H15.0938V16.9558Z" fill="#00A94F"></path>
																	<path d="M19.4688 16.9558H17.2812V19.1433H19.4688V16.9558Z" fill="#00A94F"></path>
																	<path d="M6.34375 21.3308H4.15625V23.5183H6.34375V21.3308Z" fill="#00A94F"></path>
																	<path d="M10.7188 21.3308H8.53125V23.5183H10.7188V21.3308Z" fill="#00A94F"></path>
																	<path d="M15.0938 21.3308H12.9062V23.5183H15.0938V21.3308Z" fill="#00A94F"></path>
																	<path d="M19.4688 21.3308H17.2812V23.5183H19.4688V21.3308Z" fill="#00A94F"></path>
																	<path d="M23.8438 16.9558H21.6562V19.1433H23.8438V16.9558Z" fill="#00A94F"></path>
																</svg>
															</span>
                                                    </div>
                                                    <div class="post-date-num">
                                                        20.10.2019
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="one-comm-descr">
                                            Очень доволен результатом реально хорошо сработал. Быстро доставили, буду заказывать еще.
                                        </div>
                                    </div>
                                    <!-- / one-comm -->
                                </div>
                            </div>
                        </div>
                        <!-- / one tab -->
                        <!-- one tab -->
                        <div class="tab-pane fade" id="quest" role="tabpanel" aria-labelledby="quest-tab">
                            <div class="prod-tab-quest">
                                <div class="leave-comm">
                                    <a class="sec-bt" href="#"  data-toggle="modal" data-target="#questM">
                                        Задать вопрос
                                    </a>
                                </div>
                                <div class="prod-tab-tit">
                                    Вопросы
                                </div>

                                <div class="prod-quest">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="heading1">
                                                <button class="" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                    Что делать, если товар был поврежден при перевозке?
                                                </button>
                                            </div>

                                            <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="heading2">
                                                <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                    Есть ли возможность заказать товар с доставкой в другую страну?
                                                </button>
                                            </div>
                                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="heading3">
                                                <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                    Как я могу оплатить свой заказ?
                                                </button>
                                            </div>
                                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="heading4">
                                                <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                    Как отменить заказ?
                                                </button>
                                            </div>
                                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Вы можете отменить заказ по телефону 0800 301 401

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="heading5">
                                                <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                    Как я могу оплатить свой заказ?
                                                </button>
                                            </div>
                                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / one tab -->
                    </div>
                </div>
                <!-- / prod tabs -->

            </div>
        </div>
    </main>
    <!-- / catalog -->

    <!-- other product -->
    <section id="other-product">
        <div class="container">
            <div class="other-prod-tit">
                Сопутствующие товары
            </div>
            <div class="other-prod-body">
                <div class="other-prod-car">
                    <!-- one item -->
                    <div class="one-item">
                        <div class="one-item-in">
                            <div class="one-item-thumb">
                                <a href="#">
                                    <img src="/images/catalog/cat-item-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="one-item-descr">
                                <div class="one-item-tit">
                                    Гольф
                                </div>
                                <div class="one-item-info">
                                    <div class="one-item-price">
                                        <span>24</span> грн
                                    </div>
                                    <div class="one-item-comm">
                                        <a href="#">
                                            Оставить отзыв
                                        </a>
                                    </div>
                                </div>
                                <div class="one-item-bt">
                                    <a href="#" class="def-min-bt">
                                        Купить
                                    </a>
                                    <a href="#" class="item-comp">
                                        <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / one item -->
                    <!-- one item -->
                    <div class="one-item">
                        <div class="one-item-in">
                            <div class="one-item-thumb">
                                <a href="#">
                                    <img src="/images/catalog/cat-item-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="one-item-descr">
                                <div class="one-item-tit">
                                    Мастак
                                </div>
                                <div class="one-item-info">
                                    <div class="one-item-price">
                                        <span>124</span> грн
                                    </div>
                                    <div class="one-item-comm">
                                        <a href="#">
                                            Оставить отзыв
                                        </a>
                                    </div>
                                </div>
                                <div class="one-item-bt">
                                    <a href="#" class="def-min-bt">
                                        Купить
                                    </a>
                                    <a href="#" class="item-comp">
                                        <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / one item -->
                    <!-- one item -->
                    <div class="one-item">
                        <div class="one-item-in">
                            <div class="one-item-thumb">
                                <a href="#">
                                    <img src="/images/catalog/cat-item-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="one-item-descr">
                                <div class="one-item-tit">
                                    Антисапа
                                </div>
                                <div class="one-item-info">
                                    <div class="one-item-price">
                                        <span>2124</span> грн
                                    </div>
                                    <div class="one-item-comm">
                                        <a href="#">
                                            Оставить отзыв
                                        </a>
                                    </div>
                                </div>
                                <div class="one-item-bt">
                                    <a href="#" class="def-min-bt">
                                        Купить
                                    </a>
                                    <a href="#" class="item-comp">
                                        <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / one item -->

                    <!-- one item -->
                    <div class="one-item">
                        <div class="one-item-in">
                            <div class="one-item-thumb">
                                <a href="#">
                                    <img src="/images/catalog/cat-item-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="one-item-descr">
                                <div class="one-item-tit">
                                    Гольф
                                </div>
                                <div class="one-item-info">
                                    <div class="one-item-price">
                                        <span>24</span> грн
                                    </div>
                                    <div class="one-item-comm">
                                        <a href="#">
                                            Оставить отзыв
                                        </a>
                                    </div>
                                </div>
                                <div class="one-item-bt">
                                    <a href="#" class="def-min-bt">
                                        Купить
                                    </a>
                                    <a href="#" class="item-comp">
                                        <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / one item -->
                    <!-- one item -->
                    <div class="one-item">
                        <div class="one-item-in">
                            <div class="one-item-thumb">
                                <a href="#">
                                    <img src="/images/catalog/cat-item-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="one-item-descr">
                                <div class="one-item-tit">
                                    Мастак
                                </div>
                                <div class="one-item-info">
                                    <div class="one-item-price">
                                        <span>124</span> грн
                                    </div>
                                    <div class="one-item-comm">
                                        <a href="#">
                                            Оставить отзыв
                                        </a>
                                    </div>
                                </div>
                                <div class="one-item-bt">
                                    <a href="#" class="def-min-bt">
                                        Купить
                                    </a>
                                    <a href="#" class="item-comp">
                                        <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / one item -->
                    <!-- one item -->
                    <div class="one-item">
                        <div class="one-item-in">
                            <div class="one-item-thumb">
                                <a href="#">
                                    <img src="/images/catalog/cat-item-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="one-item-descr">
                                <div class="one-item-tit">
                                    Антисапа
                                </div>
                                <div class="one-item-info">
                                    <div class="one-item-price">
                                        <span>2124</span> грн
                                    </div>
                                    <div class="one-item-comm">
                                        <a href="#">
                                            Оставить отзыв
                                        </a>
                                    </div>
                                </div>
                                <div class="one-item-bt">
                                    <a href="#" class="def-min-bt">
                                        Купить
                                    </a>
                                    <a href="#" class="item-comp">
                                        <svg width="33" height="29" viewBox="0 0 33 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.7224 16.9919L28.1046 7.73877C28.2058 7.60788 28.2685 7.44559 28.2685 7.26729C28.2685 6.83949 27.9216 6.49262 27.4938 6.49262H18.7683C19.1436 6.37116 19.415 6.01935 19.415 5.60367C19.415 5.08747 18.9967 4.66909 18.4805 4.66909H18.1369C18.6465 4.27091 18.9754 3.6521 18.9754 2.95536C18.9754 1.75379 18.0014 0.779877 16.7999 0.779877C15.5984 0.779877 14.6245 1.75394 14.6245 2.95536C14.6245 3.65225 14.9534 4.27106 15.463 4.66909H15.1193C14.6031 4.66909 14.1847 5.08747 14.1847 5.60367C14.1847 6.01935 14.4563 6.37116 14.8315 6.49262H6.1943L6.19296 6.48993L6.19161 6.49262H6.10575C5.67795 6.49262 5.33108 6.83949 5.33108 7.26729C5.33108 7.47192 5.412 7.65665 5.54154 7.79516L0.877199 17.1415C0.804354 17.2875 0.785507 17.4454 0.809889 17.5952C0.807346 17.6242 0.806 17.6538 0.808991 17.6839C1.07165 20.4263 3.38191 22.5708 6.19296 22.5708C9.00401 22.5708 11.3144 20.4263 11.5771 17.6839C11.5799 17.6536 11.5787 17.6242 11.5762 17.595C11.6006 17.4454 11.5817 17.2875 11.5089 17.1415L6.96763 8.04196H15.7551V25.9077H8.54794C7.68082 25.9077 6.97795 26.6106 6.97795 27.4777C6.97795 27.891 7.31301 28.2261 7.7263 28.2261H25.8734C26.2867 28.2261 26.6218 27.891 26.6218 27.4777C26.6218 26.6106 25.9189 25.9077 25.0518 25.9077H17.8446V8.04181H26.5573L22.0907 16.9918C22.0179 17.1377 21.999 17.2959 22.0234 17.4454C22.0209 17.4744 22.0195 17.5039 22.0225 17.5341C22.2852 20.2765 24.5954 22.421 27.4065 22.421C30.2177 22.421 32.5279 20.2765 32.7906 17.5341C32.7934 17.5039 32.7922 17.4744 32.7897 17.4453C32.8141 17.2959 32.7952 17.1379 32.7224 16.9919ZM2.53858 17.1618L6.19281 9.83946L9.84704 17.1618H2.53858ZM23.7523 17.0122L27.4065 9.68988L31.0607 17.0122H23.7523Z" fill="#F47920"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / one item -->
                </div>
            </div>
        </div>
    </section>
    <!-- / other product -->

@endsection
