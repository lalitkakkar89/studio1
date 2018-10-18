@extends('home')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Studios</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('studio.create') }}"> Create New Studio</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table>
        <tr>
            <td>


                {!! Form::open(array('method'=>'GET', 'role'=>"form" ,'id'=>"search-form", 'class'=>"form-inline")) !!}
                {!! Form::text('search', null,
                              array('required',
                                   'class'=>'form-control',
                                   'placeholder'=>'Search for a Studio...')) !!}
                {!! Form::submit('Search',
                                           array('class'=>'btn btn-default')) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    </table>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Booked Timings</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $article->Name}}</td>
                <td>{{ $article->OpeningTime}} - {{ $article->ClosingTime}}</</td>
                <td>
                    {{--<a class="btn btn-info" href="{{ route('studio.show',$article->id) }}">Show</a>--}}
                    <a class="btn btn-primary" href="{{ route('studio.edit',$article->Id) }}">Book</a>
                    {{--{!! Form::open(['method' => 'DELETE','route' => ['studio.destroy', $article->id],'style'=>'display:inline']) !!}--}}
                    {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                    {{--{!! Form::close() !!}--}}
                </td>
            </tr>
        @endforeach
    </table>


    {!! $articles->links() !!}
@endsection