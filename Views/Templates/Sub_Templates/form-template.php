
<!-- to be dynamically input into desktop-template.php when
        the url contains a uri of scantron
 -->
<?php
$scantronForm = 

'
<h2>Scantron Order Form</h2>
 <form action="/?URI=email" method="POST">
    <input type="text" name="fName" placeholder="First Name" required>
    <input type="text" name="lName" placeholder="Last Name" required>
    <input type="text" name="orderQ" placeholder="Order Quantity" required>
    <input type="email" name="email" placeholder="Email@company.com" required>
    <input type="submit">
</form>
';

$mainPlaceHolder = $scantronForm;
$extraStyle = '<link rel="stylesheet" href="Views/CSS/form-template.css">';
