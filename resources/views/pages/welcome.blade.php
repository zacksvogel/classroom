<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('includes.head')
</head>

    <body>

        <div class="mainContainer">

            @include('includes.header')

        
        <div class="box six glow courses">
            <a href="{{ url('/chapters/accounting') }}">
                <div class="centerSmall text">
                   <p>Accounting I/II</p>
                </div>
            </a>
        </div>
        <div class="box sixb glow courses">
            <a href="{{ url('/chapters/avProductions') }}">
                <div class="centerSmall text">
                   <p>AV Productions</p>
                </div>
            </a>
        </div>
        <div class="box seven glow">
            <!-- start of slider -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="{{ url('/chapters/accounting') }}">
                         <img src="{{ URL::to('/') }}/images/slider-accounting.png">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/chapters/avProductions') }}">
                         <img src="{{ URL::to('/') }}/images/slider-av.png" alt="AV Productions">
                        </a>
                    </div>
                    <!-- <div class="item">
                        <a href="{{ url('/chapters/busEssentials') }}">
                         <img src="images/slider-be.png" alt="Business Essentials">
                        </a>
                    </div> -->
                    <div class="item">
                        <a href="{{ url('/chapters/videoProductions') }}">
                         <img src="{{ URL::to('/') }}/images/slider-vp.png" alt="Video Productions">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/chapters/webpageDesign') }}">
                         <img src="{{ URL::to('/') }}/images/slider-web.png" alt="Web Page Design">
                        <a>
                    </div>
                </div>
            </div>
        <!-- end of slider-->
        </div>
        <div class="box eight">
            <div class="clockContainer">
                <div class="wordClock">
                    <span class="itis">I T</span> L <span class="itis">I S</span> A S A M P M<br>
                    A C <span id="mm_quarter">Q U A R T E R</span> D C<br>
                    <span id="mm_twenty">T W E N T Y</span> <span id="mm_five">F I V E</span> X<br>
                    <span id="mm_half">H A L F</span> S <span id="mm_ten">T E N</span> F <span id="sw_to">T O</span><br>
                    <span id="sw_past">P A S T</span> E R U <span id="hh_nine">N I N E</span><br>
                    <span id="hh_one">O N E</span> <span id="hh_six">S I X</span> <span id="hh_three">T H R E E</span><br>
                    <span id="hh_four">F O U R</span> <span id="hh_five">F I V E</span> <span id="hh_two">T W O</span><br>
                    <span id="hh_eight">E I G H T</span> <span id="hh_eleven">E L E V E N</span><br>
                    <span id="hh_seven">S E V E N</span> <span id="hh_twelve">T W E L V E</span><br>
                    <span id="hh_ten">T E N</span> S E <span id="sw_oclock">O C L O C K</span>
                </div>
            </div>
        </div>

<?php
    include('..\app\forecast.io.php');

    $api_key = '6abc5882eac6adde7f943cbe5190b4ae';

    $latitude = '38.3450';
    $longitude = '-98.2017';
    $units = 'auto';
    $lang = 'en';

    $forecast = new ForecastIO($api_key, $units, $lang);


     // GET CURRENT CONDITIONS 
    $condition = $forecast->getCurrentConditions($latitude, $longitude);

        echo "
            <div class='box ninea glow shake-slow'>
                <div class='centerSmall text weather'>
                    <p>
                        ".substr($condition->getTemperature(), 0, 4)."&#176;
                    </p>
                </div>
            </div>".
        "\n";

        echo '
            <div class="box nineb glow shake-slow">
                <div class="centerSmall text weather">
                    <p>
                        ' . substr($condition->getWindSpeed(), 0, 3)." mph
                    </p>
                </div>
            </div>
        ". "\n";
                    
        echo '
            <div class="box ninec glow shake-slow">
                <div class="centerSmall text weather">
                    <p>
                        '.$condition->getSummary()."
                    </p>
                </div>
            </div>
        "."\n";
                    
