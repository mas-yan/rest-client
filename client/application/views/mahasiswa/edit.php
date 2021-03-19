<div><?= $this->session->flashdata('hasil'); ?></div>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title><?= $judul ?></title>
</head>

<body>
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card">
          <div class="card-header text-white bg-primary">
            <h3>Update Mahasiswa</h3>
          </div>
          <div class="card-body">
            <?php echo form_open('mahasiswa/edit'); ?>
            <?php echo form_hidden('nim', $mahasiswa[0]['nim']); ?>
            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="text" disabled class="form-control" value="<?= $mahasiswa[0]['nim'] ?>" name="" id="nim" placeholder="Nim Mahasiswa">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" value="<?= $mahasiswa[0]['nama'] ?>" name="nama" id="nama" placeholder="nama Mahasiswa">
            </div>
            <div class="form-group">
              <label for="progdi">Progdi</label>

              <select name="prodi" class="form-control">
                <?php if ($mahasiswa[0]['prodi'] == 'S1-TI') {
                  echo '
        <option value="S1-TI" selected>S1-TI</option>
        <option value="D3-TI">D3-TI</option>';
                } else {
                  echo '
          <option value="S1-TI">S1-TI</option>
          <option value="D3-TI" selected>D3-TI</option>';
                } ?>
              </select>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
          </div>
          <?= form_close(); ?>
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>