      <!-- tambahan IA Idea CSS -->
        <link href="<?php echo base_url();?>/assets/css/IAidea.css" rel="stylesheet">

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
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

            <div class="page-title">
              <div class="">
                <center><h3>Garuda Indonesia</h3></center>
              </div>

            </div>

            <div class="row">
                <div class="x_panel">      
                  <div class="col-md-7 col-sm-12 col-xs-12">
                  <div class="x_title">
                    <h2>Transaction Summary <small>Weekly progress</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- <div class="col-md-7 col-sm-12 col-xs-12"> -->
                      <canvas id="corporate" style="height: 280px;"></canvas>
                    <!-- </div> -->
                  </div>
                </div>

                <div class="col-md-5 col-sm-12 col-xs-12">
                  <div class="x_title">
                    <h2>Pie Chart</h2>
                    <div class="clearfix"></div>
                  </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <td>
                        <canvas class="canvasDoughnut" height="250" width="250" style="margin: 30px 20px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
<br>
<br>
              <div class="row">
                <div class="col-sm-5 col-xs-12   ">
                  <br>
                    <center>
                       <img src="<?php echo base_url();?>/assets/images/Pyramid.png" width="100%" >
                    </center>
                    <br>
                </div>

                  <div class="col-sm-7 col-xs-12  ">
                      <div class="x_title">
                        <center><h2>Top Profiles</h2></center>
                          <div class="clearfix"></div>
                      </div>

                        <div class=" col-sm-2 col-xs-1 ">
                        <center>
                          <img src="<?php echo base_url();?>/assets/images/trophy.png" width="90%" style="opacity: 0.7; padding-top: 60%;">
                        </center>
                      </div>
                        <div class="col-sm-8 col-xs-10">
                            
                            <ul class="list-unstyled top_profiles scroll-view">
                              <li class="media event">
                                <a class="pull-left border-aero profile_thumb">
                                  <i class="fa fa-user aero"></i>
                                </a>
                                <div class="media-body">
                                  <a class="title" href="#">Ms. Mary Jane</a>
                                  <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                  <p> <small>12 Sales Today</small>
                                  </p>
                                </div>
                              </li>
                              <li class="media event">
                                <a class="pull-left border-green profile_thumb">
                                  <i class="fa fa-user green"></i>
                                </a>
                                <div class="media-body">
                                  <a class="title" href="#">Ms. Mary Jane</a>
                                  <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                  <p> <small>12 Sales Today</small>
                                  </p>
                                </div>
                              </li>
                              <li class="media event">
                                <a class="pull-left border-blue profile_thumb">
                                  <i class="fa fa-user blue"></i>
                                </a>
                                <div class="media-body">
                                  <a class="title" href="#">Ms. Mary Jane</a>
                                  <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                  <p> <small>12 Sales Today</small>
                                  </p>
                                </div>
                              </li>
                              <li class="media event">
                                <a class="pull-left border-aero profile_thumb">
                                  <i class="fa fa-user aero"></i>
                                </a>
                                <div class="media-body">
                                  <a class="title" href="#">Ms. Mary Jane</a>
                                  <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                  <p> <small>12 Sales Today</small>
                                  </p>
                                </div>
                              </li>
                              <li class="media event">
                                <a class="pull-left border-green profile_thumb">
                                  <i class="fa fa-user green"></i>
                                </a>
                                <div class="media-body">
                                  <a class="title" href="#">Ms. Mary Jane</a>
                                  <p><strong>$2300. </strong> Agent Avarage Sales </p>
                                  <p> <small>12 Sales Today</small>
                                  </p>
                                </div>
                              </li>
                            </ul>
                          </div>
                      <div class="col-sm-2 col-xs-1 ">
                        <center>
                          <img src="<?php echo base_url();?>/assets/images/trophy.png" width="90%" style="opacity: 0.7; transform: scaleX(-1); padding-top: 60%;">
                        </center>
                      </div>
                    </div>
                  
                  <div class="clearfix"> </div>
              </div>
<br>
<br>
<!--           <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Direktorat Summary <small></small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content"> -->

                      <div class="row" style="text-align: center;">
                        
                        <div class="col-md-4 col-sm-6 col-xs-6">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Direktorat JKTDC <small></small></h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                          <canvas class="canvasDoughnut" height="150" width="150" style="margin: 5px 10px 10px 0"></canvas>
                          <canvas id="corporate"  width="150" height="150" ></canvas>

                            <!-- <img src="<?php echo base_url();?>/assets/images/chart.jpg" width="250"> -->
                          <h4 style="margin:0">Bounce Rates</h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Direktorat JKTDE <small></small></h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                          <canvas class="canvasDoughnut" height="150" width="150" style="margin: 5px 10px 10px 0"></canvas>
                            <img src="<?php echo base_url();?>/assets/images/chart.jpg" width="250">
                          <h4 style="margin:0">Bounce Rates</h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Direktorat JKTDF <small></small></h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                          <canvas class="canvasDoughnut" height="150" width="150" style="margin: 5px 10px 10px 0"></canvas>
                           <img src="<?php echo base_url();?>/assets/images/chart.jpg" width="250">
                          <h4 style="margin:0">Bounce Rates</h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Direktorat JKTDG <small></small></h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                          <canvas class="canvasDoughnut" height="150" width="150" style="margin: 5px 10px 10px 0"></canvas>
                          <img src="<?php echo base_url();?>/assets/images/chart.jpg" width="250">
                          <h4 style="margin:0">Bounce Rates</h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Direktorat JKTDN <small></small></h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                          <canvas class="canvasDoughnut" height="150" width="150" style="margin: 5px 10px 10px 0"></canvas>
                            <img src="<?php echo base_url();?>/assets/images/chart.jpg" width="250">
                          <h4 style="margin:0">Bounce Rates</h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Direktorat JKTDI <small></small></h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                          <canvas class="canvasDoughnut" height="150" width="150" style="margin: 5px 10px 10px 0"></canvas>
                            <img src="<?php echo base_url();?>/assets/images/chart.jpg" width="250">
                          <h4 style="margin:0">Bounce Rates</h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Direktorat JKTDO <small></small></h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                          <canvas class="canvasDoughnut" height="150" width="150" style="margin: 5px 10px 10px 0"></canvas>
                            <img src="<?php echo base_url();?>/assets/images/chart.jpg" width="250">
                          <h4 style="margin:0">Bounce Rates</h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Direktorat JKTDR <small></small></h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                          <canvas class="canvasDoughnut" height="150" width="150" style="margin: 5px 10px 10px 0"></canvas>
                            <img src="<?php echo base_url();?>/assets/images/chart.jpg" width="250">
                          <h4 style="margin:0">Bounce Rates</h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Direktorat JKTDZ <small></small></h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                          <canvas class="canvasDoughnut" height="150" width="150" style="margin: 5px 10px 10px 0"></canvas>
                            <img src="<?php echo base_url();?>/assets/images/chart.jpg" width="250">
                          <h4 style="margin:0">Bounce Rates</h4>
                        </div>
                      </div>
                    </div>



                        <!-- <div class="col-md-2">
                          <canvas class="canvasDoughnut" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                          <h4 style="margin:0">Device Share</h4>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



                  </div>
                </div>
        <!-- /page content -->