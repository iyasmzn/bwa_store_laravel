@extends('layouts.admin')

@section('title', 'User | Admin')

@section('content')

          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">User</h2>
                <p class="dashboard-subtitle">Edit Users</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-12">
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                    <div class="card">
                      <div class="card-body">
                        <form action="{{ route('user.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                          @csrf @method('PUT')
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Nama User</label>
                                <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Email User</label>
                                <input type="email" name="email" class="form-control" value="{{ $item->email }}" required>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Password User</label>
                                <input type="password" name="password" class="form-control">
                                <small class="text-muted">Kosongkan jika tidak ingin mengganti password</small>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Roles</label>
                                <select name="roles" required class="form-control">
                                  <option value="{{ $item->roles }}" selected>Tidak Diganti ( {{ Str::title($item->roles) }} )</option>
                                  <option value="ADMIN">Admin</option>
                                  <option value="USER">User</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col text-right">
                              <button class="btn btn-success px-5" type="submit">
                                Save Now
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
@endsection