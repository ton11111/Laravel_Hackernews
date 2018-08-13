

<div class="container">
    <form action="/search-keyword" method="GET">
		{{ csrf_field() }}
        <div class="input-group">
            <input type="search" name="search" class="form-control" placeholder="Default Search: ai">
            <span class="input-group-prepend">
                <button type="summit" class="btn btn-primary">Search</button>
            </span>
        </div>
    </form>
</div>
<br>

<div class="container">
	<table >
        <tr>
            <td>{{ $keywords }}</td>
        </tr>
	</table>
</div>

