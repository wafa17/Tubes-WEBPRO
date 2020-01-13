<div class="container-fluid ">
    <div class="page-judul">
        <h5>Katalog</h5>
    </div>

    <div class="page-body">
        <table class="table table-hover" cellspacing="0" style="font-size: 14px">
            <thead>
                <tr>
                    <th>No. Katalog</th>
                    <th>Katalog</th>
                    <th>Subjek</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($katalog->result() as $k) :?>
                <tr>
                    <td class="no_katalog">
                        <?php echo $k->no_katalog; ?><br/>
                        <img class="img-thumbnail" width="100" height="500" src="<?php echo base_url().'assets/img/'.$k->image  ?>"/>
                    </td>
                    <td class="katalog">
                        <a class="judul_katalog" href="#"><b><?php echo $k->judul_katalog; ?></b></a><br/>
                        <div class="item">
                            <div class="author"><?php echo $k->pengarang. ", " .$k->tahunterbit;?></div>
                        </div>
                        <div class="item">
                            <div class="jenis"><?php echo $k->jenis_katalog; ?></div>
                            <div class="jenis_tambahan"><?php echo $k->jenis_katalog; ?></div>
                        </div>
                        <a class="available" href=""><?php echo "tersedia " .$k->jml_koleksi. " koleksi"; ?></a><br/>
                        <a class="stok" href=""><?php echo "ada " .$k->jml_koleksi. " stok"; ?></a><br/>
                        <a class="download" href=""><?php echo $k->jml_koleksi; ?></a><br/>
                    </td>
                    <td class="subjek">
                        <div>
                            <b><?php echo $k->subjek; ?></b><br/>
                        </div>
                    </td>
                    <td class="aksi">
                        <!-- <?php //echo $k->aksi ?> -->
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php echo $pagination; ?>
    
    </div><!--end pagebody-->
</div>