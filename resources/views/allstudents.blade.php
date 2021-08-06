@extends('layouts.app')

@section('content')
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Students</a>
            </li>
            <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>All Students</h4>
                        <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching techniques and other details.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone</th>
                                        <th>email</th>
                                        <th>City</th>
                                        <th>Country</th>
                                        <th>Date Of Birth</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-4.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-course-details.html"><span class="list-enq-name">{{ $course['Course_Name'] }}</span></a>
                                        </td>
                                        <td>{{ $course['fname'] }}</td>
                                        <td>{{ $course['lname'] }}</td>
                                        <td>{{ $course['phone'] }}</td>
                                        <td>{{ $course['email'] }}</td>
                                        <td>{{ $course['City'] }}</td>
                                        <td>{{ $course['Country'] }}</td>
                                        <td>{{ $course['DOB'] }}</td>
                                        <td>{{ App\Models\status::find($course['status'])['Name'] }}</td>
                                        <td>
                                            <button class="label label-success">Edit</button>
                                        </td>
                                        <td>
                                        <form id="delete" action="courses/{{ $course['id'] }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="ad-st-view" type="submit">Delete</button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
