<!DOCTYPE html>
<html lang="en">
  <head>
    
    <style>
      .styled-table {
          border-collapse: collapse;
          margin: 30px 30px;
          font-size: 0.9em;
          font-family: sans-serif;
          min-width: 400px;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      }
      
      
      .styled-table thead tr {
          background-color: #009879;
          color: #ffffff;
          text-align: left;
      }
      
      .styled-table th,
      .styled-table td {
          padding: 12px 15px;
      }
      
      .styled-table tbody tr {
          border-bottom: 1px solid #dddddd;
      }
      
      .styled-table tbody tr:nth-of-type(even) {
          background-color: #f3f3f3;
      }
      
      .styled-table tbody tr:last-of-type {
          border-bottom: 2px solid #009879;
      }
      
      .styled-table tbody tr.active-row {
          font-weight: bold;
          color: #009879;
      }
          </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main3.css" />
  </head>

  <body>
    <header class="header">
      <nav class="navbar navbar-style">
        <div class="container">
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#micon"
            >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#"
              ><img
                class="logo"
                src="css/images/download__4_-removebg-preview-removebg-preview.png"
                alt="logo"
            /></a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="btn" href="#">Home</a></li>
            <li><a class="btn" href="#">Login/Register</a></li>
            <li><a class="btn" href="#">About Us</a></li>
            <li><a class="btn" href="#">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>

      <div class="university-list">
        <div class="container1">
          <div class="tile">

            <?php
            include("Fetchdata.php");
            ?>
    
            </head>
            <body>
            <div class="container">
             <div class="row">
               <div class="col-sm-12">
                <?php echo $deleteMsg??''; ?>
                <div class="table-responsive">
                  <table  class="styled-table">
                   <thead><tr><th>S.N</th>
                     <th>Institute</th>
                     <th>State</th>
                     <th>Type</th>
                     <th>Affiliation</th>
                     <th>Program</th>
                     <th>Level</th>
                     <th>Course</th>
                     <th>Acredtill</th>
                     <th>Intake</th>
            
                </thead>
                <tbody>
              <?php
                  if(is_array($fetchData)){      
                  $sn=1;
                  foreach($fetchData as $data){
                ?>
                  <tr>
                  <td><?php echo $sn; ?></td>
                  <td><?php echo $data['Institute']??''; ?></td>
                  <td><?php echo $data['State']??''; ?></td>
                  <td><?php echo $data['Type']??''; ?></td>
                  <td><?php echo $data['Affiliation']??''; ?></td>
                  <td><?php echo $data['Program']??''; ?></td>
                  <td><?php echo $data['Level']??''; ?></td>
                  <td><?php echo $data['Course']??''; ?></td>  
                  <td><?php echo $data['Acredtill']??''; ?></td>  
                  <td><?php echo $data['Intake']??''; ?></td>  
            
            
                 </tr>
                 <?php
                  $sn++;}}else{ ?>
                  <tr>
                    <td colspan="8">
                <?php echo $fetchData; ?>
              </td>
                <tr>
                <?php
                }?>
                </tbody>
                 </table>
               </div>
            </div>
            </div>
            </div>
          </div>
        <!-- <div class="container1">
          <div class="tile">
            <h2>University 1</h2>
          </div>
        </div>
        <div class="container1">
          <div class="tile">
            <h2>University 2</h2>
          </div>
        </div>
        <div class="container1">
          <div class="tile">
            <h2>University 3</h2>
          </div>
        </div> -->
       
      </div>

        <span class="filter-heading">Filters</span><br /><br>
        <!-- <span class="filter-subheading">1. Select State</span><br />
        <span class="filter-subheading">2. Select Type</span><br />
        <span class="filter-subheading">3. Select Level</span><br /> -->
        <div class="state filter">
          <ul class="state-check">
            <li>
              <label>
                <input type="checkbox" id="state1" value="Andhra Pradesh" />
                Andhra Pradesh </label
              ><br />
              <label>
                <input type="checkbox" id="state2" value="Arunachal Pradesh" />
                Arunachal Pradesh </label
              ><br />
              <label>
                <input type="checkbox" id="state3" value="Assam" />
                Assam </label
              ><br />
              <label>
                <input type="checkbox" id="state4" value="Bihar" />
                Bihar </label
              ><br />
              <label>
                <input type="checkbox" id="state5" value="Chhattisgarh" />
                Chhattisgarh </label
              ><br />
              <label>
                <input type="checkbox" id="state6" value="Goa" />
                Goa </label
              ><br />
              <label>
                <input type="checkbox" id="state7" value="Gujarat" />
                Gujarat </label
              ><br />
              <label>
                <input type="checkbox" id="state8" value="Haryana" />
                Haryana </label
              ><br />
              <label>
                <input type="checkbox" id="state9" value="Himachal Pradesh" />
                Himachal Pradesh </label
              ><br />
              <label>
                <input type="checkbox" id="state10" value="Jammu and Kashmir" />
                Jammu and Kashmir </label
              ><br />
              <label>
                <input type="checkbox" id="state11" value="Jharkhand" />
                Jharkhand </label
              ><br />
              <label>
                <input type="checkbox" id="state12" value="Karnataka" />
                Karnataka </label
              ><br />
              <label>
                <input type="checkbox" id="state13" value="Kerala" />
                Kerala </label
              ><br />
              <label>
                <input type="checkbox" id="state14" value="Madhya Pradesh" />
                Madhya Pradesh </label
              ><br />
              <label>
                <input type="checkbox" id="state15" value="Maharashtra" />
                Maharashtra </label
              ><br />
              <label>
                <input type="checkbox" id="state16" value="Manipur" />
                Manipur </label
              ><br />
              <label>
                <input type="checkbox" id="state17" value="Meghalaya" />
                Meghalaya </label
              ><br />
              <label>
                <input type="checkbox" id="state18" value="Mizoram" />
                Mizoram </label
              ><br />
              <label>
                <input type="checkbox" id="state19" value="Nagaland" />
                Nagaland </label
              ><br />
              <label>
                <input type="checkbox" id="state20" value="Odisha" />
                Odisha </label
              ><br />
              <label>
                <input type="checkbox" id="state21" value="Punjab" />
                Punjab </label
              ><br />
              <label>
                <input type="checkbox" id="state22" value="Rajasthan" />
                Rajasthan </label
              ><br />
              <label>
                <input type="checkbox" id="state23" value="Sikkim" />
                Sikkim </label
              ><br />
              <label>
                <input type="checkbox" id="state24" value="Tamil Nadu" />
                Tamil Nadu </label
              ><br />
              <label>
                <input type="checkbox" id="state25" value="Telangana" />
                Telangana </label
              ><br />
              <label>
                <input type="checkbox" id="state26" value="Tripura" />
                Tripura </label
              ><br />
              <label>
                <input type="checkbox" id="state27" value="Uttar Pradesh" />
                Uttar Pradesh </label
              ><br />
              <label>
                <input type="checkbox" id="state28" value="Uttarakhand" />
                Uttarakhand </label
              ><br />
              <label>
                <input type="checkbox" id="state30" value="West Bengal" />
                West Bengal </label
              ><br />
              <label>
                <input
                  type="checkbox"
                  id="state31"
                  value="Andaman and Nicobar Islands"
                />
                Andaman and Nicobar Islands </label
              ><br />
              <label>
                <input type="checkbox" id="state32" value="Chandigarh" />
                Chandigarh </label
              ><br />
              <label>
                <input
                  type="checkbox"
                  id="state33"
                  value="Dadra and Nagar Haveli"
                />
                Dadra and Nagar Haveli </label
              ><br />
              <label>
                <input type="checkbox" id="state34" value="Daman and Diu" />
                Daman and Diu </label
              ><br />
              <label>
                <input type="checkbox" id="state35" value="Lakshadweep" />
                Lakshadweep </label
              ><br />
              <label>
                <input type="checkbox" id="state36" value="Delhi" />
                Delhi </label
              ><br />
              <label>
                <input type="checkbox" id="state37" value="Puducherry" />
                Puducherry </label
              ><br />
            </li>
          </ul>
        </div>

        <div class="level-filter">
          <input type="radio" id="level1" name="ug" value="ug" />
          <label for="ug">Under-Graduate</label><br>
          <input type="radio" id="level2" name="pg" value="pg" />
          <label for="pg">Post-Graduate</label><br>
          <input type="radio" id="level3" name="diploma" value="diploma" />
          <label for="diploma">Diploma</label><br>
          <input type="radio" id="level4" name="voc-course" value="voc-course" />
          <label for="voc-course">Vocational Courses</label><br>
        </div>

        <div class="level2-filter">
          <input type="radio" id="type1" name="autonomous" value="autonomous" />
          <label for="autonomous">Autonomous</label><br>
          <input type="radio" id="type2" name="Government" value="Government" />
          <label for="Government">Government</label><br>
          <input type="radio" id="type3" name="Private" value="Private" />
          <label for="Private">Private-Self financing</label><br>
          <input type="radio" id="type4" name="govt-aided" value="govt-aided" />
          <label for="govt-aided">Government Aided</label><br>
          <input type="radio" id="type5" name="deem" value="deem" />
          <label for="deem">Deemed to be University</label><br>
        </div>

      
      </div>




  </body>
</html>
