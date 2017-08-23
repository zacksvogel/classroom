@extends ('layouts.layouts')

@section ('content')


    <div class="row">{{-- Row One --}}
        <div class="box square clear">
            @if (Route::has('login'))
                @if (Auth::check())

                    <div class="row">
                        <a href="{{ url('/home') }}">
                            <div class="mini-box mini-square margin-right shake-slow oneA glow">
                                <div class="mini-center">
                                    <p class="v-center">Dashboard</p>
                                </div>
                            </div>
                        </a>
                        <div class="mini-box mini-square shake-slow oneB glow">
                            <div class="mini-center">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mini-box mini-square margin-right margin-top shake-slow oneC glow">
                            <div class="mini-center">
                                
                            </div>
                        </div>
                        <div class="mini-box mini-square margin-top shake-slow oneD glow">
                            <div class="mini-center v-center">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>

                @else
                    <div class="row">
                        <a href="{{ url('/login') }}">
                            <div class="mini-box mini-square margin-right shake-slow oneA glow">
                                <div class="mini-center">
                                    <p class="v-center">Login</p>
                                </div>
                            </div>
                        </a>
                        <div class="mini-box mini-square shake-slow oneB glow">
                            <div class="mini-center">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mini-box mini-square margin-right margin-top shake-slow oneC glow">
                            <div class="mini-center">
                                
                            </div>
                        </div>
                        <a href="{{ url('/register') }}">
                            <div class="mini-box mini-square margin-top shake-slow oneD glow">
                                <div class="mini-center">
                                    <p class="v-center">Register</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endif
            
        </div>
        <div class="box ex-large-rectangle two glow">
            <p class="v-center">Mr. Vogel's Classroom Website</p>
        </div>
    </div>{{-- End Row One --}}


    <div class="row">{{-- Row Two --}}
        <div class="box square clear">
            <div class="row three glow">
                <a href="{{ url('/chapters/accounting') }}">
                    <div class="mini-box mini-rectangle">
                        <p class="v-center">Accounting I/II</p>
                    </div>
                </a>
            </div>
            <div class="row three glow">
                <a href="{{ url('/chapters/avProductions') }}">
                    <div class="mini-box mini-rectangle margin-top">
                        <p class="v-center">AV Productions</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="box rectangle glow">
            <!-- start of slider -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="{{ url('/chapters/accounting') }}">
                         <img src="{{ URL::to('/') }}/images/slider-accounting2.png">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/chapters/avProductions') }}">
                         <img src="{{ URL::to('/') }}/images/slider-av2.png" alt="AV Productions">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/chapters/avProductions') }}">
                         <img src="{{ URL::to('/') }}/images/slider-management2.png" alt="Business Management">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/chapters/avProductions') }}">
                         <img src="{{ URL::to('/') }}/images/slider-entre2.png" alt="Entrepreneurship">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/chapters/avProductions') }}">
                         <img src="{{ URL::to('/') }}/images/slider-vp2.png" alt="Video Productions">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/chapters/avProductions') }}">
                         <img src="{{ URL::to('/') }}/images/slider-web2.png" alt="Webpage Design">
                        </a>
                    </div>
                    <!-- <div class="item">
                        <a href="{{ url('/chapters/busEssentials') }}">
                         <img src="images/slider-be.png" alt="Business Essentials">
                        </a>
                    </div> -->
                    {{-- <div class="item">
                        <a href="{{ url('/chapters/videoProductions') }}">
                         <img src="{{ URL::to('/') }}/images/slider-vp2.png" alt="Video Productions">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('/chapters/webpageDesign') }}">
                         <img src="{{ URL::to('/') }}/images/slider-web2.png" alt="Web Page Design">
                        <a>
                    </div> --}}
                </div>
            </div>
            <!-- end of slider-->
        </div>
        <div class="box square clear">
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









        <div class="box square clear">
            <div class="row">

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
    
    echo '<div class="mini-box mini-square margin-right shake-slow glow"><div class="mini-center weather"><p class="v-center">'. substr($condition->getTemperature(), 0, 4)."&#176;<p></div></div>". "\n";
    echo '<div class="mini-box mini-square shake-slow glow"><div class="mini-center weather weatherPadding"><p class="v-center">'. substr($condition->getWindSpeed(), 0, 4)."<br>mph</p></div></div></div>". "\n";
    echo '<div class="row"><div class="mini-box mini-square margin-right margin-top shake-slow glow"><div class="mini-center weather weatherPadding"><p class="v-center text-center">'.($condition->getHumidity()*100)."&#37;<br>Humidity</p></div></div>". "\n";
    echo '<div class="mini-box mini-square margin-top shake-slow glow"><div class="mini-center weather"><p class="v-center">'.$condition->getSummary()."</p></div></div></div>". "\n";


