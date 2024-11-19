@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12 text-center">
                        <h1 class="m-0">PT Tiga Manungggal Synthetic Industries</h1>
                        <h2 class="m-0">Jl Jendral Sudirman Salatiga</h2>
                        <h2 class="m-0">Telp : (0298) 326008</h2>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Custom Tabs -->
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <ul class="nav nav-pills p-2">
                                    <li class="nav-item"><a class="nav-link active" href="#tab_1"
                                            data-toggle="tab">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Data
                                            Barang</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Data
                                            Customer</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Order</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_5" data-toggle="tab">Nota</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_6" data-toggle="tab">Laporan
                                            Penjualan</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- Tab 1: Home -->
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="card">
                                            <div class="card-body">
                                                <ul>
                                                    <li>Order Penjualan</li>
                                                    <p>Untuk menampilkan keseluruhan Production Order Export</p>
                                                    <li>Nota - Surat Jalan & Penyerahan</li>
                                                    <p>Diberikan kepada pengirim barang (supir) sebagai syarat perjalanan
                                                        pada saat pengiriman dan mengetahui barang apa saja yang dikirim</p>
                                                    <li>Laporan Penjualan</li>
                                                    <p>Untuk mengetahui informasi dan keseluruhan pengiriman barang</p>
                                                    <li>Logout</li>
                                                    <p>Keluar dari aplikasi</p>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tab 2: Data Barang -->
                                    <div class="tab-pane" id="tab_2">
                                        <table class="table table-bordered table-responsive">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center">No</th>
                                                    <th scope="col" class="text-center">Nama Barang</th>
                                                    <th scope="col" class="text-center">Kategori</th>
                                                    <th scope="col" class="text-center">Tipe</th>
                                                    <th scope="col" class="text-center">Ukuran</th>
                                                    <th scope="col" class="text-center">Deskripsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>Barang 1</td>
                                                    <td>Kategori A</td>
                                                    <td>B0123</td>
                                                    <td>100x200</td>
                                                    <td>Ini adalah barang 1 dengan kategori A</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Barang 2</td>
                                                    <td>Kategori B</td>
                                                    <td>B0456</td>
                                                    <td>200x300</td>
                                                    <td>Ini adalah barang 2 dengan kategori B</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Barang 3</td>
                                                    <td>Kategori C</td>
                                                    <td>B0789</td>
                                                    <td>300x400</td>
                                                    <td>Ini adalah barang 3 dengan kategori C</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Tab 3: Data Customer -->
                                    <div class="tab-pane" id="tab_3">
                                        <table class="table table-bordered table-responsive">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center">No</th>
                                                    <th scope="col" class="text-center">Nama Customer</th>
                                                    <th scope="col" class="text-center">Email</th>
                                                    <th scope="col" class="text-center">Alamat</th>
                                                    <th scope="col" class="text-center">Telp</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">Customer A</td>
                                                    <td class="text-center">customer1@email.com</td>
                                                    <td class="text-center">Jakarta</td>
                                                    <td class="text-center">08123456789</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">Customer B</td>
                                                    <td class="text-center">customer2@email.com</td>
                                                    <td class="text-center">Bandung</td>
                                                    <td class="text-center">0854464112</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">Customer C</td>
                                                    <td class="text-center">customer3@email.com</td>
                                                    <td class="text-center">Surabaya</td>
                                                    <td class="text-center">08455561112</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane" id="tab_4">
                                        <div class="col-8">
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h3 class="card-title">Input Order</h3>
                                                </div>
                                                <form method="POST" action="#">
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="inputContract">Contract</label>
                                                            <input type="text" class="form-control" id="inputContract"
                                                                name="contract" placeholder="Enter Contract">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputTrader">Trader</label>
                                                            <input type="text" class="form-control" id="inputTrader"
                                                                name="trader" placeholder="Enter Trader">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputBuyer">Buyer</label>
                                                            <input type="text" class="form-control" id="inputBuyer"
                                                                name="buyer" placeholder="Enter Buyer">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputJenisKain">Jenis Kain</label>
                                                            <input type="text" class="form-control"
                                                                id="inputJenisKain" name="jenis_kain"
                                                                placeholder="Enter Fabric Type">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputColor">Color</label>
                                                            <input type="text" class="form-control" id="inputColor"
                                                                name="color" placeholder="Enter Color">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputQuantity">Quantity</label>
                                                            <input type="text" class="form-control" id="inputQuantity"
                                                                name="quantity" placeholder="Enter Quantity">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputDelivery">Delivery</label>
                                                            <input type="text" class="form-control" id="inputDelivery"
                                                                name="delivery" placeholder="Enter Delivery">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputLebarKain">Lebar Kain</label>
                                                            <input type="text" class="form-control"
                                                                id="inputLebarKain" name="lebar_kain"
                                                                placeholder="Enter Fabric Width">
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab_5">
                                        <div class="col-8">
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h3 class="card-title">Input Order</h3>
                                                </div>
                                                <form>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Jenis Kain</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Fabric Type">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Color</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Color">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Box</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Box">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Roll</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Roll">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Yard</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Yard">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Netto</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Netto">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Bruto</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Bruto">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Keterangan</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Enter Description">
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab_6">
                                        <table class="table table-bordered table-responsive">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center">No</th>
                                                    <th scope="col" class="text-center">Contract</th>
                                                    <th scope="col" class="text-center">Trader</th>
                                                    <th scope="col" class="text-center">Buyer</th>
                                                    <th scope="col" class="text-center">Jenis Kain</th>
                                                    <th scope="col" class="text-center">Color</th>
                                                    <th scope="col" class="text-center">Quantity</th>
                                                    <th scope="col" class="text-center">Lebar Kain</th>
                                                    <th scope="col" class="text-center">Box</th>
                                                    <th scope="col" class="text-center">Roll</th>
                                                    <th scope="col" class="text-center">Yard</th>
                                                    <th scope="col" class="text-center">Netto</th>
                                                    <th scope="col" class="text-center">Bruto</th>
                                                    <th scope="col" class="text-center">Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">CT-001</td>
                                                    <td class="text-center">Trader A</td>
                                                    <td class="text-center">Buyer X</td>
                                                    <td class="text-center">Kain Katun</td>
                                                    <td class="text-center">Merah</td>
                                                    <td class="text-center">500</td>
                                                    <td class="text-center">150 cm</td>
                                                    <td class="text-center">10</td>
                                                    <td class="text-center">20</td>
                                                    <td class="text-center">1000</td>
                                                    <td class="text-center">490</td>
                                                    <td class="text-center">500</td>
                                                    <td class="text-center">Kualitas bagus</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">CT-002</td>
                                                    <td class="text-center">Trader B</td>
                                                    <td class="text-center">Buyer Y</td>
                                                    <td class="text-center">Kain Sutra</td>
                                                    <td class="text-center">Biru</td>
                                                    <td class="text-center">300</td>
                                                    <td class="text-center">140 cm</td>
                                                    <td class="text-center">8</td>
                                                    <td class="text-center">15</td>
                                                    <td class="text-center">750</td>
                                                    <td class="text-center">295</td>
                                                    <td class="text-center">300</td>
                                                    <td class="text-center">Kualitas premium</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">CT-003</td>
                                                    <td class="text-center">Trader C</td>
                                                    <td class="text-center">Buyer Z</td>
                                                    <td class="text-center">Kain Linen</td>
                                                    <td class="text-center">Hijau</td>
                                                    <td class="text-center">400</td>
                                                    <td class="text-center">160 cm</td>
                                                    <td class="text-center">9</td>
                                                    <td class="text-center">18</td>
                                                    <td class="text-center">900</td>
                                                    <td class="text-center">395</td>
                                                    <td class="text-center">400</td>
                                                    <td class="text-center">Kualitas standar</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">CT-004</td>
                                                    <td class="text-center">Trader D</td>
                                                    <td class="text-center">Buyer W</td>
                                                    <td class="text-center">Kain Denim</td>
                                                    <td class="text-center">Hitam</td>
                                                    <td class="text-center">600</td>
                                                    <td class="text-center">170 cm</td>
                                                    <td class="text-center">12</td>
                                                    <td class="text-center">25</td>
                                                    <td class="text-center">1200</td>
                                                    <td class="text-center">590</td>
                                                    <td class="text-center">600</td>
                                                    <td class="text-center">Tahan lama</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">CT-005</td>
                                                    <td class="text-center">Trader E</td>
                                                    <td class="text-center">Buyer V</td>
                                                    <td class="text-center">Kain Poliester</td>
                                                    <td class="text-center">Putih</td>
                                                    <td class="text-center">250</td>
                                                    <td class="text-center">130 cm</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">10</td>
                                                    <td class="text-center">500</td>
                                                    <td class="text-center">245</td>
                                                    <td class="text-center">250</td>
                                                    <td class="text-center">Kualitas ekonomis</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
@endsection
