<html>


<form action = "{{ url('/updateData/'. $user->id) }}" method = "post">
	<input type="hidden" value="{{$user->id}}" name="id">
	{{ csrf_field() }}
   Name:<input type = 'text' name = 'name' value="{{ $user->name }}">
   <input type = 'submit' value = "Update" />
</html>