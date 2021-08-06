@extends('layouts.app')

@section('content')
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Admin </a>
            </li>
            <li class="active-bre"><a href="#"> Student</a>
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
                        <h4>Add New Student</h4>
                    </div>
                    <div class="tab-inn">
                        <form action="{{ url('students') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" name="fnmae" value="" class="validate" required="">
                                    <label class="">First Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" name="lname" value="" class="validate" required="">
                                    <label class="">Last Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s4">
                                    <input type="text" name="phone" value="" class="validate" required="">
                                    <label class="">Contact</label>
                                </div>
                                <div class="input-field col s8">
                                    <input type="email" name="email" value="" class="validate" required="">
                                    <label class="">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s4">
                                    <input type="text" name="City" value="" class="validate" required="">
                                    <label class="">City</label>
                                </div>
                                <div class="input-field col s4">
                                    <input type="text" name="Country" value="" class="validate" required="">
                                    <label class="">Country</label>
                                </div>
                                <div class="input-field col s4">
                                   <input type="date" name="DOB" placeholder="Date Of Birth" value="" class="validate" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="password" name="password" value="" class="validate" required="">
                                    <label class="">Password</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="password" name="password-confirm" value="" class="validate" required="">
                                    <label class="">Confirm Password</label>
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
