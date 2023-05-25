<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pemeriksaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style class="darkreader darkreader--sync" media="screen"></style>
</head>

<body>
    <h3 class="text-center">{{$title}}</h3>

    <form>
        <div class="my-4 mx-5">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_pemeriksaan" class="col-4 col-form-label">Tanggal Pemeriksaan</label>
                <div class="col-3">
                    <input id="tgl_pemeriksaan" name="tgl_pemeriksaan" type="date" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir / Usia</label>
                <div class="col-8">
                    <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki-laki">
                        <label for="jk_0" class="custom-control-label">Laki-laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan">
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                </div>
            </div>
    </form>
    <br>

    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th scope="col">Jenis Tes</th>
                <th scope="col">Hasil Pemeriksaan</th>
                <th scope="col">Normal</th>
            </tr>
            <tr>
                <td>Tekanan Darah</td>
                <td></td>
                <td>{{$tekanandarah}}</td>
            </tr>
            <tr>
                <td>Asam Urat</td>
                <td></td>
                <td>{{$asamurat}}</td>
            </tr>
            <tr>
                <td>Kolesterol Total</td>
                <td></td>
                <td>{{$kolesterol}}</td>
            </tr>
            <tr>
                <td>Gula Darah</td>
                <td></td>
                <td>
                    <p>{{$guladarah1}}</p>
                    <p>{{$guladarah2}}</p>
                    <p>{{$guladarah3}}</p>
                </td>
            </tr>
        </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
