<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Importar, esportar archivo de excel</title>
</head>
<body>
    <div class="container">
        <h2>upload file</h2>
        <form action="{{url('import-excel-post')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="file">File</label>
                <input type="file" class="form-control-file" name="excel_file" id="file">
            </div>
            <button type="submit" class="btn btn-primary">upload</button>
        </form>
    </div>
</body>
</html>