?>
        </div> {{-- End weather boxes --}}
















    </div>{{-- End Row Two --}}







    <div class="row">{{-- Row Three --}}
        <div class="box square clear">
            <div class="row seven glow">
                <a href="{{ url('/chapters/businessMang') }}">
                    <div class="mini-box mini-rectangle">
                        <p class="v-center">Business Management</p> 
                    </div>
                </a>
            </div>
            <div class="row seven glow">
                <a href="{{ url('/chapters/entrepreneurship') }}">
                    <div class="mini-box mini-rectangle margin-top">
                        <p class="v-center">Entrepreneurship</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="box square eight clear">
            <div class="clock-builder-text text-center"><p>Thanksgiving Break</p></div>
            <div class="clock clock-builder-output-days shake-slow text-center"></div>
            <div class="clock clock-builder-output-hours shake-slow text-center"></div>
            <div class="clock clock-builder-output-minutes shake-slow text-center"></div>
            <div class="clock clock-builder-output-seconds shake-slow text-center"></div>
        </div>
        <div class="box square nine glow">
            <div class="mini-center">
                <a href="{{ url('/studentProjects') }}">
                    <p class="v-center text-center"><i class="fa fa-graduation-cap" aria-hidden="true"></i><br><span class="subtype">Student Projects</span></p>
                </a>
            </div>
        </div>
        <div class="box skinny-square clear">
            <div class="row">
                <div class="mini-box mini-square shake-slow tenA glow"></div>
            </div>
            <div class="row">
                <div class="mini-box mini-square margin-top shake-slow tenB glow">
                    <a href="https://kscloud1.infinitecampus.org/campus/portal/lyons.jsp"  target="_blank">
                        <img src="{{ URL::to('/') }}/images/infiniteCampus.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="box small-rectangle eleven glow">
        <!-- start of slider -->
            <div id="carousel-example-generic" class="carousel slide calendarContainer center-block" data-ride="carousel">
            <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                <div class="item active calendar1 text-center">Calendar of Events</div>
                @foreach ($calendar as $event)
                    <div class='item'>
                        <p class="event text-center">{{ $event->event }}</p>
                        <p class="dateTime text-center">{{ $event->eventDate }} {{ $event->eventTime }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- end of slider-->

        </div>
    </div>{{-- End Row Three --}}


    <div class="row">{{-- Row four --}}
        <div class="box square clear">
            <div class="row twelve glow">
                <a href="{{ url('/chapters/videoProductions') }}">
                    <div class="mini-box mini-rectangle">
                        <p class="v-center">Video Productions</p>
                    </div>
                </a>
            </div>
            <div class="row twelve glow">
                <a href="{{ url('/chapters/webpageDesign') }}">
                    <div class="mini-box mini-rectangle margin-top">
                        <p class="v-center">Webpage Design</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="box rectangle thirteen glow">
            <!-- start of slider -->
            <div id="carousel-example-generic" class="carousel slide dailyCenter center-block" data-ride="carousel">
            <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach ($daily as $day)
                        <div class='item active'>
                            <p class="text-center daily">{{ $day->history }}</p>
                        </div>
                    @endforeach
                    @foreach ($daily as $day)
                        <div class='item'>
                            <p class="text-center daily">{{ $day->fact }}</p>
                        </div>
                    @endforeach
                    @foreach ($daily as $day)
                        <div class='item'>
                            <p class="text-center quote">{{ $day->quote }}</p>
                            <p class="text-center quotePerson">{{ $day->quotePerson }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- end of slider-->
        </div>
        <div class="box square fourteen glow">
            <div class="mini-center">
                <a href="https://www.youtube.com/channel/UCzQDbv5XSme3K2GYVAF59sA">
                    <p class="v-center text-center"><i class="fa fa-youtube-play" aria-hidden="true"></i><br><span class="subtype">YouTube Channel</span></p>
                </a>
            </div>
        </div>
        <div class="box square fifteen glow">
            <div class="mini-center">
                <a href="{{ url('/classSchedule') }}">
                    <p class="v-center text-center"><i class="fa fa-calendar" aria-hidden="true"></i><br><span class="subtype">Class Schedule</span></p>
                </a>
            </div>
        </div>
        
    </div>{{-- End Row Four --}}


    <div class="row">{{-- Row Five --}}
        <div class="box square sixteen glow">
            <div class="mini-center">
                <a href="{{ url('/ctelab') }}">
                    <p class="v-center text-center"><i class="fa fa-laptop" aria-hidden="true"></i><br><span class="subtype">CTE Lab</span></p>
                </a>
            </div>
        </div>
        <div class="box square clear"></div>
        <div class="box rectangle eighteen glow">
            <p class="v-center">
                <a href="http://resume.zackvogel.com/" target="_blank"><span class="copyright">&copy;</span> Copyright 2017 
                    <span class="subtype">Zack Vogel</span>
                </a>
            </p>
        </div>
        <div class="box square clear">
            <div class="row">
                <div class="mini-box mini-square margin-right shake-slow nineteenA glow">
                    <div class="mini-center">
                        <a href="{{ url('/aboutMe') }}">
                            <p class="v-center text-center"><i class="fa fa-user" aria-hidden="true"></i><br><span class="subtype">About Me</span></p>
                        </a>
                    </div>
                </div>
                <div class="mini-box mini-square shake-slow nineteenB glow">
                    <div class="mini-center">
                        <a href="https://twitter.com/zacksvogel" target="_blank">
                            <p class="v-center text-center"><i class="fa fa-twitter" aria-hidden="true"></i><br><span class="subtype">Twitter</span></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mini-box mini-square margin-right margin-top shake-slow nineteenC glow">
                    <div class="mini-center">
                        <a href="mailto:zvogel@usd405.com">
                            <p class="v-center text-center"><i class="fa fa-envelope-o" aria-hidden="true"></i><br><span class="subtype">Email Me</span></p>
                        </a>
                    </div>
                </div>
                <div class="mini-box mini-square margin-top shake-slow nineteenD glow">
                    <div class="mini-center">
                        <a href="https://www.linkedin.com/in/zack-vogel-62a6938a" target="_blank">
                            <p class="v-center text-center"><i class="fa fa-linkedin" aria-hidden="true"></i><br><span class="subtype">Linkedin</span></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>{{-- End Row Five --}}


@endsection