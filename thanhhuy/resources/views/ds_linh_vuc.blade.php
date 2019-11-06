@extends('layout')

@section('js')
	<!-- third party js -->
    <script src="{{ asset ('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset ('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
    <!-- third party js ends -->

    <script type="text/javascript">
    	$(document).ready(function() {
		    $("#linh_vuc_datatable").DataTable({
		        language: {
		            paginate: {
		                previous: "<i class='mdi mdi-chevron-left'>",
		                next: "<i class='mdi mdi-chevron-right'>"
		            }
		        },
		        drawCallback: function() {
		            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
		        }
		    });
		});
    </script>
@endsection

@section('css')
	<!-- third party css -->
    <link href="{{ asset ('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
@endsection

@section('main-content')
	<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                	<h1 class="mb-3 header-title">Lĩnh vực các câu hỏi của trò chơi</h1>
                	<a href="{{ route('linh_vuc.them_moi')}}" class="btn btn-primary btn-rounded waves-effect waves-light">Thêm lĩnh vực</a>
                	<h5>Danh sách lĩnh vực</h5>
                    <table id="linh_vuc_datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên lĩnh vục</th>
                                <th></th>
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                        	@for($i = 1; $i < 101; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>Lĩnh vực {{ $i }}</td>
                                <td>
                                	<button type="button" class="btn btn-warning waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                	<button type="button" class="btn btn-danger waves-effect waves-light"><i class=" mdi mdi-trash-can-outline"></i></button>
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection