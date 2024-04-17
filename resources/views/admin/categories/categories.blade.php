@extends('layouts.main')  
  @section('main')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produk</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>


      <div class="row">
        <div class="col-lg-2">
          <a href="kategori-tambah.php"class="btn btn-success w-100 py-2" type="button">Tambah Data</a> 
        </div>
      </div>
     

      <div class="table-responsive medium mt-3 ">
        <table class="table table-striped table-sm table-bordered">
          <thead class="table-light">
            <tr>
            <th class="text-center">ID</th>
              <th class="text-center">Category</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>

          @foreach ($categories as $row)
              <tr>
                <td class="text-center">{{$row->id}}</td>
                <td>{{$row->category_name}}</td>
                <td class="text-center">
                  <a href="/category/{{$row->id}}" class="btn btn-primary btn-sm">Ubah</a>
                  <a href="kategori-delete.php?id_kategori=<?=$row['id_kategori'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Hapus</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    @endsection