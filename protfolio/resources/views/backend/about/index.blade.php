@extends('admin.admin_dashboard')
@section('title','All Team')
@section('admin')
    <div class="page-content">
				<!--breadcrumb-->
			
					<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form Elements</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group" style="display:flex justify-content:right">
							<a href="{{ route('about.create') }}">
								<i class="btn btn-primary px-5">Add About</i>
							</a>
							
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">All About Protfolio</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Sl</th>
										<th>Image</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Age</th>
										<th>Nationality</th>
										<th>title</th>
										<th>GitHub Link</th>
										<th>Year Of Exprience</th>
										<th>Language</th>
										<th>Address</th>
										<th>Description</th>
									
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($about as $key=>$item)
									<tr>
										<td>{{$key+1}}</td>
										<td>
                                            <img src="{{ asset('upload/'.$item->photo) }}" alt="" style="width: 70px; height: 40px;">
                                        </td>
                                        
										<td>{{$item->fname}}</td>
										<td>{{$item->lanme}}</td>
										<td>{{$item->email}}</td>
										<td>{{$item->phone}}</td>
										<td>{{$item->age}}</td>
										<td>{{$item->nationality}}</td>
										<td>{{$item->title}}</td>
										<td>{{$item->github}}</td>
										<td>{{$item->exprience}}</td>
										<td>{{$item->lang}}</td>
										<td>{{$item->address}}</td>
										<td>{{$item->desc}}</td>
										<td style="display: flex; gap: 10px;">
                                            <a href="{{ route('about.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ route('about.delete', $item->id) }}" id="delete" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                        
									</tr>
									@endforeach
								
								</tbody>
								
							</table>
						</div>
					</div>
				</div>
			
			
				
			</div>
@endsection