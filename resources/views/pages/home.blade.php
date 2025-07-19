@extends('layouts.app')

@section('title', 'Dahai PV - Sitio web oficial')

@section('content')
    <div class="headerelement">
        <div class="headerelement-video d-none d-xl-block">
            <video id="video" preload="metadata" loop autoplay muted playsinline webkit-playsinline x5-video-player-type="h5" x5-video-player-fullscreen="true" data-object-fit="cover" x5-video-orientation="portrait" data-autoplay>
                <source src="https://qiniu.mfdemo.cn/test/2fbb9ec8b5b3c8da02a1cf537cf2ee72-20240409094917.mp4">
            </video>
        </div>
        <div class="headerelement-title">
            <div class="t1">Nuevas energías <br> Nuevo mundo</div>
            <div class="t2">Soluciones personalizadas <br> Fabricante de energía solar</div>
        </div>
    </div>

    <div class="mainContainer">
        <div class="about">
            <div class="t">
                <p>Sobre nosotros</p>
                <img src="{{ asset('uploads/image/20240117/65a73f89947ba.svg') }}" alt="">
            </div>
            <div class="title">NUEVA ENERGÍA</div>
            <div class="title" style="transform: translateY(-5px)">NUEVO MUNDO</div>
            <div class="des">
                <p>Fundada en 2011 y propiedad de una empresa central, Dahai Photovoltaic es un fabricante de energía renovable con una considerable capacidad de producción de módulos solares de alta eficiencia de 5GW y una impresionante capacidad de producción de silicio de 10GW. Operamos una línea de producción de módulos automatizados de última generación, capaz de producir módulos con múltiples cabinas 166-210 unidades. Nuestra gama de productos ofrece una gama de potencia de salida que varía de 365W a 670W.</p>
                <p>Dahai Photovoltaic es un pionero en el campo de la energía fotovoltaica distribuida en China. Bajo la guía de nuestro concepto de marca "Nueva energía, nuevo mundo", nuestra motivación se refleja en nuestro concepto de cliente primero. Estamos firmemente comprometidos con la creación de energía verde, Abogar por la restauración de la ecología de la tierra y construir un entorno verde y cero carbono.</p>
                <p>Our strong commitment to professionalism, design, R & D and manufacturing enables us to provide our valued customers with excellent photovoltaic products, comprehensive system solutions and related services.</p>
            </div>
            <div class="btn">
                <a href="{{ route('company') }}">Per saperne di più</a>
            </div>
        </div>

        <div class="range">
            <div class="dom1">
                <div class="t">Solución Integral Fotovoltaica</div>
                <div class="title">Nuestra misión</div>
                <div class="des">
                    <p>Como fabricante de energía solar, estamos comprometidos a proporcionar productos solares confiables e innovadores utilizando tecnología avanzada y procesos de fabricación respetuosos con el medio ambiente. Nuestro equipo está formado por expertos profesionales que trabajan incansablemente para garantizar que todos los productos se esfuerzan por la excelencia y producen una excelente producción de energía con la mejor eficiencia e innovación. Nuestro objetivo es proporcionar productos solares de alta calidad que permitan a las personas, las comunidades y las empresas reducir su huella ambiental y adoptar un futuro más sostenible. En el mar de la energía solar, estamos convencidos de que la energía solar tiene el poder de proporcionar energía limpia y sostenible al mundo y desempeña un papel vital en la solución de los problemas ambientales. Es por eso que nuestra misión es fabricar células fotovoltaicas de alta gama y productos de energía verde para empresas y consumidores.</p>
                    <p>Con un almacén en una ubicación estratégica en todo el mundo, el mar ofrece un ecosistema eficiente de ventas a servicios, y ofrecemos una garantía líder en la industria y soporte en el sitio para cada producto. Ofrecemos servicios personalizados y soluciones de sistemas integrales, uno a uno, adaptadas a sus necesidades específicas, para que la energía solar sea confiable y asequible para todos.</p>
                </div>
            </div>
            <div class="swiper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">z
                            <a class="sItem" href="{{ route('products.solar-modules') }}">
                                <div class="icon">
                                    <img src="{{ asset('images/r1.png') }}" alt="">
                                </div>
                                <div class="pt">Módulos fotovoltaicos</div>
                                <div class="txt">Un panel fotovoltaico es un dispositivo capaz de convertir la energía solar en energía eléctrica.</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="sItem" href="{{ route('products.inverters') }}">
                                <div class="icon">
                                    <img src="{{ asset('images/r2.png') }}" alt="">
                                </div>
                                <div class="pt">Inversor</div>
                                <div class="txt">Elija optimizadores de potencia de nuestra cartera para obtener la máxima potencia y la máxima producción de energía.</div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="sItem" href="{{ route('products.storage-solutions') }}">
                                <div class="icon">
                                    <img src="{{ asset('uploads/image/20231228/658d62a33e6b0.svg') }}" alt="">
                                </div>
                                <div class="pt">Batería</div>
                                <div class="txt"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="sItem" href="{{ route('products.ev-charger') }}">
                                <div class="icon">
                                    <img src="{{ asset('uploads/image/20231228/658d637f1d827.svg') }}" alt="">
                                </div>
                                <div class="pt">Pila de carga</div>
                                <div class="txt"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="main-container">
            <div id="shopify-section-template" class="shopify-section spec_highlights">
                <div class="spec_highlights_inner" id="spec_highlights_inner">
                    <div id="panels" style="--data-blocks: 5">
                        <div class="P1_P4_sticky_wrapper">
                            <div class="card card-2">
                                <div class="text-animation-wrapper" style="background-image: url({{ asset('images/bg.png') }})">
                                    <div class="bg-image"></div>
                                    <div class="text-container">
                                        <div class="spec-message"></div>
                                        <div class="mainTitle">
                                            <div class="ScrollText scroll-number">
                                                <ul class="text-list">
                                                    @for($i = 0; $i <= 9; $i++)
                                                        <li>{{ $i }}</li>
                                                    @endfor
                                                </ul>
                                            </div>
                                            <div class="text-comma ScrollText">
                                                <ul>
                                                    <li>,</li>
                                                </ul>
                                            </div>
                                            <div class="ScrollText scroll-number">
                                                <ul class="text-list">
                                                    @for($i = 0; $i <= 9; $i++)
                                                        <li>{{ $i }}</li>
                                                    @endfor
                                                </ul>
                                            </div>
                                            <div class="ScrollText scroll-number">
                                                <ul class="text-list">
                                                    @for($i = 0; $i <= 9; $i++)
                                                        <li>{{ $i }}</li>
                                                    @endfor
                                                </ul>
                                            </div>
                                            <div class="text-units ScrollText">
                                                <ul class="units">
                                                    <li class="unit" data-unit=""><span></span></li>
                                                    <li class="unit" data-unit="+"><span>+</span></li>
                                                    <li class="unit" data-unit="GW"><span>GW</span></li>
                                                    <li class="unit" data-unit=""><span></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="spec-des"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="specs-mobile-only">
                        <div class="specs-lists">
                            <div class="spec-item">
                                <div class="spec-item-inner">
                                    <span class="subtitle">Base De Fabricación</span>
                                    <h3>
                                        <div class="featured-product-new">
                                            <div class="featured-prod__feature hidden-phone">
                                                <div class="featured-prod__feature-item">
                                                    <div class="featured-prod__feature-item-right">
                                                        <div class="animated-number">
                                                            <span class="animated-number_item">
                                                                <span class="animated-number_digits">
                                                                    <span>4</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </h3>
                                    <div class="des">
                                        <p style="text-wrap: wrap;">Tenemos cuatro plantas de producción de paneles solares. Además, tenemos líneas de producción adicionales para la producción de inversores, baterías y cargadores de vehículos eléctricos.<br/></p>
                                    </div>
                                </div>
                            </div>
                            <div class="spec-item">
                                <div class="spec-item-inner">
                                    <span class="subtitle">Empleados existentes</span>
                                    <h3>
                                        <div class="featured-product-new">
                                            <div class="featured-prod__feature hidden-phone">
                                                <div class="featured-prod__feature-item">
                                                    <div class="featured-prod__feature-item-right">
                                                        <div class="animated-number">
                                                            <span class="animated-number_item">
                                                                <span class="animated-number_digits">
                                                                    <span>1</span>
                                                                </span>
                                                            </span>
                                                            <span class="animated-number_item">
                                                                <span class="animated-number_digits">
                                                                    <span>0</span>
                                                                </span>
                                                            </span>
                                                            <span class="animated-number_item">
                                                                <span class="animated-number_digits">
                                                                    <span>0</span>
                                                                </span>
                                                            </span>
                                                            <span class="animated-number_item">
                                                                <span class="animated-number_digits">
                                                                    <span>0</span>
                                                                </span>
                                                            </span>
                                                            <span>+</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </h3>
                                    <div class="des">
                                        <p>Comprometidos con la investigación continua y la innovación en aplicaciones de energía sostenible.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="spec-item">
                                <div class="spec-item-inner">
                                    <span class="subtitle">Capacidad anual de módulos solares de alta eficiencia</span>
                                    <h3>
                                        <div class="featured-product-new">
                                            <div class="featured-prod__feature hidden-phone">
                                                <div class="featured-prod__feature-item">
                                                    <div class="featured-prod__feature-item-right">
                                                        <div class="animated-number">
                                                            <span class="animated-number_item">
                                                                <span class="animated-number_digits">
                                                                    <span>5</span>
                                                                </span>
                                                            </span>
                                                            <span>GW</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </h3>
                                    <div class="des">
                                        <p>100% línea de producción totalmente automática</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="team" style="background: url({{ asset('images/team.png') }}) no-repeat; background-size: cover; padding: 18vw 0 5vw 0;">
            <div class="content">
                <div class="t">Ocupación</div>
                <div class="title">Ser parte de nuestro equipo</div>
                <a href="{{ route('career') }}">to the career page</a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    new WOW().init();
    
    if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
        document.addEventListener("WeixinJSBridgeReady", function () {
            document.getElementById("video").play();
        }, false);
    }

    var swiper = new Swiper('.range .swiper-container', {
        speed: 1000,
        init: true,
        loop: true,
        slidesPerView: 1,
        autoplay: {
            disableOnInteraction: false,
        },
        spaceBetween: 18,
        pagination: {
            el: '.range .swiper-pagination',
            clickable: true
        },
        breakpoints: {
            1024: {
                slidesPerView: 4
            },
            1450: {
                slidesPerView: 4
            }
        }
    });

    function animateNums(parentElem, childElem) {
        document.querySelectorAll(parentElem).forEach(section => {
            var position = section.querySelector(childElem).getBoundingClientRect();
            if (position.top >= 0 && position.top <= (window.innerHeight / 2)) {
                section.querySelectorAll('.animated-number').forEach(element => {
                    if (!element.classList.contains('active')) {
                        element.querySelectorAll('.animated-number_item').forEach(elem2 => {
                            let digitHeight = elem2.clientHeight,
                                digitElement = elem2.querySelector('.animated-number_digits'),
                                childCount = digitElement.childElementCount,
                                animatCalc = digitHeight * (childCount - 1);

                            digitElement.style.transform = 'translate(0, -' + animatCalc + 'px)';
                        });
                        element.classList.add('active');
                    }
                });
            }
        });
    }

    function animateNums_on_resize(parentElem) {
        document.querySelectorAll(parentElem).forEach(section => {
            section.querySelectorAll('.animated-number').forEach(element => {
                if (element.classList.contains('active')) {
                    element.querySelectorAll('.animated-number_item').forEach(elem2 => {
                        let digitHeight = elem2.clientHeight,
                            digitElement = elem2.querySelector('.animated-number_digits'),
                            childCount = digitElement.childElementCount,
                            animatCalc = digitHeight * (childCount - 1);
                        digitElement.style.transform = 'translate(0, -' + animatCalc + 'px)';
                    });
                }
            });
        });
    }

    if (document.querySelectorAll('.featured-product-new').length > 0) {
        window.addEventListener('scroll', function () {
            animateNums('.featured-product-new', '.featured-prod__feature');
        });

        window.addEventListener('resize', function () {
            animateNums_on_resize('.featured-product-new');
        }, true);
    }

    window.specData = {
        "spec1": {
            "message": "Base De Fabricación",
            "count": "4",
            "unit": "",
            "bgImage": "./images/bg.png",
            "des": "<p style=\"text-wrap: wrap;\">Tenemos cuatro plantas de producción de paneles solares. Además, tenemos líneas de producción adicionales para la producción de inversores, baterías y cargadores de vehículos eléctricos.<br/></p>"
        },
        "spec2": {
            "message": "Empleados existentes",
            "count": "1000",
            "unit": "+",
            "bgImage": "./images/bg.png",
            "des": "<p>Comprometidos con la investigación continua y la innovación en aplicaciones de energía sostenible.</p>"
        },
        "spec3": {
            "message": "Capacidad anual de módulos solares de alta eficiencia",
            "count": "5",
            "unit": "GW",
            "bgImage": "./images/bg.png",
            "des": "<p>100% línea de producción totalmente automática</p><p><br/></p>"
        }
    };

    $('.search a').click(function(){
        var keyword = $('.search input').val();
        if(!/^\s*$/.test(keyword)){
            location.href = '/search-'+keyword+'.html';
        }
    });
</script>
<script type="text/javascript" src="{{ asset('js/setcookie.js') }}"></script>
@endpush