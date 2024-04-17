{{-- @dd($products) --}}
@extends('layouts.main')  
  @section('main')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produk</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>


      <div class="row">
        <div class="col-lg-2">
          <a href="produk-tambah.php"class="btn btn-success w-100 py-2" type="button">Tambah Data</a> 
        </div>
      </div>
     

      <div class="table-responsive medium mt-3 ">
        <table class="table table-striped table-sm table-bordered">
          <thead class="table-light">
            <tr>
              <th scope="col">Nama Produk</th>
              <th scope="col">Category</th>
              <th scope="col">Jumlah Stok</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Gambar</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
          @foreach ($products as $row)
            <tr>
              <td>{{$row->product_name}}</td>
              <td>{{$row->category->category_name}}</td>
              <td>{{$row->stock}}</td>
              <td>{{$row->product_desc}}</td>
                       <td class="text-center"><img height="150px" width="150px" src="/img/{{$row->picture}}"></td>
              <td class="d-flex">
                    <a  href="product/{{$row->id}}" class="btn btn-warning btn-sm ms-1">Edit</a>
                    <a href="produk-delete.php?id_produk=<?=$row['id_produk'];?>" class="btn btn-danger btn-sm " onclick="return confirm('yakin?');">Delete</a>
                   </td>
            </tr>
                @endforeach
          </tbody>
        </table>
      </div>


      @endsection