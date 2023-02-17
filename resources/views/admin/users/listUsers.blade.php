@extends('layouts.admin')
@section('content')

<h2>Users List</h2>
<a href="{{url('createUser') }}" class="btn btn-primary mt-2 mt-xl-0" >ADD USER </a>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>name</th>
        <th>email.</th>
        <th>role</th>
        <th>Status</th>
        <th>created_at</th>
        <th>updated_at</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Jacob</td>
        <td>53275531</td>
        <td>12 May 2017</td>
        <td><label class="badge badge-danger">Pending</label></td>
      </tr>
      <tr>
        <td>Messsy</td>
        <td>53275532</td>
        <td>15 May 2017</td>
        <td><label class="badge badge-warning">In progress</label></td>
      </tr>
      <tr>
        <td>John</td>
        <td>53275533</td>
        <td>14 May 2017</td>
        <td><label class="badge badge-info">Fixed</label></td>
      </tr>
      <tr>
        <td>Peter</td>
        <td>53275534</td>
        <td>16 May 2017</td>
        <td><label class="badge badge-success">Completed</label></td>
      </tr>
      <tr>
        <td>Dave</td>
        <td>53275535</td>
        <td>20 May 2017</td>
        <td><label class="badge badge-warning">In progress</label></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection