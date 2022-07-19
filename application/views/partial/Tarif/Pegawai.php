<div class="content-wrapper">
    <div class="card">
    <?php 
	if(isset($_POST['hitung'])){
		$kontainer = $_POST['kontainer'];
		$ukuran = $_POST['ukuran'];
        $durasi = $_POST['durasi'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'kering':
				$hasil = ($kontainer*2500000)+($ukuran*5000000)+($durasi*500000)+6000;
			break;
			case 'cair':
				$hasil = ($kontainer*1500000)+($ukuran*4000000)+($durasi*500000)+6000;
			break;
			
		}
	}
	?>
	<div class="Simulasi Tarif">
		
        <form class="col-12 col-md-9 pl-5 pr-5" method="post" action="index">
            <h1 class="display-3 mb-3 text-left">Simulasi Tarif</h1>

            <div class="form-group">
                <label for="kontainer">Jumlah Kontainer  </label>
                <input type="number" class="form-control" id="kontainer" name="kontainer"
                    placeholder="Contoh: 15" >
            </div>

            <div class="form-group">
                <label for="ukuran">Ukuran <em>(Ton)</em>  </label>
                <input type="number" class="form-control" id="ukuran" name="ukuran"
                    placeholder="Contoh: 120 Ton">
            </div>

            <div class="form-group">
                <label for="durasi">Durasi Penginapan<em>(Per Malam)</em>  </label>
                <input type="number" class="form-control" id="durasi" name="durasi"
                    placeholder="Contoh: 1 Malam">
            </div>
       
            
            <div class="form-group">
            <label for="jenis">Jenis</label>
            <select class="form-control" name="operasi">
				<option value="kering">Kering</option>
				<option value="cair">Cair</option>
			</select>
            </div>

            <p>*Biaya Administrasi : Rp.6.000</p>

            <div class="form-group">
            <input type="submit" name="hitung" value="Hitung" >
            </div>
        </form><br>

        
        <?php if(isset($_POST['hitung'])){ ?>
            <div class="form-group" style="text-align:center ;">
            <input type="text" value="<?php echo $hasil; ?>"  style="text-align:center ;">
            </div>
			
		<?php }else{ ?>
            <div class="form-group" style="text-align:center ;">
			<input type="text" value="0" style="text-align:center ;">
            </div>
		<?php } ?>		
      
			
	</div>
    </div>
</div>