@extends('dashboard.layouts.main')

<html lang="en">

@section('container')
<!-- show blade -->
<div class="my-4 col-12 col-sm-1 col-md-5 mb-3" style="max-height: 1200px; overflow:hidden;">
        <div class="card-body">
            <h1>Add New Movie</h1>
            <form action="#" method="POST">
                <div class="form-group">
                   <label>Title</label>
                   <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                   <label>Image</label>
                   <input type="text" class="form-control" name="image">
                </div>
                <div class="form-group">
                   <label>Rating Star</label>
                   <input type="text" class="form-control" name="rating_star">
                </div>
                <div class="form-group">
                   <label>Description</label>
                   <textarea class="form-control" name="description" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2 float-right">Submit</button>
            </form>
		</div>
	</div>
@endsection