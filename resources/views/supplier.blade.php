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
    <form action="/supplier/insert" method="post">
        @csrf
        Nama Supplier : <input type="text" name="nama"> <br>
        Email : <input type="email" name="email"> <br>
        Telpon : <input type="number" name="telp"> <br>
        <button type="submit">Submit</button>
    </form>
    <table>
        <tr>
            <th>Nama Supplier</th>
            <th>Email</th>
            <th>Telpon</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        
        @foreach ($supplier as $item)
            <tr>
                <form action="/supplier/update" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$item["id_supplier"]}}">
                    <td><input type="text" name="nama" value="{{$item["nama_supplier"]}}"></td>
                    <td><input type="email" name="email" value="{{$item["email"]}}"></td>
                    <td><input type="number" name="telp" value="{{$item["telp"]}}"></td>
                    <td><button type="submit">Submit</button></td>
                </form>
                <form action="/supplier/delete" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$item["id_supplier"]}}">
                    <td><button type="submit">Delete</button></td>
                </form>
                <table>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Stok Barang</th>
                    </tr>
                    @foreach ($item->listBarang as $barang)
                        <tr>
                            <td>{{$barang["nama_barang"]}}</td>
                            <td>{{$barang["harga_barang"]}}</td>
                            <td>{{$barang["stok_barang"]}}</td>
                        </tr>
                    @endforeach
                </table>
                
            </tr>
        @endforeach
        
    </table>
</body>
</html>