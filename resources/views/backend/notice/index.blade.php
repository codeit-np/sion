@extends('backend.app')
@section('heading')
    <h1>Notice</h1>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-2">
            <a href="/post-notice/create" class="btn btn-info btn-lg"><i class="fas fa-plus-square"></i> Post Notice</a>

        </div>
    </div>
    <div class="row">
       <div class="col-md-12">
           <div class="card">
               <div class="card-body">
                   <table class="table">
                       <tr>
                           <th>SN</th>
                           <th>Notie Title</th>
                           <th>Action</th>
                       </tr>

                       @foreach ($notices as $notice)
                           <tr>
                               <td>{{ $notice->id }}</td>
                               <td>{{ $notice->title }}</td>
                               <th>
                                   <a href="/post-notice/{{ $notice->id }}/edit" class="badge bg-info">Edit</a>
                               </th>
                           </tr>
                       @endforeach
                   </table>
               </div>
           </div>
       </div>

    </div>
</div>
@endsection
