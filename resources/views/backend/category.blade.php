@extends('backend.master.master')
@section('content')
	

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm danh mục
						</div>
						<div class="panel-body">
						<form method="POST">
							@include('errors.note')

							<div class="form-group">
								<label>Tên danh mục:</label>
								<input type="text" name="name" class="form-control" placeholder="Tên danh mục..." required>
							</div>
							<div class="form-group">
								<input type="submit" name="submit " class="form-control btn btn-primary" value="Thêm mới" placeholder="Tên danh mục...">
							</div>
							{{ csrf_field() }}
						</form>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách danh mục</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
									<th>ID</th>
					                  <th>Tên danh mục</th>
									  <th style="width:30%">Tùy chọn</th>
									  
					                </tr>
				              	</thead>
				              	<tbody>
									  @forelse ($catelist as $cate)
										  
									  
								  <tr class="post{{$cate->cate_id}}">
								  		<td>{{$cate->cate_id}}</td>
										<td>{{$cate->cate_name}}</td>
										<td>	  
										
										<a href="#" class="edit-modal btn btn-info btn-sm" data-id="{{$cate->cate_id}}" data-body="{{$cate->cate_name}}">
												<i class="glyphicon glyphicon-pencil"></i>
										</a>
										<a href="#" class="delete-modal btn btn-info btn-sm" data-id="{{$cate->cate_id}}" data-body="{{$cate->cate_name}}">
												<i class="glyphicon glyphicon-trash"></i>
										</a>
			                  		</tr>
									  @empty
										  khong co dua lieu
									  @endforelse	
								
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<div id="create" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form">
						<div class="form-group row add">
							<label class="control-label col-sm-2" for="name"> Ten danh muc</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="name" name="name" placeholder="ten danh muc" required>
								<p class="error text-center alert alert-danger hidden"></p>
							</div>
						</div>
					</form>
				</div>
					<div class="modal-footer">
						<button class="btn btn-warning" type="submit" id="add" >
							<span class="glyphicon glyphicon-plus"></span>Save
						</button>
						<button class="btn btn-warning" type="button" data-dismiss="modal"  >
							<span class="glyphicon glyphicon-remobe"></span>Close
						</button>
					</div>
			</div>
		</div>
	</div>
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="modal">
					<div class="form-group">
						<label class="control-label col-sm-2" for="id"> ID</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="fid" disabled>
							
						</div>
					</div>
					<div class="form-group">
							<label class="control-label col-sm-2" for="name"> ten danh muc</label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="t" >
								
							</div>
						</div>
				</form>
				<div class="deleteContent">
						Are You sure want to delete <span class="title"></span>?
						<span class="hidden id"></span>
					  </div>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn actionBtn" data-dismiss="modal">
						<span id="footer_action_button" class="glyphicon"></span>
					  </button>
					  <button type="button" class="btn btn-warning" data-dismiss="modal">
						<span class="glyphicon glyphicon"></span>close
					  </button>
					</div>
			</div>
		</div>
	</div>
</div>
	@endsection
