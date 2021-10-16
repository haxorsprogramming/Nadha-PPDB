<div class="col s12 m12 l12" id="app_tahun_ajaran">
    <!-- Div data tahun ajaran  -->
    <div class="card" id="d_data_tahun_ajaran">
        <div class="card-content">
            <span class="card-title">Data Tahun Ajaran</span>
            <p>Tahun ajaran digunakan sebagai penanda rangkaian waktu belajar yang dibagi menjadi beberapa semester. Silahkan buat tahun ajaran yang berlaku</p><br>
            <a class="waves-effect waves-light btn" href="javascript:void(0)" @click="add_tahun_ajaran_atc()"><i class="material-icons left">cloud</i>Tambah Tahun Ajaran</a>
            <hr />
            <table id="example" class="display responsive-table datatable-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($data_tahun_ajaran as $tahun_ajaran)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $tahun_ajaran -> nama }}</td>
                        <td>{{ $tahun_ajaran -> mulai }}</td>
                        <td>{{ $tahun_ajaran -> selesai }}</td>
                        <td>{{ $tahun_ajaran -> status }}</td>
                        <td>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Div form tambah tahun ajaran  -->
    <div class="card" id="d_form_tambah_tahun_ajaran" style="display: none;">
    
        <div class="card-content">
            
            <span class="card-title">Tambah Tahun Ajaran</span>
            <div class="row">
                <form class="col s6">
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Placeholder" id="txt_nama_tahun_ajaran" type="text" class="validate">
                            <label for="txt_nama_tahun_ajaran" class="active">Nama Tahun Ajaran</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="date" class="validate" id="txt_tanggal_mulai">
                            <label for="txt_tanggal_mulai" class="active">Tanggal Mulai</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="date" class="validate" id="txt_tanggal_selesai">
                            <label for="txt_tanggal_selesai" class="active">Tanggal Selesai</label>
                        </div>
                    </div>
                    <div>
                    <a class="waves-effect waves-light btn" href="javascript:void(0)" @click="proses_simpan_atc()"><i class="material-icons left">save</i>Simpan</a>
                    <a class="waves-effect waves-light btn orange" href="javascript:void(0)" @click="kembali_atc()"><i class="material-icons left">arrow_back</i>Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/') }}ladun/nadha_asset/admin_panel/tahun_ajaran/tahun_ajaran.js"></script>