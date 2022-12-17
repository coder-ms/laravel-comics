<footer>
    <div class="footerTop">
        <div class="container d-flex justify-content-start align-items-start">
            <div>
                <ul>
                   <li><h4>{{ $footerSearch[0]['listTitle'] }}</h4></li>
                   @foreach($footerSearch[0]['listItems'] as $link)
                        <li>{{$link}}</li>
                   @endforeach
                </ul>
                <ul>
                    <li><h4>{{ $footerSearch[1]['listTitle'] }}</h4></li>
                    @foreach($footerSearch[1]['listItems'] as $link)
                    <li>{{$link}}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <ul>
                    <li><h4>{{ $footerSearch[2]['listTitle'] }}</h4></li>
                    @foreach($footerSearch[2]['listItems'] as $link)
                    <li>{{$link}}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <ul>
                    <li><h4>{{ $footerSearch[3]['listTitle'] }}</h4></li>
                    @foreach($footerSearch[3]['listItems'] as $link)
                    <li>{{$link}}</li>
                    @endforeach
                </ul>
            </div>
            <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="DC logo bg version">
        </div>
    </div>
    <div class="footerBottom">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="shopNowButton">SHOP NOW</div>
            <div class="socials d-flex justify-content-between align-items-center">
                <h4>FOLLOW US</h4>
                <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="Facebook Icon">
                <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="Twitter Icon">
                <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="YouTube Icon">
                <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="Pinterest Icon">
                <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="Periscope Icon">
            </div>
        </div>
    </div>
</footer>