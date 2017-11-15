<!--page content -->
        <div class="right_col" role="main" style="min-height: 0px!important">
          <div class="">
            <!-- <div class="page-title">
              <div class="title-right"> <center>
                <h2>Unit A</h2>
              </center> </div>

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
            <div class="clearfix"> </div>
            </div> -->


            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                <div class="tile-stats bg-info">
                  <div class="icon"><i class="glyphicon glyphicon-download-alt" ></i></div>
                  <div class="count">90</div>
                  <h3 >Pengisi</h3>
                  <p>Pegawai yang sudah mengisi data</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                <div class="tile-stats bg-success">
                  <div class="icon"><i class="glyphicon glyphicon-check"></i></div>
                  <div class="count">80</div>
                  <h3>Verified</h3>
                  <p>Data masuk yang sudah diverifikasi</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                <div class="tile-stats bg-danger">
                  <div class="icon"><i class="glyphicon glyphicon-unchecked"></i></div>
                  <div class="count">7</div>
                  <h3>Belum Diperiksa</h3>
                  <p>Data yang masuk yang belum diverifikasi</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                <div class="tile-stats bg-warning">
                  <div class="icon"><i class="glyphicon glyphicon-circle-arrow-up"></i></div>
                  <div class="count" >2</div>
                  <h3>Update</h3>
                  <p>Beberapa pegawai melakukan update data</p>
                </div>
              </div>
            </div>


            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                <div class="x_panel">
                  <center>
                  <div class="x_title">
                    <h2>Unit <?php echo $this->session->userdata('admin_username');?><small> </small></h2>

                    <div class="clearfix"></div>
                  </div>
                  </center>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                                        </p>
                      <table id="datatable-fixed-header" class="table table-striped table-bordered tabel-ide">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>No Pegawai</th>
                          <th>Nama</th>
                          <th>Unit</th>
                          <th>Poin</th>
                          <th>Level</th>
                          <th>Status</th>
                          <th>Ubah</th>
                        </tr>
                      </thead>

<!--
<td><span class="label label-success">Verified</span></td>
<td><span class="label label-danger">Belum diverifikasi</span></td>  
<td><span class="label label-warning">New</span>  <span class="badge bg-danger">3</span></td>

Master expert pro legend rookie
-->
                      <tbody>
                        <?php
                          $no=1;
                          foreach ($pegawai as $peg) {
                            echo "<tr><td>$no</td>
                                      <td>$peg->nopeg</td>
                                      <td>$peg->nama</td>
                                      <td>$peg->unit</td>
                                      <td>90</td>
                                      <td>level</td>
                                      <td><span class='label label-success'>Verified</span></td>
                                      <td style='vertical-align:baseline'> <a href='#'' class='btn btn-primary btn-xs'> <i class='fa fa-pencil'></i> Change</a></td>
                                  </tr>";
                            $no++;
                          }
                        ?>
                        <!-- <tr>
                          <td>1</td>
                          <td>543</td>
                          <td>Tiger Nixon</td>
                          <td>JKTID</td>
                          <td>78</td>
                          <td>Master</td>
                          <td><span class="label label-success">Verified</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>542</td>
                          <td>Garrett Winters</td>
                          <td>JKTUD</td>
                          <td>7</td>
                          <td>Rookie</td>
                          <td><span class="label label-danger">Belum diverifikasi</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>541</td>
                          <td>Ashton Cox</td>
                          <td>JKTID</td>
                          <td>89</td>
                          <td>Master</td>
                          <td><span class="label label-success">Verified</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>

                        <tr>
                          <td>4</td>
                          <td>532</td>
                          <td>Cedric Kelly</td>
                          <td>JKTID</td>
                          <td>54</td>
                          <td>Expert</td>
                          <td><span class="label label-warning">New</span>  <span class="badge bg-danger">3</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>587</td>
                          <td>Airi Satou</td>
                          <td>JKTID</td>
                          <td>86</td>
                          <td>Master</td>
                          <td><span class="label label-warning">New</span>  <span class="badge bg-danger">2</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>510</td>
                          <td>Brielle Williamson</td>
                          <td>JKTAK</td>
                         <td>93</td>
                          <td>Legend</td>
                          <td><span class="label label-success">Verified</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>509</td>
                          <td>Herrod Chandler</td>
                          <td>JKTAL</td>
                          <td>91</td>
                          <td>Legend</td>
                          <td><span class="label label-success">Verified</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>519</td>
                          <td>Rhona Davidson</td>
                          <td>JKTRE</td>
                          <td>35</td>
                          <td>Pro</td>
                          <td><span class="label label-danger">Belum diverifikasi</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>534</td>
                          <td>Colleen Hurst</td>
                          <td>JKTMU</td>
                          <td>9</td>
                          <td>Rookie</td>
                          <td><span class="label label-warning">New</span>  <span class="badge bg-danger">6</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>541</td>
                          <td>Sonya Frost</td>
                          <td>JKTOP</td>
                          <td>46</td>
                          <td>Expert</td>
                          <td><span class="label label-success">Verified</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>
                        <tr>
                          <td>11</td>
                          <td>943</td>
                          <td>Jena Gaines</td>
                          <td>JKTYU</td>
                          <td>68</td>
                          <td>Expert</td>
                          <td><span class="label label-warning">New</span>  <span class="badge bg-danger">2</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>
                        <tr>
                          <td>12</td>
                          <td>523</td>
                          <td>Quinn Flynn</td>
                          <td>JKTPO</td>
                          <td>25</td>
                          <td>Pro</td>
                          <td><span class="label label-success">Verified</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>
                        <tr>
                          <td>13</td>
                          <td>510</td>
                          <td>Charde Marshall</td>
                          <td>JKTUH</td>
                          <td>63</td>
                          <td>Expert</td>
                          <td><span class="label label-danger">Belum diverifikasi</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>
                        <tr>
                          <td>14</td>
                          <td>513</td>
                          <td>Haley Kennedy</td>
                          <td>JKTWE</td>
                          <td>99</td>
                          <td>Legend</td>
                          <td><span class="label label-danger">Belum diverifikasi</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr>
                        <tr>
                          <td>15</td>
                          <td>549</td>
                          <td>Tatyana Fitzpatrick</td>
                          <td>JKTLU</td>
                          <td>27</td>
                          <td>Pro</td>
                          <td><span class="label label-danger">Belum diverifikasi</span></td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-primary btn-xs"> <i class="fa fa-pencil"></i> Change</a></td>
                        </tr> -->
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 

        <!-- /page content