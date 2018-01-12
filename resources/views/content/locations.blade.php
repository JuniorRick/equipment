@extends('layouts.master')

@section('content')

  <table class="table table-sm table-hover">
    <thead>
      <tr>
        <th><button type="button" class="btn btn-outline-success">
          Add
        </button></th>
        <th>Name</th>
        <th>Category</th>
        <th>S.N.</th>
        <th>I.N.</th>
        <th>Department</th>
        <th>Office</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{ $counter = 1 }}</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>12125353</td>
        <td>2356235 26234624</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">{{++$counter}}</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>12353 532r54234 </td>
        <td>1252342 32 23</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">{{++$counter}}</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>246234 4634 567 5</td>
        <td>246234 4634 567 5</td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>

@endsection
