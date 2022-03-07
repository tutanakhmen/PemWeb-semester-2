<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Hasan Al Banna</title>
   </head>
   <body>
      <div class="container">
         <div class="row justify-content-md-center">
            <div class="col-sm-6">
               <div class="card">
                  <center>
                     <h5 class="card-header bg-primary text-white">Nilai Pemrograman Web Mahasiswa Semester 2</h5>
                  </center>
                  <div class="card-body bg-light">
                     <form method="GET" action="grade.php">
                        <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                           <div class="col-8">
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">
                                       <i class="fa fa-user"></i>
                                    </div>
                                 </div>
                                 <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                           <div class="col-8">
                              <select id="matkul" name="matkul" class="custom-select" required="required">
                                 <option value="ddp">Dasar-Dasar Pemrogram</option>
                                 <option value="pw">Pemrograman Web</option>
                                 <option value="so">Sistem Operasi</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                           <div class="col-8">
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">
                                       <i class="fa fa-mortar-board"></i>
                                    </div>
                                 </div>
                                 <input id="uts" name="uts" placeholder="Nilai UTS" type="text" required="required" class="form-control">
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                           <div class="col-8">
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">
                                       <i class="fa fa-mortar-board"></i>
                                    </div>
                                 </div>
                                 <input id="uas" name="uas" placeholder="Nilai UAS" type="text" required="required" class="form-control">
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="praktikum" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
                           <div class="col-8">
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">
                                       <i class="fa fa-mortar-board"></i>
                                    </div>
                                 </div>
                                 <input id="praktikum" name="praktikum" placeholder="Nilai Tugas Praktikum" type="text" required="required" class="form-control">
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="offset-4 col-8">
                              <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                           </div>
                        </div>
                     </form>
                  </div>


                  <div class="text-center card-footer text-muted">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>