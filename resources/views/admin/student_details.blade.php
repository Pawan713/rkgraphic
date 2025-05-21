@extends('admin.layout.admin_apps')
@section('content')	
 <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="id">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Priority">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Agent">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" data-provide="datepicker" placeholder="Date">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-block" title="">Search</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th colspan="4">Student Detail</th>
                                            <th colspan="3">Activity</th>
                                            <th colspan="1"><a href="javascript:void(0);" class="btn btn-primary " title="">Download</a></th>
                                        </tr>
                                        <tr>
                                            <th class="w30">&nbsp;</th>
                                            <th>S No</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Class</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Activity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($students)
                                        @php $i=1; @endphp
                                        @foreach ($students as $student)
                                        <tr>
                                            <td>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </td>
                                            <td><a href="#">{{$i}}</a></td>
                                            <td><span>{{ucwords($student->name)}}</span></td>
                                            <td>{{ucwords($student->father_name)}}</td>
                                            <td>{{ucwords($student->class)}}</td>
                                            <td>{{$student->mobile}}</td>
                                            <td>{{$student->email}}</td>
                                            <td> <a href="" class="btn btn-sm btn-success">
                                                <i class="bi bi-eye"></i> <!-- view icon -->
                                            </a>
                                            <a href="" class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil"></i> <!-- Edit icon -->
                                            </a>    
                                            
                                            <a href="" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash" onclick="return confirm('Are you sure?')"></i> <!-- Edit icon -->
                                            </a>   </td>
                                        </tr>
                                           @php $i++; @endphp
                                              @endforeach
                                        @endif
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection