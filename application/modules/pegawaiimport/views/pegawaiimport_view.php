<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Form Pegawai
                                <small>Isilah form dibawah ini dengan cermat !</small>
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form name="upload_data" id="upload_data" method="post" enctype="multipart/form-data">
                           
                            <h2 class="card-inside-title">Impor Data Pegawai </h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" class="form-control" id="upload_file" name="upload_file"  >
                                        </div>

                                        <br>
                                        <b> Download Template Pegawai  <a href="<?php echo base_url('asset/database_karyawan.xlsx'); ?>">  Disini </a> </b>
                                        <br>
                                        <!-- <a href="<?php echo base_url('asset/database_karyawan.xlsx'); ?>"> Template Pegawai </a> -->
                                    </div>
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-primary btn-block"> <i class="material-icons">file_upload</i> Import </button>
                                    </div>
                                </div>
                            </div>
  
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                      $('#upload_data').on('submit', function(event){

                        event.preventDefault();

                        $.ajax({

                        url:"<?php echo base_url('pegawaiimport/save'); ?>",

                        method:"POST",

                        data:new FormData(this),

                        contentType:false,

                        cache:false,

                        processData:false,

                        success:function(data){ 
                            swal("Yeayy!", "Data sudah berhasil diimport!", "success");
                        } 
                        });
                    });
                </script>