<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<h1>User index </h1>
@include('sweetalert::alert')

    <div class="container">
        <a href="{{route('users.create')}}"class="btn btn-primary">เพิ่มข้อมูล</a>
<table border="1"class="table table-bordered">
    <thead>
        <tr>
            <td>id</td>
            <td>fullname</td>
            <td>username</td>
            {{-- <td>password</td> --}}
            <td>role</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->fullname}}</td>
            <td>{{$item->username}}</td>
            {{-- <td>{{$item->password}}</td> --}}
            <td>{{$item->role}}</td>
            <td>
                <a href="{{url('/users/edit/'.$item->id)}}"class="btn btn-warning">แก้ไข</a>

                <form method="post" action="{{route('users.delete',['id'=>$item->id])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">ลบ</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>

</html>
