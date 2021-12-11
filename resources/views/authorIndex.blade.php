<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>
<body>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th><center>Author Name</center></th>
                <th><center>Author Message</center></th>
                <th><center>Date</center></th>
            </tr>
        </thead>
        <tbody>
               @foreach ($display as $users)
            <tr>
               		<td>{{ $users->author_name }}</td>
               		<td>{{ $users->author_msg }}</td>
               		<td>{{ $users->created_at }}</td>

            </tr>
				@endforeach
        </tbody>
    </table>

</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>




<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>