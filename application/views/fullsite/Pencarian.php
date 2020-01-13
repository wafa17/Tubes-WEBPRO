<!-- The Modal -->
        <div class="modal fade" id="modal-filter">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                <h5 class="modal-title">Pencarian Detil Katalog</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                <div class="form-group">
                  <label for="inputTitle">Judul</label>
                  <input type="text" name="search[title]" value="" class="form-control" id="search-title" placeholder="Judul katalog">
                </div>  

                <div class="form-group">
                  <label for="inputTitle">Pengarang</label>
                  <input type="text" name="search[author]" value="" class="form-control" id="search-author" placeholder="Nama pengarang katalog">
                </div>  

                <div class="form-group">
                  <label for="inputTitle">Penerbit</label>
                  <input type="text" name="search[publisher]"  value="" class="form-control" id="search-publisher" placeholder="Penerbit katalog">
                </div>    

                <div class="form-group">
                  <label for="inputTitle">Subjek</label>
                  <input type="text" name="search[subject]"  value="" class="form-control" id="search-subject" placeholder="Subjek katalog">
                </div>

                <div class="form-group">
                  <label for="inputTitle">Jenis</label>
                  <select name="search[type]" class="form-control" id="search-type" placeholder="Pilih jenis katalog">
                    <option value="" selected="selected">Pilih Jenis Katalog</option>
                    <option value="9">Artikel - Restricted Use</option>
                    <option value="29">Bahan Ajar</option>
                    <option value="59">Buku - Circulation (BI Corner)</option>
                    <option value="1">Buku - Circulation (Dapat Dipinjam)</option>
                    <option value="21">Buku - Elektronik (E-Book)</option>
                    <option value="2">Buku - Reference (Hanya Baca di Tempat)</option>
                    <option value="3">Buku - Restricted Use (Khusus Untuk Dosen)</option>
                    <option value="41">Buku History Of Indonesia - Reference</option>
                    <option value="33">Buku Rekreatif - Circulation</option>
                    <option value="40">Buku Softskill - Circulation</option>
                    <option value="10">Case Studies</option>
                    <option value="37">Case Study Mahasiswa</option>
                    <option value="13">CD - Reference</option>
                    <option value="22">Disertasi - Reference</option>
                    <option value="15">DVD - Reference </option>
                    <option value="52">E- Article Staf</option>
                    <option value="24">E-Article</option>
                    <option value="47">e-Article Paper Review</option>
                    <option value="51">e-Laporan Seminar/Pelatihan/Workshop TPA</option>
                    <option value="44">Jurnal Internasional - Reference</option>
                    <option value="42">Jurnal Nasional - Reference</option>
                    <option value="43">Jurnal Terakreditasi DIKTI - Reference</option>
                    <option value="4">Karya Ilmiah - Skripsi (S1) - Reference</option>
                    <option value="6">Karya Ilmiah - TA (D3) - Reference</option>
                    <option value="5">Karya Ilmiah - Thesis (S2) - Reference</option>
                    <option value="17">Kaset - Reference</option>
                    <option value="7">Laporan Magang - Reference</option>
                    <option value="12">Majalah - Reference</option>
                    <option value="45">Majalah Ilmiah - Reference</option>
                    <option value="46">Majalah Populer - Reference</option>
                    <option value="50">Modul Praktikum</option>
                    <option value="49">Modul Praktikum ( Electronic )</option>
                    <option value="28">Proceeding</option>
                    <option value="25">Proceeding ( Electronic )</option>
                    <option value="23">Research Report - Reference</option>
                    <option value="53">Sharing Knowledge Material</option>
                    <option value="11">Teaching Note - Restricted Use</option>
                    <option value="56">VCD-Reference</option>
                  </select>
                </div>

                <div class="form-group"> 
                  <label for="inputTitle">Lokasi</label>
                  <select name="search[location]" class="form-control" id="search-location" placeholder="Pilih lokasi">
                    <option value="" selected="selected">Pilih lokasi</option>
                    <option value="1">Gedung FKB Lantai 4</option>
                    <option value="2">Kampus Geger Kalong</option>
                    <option value="3">Kampus Setiabudi</option>
                    <option value="4">Gedung FKB Lantai 4 (Dalam)</option>
                    <option value="5">Gedung FIT Lantai 1</option>
                    <option value="6">Gedung FIK Lantai 4</option>
                    <option value="7">Gedung FIT Lantai 1 (Dalam)</option>
                    <option value="8">Gedung LC Lantai 3</option>
                    <option value="9">Gedung Manterawu Lantai 5</option>
                  </select>
                </div> 
                
                <div class="form-group"> 
                  <label for="inputTitle">Periode</label>
                  <select name="search[periode]" class="form-control" id="search-periode" placeholder="Pilih periode">
                    <option value="" selected="selected">Pilih Periode</option>
                    <option value="1" >Katalog Terbaru</option>
                    <option value="2" >Katalog Terpopuler</option>
                    <option value="3" >E-Book</option>
                  </select>
                </div>
              </div> <!--end modalbody-->
        
              <!-- Modal footer -->
              <div class="modal-footer">
                <a class="btn btn-danger" href="">Bersihkan</a>
                <input type="submit" name="submit" class="btn btn-success" value="Cari"/>
              </div>
            </div>
          </div>
        </div><!--end modal-->


  </div><!--end containerfluid-->

</body>
</html>