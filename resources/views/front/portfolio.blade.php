@extends('front.layout')

@section('main')

  <!--start wrapper-->
<section class="wrapper">
    <section class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a>/</li>
                            <li>Masonry</li>
                        </ul>
                    </nav>

                    <div class="page_title">
                        <h2>Masonry 4</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content portfolio small-images">
        <div class="container">
            <div class="row sub_content">
                    <!--begin isotope -->
                <div class="col-lg-12 isotope">
                    <!--begin portfolio filter -->
                    <ul id="filter">
                        <li data-filter="*" class="selected"><a href="#">All</a></li>
                        <li data-filter=".responsive"><a href="#">Responsive</a></li>
                        <li data-filter=".mobile"><a href="#">Mobile</a></li>
                        <li data-filter=".branding"><a href="#">Branding</a></li>
                    </ul>
                    <!--end portfolio filter -->

                    <!--begin portfolio_masonry -->
                    <div class="mixed-container masonry_wrapper">

                        <div class="item mobile">
                            <div class="recent-item box">
                              <figure class="touching ">
                                    <img src="images/portfolio/portfolio_11.png" alt="" class="img-responsive"/>
                                    <div class="option inner">
                                        <div>
                                            <h5>Touch and Swipe</h5>
                                            <a href="images/portfolio/full/portfolio_1.png" class="fa fa-search mfp-image"></a>
                                            <a href="portfolio_single.html" class="fa fa-link"></a>
                                            <span>Mobile</span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <div class="item responsive">
                            <div class="recent-item box">
                              <figure class="touching ">
                                    <img src="images/portfolio/full/portfolio_3.png" alt="" class="img-responsive"/>
                                    <div class="option inner">
                                        <div>
                                            <h5>Touch and Swipe</h5>
                                            <a href="images/portfolio/full/portfolio_3.png" class="fa fa-search mfp-image"></a>
                                            <a href="portfolio_single.html" class="fa fa-link"></a>
                                            <span>Responsive</span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                         </div>

                        <div class="item mobile">
                            <div class="recent-item box">
                              <figure class="touching ">
                                    <img src="images/portfolio/portfolio_6.png" alt="" class="img-responsive"/>
                                    <div class="option inner">
                                        <div>
                                            <h5>Touch and Swipe</h5>
                                            <a href="images/portfolio/full/portfolio_6.png" class="fa fa-search mfp-image"></a>
                                            <a href="portfolio_single.html" class="fa fa-link"></a>
                                            <span>Mobile</span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <div class="item">
                            <div class="recent-item box">
                              <figure class="touching ">
                                    <img src="images/portfolio/full/portfolio_1.png" alt="" class="img-responsives"/>
                                    <div class="option inner">
                                        <div>
                                            <h5>Touch and Swipe</h5>
                                            <a href="images/portfolio/full/portfolio_1.png" class="fa fa-search mfp-image"></a>
                                            <a href="portfolio_single.html" class="fa fa-link"></a>
                                            <span>Technology</span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <div class="item branding">
                            <div class="recent-item box">
                              <figure class="touching ">
                                    <img src="images/portfolio/portfolio_1.png" alt=""/>
                                    <div class="option inner">
                                        <div>
                                            <h5>Touch and Swipe</h5>
                                            <a href="images/portfolio/full/portfolio_1.png" class="fa fa-search mfp-image"></a>
                                            <a href="portfolio_single.html" class="fa fa-link"></a>
                                            <span>Branding</span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <div class="item responsive">
                            <div class="recent-item box">
                              <figure class="touching ">
                                    <img src="images/portfolio/full/portfolio_2.png" alt="" class="img-responsive"/>
                                    <div class="option inner">
                                        <div>
                                            <h5>Touch and Swipe</h5>
                                            <a href="images/portfolio/full/portfolio_2.png" class="fa fa-search mfp-image"></a>
                                            <a href="portfolio_single.html" class="fa fa-link"></a>
                                            <span>Responsive</span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <div class="item branding">
                            <div class="recent-item box">
                              <figure class="touching ">
                                    <img src="images/portfolio/portfolio_3.png" alt="" class="img-responsive"/>
                                    <div class="option inner">
                                        <div>
                                            <h5>Touch and Swipe</h5>
                                            <a href="images/portfolio/full/portfolio_3.png" class="fa fa-search mfp-image"></a>
                                            <a href="portfolio_single.html" class="fa fa-link"></a>
                                            <span>Branding</span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <div class="item">
                            <div class="recent-item box">
                              <figure class="touching ">
                                    <img src="images/portfolio/full/portfolio_4.png" alt="" class="img-responsive"/>
                                    <div class="option inner">
                                        <div>
                                            <h5>Touch and Swipe</h5>
                                            <a href="images/portfolio/full/portfolio_4.png" class="fa fa-search mfp-image"></a>
                                            <a href="portfolio_single.html" class="fa fa-link"></a>
                                            <span>Technology</span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <div class="item branding">
                            <div class="recent-item box">
                              <figure class="touching ">
                                    <img src="images/portfolio/portfolio_5.png" alt="" class="img-responsive"/>
                                    <div class="option inner">
                                        <div>
                                            <h5>Touch and Swipe</h5>
                                            <a href="images/portfolio/full/portfolio_5.png" class="fa fa-search mfp-image"></a>
                                            <a href="portfolio_single.html" class="fa fa-link"></a>
                                            <span>Branding</span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <div class="item mobile">
                            <div class="recent-item box">
                              <figure class="touching ">
                                    <img src="images/portfolio/full/portfolio_6.png" alt="" class="img-responsive"/>
                                    <div class="option inner">
                                        <div>
                                            <h5>Touch and Swipe</h5>
                                            <a href="images/portfolio/full/portfolio_6.png" class="fa fa-search mfp-image"></a>
                                            <a href="portfolio_single.html" class="fa fa-link"></a>
                                            <span>Mobile</span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <div class="item mobile">
                            <div class="recent-item box">
                              <figure class="touching ">
                                    <img src="images/portfolio/portfolio_7.png" alt="" class="img-responsive"/>
                                    <div class="option inner">
                                        <div>
                                            <h5>Touch and Swipe</h5>
                                            <a href="images/portfolio/full/portfolio_7.png" class="fa fa-search mfp-image"></a>
                                            <a href="portfolio_single.html" class="fa fa-link"></a>
                                            <span>Mobile</span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                        <div class="item">
                            <div class="recent-item box">
                              <figure class="touching ">
                                    <img src="images/portfolio/full/portfolio_8.png" alt="" class="img-responsive"/>
                                    <div class="option inner">
                                        <div>
                                            <h5>Touch and Swipe</h5>
                                            <a href="images/portfolio/full/portfolio_8.png" class="fa fa-search mfp-image"></a>
                                            <a href="portfolio_single.html" class="fa fa-link"></a>
                                            <span>Technology</span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>

                    </div>
                    <!--end portfolio_masonry -->
                </div>
                    <!--end isotope -->
                    <div class="col-sm-12 text-center">
                        <ul class="pagination">
                            <li><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
            </div> <!--./row-->
        </div> <!--./div-->
    </section>
