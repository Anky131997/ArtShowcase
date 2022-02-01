@extends('layouts.app')

@section('title') Types Table @endsection

@section('content')

    @include('includes.sidebar')

    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                <strong>Types</strong> 
            </div>

            <div class="card-body">
                @if(count($types)>0)
                    <div class="table-responsive text-nowrap">
                        <table id="typeTable" class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($types as $type)
                                    <tr>
                                        <td>{{ $type->name }}</td>
                                        <td> 
                                            <a href="{{ route('types.edit', $type->id) }}" class="btn btn-info btn-sm" style="color:white">Edit</a> 
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteTypeModal" onclick="handleDelete( {{ $type->id }} )">Delete</button>
                                            <div class="modal fade" id="deleteTypeModal" tabindex="-1" role="dialog" aria-labelledby="deleteTypeLabel" aria-hidden="true">
                                                <form action="" method="POST" id="deleteTypeForm">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete {{ $type->name }}?</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this type?
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
                    </div>
                @else
                    <p class="text-center">No Types yet, Add some.</p>
                @endif
                
            </div>

            <div class="card-footer">
                <a href="{{ route('types.create') }}" class="btn btn-success float-right">Add Type</a>
            </div>
        </div>
    </div>

@endsection


@section('script')

<script>
    function handleDelete(id){

        
            var form = document.getElementById('deleteTypeForm')

            form.action = '/adminpanel/types/' + id

            $('#deleteTypeModal').modal('show')

        }

        $(document).ready(function () {
            $('#typeTable').DataTable({
                "pagingType": "simple_number" // false to disable pagination (or any other option)
            });
            $('.dataTables_length').addClass('bs-select');
        });

    
        $(".button-collapse").sideNav();
        var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        var ps = new PerfectScrollbar(sideNavScrollbar);

        $('.button-collapse').sideNav({
            edge: 'left', // Choose the horizontal origin
            closeOnClick: false, // Closes side-nav on &lt;a&gt; clicks, useful for Angular/Meteor
            breakpoint: 1440, // Breakpoint for button collapse
            MENU_WIDTH: 240, // Width for sidenav
            timeDurationOpen: 300, // Time duration open menu
            timeDurationClose: 200, // Time duration open menu
            timeDurationOverlayOpen: 50, // Time duration open overlay
            timeDurationOverlayClose: 200, // Time duration close overlay
            easingOpen: 'easeOutQuad', // Open animation
            easingClose: 'easeOutCubic', // Close animation
            showOverlay: true, // Display overflay
            showCloseButton: false // Append close button into siednav
        });

        $('.button-collapse').sideNav('show');
// Hide sideNav
        $('.button-collapse').sideNav('hide');
</script>

@endsection