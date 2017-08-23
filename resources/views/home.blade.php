@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">{{-- Row One --}}
        <div class="box square clear">
            @if (Route::has('login'))
                @if (Auth::check())

                    <div class="row">
                        <a href="{{ url('/') }}">
                            <div class="mini-box mini-square margin-right shake-slow oneA glow">
                                <div class="mini-center">
                                    <p class="v-center">Home</p>
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
                        <div class="mini-box mini-square margin-right shake-slow oneA glow">
                            <div class="mini-center">
                                <a href="{{ url('/login') }}">
                                    <p class="v-center">Login</p>
                                </a>
                            </div>
                        </div>
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
                            <div class="mini-center">
                                <a href="{{ url('/register') }}">
                                    <p class="v-center">Register</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        </div>
            
        <div class="box ex-large-rectangle two glow">
            <p class="v-center">Mr. Vogel's Classroom Website</p>
        </div>
    </div>{{-- End Row One --}}


    <div class="row">{{-- Row Two --}}
        <div class="box square threeHome glow">
            <p class="v-center text-center">
                {{ Auth::user()->name }}, welcome to 
                <br>
                <span class="subtype">
                    {{ Auth::user()->className }}!
                </span>
            </p>
        </div>
        <div class="box square fourHome glow">
            <p class="v-centerHome text-center">
                Experience Points
                <br>
                <span class="subtype">{{ Auth::user()->xp }}</span>
            </p>
        </div>
        <div class="box square fiveHome glow">
            <p class="v-centerHome text-center">
                Currency
                <br>
                <span class="subtype">$ {{ Auth::user()->currenty }}</span>
            </p>
        </div>
        <div class="box square sixHome glow">
            <p class="v-centerHome text-center">
                Badges
                <br>
                <span class="subtype">
                    @foreach ($badgeCount as $badge)
                        @if ($badge->user_id == Auth::user()->id)
                            {{ $badge->number }}
                        @endif
                    @endforeach
                </span>
            </p>
        </div>
        <div class="box square sevenHome glow">
            <p class="v-centerHome text-center">
                Items
                <br>
                <span class="subtype">
                    @foreach ($itemCount as $item)
                        @if ($item->user_id == Auth::user()->id)
                            {{ $item->number }}
                        @endif
                    @endforeach
                </span>
            </p>
        </div>

    </div>{{-- End Row Two --}}


    <div class="row">{{-- Row Three --}}
        <div class="box ex-large-rectangleHome eightHome glow">
            <table class="table">
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">XP</th>
                    <th class="text-center">Company</th>
                    <th class="text-center">Currency</th>
                </tr>
                
                @foreach ($users as $user)
                    @if ($user->className == Auth::user()->className)
                        <tr>
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-center">{{ $user->xp }} xp</td>
                            <td class="text-center">{{ $user->company }}</td>
                            <td class="text-center">${{ $user->currenty }}</td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="box square nineHome glow">
            <p class="v-center text-center">
                XP Leaderboard - 
                <br>
                <span class="subtype">
                    {{ Auth::user()->className }}
                </span>
            </p>
            <p class="v-center"></p>
        </div>

    </div>{{-- End Row Three --}}


    <div class="row">{{-- Row Four --}}
        <div class="box rectangle tenHome glow">
            <p class="v-center currency">Currency Leaderboard - {{ Auth::user()->className }}</p>
        </div>
        <div class="box large-rectangleHome elevenHome glow">
            <table class="table">
                <tr>
                    <th class="text-center">Currency</th>
                    <th class="text-center">Company</th>
                </tr>
                
                @foreach ($companies as $company)
                    @if ($user->className == Auth::user()->className)
                        <tr>
                            <td class="text-center">${{ $company->currency }}</td>
                            <td class="text-center">{{ $company->company }}</td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>

    </div>{{-- End Row Four --}}
    

    <div class="row">{{-- Row Five --}}
        <div class="box square one glow">
            <h1 class="v-center">Badges</h1>
        </div>
        <div class="box ex-large-rectangle one glow">
            @foreach ($badges as $badge)
                @if ($badge->user_id == Auth::user()->id)
                    <li>{{ $badge->badgeEarned }}</li>
                    {{-- <li>{{ $badge->user_id }}</li> --}}
                    <li>{{ $badge->created_at }}</li>
                @endif
            @endforeach
                    
        </div>

    </div>{{-- End Row Five --}}


    <div class="row">{{-- Row Six --}}
        <div class="box ex-large-rectangle one glow">
            @foreach ($items as $item)
                @if ($item->user_id == Auth::user()->id)
                    <li>{{ $item->item }}</li>
                    {{-- <li>{{ $badge->user_id }}</li> --}}
                    <li>{{ $item->created_at }}</li>
                @endif
            @endforeach
        </div>
        <div class="box square one glow">
            <h1 class="v-center">Items</h1>
        </div>

    </div>{{-- End Row Six --}}

</div>
@endsection
