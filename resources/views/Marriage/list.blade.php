@extends('layouts.app')

@section('content')

<div class="page-header">
	<h1>Basic Form</h1>
	<a class="anchor-blue" href="marriage/create">Add Basic Info</a>
</div>
    <div class="gridview">
        <div class="gnav">
        </div>
        <div class="table-responsive">
    	   <table class="table table-bordered table-striped" cellspacing="1" cellpadding="0">
    	       @if($records->count())
                 <thead>
    	        	<tr>
    	            	<td width="10" align="right" nowrap="nowrap">S.No.</td>
    	            	<td>FirstName</td>
    	            	<td>Type</td>
    	            	<td width=30px>Category</td>
    	            	<td>POP Name</td>
    	            	<td>Description</td>
    	            	<td>Status</td>
    	            	<td>Action</td>
    	        	</tr>
    	    	  </thead>
    			  <tbody>
    	        	@php( $i=0 )
    		     	@foreach($records as $equipment)
    	        		<tr>
    	            		<td align="right" nowrap="nowrap">{{ ++$i }}</td>
    	            		<td>{{ $equipment["FirstName"] }}</td>
    	            		<td>{{ $equipment["MiddleName"] }}</td>
    	            		<td>{{ $equipment["LastName"] }}</td>
    	            		<td>{{ $equipment["CNIC"] }}</td>
    	            		<td>{{ $equipment["DOB"] }}</td>
    	            		<td>{{ $equipment["City"] }}</td>
    	            		<td>{{ $equipment["Age"] }}</td>
    	            		<td>{{ $equipment["JK"] }}</td>
    	            		<td>{{ $equipment["Address"] }}</td>


    	        		</tr>
    			  	@endforeach
    	         </tbody>
    	    @endif
    	</table>
      </div>
    </div>
</form>
@endsection