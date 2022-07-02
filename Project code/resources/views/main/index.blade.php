@extends('layouts.main')

@section('content')
<div class="get_started" id=>
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="welcome" data-aos="fade-right">
                <div class="position-relative">
                    <h1 class="position-absolute top-50 start-50 translate-middle">> HALYK SERGEKI</h1>
                </div>
                
                <div class="welcome-image">
                    <img class="homeimg" src="{{asset('images/home.png')}}" alt=""/>
                </div>
            </div>

            <div class="col-md-6 homecard my-5" data-aos="fade-left">
                <h2 id="welcome_name" class="mt-5" >Welcome {{ Auth:: user()->name }}</h2>
                <p class="mt-3">Let's create your first <span class="colortext">post!</span></p>
                <button class="mt-5" onclick="location.href='{{route('create_post')}}';">Get Started</button>
            </div>
        </div>
            
    </div>
</div>

<div class="about_us" id="about_us">
    <div class="container">
        <h1 class="title" data-aos="fade-up">About us</h1>
        <input type="radio" name="slider" id="item-1" checked>
        <input type="radio" name="slider" id="item-2">
        <input type="radio" name="slider" id="item-3">
        <div class="cards">
            <label class="card" for="item-1" id="song-1">
                <img src="{{asset('images/slider1.jpg')}}" alt="song">
            </label>
            <label class="card" for="item-2" id="song-2">
                <img src="{{asset('images/slider2.jpg')}}" alt="song">
            </label>
            <label class="card" for="item-3" id="song-3">
                <img src="{{asset('images/slider3.jpg')}}" alt="song">
            </label>
        </div>
        <div class="player">
            <div class="upper-part">
                <div class="info-area" id="test">
                    <label class="song-info" id="song-info-1">
                        <div class="title">This site was created to create a circle of communication between the state and the people of Kazakhstan. We want to change Kazakhstan, where everyone can vote for the future of their people</div>
                    </label>
                    <label class="song-info" id="song-info-2">
                        <div class="title">We have no desire to go against the government, we only want to open the eyes of the people and that the government does not ignore the problems that the people consider important</div>
                    </label>
                    <label class="song-info" id="song-info-3">
                        <div class="title">We believe that this project will open the future for Kazakhstan. We see Kazakhstan as a country where there is no corruption, where everyone can express their opinion and participate directly in solving internal problems of Kazakhstan</div>
                    </label>
                </div>
            </div>
        </div>
  </div>  
</div>

<main class="blog" id="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Posts</h1>
            <div class="postsearch">
                <div class="postsearch-wrapper">
            <select>
                <option selected disabled>city</option>
                <option value="Nur-sultan">Nur-sultan</option>
                <option value="Almaty">Almaty</option>
                <option value="Karaganda">Karaganda</option>
                <option value="Pavlodar">Pavlodar</option>
                <option value="Semey">Semey</option>
                <option value="Kostanay">Kostanay</option>
                <option value="Taldykorgan">Taldykorgan</option>
                <option value="Kyzylorda">Kyzylorda</option>
                <option value="Aktobe">Aktobe</option>
                <option value="Aktau">Aktau</option>
                <option value="Oral">Oral</option>
                <option value="Atyrau">Atyrau</option>
                <option value="Mangystau">Mangystau</option>
                <option value="Petropavlovsk">Petropavlovsk</option>
              </select>
              <select>
                <option value="0">Categories</option>
                <option value="People's righ">People's right</option>
                <option value="Charity">Charity</option>
                <option value="Carruption">Carruption</option>
                <option value="Repair work">Repair work</option>
                <option value="Price changes">Price changes</option>
                <option value="Other">Other</option>
              </select>
              <input type="search" placeholder="search..." />
                </div>
            </div>
            <section class="featured-posts-section mt-5">
                <div class="row">
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{asset('images/istockphoto-638362318-612x612 2.png')}}" alt="blog post">
                        </div>
                        <p class="blog-post-category">Blog post</p>
                        <a href="{{ route('post_show') }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                        </a>
                    </div>
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('images/photo001.jpg') }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">Blog post</p>
                        <a href="{{ route('post_show1') }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                        </a>
                    </div>
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-left">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ asset('images/photo003.jpg') }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">Blog post</p>
                        <a href="{{ route('post_show2') }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                        </a>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('images/photo002.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="{{ route('post_show3') }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('images/photo004.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="{{ route('post_show4') }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_6.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="{{ route('post_show5') }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('images/tokaev001.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="{{ route('post_show6') }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_8.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="{{ route('post_show7') }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_9.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="{{ route('post_show8') }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_10.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="{{ route('post_show9') }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/blog_11.jpg') }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-carousel">
                        <h5 class="widget-title">Post Lists</h5>
                        <div class="post-carousel">
                            <div id="carouselId" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselId" data-slide-to="1"></li>
                                    <li data-target="#carouselId" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <figure class="carousel-item active">
                                        <img src="{{ asset('assets/images/blog_widget_carousel.jpg') }}" alt="First slide">
                                        <figcaption class="post-title">
                                            <a href="#!">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                                        </figcaption>
                                    </figure>
                                    <figure class="carousel-item">
                                            <img src="{{ asset('assets/images/blog_7.jpg') }}" alt="First slide">
                                            <figcaption class="post-title">
                                                <a href="#!">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                                            </figcaption>
                                    </figure>
                                    <div class="carousel-item">
                                            <img src="{{ asset('assets/images/blog_5.jpg') }}" alt="First slide">
                                            <figcaption class="post-title">
                                                <a href="#!">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                                            </figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Post List</h5>
                        <ul class="post-list">
                            <li class="post">
                                <a href="#!" class="post-permalink media">
                                    <img src="{{ asset('assets/images/blog_widget_1.jpg') }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="post">
                                <a href="#!" class="post-permalink media">
                                    <img src="{{ asset('assets/images/blog_widget_2.jpg') }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="post">
                                <a href="#!" class="post-permalink media">
                                <img src="{{ asset('assets/images/blog_widget_3.jpg') }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="post">
                                <a href="#!" class="post-permalink media">
                                    <img src="{{ asset('assets/images/blog_widget_4.jpg') }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title">Categories</h5>
                        <img src="{{ asset('assets/images/blog_widget_categories.jpg') }}" alt="categories" class="w-100">
                    </div>
                </div>
            </div>
        </div>

</main>

@endsection