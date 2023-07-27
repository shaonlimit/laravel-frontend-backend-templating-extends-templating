@extends('backend.master')
@section('content')
<div class="container mt-4">
    <h2>Dashboard - Post List</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Title</th>
          <th>Author</th>
          <th>Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Sample Post 1</td>
          <td>John Doe</td>
          <td>2023-07-27</td>
          <td>
            <a href="{{ route('view-post') }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> View</a>

          </td>

        </tr>
        <tr>
            <td>Sample Post 1</td>
            <td>John Doe</td>
            <td>2023-07-27</td>
            <td>
              <a href="{{ route('view-post') }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> View</a>

            </td>

          </tr>
          <tr>
            <td>Sample Post 1</td>
            <td>John Doe</td>
            <td>2023-07-27</td>
            <td>
              <a href="{{ route('view-post') }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> View</a>

            </td>

          </tr>
        <!-- Add more rows for other posts -->
      </tbody>
    </table>
  </div>
@endsection
