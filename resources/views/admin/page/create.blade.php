@extends('admin.layouts.admin')

@section('title', 'Banner')

@section('content')

    <div class='col-lg-10'>

        <h1><i class='fa fa-user-plus'></i> Add Page</h1>
        <hr>

        {{-- @include ('errors.list') --}}

        {{ Form::open(array('url' => 'administrator/page')) }}

        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('desc', 'Desc') }}
            {{ Form::textarea('desc', '', array('class' => 'form-control lara-mce')) }}<br>
        </div>

        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
@endsection