?>                
        <div class="box nined glow shake-slow">
            <div class="centerSmall text weather">
                <p>Lyons, KS</p>
            </div>
        </div>

        <div class="box ten glow courses">
            <a href="{{ url('/chapters/businessMang') }}">
                <div class="centerSmall text">
                    <p>Business Management</p>
                </div>
            </a>
        </div>
        <div class="box tenb glow courses">
            <a href="{{ url('/chapters/entrepreneurship') }}">
                <div class="centerSmall text">
                   <p>Entrepreneurship</p>
                </div>
            </a>
        </div>
        <div class="box eleven">
            <div class="clock-builder-text"><p>1st Day of School</p></div>
            <div class="clock-builder-output-days shake-slow"></div>
            <div class="clock-builder-output-hours shake-slow"></div>
            <div class="clock-builder-output-minutes shake-slow"></div>
            <div class="clock-builder-output-seconds shake-slow"></div>
        </div>
        <div class="box twelve glow">
            <a href="{{ url('/xpPoints/xpPoints') }}">
                <div class="centerLarge text">
                    <p><i class="fa fa-trophy" aria-hidden="true"></i><br><span class="subtype">Experience Points</span></p>
                </div>
            </a>
        </div>
        <div class="box thirteen shake-slow glow googleClassroom">
            <a href="https://classroom.google.com/"  target="_blank">
                    <img src="{{ URL::to('/') }}/images/googleClassroom.png">
                    <p>Google Classroom</p>
            </a>
        </div>
        <div class="box thirteenb shake-slow glow ic">
            <a href="https://kscloud1.infinitecampus.org/campus/portal/lyons.jsp"  target="_blank">
                    <img src="{{ URL::to('/') }}/images/infiniteCampus.png">
            </a>
        </div>
        <div class="box fourteen glow">

            <!-- start of slider -->
            <div id="carousel-example-generic" class="carousel slide calendarContainer center-block" data-ride="carousel">
            <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach ($calendar as $event)
                        <p class="event">{{ $event->event }}
                            <br><span>
                                {{ $event->eventDate }} {{ $event->eventTime }}
                            </span>
                        </p>
                    @endforeach
                </div>
            </div>
            <!-- end of slider--> 

        </div><!--End of Upcoming Events-->
        <div class="box fifteen glow courses">
            <a href="{{ url('/chapters/videoProductions') }}">
                <div class="centerSmall text">
                   <p>Video Productions</p>
                </div>
            </a>
        </div>
        <div class="box fifteenb glow courses">
            <a href="{{ url('/chapters/webpageDesign') }}">
                <div class="centerSmall text">
                   <p>Webpage Design</p>
                </div>
            </a>
        </div>
        <div class="box sixteen cteLab">
            <img src="{{ URL::to('/') }}/images/ctelab.jpg">
        </div>
        <div class="box sixteena small shake-slow glow">
            <div class="centerSmall text">
                <a href="{{ url('/ctelab') }}">
                        <p><i class="fa fa-laptop" aria-hidden="true"></i><br><span class="subtype">CTE Lab</span></p>
                </a>
            </div>
        </div>
        <div class="box sixteenb small shake-slow glow">
            <div class="centerSmall text">
                <a href="{{ url('/ctepathways') }}">
                        <p><i class="fa fa-road" aria-hidden="true"></i><br><span class="subtype">CTE Pathways</span></p>
                </a>
            </div>
        </div>
        <div class="box sixteenc small shake-slow glow">
            <div class="centerSmall text">
                <a href="https://www.youtube.com/channel/UCzQDbv5XSme3K2GYVAF59sA"  target="_blank">
                        <p><i class="fa fa-youtube-play" aria-hidden="true"></i><br><span class="subtype">YouTube Channel</span></p>
                </a>
            </div>
        </div>
        <div class="box sixteend small shake-slow glow">
            <div class="centerSmall text">
                <a href="{{ url('/studentProjects') }}">
                        <p><i class="fa fa-graduation-cap" aria-hidden="true"></i><br><span class="subtype">Student Projects</span></p>
                </a>
            </div>
        </div>
        <div class="box seventeen glow">
            <!-- start of slider -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    @foreach ($daily as $day)
                        <div class="item active">
                        
                            <p>{{ $day->fact }}</p>
                        
                        </div>

                        <div class="item">

                            <p>{{ $day->history }}</p>
                                
                        </div>
                        
                        <div class="item">

                            <p>{{ $day->quotePerson }}</p>
                            <p>{{ $day->quote }}</p>

                        </div>
                    @endforeach

                </div>
        <!-- end of slider-->
        </div>
        </div>
        <div class="box eighteen glow">
            <div class="centerLarge text">
                <a href="{{ url('/classSchedule') }}">
                    <p><i class="fa fa-calendar" aria-hidden="true"></i><br><span class="subtype">Class Schedule</span></p>
                </a>
            </div>
        </div>
        <div class="box nineteen">
            <a href="http://www.dailyteachingtools.com/best-website-design-awards-showcase.html#17" target="_blank"><img src="http://www.dailyteachingtools.com/images/220GoldShield.png" width="175" height="210"></a>
        </div>
        <div class="box twenty glow">
            <div class="centerLarge text">
                <p>
                    <a href="http://resume.zackvogel.com/" target="_blank"><span class="copyright">&copy;</span> Copyright 2017 
                        <span class="subtype">Zack Vogel</span>
                    </a>
                </p>
            </div>
        </div>
        <div class="box twentyone small shake-slow glow">
            <div class="centerSmall text">
                <a href="{{ url('/aboutMe') }}">
                    <p><i class="fa fa-user" aria-hidden="true"></i><br><span class="subtype">About Me</span></p>
                </a>
            </div>
        </div>
        <div class="box twentytwo small shake-slow glow">
            <div class="centerSmall text">
                <a href="https://www.facebook.com/USD405" target="_blank">
                    <p><i class="fa fa fa-facebook" aria-hidden="true"></i><br><span class="subtype">USD405 Facebook</span></p>
                </a>
            </div>
        </div>
        <div class="box twentythree small shake-slow glow">
            <div class="centerSmall text">
                <a href="mailto:zvogel@usd405.com">
                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i><br><span class="subtype">Email Me</span></p>
                </a>
            </div>
        </div>
        <div class="box twentyfour small shake-slow glow">
            <div class="centerSmall text">
                <a href="https://www.linkedin.com/in/zack-vogel-62a6938a" target="_blank">
                    <p><i class="fa fa-linkedin" aria-hidden="true"></i><br><span class="subtype">Linkedin</span></p>
                </a>
            </div>
        </div>
    </div>


    @include('includes.scripts')

    </body>
</html>
