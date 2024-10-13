@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 justify-content-between d-flex">
                    <h1 class="m-0">{{ __('Nomor Masuk') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body p-0">
                            {{-- <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Number Phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $booking->number_phone }}</td>
                                        <td>
                                            <form onclick="return confirm('are you sure ?');" class="d-inline-block" action="{{ route('admin.bookings.destroy', [$booking]) }}" method="post">
                                                @csrf 
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                            </form>                              
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table> --}}
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nomor HP</th>
                                        <th>Waktu Input</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nomor_hps as $index => $nomor_hp)
                                        <tr>
                                            <td>{{ $index + 1 + ($nomor_hps->currentPage() - 1) * $nomor_hps->perPage() }}</td> <!-- Adjusted for pagination -->
                                            <td>{{ $nomor_hp->nomor_hp }}</td>
                                            <td>{{ $nomor_hp->created_at }}</td>
                                            <td>
                                                <!-- WA Button -->
                                                <a href="https://wa.me/{{ $nomor_hp->nomor_hp }}" target="_blank" class="btn btn-success">
                                                    <img src="{{ asset('frontend/assets/img/whatsapp.png') }}" alt="wa" style="width: 20px; height: 20px;">
                                                </a>
                                                <!-- Delete Button -->
                                                <form action="{{ route('bookings.destroy', $nomor_hp->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Kamu yakin hapus item ini ?');">
                                                        <img src="{{ asset('frontend/assets/img/delete.png') }}" alt="delete" style="width: 20px; height: 20px;">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="card-footer clearfix">
                                {{ $nomor_hps->links() }} <!-- Display pagination links -->
                            </div>
                        </div>
                        <!-- /.card-body -->

                        {{-- <div class="card-footer clearfix">
                            {{ $bookings->links() }}
                        </div> --}}
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection