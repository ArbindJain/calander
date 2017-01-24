@extends('master')

@section('title', 'Home')

@section('content')
<div class="col-md-12"> 

    <div class="col-md-10">    
        <h1 class="text-left text-uppercase text-left">All Events of January 2017</h1>
    </div>

    <div class="col-md-2"> 
        <a type="button" class="btn btn-success text-right" href="#" style="margin-top: 25px;" data-toggle="modal" data-target="#myModal">Add Event</a>
    </div>
    <!-- modal -->
    <!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Create a New Event</h4>
      </div>
      <div class="modal-body">

        {!! Form::open(array('url' => 'calander')) !!}
        {!! Form::hidden('id', $id) !!}

    <div class="form-group">
        {!! Form::label('eventtitle', 'Event Title') !!}
        {!! Form::text('eventtitle', Input::old('eventtitle'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('eventlocation', 'Event Location') !!}
        {!! Form::text('eventlocation', Input::old('eventlocation'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('eventnotes', 'Event Note') !!}
        <textarea class="form-control" rows="5" id="comment" name="eventnotes"></textarea>
    </div>

    {!! Form::submit('Create the Event!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}

      </div>
  <!--     <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>
    <!-- modal -->

</div>
@foreach($events as $event)
<div class="col-md-12" style="padding: 0px 60px 0px 60px;">
        <hr />
        <h2 class="text-left text-uppercase"><strong> {!! $event->title!!} </strong></h2>
        <small class="helper-text text-muted">{!! $event->location!!}</small>
        <p>{!! $event->notes!!}<br></p>
        <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#myModaledit{!! $event->id !!}">edit</a>
        {!! Form::open(['method' => 'DELETE', 'route' => 'calander.destroy', $event->id]) !!}
                {!! Form::hidden('id', $event->id) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        <hr />
</div>
<!-- edit modal -->
<!-- Modal -->
<div id="myModaledit{!! $event->id !!}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Edit Event </h4>
      </div>
      <div class="modal-body">

        {!! Form::model($event, array('route' => array('calander.update', $event->id), 'method' => 'PATCH')) !!}

        {!! Form::hidden('user_id', $event->user_id) !!}
    <div class="form-group">
        {!! Form::label('eventtitle', 'Event Title') !!}
        {!! Form::text('eventtitle', $event->title, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('eventlocation', 'Event Location') !!}
        {!! Form::text('eventlocation', $event->location, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('eventnotes', 'Event Note') !!}<!-- 
        <textarea class="form-control" rows="5" id="comment" name="eventnotes"></textarea>  -->

        {!! Form::textarea('eventnotes', $event->notes, array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Update Event!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}

      </div>
  <!--     <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>
    <!-- modal -->


@endforeach


@endsection