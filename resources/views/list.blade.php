<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Master barang</h1>
    <form action="/barang/insert" method="post">
        @csrf
        Nama Barang : <input type="text" name="nama"> <br>
        Supplier Barang : 
        <select name="supplier" id="">
            @foreach ($supplier as $item)
                <option value="{{$item["id_supplier"]}}">{{$item["nama_supplier"]}}</option>
            @endforeach
        </select> <br>
        Harga Barang : <input type="text" name="harga"> <br>
        Stok Barang : <input type="text" name="stok"> <br>
        <button type="submit">Submit</button>
    </form>
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Supplier Barang</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        
        @foreach ($barang as $item)
            <tr>
                <form action="/barang/update" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$item["id_barang"]}}">
                    <td><input type="text" name="nama" value="{{$item["nama_barang"]}}"></td>
                    <td>{{$item->supplier["nama_supplier"]}}</td>
                    <td><input type="number" name="harga" value="{{$item["harga_barang"]}}"></td>
                    <td><input type="number" name="stok" value="{{$item["stok_barang"]}}"></td>
                    <td><button type="submit">Submit</button></td>
                </form>
                <form action="/barang/delete" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$item["id_barang"]}}">
                    <td><button type="submit">Delete</button></td>
                </form>
            </tr>
        @endforeach
        
    </table>
</body>
</html>