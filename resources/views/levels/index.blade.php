@extends('layouts.master')

@section('content')

@section('title', 'Levels')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Levels </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Levels</li>
            </ol>
          </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">

<div class="card">
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Level Names</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($levels as $lv)
                    <tr>
                      <td>{{ $loop->iteration }}.</td>
                      <td>{{ $lv->level_names }}</td>
                      <td>
                        <a class="badge badge-success" href="/edit">Edit</a>|
                        <a class="badge badge-danger" href="/delete">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            </section>

@endsection