<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{ asset('frontend/assets/images/gradient/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/gradient/favicon.png" type="image/x-icon">
    <title>HairCommerce </title>

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/remixicon.css') }}">
    <!-- Slick slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/slick.css') }}">
    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/animate.css') }}">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/themify-icons.css') }}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/bootstrap.css') }}">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">

</head>

<body class="theme-color-29">

    <!-- header start -->
    @include('frontend.include.header')
    <!-- header end -->


    <!-- Home slider -->
    <section class="p-0">
        <div class="slider-animate home-slider">
            <div>
                <div class="home height-apply p-bottom">
                    <img src="{{ asset('frontend/assets/images/gradient/slider/1.jpg') }}" alt=""
                        class="bg-img blur-up lazyload">
                    <div class="container-lg">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain height-apply">
                                    <div>
                                        <h4>save 30%</h4>
                                        <h1>special products</h1><a href="category-page.html"
                                            class="btn btn-solid btn-gradient animated">shop
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="home height-apply p-bottom">
                    <img src="{{ asset('frontend/assets/images/gradient/slider/2.jpg') }}" alt=""
                        class="bg-img blur-up lazyload">
                    <div class="container-lg">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain height-apply">
                                    <div>
                                        <h4>save 30%</h4>
                                        <h1>special products</h1><a href="category-page.html"
                                            class="btn btn-solid btn-gradient animated">shop
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home slider end -->

    <!-- service layout -->
    <div class="container">
        <section class="service border-section small-section">
            <div class="row">
                <div class="col-md-4 service-block">
                    <div class="media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -117 679.99892 679">
                            <path
                                d="m12.347656 378.382812h37.390625c4.371094 37.714844 36.316407 66.164063 74.277344 66.164063 37.96875 0 69.90625-28.449219 74.28125-66.164063h241.789063c4.382812 37.714844 36.316406 66.164063 74.277343 66.164063 37.96875 0 69.902344-28.449219 74.285157-66.164063h78.890624c6.882813 0 12.460938-5.578124 12.460938-12.460937v-352.957031c0-6.882813-5.578125-12.464844-12.460938-12.464844h-432.476562c-6.875 0-12.457031 5.582031-12.457031 12.464844v69.914062h-105.570313c-4.074218.011719-7.890625 2.007813-10.21875 5.363282l-68.171875 97.582031-26.667969 37.390625-9.722656 13.835937c-1.457031 2.082031-2.2421872 4.558594-2.24999975 7.101563v121.398437c-.09765625 3.34375 1.15624975 6.589844 3.47656275 9.003907 2.320312 2.417968 5.519531 3.796874 8.867187 3.828124zm111.417969 37.386719c-27.527344 0-49.851563-22.320312-49.851563-49.847656 0-27.535156 22.324219-49.855469 49.851563-49.855469 27.535156 0 49.855469 22.320313 49.855469 49.855469 0 27.632813-22.21875 50.132813-49.855469 50.472656zm390.347656 0c-27.53125 0-49.855469-22.320312-49.855469-49.847656 0-27.535156 22.324219-49.855469 49.855469-49.855469 27.539063 0 49.855469 22.320313 49.855469 49.855469.003906 27.632813-22.21875 50.132813-49.855469 50.472656zm140.710938-390.34375v223.34375h-338.375c-6.882813 0-12.464844 5.578125-12.464844 12.460938 0 6.882812 5.582031 12.464843 12.464844 12.464843h338.375v79.761719h-66.421875c-4.382813-37.710937-36.320313-66.15625-74.289063-66.15625-37.960937 0-69.898437 28.445313-74.277343 66.15625h-192.308594v-271.324219h89.980468c6.882813 0 12.464844-5.582031 12.464844-12.464843 0-6.882813-5.582031-12.464844-12.464844-12.464844h-89.980468v-31.777344zm-531.304688 82.382813h99.703125v245.648437h-24.925781c-4.375-37.710937-36.3125-66.15625-74.28125-66.15625-37.960937 0-69.90625 28.445313-74.277344 66.15625h-24.929687v-105.316406l3.738281-5.359375h152.054687c6.882813 0 12.460938-5.574219 12.460938-12.457031v-92.226563c0-6.882812-5.578125-12.464844-12.460938-12.464844h-69.796874zm-30.160156 43h74.777344v67.296875h-122.265625zm0 0"
                                fill="#ec8951" />
                        </svg>
                        <div class="media-body">
                            <h4>free shipping</h4>
                            <p>free shipping world wide</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-block">
                    <div class="media">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480 480"
                            style="enable-background:new 0 0 480 480;" xml:space="preserve" width="512px"
                            height="512px">
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M472,432h-24V280c-0.003-4.418-3.588-7.997-8.006-7.994c-2.607,0.002-5.05,1.274-6.546,3.41l-112,160 c-2.532,3.621-1.649,8.609,1.972,11.14c1.343,0.939,2.941,1.443,4.58,1.444h104v24c0,4.418,3.582,8,8,8s8-3.582,8-8v-24h24 c4.418,0,8-3.582,8-8S476.418,432,472,432z M432,432h-88.64L432,305.376V432z"
                                            fill="#ec8951" />
                                        <path
                                            d="M328,464h-94.712l88.056-103.688c0.2-0.238,0.387-0.486,0.56-0.744c16.566-24.518,11.048-57.713-12.56-75.552 c-28.705-20.625-68.695-14.074-89.319,14.631C212.204,309.532,207.998,322.597,208,336c0,4.418,3.582,8,8,8s8-3.582,8-8 c-0.003-26.51,21.486-48.002,47.995-48.005c10.048-0.001,19.843,3.151,28.005,9.013c16.537,12.671,20.388,36.007,8.8,53.32 l-98.896,116.496c-2.859,3.369-2.445,8.417,0.924,11.276c1.445,1.226,3.277,1.899,5.172,1.9h112c4.418,0,8-3.582,8-8 S332.418,464,328,464z"
                                            fill="#ec8951" />
                                        <path
                                            d="M216.176,424.152c0.167-4.415-3.278-8.129-7.693-8.296c-0.001,0-0.002,0-0.003,0 C104.11,411.982,20.341,328.363,16.28,224H48c4.418,0,8-3.582,8-8s-3.582-8-8-8H16.28C20.283,103.821,103.82,20.287,208,16.288 V40c0,4.418,3.582,8,8,8s8-3.582,8-8V16.288c102.754,3.974,185.686,85.34,191.616,188l-31.2-31.2 c-3.178-3.07-8.242-2.982-11.312,0.196c-2.994,3.1-2.994,8.015,0,11.116l44.656,44.656c0.841,1.018,1.925,1.807,3.152,2.296 c0.313,0.094,0.631,0.172,0.952,0.232c0.549,0.198,1.117,0.335,1.696,0.408c0.08,0,0.152,0,0.232,0c0.08,0,0.152,0,0.224,0 c0.609-0.046,1.211-0.164,1.792-0.352c0.329-0.04,0.655-0.101,0.976-0.184c1.083-0.385,2.069-1.002,2.888-1.808l45.264-45.248 c3.069-3.178,2.982-8.242-0.196-11.312c-3.1-2.994-8.015-2.994-11.116,0l-31.976,31.952 C425.933,90.37,331.38,0.281,216.568,0.112C216.368,0.104,216.2,0,216,0s-0.368,0.104-0.568,0.112 C96.582,0.275,0.275,96.582,0.112,215.432C0.112,215.632,0,215.8,0,216s0.104,0.368,0.112,0.568 c0.199,115.917,91.939,210.97,207.776,215.28h0.296C212.483,431.847,216.013,428.448,216.176,424.152z"
                                            fill="#ec8951" />
                                        <path
                                            d="M323.48,108.52c-3.124-3.123-8.188-3.123-11.312,0L226.2,194.48c-6.495-2.896-13.914-2.896-20.408,0l-40.704-40.704 c-3.178-3.069-8.243-2.981-11.312,0.197c-2.994,3.1-2.994,8.015,0,11.115l40.624,40.624c-5.704,11.94-0.648,26.244,11.293,31.947 c9.165,4.378,20.095,2.501,27.275-4.683c7.219-7.158,9.078-18.118,4.624-27.256l85.888-85.888 C326.603,116.708,326.603,111.644,323.48,108.52z M221.658,221.654c-0.001,0.001-0.001,0.001-0.002,0.002 c-3.164,3.025-8.148,3.025-11.312,0c-3.125-3.124-3.125-8.189-0.002-11.314c3.124-3.125,8.189-3.125,11.314-0.002 C224.781,213.464,224.781,218.53,221.658,221.654z"
                                            fill="#ec8951" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div class="media-body">
                            <h4>24 X 7 service</h4>
                            <p>online service for new customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-block">
                    <div class="media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -14 512.00001 512">
                            <path
                                d="m136.964844 308.234375c4.78125-2.757813 6.417968-8.878906 3.660156-13.660156-2.761719-4.777344-8.878906-6.417969-13.660156-3.660157-4.78125 2.761719-6.421875 8.882813-3.660156 13.660157 2.757812 4.78125 8.878906 6.421875 13.660156 3.660156zm0 0"
                                fill="#ec8951" />
                            <path
                                d="m95.984375 377.253906 50.359375 87.230469c10.867188 18.84375 35.3125 25.820313 54.644531 14.644531 19.128907-11.054687 25.703125-35.496094 14.636719-54.640625l-30-51.96875 25.980469-15c4.78125-2.765625 6.421875-8.878906 3.660156-13.660156l-13.003906-22.523437c1.550781-.300782 11.746093-2.300782 191.539062-37.570313 22.226563-1.207031 35.542969-25.515625 24.316407-44.949219l-33.234376-57.5625 21.238282-32.167968c2.085937-3.164063 2.210937-7.230469.316406-10.511719l-20-34.640625c-1.894531-3.28125-5.492188-5.203125-9.261719-4.980469l-38.472656 2.308594-36.894531-63.90625c-5.34375-9.257813-14.917969-14.863281-25.605469-14.996094-.128906-.003906-.253906-.003906-.382813-.003906-10.328124 0-19.703124 5.140625-25.257812 13.832031l-130.632812 166.414062-84.925782 49.03125c-33.402344 19.277344-44.972656 62.128907-25.621094 95.621094 17.679688 30.625 54.953126 42.671875 86.601563 30zm102.324219 57.238282c5.523437 9.554687 2.253906 21.78125-7.328125 27.316406-9.613281 5.558594-21.855469 2.144531-27.316407-7.320313l-50-86.613281 34.640626-20c57.867187 100.242188 49.074218 85.011719 50.003906 86.617188zm-22.683594-79.296876-10-17.320312 17.320312-10 10 17.320312zm196.582031-235.910156 13.820313 23.9375-12.324219 18.664063-23.820313-41.261719zm-104.917969-72.132812c2.683594-4.390625 6.941407-4.84375 8.667969-4.796875 1.707031.019531 5.960938.550781 8.527344 4.996093l116.3125 201.464844c3.789063 6.558594-.816406 14.804688-8.414063 14.992188-1.363281.03125-1.992187.277344-5.484374.929687l-123.035157-213.105469c2.582031-3.320312 2.914063-3.640624 3.425781-4.480468zm-16.734374 21.433594 115.597656 200.222656-174.460938 34.21875-53.046875-91.878906zm-223.851563 268.667968c-4.390625-7.597656-6.710937-16.222656-6.710937-24.949218 0-17.835938 9.585937-34.445313 25.011718-43.351563l77.941406-45 50 86.601563-77.941406 45.003906c-23.878906 13.78125-54.515625 5.570312-68.300781-18.304688zm0 0"
                                fill="#ec8951" />
                            <path
                                d="m105.984375 314.574219c-2.761719-4.78125-8.878906-6.421875-13.660156-3.660157l-17.320313 10c-4.773437 2.757813-10.902344 1.113282-13.660156-3.660156-2.761719-4.78125-8.878906-6.421875-13.660156-3.660156s-6.421875 8.878906-3.660156 13.660156c8.230468 14.257813 26.589843 19.285156 40.980468 10.980469l17.320313-10c4.78125-2.761719 6.421875-8.875 3.660156-13.660156zm0 0"
                                fill="#ec8951" />
                            <path
                                d="m497.136719 43.746094-55.722657 31.007812c-4.824218 2.6875-6.5625 8.777344-3.875 13.601563 2.679688 4.820312 8.765626 6.566406 13.601563 3.875l55.71875-31.007813c4.828125-2.6875 6.5625-8.777344 3.875-13.601562-2.683594-4.828125-8.773437-6.5625-13.597656-3.875zm0 0"
                                fill="#ec8951" />
                            <path
                                d="m491.292969 147.316406-38.636719-10.351562c-5.335938-1.429688-10.820312 1.734375-12.25 7.070312-1.429688 5.335938 1.738281 10.816406 7.074219 12.246094l38.640625 10.351562c5.367187 1.441407 10.824218-1.773437 12.246094-7.070312 1.429687-5.335938-1.738282-10.820312-7.074219-12.246094zm0 0"
                                fill="#ec8951" />
                            <path
                                d="m394.199219 7.414062-10.363281 38.640626c-1.429688 5.335937 1.734374 10.816406 7.070312 12.25 5.332031 1.425781 10.816406-1.730469 12.25-7.070313l10.359375-38.640625c1.429687-5.335938-1.734375-10.820312-7.070313-12.25-5.332031-1.429688-10.816406 1.734375-12.246093 7.070312zm0 0"
                                fill="#ec8951" />
                        </svg>
                        <div class="media-body">
                            <h4>festival offer</h4>
                            <p>new online special festival offer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- service layout  end -->


    <!-- category section start -->
    <section>
        <div class="container container-lg">
            <div class="row margin-default ratio_square">
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <a href="category-page.html">
                        <div class="gradient-category">
                            <div class="gradient-border">
                                <div class="img-sec">
                                    <img src="../assets/images/fashion/category/1.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <h4>Top wear</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <a href="category-page.html">
                        <div class="gradient-category hover-effect">
                            <div class="gradient-border">
                                <div class="img-sec">
                                    <img src="../assets/images/fashion/category/4.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <h4>dresses</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <a href="category-page.html">
                        <div class="gradient-category">
                            <div class="gradient-border">
                                <div class="img-sec">
                                    <img src="../assets/images/fashion/category/3.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <h4>bottom</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <a href="category-page.html">
                        <div class="gradient-category">
                            <div class="gradient-border">
                                <div class="img-sec">
                                    <img src="../assets/images/fashion/category/2.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <h4>inner/sleep</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <a href="category-page.html">
                        <div class="gradient-category">
                            <div class="gradient-border">
                                <div class="img-sec">
                                    <img src="../assets/images/fashion/category/5.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <h4>footwear</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <a href="category-page.html">
                        <div class="gradient-category">
                            <div class="gradient-border">
                                <div class="img-sec">
                                    <img src="../assets/images/fashion/category/6.png" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <h4>sports/active</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- category section end -->


    <!-- collection banner -->
    <section class="pb-0 ratio2_1">
        <div class="container container-lg">
            <div class="row partition2">
                <div class="col-md-6">
                    <a href="category-page.html">
                        <div class="collection-banner p-right text-center">
                            <div class="img-part">
                                <img src="../assets/images/gradient/banner/4.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h4>save 30%</h4>
                                    <h2>men</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="category-page.html">
                        <div class="collection-banner p-right text-center">
                            <div class="img-part">
                                <img src="../assets/images/gradient/banner/5.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h4>save 60%</h4>
                                    <h2>women</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->


    <!-- Tab product -->
    <div class="title1 title-fancy section-t-space">
        <h4>exclusive products</h4>
        <h2 class="title-inner1 title-gradient">special products</h2>
    </div>
    @include('frontend.include.tab-product')
    <!-- Tab product end -->


    <!-- category section start -->
    <section class="bg-light section-b-space">
        <div class="container-lg container">
            <div class="row margin-default ratio_square ">
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="category-page.html">

                        <div class="img-category">
                            <div class="pattern-bg bg1">
                                <div class="img-sec">
                                    <img src="../assets/images/fashion/category/8.png" class="img-fluid bg-img"
                                        alt="">
                                </div>
                            </div>
                            <h4>Top wear</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="category-page.html">

                        <div class="img-category hover-effect">
                            <div class="pattern-bg bg2">
                                <div class="img-sec">
                                    <img src="../assets/images/fashion/category/9.png" class="img-fluid bg-img"
                                        alt="">
                                </div>
                            </div>
                            <h4>dresses</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="category-page.html">

                        <div class="img-category">
                            <div class="pattern-bg bg3">
                                <div class="img-sec">
                                    <img src="../assets/images/fashion/category/10.png" class="img-fluid bg-img"
                                        alt="">
                                </div>
                            </div>
                            <h4>bottom</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="category-page.html">

                        <div class="img-category">
                            <div class="pattern-bg bg4">
                                <div class="img-sec">
                                    <img src="../assets/images/fashion/category/11.png" class="img-fluid bg-img"
                                        alt="">
                                </div>
                            </div>
                            <h4>inner/sleep</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="category-page.html">

                        <div class="img-category">
                            <div class="pattern-bg bg5">
                                <div class="img-sec">
                                    <img src="../assets/images/fashion/category/12.png" class="img-fluid bg-img"
                                        alt="">
                                </div>
                            </div>
                            <h4>footwear</h4>
                        </div>
                    </a>
                </div>
                <div class="col-xl-2 col-sm-3 col-4">
                    <a href="category-page.html">

                        <div class="img-category">
                            <div class="pattern-bg bg6">
                                <div class="img-sec">
                                    <img src="../assets/images/fashion/category/13.png" class="img-fluid bg-img"
                                        alt="">
                                </div>
                            </div>
                            <h4>sports/active</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- category section end -->


    <!-- product slider -->
    <section class="ratio_asos gradient-slider">
        <div class="container container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="title1 title-fancy">
                        <h4>exclusive products</h4>
                        <h2 class="title-inner1 title-gradient">special products</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="product-5 product-m no-arrow">
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product-page(accordian).html"><img
                                        src="../assets/images/gradient/product/4.jpg"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                <div class="cart-box cart-box-bottom">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                        <i class="ri-shopping-cart-line"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="ri-loop-left-line"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="detail-inline">
                                    <a href="product-page(accordian).html">
                                        <h6>Men's Sneaker Retro Shoes</h6>
                                    </a>
                                    <h4>$100.50</h4>
                                </div>
                                <ul class="color-variant pt-0">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="lable-block"><span class="lable-gradient">new</span> <span
                                        class="lable4">on
                                        sale</span></div>
                                <a href="product-page(accordian).html"><img
                                        src="../assets/images/gradient/product/6.jpg"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                <div class="cart-box cart-box-bottom">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                        <i class="ri-shopping-cart-line"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="ri-loop-left-line"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="detail-inline">
                                    <a href="product-page(accordian).html">
                                        <h6>Foot Pease Socks</h6>
                                    </a>
                                    <h4>$10.80</h4>
                                </div>
                                <ul class="color-variant pt-0">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product-page(accordian).html"><img
                                        src="../assets/images/gradient/product/2.jpg"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                <div class="cart-box cart-box-bottom">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                        <i class="ri-shopping-cart-line"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="ri-loop-left-line"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="detail-inline">
                                    <a href="product-page(accordian).html">
                                        <h6>Black Belt</h6>
                                    </a>
                                    <h4>$3.60</h4>
                                </div>
                                <ul class="color-variant pt-0">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="lable-block"><span class="lable-gradient">new</span> <span
                                        class="lable4">on
                                        sale</span></div>
                                <a href="product-page(accordian).html"><img
                                        src="../assets/images/gradient/product/5.jpg"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                <div class="cart-box cart-box-bottom">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                        <i class="ri-shopping-cart-line"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="ri-loop-left-line"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="detail-inline">
                                    <a href="product-page(accordian).html">
                                        <h6>3-Stripes Terry Hoodie</h6>
                                    </a>
                                    <h4>$60.80</h4>
                                </div>
                                <ul class="color-variant pt-0">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="lable-block"><span class="lable-gradient">new</span> <span
                                        class="lable4">on
                                        sale</span></div>
                                <a href="product-page(accordian).html"><img
                                        src="../assets/images/gradient/product/8.jpg"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                <div class="cart-box cart-box-bottom">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                        <i class="ri-shopping-cart-line"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <a href="compare.html" title="Compare">
                                        <i class="ri-loop-left-line"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="detail-inline">
                                    <a href="product-page(accordian).html">
                                        <h6>Woven Track Jacket</h6>
                                    </a>
                                    <h4>$99.90</h4>
                                </div>
                                <ul class="color-variant pt-0">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product slider -->

    <!-- instagram section -->
    <section class="instagram ratio_square gym-parallax">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <h2 class="title-borderless title-gradient"># instagram</h2>
                    <div class="slide-7 no-arrow slick-instagram">
                        <div>
                            <a href="#!">
                                <div class="instagram-box"> <img src="../assets/images/gradient/instagram/1.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box"> <img src="../assets/images/gradient/instagram/2.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box"> <img src="../assets/images/gradient/instagram/3.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box"> <img src="../assets/images/gradient/instagram/4.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box"> <img src="../assets/images/gradient/instagram/5.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box"> <img src="../assets/images/gradient/instagram/6.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box"> <img src="../assets/images/gradient/instagram/7.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box"> <img src="../assets/images/gradient/instagram/3.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box"> <img src="../assets/images/gradient/instagram/5.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram section end -->

    <!-- footer -->
    @include('frontend.include.footer')
    <!-- footer end -->


    <!-- subscribe start -->
    <div class="cookie-bar left-bottom subscribe-box">
        <h2>hey you !!</h2>
        <p>Join our subscribers list to get the latest updates and special offers delivered directly in your inbox</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Enter your Email"
                aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-solid btn-sm btn-gradient" type="button" id="button-addon2">subscribe</button>
        </div>
        <a href="javascript:void(0)" class="btn-close"><i class="fa fa-times"></i></a>
    </div>
    <!-- subscribe end -->

    <!-- Search Modal Start -->
    <div class="modal fade search-modal theme-modal-2" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5">Search in store</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="search-input-box">
                        <input type="text" class="form-control"
                            placeholder="Search with brands and categories...">
                        <i class="ri-search-2-line"></i>
                    </div>

                    <ul class="search-category">
                        <li class="category-title">Top search:</li>
                        <li>
                            <a href="category-page.html">Baby Essentials</a>
                        </li>
                        <li>
                            <a href="category-page.html">Bag Emporium</a>
                        </li>
                        <li>
                            <a href="category-page.html">Bags</a>
                        </li>
                        <li>
                            <a href="category-page.html">Books</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- Cart Offcanvas Start -->
    <div class="offcanvas offcanvas-end cart-offcanvas" tabindex="-1" id="cartOffcanvas">
        <div class="offcanvas-header">
            <h3 class="offcanvas-title">My Cart (3)</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas">
                <i class="ri-close-line"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="pre-text-box">
                <p>spend $20.96 More And Enjoy Free Shipping!</p>
                <div class="progress" role="progressbar">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 58.08%;">
                        <i class="ri-truck-line"></i>
                    </div>
                </div>
            </div>

            <div class="sidebar-title">
                <a href="#!">Clear Cart</a>
            </div>

            <div class="cart-media">
                <ul class="cart-product">
                    <li>
                        <div class="media">
                            <a href="#!">
                                <img src="../assets/images/fashion-1/product/5.jpg" class="img-fluid"
                                    alt="Classic Jacket">
                            </a>
                            <div class="media-body">
                                <a href="#!">
                                    <h4>Couture Edge</h4>
                                </a>
                                <h4 class="quantity">
                                    <span>1 x $6.74</span>
                                </h4>

                                <div class="qty-box">
                                    <div class="input-group qty-container">
                                        <button class="btn qty-btn-minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input type="number" readonly name="qty" class="form-control input-qty"
                                            value="1">
                                        <button class="btn qty-btn-plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="close-circle">
                                    <button class="close_button edit-button" data-bs-toggle="modal"
                                        data-bs-target="#variationModal">
                                        <i class="ri-pencil-line"></i>
                                    </button>
                                    <button class="close_button delete-button" type="submit">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="#!">
                                <img src="../assets/images/fashion-1/product/13.jpg" class="img-fluid"
                                    alt="Classic Jacket">
                            </a>
                            <div class="media-body">
                                <a href="#!">
                                    <h4>Classic Jacket</h4>
                                </a>
                                <h4 class="quantity">
                                    <span>1 x $7.84</span>
                                </h4>
                                <div class="qty-box">
                                    <div class="input-group qty-container">
                                        <button class="btn qty-btn-minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input type="number" readonly name="qty" class="form-control input-qty"
                                            value="1">
                                        <button class="btn qty-btn-plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="close-circle">
                                    <button class="close_button delete-button" type="submit">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="#!">
                                <img src="../assets/images/fashion-1/product/12.jpg" class="img-fluid"
                                    alt="Classic Jacket">
                            </a>
                            <div class="media-body">
                                <a href="#!">
                                    <h4>Urban Chic</h4>
                                </a>
                                <h4 class="quantity">
                                    <span>2 x $3.84</span>
                                </h4>
                                <div class="qty-box">
                                    <div class="input-group qty-container">
                                        <button class="btn qty-btn-minus">
                                            <i class="ri-subtract-line"></i>
                                        </button>
                                        <input type="number" readonly name="qty" class="form-control input-qty"
                                            value="1">
                                        <button class="btn qty-btn-plus">
                                            <i class="ri-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="close-circle">
                                    <button class="close_button delete-button" type="submit">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="cart_total">
                    <li>
                        <div class="total">
                            <h5>Sub Total : <span>$36.74</span>
                            </h5>
                        </div>
                    </li>
                    <li>
                        <div class="buttons">
                            <a href="cart.html" class="btn view-cart">View Cart</a>
                            <a href="checkout.html" class="btn checkout">Check Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Cart Offcanvas End -->


    <!-- tap to top start -->
    <div class="tap-top gradient-top">
        <div><i class="ri-arrow-up-double-line"></i></div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="{{ asset('frontend/assets/js/jquery-3.3.1.min.js') }}"></script>

    <!-- slick js-->
    <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick-animation.min.js') }}"></script>

    <!-- wow js-->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>

    <!-- menu js-->
    <script src="{{ asset('frontend/assets/js/menu.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('frontend/assets/js/lazysizes.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{ asset('frontend/assets/js/bootstrap-notify.min.js') }}"></script>

    <!-- Theme js-->
    <script src="{{ asset('frontend/assets/js/theme-setting.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom-slick-animated.js') }}"></script>

    <script>
        new WOW().init();

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
</body>

</html>
