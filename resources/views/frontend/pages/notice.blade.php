@extends('frontend.app')
@section('content')
<div class="container py-5">
    <h1>Notice</h1>
    <div class="line"></div>
</div>
<div class="container">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sn</th>
                <th>Title</th>
                {{-- <th>File</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notice as $n )
            <tr>
                <td>{{$loop->index +1}}</td>
                <td>{{$n->title}}</td>
                {{-- <td>{{$n->file}}</td> --}}
                <td><a href="{{$n->file}}" href="" target="_blank"><i class="fa fa-eye"></i></a></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Sn</th>
                <th>Title</th>
                {{-- <th>File</th> --}}
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection
