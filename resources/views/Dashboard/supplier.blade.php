@extends('layouts.master')

@section('content')

        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">

                        <div class="col-md-12">
                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40">
                                <h3 class="title-5 m-b-35">The Suppliers</h3>

                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">


                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                                            <i class="zmdi zmdi-plus"></i>Add A Supplier</button>

                                    </div>
                                </div>

                                <table class="table table-borderless table-data3">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Store Name</th>
                                        <th>Company Reg</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($suppliers as $supplier)
                                    <tr id="tr{{$supplier->id}}" >
                                        <td>{{$supplier->name}}</td>
                                        <td>{{$supplier->store_name}}</td>
                                        <td>{{$supplier->company_reg}}</td>
                                        <td>{{$supplier->email}}</td>
                                        <td>{{$supplier->phone}}</td>
                                        <td>
                                            <div class="table-data-feature">

                                                <button class="item" data-placement="top" title="Edit" data-toggle="modal" data-target="#mediumModal2"  onclick="return editSupplier('{{ $supplier->name}}','{{ $supplier->email}}','{{ $supplier->password}}','{{ $supplier->phone}}','{{$supplier->company_reg}}','{{ $supplier->company_reg}}', '{{$supplier->id}}')">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item deleteSuplier" data-toggle="tooltip" id="del{{ $supplier->id}}" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                               
                                            </div>
                                        </td>
                                    </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE-->
                        </div>


                </div>
            </div>
        </div>


        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
{{--                        <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>--}}
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal">
                        <div class="col-lg-11">
                        <div class="card">
                            <div class="card-header">Register A supplier</div>
                            <div class="card-body card-block">
                                <form action=""  method="post" id="supplierForm">
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" id="name" name="name" placeholder="Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-asterisk"></i>
                                            </div>
                                            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-mobile"></i>
                                            </div>
                                            <input type="text" id="phone" name="phone" placeholder="Phone Number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <input type="text" id="store_name" name="store_name" placeholder="Store Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                            <input type="text" id="company_reg" name="company_reg" placeholder="Company Reg" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-actions form-group">
                                        <button type="submit" class="btn btn-success btn-sm" id="submitBtn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>



        <div class="modal fade" id="mediumModal2" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        {{--                        <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>--}}
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal">
                        <div class="col-lg-11">
                            <div class="card">
                                <div class="card-header">Edit the supplier's details</div>
                                <div class="card-body card-block">
                                    <form action=""  method="post" id="editSupplierForm">
                                        @csrf
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" id="name1" name="name1" placeholder="Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <input type="email" id="email1" name="email1" placeholder="Email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-asterisk"></i>
                                                </div>
                                                <input type="password" id="password1" name="password1" placeholder="Password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-mobile"></i>
                                                </div>
                                                <input type="text" id="phone1" name="phone1" placeholder="Phone Number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                                <input type="text" id="store_name1" name="store_name1" placeholder="Store Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                                <input type="text" id="company_reg1" name="company_reg1" placeholder="Company Reg" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-actions form-group">
                                            <input type="hidden" id="id" name="id" class="form-control">
                                            <button type="submit" class="btn btn-success btn-sm submitEditBtn" >Update Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

<!-- end document-->

    @endsection

@section('scripts')
    <script src="js/supplier.js"></script>

@endsection