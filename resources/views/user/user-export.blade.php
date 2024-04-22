<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Registration Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $index=>$item)
        <tr>
            <td>{{ ++$index }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
