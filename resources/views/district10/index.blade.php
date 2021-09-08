@extends('layouts.app')


@section('content')
 
       <div class="container mg-10">
       <div class="row">
       <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0 text-dark">Manage Chapter Directory</h2>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Manage Chapter</li>
                </ol>
            </div>
        </div>
        
    </div>
    <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
              
            </div>
        </div>
        
       <div class="container">
        
        <br>
        <div class="col-lg-3 mn-tps">
         
        
    </div>
    
    <table align="right" style="margin-bottom: 1em;">
    <tr>
        <td align="right" colspan="2"> 
            <div class="col-lg-12 margin-tb">
            
            <div class="pull-right"  style="margin-bottom: 1em;">
            <a class="btn btn-primary btn-create" href="{{ route('district10.create') }}"> Add Chapter Directory</a>
            </div>
        </div></td><td>

        </td> <br>
    </tr>
    <tr>
        <td>
            Search:&nbsp;
</td>
<td>
        <div class="col-lg-12">
                 <input type="search" id="myInput" onkeyup="myFunction()" name="search" placeholder="Search" class="form-control">
        </div>
        </td>
    </tr>

</table>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" id="myTable">
        <tr class="tb-cl">
            <th>Chapter Name</th>
            <th>Contact</th>
            <th>Position</th>
            <th>State</th>
            <th>Phone</th>
            <th>Email</th>
            <th width="120px">Action</th>
        </tr>
        @foreach ($district10 as $district)
        <tr>
            <td>{{ $district->chapter }}</td>
            <td>{{ $district->contact }}</td>
            <td>{{ $district->position }}</td>
            <td>{{ $district->state }}</td>
            <td>{{ $district->phone }}</td>
            <td>{{ $district->emailaddress }}</td>
            <td>
                <form action="{{ route('district10.destroy',$district->id) }}" method="POST">
   
                    <!-- <a class="btn btn-info" href="{{ route('district10.show',$district->id) }}">Show</a> -->
                    <button style="height: 2em; width: 2em; border-radius: 2em; background-color: blue; border-color: blue;">
                        <a class="fas fa-pen" style="color: white;" href="{{ route('district10.edit',$district->id) }}" ></a>
                    </button>
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="fas fa-trash" style="height: 2em; width: 2em; border-radius: 0.5em; background-color: red; border-color: red; color: white;"></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <script>
        function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
    </script>
    </div>
    {!! $district10->links() !!}
      
@endsection