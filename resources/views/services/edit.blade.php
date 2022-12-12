@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <form action="{{ route('service.update', $service->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nom</label>
                  <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $service->name }}">
                  @error('nom')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                  <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $service->description }}</textarea>
                  @error('description')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection