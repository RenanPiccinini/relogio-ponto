@extends('layouts.site')

@section('content')

        <!-- Start offCanvas minicart -->
        <div class="offCanvas__minicart" tabindex="-1">
            <div class="minicart__header ">
                <div class="minicart__header--top d-flex justify-content-between align-items-center">
                    <h3 class="minicart__title"> Shopping Cart</h3>
                    <button class="minicart__close--btn" aria-label="minicart close btn">
                        <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
                    </button>
                </div>
                <p class="minicart__header--desc">The organic foods products are limited</p>
            </div>
            <div class="minicart__product">
                <div class="minicart__product--items d-flex">
                    <div class="minicart__thumbnail">
                        <a href="product-details.html"><img src="{{ asset('assets/site/img/product/product1.webp') }}" alt="prduct-img"></a>
                    </div>
                    <div class="minicart__text">
                        <h4 class="minicart__subtitle"><a href="product-details.html">The is Garden Vegetable.</a></h4>
                        <span class="color__variant"><b>Color:</b> Beige</span>
                        <div class="minicart__price">
                            <span class="current__price">$125.00</span>
                            <span class="old__price">$140.00</span>
                        </div>
                        <div class="minicart__text--footer d-flex align-items-center">
                            <div class="quantity__box minicart__quantity">
                                <button type="button" class="quantity__value decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                <label>
                                    <input type="number" class="quantity__number" value="1" />
                                </label>
                                <button type="button" class="quantity__value increase" aria-label="quantity value" value="Increase Value">+</button>
                            </div>
                            <button class="minicart__product--remove" aria-label="minicart remove btn">Remove</button>
                        </div>
                    </div>
                </div>
                <div class="minicart__product--items d-flex">
                    <div class="minicart__thumbnail">
                        <a href="product-details.html"><img src="{{ asset('assets/site/img/product/product2.webp') }}" alt="prduct-img"></a>
                    </div>
                    <div class="minicart__text">
                        <h4 class="minicart__subtitle"><a href="product-details.html">Fresh Tomatoe is organic.</a></h4>
                        <span class="color__variant"><b>Color:</b> Green</span>
                        <div class="minicart__price">
                            <span class="current__price">$115.00</span>
                            <span class="old__price">$130.00</span>
                        </div>
                        <div class="minicart__text--footer d-flex align-items-center">
                            <div class="quantity__box minicart__quantity">
                                <button type="button" class="quantity__value decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                <label>
                                    <input type="number" class="quantity__number" value="1" />
                                </label>
                                <button type="button" class="quantity__value increase" aria-label="quantity value" value="Increase Value">+</button>
                            </div>
                            <button class="minicart__product--remove" aria-label="minicart remove btn">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="minicart__amount">
                <div class="minicart__amount_list d-flex justify-content-between">
                    <span>Sub Total:</span>
                    <span><b>$240.00</b></span>
                </div>
                <div class="minicart__amount_list d-flex justify-content-between">
                    <span>Total:</span>
                    <span><b>$240.00</b></span>
                </div>
            </div>
            <div class="minicart__conditions text-center">
                <input class="minicart__conditions--input" id="accept" type="checkbox">
                <label class="minicart__conditions--label" for="accept">I agree with the <a class="minicart__conditions--link" href="privacy-policy.html">Privacy And Policy</a></label>
            </div>
            <div class="minicart__button d-flex justify-content-center">
                <a class="primary__btn minicart__button--link" href="cart.html">View cart</a>
                <a class="primary__btn minicart__button--link" href="checkout.html">Checkout</a>
            </div>
        </div>
        <!-- End offCanvas minicart -->

    </header>

    <!-- End header area -->

    <main class="main__content_wrapper">
        <!-- Start slider section -->
        <section class="hero__slider--section color-scheme-2 pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 slider2__col--9">
                        <div class="hero__slider2--inner hero__slider--activation swiper">
                            <div class="hero__slider2--wrapper swiper-wrapper">
                                <div class="swiper-slide ">
                                    <div class="hero__slider2--items hero__slider--bg2 slider1">
                                        <div class="hero__slider2--items__inner">
                                            <div class="slider__content2 text-center">
                                                <p class="slider__content2--desc desc1 text-white mb-15">O melhor estilo é ser você!</p>
                                                <h2 class="slider__content2--maintitle text-white h1">Qualidade e Conforto  <br>
                                                    Você Encontra Aqui</h2>
                                                <a class="slider__content2--btn primary__btn" href="#!" rel="nofollow">Veja Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="hero__slider2--items hero__slider--bg2 slider2">
                                        <div class="hero__slider2--items__inner">
                                            <div class="slider__content2 text-center">
                                                <p class="slider__content2--desc desc1 text-white mb-15">Para Todos os Momentos</p>
                                                <h2 class="slider__content2--maintitle text-white h1">Vista-se Bem  <br>
                                                    Com o Melhor</h2>
                                                <a class="slider__content2--btn primary__btn" href="#!" rel="nofollow">Veja Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper__nav--btn swiper-button-next"></div>
                            <div class="swiper__nav--btn swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 banner2__col--3">
                        <div class="banner__sidebar--two banner__items banner__sidebar2">
                            <a class="banner__items--thumbnail position__relative" href="#!">
                                <img class="banner__items--thumbnail__img banner__sidebar2--img" src="{{ asset('assets/site/img/banner/banner-side.jpg') }}" alt="banner-img">
                                <div class="banner__content--style2 banner__sidebar2--content">
                                    <h3 class="banner__content--style2__subtitle">Edição Limitada</h3>
                                    <h2 class="banner__content--style2--title">Oferta Especial </h2>
                                    <span class="banner__content--style2__link">Veja Mais
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.902" height="9.085" viewBox="0 0 10.902 9.085">
                                            <path id="right-arrow" d="M14.673,12.126a.454.454,0,0,0-.626.658l3.485,3.3H8.454a.454.454,0,0,0,0,.908h9.062L14.046,20.3a.454.454,0,1,0,.626.658l3.963-3.775a.908.908,0,0,0-.008-1.292Z" transform="translate(-8 -12.001)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End slider section -->

        <form action="{{ route('pagamento-credito') }}" method="POST">
        @csrf
            <button type="submit">CRÉDITO</button>
        </form>

        <!-- Start shipping section -->
        <section class="shipping__section shipping__style2 section--padding color-scheme-2">
            <div class="container">
                <div class="shipping__style2--inner border-radius-10 d-flex justify-content-between">
                    <div class="shipping__style2--items d-flex align-items-center">
                        <div class="shipping__style2--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29.867" height="35.022" viewBox="0 0 29.867 35.022">
                                <g transform="translate(-37.681 0)">
                                  <g data-name="Group 117" transform="translate(37.681 0)">
                                    <g data-name="Group 116" transform="translate(0 0)">
                                      <path id="Path_75" data-name="Path 75" d="M67.006,6.047A58.257,58.257,0,0,1,52.989.1a.736.736,0,0,0-.749,0A56.662,56.662,0,0,1,38.223,6.047a.737.737,0,0,0-.542.711v7.527a21.655,21.655,0,0,0,6.576,15.822c3.23,3.165,6.992,4.915,8.358,4.915s5.128-1.75,8.358-4.915a21.655,21.655,0,0,0,6.576-15.822V6.758A.737.737,0,0,0,67.006,6.047Zm-.931,8.238a20.211,20.211,0,0,1-6.134,14.769c-3.176,3.112-6.572,4.494-7.326,4.494s-4.151-1.382-7.327-4.494a20.211,20.211,0,0,1-6.134-14.769V7.317A58.019,58.019,0,0,0,52.615,1.59a59.855,59.855,0,0,0,13.46,5.727Z" transform="translate(-37.681 0)" fill="currentColor"/>
                                      <path id="Path_76" data-name="Path 76" d="M85.814,99.41a.737.737,0,0,0-.956-.415c-1.316.519-2.667,1-4.015,1.419a.737.737,0,0,0-.516.7v2.845a.737.737,0,1,0,1.473,0v-2.307c1.209-.391,2.417-.824,3.6-1.289A.736.736,0,0,0,85.814,99.41Z" transform="translate(-77.41 -92.175)" fill="currentColor"/>
                                      <path id="Path_77" data-name="Path 77" d="M170.941,87.683a.737.737,0,0,0,.3-.062l.014-.006a.737.737,0,1,0-.595-1.348l-.012.005a.736.736,0,0,0,.3,1.411Z" transform="translate(-161.138 -80.308)" fill="currentColor"/>
                                      <path id="Path_78" data-name="Path 78" d="M308.871,345.648a.737.737,0,0,0-1.02.214,17.933,17.933,0,0,1-2.117,2.644,18.818,18.818,0,0,1-2.113,1.88.737.737,0,1,0,.893,1.172,20.3,20.3,0,0,0,2.279-2.028,19.388,19.388,0,0,0,2.291-2.863A.737.737,0,0,0,308.871,345.648Z" transform="translate(-285.16 -321.893)" fill="currentColor"/>
                                      <path id="Path_79" data-name="Path 79" d="M276.974,432.067l-.042.025a.737.737,0,1,0,.738,1.275l.049-.029a.737.737,0,1,0-.745-1.271Z" transform="translate(-260.223 -402.419)" fill="currentColor"/>
                                      <path id="Path_80" data-name="Path 80" d="M126.909,160.031a2.4,2.4,0,1,0-3.388,3.388l4.35,4.35a2.4,2.4,0,0,0,3.388,0l9.081-9.081a2.4,2.4,0,0,0-3.388-3.388l-7.387,7.387Zm11.085-3.689a.922.922,0,1,1,1.3,1.3l-9.081,9.081a.923.923,0,0,1-1.3,0l-4.35-4.35a.922.922,0,0,1,1.3-1.3l3.177,3.177a.737.737,0,0,0,1.042,0Z" transform="translate(-116.997 -144.024)" fill="currentColor"/>
                                    </g>
                                  </g>
                                </g>
                            </svg>
                        </div>
                        <div class="shipping__style2--content">
                            <h2 class="shipping__style2--content__title">LOJA SEGURA</h2>
                            <p class="shipping__style2--content__desc">Frete grátis acima de R$300,00</p>
                        </div>
                    </div>
                    <div class="shipping__style2--items d-flex align-items-center">
                        <div class="shipping__style2--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32.65" height="25.024" viewBox="0 0 32.65 25.024">
                                <g id="fast-delivery" transform="translate(0 -59.798)">
                                  <g id="Group_120" data-name="Group 120" transform="translate(6.111 65.92)">
                                    <g id="Group_119" data-name="Group 119" transform="translate(0 0)">
                                      <path id="Path_103" data-name="Path 103" d="M97.921,160.126l-1.113-1.1-.018-2.754a.478.478,0,0,0-.478-.475h0a.478.478,0,0,0-.475.481l.019,2.952a.478.478,0,0,0,.142.337l1.253,1.238a.478.478,0,0,0,.672-.68Z" transform="translate(-95.834 -155.798)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_122" data-name="Group 122" transform="translate(12.594 71.137)">
                                    <g id="Group_121" data-name="Group 121" transform="translate(0 0)">
                                      <path id="Path_104" data-name="Path 104" d="M205.993,240.415s0-.008,0-.012,0-.026-.007-.039l0-.013c0-.012-.006-.024-.01-.036l-.005-.014c0-.011-.009-.022-.013-.033l-.007-.014-.016-.03-.009-.015-.019-.028-.01-.014-.025-.028-.009-.01a.465.465,0,0,0-.038-.034h0l-2.915-2.377a.478.478,0,0,0-.6.741l1.874,1.528h-6.2a.478.478,0,0,0,0,.957h6.2l-1.874,1.528a.478.478,0,1,0,.6.741l2.915-2.377h0a.488.488,0,0,0,.038-.034l.009-.009.025-.028.01-.014.019-.028.009-.015.016-.03.007-.014c0-.011.009-.022.013-.033l.005-.014c0-.012.007-.024.01-.036l0-.013c0-.013,0-.026.007-.039s0-.008,0-.012a.479.479,0,0,0,0-.052A.494.494,0,0,0,205.993,240.415Z" transform="translate(-197.501 -237.611)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_124" data-name="Group 124" transform="translate(0 59.798)">
                                    <g id="Group_123" data-name="Group 123" transform="translate(0 0)">
                                      <path id="Path_105" data-name="Path 105" d="M11.259,64.655a6.708,6.708,0,0,0-.705-.607l.681-.826a.478.478,0,0,0-.738-.609l-.755.916a6.552,6.552,0,0,0-2.655-.77v-.431h.962a.888.888,0,0,0,.887-.887v-.756a.888.888,0,0,0-.887-.887H5.13a.888.888,0,0,0-.887.887v.756a.888.888,0,0,0,.887.887h1v.432a6.555,6.555,0,0,0-2.682.784l-.767-.93a.478.478,0,0,0-.738.609l.7.844a6.707,6.707,0,0,0-.726.635A6.609,6.609,0,0,0,6.608,75.959H6.64a6.609,6.609,0,0,0,4.619-11.3ZM5.2,61.371v-.616h2.78v.616Zm5.425,11.957A5.615,5.615,0,0,1,6.636,75H6.608a5.652,5.652,0,0,1-.026-11.3h.028a5.652,5.652,0,0,1,4.015,9.63Z" transform="translate(0 -59.798)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_126" data-name="Group 126" transform="translate(1.535 64.277)">
                                    <g id="Group_125" data-name="Group 125" transform="translate(0 0)">
                                      <path id="Path_106" data-name="Path 106" d="M29.147,130.033h-.025a5.074,5.074,0,0,0,.024,10.147h.025a5.074,5.074,0,0,0-.024-10.147ZM32.072,138a4.09,4.09,0,0,1-2.905,1.22h-.02a4.117,4.117,0,0,1-.019-8.234h.02A4.117,4.117,0,0,1,32.072,138Z" transform="translate(-24.073 -130.033)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_128" data-name="Group 128" transform="translate(6.889 80.101)">
                                    <g id="Group_127" data-name="Group 127" transform="translate(0 0)">
                                      <path id="Path_107" data-name="Path 107" d="M110.1,378.274a1.439,1.439,0,0,0-1.176.073,1.648,1.648,0,0,0-.79.891,1.551,1.551,0,0,0,.833,2.024,1.415,1.415,0,0,0,.5.092,1.481,1.481,0,0,0,.673-.165,1.648,1.648,0,0,0,.79-.891A1.551,1.551,0,0,0,110.1,378.274Zm-.061,1.685a.693.693,0,0,1-.329.378.5.5,0,0,1-.4.031.6.6,0,0,1-.278-.791.693.693,0,0,1,.329-.378.531.531,0,0,1,.24-.06.457.457,0,0,1,.163.03A.6.6,0,0,1,110.039,379.959Z" transform="translate(-108.024 -378.181)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_130" data-name="Group 130" transform="translate(25.315 80.103)">
                                    <g id="Group_129" data-name="Group 129">
                                      <path id="Path_108" data-name="Path 108" d="M399.045,378.292a1.6,1.6,0,0,0-1.132,2.988,1.415,1.415,0,0,0,.5.092,1.481,1.481,0,0,0,.673-.165,1.648,1.648,0,0,0,.79-.891A1.551,1.551,0,0,0,399.045,378.292Zm-.061,1.685a.693.693,0,0,1-.329.378.5.5,0,0,1-.4.031.6.6,0,0,1-.278-.791.64.64,0,0,1,.568-.438.459.459,0,0,1,.164.03A.6.6,0,0,1,398.984,379.977Z" transform="translate(-396.969 -378.2)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_132" data-name="Group 132" transform="translate(3.238 67.033)">
                                    <g id="Group_131" data-name="Group 131" transform="translate(0 0)">
                                      <path id="Path_109" data-name="Path 109" d="M79.88,179.659h0c-.7-.793-1.424-1.62-2.211-2.528a1.265,1.265,0,0,0-.959-.426l-4.02-.005c.122-.756.24-1.509.349-2.246A1.03,1.03,0,0,0,72,173.259l-7.971,0H62.226a.478.478,0,0,0,0,.957h1.806l7.971,0a.1.1,0,0,1,.075.025.1.1,0,0,1,.015.074c-.232,1.579-.508,3.234-.779,4.844-.394,2.324-.8,4.708-1.1,7.033l0,.028h-3.35l-.98,0h-.2l-2.3,0h-.1l-2.374-.005-2.421-.005a2.779,2.779,0,0,0-.972-1.02l-.038-.023-.065-.037-.057-.031-.057-.029-.074-.035L57.178,185c-.041-.018-.083-.035-.125-.051s-.087-.031-.131-.046l-.072-.021-.057-.016-.1-.024-.027-.006c-.04-.009-.08-.016-.121-.023h0a2.772,2.772,0,0,0-1.31.1h0l-.1.035-.04.014-.08.031-.034.013-.032.014-.048.021-.1.046-.022.011-.006,0q-.059.03-.116.062l-.047.028-.063.038-.064.041-.037.025a3.248,3.248,0,0,0-.888.9H51.917l.41-2.53a.478.478,0,0,0-.944-.153c-.286,1.77-.5,3.085-.5,3.085v.007l-.1.651A1.232,1.232,0,0,0,52,188.662h1.031a3.156,3.156,0,0,0,.167.585,2.791,2.791,0,0,0,1.611,1.618,2.705,2.705,0,0,0,.961.176,3.159,3.159,0,0,0,2.888-2.1c.035-.091.065-.183.091-.275l10.406.013,1.294,0h1.012a3.152,3.152,0,0,0,.163.564,2.791,2.791,0,0,0,1.611,1.618,2.724,2.724,0,0,0,.967.178,2.887,2.887,0,0,0,1.311-.322,3.283,3.283,0,0,0,1.571-1.778c.032-.084.059-.168.084-.253h.6a1.429,1.429,0,0,0,1.39-1.181c.353-2.3.723-4.722,1.015-6.853A1.25,1.25,0,0,0,79.88,179.659Zm-26.77,7.5c-.005.019-.01.038-.015.058s-.015.056-.022.085-.011.048-.016.072-.01.045-.014.068-.011.06-.016.091-.005.031-.008.047c-.006.037-.01.074-.015.112l0,.014H52a.275.275,0,0,1-.272-.316l.036-.242h1.345Zm4.787.953s0,.005,0,.008a2.483,2.483,0,0,1-.129.482,2.1,2.1,0,0,1-2.616,1.367,1.846,1.846,0,0,1-1.06-1.074,2.223,2.223,0,0,1-.151-.712c0-.006,0-.012,0-.018a2.379,2.379,0,0,1,.013-.361v0c0-.036.009-.071.015-.107l0-.022c0-.029.011-.058.017-.087l.007-.034c.006-.026.012-.051.019-.077l.01-.039c.007-.025.015-.051.023-.076l.011-.037c.012-.037.025-.074.039-.111v0c.018-.048.038-.095.059-.141l.013-.03c.022-.047.045-.094.07-.139l.006-.01a2.126,2.126,0,0,1,2.08-1.141l.047.006.06.011c.039.008.077.016.115.026l.027.008c.046.013.091.028.136.045l.087.036.053.025.03.014.071.038.009,0a1.876,1.876,0,0,1,.786.9A2.267,2.267,0,0,1,57.9,188.114Zm12.128-.389H69.16l-10.276-.013a3.228,3.228,0,0,0-.053-.553l2.076,0,4.295.009h4.887Q70.056,187.452,70.026,187.725Zm6.3.408v.006a2.487,2.487,0,0,1-.126.465,2.328,2.328,0,0,1-1.11,1.264,1.809,1.809,0,0,1-2.565-.972,2.221,2.221,0,0,1-.151-.7s0-.007,0-.01a2.37,2.37,0,0,1,.011-.362l0-.018q.005-.047.013-.093l.006-.036c0-.025.009-.05.014-.075l.009-.045c.005-.023.011-.046.017-.069s.008-.031.012-.047.014-.048.021-.072l.012-.041c.012-.037.025-.075.039-.112a2.328,2.328,0,0,1,1.11-1.264c.033-.017.067-.033.1-.048l.033-.014.069-.028.039-.014.065-.022.04-.012.065-.018.039-.01.07-.015.034-.007.092-.014.012,0c.035,0,.07-.007.1-.01h.028l.076,0h.026c.047,0,.095,0,.142.006h0c.048,0,.1.011.142.019l.026,0q.068.013.136.031L75,185.8c.046.013.093.028.138.045l.082.034.049.023.027.013A2.069,2.069,0,0,1,76.321,188.133Zm2.905-7.605c-.291,2.124-.66,4.542-1.012,6.837a.479.479,0,0,1-.445.37h-.458a3.187,3.187,0,0,0-.221-1.163,2.805,2.805,0,0,0-1.384-1.519l-.056-.026L75.6,185c-.039-.017-.079-.033-.119-.049a2.762,2.762,0,0,0-2,.02q-.14.055-.278.125a3.283,3.283,0,0,0-1.571,1.778c-.023.062-.044.124-.064.186l-.017.054q-.023.076-.042.152l-.01.04c-.015.063-.028.126-.039.19,0,.013,0,.027-.006.04q-.014.087-.024.174c0,.005,0,.011,0,.016h-.438c.037-.325.076-.652.1-.834.008-.063.015-.126.023-.19.3-2.318.706-4.763,1.1-7.128l.04-.238.014-.08q.137-.807.27-1.6l4.171.006a.307.307,0,0,1,.238.1c.789.91,1.514,1.739,2.216,2.535A.29.29,0,0,1,79.226,180.528Z" transform="translate(-50.773 -173.254)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_134" data-name="Group 134" transform="translate(24.791 72.095)">
                                    <g id="Group_133" data-name="Group 133" transform="translate(0 0)">
                                      <path id="Path_110" data-name="Path 110" d="M394.788,254.861c-.576-.657-1.147-1.312-1.7-1.946a.8.8,0,0,0-.609-.274l-2.277,0h0a.931.931,0,0,0-.9.763l-.069.422c-.155.953-.316,1.939-.469,2.909h0a.791.791,0,0,0,.176.638.807.807,0,0,0,.616.278l4.313,0h0a.924.924,0,0,0,.9-.772c.08-.552.12-.828.2-1.381A.794.794,0,0,0,394.788,254.861Zm-.953,1.834-4.094,0c.144-.907.293-1.825.438-2.715l.062-.382,2.178,0c.518.6,1.056,1.216,1.6,1.835C393.946,255.924,393.907,256.2,393.835,256.695Z" transform="translate(-388.755 -252.638)" fill="currentColor"/>
                                    </g>
                                  </g>
                                </g>
                              </svg>

                        </div>
                        <div class="shipping__style2--content">
                            <h2 class="shipping__style2--content__title">ACEITAMOS CARTÕES</h2>
                            <p class="shipping__style2--content__desc">Visa, Paypal, Master</p>
                        </div>
                    </div>

                    <div class="shipping__style2--items d-flex align-items-center">
                        <div class="shipping__style2--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30.326" height="33.112" viewBox="0 0 30.326 33.112">
                                <g id="support" transform="translate(-17.756)">
                                  <g id="Group_118" data-name="Group 118" transform="translate(17.756)">
                                    <path id="Path_81" data-name="Path 81" d="M44.886,13.687H44.8V11.679a11.679,11.679,0,0,0-23.359,0v2.008h-.492a3.337,3.337,0,0,0-3.2,3.442v5.122a3.237,3.237,0,0,0,3.154,3.319h3.075a.779.779,0,0,0,.741-.814c0-.015,0-.031,0-.046V14.671c0-.492-.287-.984-.738-.984h-.9V11.679a10.04,10.04,0,0,1,20.08,0v2.008h-.9c-.451,0-.738.492-.738.984v10.04a.779.779,0,0,0,.691.857l.046,0h.943l-.082.123a6.475,6.475,0,0,1-5.2,2.582,4.057,4.057,0,0,0-8.032.779,4.1,4.1,0,0,0,4.1,4.057,4.221,4.221,0,0,0,2.951-1.27,3.606,3.606,0,0,0,.984-1.967,8.114,8.114,0,0,0,6.516-3.237l.779-1.147a2.79,2.79,0,0,0,2.869-2.828V17.539C48.083,15.777,46.771,13.687,44.886,13.687Zm-21.8,10.245H20.954A1.6,1.6,0,0,1,19.4,22.3c0-.015,0-.029,0-.044V17.13a1.7,1.7,0,0,1,1.557-1.8h2.131Zm12.663,6.762a2.418,2.418,0,0,1-1.762.779,2.5,2.5,0,0,1-2.459-2.418,2.418,2.418,0,1,1,4.836,0v0A2.172,2.172,0,0,1,35.748,30.694Zm10.7-8.032c0,1.106-1.065,1.27-1.557,1.27H43.165V15.326h1.721c.9,0,1.557,1.27,1.557,2.213Z" transform="translate(-17.756)" fill="currentColor"/>
                                  </g>
                                </g>
                            </svg>
                        </div>
                        <div class="shipping__style2--content">
                            <h2 class="shipping__style2--content__title">SUPORTE 24/7</h2>

                            <p class="shipping__style2--content__desc">Atendimento 24h</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shipping section -->

        <!-- Start banner section -->
        <section class="banner__section section--padding pt-0">
            <div class="container-fluid">
                <div class="row mb--n28">
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-28">
                        <div class="banner__items">
                            <a class="banner__items--thumbnail position__relative" href="#!">
                                <img class="banner__items--thumbnail__img" src="{{ asset('assets/site/img/banner/banner-man.jpg') }}" alt="banner-img" style="height: 250px; object-fit: cover">
                                <div class="banner__items--content one">
                                    <h2 class="banner__items--content__title">Masculino </h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 mb-28">
                        <div class="banner__items">
                            <a class="banner__items--thumbnail position__relative" href="#!">
                                <img class="banner__items--thumbnail__img" src="{{ asset('assets/site/img/banner/banner-woman.jpg') }}" alt="banner-img" style="height: 250px; object-fit: cover">
                                <div class="banner__items--content two">
                                    <h2 class="banner__items--content__title">Feminino</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start product section -->
        <section class="product__section section--padding color-scheme-2 pt-0">
            <div class="container">
                <div class="product__section--header d-flex justify-content-between mb-40">
                    <div class="section__heading text-center">
                        <h2 class="section__heading--maintitle">Mais Vendidos</h2>
                    </div>
                    <ul class="product__tab--btn style2 d-flex justify-content-center">
                        <li class="product__tab--btn__list style2 active" data-toggle="tab" data-target="#camisetas">Camisetas </li>
                        <li class="product__tab--btn__list style2" data-toggle="tab" data-target="#calcas">Calças </li>
                        <li class="product__tab--btn__list style2" data-toggle="tab" data-target="#jaquetasMoletons">Jaquetas e Moletons </li>
                    </ul>
                </div>
                <div class="tab_content">
                    <div id="camisetas" class="tab_pane active show">
                        <div class="product__section--inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">

                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#!">
                                                <img class="product__items--img product__primary--img" src="{{ asset('assets/site/img/product/camiseta1.png') }}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="{{ asset('assets/site/img/product/camiseta1.png') }}" alt="product-img">
                                            </a>
                                            <div class="product__badge style2">
                                                <span class="product__badge--items style2 sale">-80%</span>
                                            </div>
                                            <ul class="product__items--action style2">
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            <a class="product__items--content__tag" href="#!">Camiseta</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Camiseta Preta</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">R$ 99,90</span>
                                                <span class="old__price">R$ 200,00</span>
                                            </div>

                                            <a class="product__items--action__cart--btn primary__btn btn__style2" href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text"> Comprar </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#!">
                                                <img class="product__items--img product__primary--img" src="{{ asset('assets/site/img/product/camiseta2.png') }}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="{{ asset('assets/site/img/product/camiseta2.png') }}" alt="product-img">
                                            </a>
                                            <ul class="product__items--action style2">
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            <a class="product__items--content__tag" href="#!">Camiseta</a>
                                            <h3 class="product__items--content__title h4"><a href="#!">Oversize Preta</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">R$ 99,90</span>
                                                <span class="old__price">R$ 210,00</span>
                                            </div>
                                            <a class="product__items--action__cart--btn primary__btn btn__style2" href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text">Comprar</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#!">
                                                <img class="product__items--img product__primary--img" src="{{ asset('assets/site/img/product/camiseta1.png') }}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="{{ asset('assets/site/img/product/camiseta1.png') }}" alt="product-img">
                                            </a>
                                            <div class="product__badge style2">
                                                <span class="product__badge--items style2 sale">New</span>
                                            </div>
                                            <ul class="product__items--action style2">
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            <a class="product__items--content__tag" href="#!">Camiseta</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Camiseta Preta</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">R$ 99,90</span>
                                                <span class="old__price">R$ 200,00</span>
                                            </div>

                                            <a class="product__items--action__cart--btn primary__btn btn__style2" href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text"> Comprar </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#!">
                                                <img class="product__items--img product__primary--img" src="{{ asset('assets/site/img/product/camiseta2.png') }}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="{{ asset('assets/site/img/product/camiseta2.png') }}" alt="product-img">
                                            </a>
                                            <ul class="product__items--action style2">
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            <a class="product__items--content__tag" href="#!">Camiseta</a>
                                            <h3 class="product__items--content__title h4"><a href="#!">Oversize Preta</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">R$ 99,90</span>
                                                <span class="old__price">R$ 210,00</span>
                                            </div>
                                            <a class="product__items--action__cart--btn primary__btn btn__style2" href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text">Comprar</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="calcas" class="tab_pane">
                        <div class="product__section--inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">

                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#!">
                                                <img class="product__items--img product__primary--img" src="{{ asset('assets/site/img/product/calca1.png') }}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="{{ asset('assets/site/img/product/calca1.png') }}" alt="product-img">
                                            </a>
                                            <div class="product__badge style2">
                                                <span class="product__badge--items style2 sale">-80%</span>
                                            </div>
                                            <ul class="product__items--action style2">
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            <a class="product__items--content__tag" href="#!">Calça</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Calça Preta</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">R$ 99,90</span>
                                                <span class="old__price">R$ 200,00</span>
                                            </div>

                                            <a class="product__items--action__cart--btn primary__btn btn__style2" href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text"> Comprar </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#!">
                                                <img class="product__items--img product__primary--img" src="{{ asset('assets/site/img/product/calca2.png') }}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="{{ asset('assets/site/img/product/calca2.png') }}" alt="product-img">
                                            </a>
                                            <ul class="product__items--action style2">
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            <a class="product__items--content__tag" href="#!">Calça</a>
                                            <h3 class="product__items--content__title h4"><a href="#!">Slim Preta</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">R$ 99,90</span>
                                                <span class="old__price">R$ 210,00</span>
                                            </div>
                                            <a class="product__items--action__cart--btn primary__btn btn__style2" href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text">Comprar</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#!">
                                                <img class="product__items--img product__primary--img" src="{{ asset('assets/site/img/product/calca1.png') }}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="{{ asset('assets/site/img/product/calca1.png') }}" alt="product-img">
                                            </a>
                                            <div class="product__badge style2">
                                                <span class="product__badge--items style2 sale">New</span>
                                            </div>
                                            <ul class="product__items--action style2">
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            <a class="product__items--content__tag" href="#!">Calça</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Calça Preta</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">R$ 99,90</span>
                                                <span class="old__price">R$ 200,00</span>
                                            </div>

                                            <a class="product__items--action__cart--btn primary__btn btn__style2" href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text"> Comprar </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#!">
                                                <img class="product__items--img product__primary--img" src="{{ asset('assets/site/img/product/calca2.png') }}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="{{ asset('assets/site/img/product/calca2.png') }}" alt="product-img">
                                            </a>
                                            <ul class="product__items--action style2">
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            <a class="product__items--content__tag" href="#!">Calça</a>
                                            <h3 class="product__items--content__title h4"><a href="#!">Slim Preta</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">R$ 99,90</span>
                                                <span class="old__price">R$ 210,00</span>
                                            </div>
                                            <a class="product__items--action__cart--btn primary__btn btn__style2" href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text">Comprar</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="jaquetasMoletons" class="tab_pane">
                        <div class="product__section--inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">

                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#!">
                                                <img class="product__items--img product__primary--img" src="{{ asset('assets/site/img/product/moletom1.png') }}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="{{ asset('assets/site/img/product/moletom1.png') }}" alt="product-img">
                                            </a>
                                            <div class="product__badge style2">
                                                <span class="product__badge--items style2 sale">-80%</span>
                                            </div>
                                            <ul class="product__items--action style2">
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            <a class="product__items--content__tag" href="#!">Moletom</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Moletom Preto</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">R$ 99,90</span>
                                                <span class="old__price">R$ 200,00</span>
                                            </div>

                                            <a class="product__items--action__cart--btn primary__btn btn__style2" href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text"> Comprar </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#!">
                                                <img class="product__items--img product__primary--img" src="{{ asset('assets/site/img/product/moletom2.png') }}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="{{ asset('assets/site/img/product/moletom2.png') }}" alt="product-img">
                                            </a>
                                            <ul class="product__items--action style2">
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            <a class="product__items--content__tag" href="#!">Moletom</a>
                                            <h3 class="product__items--content__title h4"><a href="#!">Canguru Preto</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">R$ 99,90</span>
                                                <span class="old__price">R$ 210,00</span>
                                            </div>
                                            <a class="product__items--action__cart--btn primary__btn btn__style2" href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text">Comprar</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#!">
                                                <img class="product__items--img product__primary--img" src="{{ asset('assets/site/img/product/moletom1.png') }}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="{{ asset('assets/site/img/product/moletom1.png') }}" alt="product-img">
                                            </a>
                                            <div class="product__badge style2">
                                                <span class="product__badge--items style2 sale">New</span>
                                            </div>
                                            <ul class="product__items--action style2">
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            <a class="product__items--content__tag" href="#!">Moletom</a>
                                            <h3 class="product__items--content__title h4"><a href="product-details.html">Moletom Preto</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">R$ 99,90</span>
                                                <span class="old__price">R$ 200,00</span>
                                            </div>

                                            <a class="product__items--action__cart--btn primary__btn btn__style2" href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text"> Comprar </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-30">
                                    <div class="product__items ">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#!">
                                                <img class="product__items--img product__primary--img" src="{{ asset('assets/site/img/product/moletom2.png') }}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="{{ asset('assets/site/img/product/moletom2.png') }}" alt="product-img">
                                            </a>
                                            <ul class="product__items--action style2">
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" data-open="modal1" href="javascript:void(0)">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                                <li class="product__items--action__list style2">
                                                    <a class="product__items--action__btn style2" href="wishlist.html">
                                                        <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                            <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Wishlist</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__items--content text-center">
                                            <a class="product__items--content__tag" href="#!">Moletom</a>
                                            <h3 class="product__items--content__title h4"><a href="#!">Moletom Preto</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">R$ 99,90</span>
                                                <span class="old__price">R$ 210,00</span>
                                            </div>
                                            <a class="product__items--action__cart--btn primary__btn btn__style2" href="cart.html">
                                                <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                                    <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                                </svg>
                                                <span class="add__to--cart__text">Comprar</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End product section -->

        <!-- Start banner section -->
        <div class="banner__video--section">
            <div class="container-fluid">
                <div class="banner__video--thumbnail position__relative">
                    <img class="banner__video--thumbnail__img display-block" src="{{ asset('assets/site/img/banner/banner-video.jpg') }}" alt="banner-bideo-thumbnail">
                    <div class="bideo__play">
                        <a class="bideo__play--icon glightbox" href="https://vimeo.com/115041822" data-gallery="video">
                            <svg id="play" xmlns="http://www.w3.org/2000/svg" width="46.302" height="46.302" viewBox="0 0 46.302 46.302">
                                <g id="Group_193" data-name="Group 193" transform="translate(0 0)">
                                <path id="Path_116" data-name="Path 116" d="M39.521,6.781a23.151,23.151,0,0,0-32.74,32.74,23.151,23.151,0,0,0,32.74-32.74ZM23.151,44.457A21.306,21.306,0,1,1,44.457,23.151,21.33,21.33,0,0,1,23.151,44.457Z" fill="currentColor"/>
                                <g id="Group_188" data-name="Group 188" transform="translate(15.588 11.19)">
                                    <g id="Group_187" data-name="Group 187">
                                    <path id="Path_117" data-name="Path 117" d="M190.3,133.213l-13.256-8.964a3,3,0,0,0-4.674,2.482v17.929a2.994,2.994,0,0,0,4.674,2.481l13.256-8.964a3,3,0,0,0,0-4.963Zm-1.033,3.435-13.256,8.964a1.151,1.151,0,0,1-1.8-.953V126.73a1.134,1.134,0,0,1,.611-1.017,1.134,1.134,0,0,1,1.185.063l13.256,8.964a1.151,1.151,0,0,1,0,1.907Z" transform="translate(-172.366 -123.734)" fill="currentColor"/>
                                    </g>
                                </g>
                                <g id="Group_190" data-name="Group 190" transform="translate(28.593 5.401)">
                                    <g id="Group_189" data-name="Group 189">
                                    <path id="Path_118" data-name="Path 118" d="M328.31,70.492a18.965,18.965,0,0,0-10.886-10.708.922.922,0,1,0-.653,1.725,17.117,17.117,0,0,1,9.825,9.664.922.922,0,1,0,1.714-.682Z" transform="translate(-316.174 -59.724)" fill="currentColor"/>
                                    </g>
                                </g>
                                <g id="Group_192" data-name="Group 192" transform="translate(22.228 4.243)">
                                    <g id="Group_191" data-name="Group 191">
                                    <path id="Path_119" data-name="Path 119" d="M249.922,47.187a19.08,19.08,0,0,0-3.2-.27.922.922,0,0,0,0,1.845,17.245,17.245,0,0,1,2.889.243.922.922,0,1,0,.31-1.818Z" transform="translate(-245.801 -46.917)" fill="currentColor"/>
                                    </g>
                                </g>
                                </g>
                            </svg>
                            <span class="visually-hidden">Play</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End banner section -->

        <!-- Start shipping section -->
        <section class="shipping__section shipping_mt position__relative section--padding pt-0">
            <div class="container">
                <div class="shipping__section--inner border-radius-10 d-flex justify-content-center">
                    <div class="shipping__items text-center">
                        <div class="shipping__items--icon">
                            <svg id="Group_118" data-name="Group 118" xmlns="http://www.w3.org/2000/svg" width="38.02" height="41.512" viewBox="0 0 38.02 41.512">
                                <path id="Path_81" data-name="Path 81" d="M51.769,17.16h-.1V14.642a14.642,14.642,0,1,0-29.284,0V17.16h-.616a4.184,4.184,0,0,0-4.007,4.316V27.9a4.059,4.059,0,0,0,3.954,4.16h3.855a.976.976,0,0,0,.929-1.021c0-.019,0-.039,0-.058V18.393c0-.616-.36-1.233-.925-1.233h-1.13V14.642a12.587,12.587,0,0,1,25.174,0V17.16h-1.13c-.565,0-.925.616-.925,1.233V30.98a.976.976,0,0,0,.867,1.074l.058,0h1.182l-.1.154a8.117,8.117,0,0,1-6.525,3.237,5.086,5.086,0,0,0-10.07.976A5.138,5.138,0,0,0,38.1,41.512a5.292,5.292,0,0,0,3.7-1.593,4.521,4.521,0,0,0,1.233-2.466A10.172,10.172,0,0,0,51.2,33.394l.976-1.439a3.5,3.5,0,0,0,3.6-3.545V21.989C55.776,19.78,54.132,17.16,51.769,17.16ZM24.437,30H21.765a2,2,0,0,1-1.954-2.052c0-.018,0-.036,0-.055V21.475a2.13,2.13,0,0,1,1.952-2.261h2.672Zm15.875,8.477a3.031,3.031,0,0,1-2.209.976,3.134,3.134,0,0,1-3.083-3.031,3.031,3.031,0,0,1,6.062,0v0A2.723,2.723,0,0,1,40.312,38.481Zm13.409-10.07C53.721,29.8,52.385,30,51.769,30H49.611V19.215h2.158c1.13,0,1.952,1.593,1.952,2.774Z" transform="translate(-17.756)" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="shipping__items--content">
                            <h3 class="shipping__items--content__title">Suporte</h3>
                        </div>
                    </div>
                    <div class="shipping__items text-center">
                        <div class="shipping__items--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35.402" height="41.512" viewBox="0 0 35.402 41.512">
                                <g id="secure-shield" transform="translate(-37.681 0)">
                                  <g id="Group_117" data-name="Group 117" transform="translate(37.681 0)">
                                    <g id="Group_116" data-name="Group 116" transform="translate(0 0)">
                                      <path id="Path_75" data-name="Path 75" d="M72.44,7.168A69.052,69.052,0,0,1,55.826.121a.873.873,0,0,0-.888,0A67.162,67.162,0,0,1,38.323,7.168a.873.873,0,0,0-.642.842v8.922a25.668,25.668,0,0,0,7.795,18.754c3.828,3.751,8.287,5.825,9.906,5.825s6.078-2.074,9.906-5.825a25.668,25.668,0,0,0,7.794-18.754V8.01A.873.873,0,0,0,72.44,7.168Zm-1.1,9.764a23.956,23.956,0,0,1-7.27,17.506c-3.765,3.689-7.789,5.326-8.684,5.326s-4.92-1.638-8.684-5.326a23.956,23.956,0,0,1-7.27-17.506V8.673A68.771,68.771,0,0,0,55.382,1.885,70.947,70.947,0,0,0,71.336,8.673Z" transform="translate(-37.681 0)" fill="currentColor"/>
                                      <path id="Path_76" data-name="Path 76" d="M86.83,99.5A.873.873,0,0,0,85.7,99c-1.56.615-3.161,1.18-4.759,1.682a.873.873,0,0,0-.612.833v3.372a.873.873,0,1,0,1.746,0v-2.734c1.433-.464,2.865-.977,4.265-1.528A.873.873,0,0,0,86.83,99.5Z" transform="translate(-76.869 -90.921)" fill="currentColor"/>
                                      <path id="Path_77" data-name="Path 77" d="M171.078,87.957a.874.874,0,0,0,.35-.073l.016-.007a.873.873,0,1,0-.705-1.6l-.014.006a.873.873,0,0,0,.353,1.672Z" transform="translate(-159.458 -79.216)" fill="currentColor"/>
                                      <path id="Path_78" data-name="Path 78" d="M309.9,345.67a.873.873,0,0,0-1.209.253,21.256,21.256,0,0,1-2.509,3.134,22.316,22.316,0,0,1-2.5,2.228.873.873,0,1,0,1.059,1.389,24.077,24.077,0,0,0,2.7-2.4,22.985,22.985,0,0,0,2.716-3.393A.873.873,0,0,0,309.9,345.67Z" transform="translate(-281.793 -317.514)" fill="currentColor"/>
                                      <path id="Path_79" data-name="Path 79" d="M277.049,432.086l-.05.029a.873.873,0,1,0,.875,1.511l.058-.034a.873.873,0,1,0-.883-1.507Z" transform="translate(-257.195 -396.943)" fill="currentColor"/>
                                      <path id="Path_80" data-name="Path 80" d="M127.667,161.038a2.84,2.84,0,0,0-4.016,4.016l5.156,5.156a2.84,2.84,0,0,0,4.016,0l10.764-10.764a2.84,2.84,0,0,0-4.016-4.016l-8.756,8.756Zm13.139-4.373a1.093,1.093,0,1,1,1.546,1.546l-10.764,10.764a1.094,1.094,0,0,1-1.546,0l-5.156-5.156a1.093,1.093,0,0,1,1.546-1.546l3.766,3.766a.873.873,0,0,0,1.235,0Z" transform="translate(-115.918 -142.064)" fill="currentColor"/>
                                    </g>
                                  </g>
                                </g>
                              </svg>

                        </div>
                        <div class="shipping__items--content">
                            <h3 class="shipping__items--content__title">Compra Segura</h3>
                        </div>
                    </div>
                    <div class="shipping__items text-center">
                        <div class="shipping__items--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54.164" height="41.512" viewBox="0 0 54.164 41.512">
                                <g id="fast-delivery" transform="translate(0 -59.798)">
                                  <g id="Group_120" data-name="Group 120" transform="translate(10.138 69.954)">
                                    <g id="Group_119" data-name="Group 119" transform="translate(0 0)">
                                      <path id="Path_103" data-name="Path 103" d="M99.3,162.978l-1.846-1.823-.03-4.569a.793.793,0,0,0-.793-.788h-.005a.793.793,0,0,0-.788.8l.032,4.9a.793.793,0,0,0,.236.559l2.079,2.054a.793.793,0,0,0,1.115-1.129Z" transform="translate(-95.834 -155.798)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_122" data-name="Group 122" transform="translate(20.893 78.609)">
                                    <g id="Group_121" data-name="Group 121" transform="translate(0 0)">
                                      <path id="Path_104" data-name="Path 104" d="M211.589,242.262c0-.007,0-.013,0-.02,0-.022-.006-.043-.011-.064l-.006-.022c0-.02-.01-.04-.017-.059l-.008-.023c-.007-.018-.014-.037-.022-.055l-.012-.024q-.013-.025-.027-.05l-.015-.024c-.01-.016-.021-.031-.032-.046l-.017-.023c-.013-.016-.027-.031-.041-.046l-.014-.016a.777.777,0,0,0-.062-.057h0l-4.836-3.943a.793.793,0,0,0-1,1.23l3.109,2.535H198.294a.793.793,0,0,0,0,1.587h10.277l-3.109,2.535a.793.793,0,1,0,1,1.23l4.836-3.943h0a.806.806,0,0,0,.062-.057l.014-.016c.014-.015.028-.03.041-.047l.017-.022c.011-.015.022-.03.032-.046l.015-.024q.014-.024.027-.049l.012-.024c.008-.018.015-.036.022-.054l.008-.023c.006-.019.012-.039.017-.059l.006-.022c0-.021.008-.043.011-.064,0-.007,0-.013,0-.02a.793.793,0,0,0,0-.086A.812.812,0,0,0,211.589,242.262Z" transform="translate(-197.501 -237.611)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_124" data-name="Group 124" transform="translate(0 59.798)">
                                    <g id="Group_123" data-name="Group 123" transform="translate(0 0)">
                                      <path id="Path_105" data-name="Path 105" d="M18.678,67.855a11.127,11.127,0,0,0-1.17-1.007l1.13-1.37a.793.793,0,0,0-1.224-1.01l-1.253,1.519a10.87,10.87,0,0,0-4.405-1.277v-.715h1.6a1.473,1.473,0,0,0,1.471-1.471V61.269A1.473,1.473,0,0,0,13.352,59.8H8.51a1.473,1.473,0,0,0-1.471,1.471v1.254A1.473,1.473,0,0,0,8.51,63.994h1.66v.716a10.874,10.874,0,0,0-4.449,1.3L4.447,64.468a.793.793,0,0,0-1.224,1.01l1.155,1.4a11.128,11.128,0,0,0-1.2,1.053,10.963,10.963,0,0,0,7.788,18.678h.054a10.963,10.963,0,0,0,7.662-18.753ZM8.626,62.407V61.385h4.611v1.023Zm9,19.836a9.315,9.315,0,0,1-6.617,2.778h-.046a9.376,9.376,0,0,1-.044-18.753h.046a9.376,9.376,0,0,1,6.661,15.975Z" transform="translate(0 -59.798)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_126" data-name="Group 126" transform="translate(2.546 67.228)">
                                    <g id="Group_125" data-name="Group 125" transform="translate(0 0)">
                                      <path id="Path_106" data-name="Path 106" d="M32.49,130.033h-.041a8.417,8.417,0,0,0,.039,16.833h.042a8.417,8.417,0,0,0-.04-16.833Zm4.852,13.223a6.785,6.785,0,0,1-4.82,2.024h-.034a6.83,6.83,0,0,1-.032-13.66h.033a6.83,6.83,0,0,1,4.852,11.636Z" transform="translate(-24.073 -130.033)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_128" data-name="Group 128" transform="translate(11.428 93.479)">
                                    <g id="Group_127" data-name="Group 127" transform="translate(0 0)">
                                      <path id="Path_107" data-name="Path 107" d="M111.468,378.335a2.388,2.388,0,0,0-1.95.12,2.733,2.733,0,0,0-1.31,1.479,2.574,2.574,0,0,0,1.382,3.358,2.347,2.347,0,0,0,.834.153,2.458,2.458,0,0,0,1.117-.274,2.733,2.733,0,0,0,1.31-1.479A2.573,2.573,0,0,0,111.468,378.335Zm-.1,2.8a1.15,1.15,0,0,1-.546.627.821.821,0,0,1-.669.051.992.992,0,0,1-.461-1.312,1.15,1.15,0,0,1,.546-.627.881.881,0,0,1,.4-.1.757.757,0,0,1,.27.049A.992.992,0,0,1,111.366,381.131Z" transform="translate(-108.024 -378.181)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_130" data-name="Group 130" transform="translate(41.995 93.481)">
                                    <g id="Group_129" data-name="Group 129">
                                      <path id="Path_108" data-name="Path 108" d="M400.413,378.352a2.656,2.656,0,0,0-1.878,4.957,2.346,2.346,0,0,0,.834.153,2.458,2.458,0,0,0,1.117-.274,2.734,2.734,0,0,0,1.31-1.479A2.573,2.573,0,0,0,400.413,378.352Zm-.1,2.8a1.15,1.15,0,0,1-.545.627.821.821,0,0,1-.669.051.992.992,0,0,1-.461-1.312,1.063,1.063,0,0,1,.943-.727.761.761,0,0,1,.272.05A.991.991,0,0,1,400.311,381.148Z" transform="translate(-396.97 -378.2)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_132" data-name="Group 132" transform="translate(5.371 71.8)">
                                    <g id="Group_131" data-name="Group 131" transform="translate(0 0)">
                                      <path id="Path_109" data-name="Path 109" d="M99.059,183.88h0c-1.162-1.316-2.362-2.688-3.667-4.194a2.1,2.1,0,0,0-1.591-.707l-6.669-.009c.2-1.255.4-2.5.578-3.727a1.708,1.708,0,0,0-1.718-1.979c-5.553,0-8.517,0-13.222-.007l-3,0h0a.793.793,0,0,0,0,1.587l3,0c4.706,0,7.669,0,13.223.007a.163.163,0,0,1,.124.042.16.16,0,0,1,.024.123c-.385,2.619-.843,5.364-1.292,8.036-.654,3.856-1.323,7.81-1.827,11.667l-.006.047H79.4l-1.4,0h-.55l-1.626,0H75.5l-3.811-.007h-.162l-3.937-.009-4.017-.009a4.61,4.61,0,0,0-1.613-1.693L61.894,193l-.108-.062-.094-.051-.095-.048-.123-.058-.076-.035c-.068-.03-.137-.058-.207-.085s-.144-.052-.217-.076l-.12-.036-.094-.027c-.055-.015-.111-.028-.166-.041l-.044-.01c-.067-.015-.134-.027-.2-.039h-.006a4.6,4.6,0,0,0-2.173.158l-.006,0c-.057.018-.114.038-.17.058l-.066.024-.132.052-.056.022-.054.024-.08.035q-.08.036-.158.076l-.037.018-.01.005q-.1.05-.192.1l-.079.046-.105.063-.106.068-.062.042a5.388,5.388,0,0,0-1.473,1.49h-.839l-1.876,0c.147-.906.391-2.412.68-4.2a.793.793,0,1,0-1.566-.254c-.475,2.937-.829,5.117-.829,5.117s0,0,0,.006v.006l-.159,1.079a2.043,2.043,0,0,0,2.021,2.341h1.711a5.236,5.236,0,0,0,.278.97,4.631,4.631,0,0,0,2.672,2.684,4.488,4.488,0,0,0,1.594.292,5.241,5.241,0,0,0,4.791-3.48c.057-.151.107-.3.151-.457l17.262.022,2.147,0h0c.511,0,1.024,0,1.535,0H85.1a5.232,5.232,0,0,0,.271.935,4.631,4.631,0,0,0,2.672,2.684,4.519,4.519,0,0,0,1.6.295,4.789,4.789,0,0,0,2.175-.534,5.446,5.446,0,0,0,2.606-2.949c.052-.139.1-.279.14-.419h.989a2.371,2.371,0,0,0,2.306-1.959c.586-3.814,1.2-7.833,1.684-11.369A2.074,2.074,0,0,0,99.059,183.88ZM54.65,196.324c-.009.032-.017.064-.025.1-.012.047-.025.094-.036.141s-.018.08-.026.12-.016.075-.023.113-.018.1-.026.15c0,.026-.009.052-.012.077-.009.062-.017.123-.024.185,0,.008,0,.015,0,.023H52.816a.457.457,0,0,1-.452-.524l.059-.4,2.121,0h.11Zm7.942,1.582s0,.009,0,.013a4.119,4.119,0,0,1-.214.8,3.477,3.477,0,0,1-4.339,2.267A3.062,3.062,0,0,1,56.28,199.2a3.688,3.688,0,0,1-.251-1.182c0-.01,0-.02,0-.03a3.946,3.946,0,0,1,.022-.6v0c.007-.059.015-.118.025-.177l.006-.036c.008-.048.018-.1.028-.145,0-.018.008-.037.012-.056.01-.043.02-.085.031-.127.006-.021.011-.043.017-.065.012-.042.024-.084.037-.126.006-.02.012-.041.019-.061.02-.062.041-.123.065-.184v0c.03-.079.063-.157.1-.234l.022-.049c.037-.078.075-.156.116-.231l.01-.017a3.527,3.527,0,0,1,3.451-1.893l.078.011.1.018c.064.013.128.027.191.044l.045.013c.076.022.151.046.225.074.049.018.1.038.144.059l.088.042.05.024c.04.02.079.042.118.064l.014.008a3.112,3.112,0,0,1,1.3,1.495A3.761,3.761,0,0,1,62.592,197.906Zm20.119-.645-1.436,0-17.047-.022a5.356,5.356,0,0,0-.087-.917l3.443.008,7.125.015h.576l1.11,0h6.42Q82.762,196.807,82.711,197.26Zm10.443.677s0,.006,0,.01a4.124,4.124,0,0,1-.209.772,3.862,3.862,0,0,1-1.841,2.1,3,3,0,0,1-4.255-1.612,3.684,3.684,0,0,1-.25-1.165c0-.006,0-.011,0-.017a3.931,3.931,0,0,1,.018-.6c0-.01,0-.02,0-.03q.009-.077.021-.154l.01-.06c.007-.042.015-.083.023-.125.005-.025.01-.049.016-.074s.018-.076.028-.114.013-.052.02-.077.023-.08.036-.12c.007-.023.013-.045.021-.068.02-.062.042-.124.065-.186a3.862,3.862,0,0,1,1.841-2.1c.055-.028.111-.054.166-.079l.054-.023.114-.047.064-.023.107-.037.067-.021.108-.03.065-.017.116-.025.057-.011q.076-.014.153-.023l.02,0c.058-.007.116-.012.174-.016l.047,0,.126,0h.044c.079,0,.157,0,.235.011h.006c.079.007.158.018.236.032l.042.007q.113.021.225.052l.041.012c.077.022.154.047.23.075.046.018.092.036.137.056l.082.038.045.022A3.431,3.431,0,0,1,93.154,197.937Zm4.819-12.617c-.482,3.523-1.094,7.535-1.68,11.341a.794.794,0,0,1-.737.614H94.8a5.286,5.286,0,0,0-.366-1.93,4.654,4.654,0,0,0-2.3-2.52l-.092-.044-.086-.039c-.065-.028-.131-.056-.2-.081a4.582,4.582,0,0,0-3.318.033q-.233.091-.461.207a5.446,5.446,0,0,0-2.606,2.949c-.039.1-.073.205-.106.309-.01.03-.018.06-.027.09q-.037.126-.069.252c-.005.022-.012.044-.017.066q-.037.157-.064.315c0,.022-.007.044-.011.066q-.024.144-.04.289c0,.009,0,.018,0,.026h-.727c.062-.538.127-1.082.163-1.384.013-.1.025-.209.039-.315.492-3.846,1.172-7.9,1.831-11.825l.066-.4.022-.133q.227-1.339.448-2.655l6.92.009a.51.51,0,0,1,.394.16c1.309,1.51,2.512,2.885,3.677,4.205A.481.481,0,0,1,97.974,185.32Z" transform="translate(-50.773 -173.254)" fill="currentColor"/>
                                    </g>
                                  </g>
                                  <g id="Group_134" data-name="Group 134" transform="translate(41.126 80.198)">
                                    <g id="Group_133" data-name="Group 133" transform="translate(0 0)">
                                      <path id="Path_110" data-name="Path 110" d="M398.762,256.326c-.956-1.09-1.9-2.176-2.812-3.229a1.334,1.334,0,0,0-1.011-.454l-3.778-.005h0a1.545,1.545,0,0,0-1.5,1.266l-.114.7c-.257,1.581-.524,3.216-.777,4.826h0a1.312,1.312,0,0,0,.292,1.059,1.339,1.339,0,0,0,1.023.461l7.155.005h0a1.533,1.533,0,0,0,1.5-1.281c.133-.916.2-1.374.33-2.29A1.317,1.317,0,0,0,398.762,256.326Zm-1.581,3.042-6.792-.005c.238-1.5.486-3.028.727-4.5l.1-.634,3.613,0c.86.994,1.751,2.017,2.652,3.044C397.367,258.089,397.3,258.542,397.181,259.368Z" transform="translate(-388.755 -252.638)" fill="currentColor"/>
                                    </g>
                                  </g>
                                </g>
                            </svg>
                        </div>
                        <div class="shipping__items--content">
                            <h3 class="shipping__items--content__title">Envio Rápido</h3>
                        </div>
                    </div>
                    <div class="shipping__items text-center">
                        <div class="shipping__items--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35.354" height="41.512" viewBox="0 0 35.354 41.512">
                                <g id="refund" transform="translate(-37.974)">
                                  <path id="Path_100" data-name="Path 100" d="M155.7,167.836h1.122a.406.406,0,1,1,0,.813h-1.778a.608.608,0,0,0,0,1.216h.7v.283a.608.608,0,0,0,1.216,0v-.289a1.623,1.623,0,0,0-.143-3.239H155.7a.407.407,0,1,1,0-.813h1.778a.608.608,0,0,0,0-1.216h-.514v-.283a.608.608,0,0,0-1.216,0v.283H155.7a1.623,1.623,0,1,0,0,3.245Z" transform="translate(-106.693 -150.428)" fill="currentColor"/>
                                  <path id="Path_101" data-name="Path 101" d="M122.2,137.92a4.665,4.665,0,0,0,3.725-2.029,8.2,8.2,0,0,0,0-9.354,4.434,4.434,0,0,0-7.45,0,8.2,8.2,0,0,0,0,9.354A4.664,4.664,0,0,0,122.2,137.92Zm-3.972-6.706c0-3.027,1.782-5.49,3.972-5.49s3.973,2.463,3.973,5.49-1.782,5.49-3.973,5.49S118.232,134.241,118.232,131.214Z" transform="translate(-72.633 -114.413)" fill="currentColor"/>
                                  <path id="Path_102" data-name="Path 102" d="M64.646,13.772h-.761V12.23a.894.894,0,0,0-1.417-.726l-1.3.936V7.507L67.789,9.27a5.465,5.465,0,0,0,3.439,5.907.608.608,0,0,0,1.2.147l.812-3.05A2.717,2.717,0,0,0,71.311,8.95l-2.653-.707h0L61.169,6.248V2.716A2.719,2.719,0,0,0,58.452,0H40.69a2.719,2.719,0,0,0-2.716,2.716V8.391a.608.608,0,1,0,1.216,0V6.036a5.472,5.472,0,0,0,4.82-4.82H55.132a5.472,5.472,0,0,0,4.82,4.82v7.28l-3.345,2.409a1.375,1.375,0,0,0,0,2.232l3.345,2.409v7.2a5.472,5.472,0,0,0-4.82,4.82H44.01a5.472,5.472,0,0,0-4.82-4.82V10.824a.608.608,0,0,0-1.216,0V30.885A2.715,2.715,0,0,0,40.69,33.6h2.864a2.7,2.7,0,0,0,.293,1.983,2.727,2.727,0,0,0,.426.557l.047.046.024.023a2.7,2.7,0,0,0,1.154.636l2.653.707.021.005,14.49,3.86q.132.035.265.057a2.717,2.717,0,0,0,3.058-1.982l.707-2.653,0-.013,1.059-3.974a.608.608,0,0,0-1.175-.313l-.914,3.432a5.465,5.465,0,0,0-5.9,3.417L49.02,36.527a5.46,5.46,0,0,0-.366-2.925h9.8a2.715,2.715,0,0,0,2.716-2.716V21.241l1.3.936a.894.894,0,0,0,1.417-.726V19.909h.761a3.391,3.391,0,0,1,2.736,1.506,5.879,5.879,0,0,1,1.084,3.422,5.065,5.065,0,0,1-5.3,5.06.639.639,0,0,0-.154,1.265,8.457,8.457,0,0,0,7.041-1.788,8.8,8.8,0,0,0,3.207-6.828A8.705,8.705,0,0,0,64.646,13.772Zm4.328-4.186L71,10.125a1.5,1.5,0,0,1,1.064,1.835l-.539,2.024A4.255,4.255,0,0,1,68.974,9.586ZM39.19,4.81V2.716a1.5,1.5,0,0,1,1.5-1.5h2.094A4.256,4.256,0,0,1,39.19,4.81Zm20.762,0a4.256,4.256,0,0,1-3.594-3.594h2.133a1.5,1.5,0,0,1,1.461,1.5ZM40.69,32.385a1.5,1.5,0,0,1-1.5-1.5V28.791a4.256,4.256,0,0,1,3.594,3.594H40.69Zm7.145,3.826-2.023-.539a1.5,1.5,0,0,1-1.063-1.835l.063-.236H47.3A4.247,4.247,0,0,1,47.835,36.211ZM62.728,37.7a4.212,4.212,0,0,1,2.622-.544l-.539,2.025a1.488,1.488,0,0,1-.7.911,1.489,1.489,0,0,1-1.138.152L60.952,39.7A4.214,4.214,0,0,1,62.728,37.7Zm-2.776-6.815a1.5,1.5,0,0,1-1.5,1.5H56.358a4.256,4.256,0,0,1,3.594-3.594v2.094Zm9.33-2.451a7.4,7.4,0,0,1-1.61,1.009l.065-.061a6.226,6.226,0,0,0,1.946-4.546c0-2.955-1.925-6.144-5.036-6.144h-.839a1.139,1.139,0,0,0-1.138,1.138v.992l-1.755-1.264,0,0L57.318,16.97a.159.159,0,0,1,0-.259l3.59-2.585.017-.012,1.745-1.257v.993a1.139,1.139,0,0,0,1.138,1.138h.839a7.488,7.488,0,0,1,7.4,7.558A7.586,7.586,0,0,1,69.282,28.435Z" transform="translate(0)" fill="currentColor"/>
                                </g>
                              </svg>

                        </div>
                        <div class="shipping__items--content">
                            <h3 class="shipping__items--content__title">Melhor Preço</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shipping section -->

        <!-- Start instagram section -->
        <div class="instagram__section section--padding pt-0">
            <div class="container-fluid p-0">
                <div class="instagram__section--inner instagram__swiper--activation swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://instagram.com/_mazzuli?igshid=NTc4MTIwNjQ2YQ==" >
                                    <img class="instagram__thumbnail--img display-block" src="{{ asset('assets/site/img/product/camiseta1.png') }}" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://instagram.com/_mazzuli?igshid=NTc4MTIwNjQ2YQ==" >
                                    <img class="instagram__thumbnail--img display-block" src="{{ asset('assets/site/img/product/moletom1.png') }}" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://instagram.com/_mazzuli?igshid=NTc4MTIwNjQ2YQ==" >
                                    <img class="instagram__thumbnail--img display-block" src="{{ asset('assets/site/img/product/calca1.png') }}" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://instagram.com/_mazzuli?igshid=NTc4MTIwNjQ2YQ==" >
                                    <img class="instagram__thumbnail--img display-block" src="{{ asset('assets/site/img/product/camiseta2.png') }}" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://instagram.com/_mazzuli?igshid=NTc4MTIwNjQ2YQ==" >
                                    <img class="instagram__thumbnail--img display-block" src="{{ asset('assets/site/img/product/moletom2.png') }}" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="instagram__thumbnail position__relative">
                                <a class="instagram__thumbnail--link display-block" target="_blank" href="https://instagram.com/_mazzuli?igshid=NTc4MTIwNjQ2YQ==" >
                                    <img class="instagram__thumbnail--img display-block" src="{{ asset('assets/site/img/product/calca2.png') }}" alt="instagram-img">
                                    <span class="instagram__social--icon"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.198" height="25.199" viewBox="0 0 25.198 25.199">
                                        <defs>
                                        <radialGradient  cx="0.133" cy="1.005" r="1.305" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.09" stop-color="#fa8f21"/>
                                            <stop offset="0.78" stop-color="#d82d7e"/>
                                        </radialGradient>
                                        <radialGradient  cx="0.606" cy="1.05" r="1.029" gradientTransform="translate(0)" gradientUnits="objectBoundingBox">
                                            <stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
                                            <stop offset="1" stop-color="#8c3aaa"/>
                                        </radialGradient>
                                        </defs>
                                        <path  data-name="Path 145" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                        <path  data-name="Path 146" d="M8.4,12.6a4.2,4.2,0,1,1,4.2,4.2,4.2,4.2,0,0,1-4.2-4.2m-2.271,0A6.47,6.47,0,1,0,12.6,6.13,6.469,6.469,0,0,0,6.13,12.6M17.813,5.873a1.512,1.512,0,1,0,1.513-1.511h0a1.513,1.513,0,0,0-1.512,1.511M7.509,22.855a6.963,6.963,0,0,1-2.34-.433,3.916,3.916,0,0,1-1.449-.942,3.887,3.887,0,0,1-.942-1.448,6.957,6.957,0,0,1-.433-2.34c-.061-1.328-.073-1.727-.073-5.092s.013-3.762.073-5.092a7.01,7.01,0,0,1,.433-2.34A3.916,3.916,0,0,1,3.72,3.719a3.883,3.883,0,0,1,1.449-.942,6.957,6.957,0,0,1,2.34-.433c1.328-.061,1.727-.073,5.09-.073s3.762.013,5.092.073a7.01,7.01,0,0,1,2.34.433,3.9,3.9,0,0,1,1.449.942,3.9,3.9,0,0,1,.942,1.449,6.957,6.957,0,0,1,.433,2.34c.061,1.329.073,1.727.073,5.092s-.012,3.762-.073,5.092a6.99,6.99,0,0,1-.433,2.34,4.172,4.172,0,0,1-2.392,2.391,6.957,6.957,0,0,1-2.34.433c-1.328.061-1.727.073-5.092.073s-3.762-.012-5.09-.073M7.4.076A9.239,9.239,0,0,0,4.347.662,6.18,6.18,0,0,0,2.115,2.115,6.156,6.156,0,0,0,.662,4.347,9.241,9.241,0,0,0,.076,7.4C.014,8.748,0,9.178,0,12.6s.014,3.851.076,5.194a9.241,9.241,0,0,0,.585,3.058,6.159,6.159,0,0,0,1.453,2.232,6.2,6.2,0,0,0,2.232,1.453,9.247,9.247,0,0,0,3.058.585c1.344.061,1.773.076,5.194.076s3.851-.014,5.194-.076a9.241,9.241,0,0,0,3.058-.585,6.442,6.442,0,0,0,3.685-3.685,9.216,9.216,0,0,0,.585-3.058c.061-1.344.075-1.773.075-5.194s-.014-3.851-.075-5.194a9.238,9.238,0,0,0-.585-3.058,6.2,6.2,0,0,0-1.453-2.232A6.165,6.165,0,0,0,20.853.662,9.226,9.226,0,0,0,17.795.076C16.451.015,16.022,0,12.6,0S8.749.014,7.4.076" transform="translate(0 0)" fill="currentColor"/>
                                    </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <!-- End instagram section -->

    </main>

@endsection
