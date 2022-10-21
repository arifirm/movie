@extends('dashboard.layouts.main')

<html lang="en">

@section('container')
<!-- show blade -->
<div class="card my-4 col-12 col-sm-1 col-md-5 mb-3" style="max-height: 1200px; overflow:hidden;">
		<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTp0qlAoWcOOswIkL_qpjYzJqCCDmWXiBzCXiqbE43Obo8c0Z-s" class="row justify-content-center mb-1" width="">
        <div class="card-body">
            <h1>The Avangers</h1>
			<div class="text-danger">
			   <i class='far fa-star'></i>
               <i class='far fa-star'></i>
               <i class='far fa-star'></i>
               <i class='far fa-star'></i>
               <i class='far fa-star'></i>
            <br>
			</div>
			<p>kwdvbiegbfekdgbcekj</p>

            <h3>Cast
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus"></i>
                </button>
            </h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Felix-<span class="text-muted font-italic">Ciwbi</span>
                   <form action="#" method="POST">
                       <button type="submit" class="btn btn-link text-danger">Delete</button>
                   </form>
                </li>
            </ul>
            <h3>Comments</h3>
            <ul class="list-group list-group-flush">
               <li class="list-group-item"><b>Ari : </b> Film nya keren!
                  <form action="#" method="POST">
                       <button type="submit" class="btn btn-link text-danger">Delete</button>
                  </form>
               </li>
            </ul>
            <form action="#" method="POST">
                <input type="text" class="form-control" placeholder="say something...">
                <button type="submit" class="btn btn-primary mt-2 float-right">Comment</button>
            </form>
		</div>
        <div class="card-footer">
            <form action="#" method="POST">
                <button type="submit" class="btn btn-link float-right">Delete</button>
            </form>
        </div>
	</div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New Cast</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <h1>Cast Role</h1>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="">Actor Name</label>
                        <select name="cast_film_name" class="form-control">
                               <option value="" disable selected>Chose Cast</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <input type="text" class="form-control" name="cast_film_role">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <h1>New Cast</h1>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="">Actor Name</label>
                        <input type="text" class="form-control" name="cast_name">
                    </div>
                    <div class="form-group">
                        <label for="">Actor Image</label>
                        <input type="text" class="form-control" name="cast_image">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection