@extends('admin.menu.master')
@section('noidung')
<div class="row">
   <div class="col-md-12">
      <!-- DATA TABLE -->
      <div class="card">
         <div class="card-header">
            <strong>Sửa Loại Sản Phẩm</strong>
         </div>
         <div class="card-body card-block">
            <form action="" method="POST" class="form-horizontal">
               <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tên Loại Sản Phẩm </label><br>
                     <input type="text" id="text-input" name="tenLoaiSanPham" value="{{ $loaisanpham->tenLoaiSanPham }}" placeholder="Nhập tên loại Sản Phẩm" class="form-control">
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-fw">
                  Sửa
                  </button>
                  <a href="{{ route('admin.pages.loaisanpham.danhsach') }}" class="btn btn-info btn-fw">
                  Quay về
                  </a>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
