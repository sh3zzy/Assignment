<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="./donation.css">
<style>
body {
    font-family : Helvetica, sans-serif;
    margin: 0;  
  }

  h2 {text-align: center;}
  .header {
      padding: 60px;
      text-align: center;
      background: rgb(80, 16, 35);
      color: white;
      font-size: 35px;
  }

  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

  footer {
    text-align: center;
    padding: 3px;
    background-color: green;
    color: black;
  }
    </style>
    </head>
    <body>
    <div class="header">
  <h1>Purchase and Donation</h1>
</div>
<div class = "content" >
<img src="./hom1/fur.jpg"  style="width: 100%" >
</div>

<h2><b> Products available at Store </b></h2>
<br>
<h2><i> Wardrobe Available </i></h2>
<div class = "row">

<div class="card">
  <img src="./hom1/ts.jpg"  style="width:100%">
  <h1>T-Shirt Available</h1>
  <p class="price">Rs169.99</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="./hom1/jean.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Tailored Jeans</h1>
  <p class="price">Rs416.99</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="./hom1/watch.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Wrist-Watch</h1>
  <p class="price">Rs295.99</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="./hom1/hat.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Branded Cap</h1>
  <p class="price">Rs305.99</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button>Add to Cart</button></p>
</div>
</div>
<br>
<h2><i> House Wares Available </i></h2>
<div class = "row">

<div class="card">
  <img src="./hom1/scale.jpg"  style="width:100%">
  <h1>Scales Available</h1>
  <p class="price">Rs45.99</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="./hom1/can Openr.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Can Opener</h1>
  <p class="price">Rs330.99</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="./hom1/cooking wine.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Cooking Wine</h1>
  <p class="price">Rs296.99</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="./hom1/electric.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Electric Cooker</h1>
  <p class="price">Rs500.99</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button>Add to Cart</button></p>
</div>
</div>
<br>
<h2><b> Make Your Donation </b></h2>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">



<h2><i>Billing Form</i></h2>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <input type="text" id="country" name="lastname" placeholder="The country Name..">

    <label for="lname">Address</label>
    <input type="text" id="lname" name="lastname" placeholder="Your address..">

    <input type="submit" value="Submit">
  </form>
</div>
</br>
<div class="col-50">
            <h2><b>Payment Method</b></h2>
            <label for="fname">Accepted Cards</label>
            
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
                <input type="submit" value="Submit">
              </div>
            </div>
          </div>
        </div>
<footer>
<div class="footer-copyright text-center py-3">© 2022 Copyright: 
    <a href="https://www.srilankateaboard.lk/">Visit for more</a>
  </div>
</footer>


    </body>
</html>