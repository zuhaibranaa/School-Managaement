@extends('layouts.app')

@section('content')
<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Dashboard</a>
            </li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->
    <div class="sb2-2-1">
        <h2>Admin Dashboard</h2>
        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
        <div class="db-2">
            <ul>
                <li>
                    <div class="dash-book dash-b-1">
                        <h5>All Courses</h5>
                        <h4>{{ count(App\Models\Course::all()) }}</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-2">
                        <h5>Admission</h5>
                        <h4>{{ count(App\Models\Admission::all()) }}</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-3">
                        <h5>Students</h5>
                        <h4>{{ count(App\Models\Student::all()) }}</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>

@endsection
