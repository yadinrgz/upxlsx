<table class="table">
    <thead>
        <tr>
            <th>Número de empleado</th>
            <th>Nombre completo</th>
            <th>Puesto</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>

                <td>{{ $product->numeroempleado }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->puesto }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- <button id="deleteSelected" class="btn btn-danger">Delete Selected</button> -->