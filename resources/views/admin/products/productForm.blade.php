 @extends('layouts.main')  
  @section('main')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Edit Produk</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
      </div>
     

      <div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">


        <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="id_produk" value="{{$product->id}}">
        <input type="hidden" name="gambarLama" value="{{$product->picture}}">

    <div class="mb-3">
        <select class="form-select" name="id_kategori" required>
            <option value="{{$product->category_id}}">{{$product->category->category_name}}</option>

            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->category_name}} </option>
            @endforeach
        </select>
    </div>


            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" value="{{$product->product_name}}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah Stok</label>
                <input type="text" name="jumlah_stok" class="form-control" value="{{$product->stock}}" required>
            </div>
            
            
            <div class="mb-3">
                <label class="form-label"> Deskripsi Produk</label>
            <textarea class="form-control" name="keterangan_produk" rows="3" placeholder="Keterangan Binatang"  required>{{$product->product_desc}}</textarea>
            </div>

            <img src="/img/{{$product->picture}}" width="100px" height="100px">

            <div class="mb-3">
                <label for="gambar" class="form-label"> Gambar Produk</label>
                <input type="file" name="gambar" class="form-control" >
            </div>

            <a href="produk.php" class="btn btn-success" >Back</a>
            <button type="submit" class="btn btn-primary" name="submit" >Save</button>

        </form>
    </div>
      @endsection