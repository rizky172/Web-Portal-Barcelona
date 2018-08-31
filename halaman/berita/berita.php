<div id="page-wrapper">
        <div class="top-grids">
          <div class="top-grids-info">
            <!-- top-grid-left -->
            
            <div class="col-md-9 top-grid-left">
              <!-- top-big-grids -->
              <div class="top-big-grids">
              <?PHP 
                  $result = mysql_query("SELECT * FROM berita ORDER BY id_berita DESC") or die (mysql_error());
                  while($data=mysql_fetch_array($result)){
                ?>
                <div class="col-md-11 top-grid-right-right">
                  <!-- //three-grids -->
                  <!-- two-grids -->
                  <div class="two-grids">
                    <div class="col-md-11 two-grid-right">
                      <div class="two-grid-info">
                        <div class="two-grid-img">
                          <a href="#"><img src="bootstrap/gambar/beranda/<?php echo $data['gambar_berita']?>" alt="" /></a>
                        </div>
                        <div class="two-grid-text">
                          <div class="three-grid-text-heading two-grid-text-heading">
                            <a class="text" href="#"><?php echo $data['judul_berita']?></a>
                            <p><?php echo $data['isi_berita']?></p>
                          </div>
                          <div class="t-grid author-grid two-grid-author">
                            <ul>
                              <li><a href="#"><i class="faa fa-clock-o"></i> 3h</a></li>
                              <li><a href="#"><i class="faa fa-user"></i> Rizky F.R</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"> </div>
                  </div>  
                  <!-- //two-grids -->
                  <!-- two-grids-bottom -->
                  </div>
                   <?php 
                  } 
                ?>
              </div>
              <!-- //top-big-grids -->
            </div>
              
            <!-- //top-grid-left -->
            <!-- top-grid-right -->
            <div class="col-md-3 top-grid-right">
              <!-- today-match -->
              <div class="today-match">
                <div class="today-match-heading">
                  <h2>Jadwal Pertandingan</h2>
                </div>
                <?PHP 
                  $result = mysql_query("SELECT * FROM pertandingan") or die (mysql_error());
                  while($data=mysql_fetch_array($result)){
                ?>
                <div class="match-grid">
                  <div class="match-info">
                    <ul>
                      <center><label><?php echo $data['laga']?></label></center>
                      <li><span><?php echo $data['jadwal']?></span><?php echo $data['home']?><span class="color">Vs</span><?php echo $data['away']?></li>
                    </ul>
                  </div>
                </div>
                <?php 
                  } 
                ?>
              </div>
              <!-- //today-match -->
              <!-- ranking -->
              <div class="ranking">
                <div class="ranking-heading">
                  <h3>Top 5 Goal Barca</h3>
                </div>
                <div class="ranking-grids">
                  <table>
                    <thead>
                      <th class="th-rank">
                        Rank
                      </th>
                      <th class="th-country">
                        Nama
                      </th>
                      <th class="th-t-points">
                        Total Goal
                      </th>
                      <th class="th-p-points">
                        Karier/Tahun
                      </th>
                    </thead>
                    <tbody>
                    <?PHP 
                      $result = mysql_query("SELECT * FROM topgoal") or die (mysql_error());
                      while($data=mysql_fetch_array($result)){
                    ?>
                      <tr class="bg-color">
                        <td class="rank">
                          <?php echo $data['id_goal']?>
                        </td>
                        <td class="country">
                          <?php echo $data['nama']?>
                        </td>
                        <td class="t-points">
                          <?php echo $data['total_goal']?>
                        </td>
                        <td class="t-points p-points">
                          <?php echo $data['karier']?>
                        </td>
                      </tr>
                      <?php 
                      } 
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- //ranking -->
              <!-- player-rank -->
              <div class="player-rank">
                <div class="ranking-heading">
                  <h3>Top 10 Players Barca</h3>
                </div>
                <div class="ranking-grids">
                  <table>
                    <thead>
                      <th class="th-rank">
                        Rank
                      </th>
                      <th class="th-country">
                        Nama
                      </th>
                      <th class="th-t-points">
                        Posisi
                      </th>
                      <th class="th-p-points">
                        Negara
                      </th>
                    </thead>
                    <tbody>
                    <?PHP 
                      $result = mysql_query("SELECT * FROM topplayer") or die (mysql_error());
                      while($data=mysql_fetch_array($result)){
                    ?>
                      <tr class="bg-color">
                        <td class="rank">
                          <?php echo $data['id_player']?>
                        </td>
                        <td class="country">
                          <?php echo $data['nama']?>
                        </td>
                        <td class="t-points">
                          <?php echo $data['posisi']?>
                        </td>
                        <td class="t-points p-points">
                          <?php echo $data['negara']?>
                        </td>
                      </tr>
                       <?php 
                      } 
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- //player-rank -->
              </div>
              <!-- //most-view-grids -->
            </div>
            <!-- //top-grid-right -->
            <div class="clearfix"> </div>
          </div>
          <!-- //more-sports -->
        </div>
      </div>