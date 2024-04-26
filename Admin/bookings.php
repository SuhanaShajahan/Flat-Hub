<div class="container">
    <form action="bookingact.php" method="POST">>
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required>
    
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" required>
    
        <label for="email">Email </label>
        <input type="email" id="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@gmail\.com$">
      
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
    
        <label for="phoneno">Phone Number:</label>
        <input type="tel" id="phoneno" name="phoneno" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Format: 123-456-7890" required>
    
        <label>Number of Bathrooms:</label><br>
        <input type="radio" id="bathroom1" name="bathrooms" value="1">
        <label for="bathroom1">1 Bathroom</label><br>
        <input type="radio" id="bathroom2" name="bathrooms" value="2">
        <label for="bathroom2">2 Bathrooms</label><br>
        <input type="radio" id="bathroom3" name="bathrooms" value="3">
        <label for="bathroom3">3 Bathrooms</label><br>

        <label>Number of Bedrooms:</label><br>
        <input type="radio" id="bedroom1" name="bedrooms" value="1">
        <label for="bedroom1">1 Bedroom</label><br>
        <input type="radio" id="bedroom2" name="bedrooms" value="2">
        <label for="bedroom2">2 Bedooms</label><br>
        <input type="radio" id="bedroom3" name="bedrooms" value="3">
        <label for="bedroom3">3 Bedrooms</label><br>
        
        <label for="state">State:</label>
        <input type="text" id="state" name="state" required>

      

        <input type="submit" value="submit" name="submit">
    </form>
    </div>  