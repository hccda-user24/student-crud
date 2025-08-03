<form action="{{ route('students.store') }}" method="POST">
    @csrf
    Name: <input type="text" name="name"><br>
    CNIC: <input type="text" name="cnic"><br>
    Gender: <input type="text" name="gender"><br>
    <button type="submit">Submit</button>
</form>
