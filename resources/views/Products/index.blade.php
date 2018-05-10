@foreach ($products as $product)
    <h1>Product Name: {{ $product->pd_name }}</h1>
    <h3>Product Detail: {{ $product->pd_detail }}</h3>
    <h3>Product Price: {{ $product->pd_price }}</h3>
    <h3>Created Date: {{ $product->created_at }}</h3>
    <h3>Update Datde: {{ $product->updated_at }}</h3>
@endforeach