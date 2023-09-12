<table style="border-collapse: collapse;">
    <tr>
        <th style="font-weight: bold; white-space: nowrap; padding: 10px;"># ID</th>
        <th style="font-weight: bold; white-space: nowrap; padding: 10px;">NOMBRE</th>
        <th style="font-weight: bold; white-space: nowrap; padding: 10px;">EMAIL</th>
        <th style="font-weight: bold; white-space: nowrap; padding: 10px;">CREATED_AT</th>
    </tr>

    @foreach ($users as $user)
        <tr>
            <td style="white-space: nowrap; padding: 10px;">{{ $user->id }}</td>
            <td style="white-space: nowrap; padding: 10px;">{{ $user->name }}</td>
            <td style="white-space: nowrap; padding: 10px;">{{ $user->email }}</td>
            <td style="white-space: nowrap; padding: 10px;">{{ $user->created_at }}</td>
        </tr>
    @endforeach
</table>
