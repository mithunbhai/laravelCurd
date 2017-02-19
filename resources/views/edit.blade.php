<html>


<form action = "{{ url('/updateData/'. $user->id) }}" method = "post">
	<input type="hidden" value="{{$user->id}}" name="id">
	{{ csrf_field() }}
	<h1>Enter The Required Field</h1>
   Name:  <input type = 'text' name = 'name' value="{{ $user->name }}"></br></br>
   Email: <input type = 'text' name = 'email' value="{{ $user->email }}"></br></br>

   <input type = 'submit' value = "Update" />


</html>