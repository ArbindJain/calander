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
                    <a href="{{url('calander')}}/{{$first}}">
                    <li class="day">
                        <div class="date">{{$first}}</div>                       
                    </li>
                    </a>
                    @endforeach
                </ul>

                    <!-- Row #2 -->



                 <ul class="days">
                    @foreach($secondweek as $second)
                    <a href="{{url('calander')}}/{{$second}}">
                    <li class="day">
                        <div class="date">{{$second}}</div>                       
                    </li>
                    </a>
                    @endforeach
                </ul>

                    <!-- Row #3 -->

                 <ul class="days">
                    @foreach($thirdweek as $third)
                    <a href="{{url('calander')}}/{{$third}}">
                    <li class="day">
                        <div class="date">{{$third}}</div>                       
                    </li>
                    </a>
                    @endforeach
                </ul>

                    <!-- Row #4 -->
                 <ul class="days">
                    @foreach($fourthweek as $fourth)
                    <a href="{{url('calander')}}/{{$fourth}}">
                    <li class="day">
                        <div class="date">{{$fourth}}</div>                       
                    </li>
                    </a>
                    @endforeach
                </ul>
                        <!-- Row #5 -->

                <ul class="days">
                    @foreach($fifthweek as $fifth)
                    <a href="{{url('calander')}}/{{$fifth}}">
                    <li class="day">
                        <div class="date">{{$fifth}}</div>                       
                    </li>
                    </a>
                    @endforeach
                </ul>

                

            </div><!-- /. calendar -->
        </div><!-- /. wrap -->

@endsection