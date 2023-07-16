@extends('admin.layout.master')

@section('content')
    <?php //$data_permission = getPermissionForCRUDPresentOrNot('list-incident-type', session('permissions'));
    ?>
    <div class="main-panel">
        <div class="content-wrapper mt-7">
            <div class="page-header">
                <h3 class="page-title">
                    User Details
                    {{-- @if (in_array('per_add', $data_permission)) --}}
                        <a href="{{ route('add-user-details') }}" class="btn btn-sm btn-primary ml-3">+
                            Add</a>
                    {{-- @endif --}}

                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> User Details</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    @include('admin.layout.alert')
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Project Name</th>
                                                    <th>Participants Name</th>
                                                    <th>Education</th>
                                                    <th>Branch</th>
                                                    <th>College Name</th>
                                                    <th>Company Name</th>
                                                    <th>Transaction Id</th>
                                                    <th>Designation</th>
                                                    <th>Registration Fees </th>
                                                    {{-- <th>Action</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user_details as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ strip_tags($item->project_name) }}</td>
                                                        <td>{{ strip_tags($item->participants_name) }}</td>
                                                        <td>{{ strip_tags($item->education) }}</td>
                                                        <td>{{ strip_tags($item->branch) }}</td>
                                                        <td>{{ strip_tags($item->college_name) }}</td>
                                                        <td>{{ strip_tags($item->company_name) }}</td>
                                                        <td>{{ strip_tags($item->transaction_id) }}</td>
                                                        <td>{{ strip_tags($item->designation) }}</td>
                                                        <td>{{ strip_tags($item->registration_fees) }}</td>
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
        {{-- <form method="POST" action="{{ url('/delete-incident-type') }}" id="deleteform">
            @csrf
            <input type="hidden" name="delete_id" id="delete_id" value="">
        </form>
        <form method="POST" action="{{ url('/show-incident-type') }}" id="showform">
            @csrf
            <input type="hidden" name="show_id" id="show_id" value="">
        </form>
        <form method="GET" action="{{ url('/edit-incident-type') }}" id="editform">
            @csrf
            <input type="hidden" name="edit_id" id="edit_id" value="">
        </form>
        <form method="POST" action="{{ url('/update-one-incident_type') }}" id="activeform">
            @csrf
            <input type="hidden" name="active_id" id="active_id" value="">
        </form> --}}

        <!-- content-wrapper ends -->
    @endsection
