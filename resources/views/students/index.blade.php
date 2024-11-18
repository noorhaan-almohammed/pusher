<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Students</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Students List</h2>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Degree</th>
        </tr>
        <?php $i=1;?>
        @foreach ($students as $student)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $student->full_name }}</td>
            <td>{{ $student->degree }}</td>
        </tr>
        @endforeach

    </table>
    <div id="test"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    @vite(['resources/js/app.js', 'resources/js/student.js'])
</body>
</html>
