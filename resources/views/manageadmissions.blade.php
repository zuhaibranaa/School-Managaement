@extends('layouts.app')

@section('content')
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> DashBoard</a>
            </li>
            <li class="active-bre"><a href="#"> Admissions</a>
            </li>
            <li class="page-back"><a href="{{ url('home') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Admission Details</h4>
                        <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching techniques and other details.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Education</th>
                                        <th>Course</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                    <tr>
                                        <td><a href="admin-course-details.html">{{ $course['Name'] }}</a>
                                        </td>
                                        <td><a href="admin-course-details.html">{{ $course['Phone'] }}</a>
                                        </td>
                                        <td>{{ $course['Email'] }}</td>
                                        <td>{{ $course['City'] }}</td>
                                        <td>{{ $course['Education'] }}</td>
                                        <td>{{ App\Models\Course::find($course['Course'])['Course_Name'] }}</td>
                                        <td>{{ App\Models\status::find($course['status'])['Name'] }}</td>
                                        <td>
                                            {{-- <span class="label label-success">{{ App\Models\status::find($course['Status_ID'])['Name'] }}</span> --}}
                                        </td>
                                        <td><a href="admin-course-details.html" class="ad-st-view">Approve</a></td>
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
