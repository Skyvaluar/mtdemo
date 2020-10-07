<div class='grid-container'>
    <table class="table">
        <thead>
        <tr class="uppercase">
            <th class="text-left">Product</th>
            <th class="text-left">Tags</th>
            <th class="text-center">Price</th>
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