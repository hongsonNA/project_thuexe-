@extends('admin.layouts.app_dashboard')
@section('title', 'Category')

@section('content')
    <div class="content">
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-7 ml-auto mr-auto">
                        <div class="card">

                            <div class="card-header card-header-default card-header-icon col-12">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card-icon">
                                            <i class="material-icons">list</i>
                                        </div>
                                        <h4 class="card-title">Danh sách danh mục</h4>
                                    </div>
                                    <div class="col-lg-3 text-right">
                                        <button class="btn btn-success">
                                              <span class="btn-label">
                                                    <i class="material-icons">add</i>
                                              </span>ADD
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th></th>
                                            <th>Name</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td></td>
                                            <td>Alex Mike</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-info btn-link"
                                                        data-original-title="" title="Sửa dang mục">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-link"
                                                        data-original-title="" title="Xóa danh mục">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
