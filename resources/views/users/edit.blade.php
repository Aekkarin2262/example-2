<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>

</head>

<body>
    <a href="{{ route('users') }}" class="btn btn-primary">กลับไปหน้าตาราง</a>
    <h1 class="text-center">Page แก้ไขข้อมูล</h1>
    <form action="{{ route('users.update') }}" method="post">

        @csrf <!--สำคัญ-->
        <input type="hidden" name="id" value="{{$users->id}}">

        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="username" name="username"value="{{$users->username}}">
            <small class="text-danger"> @error('username') {{$message}} @enderror </small>

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="password"value="{{$users->password}}">
            <small class="text-danger"> @error('password') {{$message}} @enderror </small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Fullname</label>
            <input type="text" class="form-control" id="fullname" name="fullname"value="{{$users->fullname}}">
            <small class="text-danger"> @error('fullname') {{$message}} @enderror </small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">สิทธิใช้งาน</label>
            <select name="role" id="role" class="form-control">
                <option value="">เลือก</option>
                <option value="1"{{($users->role ==1 ?'selected':'')}}>Admin</option>
                <option value="2"{{($users->role ==2 ?'selected':'')}}>User</option>
            </select>
            <small class="text-danger"> @error('role') {{$message}} @enderror </small>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
</body>

</html>
