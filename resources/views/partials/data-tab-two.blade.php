<div class='grid-container'>
    <table class="table">
        <thead>
        <tr class="uppercase">
            <th class="text-left">First Name</th>
            <th class="text-left">Last Name</th>
            <th class="text-center">Age</th>
            <th class="text-left">Dream</th>
            <th class="text-left">Pet</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users AS $user)
            <tr>
                <td class="text-left">{{ $user['fname'] }}</td>
                <td class="text-left">{{ $user['lname'] }}</td>
                <td class="text-center">{{ $user['age'] }}</td>
                <td class="text-left">{{ $user['dream'] }}</td>
                <td class="text-left">{{ $user['pet'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>