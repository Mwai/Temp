@extends('admin.layout')
@section('title')
Upload
@stop
@section('content')

	<div class="container">
	<div class="row" id="#gall-name">
		<div class="col-md-12">
			<h1>{{$gallery->name}}</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div id="gallery-images">
				<ul>
					@foreach ($gallery->images as $image)
					<li>
						<a href="{{url($image->file_path)}}" target="_blank">
							<img src="{{url('gallery/images/thumbs/' .$image->file_name)}}">
						</a>
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-whatever="{{ $image->id}}" data-target="#exampleModal">Open Modal {{ $image->id}}</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="exampleModalLabel"></h4>
					      </div>
					      <div class="modal-body">
					        <form role="form" method="POST" action="{{url('/image/describe')}}" enctype="multipart/form-data">
					        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					          <div class="form-group modal-b">
					            <input type="hidden" class="form-control" id="recipient-name">
					          </div>
					          <div class="form-group">
					            <label for="message-text" class="control-label">Tags:</label>
					            <textarea class="form-control" id="tags-text"></textarea>
					          </div>
					          <div class="form-group">
					            <label for="message-text" class="control-label">Caption:</label>
					            <textarea class="form-control" id="caption-text"></textarea>
					          </div>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save</button>
					        </form>
					      </div>
					      <div class="modal-footer">

					      </div>
					    </div>
					  </div>
					</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form action="{{url('image/do-upload')}}"
			class="dropzone"
			id="addImages"
			enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="gallery_id" value="{{ $gallery->id}}">

			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="{{url('gallery/list')}}" class="btn btn-primary">Back</a>
		</div>
	</div>
</div>


@endsection