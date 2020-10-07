<div class='grid-container'>
    <table class="table">
        <thead>
        <tr class="uppercase">
            @foreach ($replacers as $key => $value )
                <th class="text-left">{{ $key }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($replacers AS $data)
                <td class="text-left">{{ $data }}</td>
            @endforeach
            </tr>
        </tbody>
    </table>
</div>