@extends("layout.adminmaster")

@section("contain")


<center><h1 >Inward Register Data :-</h1>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Item Name</th>
	<th>place Name</th>
	<th>Admin Name</th>
	<th>Quantity</th>
	<th>Price</th>
    <th>Expire Date</th>
    <th>Date & Time</th>
	</tr>
	@foreach($inward->sortByDesc('id') as $in)
	<tr>
    <td>{{$in->iname}}</td>
	<td>{{$in->landmark}}</td>
    <td>{{$in->uname}}</td>
    <td>{{$in->quantity}}</td>
	<td>{{$in->price}}</td>
    <td>{{$in->expiredate}}</td>
<td>{{$in->created_at}}</td>
	</tr>
	@endforeach
</table></center>


@stop