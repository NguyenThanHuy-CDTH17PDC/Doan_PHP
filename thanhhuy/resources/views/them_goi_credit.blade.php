@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm gói credit</h4>
                <form>
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" placeholder="Nhập ID">
                    </div>
                    <div class="form-group">
                        <label>Tên gói</label>
                        <input type="text" class="form-control" placeholder="Nhập tên gói">
                    </div>
                    <div class="form-group">
                        <label>Credit</label>
                        <input type="text" class="form-control" placeholder="Nhập số credit">
                    </div>
                    <div class="form-group">
                        <label>Số tiền</label>
                        <input type="text" class="form-control" placeholder="Nhập số tiền">
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection