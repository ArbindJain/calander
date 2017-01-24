@extends('master')

@section('title', 'Home')

@section('content')
<div id="calendar-wrap">
            <header>
                <h1 class="text-left text-uppercase">January 2017</h1>
            </header>
            <div id="calendar">
                <ul class="weekdays">
                    <li>Sunday</li>
   
                    <li>Monday</li>
   
                    <li>Tuesday</li>
  
                    <li>Wednesday</li>

                    <li>Thursday</li>
 
                    <li>Friday</li>
   
                    <li>Saturday</li>
 
                </ul>

                <!-- Days from previous month -->

                <ul class="days">
                    @foreach($firstweek as $first)
                    @if ( ! Sentry::check())
                     <a href="{{url()}}/login"> 
                    @else 
                     <a href="{{url('calander')}}/{{$first}}">  
                    @endif
                    <li class="day">
                        <div class="date">{{$first}}</div>                       
                        <p class="text-center" style="padding-top: 80px; font-size:10px; font-weight:bold;"> click here to add event </p>
                    </li>
                    </a>
                    @endforeach
                </ul>

                    <!-- Row #2 -->



                 <ul class="days">
                    @foreach($secondweek as $second)
                    @if ( ! Sentry::check())
                     <a href="{{url()}}/login"> 
                    @else 
                    <a href="{{url('calander')}}/{{$second}}">
                    @endif
                    <li class="day">
                        <div class="date">{{$second}}</div>                       
                        <p class="text-center" style="padding-top: 80px; font-size:10px; font-weight:bold;"> click here to add event </p>
                    </li>
                    </a>
                    @endforeach
                </ul>

                    <!-- Row #3 -->

                 <ul class="days">
                    @foreach($thirdweek as $third)
                    @if ( ! Sentry::check())
                     <a href="{{url()}}/login"> 
                    @else 
                    <a href="{{url('calander')}}/{{$third}}">
                    @endif
                    <li class="day">
                        <div class="date">{{$third}}</div>                       
                        <p class="text-center" style="padding-top: 80px; font-size:10px; font-weight:bold;"> click here to add event </p>
                    </li>
                    </a>
                    @endforeach
                </ul>

                    <!-- Row #4 -->
                 <ul class="days">
                    @foreach($fourthweek as $fourth)
                    @if ( ! Sentry::check())
                     <a href="{{url()}}/login"> 
                    @else 
                    <a href="{{url('calander')}}/{{$fourth}}">
                    @endif
                    <li class="day">
                        <div class="date">{{$fourth}}</div>                       
                        <p class="text-center" style="padding-top: 80px; font-size:10px; font-weight:bold;"> click here to add event </p>
                    </li>
                    </a>
                    @endforeach
                </ul>
                        <!-- Row #5 -->

                <ul class="days">
                    @foreach($fifthweek as $fifth)
                    @if ( ! Sentry::check())
                     <a href="{{url()}}/login"> 
                    @else 
                    <a href="{{url('calander')}}/{{$fifth}}">
                    @endif
                    <li class="day">
                        <div class="date">{{$fifth}}</div>                       
                        <p class="text-center" style="padding-top: 80px; font-size:10px; font-weight:bold;"> click here to add event </p>
                    </li>
                    </a>
                    @endforeach
                </ul>

                

            </div><!-- /. calendar -->
        </div><!-- /. wrap -->

@endsection