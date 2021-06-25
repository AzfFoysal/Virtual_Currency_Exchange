@include('layouts.app')
@extends('layouts.AdminDashboard')

@section('pageTitle',"admin Deshboard")


@section('profileImage')
{{ asset('argon/img/theme/team-1-800x800.jpg') }}
@endsection



@section('header','Announcement')

@section('container')

<center>
    <div class="mr-auto mt-5 mb-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Send Announcement</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Announcement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div >
    <center>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Announcement</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2-2-2021</td>
                    <td>Site will go down for 4hours for maintenance</td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                    <td>5-6-2021</td>
                    <td>New feature "Live chat" is now Live. Go there and say Hi</td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                    <td>9-7-2021</td>
                    <td>New feature "Report Seller" implemented. From now you can report your issues.</td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
            </tbody>
        </table>

        

@endsection