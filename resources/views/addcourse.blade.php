@extends('layouts.app')

@section('content')
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Admin </a>
            </li>
            <li class="active-bre"><a href="#"> Courses</a>
            </li>
            <li class="active-bre"><a href="#"> Add New </a></li>
            <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Add New Course Informations</h4>
                    </div>
                    <div class="tab-inn">
                        <form action="{{ url('courses') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="Course_Name" value="" class="validate" required="">
                                    <label class="">Course name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" value="" name="Category" class="validate" required="">
                                    <label class="">Category</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="number" value="" name="Duration" class="validate" required="">
                                    <label class="">Duration in Months</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    Start Date : <input type="date" class="validate" name="Start_Date" value="" required="">
                                    <label class=""></label>
                                </div>
                                <div class="input-field col s6">
                                    End Date : <input type="date" name="End_Date" value="" class="validate">
                                    <label class=""></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="number" value="" name="Total_Seats" class="validate">
                                    <label class="">Total Seats</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
