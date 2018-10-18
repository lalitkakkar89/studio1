<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {!! Form::text('Name', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {{--<strong>Date and Time:</strong>--}}
            {{--<input type="date" name="date">--}}
            {{--&nbsp;--}}
            {{--<input type="time" name="OpeningTime">--}}

            {{--{{ Form::input('dateTime-local', 'game_date_time', Null, ['id' => 'game-date-time-text', 'class' => 'form-control']) }}--}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>