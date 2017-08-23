    <script src="{{ URL::to('/') }}/js/jquery.min.js"></script>
    <script src="{{ URL::to('/') }}/js/bootstrap.min.js"></script>
    <script src="{{ URL::to('/') }}/js/jquery.countdown.min.js"></script>
    <script src="{{ URL::to('/') }}/js/clock.js"></script>
    <script src="{{ URL::to('/') }}/js/jquery.simpleWeather.min.js"></script>
    <script type="text/javascript">
        $(function(){
            var d = new Date();
            d.setTime(1511295000*1000); // Thanksgiving Break -500
            // To set a new time go to this website http://www.dwuser.com/education/content/easy-javascript-jquery-countdown-clock-builder/
            $('.clock-builder-output-days').countdown(d, function(event) {
                $(this).html(event.strftime('<p>%D<br/><span>days</span></p>'));
            });
            $('.clock-builder-output-hours').countdown(d, function(event) {
                $(this).html(event.strftime('<p>%H<br/><span>Hours</span></p>'));
            });
            $('.clock-builder-output-minutes').countdown(d, function(event) {
                $(this).html(event.strftime('<p>%M<br/><span>Minutes</span></p>'));
            });
            $('.clock-builder-output-seconds').countdown(d, function(event) {
                $(this).html(event.strftime('<p>%S<br/><span>Seconds</span></p>'));
            });
        });
    </script>