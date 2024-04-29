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
        <form action="/updateProduct" method="post" enctype="multipart/form-data">
            @csrf
        <input type="hidden" name="id" value="{{$product->id}}">

    <div class="mb-3">
        <select class="form-select" name="category_id" required>
            <option value="{{$product->category_id}}">{{$product->category->category_name}}</option>

            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->category_name}} </option>
            @endforeach
        </select>
    </div>


            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah Stok</label>
                <input type="text" name="stock" class="form-control" value="{{$product->stock}}" required>
            </div>
            
            
            <div class="mb-3">
                <label class="form-label"> Deskripsi Produk</label>
            <textarea class="form-control" name="product_desc" rows="3" placeholder="Keterangan Binatang"  required>{{$product->product_desc}}</textarea>
            </div>
    
          @if ($product->picture)
                     <img height="150px" width="150px" class="img-preview img-fluid mb-3 col-sm-5"  src="{{ asset('storage/' .$product->picture)}}">
              @else
              @endif
              <img class="img-preview img-fluid mb-3 col-sm-5">
              
              <div class="mb-3">
                  <label for="gambar" class="form-label"> Gambar Produk</label>
                  
                <input id="picture" type="file" name="picture" class="form-control" onchange="previewImage()" >
            </div>

            <a href="produk.php" class="btn btn-success" >Back</a>
            <button type="submit" class="btn btn-primary" name="submit" >Save</button>

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