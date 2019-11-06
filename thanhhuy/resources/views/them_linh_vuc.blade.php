@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm lĩnh vực</h4>
                <form>
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" placeholder="Nhập ID">
                    </div>
                    <div class="form-group">
                        <label>Tên lĩnh vực</label>
                        <input type="text" class="form-control" placeholder="Nhập tên lĩnh vực">
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection