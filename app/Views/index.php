<?= $this->extend('layout/master') ?>
<?= $this->section('content') ?>

<div class="c_content">
            
            <table id="example" class="table table-striped table-bordered" style="border-spacing:0px; width:100%">
                <thead>
                    <tr>
                        <th>Nama Pemohon</th>
                        <th>Letak Tanah</th>
                        <th>Luas</th>
                        <th>Nomor</th>
                        <th>Data Scan</th>
                        <th>Lemari</th>
                        <th>Kode Box</th>
                        <th>Action</th>
                    </tr>
                </thead>
         
                <tbody>
                    <tr>
                        <td>IMAM WINARYA</td>
                        <td>Kp.Baros RT.01/02, Baros, Baros, Kota Sukabumi</td>
                        <td>275m2</td>
                        <td>49/PTPGT/VII/2020 TANGGAL 09/JULI/2020</td>
                        <td>#</td>
                        <td>1</td>
                        <td>A</td>
                        <td class="text-center"><a class="edit btn btn-sm btn-default btn-raised rippler rippler-inverse" href="javascript:;"><i class="fa fa-pencil-square-o"></i></a>  <a class="delete btn btn-sm btn-danger btn-raised rippler rippler-inverse" href="javascript:;"><i class="fa fa-trash"></i></a>
                    </tr>
                    <tr>
                        <td>DJAKA PERMANA</td>
                        <td>Kp.Lembursitu RT.002/001, Karamat, Gunung Puyuh, Kota Sukabumi</td>
                        <td>200m2</td>
                        <td>50/PTPGT/VII/2020 TANGGAL 10/AGUSTUS/2020</td>
                        <td>#</td>
                        <td>1</td>
                        <td>A</td>
                        <td class="text-center"><a class="edit btn btn-sm btn-default btn-raised rippler rippler-inverse" href="javascript:;"><i class="fa fa-pencil-square-o"></i></a>  <a class="delete btn btn-sm btn-danger btn-raised rippler rippler-inverse" href="javascript:;"><i class="fa fa-trash"></i></a>
                    </tr>
                    <tr>
                        <td>AHMAD SULAEMAN</td>
                        <td>Kp.Kebonjati RT.001/005, Kebonjati, Cikole, Kota Sukabumi</td>
                        <td>380m2</td>
                        <td>51/PTPGT/VII/2020 TANGGAL 20/SEPTEMBER/2020</td>
                        <td>#</td>
                        <td>1</td>
                        <td>B</td>
                        <td class="text-center"><a class="edit btn btn-sm btn-default btn-raised rippler rippler-inverse" href="javascript:;"><i class="fa fa-pencil-square-o"></i></a>  <a class="delete btn btn-sm btn-danger btn-raised rippler rippler-inverse" href="javascript:;"><i class="fa fa-trash"></i></a>
                    </tr>
                </tbody>
            </table>
            
            
        </div><!--/.c_content-->

<?= $this->endSection() ?>