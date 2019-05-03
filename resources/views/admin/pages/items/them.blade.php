@extends('admin.menu.master')
@section('noidung')
<div class="row">
   <div class="col-md-12">
      <!-- DATA TABLE -->
      <div class="card">
         <div class="card-header">
            <strong>Thêm Mặt Hàng</strong>
         </div>
         <div class="card-body card-block">
            <form action="{{ route('admin.pages.items.them') }}" method="POST" class="form-horizontal">
               <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
               <div class="row form-group">
                  <div class="col-6 col-md-6">
                     <label class="badge badge-info">Tên Mặt Hàng </label><br>
                     <input type="text" id="text-input" name="tenMatHang" value="{{ old('tenMatHang') }}" placeholder="Nhập tên mặt hàng" class="form-control">
                  </div>
                  <div class="col-6 col-md-6">
                        <label class="badge badge-info">Mã Loại Sản Phẩm</label><br>
                        <select name="maLoaiSanPham" class="form-control">
                            @foreach ($loaisanpham as $lsp)
                            <option value="{{ $lsp->id }}">{{ $lsp->tenLoaiSanPham }}</option>
                            @endforeach
                        </select>
                     </div>
               </div>
               <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-fw">
                  Thêm
                  </button>
                  <a href="{{ route('admin.pages.items.danhsach') }}" class="btn btn-info btn-fw">
                  Quay về
                  </a>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
