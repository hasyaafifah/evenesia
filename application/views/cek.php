<div class="content-wrapper">
    <h3>Data Mua</h3>

    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('Mua/fungsiTambah'); ?>

                    <input type="hidden" name="id" />

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Nama Mua</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_mua" name="nama_mua">
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Alamat Mua</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat_mua" name="alamat_mua">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Skil yang dimiliki</label>
                        <div class="col-sm-10">
                        <ol>
                            <li>
                                <input type="checkbox" name="skill[]" id="skill" value="Hair Style" />Hair Style 
                            </li>
                            <li>
                                <input type="checkbox" name="skill[]" id="skill" value="Wedding" />Wedding
                            </li>
                            <li>
                                <input type="checkbox" name="skill[]" id="skill" value="Graduation" />Graduation
                            </li>
                            <li>
                                <input type="checkbox" name="skill[]" id="skill" value="Hairdo" />Hairdo
                            </li>
                            <li>
                                <input type="checkbox" name="skill[]" id="skill" value="Hijabdo" />Hijabdo
                            </li>
                        </ol>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Instagram</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="instagram" name="instagram">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Namor Whatsapp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="whatsapp" name="whatsapp">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Dokumen</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="dokumen" name="dokumen">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>

                <?= form_close(); ?>
            </div>

        </div>
    </div>


    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="<SB-Mid-client-14_M965quJ5ct-4o>"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </head>
  <body>

    
    <form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
      <input type="hidden" name="result_type" id="result-type" value=""></div>
      <input type="hidden" name="result_data" id="result-data" value=""></div>
    </form>
    
    <button id="pay-button">Pay!</button>
    <script type="text/javascript">
  
    $('#pay-button').click(function (event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");
    
    $.ajax({
      url: '<?=site_url()?>/snap/token',
      cache: false,

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
  });

  </script>
</div>

