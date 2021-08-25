<div id="menu1" class="tab-pane fade">
      <center><h3>Add Property</h3></center>
      <div class="container">

      
<div id="map_canvas"></div>
        <form method="POST" enctype="multipart/form-data">
          <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
              <label for="country">Country:</label>
              <select class="form-control" name="country" required="required">
                                <option value="">--Select Country--</option>
                                <option value="Nepal">Nepal</option>
              </select>
            </div>
            <div class="form-group">
              <label for="province">Province/State:</label>
              <select class="form-control" name="province" required="required">
                                <option value="">--Select Province/State--</option>
                                <option value="Province No. 1">Province No. 1</option>
                                <option value="Province No. 2">Province No. 2</option>
                                <option value="Bagmati Pradesh">Bagmati Pradesh</option>
                                <option value="Gandaki Pradesh">Gandaki Pradesh</option>
                                <option value="Province No. 5">Province No. 5</option>
                                <option value="Karnali Pradesh">Karnali Pradesh</option>
                                <option value="Sudurpaschim Pradesh">Sudurpaschim Pradesh</option>
              </select>
            </div>
            <div class="form-group">
              <label for="zone">Zone:</label>
              <select class="form-control" name="zone" required="required">
                                <option value="">--Select Zone--</option>
                                <option value="Bagmati">Bagmati</option>
                                <option value="Bheri">Bheri</option>
                                <option value="Dhawalagiri">Dhawalagiri</option>
                                <option value="Gandaki">Gandaki</option>
                                <option value="Janakpur">Janakpur</option>
                                <option value="Karnali">Karnali</option>
                                <option value="Kosi">Kosi</option>
                                <option value="Lumbini">Lumbini</option>
                                <option value="Mahakali">Mahakali</option>
                                <option value="Mechi">Mechi</option>
                                <option value="Narayani">Narayani</option>
                                <option value="Rapti">Rapti</option>
                                <option value="Sagarmatha">Sagarmatha</option>
                                <option value="Seti">Seti</option>
                            </select>
            </div>
            <div class="form-group">
              <label for="district">District:</label>
              <select class="form-control" name="district" required="required">
                                %{--Mechi--}%
                                <option value="">--Select District--</option>
                                <option value="Taplejung">Taplejung</option>
                                <option value="Panchthar">Panchthar</option>
                                <option value="Ilam">Ilam</option>
                                <option value="Jhapa">Jhapa</option>
                                %{--Koshi--}%
                                <option value="Morang">Morang</option>
                                <option value="Sunsari">Sunsari</option>
                                <option value="Dhankutta">Dhankutta</option>
                                <option value="Sankhuwasabha">Sankhuwasabha</option>
                                <option value="Bhojpur">Bhojpur</option>
                                <option value="Terhathum">Terhathum</option>
                                %{--Sagarmatha--}%
                                <option value="Okhaldunga">Okhaldunga</option>
                                <option value="Khotang">Khotang</option>
                                <option value="Solukhumbu">Solukhumbu</option>
                                <option value="Udaypur">Udaypur</option>
                                <option value="Saptari">Saptari</option>
                                <option value="Siraha">Siraha</option>
                                %{--Janakpur--}%
                                <option value="Dhanusa">Dhanusa</option>
                                <option value="Mahottari">Mahottari</option>
                                <option value="Sarlahi">Sarlahi</option>
                                <option value="Sindhuli">Sindhuli</option>
                                <option value="Ramechhap">Ramechhap</option>
                                <option value="Dolkha">Dolkha</option>
                                %{--Bagmati--}%
                                <option value="Sindhupalchauk">Sindhupalchauk</option>
                                <option value="Kavreplanchauk">Kavreplanchauk</option>
                                <option value="Lalitpur">Lalitpur</option>
                                <option value="Bhaktapur">Bhaktapur</option>
                                <option value="Kathmandu">Kathmandu</option>
                                <option value="Nuwakot">Nuwakot</option>
                                <option value="Rasuwa">Rasuwa</option>
                                <option value="Dhading">Dhading</option>
                                %{--Narayani--}%
                                <option value="Makwanpur">Makwanpur</option>
                                <option value="Rauthat">Rauthat</option>
                                <option value="Bara">Bara</option>
                                <option value="Parsa">Parsa</option>
                                <option value="Chitwan">Chitwan</option>
                                %{--Gandaki--}%
                                <option value="Gorkha">Gorkha</option>
                                <option value="Lamjung">Lamjung</option>
                                <option value="Tanahun">Tanahun</option>
                                <option value="Tanahun">Tanahun</option>
                                <option value="Syangja">Syangja</option>
                                <option value="Kaski">Kaski</option>
                                <option value="Manag">Manag</option>
                                %{--Dhawalagiri--}%
                                <option value="Mustang">Mustang</option>
                                <option value="Parwat">Parwat</option>
                                <option value="Myagdi">Myagdi</option>
                                <option value="Myagdi">Myagdi</option>
                                <option value="Baglung">Baglung</option>
                                %{--Lumbini--}%
                                <option value="Gulmi">Gulmi</option>
                                <option value="Palpa">Palpa</option>
                                <option value="Nawalparasi">Nawalparasi</option>
                                <option value="Rupandehi">Rupandehi</option>
                                <option value="Arghakhanchi">Arghakhanchi</option>
                                <option value="Kapilvastu">Kapilvastu</option>
                                %{--Rapti--}%
                                <option value="Pyuthan">Pyuthan</option>
                                <option value="Rolpa">Rolpa</option>
                                <option value="Rukum">Rukum</option>
                                <option value="Salyan">Salyan</option>
                                <option value="Dang">Dang</option>
                                %{--Bheri--}%
                                <option value="Bardiya">Bardiya</option>
                                <option value="Surkhet">Surkhet</option>
                                <option value="Dailekh">Dailekh</option>
                                <option value="Banke">Banke</option>
                                <option value="Jajarkot">Jajarkot</option>
                                %{--Karnali--}%
                                <option value="Dolpa">Dolpa</option>
                                <option value="Humla">Humla</option>
                                <option value="Kalikot">Kalikot</option>
                                <option value="Mugu">Mugu</option>
                                <option value="Jumla">Jumla</option>
                                %{--Seti--}%
                                <option value="Bajura">Bajura</option>
                                <option value="Bajhang">Bajhang</option>
                                <option value="Achham">Achham</option>
                                <option value="Doti">Doti</option>
                                <option value="Kailali">Kailali</option>
                                %{--Mahakali--}%
                                <option value="Kanchanpur">Kanchanpur</option>
                                <option value="Dadeldhura">Dadeldhura</option>
                                <option value="Baitadi">Baitadi</option>
                                <option value="Darchula">Darchula</option>
                            </select>
            </div>
            <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
            </div>
            <div class="form-group">
              <label for="vdc/municipality">VDC/Municipality:</label>
              <select class="form-control" name="vdc_municipality">
                <option value="">--Select VDC/Municipality--</option>
                <option value="VDC">VDC</option>
                <option value="Municipality">Municipality</option>
              </select>

            </div>
            <div class="form-group">
              <label for="ward_no">Ward No.:</label>
              <input type="text" class="form-control" id="ward_no" placeholder="Enter Ward No." name="ward_no">
            </div>
            <div class="form-group">
              <label for="tole">Tole:</label>
              <input type="text" class="form-control" id="tole" placeholder="Enter Tole" name="tole">
            </div>
            <div class="form-group">
              <label for="contact_no">Contact No.:</label>
              <input type="text" class="form-control" id="contact_no" placeholder="Enter Contact No." name="contact_no">
            </div>
            <div class="form-group">
               <label for="property_type">Property Type:</label>
                <select class="form-control" name="property_type">
                      <option value="">--Select Property Type--</option>
                      <option value="Full House Rent">Full House Rent</option>
                      <option value="Flat Rent">Flat Rent</option>
                      <option value="Room Rent">Room Rent</option>
                </select>
            </div>                      
            <div class="form-group">
                <label for="estimated_price">Estimated Price:</label>
                <input type="estimated_price" class="form-control" id="estimated_price" placeholder="Enter Estimated Price" name="estimated_price">
            </div>
        </div>

        <div class="col-sm-6">
                  <div class="form-group">
                    <label for="total_rooms">Total No. of Rooms:</label>
                    <input type="number" class="form-control" id="total_rooms" placeholder="Enter Total No. of Rooms" name="total_rooms">
                  </div>
                  <div class="form-group">
                    <label for="bedroom">No. of Bedroom:</label>
                    <input type="number" class="form-control" id="bedroom" placeholder="Enter No. of Bedroom" name="bedroom">
                  </div>
                  <div class="form-group">
                    <label for="living_room">No. of Living Room:</label>
                    <input type="number" class="form-control" id="living_room" placeholder="Enter No. of Living Room" name="living_room">
                  </div>
                  <div class="form-group">
                    <label for="kitchen">No. of Kitchen:</label>
                    <input type="number" class="form-control" id="kitchen" placeholder="Enter No. of Kitchen" name="kitchen">
                  </div>
                  <div class="form-group">
                    <label for="bathroom">No. of Bathroom/Washroom:</label>
                    <input type="number" class="form-control" id="bathroom" placeholder="Enter No. of Bathroom/Washroom" name="bathroom">
                  </div>
                  <div class="form-group">
                    <label for="description">Full Description:</label>
                    <textarea type="comment" class="form-control" id="description" placeholder="Enter Property Description" name="description"></textarea>
                  </div>
                  <table class="table table-bordered" border="0">  
                  <tr> 
                    <div class="form-group"> 
                    <label><b>Latitude/Longitude:</b><span style="color:red; font-size: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *Click on Button</span></label>                    
                    <td><input type="text" name="latitude" placeholder="Latitude" id="latitude" class="form-control name_list" readonly required /></td>
                    <td><input type="text" name="longitude" placeholder="Longitude" id="longitude" class="form-control name_list" readonly required /></td> 
                    <td><input type="button" value="Get Latitude and Longitude" onclick="getLocation()" class="btn btn-success col-lg-12"></td>  
                  </div>
                  </tr>  
                </table>
                  <table class="table" id="dynamic_field">  
                  <tr> 
                    <div class="form-group"> 
                    <label><b>Photos:</b></label>                    
                    <td><input type="file" name="p_photo[]" placeholder="Photos" class="form-control name_list" required accept="image/*" /></td> 
                    <td><button type="button" id="add" name="add" class="btn btn-success col-lg-12">Add More</button></td>  
                  </div>
                  </tr>  
                </table>
                <input name="lat" type="text" id="lat" hidden>
                <input name="lng" type="text" id="lng" hidden>
                  <hr>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg col-lg-12" value="Add Property" name="add_property">
                  </div>
                </div>
              </div>
              </form>
              <br><br>

    </div>
    </div>




<script>
   if (status == google.maps.GeocoderStatus.OK) {
    map.setCenter(results[0].geometry.location);
    var marker = new google.maps.Marker;
    document.getElementById('lat').value = results[0].geometry.location.lat();
    document.getElementById('lng').value = results[0].geometry.location.lng();


   // add this
    var latt=results[0].geometry.location.lat();
    var lngg=results[0].geometry.location.lng();
    $.ajax({
        url: "your-php-code-url-to-save-in-database",
        dataType: 'json',
        type: 'POST',
        data:{ lat: lat, lng: lngg }
        success: function(data)
        {                
           //check here whether inserted or not 
        }
   });


 }
 </script>


 <script>
  //For Latitude and Longitude
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    document.getElementById("latitude").value = "Geolocation is not supported by this browser.";
    document.getElementById("longitude").value = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  document.getElementById("latitude").value = position.coords.latitude;
  document.getElementById("longitude").value = position.coords.longitude;
}
</script>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>