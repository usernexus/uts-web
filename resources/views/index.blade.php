<!DOCTYPE html>
<html>
    <head>
        <title>Ali hasani</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/starter-template.css')}}" >
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Inventory Management</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>
                            Daftar Inventaris Kantor
                            <a href="{{route('inventory.form')}}" class="pull-right"><button class="btn btn-primary">Tambah</button></a>
                        </h2>
                    </div>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <th>ID.</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Tgl. Input</th>
                            <th>Tgl. Update Data</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="{{route('inventory.detail',[1])}}">ASSET-0001</a></td>
                                <td>Meja Kerja</td>
                                <td>30</td>
                                <td>2016-03-20</td>
                                <td>2016-03-20</td>
                                <td>
                                    <a href="#"><button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</button></a>
                                    <a href="#"><button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete</button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="{{route('inventory.detail',[2])}}">ASSET-0002</a></td>
                                <td>Kursi Kerja</td>
                                <td>30</td>
                                <td>2016-03-20</td>
                                <td>2016-03-20</td>
                                <td>
                                    <a href="#"><button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</button></a>
                                    <a href="#"><button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete</button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="{{route('inventory.detail',[3])}}">ASSET-0003</a></td>
                                <td>Lemari Buku</td>
                                <td>5</td>
                                <td>2016-03-20</td>
                                <td>2016-03-20</td>
                                <td>
                                    <a href="#"><button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</button></a>
                                    <a href="#"><button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete</button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td><a href="{{route('inventory.detail',[4])}}">ASSET-0004</a></td>
                                <td>Router</td>
                                <td>5</td>
                                <td>2016-03-20</td>
                                <td>2016-03-20</td>
                                <td>
                                    <a href="#"><button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</button></a>
                                    <a href="#"><button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete</button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td><a href="{{route('inventory.detail',[5])}}">ASSET-0005</a></td>
                                <td>Sofa Panjang</td>
                                <td>3</td>
                                <td>2016-03-20</td>
                                <td>2016-03-20</td>
                                <td>
                                    <a href="#"><button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</button></a>
                                    <a href="#"><button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete</button></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.container -->
        <script type="text/javascript" src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>
