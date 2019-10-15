@extends('admin.layouts.app_dashboard')
@section('title', 'Category')

@section('content')
    <div class="content">
        @if(session('mess'))
            <script>
                setTimeout(function () {
                    $('#success_cate').hide(5000)
                });
            </script>

            <div class="alert alert-success" id="success_cate">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
                <span>{{ session('mess') }}</span>
            </div>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card">
                        <div class="card-header card-header-default card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">list</i>
                            </div>
                            <h4 class="card-title">Danh Sách Danh Mục</h4>
                        </div>
                        <div class="card-body">
                            <div class="material-datatables">
                                <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-8"></div>
                                        <div class="col-sm-12 col-md-4">
                                            <span class="bmd-form-group bmd-form-group-sm">
                                                <input type="text" class="form-control form-control-sm" placeholder="Search">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">ID</th>

                                                    <th class="text-center">Name</th>
                                                    <th class="text-right">
                                                        <a href="{{ route('category_add') }}" class="btn btn-success">
                                                            <span class="btn-label"><i class="material-icons">add</i></span>ADD
                                                        </a>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach( $categories as $cate)
                                                    <tr>

                                                        <td class="text-center">{{ $cate['id'] }}</td>

                                                        <td class="text-center">{{ $cate['name'] }}</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip"
                                                                    class="btn btn-info btn-link"
                                                                    data-original-title="" title="Sửa danh mục">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" class="btn btn-danger btn-link"
                                                                    data-original-title="" title="Xóa danh mục">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_full_numbers">
                                                {{ $categories->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
