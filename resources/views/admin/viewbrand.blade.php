@extends('admin.masterlayout')
@section('admin')
<div class="container"></div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>IMAGE</th>
                        <th>DESC</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td><img src="images/{{$item->image}}" height="50px" alt=""></td>
                        <td>{{$item->description}}</td>     
                    </tr>
                    @endforeach
                   
                </tbody>
                
            </table>
        </div>
    </div>
</div>
    
@endsection