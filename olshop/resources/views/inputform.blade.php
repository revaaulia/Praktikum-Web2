<?php
$ar_kota = array('Depok' => 'Depok',
'Surakarta' => 'Surakarta',
'Jakarta' => 'Jakarta',
'Bandung' => 'Bandung',
'Bali' => 'Bali',
'Lampung' => 'Lampung');

$ar_skill = array('PHP' => 'PHP',
'MySql' => 'MySql',
'JavaScript' => 'JavaScript',
'HTML' => 'HTML',
'CSS' => 'CSS' );

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <h1>Form HTML Pada PHP</h1><br>
        <form action="{{ url('inputform') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" placeholder="Masukkan Email Anda" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lokasi" class="col-4 col-form-label">Lokasi</label>
                <div class="col-8">
                    <select id="lokasi" name="lokasi" class="custom-select">
                        <option value="" selected>Pilih Lokasi Anda</option>
                <?php
                foreach ($ar_kota as $value => $kota) {
                ?>

                        <option value="{{ $value }}">{{ $kota }}</option>

                <?php
                }
                ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input"
                            value="Laki-Laki">
                        <label for="jenis_kelamin_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input"
                            value="Perempuan">
                        <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
              <label class="col-4">Skill</label>
              <div class="col-8">
                <?php
                foreach ($ar_skill as $skill => $nama_skill) {
                ?>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <label>
                        <input name="skill[]" type="checkbox" value="{{ $skill }}">
                        {{ $nama_skill }}</label>
                    </div>
                    {{-- <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill_1" type="checkbox" class="custom-control-input" value="{{ $skill }}">
                    <label for="skill_1" class="custom-control-label">{{ $nama_skill }}</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill_2" type="checkbox" class="custom-control-input"
                        value="{{ $skill }}">
                    <label for="skill_2" class="custom-control-label">{{ $nama_skill }}</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill_3" type="checkbox" class="custom-control-input"
                        value="{{ $skill }}">
                    <label for="skill_3" class="custom-control-label">{{ $nama_skill }}</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill_4" type="checkbox" class="custom-control-input"
                        value="{{ $skill }}">
                    <label for="skill_4" class="custom-control-label">{{ $nama_skill }}</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill_5" type="checkbox" class="custom-control-input"
                        value="{{ $skill }}">
                    <label for="skill_5" class="custom-control-label">{{ $nama_skill }}</label>
                    </div> --}}
                <?php
                }
                ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </form>
          
          <h1>Hasil Input</h1><br>
          <ul>
            <li>Nama : {{ !empty($data['nama'])? $data['nama']:'' }}</li>
            <li>Email : {{ !empty($data['email'])? $data['email']:'' }}</li>
            <li>Lokasi : {{ !empty($data['lokasi'])? $data['lokasi']:'' }}</li>
            <li>Jenis Kelamin : {{ !empty($data['jenis_kelamin'])? $data['jenis_kelamin']:'' }}</li>
            <li>Skill :
            <?php
            if (!empty($data['skill'])){
                foreach ($data['skill'] as $skill){
            ?>

            {{ $skill }},

            <?php
                }
            }
            ?>
            </li>
          </ul>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>
</html>