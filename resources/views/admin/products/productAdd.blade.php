 @extends('layouts.main')  
  @section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Tambah Produk</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
      </div>
     

      <div class="col-12 p-3">
        <form action="/saveProduct" method="post" enctype="multipart/form-data">
            @csrf
        <div class="mb-5">
        <select class="form-select" name="category_id" required>
            <option value=""> --Pilih Kategori Produk--</option>
            @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
        </select>
    </div>
            <div class="mb-5">
                <label class="form-label"> Nama Produk</label>
                <input type="text" name="product_name" class="form-control" required>
            </div>
            <div class="mb-5">
                <label class="form-label"> Jumlah Stok</label>
                <input type="number" name="stock" class="form-control" required>
            </div>


            <label class="form-label"> Keterangan Produk</label>
            <div class="mb-5">
            <textarea class="form-control" name="product_desc" rows="3"   required></textarea>
            </div>


            <div class="mb-5">
                <label for="gambar" class="form-label"> Foto Produk</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input id="picture" type="file" name="picture" class="form-control" required onchange="previewImage()">
            </div>

            <a href="produk.php" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit" >Simpan</button>
        </form>
    </div>
    <script>
        function previewImage(){
            const picture = document.querySelector('#picture');
            const imgpreview = document.querySelector('.img-preview');

            imgpreview.style.display = 'block';

            const oFreader = new FileReader();
            oFreader.readAsDataURL(picture.files[0]);

            oFreader.onload = function(oFREvent){
                imgpreview.src = oFREvent.target.result;
            }
        }
    </script>
         @endsection