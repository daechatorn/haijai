<!-- Main bar --> 

    <div class="mainbar" style="min-width:580px;">

        <!-- Page heading -->
        <div class="page-head" >
            <!-- Page heading -->
            <div class="bread-crumb">
                <span>จัดการสมาชิก -> สมาชิกทั้งหมด</span>
            </div>

            <div class="clearfix"></div>

        </div>
        <!-- Page heading ends -->
      <!-- Matter -->

      <div class="matter">
        <div class="container">

          <!-- Today status. jQuery Sparkline plugin used. -->

          <div class="row" style="margin-top:10px;">
            
            <div class="col-md-12">
                <div class="widget boxed">

                    <div class="widget-head">
                        <h4 class="pull-left"><i class="fa fa-file-text"></i>สมาชิกทั้งหมด</h4>
                        <!--
                        <div class="pull-right" style="width:10%;margin-right:10px;" >
                          <button type="button" class="btn btn-default filterbutton" onClick="showfilterbox();"  style="margin:2px 10px 2px 6px;width:100%;" aria-label="Left Align">
                            <span style="align:center" aria-hidden="true">กรองข้อมูล</span>
                          </button>
                        </div>
                        -->
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget-content" style="padding-top:2px;">


                        <table class="table table-hover" >
                            <thead>
                            <tr>
                                <th>ชื่อสมาชิก</th>
                                <th>ชื่อในระบบ</th>
                                <th>อีเมลล์</th>
                                <th>ประเภทของสมาชิก</th>
                                <th>สถานะของสมาชิก</th>
                                <th>รายละเอียดเพิ่มเติม</th>
                            </tr>
                            </thead>
                            <?php /*
                            <div class="filterbox" style="width:100%;">
                              
                              <?=form_open("dash/filter");?>
                                
                              <div class="filter-box">
                                <div class="form-group"  style="width:40%;display:inline-block;float:left;">
                                  <label for="exampleInputEmail1" style="margin-right:10px;float:left;">สถานะสมาชิก: </label>
                                  <select class="form-control" name="statusfil" style="width:70%;float:left;">
                                    <option value="notchoose">-- ทั้งหมด --</option>
                                    <option value='รอการอนุมัติ'>รอการอนุมัติ</option>
                                    <option value='อนุมัติแล้ว'>อนุมัติแล้ว</option>
                                    <option value='บล๊อค'>บล็อค</option>
                                  </select>
                                </div>


                                <div class="form-group"  style="width:40%;display:inline-block;float:left;">
                                  <label for="exampleInputEmail1" style="margin-right:10px;float:left;">ค้นหาจากชื่อ: </label>
                                  <input type="text" placeholder="ชื่อสมาชิก" style="width:70%;float:left;">
                                </div>

                                
                                
                                <button type="submit" style="width:15%;height:31px;line-height:12.5px;float:right;display:block;" class="btn btn-success">กรอง</button>
                              </div>
                              <?=form_close();?>

                            </div>
                            */
                            ?>

                            <tbody>
                                    <?php 
                                    if(count($allmember)==0){

                                    }else{

                                      foreach ($allmember as $key => $value) {

                                    //print content of donation
                                      echo "<tr class='rowcontent'>";

                                        echo "<td>";
                                        echo $value['member_name'];
                                        echo "</td>";

                                        echo "<td>";
                                        echo $value['username'];
                                        echo "</td>";

                                        
                                        echo "<td>";
                                        echo $value['email'];
                                        echo "</td>";


                                        echo "<td>";
                                        echo $value['MemberRole']; 
                                        echo "</td>";


                                        echo "<td>";
                                        echo $value['member_status'];
                                        echo "</td>";


                                        echo "<td>";

                                          echo "<button type='button' class='btn btn-primary'  data-toggle='collapse' data-target='#im".$value['member_id']."'  >";
                                              echo "<i class='fa fa-chevron-down'></i>";
                                            echo "</button>";

                                        echo "</td>";


                                      echo "</tr>";

                                      //toggle more detail

                                                      //full 
                                                      echo "<tr class='rowcontent'>";
                                                        echo "<td colspan='8' style='border-top:0'>";
                                                          echo "<div id='im".$value['member_id']."' class='collapse'>";
                                                            //content
                                                            echo "<div style='float:left;width:100%;height:auto;'>";
                                                              echo "<h3><b>รายละเอียดเพิ่มเติม</b></h3>";
                                                            //member 
                                                              echo "<img src='".base_url()."assets/img/member/MemberProfile/".$value['img_profilepath']."' style='width:auto;max-height:150px;' />"; //img_profilepath
                                                              echo "<p>ข้อมูลที่อยู่ผู้ใช้: ".$value['location']."</p>"; //location
                                                              echo "<p>ข้อมูลชีวประวัติ: ".$value['biography']."</p>"; //biography

                                                              echo "<p>รับข่าวสารทางอีเมลล์ :".$value['receiveemailnews']."</p>";//receiveemailnews
                                                              echo "<p>สนใจในโครงการ: ".$value['projectgroup_name']."</p>"; //interest table

                                                            echo "<h3><b>เอกสารการยืนยันตัวตน</b></h3>";
                                                              echo "<p>สำเนาบัตรประจำตัวประชาชน: </p>";
                                                      
                                                              echo "<img src='".base_url()."assets/img/member/MemberIdentification/".$value['img_copypersonalCardpath']."' style='width:auto;max-height:150px;' />"; //img_copypersonalCardperson
                                                              echo "<p>สำเนาทะเบียนบ้าน: </p>";
                                                              echo "<img src='".base_url()."assets/img/member/MemberPassport/".$value['img_copyhomeBookpath']."' style='width:auto;max-height:500px;' />"; //img_copyhomeBookpath
                                                              
                                                              echo "<p>เอกสารเพื่อสังคมในอดีต: "."<a href='".base_url()."assets/img/member/memberPDF/".$value['backgroundCrm_pdfpath']."'>".$value['member_name'].".pdf</a>"."</p>";

                            
                                                              
                                                          echo "</div>";
                                                          
                                                          //approve or un approve
                                                            if ($value['member_status']!="block"){
                                                              echo "<div style='float:right;width:100%;margin-top:10px;' onClick=\"blockStaff('".$value['member_id']."','block')\" ><input type='button' style='width:100%;'  class='btn btn-danger' value='บล็อคสมาชิก' /></div>";
                                                            }else{
                                                              echo "<div style='float:right;width:100%;margin-top:10px;' onClick=\"blockStaff('".$value['member_id']."','approve')\" ><input type='button' style='width:100%;'  class='btn btn-warning' value='ปลดบล็อคสมาชิก' /></div>";
                                                            }

                                                        echo "</div>";
                                                      echo "</td>";
                                                    echo "</tr>";
                                                  }
                                                }
                                    ?>

                            </tbody>
                        </table>

                    </div>

                  

                    <div style="float:right">
                           <?=$this->pagination->create_links();?>
                    </div>

                </div>
            </div>
          </div> 

        </div>
      </div>

    <!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->        
   <div class="clearfix"></div>

  
</div>


    
<script type="text/javascript">

  function blockStaff($member_id,$action){
    //alert($project_id+", "+$action);
    
    $.ajax({
      url: "http://localhost/haijai/managemember/blockmemberstafffunction",
      type:"POST",
      cache:false,
      data:{
        member_id: $member_id,
        action: $action,
      },
      dataType:"JSON",
      /*
      beforeSend: function (event, files, index, xhr, handler, callBack) {
        $.ajax({
          async: false,''
          url: 'http://sagaso.asia/dash/bugsafari' // add path
        });
      },
      */
      success:function(result){
        alert(result);
        window.location.reload();
      },
      error:function(err){
        alert("ERROR : "+err);
      }
                    
    });  
  

  }



</script>    
       