</section>
<!--end wrapper-->


@endsection

 @section('scripts')      
   <script>
    (function ($) {
        var $container = $('.masonry_wrapper'),
                colWidth = function () {
                    var w = $container.width(),
                            columnNum = 1,
                            columnWidth = 0;
                    if (w > 1200) {
                        columnNum  = 4;
                    } else if (w > 900) {
                        columnNum  = 4;
                    } else if (w > 600) {
                        columnNum  = 2;
                    } else if (w > 300) {
                        columnNum  = 1;
                    }
                    columnWidth = Math.floor(w/columnNum);
                    $container.find('.item').each(function() {
                        var $item = $(this),
                                multiplier_w = $item.attr('class').match(/item-w(\d)/),
                                multiplier_h = $item.attr('class').match(/item-h(\d)/),
                                width = multiplier_w ? columnWidth*multiplier_w[1]-4 : columnWidth-4,
                                height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-4 : columnWidth*0.5-4;
                        $item.css({
                            width: width,
                            height: height
                        });
                    });
                    return columnWidth;
                }

        function refreshWaypoints() {
            setTimeout(function() {
            }, 1000);
        }
        function setPortfolio() {
            setColumns();
            $container.isotope('reLayout');
        }

        isotope = function () {
            $container.isotope({
                resizable: true,
                itemSelector: '.item',
                masonry: {
                    columnWidth: colWidth(),
                    gutterWidth: 0
                }
            });
        };
        isotope();
        $(window).smartresize(isotope);
    }(jQuery));
</script>
<!-- Start Style Switcher -->
<div class="switcher"></div>
<!-- End Style Switcher -->

@endsection