@extends("layout.adminmaster")

@section("contain")


<center><h1 >Outward Register Data :-</h1>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Item Name</th>
	<th>Admin Name</th>
	<th>Quantity</th>
	<th>Expire Date</th>
	<th> Order Date & Time</th>
	</tr>
	@foreach($outward->sortByDesc('id') as $ou)
	<tr>
    <td>{{$ou->iname}}</td>
	<td>{{$ou->uname}}</td>
    <td>{{$ou->quantity}}</td>
	<td>{{$ou->expiredate}}</td>
	<td>{{$ou->created_at}}</td>
	</tr>
	@endforeach
</table></center>


@stop