@extends('layouts.app')



@section('title') Tattoos Table @endsection

@section('content')

    @include('includes.sidebar')

    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                <strong>Tattoos</strong> 
            </div>

            <div class="card-body table-responsive" >
                @if(count($tattoos)>0)
                    <table class="table" >
                        <thead class="thead-dark">
                            <tr>
                                <th>Images</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Color</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tattoos as $tattoo)
                                <tr>
                                    <td>
                                        <img src="{{ asset('storage/'.$tattoo->image) }}" width=100px height=auto style="border-radius:5px;" alt="">
                                    </td>
                                    <td>{{ $tattoo->name }}</td>
                                    <td>{{ $tattoo->type->name }}</td>
                                    <td>{{ $tattoo->color }}</td>
                                    <td> 
                                        <a href="{{ route('tattoos.edit', $tattoo->id) }}" class="btn btn-info btn-sm" style="color:white">Edit</a> 
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteTattooModal" onclick="handleDelete( {{ $tattoo->id }} )">Delete</button>
                                        
                                        <!-- Delete Modal -->

                                        <div class="modal fade" id="deleteTattooModal" tabindex="-1" role="dialog" aria-labelledby="deleteTattooLabel" aria-hidden="true">
                                            <form action="" method="POST" id="deleteTattooForm">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete {{ $tattoo->name }}?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete this tattoo?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                                                        <button type="submit" class="btn btn-danger">Yes, Delete it</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-center">No Tattoos yet, Add some.</p>
                @endif
                
            </div>

            <div class="card-footer">
                <a href="{{ route('tattoos.create') }}" class="btn btn-success float-right">Add Tattoo</a>
            </div>
        </div>
    </div>

@endsection


@section('script')

<script>
    function handleDelete(id){

        
            var form = document.getElementById('deleteTattooForm')

            form.action = '/adminpanel/tattoos/' + id

            $('#deleteTattooModal').modal('show')

        }
</script>

@endsection