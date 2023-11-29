@extends('layout.layout')

@section('title','Notícias')

@section('conteudo')

    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Our Blogs</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">BLOG PAGE</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="blog-area space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_s2_1.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">JUNE 15, 2023</a>
                                <a href="blog.html">SHOPPING</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Mastering the Machines: A Beginner's Guide
                                to Gym Equipment</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_s2_2.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">JUNE 15, 2023</a>
                                <a href="blog.html">SHOPPING</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Mastering the Gym: Essential Strategies for Maximizing Your Workouts</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_s2_3.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">JUNE 15, 2023</a>
                                <a href="blog.html">SHOPPING</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Breaking the Sweat Barrier: Embrace the Challenge of Fitness at Fitmas</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_s2_4.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">JUNE 15, 2023</a>
                                <a href="blog.html">SHOPPING</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Fuel Your Fitness Journey: Nutrition Tips and Advice for Gym Goers</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_s2_5.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">JUNE 15, 2023</a>
                                <a href="blog.html">SHOPPING</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Unleash Your Inner Athlete: Uncover Your True Potential at Fitmas</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_s2_6.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">JUNE 15, 2023</a>
                                <a href="blog.html">SHOPPING</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Fuel Your Fitness Journey: Nutrition Tips and Advice for Gym Goers</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                        </div>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="fas fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Enter Keyword">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post1.png" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Essential Strategies for Maximizing Your</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">25 Jun, 2023</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post2.png" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Functional training into
                                            your Routine...</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">25 Jun, 2023</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post3.png" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Nutrition Tips Advice for Gym Goers</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">25 Jun, 2023</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Boxing Training</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Body Building Class</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Meditation Class</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Mental Yoga Training</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>CrossFit Body Class</a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_gallery">
                            <h3 class="widget_title">Project Gallery</h3>
                            <div class="insta-feed">
                                <a href="blog.html"><img src="assets/img/widget/widget1-1.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-2.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-3.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-4.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-5.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-6.png" alt="img">
                                    <i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">ADVICE</a>
                                <a href="blog.html">FIT</a>
                                <a href="blog.html">AUTHOR</a>
                                <a href="blog.html">FAMILY</a>
                                <a href="blog.html">Fitmas</a>
                                <a href="blog.html">HEALTH</a>
                                <a href="blog.html">FITNESS</a>
                                <a href="blog.html">GYM</a>
                                <a href="blog.html">JUDGE</a>
                                <a href="blog.html">SOLUTION</a>
                                <a href="blog.html">TRAINING</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection

