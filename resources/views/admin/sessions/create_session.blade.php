@extends('layouts.master')
@section('content')
    @include('layouts.adminheader')
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Add New Session</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body row">
                                @if (session('info'))
                                    <div class="alert alert-success">
                                        {{ session('info') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('admin.sessions.store') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-md-right">Session Tables</label>

                                        <div class="col-md-8">
                                            <input id="admission_session" type="text" class="form-control"
                                                name="admission_session" placeholder="20xx/20xx" autofocus required>

                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div align="center">

                                        <button type="submit" class="btn btn-success" onclick="return confirm('sure?')">
                                            Add
                                        </button>
                                    </div>

                                </form>
                            </div>
                            <!-- .widget-body -->
                        </div><!-- .widget -->

                    </div><!-- END column -->


                </div><!-- .row -->
            </section><!-- .app-content -->

            <section class="app-content">
                <div class="row">
                    <!-- DOM dataTable -->
                    <div class="col-md-12">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Available Sessions</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <div class="table-responsive">
                                    <table id="default-datatable" data-plugin="DataTable" class="table table-striped"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Sessions</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($academicSession as $session)
                                                <tr>
                                                    <td>{{ $session->id }}</td>
                                                    <td>{{ $session->session }}</td>
                                                    <td>

                                                        @if ($session->active == 0)
                                                            <a href='' class='btn btn-primary btn-xs'>In active</a>
                                                    </td>
                                                @else
                                                    <a href='' class='btn btn-success btn-xs'>Active</a></td>
                                            @endif

                                            </td>

                                            <td>

                                                @if ($session->active == 0)
                                                    <a href='{{ route('admin.enable_session', ['id' => $session->id]) }}'
                                                        class='btn btn-primary btn-xs'>Activate</a>
                                                @else
                                                    <a href='{{ route('admin.disable_session', ['id' => $session->id]) }}'
                                                        class='btn btn-danger btn-xs'>Deactivate</a>
                                                @endif

                                            </td>

                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->
                </div>
            </section><!-- .app-content -->


        </div>
    </main>
@endsection
