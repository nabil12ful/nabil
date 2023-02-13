<footer class="site-footer" id="site-footer">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center branding-block">
                <a class="footer-brand" href="{{ route('home') }}"><img src="{{ asset('upload/basic/'.getAppData()->logo) }}" alt="{{ getAppData()->name }}"></a>
                <p>
                    {{ getAppData()->desc }}
                </p>
                <ul class="list-inline footer-social">
                    @if (!is_null(getContact()->facebook))
                        <li class="list-inline-item"><a href="{{ getContact()->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                    @endif
                    @if (!is_null(getContact()->twiiter))
                        <li class="list-inline-item"><a href="{{ getContact()->twitter }}"><i class="fab fa-twitter"></i></a></li>
                    @endif
                    @if (!is_null(getContact()->linkedin))
                        <li class="list-inline-item"><a href="{{ getContact()->linkedin }}"><i class="fab fa-linkedin"></i></a></li>
                    @endif
                    @if (!is_null(getContact()->youtube))
                        <li class="list-inline-item"><a href="{{ getContact()->youtube }}"><i class="fab fa-youtube"></i></a></li>
                    @endif
                    @if (!is_null(getContact()->instagram))
                        <li class="list-inline-item"><a href="{{ getContact()->instagram }}"><i class="fab fa-instagram"></i></a></li>
                    @endif
                </ul>
            </div>

        </div> <!-- .row -->
        <div class="back-to-top"><a href="#site-header"><i class="bi bi-box-arrow-up"></i></a></div>
        <div class="row footer-bottom">
            <div class="col-md-6">
                <p>All rights reserved &copy; 2023 <strong>{{ getAppData()->name }}</strong></p>
            </div>
            <div class="col-md-6">
                <ul class="list-inline text-md-end">
                    <li class="list-inline-item"><a href="#">Terms &amp; Condition</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div> <!-- .footer-bottom -->
    </div> <!-- .container -->
</footer>
