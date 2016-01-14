@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Gender</th>
                            <th>Group</th>
                            <th>Marks</th>
                            <th>Birthday</th>
                            <th>Phone</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->firstname }}</td>
                                    <td>{{ $student->lastname }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->group }}</td>
                                    <td>{{ $student->marks }}</td>
                                    <td>{{ $student->birthday }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $students->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
