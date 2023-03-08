<x-aside />
<x-nav />

@include('partials.header')

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">EMail</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  @foreach ($customers as $customer)
  <tbody>
    <tr>
    <th scope="row">{{$customer->id}}</th>
        <td>{{$customer->lastName}}</td>
        <td>{{$customer->firstName}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->address}}</td>
        <td><a href="#">Edit</a></td>
        <td><a href="#">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>

@include('partials.footer')