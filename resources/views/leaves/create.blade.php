@extends('layouts.default')

{{-- Page title --}}
@section('title')
Leave @parent
@stop

@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    {!! Form::open(['route' => 'leaves.store','class' => 'form-horizontal col-md-12']) !!}
                    <div class="row">
                        @include('leaves.fields')
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
