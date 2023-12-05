@extends('admin.masterlayout')
@section('admin')
<form action="addbranddata" enctype="multipart/form-data" method="post" class=" w-50 mx-auto mt-3 bg-light shadow-lg p-3">
    <h1 class="text-center">ADD BRAND</h1>
    @csrf
    <input type="text" name="name" id="" class="form-control mt-3">
    <input type="file" name="image" id="" class="form-control mt-3">
    <textarea name="desc" id="" cols="30" rows="10" class="form-control mt-3"></textarea>
    <input type="submit" name="brand" class="btn btn-dark mx-auto d-block mt-3">
</form>
@endsection