<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel-Excel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  
</head>
<body>


<style>
    body{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
</style>

<div class="container mt-5">
  <h2 class="text-center"><b>{{ $title ?? ''  }}</b></h2>
  <div class="row">
    <div class="col-md-12">
        <a href="{{ route('user.export') }}">
            <button style="float: right" class="btn btn-success"> Export</button>
        </a>
        <a href="{{ route('user.import') }}">
            <button style="float: right;margin-right:10px" class="btn btn-danger">Import</button>
        </a>
    </div>
  </div>
  <table id="table" class="table table-bordered mt-5">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
      </tr>
    </thead>
   @forelse ($users as $index=>$item)
        <tr>
            <td>{{ ++$index }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
        </tr>
   @empty
     User Not Added!
   @endforelse
  </table>
</div>

</body>

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script>
   $(document).ready(function () {
       $('#table').DataTable();
   });

   </script>
</html>

