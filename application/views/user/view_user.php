     
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Learning Poin <small>Isikan Frekuensi dan Bukti dengan Sebenarnya</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">



          <!--      <div class="col-md-3 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Upload file pendukung <small> </small></h2>
                    <div class="clearfix"></div>
                  </div>
                <div class="x_content">
                  <form method="POST" action="#" enctype="multipart/form-data"> -->
                    <!-- COMPONENT START -->
          <!--           <div class="form-group">
                      <div class="input-group input-file" name="Fichier1">
                          <input type="text" class="form-control" placeholder='Upload file zip atau rar' />     
                              <span class="input-group-btn">
                              <button class="btn btn-default btn-choose" type="button">Choose</button>
                          </span>
                      </div>
                    </div -->
                    <!-- COMPONENT END -->
                  <!--   <div class="form-group">
                      <button type="submit" class="btn btn-primary pull-right" disabled>Submit</button>
                      <button type="reset" class="btn btn-danger">Reset</button>
              q      </div>
                  </form>
                </div>
                </div>
                <br />
                <br />
                <br />
                <br />
                <center><img src="images/sip.png" width='250px' ></center>
                <div class="clearfix"></div>
              </div>
         
 -->        
              <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                <center><img src="<?php echo base_url();?>assets/images/sip2.png" width='300px' ></center>
                <br /> <br /> <br />
                <div class="x_panel">
                  <form method="POST" action="<?php echo base_url();?>User/input_nilai" role="form">
                  <div class="x_title">
                    <h2><?php echo $dimensi[0]->var_dimensi; ?> <small> Berikan nilai yang sesuai !!</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th width="2%" >No</th>
                          <th>Deskripsi</th>
                          <th width="8%" >Frekuensi </th>
                          <th width="15%">Dasar Perhitungan</th>
                          <th> Poin </th>
                          <th width="19%"> Upload file pendukung </th> 

                        </tr>
                      </thead>
                      <tbody>
                        <?php $n=0; $j=0;
                          foreach ($pertanyaan1 as $p){
                            echo "<tr><th scope='row'>$p->id_pertanyaan</th>
                                      <td>$p->deskripsi</td>
                                      <td><input type='number' name='$p->id_pertanyaan' min='0' max='50' value='$p->frekuensi'></td>
                                      <td>$p->dasar_perhitungan</td>
                                      <td>$p->poin</td>
                                      <td><div class='input-group input-file' name='Fichier1'>
                                          <input type='file' >     
                                      </div></td>
                                  </tr>";}
                        ?>
                      </tbody>
                    </table>
                    <br>

                  <div class="x_title">
                    <h2><?php echo $dimensi[1]->var_dimensi; ?><small> Berikan nilai yang sesuai !!</small></h2>
                    <div class="clearfix"></div>
                  </div>

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th width="2%" >No</th>
                          <th>Deskripsi</th>
                          <th width="8%" >Frekuensi </th>
                          <th width="15%">Dasar Perhitungan</th>
                          <th>Poin </th>
                          <th width="19%">Upload file pendukung </th> 
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          foreach ($pertanyaan2 as $p){
                            echo "<tr><th scope='row'>$p->id_pertanyaan</th>
                                      <td>$p->deskripsi</td>
                                      <td><input type='number' name='$p->id_pertanyaan' min='0' max='50' value='$p->frekuensi'></td>
                                      <td>$p->dasar_perhitungan</td>
                                      <td>$p->poin</td>
                                      <td><div class='input-group input-file' name='Fichier1'>
                                          <input type='file' >     
                                      </div></td>
                                  </tr>";}
                        ?>
                      </tbody>
                    </table>

                    <div class="x_title">
                    <h2><?php echo $dimensi[2]->var_dimensi; ?><small> Berikan nilai yang sesuai !!</small></h2>
                    <div class="clearfix"></div>
                  </div>

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th width="2%" >No</th>
                          <th>Deskripsi</th>
                          <th width="8%" >Frekuensi </th>
                          <th width="15%">Dasar Perhitungan</th>
                          <th> Poin </th>
                          <th width="19%"> Upload file pendukung </th> 

                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          foreach ($pertanyaan3 as $p){
                            echo "<tr><th scope='row'>$p->id_pertanyaan</th>
                                      <td>$p->deskripsi</td>
                                      <td><input type='number' name='$p->id_pertanyaan' min='0' max='50' value='$p->frekuensi'></td>
                                      <td>$p->dasar_perhitungan</td>
                                      <td>$p->poin</td>
                                      <td><div class='input-group input-file' name='Fichier1'>
                                          <input type='file' >     
                                      </div></td>
                                  </tr>";}
                        ?>
                      </tbody>
                    </table>

                    <div class="x_title">
                    <h2><?php echo $dimensi[3]->var_dimensi; ?><small> Berikan nilai yang sesuai !!</small></h2>
                    <div class="clearfix"></div>
                  </div>

                   <table class="table table-striped">
                      <thead>
                        <tr>
                          <th width="2%" >No</th>
                          <th>Deskripsi</th>
                          <th width="8%" >Frekuensi </th>
                          <th width="15%">Dasar Perhitungan</th>
                          <th> Poin </th>
                          <th width="19%"> Upload file pendukung </th> 

                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          foreach ($pertanyaan4 as $p){
                            echo "<tr><th scope='row'>$p->id_pertanyaan</th>
                                      <td>$p->deskripsi</td>
                                      <td><input type='number' name='$p->id_pertanyaan' min='0' max='50' value='$p->frekuensi'></td>
                                      <td>$p->dasar_perhitungan</td>
                                      <td>$p->poin</td>
                                      <td><input type='file'></td>
                                  </tr>";}
                        ?>
                      </tbody>
                    </table>

                  </div>
                  <center>
                     <button type="submit" class="btn btn-success btn-md">
                      Kumpulkan Nilai <span class="glyphicon glyphicon-upload"></span> 
                    </button>
                    <!-- <button type="submit" name="submit" class="btn btn-success btn-sm">
                      <span class="glyphicon glyphicon-upload">  </span>
                    </button> -->
                  </center>
                  </form>
                </div>

                
              </div>
            
              <div class="clearfix"></div>

              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- /page content -->