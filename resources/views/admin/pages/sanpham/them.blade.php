@extends('admin.menu.master')
@section('noidung')
<div class="row">
   <div class="col-md-12">
      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif
      <!-- DATA TABLE -->
      <div class="card">
         <div class="card-header">
            <strong>Thêm Sản Phẩm</strong>
         </div>
         <div class="card-body card-block">
            <form action="{{ route('admin.pages.tin.them') }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">
               <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tên Sản Phẩm</label><br><br>
                     <input type="text" id="text-input" name="tenSP" value="{{ old('tenSP') }}" placeholder="Nhập tiêu đề" class="form-control">
                  </div>
               </div>

               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tóm Tắt</label><br>
                     <input type="text" id="text-input" name="tomTat" value="{{ old('tomTat') }}" placeholder="Nhập tóm tắt" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Keyword Meta (SEO)</label><br>
                     <input type="text" id="text-input" name="keyword" value="{{ old('keyword') }}" placeholder="Nhập Keyword" class="form-control">
                  </div>
               </div>

               <div class="row form-group">
                    <div class="col-12 col-md-12">
                       <label class="badge badge-info">Giá Sản Phẩm</label><br>
                       <input type="number" id="text-input" name="gia" value="{{ old('gia') }}" placeholder="Nhập giá sản phẩm" class="form-control">
                    </div>

                 </div>

               <div class="row form-group">
                    <div class="col-3 col-md-3">
                            <label class="badge badge-info">Chọn Hình Chính</label><br><br>
                            <input type="file" style="width:200px" name="img" value="{{ old('img') }}">
                         </div>
                  <div class="col-3 col-md-3">
                        <label class="badge badge-info">Chọn Hình Phụ 1</label><br><br>
                        <input type="file" style="width:200px" name="img1" value="{{ old('img1') }}">
                  </div>
                  <div class="col-3 col-md-3">
                        <label class="badge badge-info">Chọn Hình Phụ 2</label><br><br>
                        <input type="file" style="width:200px" name="img2" value="{{ old('img2') }}">
                  </div>
                  <div class="col-3 col-md-3">
                        <label class="badge badge-info">Chọn Hình Phụ 3</label><br><br>
                        <input type="file" style="width:200px" name="img3" value="{{ old('img3') }}">
                  </div>
               </div>

               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Chi Tiết Sản Phẩm</label><br>
                     <textarea  id="editor1" rows="5" placeholder="Nhập nội dung" class="form-control" name="productDetail">{{ old('productDetail') }}</textarea>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Mã Loại Sản Phẩm</label><br>
                     <select name="maLoai" class="form-control">
                        {{--  @foreach ($loaitin as $lt)
                        <option value="{{ $lt->maLoaiTin }}">{{ $lt->tenLoaiTin }}</option>
                        @endforeach  --}}
                     </select>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-fw">
                  Thêm
                  </button>
                  <a href="{{ route('admin.pages.sanpham.danhsach') }}" class="btn btn-info btn-fw">
                  Quay về
                  </a>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
