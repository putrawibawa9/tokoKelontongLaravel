 @extends('layouts.main')  
  @section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Tambah Kategori</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
      </div>
     
      <div class="col-12 p-3">
        <form method="post" action="saveCategory">
            @csrf
            <div class="mb-5">
                <label class="form-label"> Nama Kategori</label>
                <input type="text" name="category_name" class="form-control" required>
            </div>
            <a href="produk.php" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit" >Simpan</button>
        </form>
    </div>

          @endsection