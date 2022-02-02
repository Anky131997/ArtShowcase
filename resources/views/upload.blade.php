@extends('layouts.app')

@section('title') Upload Your Art @endsection

@section('content')
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                <strong>Upload Your Art</strong> 
            </div>

            <div class="card-body">
                <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <input type="text" name="name" id="name" class="form-control" value="{{ isset($tattoo) ? $tattoo->name : '' }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="3" rows="3" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="color">Select a Color</label>
                        <select name="color" id="color" class="form-control">
                            <option value="">Select a Color</option>
                            <option value="colored"
                                @if(isset($tattoo))
                                    @if($tattoo->color == 'colored')
                                        selected
                                    @endif
                                @endif
                             >Colored</option>
                            <option value="b&w"
                                @if(isset($tattoo))
                                    @if($tattoo->color == 'b&w')
                                        selected
                                    @endif
                                @endif
                            >B/W</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="type">Select a Type</label>
                        <select name="type" id="type" class="form-control">
                            <option value="">Select a Type</option>
                                @foreach($types as $type)
                                        
                                    <option value="{{ $type->id }}"
                                        @if(isset($tattoo))
                                            @if( $type->id == $tattoo->type->id)
                                                selected
                                                @endif
                                        @endif
                                    >{{ $type->name }}</option>
                                        
                                @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection