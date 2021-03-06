@include('layouts.header')

  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <section class="youplay-banner banner-top big youplay-banner-parallax">
      <div class="image" style="background-image: url({{ asset('assets/images/banner-bg.jpg') }})">
      </div>

      <div class="info">
        <div>
          <div class="container">
            <h1>Black Rock Shooter</h1>
            <a class="btn btn-md btn-white ml-6" href="#!"><i class="fa fa-apple"></i>&nbsp; App Store</a><a class="btn btn-md active" href="#!"><i class="fa fa-google"></i>&nbsp; Google Play</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /Banner -->

    <div class="youplay-content">

      <!-- Features -->
      <section class="youplay-features container mnb-30">
        <div class="col-sm-4">
          <div class="feature angled-bg">
            <i class="fa fa-gamepad"></i>
            <h3>Dynamic Fights</h3>
            <div>
              The most dynamic fights will not make you bored
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="feature angled-bg">
            <i class="fa fa-heartbeat"></i>
            <h3>Incredible Atmosphere</h3>
            <div>
              You will be immersed in the dark atmosphere until the end of the story
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="feature angled-bg">
            <i class="fa fa-hand-rock-o"></i>
            <h3>Play w/ Friends</h3>
            <div>
              Kick ass your friends right in the game with ease
            </div>
          </div>
        </div>
      </section>
      <!-- /Features -->

      <!-- Screenshots -->
      <h2 class="container h1" id="screenshots">Игры</h2>
      <div class="youplay-carousel">
         @foreach($games as $game)
          <a class="angled-img" href="{{ route('games.show', [$game->slug]) }}">
            <div class="img">
              <img src="{{ asset('storage/'.$game->poster) }}" alt="{{$game->name}}">
            </div>
          </a>
        @endforeach
      </div>
      <!-- /Screenshots -->


      <!-- About -->
      <h2 class="container h1" id="about">About</h2>
      <section class="container">
        <p class="lead">Eleifend sem ipsum conubia euismod potenti ante ad sem sed, dictumst hymenaeos torquent quis. Class leo. Odio orci velit nulla habitasse conubia tempor eleifend dui suscipit mauris eget mollis, molestie est justo. Ligula facilisi sociis dignissim
          egestas lectus.</p>
        <p class="lead">Habitant consequat consectetuer ipsum primis rutrum torquent curabitur tempus gravida nulla integer nascetur tempus ultrices, hac taciti vitae. Vehicula velit praesent risus rutrum lectus.</p>
        <br>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="responsive-embed responsive-embed-16x9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/rMfe306QFr4" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </section>
      <!-- /About -->


      <!-- Testimonials -->
      <section class="youplay-banner youplay-banner-parallax mt-60" id="testimonials">
        <div class="image" style="background-image: url({{ asset('assets/images/game-brs-2-1920x1006.jpg')}})" data-speed="-0.2">
        </div>

        <div class="info">
          <div>
            <div class="container">
              <h2 class="align-center">What Gamers are Saying</h2>
              <br>

              <div class="row testimonials vertical-gutter">
                <div class="col-md-4">
                  <blockquote>
                    <p class="clients-words">
                      Purus purus penatibus tempus est risus elit convallis ultrices adipiscing et mollis fames vivamus.
                    </p>
                    <small class="author-name">Adrian Ray</small>
                    <img class="img-circle" alt="Adrian Ray" src="{{ asset('assets/images/avatar-user-2.png') }})" />
                  </blockquote>
                </div>
                <div class="col-md-4">
                  <blockquote>
                    <p class="clients-words">
                      Lacus Ut varius viverra vestibulum eleifend consectetuer proin accumsan pretium dis ultrices, hendrerit platea. Suspendisse Nunc. Ligula phasellus iaculis torquent.
                    </p>
                    <small class="author-name">Salvador Moore</small>
                    <img class="img-circle" alt="Salvador Moore" src="{{ asset('assets/images/avatar-user-3.png') }})" />
                  </blockquote>
                </div>
                <div class="col-md-4">
                  <blockquote>
                    <p class="clients-words">
                      Curae, sodales facilisi, lacus fringilla ridiculus cras, sed, class class. Class per faucibus eget Aliquam quam interdum vehicula Pretium dolor. Nunc nascetur urna phasellus.
                    </p>
                    <small class="author-name">Clayton Fields</small>
                    <img class="img-circle" alt="Clayton Fields" src="{{ asset('assets/images/avatar-user-4.png') }})" />
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Testimonials -->


      <!-- Recent News -->
      <h2 class="container h1" id="news">Recent News</h2>
      <section class="youplay-news container">
        
        <!-- Single News Block -->
        @foreach($posts as $post)
          <div class="news-one">
            <div class="row vertical-gutter">
              <div class="col-md-4">
                <a href="blog-post.html" class="angled-img">
                  <div class="img">
                    <img src="{{ asset('assets/images/game-brs-7-500x375.jpg') }})" alt="">
                  </div>
                </a>
              </div>
              <div class="col-md-8">
                <div class="clearfix">
                  <h3 class="h2 pull-left m-0"><a href="blog-post.html">{{$post->title}}</a></h3>
                  <span class="date pull-right"><i class="fa fa-calendar"></i>{{$post->created_at}}</span>
                </div>
                <div class="description">
                  {!! $post->description !!}
                </div>
                <a href="{{ route('posts.show', [$post->slug]) }}" class="btn read-more pull-left">Читать далее</a>
              </div>
            </div>
          </div>
          @endforeach
        <!-- /Single News Block -->
      </section>
      <!-- /Recent News -->


      <!-- Preorder -->
      <section class="youplay-banner youplay-banner-parallax mt-60" id="exclusive">
        <div class="image" style="background-image: url({{ asset('assets/images/game-brs-8-1920x1080.jpg') }});" data-speed="-0.2">
        </div>

        <div class="info container align-center">
          <div>
            <h2>Black Rock Shooter II</h2>
            <h3>Exclusively for Mac and Windows</h3>

            <!-- See countdown init in bottom of the page -->
            <div class="countdown style-1 h2" data-end="2017/01/01"></div>

            <br>
            <br>
            <a class="btn btn-md" href="#!">Pre-Order</a>
          </div>
        </div>
      </section>
      <!-- /Preorder -->


      <!-- Partners -->
      <h2 class="container h1">Our Partners</h2>
      <section class="container">
        <div class="owl-carousel" data-autoplay="6000">
          <div class="item">
            <a href="#">
              <img src="{{ asset('assets/images/partner-logo-1.png') }}" alt="">
            </a>
          </div>
          <div class="item">
            <a href="#">
              <img src="{{ asset('assets/images/partner-logo-2.png') }}" alt="">
            </a>
          </div>
          <div class="item">
            <a href="#">
              <img src="{{ asset('assets/images/partner-logo-3.png') }}" alt="">
            </a>
          </div>
          <div class="item">
            <a href="#">
              <img src="{{ asset('assets/images/partner-logo-4.png') }}" alt="">
            </a>
          </div>
          <div class="item">
            <a href="#">
              <img src="{{ asset('assets/images/partner-logo-5.png') }}" alt="">
            </a>
          </div>
          <div class="item">
            <a href="#">
              <img src="{{ asset('assets/images/partner-logo-6.png') }}" alt="">
            </a>
          </div>
          <div class="item">
            <a href="#">
              <img src="{{ asset('assets/images/partner-logo-7.png') }}" alt="">
            </a>
          </div>
          <div class="item">
            <a href="#">
              <img src="{{ asset('assets/images/partner-logo-8.png') }}" alt="">
            </a>
          </div>
        </div>
      </section>
      <!-- /Partners -->


      <!-- Get It Now -->
      <h2 class="container h1">Get It Now</h2>
      <section class="container">
        <p class="lead">
          Mauris imperdiet. Hymenaeos tempor ultricies ullamcorper neque risus volutpat Eros molestie platea, sociosqu convallis, fringilla quam amet. Aliquam est, sapien pellentesque nec quam massa eget per purus inceptos ornare Eget.
        </p>
        <br>
        <a class="btn btn-md btn-white ml-6" href="#!"><i class="fa fa-apple"></i>&nbsp; App Store</a><a class="btn btn-md active" href="#!"><i class="fa fa-google"></i>&nbsp; Google Play</a>
      </section>
      <!-- /Get It Now -->
    </div>

    @include('layouts.footer')