@extends('layouts.app')

@section('title') {{ isset($type) ? 'Edit Type' : 'Create Type' }} @endsection

@section('content')

    @include('includes.sidebar')

    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                <strong>{{ isset($type) ? 'Edit Type' : 'Create Type' }}</strong> 
            </div>

            <div class="card-body">
                <form action="{{ isset($type) ? route('types.update', $type->id) : route('types.store') }}" method="POST">
                    @csrf
                    @if( isset($type) )
                        @method('PUT')
                    @endif
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                <ul class="list-group">
                                    <li class="list-group-item text-danger">
                                        {{ $error }}
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ isset($type) ? $type->name : '' }}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">{{ isset($type) ? 'Edit Type' : 'Create Type' }}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection
