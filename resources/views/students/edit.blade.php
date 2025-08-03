<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf @method('PUT')
    Name: <input type="text" name="name" value="{{ $student->name }}"><br>
    CNIC: <input type="text" name="cnic" value="{{ $student->cnic }}"><br>
    Gender: <input type="text" name="gender" value="{{ $student->gender }}"><br>
    <button type="submit">Update</button>
</form>
