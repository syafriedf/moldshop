<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

<table id="datatable" class="table table-bordered" style="background-color: white;">
        <thead>
            <tr>
                <th width="20px" class="text-center">No</th>
                <th>Nama Operator</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($orders as $data)
                <tr>
                    <td class="text-center">{{ ++$i}}</td>
                    <td>{{ $data->date_in}}</td>
                    <td>{{ $data->from_dep}}</td>
                </tr>
                @empty
                <div class="alert alert-danger">
                    Data belum Tersedia.
                </div>
            @endforelse
        </tbody>
    </table><tr>



</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
