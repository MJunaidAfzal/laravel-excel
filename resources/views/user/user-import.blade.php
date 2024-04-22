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
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><b>Data Import</b></h1>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-body">
            <form action="{{ route('user.import-data') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="import">Select File</label>
                <input type="file"  name="file" class="form-control mt-3 p-3">
                <button type="submit" class="btn btn-info text-light mt-3 " style="float: right">Import File</button>
            </form>
        </div>
    </div>
</div>



    </div>
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

