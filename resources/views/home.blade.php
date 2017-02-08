@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">I am working on it</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        
                        <th>Sl.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>

                        @foreach($user as $value)    
                        <tr>
                            <td> {{ $value->id }}</td>
                            <td> {{ $value->name }}</td>
                            <td> {{ $value->email }}</td>
                            <td>
                                <a href="deleteData/{{$value->id}}">Delete</a>
                                <a onclick="check()" href="#">Click on me</a>
                            </td>
                        </tr>
                        @endforeach    

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function check(){
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel plx!",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm){
          if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        });
                
    }
</script>
@endsection
