@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-7">
            <div class="page-header">
                <h3 class="page-title">
                    Users List
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Master Management</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Users </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">

                                   @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif


                                    <div class="table-responsive">
                                        <table id="order-listing" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Email </th>
                                                    <th>Mobile No.</th>
                                                    <th>Project Status</th>
                                                    <th>Payment Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user_data as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->u_email }} </td>
                                                        <td>{{ $item->mobile_no }}</td>

                                                        <td>
                                                            @if ($item->is_project_uploaded == 1)
                                                                <button type="button" class="btn btn-success btn-sm">
                                                                    Details Filled </button>
                                                            @else
                                                                <button type="button" class="btn btn-danger btn-sm">Yet to
                                                                    upload
                                                                </button>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->is_payment_done == 1)
                                                                <button type="button"
                                                                    class="btn btn-success btn-sm">Confirmed</button>
                                                            @else
                                                                <button type="button" class="btn btn-danger btn-sm">Not
                                                                    Confirmed</button>
                                                            @endif
                                                        </td>


                                                        <td class="d-flex">
                                                            @if ($item->is_project_uploaded == 1)
                                                                <a data-id="{{ $item->id }}"
                                                                    class="show-btn btn btn-sm btn-outline-primary m-1"><i
                                                                        class="fas fa-eye"></i></a>
                                                            @else
                                                                {{ 'No Project Details Uploaded Yet' }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach

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

        <form method="POST" action="{{ url('/admin/show-users') }}" id="showform">
            @csrf
            <input type="hidden" name="show_id" id="show_id" value="">
        </form>
        <!-- content-wrapper ends -->
    @endsection