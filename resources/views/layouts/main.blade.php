<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="MC- Mykey's Store is an online t-shirt store ">
    <link rel="shortcut icon" href="assets/images/if-shirt-star-532788-128x128.png" type="image/x-icon">
    <title>
        @yield('title','DCHeroes Store')
    </title>
    @include('layouts.includes.header')
</head>
<body>
    @include('layouts.includes.navbar')
<div style="padding-top: 6%">
  @yield('content')
    <footer class="footer">
     @include('layouts.includes.footer')
  </footer>
{{--
    <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i>
            <p>Coded with love by Webdevmatics for educational purpose only</p>
        </div>
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-html5"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque
                nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>
        </div>

        <div class="small-6 medium-4 large-4 columns">
            <h4>Follow Us</h4>
            <ul class="footer-links">
                <li><a href="https://github.com/webdevmatics">GitHub</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="https://twitter.com/webdevmatics">Twitter</a></li>
            </ul>
        </div>
    </div>
</footer> --}}
</div>

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_JJSTadfgIVAGdte0LjsIxUuq');
</script>
<script src="{{asset('dist/js/app.js')}}"></script>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>


 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbri-down mbr-iconfont"></i></a></div>
    <input name="animation" type="hidden">
</body>
</html>
