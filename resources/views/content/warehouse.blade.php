@extends('layouts.master')

@section('content')

  <table class="table table-sm" style="border: 1px solid rgb(63, 179, 29); border-bottom: none;">
    <thead class="thead-default">
      <tr>
        <th><button type="button" class="btn btn-outline-success btn-sm"  style="margin:0;">
          Add
        </button></th>
        <th>Name</th>
        <th>Category</th>
        <th>S.N.</th>
        <th>I.N.</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{ $counter = 1 }}</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>12125353</td>
        <td>2356235 26234624</td>
      </tr>
      <tr>
        <th scope="row">{{ ++$counter }}</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>12125353</td>
        <td>2356235 26234624</td>
      </tr>
      <tr>
        <th scope="row">{{++$counter}}</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>12353 532r54234 </td>
        <td>1252342 32 23</td>
      </tr>
      <tr>
        <th scope="row">{{++$counter}}</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>246234 4634 567 5</td>
        <td>246234 4634 567 5</td>
      </tr>
    </tbody>
  </table>

@endsection
