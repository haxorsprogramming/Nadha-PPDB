<div class="col s12 m12 l12" id="app_tahun_ajaran">
    <div class="card">
        <div class="card-content">
            <span class="card-title">Data Tahun Ajaran</span>
            <p>Silahkan buat tahun ajaran yang berlaku</p><br>
            <a class="waves-effect waves-light btn" href="javascript:void(0)" @click="add_tahun_ajaran_atc()"><i class="material-icons left">cloud</i>Tambah Tahun Ajaran</a>
            <hr/>
            <table id="example" class="display responsive-table datatable-example">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Kode</th>
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
                        <td>{{ $tahun_ajaran -> kd_tahun_ajaran }}</td>
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
</div>
<script src="{{ asset('/') }}ladun/nadha_asset/admin_panel/tahun_ajaran/tahun_ajaran.js"></script>
