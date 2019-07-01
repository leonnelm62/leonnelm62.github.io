<footer>

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="footer-section">

                    {{--<a class="logo" href="#"><img src="images/logo.png" alt="Logo Image"></a>--}}
                    <p class="copyright">{{ env('APP_NAME') }} @ {{ date('Y') }}. Tout droit reservé.</p>
                    <p class="copyright"><strong> Développé &amp; <i class="far fa-heart"></i> par </strong>
                        <a href="#" target="_blank">JETSER BENTO</a></p>
                    <ul class="icons">
                        <li><a target="_blank" href="https://www.facebook.com"><i class="ion-social-facebook-outline"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com"><i class="ion-social-twitter-outline"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com"><i class="ion-social-instagram-outline"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com"><i class="ion-social-youtube-outline"></i></a></li>
                    </ul>

                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="footer-section">
                    <h4 class="title"><b>CATEGORIES</b></h4>
                    <ul>
                        @foreach($categories as $category)
                            <li><a href="{{ route('category.posts',$category->slug) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

            <div class="col-lg-4 col-md-6">
                <div class="footer-section">

                    <h4 class="title"><b>S'ABONNER</b></h4>
                    <div class="input-area">
                        <form method="POST" action="{{ route('subscriber.store') }}">
                            @csrf
                            <input class="email-input" name="email" type="email" placeholder="Entrez votre adresse e-mail">
                            <button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
                        </form>
                    </div>

                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

        </div><!-- row -->
    </div><!-- container -->
</footer>