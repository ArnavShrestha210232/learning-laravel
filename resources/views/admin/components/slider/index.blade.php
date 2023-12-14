@extends('admin.layout.app')
@push('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="panel">
                <header class="panel-heading">
                    All Slider Banner
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group">
                                <a href="{{ route('sliders.create') }}">
                                    <button id="editable-sample_new" class="btn green">
                                        Add New <i class="fa fa-plus"></i>
                                    </button>
                                </a>

                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i
                                        class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space15"></div>

                        <div class="table-responsive">

                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Full Name</th>
                                        <th>Points</th>
                                        <th>Notes</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td>Jondi Rose</td>
                                        <td>Alfred Jondi Rose</td>
                                        <td>1234</td>
                                        <td class="center">super user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Dulal</td>
                                        <td>Jonathan Smith</td>
                                        <td>434</td>
                                        <td class="center">new user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Sumon</td>
                                        <td> Sumon Ahmed</td>
                                        <td>232</td>
                                        <td class="center">super user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>vectorlab</td>
                                        <td>dk mosa</td>
                                        <td>132</td>
                                        <td class="center">elite user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Admin</td>
                                        <td> Flat Lab</td>
                                        <td>462</td>
                                        <td class="center">new user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Rafiqul</td>
                                        <td>Rafiqul dulal</td>
                                        <td>62</td>
                                        <td class="center">new user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Jhon Doe</td>
                                        <td>Jhon Doe </td>
                                        <td>1234</td>
                                        <td class="center">super user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Dulal</td>
                                        <td>Jonathan Smith</td>
                                        <td>434</td>
                                        <td class="center">new user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Sumon</td>
                                        <td> Sumon Ahmed</td>
                                        <td>232</td>
                                        <td class="center">super user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>vectorlab</td>
                                        <td>dk mosa</td>
                                        <td>132</td>
                                        <td class="center">elite user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Admin</td>
                                        <td> Flat Lab</td>
                                        <td>462</td>
                                        <td class="center">new user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Rafiqul</td>
                                        <td>Rafiqul dulal</td>
                                        <td>62</td>
                                        <td class="center">new user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </section>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
@endsection
@section('js')
    <!--script for this page only-->
    <script src="{{ asset('admin/js/editable-table.js') }}"></script>

    <!-- END JAVASCRIPTS -->
    <script>
        jQuery(document).ready(function() {
            EditableTable.init();
        });
    </script>
@endsection
